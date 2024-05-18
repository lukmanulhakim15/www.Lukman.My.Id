<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username'=>'lukman',
                'name'=>'lukman',
                'email'=>'lukman@gmail.com',
                'level'=>'admin',
                'password'=>Hash::make('lukman123')
            ],
            
            [
                'username'=>'user1',
                'name'=>'AkunUser1',
                'email'=>'user1@gmail.com',
                'level'=>'user',
                'password'=>Hash::make('123456')
            ],
        

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
