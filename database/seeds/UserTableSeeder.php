<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
         'name' => 'shariful islam',
         'email'=> 'sharifulislam310088@gmail.com',
         'password'=>bycrypt('12345678'),
        ]);
    }
}
