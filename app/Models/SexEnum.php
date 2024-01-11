<?php

namespace App\Models;

enum SexEnum: string
{
    case Male = "male";
    case Female = "female";
    case Other = "other";
}
