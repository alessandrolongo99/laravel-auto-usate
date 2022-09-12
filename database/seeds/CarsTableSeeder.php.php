<?php

use App\Car;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
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
            $newCar->$name = $faker->words(1);
            $newCar->string('model');
            $newCar->string('color');
            $newCar->string('license_plate', 5);
            $newCar->integer('mileage');
            $table->

            $newCar->save();
        }
    }
}