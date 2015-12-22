<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Pessoa extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{

    use Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'pessoa';
    protected $primaryKey = 'id_pes';

    public function getAuthPassword(){
      return $this->senha_pes;
    }

    protected $fillable = ['nome_mes', 'email_mes', 'senha_pes'];

    protected $hidden = ['password', 'remember_token'];

    public function casal(){
      return $this->belongsTo('App\Casal', 'casal_id', 'id_casal');
    }

}
