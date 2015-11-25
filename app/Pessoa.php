<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoa';
    protected $primaryKey = 'id_pes';

    public function casal(){
      return $this->belongsTo('App\Casal', 'casal_id', 'id_casal');
    }

}
