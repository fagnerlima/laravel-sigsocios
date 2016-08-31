<?php

use Illuminate\Database\Seeder;

class AssociatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('associates')->insert([
            'cpf' => '11122233344',
            'name' => 'Steve Jobs',
            'email' => 'steve@brinquedos.com',
            'business_id' => 2
        ]);

        DB::table('associates')->insert([
            'cpf' => '22233344455',
            'name' => 'Deitel',
            'email' => 'deitel@softwares.com',
            'business_id' => 1
        ]);

        DB::table('associates')->insert([
            'cpf' => '33344455566',
            'name' => 'Bill Gates',
            'email' => 'bill@fastfoodfast.com',
            'business_id' => 3
        ]);

        DB::table('associates')->insert([
            'cpf' => '44433322211',
            'name' => 'Stallings',
            'email' => 'stallings@softwares.com',
            'business_id' => 1
        ]);

        DB::table('associates')->insert([
            'cpf' => '55533366611',
            'name' => 'Linus Torvalds',
            'email' => 'linus@brinquedos.com',
            'business_id' => 2
        ]);
    }
}
