<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $admin = User::create([
            'firstname' => 'Guillaume',
            'lastname' => 'LEFRANT',
            'birthday' => '1994-11-15',
            'email' => 'guillaume1.lefrant@epitech.eu',
            'password' => Hash::make('anzbevrc'),
        ]);

        $admin->attachRole(Role::where('name', 'admin')->first());
        $admin->attachRole(Role::where('name', 'commentator')->first());

        $blogger = User::create([
            'firstname' => 'Cintia',
            'lastname' => 'Ferreira',
            'birthday' => '1992-09-10',
            'email' => 'cintia.ferreira@epitech.eu',
            'password' => Hash::make('anzbevrc'),
        ]);

        $blogger->attachRole(Role::where('name', 'blogger')->first());
        $blogger->attachRole(Role::where('name', 'commentator')->first());
    }
}
