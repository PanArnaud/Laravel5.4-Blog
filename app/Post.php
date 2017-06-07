<?php

namespace App;

use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function getCreatedAtAttribute($date)
  {
      return Date::parse($date)->format('j F Y');
  }

  public function getUpdatedAtAttribute($date)
  {
      return Date::parse($date)->format('j F Y');
  }
}
