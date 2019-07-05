<?php

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
        //Creo 10 usuarios
        factory(App\User::class, 10)->create();
        //Creo un usuario con mis datos
        App\User::create([
            'name' => 'Willian Zamalloa',
            'email' => 'wzamalloa@hotmail.com',
            'password' => bcrypt('123')
        ]);

    }
}
