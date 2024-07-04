<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // Role, Permission and User
    	$this->call([RoleTableSeeder::class]);
        $this->call([PermissionTableSeeder::class]);
        $this->call([CreateAdminUserSeeder::class]);
    }
}
