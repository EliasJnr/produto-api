<?php

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