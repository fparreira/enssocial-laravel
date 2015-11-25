<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'setor';
    protected $primaryKey = 'id_set';

    public function regiao(){
      return $this->belongsTo('App\Regiao', 'regiao_set', 'id_reg');
    }

    public function equipes(){
      return $this->hasMany('App\Equipe', 'setor_equ');
    }

}
