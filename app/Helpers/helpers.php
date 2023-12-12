<?php

namespace App\Helpers;

function isAnime(string $anime): bool
{
    if ($anime === 'anime') {
        return true;
    }
    return false;
}
