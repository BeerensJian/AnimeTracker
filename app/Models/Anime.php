<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Anime extends Model
{
    use HasFactory;


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

}
