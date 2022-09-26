<?php

use App\Model\Car;
use App\Optional;
use Illuminate\Database\Seeder;

class CarOptionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = Car::all();

        foreach ($cars as $car) {
           $randomOptionals = Optional::inRandomOrder()->limit(2)->get();

           foreach ($randomOptionals as $optional) {
                $car->optionals()->attach($optional->id);
           }
        }
    }
}
