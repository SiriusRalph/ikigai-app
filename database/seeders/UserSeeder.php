<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userObj = new User();
        $userObj->name = 'user';
        $userObj->email = 'user@gmail.com';
        $userObj->password = Hash::make('useruser');
        $userObj->type = 0;
        $userObj->save();

        $expertObj = new User();
        $expertObj->name = 'expert';
        $expertObj->email = 'expert@gmail.com';
        $expertObj->password = Hash::make('expertexpert');
        $expertObj->type = 1;
        $expertObj->save();

        $adminObj = new User();
        $adminObj->name = 'admin';
        $adminObj->email = 'admin@gmail.com';
        $adminObj->password = Hash::make('adminadmin');
        $adminObj->type = 2;
        $adminObj->save();

    }
}
