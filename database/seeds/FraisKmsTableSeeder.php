<?php

use Illuminate\Database\Seeder;

class FraisKmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frais_kms')->insert([
            'depart' => 'Strasbourg',
            'arrivee' => 'Paris',
            'trajets' => 398,
            'title' => 'Strasbourg - Paris',
            'description' => 'Déplacement en voiture pour aller à Paris',
            'image' => 'default.svg',
            'start' => now(),
            'arrival' => now(),
            'mission_id' => '1'
        ]);
    }
}
