<?php

use Illuminate\Database\Seeder;
use App\Professor;

class ProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Professor::truncate();
        factory(Professor::class, 50)->create();
    
    }
}
