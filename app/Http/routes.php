$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
  $app->post('users','UserController@createUser');
  $app->put('users/{password}','UserController@updateUser');
    
  $app->delete('users/{email_add}','UserController@deleteUser');
  $app->get('users','UserController@index');
});
