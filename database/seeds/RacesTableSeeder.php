<?php

use App\Race;
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
        Race::truncate();
        Race::create(array('id' => 1, 'name' => 'Rally Talsi', 'date' => '2018-04-23', 'track_id' => 2 , 'Nm' => 50, 'champ_id' => 2));
        Race::create(array('id' => 2, 'name' => 'Rally Riga', 'date' => '2018-05-23', 'track_id' => 1 , 'Nm' => 40, 'champ_id' => 2));
        Race::create(array('id' => 3, 'name' => 'MInisoseja 1.posms', 'date' => '2018-04-20', 'track_id' => 1 , 'Nm' => 38, 'champ_id' => 1));
        Race::create(array('id' => 4, 'name' => 'MInisoseja 1.posms', 'date' => '2018-05-10', 'track_id' => 1 , 'Nm' => 39, 'champ_id' => 1));
    }
}
