<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casal extends Model
{
    protected $table = 'casal';
    protected $primaryKey = 'id_casal';

    public function equipe(){
      return $this->belongsTo('App\Equipe', 'equipe_cas', 'id_equipe');
    }

}
