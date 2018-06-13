<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
  public function track() {
      return $this->belongsTo('App\Track');
  }

  public function champ() {
      return $this->belongsTo('App\Champ');
  }

  public function photos() {
      return $this->hasMany('App\Photo');
  }

  public function images() {
      return array(
          'server_path' => public_path().'/uploads/',
          'asset_path' => 'uploads/',
          'image_small' => $this->champ_id.'_champ.jpg',
      );
  }
}
