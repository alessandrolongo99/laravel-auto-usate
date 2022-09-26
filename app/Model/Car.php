<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
        /**
     * Undocumented variable
     *
     * @var array
     */
    protected $fillable = [
        'brand',
        'model',
        'color',
        'license_plate',
        'mileage',
    ];

    public function optionals(){
        return $this->belongsToMany('App\Optional');
    }
}
