<?php

namespace App\Http\Controllers;
use App\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view('layouts.main', compact('cars'));
    }
}
