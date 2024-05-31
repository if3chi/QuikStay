<?php

namespace App\Enums;

enum RoomType: string
{
    case Single = 'single';
    case Double = 'double';
    case Shared = 'shared';
    case Family = 'family';
    case Apartment = 'apartment';
    case Suite = 'suite';
}
