$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
  $app->post('user','UserController@createUser');
  $app->put('user/{password}','UserController@updateUser');
    
  $app->delete('user/{emailAddress}','UserController@deleteUser');
  $app->get('user','UserController@index');
});
