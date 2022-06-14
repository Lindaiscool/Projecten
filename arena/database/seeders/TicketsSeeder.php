<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            'day'=>'03',
            'month'=>'jan',
            'name'=>'Linda',
            'place'=>'Amsterdam Arena',
            'price'=>'3'
            ]);
        DB::table('tickets')->insert([
            'day'=>'04',
            'month'=>'jan',
            'name'=>'Kevin',
            'place'=>'Gelredome',
            'price'=>'300'
                ]);
        DB::table('tickets')->insert([
            'day'=>'05',
            'month'=>'jan',
            'name'=>'Linda',
            'place'=>'Amsterdam Arena',
            'price'=>'3000'
                    ]);
    }
}
 