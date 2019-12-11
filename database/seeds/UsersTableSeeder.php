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
            'name' => 'Frey',
            'first_name' => 'Philippe',
            'email' => 'philippe.frey@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'AHMAT BRAHIM',
            'first_name' => 'Nour',
            'email' => 'nour.ahmat@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'comptable'

        ]);

    }
}
