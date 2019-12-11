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
            'description' => 'Déjeuner avec l\'équipe',
            'image' => 'defaultNote.svg',
            'start' => now(),
            'etat' => 'À vérifier',
            'created_at' => now(),
            'updated_at' => now(),
            'mission_id' => '1'
        ]);

        DB::table('notes')->insert([
            'title' => 'Hôtel',
            'pays' => 'FRANCE',
            'ttc' => 50,
            'description' => 'Héberger à l\'hôtel lors du déplacement à Paris',
            'image' => 'defaultNote.svg',
            'start' => now(),
            'etat' => 'À vérifier',
            'created_at' => now(),
            'updated_at' => now(),
            'mission_id' => '1'
        ]);
    }
}
