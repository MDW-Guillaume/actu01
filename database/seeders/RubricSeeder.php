<?php

namespace Database\Seeders;

use App\Models\Rubric;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RubricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = ['A ne pas manquer','Culture','Politique','Faits divers','Éducation','Sortie','Sciences','Sports','Économie'];
        // Rubric::factory()->count(8)->create();
        
        foreach ($categories as $categorie) {
            \App\Models\Rubric::create(
                ['name' => $categorie]
            );    
        }
    }
}
