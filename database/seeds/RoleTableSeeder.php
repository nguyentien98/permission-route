<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Admin', 
            'Moderator',
            'User'
        ];
        foreach ($roles as $role) {
            Role::create([
                'role_name' => $role
            ]);
        }
    }
}
