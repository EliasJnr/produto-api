<?php

Route::group(array('prefix' => 'api', 'middleware' => 'cors'), function()
{

  Route::get('/',['middleware' => 'cors', function () {
      return response()->json(['message' => 'Produto API', 'status' => 'Connected']);;
  }]);

  Route::resource('produto', 'ProdutoController');
});

Route::get('/', function () {
    return redirect('api');
});