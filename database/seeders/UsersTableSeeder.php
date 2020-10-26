<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     User::truncate();

     $admin = User::create([
         'name' => 'Admin User',
         'email' => 'admin@admin.com',
         'password' => Hash::make('adminas123')
     ]);

     $author = User::create([
        'name' => 'Author User',
        'email' => 'author@author.com',
        'password' => Hash::make('password')
    ]);

    $user = User::create([
         'name' => 'Paprastas User',
         'email' => 'user@user.com',
         'password' => Hash::make('password')
     ]);

    }
}