<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
            "id",
            "title",
            "image",
            "description",
            "cost",
            "places"
    ];
}
