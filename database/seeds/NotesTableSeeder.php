<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
            'title' => 'Déjeuner',
            'pays' => 'FRANCE',
            'ttc' => 75,
            'tva' => 10,
            'description' => 'Déjeuner avec l\'équipe',
            'image' => 'default.svg',
            'created_at' => now(),
            'updated_at' => now(),
            'mission_id' => '1'
        ]);

        DB::table('notes')->insert([
            'title' => 'Hôtel',
            'pays' => 'FRANCE',
            'ttc' => 50,
            'tva' => 0,
            'description' => 'Héberger à l\'hôtel lors du déplacement à Paris',
            'image' => 'default.svg',
            'created_at' => now(),
            'updated_at' => now(),
            'mission_id' => '1'
        ]);
    }
}
