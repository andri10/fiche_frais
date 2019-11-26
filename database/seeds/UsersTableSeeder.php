<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'andri',
            'first_name' => 'jp',
            'email' => 'andri@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'max',
            'first_name' => 'dik',
            'email' => 'max@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'comptable'

        ]);

        DB::table('users')->insert([
            'name' => 'dax',
            'first_name' => 'set',
            'email' => 'dax@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
