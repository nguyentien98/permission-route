<?php

use Illuminate\Database\Seeder;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Admin', 'email' => 'admin@framgia.com', 'password' => 'framgia'], 
            ['name' => 'Moderator', 'email' => 'moderator@framgia.com', 'password' => 'framgia'], 
            ['name' => 'User', 'email' => 'user@framgia.com', 'password' => 'framgia'],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
