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

    private $validationRules = [
        'title' => 'required|min:5|max:100',
        'price' => 'required',
        'description' => 'required|min:20|max:2000',
        'series' => 'required'
    ];

    public function getValidationRules() {
        return $this->validationRules;
    }
}

