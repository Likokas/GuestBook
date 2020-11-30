<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use phpseclib\Crypt\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Liko (Admin)';
        $user->email = 'likokas@admin.com';
        $user->password = \Illuminate\Support\Facades\Hash::make("12345678");
        $user->role_id = 1; #Admin
        $user->save();

        $user = new User();
        $user->name = 'Liko (Creator)';
        $user->email = 'likokas@creator.com';
        $user->password = \Illuminate\Support\Facades\Hash::make("12345678");
        $user->role_id = 2; #Creator
        $user->save();

        $user = new User();
        $user->name = 'Liko (User)';
        $user->email = 'likokas@user.com';
        $user->password = \Illuminate\Support\Facades\Hash::make("12345678");
        $user->role_id = 3; #User
        $user->save();

    }
}
