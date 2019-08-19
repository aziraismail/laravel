<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class UserController extends Controller{
  public function createUser(Request $request){
 
      $user = User::create($request->all());
 
      return response()->json($user);
 
  }
 
  public function updateUser(Request $request, $emailAdd){
      $user  = User::find($emailAdd);
      $user->username = $request->input('username');
      $user->password = $request->input('password');
      $user->createdDate = $request->input('createdDate');
      $user->updatedDate = $request->input('updatedDate');
      $user->save()
 
      return response()->json($user);
  }  
  public function deleteUser($emailAdd){
      $user  = User::find($emailAdd);
      $user->delete();
 
      return response()->json('Removed successfully.');
  }
  public function index(){
 
      $users  = User::all();
 
      return response()->json($users);
 
  }
}

?>
