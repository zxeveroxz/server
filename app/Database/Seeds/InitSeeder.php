<?php

namespace App\Database\Seeds;
use Faker\Factory;

use CodeIgniter\Database\Seeder;

class InitSeeder extends Seeder
{
    public function run()
    {

        $faker = Factory::create();
        $paises = [];
        

        for($i=0;$i<15;$i++){
            $created_at = $faker->dateTime();
            $updated_at = $faker->dateTimeBetween($created_at);

            $paises[]=[
                'pais_nombre'=>$faker->country,
                'created_at'=>$created_at->format('Y-m-d H:i:s'),
                'updated_at'=>$updated_at->format('Y-m-d H:i:s')
            ];
        }

        $builder = $this->db->table('pais');
        $builder->insertBatch($paises);
      
    }
}
