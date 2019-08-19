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
 
  public function updateUser(Request $request, $emailAddress){
      $user  = User::find($emailAddress);
      $user->userName = $request->input('userName');
      $user->password = $request->input('password');
      $user->createdDate = $request->input('createdDate');
      $user->updatedDate = $request->input('updatedDate');
      $user->save()
 
      return response()->json($user);
  }  
  public function deleteUser($emailAddress){
      $user  = User::find($emailAddress);
      $user->delete();
 
      return response()->json('Removed successfully.');
  }
  public function index(){
 
      $users  = User::all();
 
      return response()->json($users);
 
  }
}

?>
