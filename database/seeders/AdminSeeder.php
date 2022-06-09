<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = collect([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'password' => 'bioplastik_hore',
            ]
        ]);

        $users->each(function ($user){
            User::firstOrCreate([
                'username' => $user['username'],
            ],[
                'password' => Hash::make($user['password']),
                'name' => $user['name'],
            ]);
        });
    }
}
