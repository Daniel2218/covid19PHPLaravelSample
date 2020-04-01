<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
  protected $table = 'cases';

  protected $fillable = ['province','city','age', 'travel_history'];
}
