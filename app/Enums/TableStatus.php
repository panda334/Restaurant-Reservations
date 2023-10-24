<?php
namespace App\Enums;

enum TableStatus: string
{
    case Panding= 'panding';
    case Available= 'available';
    case Unvaliable= 'unvaliable';
}
