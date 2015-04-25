<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder {

    public function run() {

        DB::table('users')->truncate();

        App\User::create([
            'name'     => 'Petr',
            'email'    => 'preshetin@gmail.com',
            'password' => Hash::make('123456')
        ]);


        App\User::create([
            'name'     => 'foo',
            'email'    => 'foo@bar.com',
            'password' => Hash::make('123456')
        ]);

    }

}