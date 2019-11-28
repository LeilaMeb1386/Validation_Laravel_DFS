<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name','classification', 'esperence_vie',
  ];

  public function Animal()
  {
  return $this->hasMany('App\Animal');
  }
}
