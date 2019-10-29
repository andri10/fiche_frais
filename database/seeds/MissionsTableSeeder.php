<?php

use Illuminate\Database\Seeder;

class MissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('missions')->insert([
            'name' => 'Mission 01',
            'description' => 'lorem ipsum',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1
        ]);

        DB::table('missions')->insert([
            'name' => 'Mission 01',
            'description' => 'lorem ipsum',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 2
        ]);
    }
}
