<?php

use Illuminate\Database\Seeder;

class PetakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PetakModel::insert([
            [
              'id' => '1',
              'petak' => 'Hulu',

            ],
            [
                'id' => '2',
                'petak' => 'Tengah',
              ],
              [
                'id' => '3',
                'petak' => 'Hilir',
              ],
            ]);
    }
}
