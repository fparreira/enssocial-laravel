<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{

  protected $table = 'provincia';
  protected $primaryKey = 'id_pro';

  public function regioes(){
    return $this->hasMany('App\Regiao', 'provincia_reg');
  }

}
