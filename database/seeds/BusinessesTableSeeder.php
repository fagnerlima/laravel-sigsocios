<?php

use Illuminate\Database\Seeder;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('businesses')->insert([
            'cnpj' => '11222333000166',
            'name' => 'Softwares SA',
        ]);

        DB::table('businesses')->insert([
            'cnpj' => '44555777000177',
            'name' => 'Brinquedos Ltda',
        ]);

        DB::table('businesses')->insert([
            'cnpj' => '11333999000188',
            'name' => 'Fast Food Fast',
        ]);
    }
}
