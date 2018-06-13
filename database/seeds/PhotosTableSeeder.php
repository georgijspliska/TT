<?php

use App\Photo;
use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::truncate();
        Photo::create(array('id' => 1, 'name' => 'test1', 'date' => '2018-04-23', 'description' => 'foto1', 'race_id' => 1));
        Photo::create(array('id' => 2, 'name' => 'test2', 'date' => '2018-04-23', 'description' => 'foto2', 'race_id' => 1));
        Photo::create(array('id' => 3, 'name' => 'test3', 'date' => '2018-05-23', 'description' => 'foto1', 'race_id' => 2));
        Photo::create(array('id' => 4, 'name' => 'test4', 'date' => '2018-05-23', 'description' => 'foto2', 'race_id' => 2));
        Photo::create(array('id' => 5, 'name' => 'test5', 'date' => '2018-04-20', 'description' => 'foto1', 'race_id' => 3));
        Photo::create(array('id' => 6, 'name' => 'test6', 'date' => '2018-04-20', 'description' => 'foto2', 'race_id' => 3));
        Photo::create(array('id' => 7, 'name' => 'test7', 'date' => '2018-05-10', 'description' => 'foto1', 'race_id' => 4));
        Photo::create(array('id' => 8, 'name' => 'test8', 'date' => '2018-05-10', 'description' => 'foto2', 'race_id' => 4));
    }


}
