<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: POST, GET, PUT,PATCH,OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

Route::group(array('prefix' => 'api'), function()
{

  Route::get('/', function () {
      return response()->json(['message' => 'Produto API', 'status' => 'Connected']);;
  });
 
  Route::resource('produto', 'ProdutoController');
});

Route::get('/', function () {
    return redirect('api');
});