<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// per hashare la password
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //  creo uno user in modo da non dover tutte le volte fare una registrazione da zero
    public function run()
    {
        $user = new User;
        $user->name = 'bonvi';
        $user->email = 'prova@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

    }
}