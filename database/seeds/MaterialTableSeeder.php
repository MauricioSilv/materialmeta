<?php

use Illuminate\Database\Seeder;
use App\Material;


class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        $material = new Material();

        $material->nome = 'Píncel';
        $material->quantidade = 5;
        $material->marca = 'Be 3300 Lu';
        $material->estado_material_id = 1;
        $material->tipo_material_id = 1;
        $material->save();
        
        
      
    }
}
