$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
  $app->post('user','CarController@createCar');
  $app->put('user/{id}','CarController@updateCar');
    
  $app->delete('user/{id}','CarController@deleteCar');
  $app->get('user','CarController@index');
});
