<?php

use App\Champ;
use Illuminate\Database\Seeder;

class ChampsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Champ::truncate();
        Champ::create(array('id' => 1, 'name' => 'Minisoseja', 'type' => 'Autososeja', 'standing' => '1.KP - 20 p 2. TC - 15p 3. gh -10p'));
        Champ::create(array('id' => 2, 'name' => 'Minirally', 'type' => 'Rally', 'standing' => '1.gt - 5 2. hy -3p 3. hj -1p'));   
    }
}
