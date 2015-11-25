<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
    protected $table = 'regiao';
    protected $primaryKey = 'id_reg';

    public function provincia(){
      return $this->belongsTo('App\Provincia', 'provincia_reg', 'id_pro');
    }

    public function setores(){
      return $this->hasMany('App\Setor', 'regiao_set');
    }

}
