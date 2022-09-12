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
            $newCar->$brand = $faker->words(1);
            $newCar->$model = $faker->words(1);
            $newCar->$color = $faker->words(1);
            $newCar->$license_plate =$faker->regexify('[A-Z]{3}[0-4]{2}');
            $newCar->$mileage = $faker->words(1);

            $newCar->save();
        }
    }
}