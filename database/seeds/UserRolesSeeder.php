<?php

use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \HttpOz\Roles\Models\Role::create([
        'name' => 'Admin',
        'slug' => 'Admin',
    ]);
        \HttpOz\Roles\Models\Role::create([
        'name' => 'Employee',
        'slug' => 'Employee',
    ]);
        \HttpOz\Roles\Models\Role::create([
        'name' => 'member',
        'slug' => 'member',
    ]);
    }
}
