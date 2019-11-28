<?php

use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('animals')->insert([
            'name' => 'tarzan',
            'description' => 'chien berger allemand ',
            'sexe' => 'male',
            'poids' => '15kg',
            'taille' => '100',
            'race_id' => '1',
        ]);

        DB::table('animals')->insert([
          'name' => 'cascabelle',
          'description' => "serpent a sonette, ne peut entendre lui-même le son qu'il produit : comme tous les serpents, il est sourd. La « sonnette » gagne un anneau à chaque mue3,2. Il est considéré comme l'un des serpents les plus dangereux du monde.",
          'sexe' => 'femele',
          'poids' => '10kg',
          'taille' => '250',
          'race_id' => '2',
      ]);
    }
}
