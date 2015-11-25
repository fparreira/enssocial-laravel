<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $table = 'equipe';
    protected $primaryKey = 'id_equipe';

    public function setor(){
      return $this->belongsTo('App\Setor', 'setor_equ', 'id_set');
    }

    public function casais(){
      return $this->hasMany('App\Casal', 'equipe_cas');
    }

}
