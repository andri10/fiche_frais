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
            'ttc' => 50,
            'title' => 'Strasbourg - Paris',
            'description' => 'Déplacement en voiture pour aller à Paris',
            'image' => 'defaultFraisKM.svg',
            'start' => now(),
            'arrival' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'mission_id' => '1'
        ]);
    }
}
