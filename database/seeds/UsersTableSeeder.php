<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$bfRtQPxybFNRkl7c8wnKYOAam0NbU8GnXwD9JEvj/LC8fOu4LRAwq', // admin
            'remember_token' => str_random(10),
            'role' => 'ADMIN',
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => '$2y$10$uggC8Yzdt6VN/rLJL86VSe8wPP4qX6Jhk39qq3MCUalpP73zTjqje', // guest
            'remember_token' => str_random(10),
            'role' => 'USER',
        ]);
    }
}
