<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,10)->create();

        factory(User::class)->create([
            'name' => 'Rodrigo Angelo',
            'email' => 'rodrigoangelovalentini@gmail.com',
            'password' => bcrypt('1234')
        ]);

        factory(User::class)->create([
            'name' => 'Rodrigo Valentini',
            'email' => 'rodrigoangelovalentini@hotmail.com',
            'password' => bcrypt('1234')
        ]);
    }
}
