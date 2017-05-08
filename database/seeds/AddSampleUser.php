<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AddSampleUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    // 1. query the Roles by the slug
    $adminRole = \HttpOz\Roles\Models\Role::whereSlug('Admin')->first();
    $employeeRole = \HttpOz\Roles\Models\Role::whereSlug('Employee')->first();
    $memberRole = \HttpOz\Roles\Models\Role::whereSlug('Member')->first();

    // 2a. Create admin
    $admin = \App\User::create([
        'name' => 'Kanutm Setasathian',
        'email' => 'infatuated01@github.com',
        'address' => 'Bangkok eiei',
        'birthdate'=> Carbon::create(1995, 03, 31),
        'password' => bcrypt('password')
    ]);

    // 2b. Create forum moderator
    $moderator = \App\User::create([
        'name' => 'Kanutms Setasathians',
        'email' => 'infatuated02@github.com',
        'address' => 'Bangkok eieiza',
        'birthdate'=> Carbon::create(1995, 03, 31),
        'password' => bcrypt('password')
    ]);

    $member = \App\User::create([
        'name' => 'Kanutmss Setasathianss',
        'email' => 'infatuated03@github.com',
        'address' => 'Bangkok eieizaza',
        'birthdate'=> Carbon::create(1995, 03, 31),
        'password' => bcrypt('password')
    ]);

    // 3. Attach a role to the user object / assign a role to a user
    // $admin->attachRole($adminRole);
    // $moderator->attachRole($employeeRole);
    // $member->attachRole($memberRole);
    DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
    DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2,
        ]);

    DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 3,
        ]);
    }
}
