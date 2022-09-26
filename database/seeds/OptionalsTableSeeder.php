<?php

use App\Optional;
use Illuminate\Database\Seeder;

class OptionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionals = [
            'cambio automatico',
            'sensore di parcheggio',
            'sedili riscaldati',
            'fari full-led',
            'connettività bluethoot'
        ];

        foreach($optionals as $optional){
            $newOptional = new Optional();
            $newOptional->name = $optional;
            $newOptional->save();
        }
    }
}
