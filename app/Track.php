<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
  public function races() {
      return $this->hasMany('App\Race');
  }
  public function images() {
      return array(
          'server_path' => public_path().'/uploads/',
          'asset_path' => 'uploads/',
          'image' => $this->id.'_track.jpg',
          'image_layout' => $this->id.'_layout.jpg'
      );
  }
}
