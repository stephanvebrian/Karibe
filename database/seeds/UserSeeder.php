<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "id" => 1,
            "email" => "admin@karibe.com",
            "username" => "Admin000",
            "first_name" => "Admin",
            "last_name" => "Ganteng",
            "age" => "20",
            "about_me" => "Admin Ganteng V000",
            "gender" => "other",
            "phone" => "081234567891",
            "password" => Hash::make("admin"),
            "role" => "Admin",
        ]);
    }
}
