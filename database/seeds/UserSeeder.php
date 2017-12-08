<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'      => 'Lucas Sena',
            'email'     => 'lucassena.rj@gmail.com',
            'password'  => Hash::make('admin'),
        ]);
    }
}
