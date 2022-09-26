<?php

use Faker\Generator as Faker;
use App\Model\Car;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0;$i < 40; $i++){
            $newCar = new Car();
            $newCar->brand = $faker->name(10);
            $newCar->model = $faker->realText(20);
            $newCar->color = $faker->colorName();
            $newCar->license_plate = $faker->bothify('#?#??');
            $newCar->mileage = $faker->randomNumber(1,200000);

            $newCar->save();
        }
    }
}