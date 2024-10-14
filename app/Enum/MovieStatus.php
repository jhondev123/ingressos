<?php

namespace App\Enum;

enum MovieStatus :string
{
    case NOW_SHOWING = 'now_showing';
    case COMING_SOON = 'coming_soon';
    case FINISHED = 'finished';

}
