<?php

namespace App\Enum;
enum AnimeStatus : string
{
    case Watching = "Watching";
    case PlanningToWatch = "Planning to Watch";
    case Finished = "Finished";
    case Dropped = "Dropped";
    case Archived = "Archived";
}
