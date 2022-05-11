<?php

namespace App;

use Faker\Provider\Lorem;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type',
    ];
}

