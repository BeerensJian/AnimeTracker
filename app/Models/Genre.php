<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function animes(): BelongsToMany
    {
        return $this->belongsToMany(Anime::class);
    }
}
