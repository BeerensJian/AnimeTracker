<?php

namespace App\Models;

use App\Enum\AnimeStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ListItem extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'status' => AnimeStatus::class
    ];

    public function getPreferredTitleAttribute()
    {
        // TODO: handle this based on user preference

        return $this->title_en ?: $this->title_jp;
    }

    // whenever the rating value is set, make sure it's not above 10
    protected function rating(): Attribute
    {
        return Attribute::make(
            set: fn($value) => min($value, 10)
        );
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
