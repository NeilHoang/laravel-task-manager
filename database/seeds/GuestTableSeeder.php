<?php

use Illuminate\Database\Seeder;

class GuestTableSeeder extends Seeder
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
        $user->role = \App\Http\Controllers\RoleConstant::ADMIN;
        $user->save();
        
        
        $user = new \App\User();
        $user->name = 'guest';
        $user->email = 'guest@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('12345678');
        $user->role = \App\Http\Controllers\RoleConstant::GUEST;
        $user->save();
    }
}
