<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      $this->call(UsersTableSeeder::class);
      $this->call(RacesTableSeeder::class);
      $this->call(ChampsTableSeeder::class);
      $this->call(TracksTableSeeder::class);
      $this->call(PhotosTableSeeder::class);
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
