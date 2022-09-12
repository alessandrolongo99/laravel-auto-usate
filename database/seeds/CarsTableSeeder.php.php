<?php

use App\Car;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0;$i < 40; $i++){
            $newCar = new Car();
            $newCar->brand = 'dadsa';
            $newCar->model = 'dadsa';
            $newCar->color = 'dsdad';
            $newCar->license_plate = 'SDA35';
            $newCar->mileage = '6';

            $newCar->save();
        }
    }
}