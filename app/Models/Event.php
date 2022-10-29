<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "status",
        "start_date",
        "end_date",
        "all_day",
        "country",
        "city",
        "state",
    ];
}