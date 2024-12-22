<?php

namespace App\Services;

enum Status: int
{
    case Fillup = 1;
    case Requirement = 2;
    case Review = 3;
    case Scheduled = 4;
    case Evaluation = 5;
    case Recommendation = 6;
    case Admitted = 7;
    case Denied = 8;
    case ReqAccepted = 9;
}