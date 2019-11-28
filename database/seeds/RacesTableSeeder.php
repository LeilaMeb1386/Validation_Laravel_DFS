<?php

use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
          'name' => 'chat',
          'classification' => 'mammifères',
          'esperence_vie' => '15ans',
      ]);

        DB::table('races')->insert([
          'name' => 'serpent',
          'classification' => 'reptiles',
          'esperence_vie' => '2 ans',
      ]);

        DB::table('races')->insert([
          'name' => 'rat',
          'classification' => 'rongeurs',
          'esperence_vie' => '3 ans',
      ]);
    }
}
