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
        $user = new \App\User();
        $user->name = 'hoang';
        $user->email = 'hoang@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('12345678');
        $user->save();
    }
}
