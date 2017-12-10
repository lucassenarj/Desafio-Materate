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
            'name'      => 'Test User',
            'email'     => 'test@test.com',
            'password'  => Hash::make('admin'),
        ]);
    }
}
