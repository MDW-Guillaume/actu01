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
        Rubric::factory()->count(8)->create();
    }
}
