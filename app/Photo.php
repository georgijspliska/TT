<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  public function race() {
      return $this->belongsTo('App\Race');
  }
  public function images() {
      return array(
          'server_path' => public_path().'/uploads/',
          'asset_path' => 'uploads/',
          'image' => $this->id.'_photo.jpg'
      );
  }

}
