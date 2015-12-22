<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/pessoa', function(){
  echo "<pre>";
  var_dump(get_class_methods('App\Pessoa'));
  echo "</pre>";
});


Route::get('/', 'PrincipalController@login');

//Route::get('/auth',['as'=>'autenticacao', 'uses'=>'AutenticaController@login']);



Route::get('/auth', function(){

  $teo = App\Pessoa::find(2);
  //Auth::login($teo);


  echo '<pre>';
  var_dump($teo->getAuthPassword());
  var_dump($teo->email_pes);
  var_dump($teo->senha_pes);
  echo '</pre>';



  //Auth::logout();

  //var_dump(Auth::check());

  //var_dump(App\Pessoa::all());


  var_dump(Auth::attempt(['email_pes'=>'ljteodoro@hotmail.com', 'password'=>'123']));
/*
  if(Auth::attempt(['email_pes'=>'ljteodoro@hotmail.com', 'password'=>'123'])){
    return "funcionou !! voce esta logado !! ";
  }

  return "Falhou :(";
*/
});



Route::group(['prefix'=>'user', 'middleware'=>'auth'], function(){
    Route::get('',['as'=>'user', 'uses'=>'PrincipalController@user']);
});
