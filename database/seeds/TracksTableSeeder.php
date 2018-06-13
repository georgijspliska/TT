<?php

use App\Track;
use Illuminate\Database\Seeder;

class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Track::truncate();
        Track::create(array('id' => 1, 'name' => 'Bikernieki', 'type' => 'Asphalt', 'location' => 'Riga', 'lenght' => '2.2', 'turns' => 15, 'record' => '1.15.407'));
        Track::create(array('id' => 2, 'name' => 'Talsi', 'type' => 'Gravel', 'location' => 'Talsi', 'lenght' => '17.56', 'turns' => 105, 'record' => '8.48.758'));
    }
}
