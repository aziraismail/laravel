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
 
      $users = User::create($request->all());
 
      return response()->json($users);
 
  }
 
  public function updateUser(Request $request, $emailAddress){
      $users  = User::find($email_add);
      $users->username = $request->input('username');
      $users->password = $request->input('password');
      $users->createdDate = $request->input('createdDate');
      $users->updatedDate = $request->input('updatedDate');
      $users->save()
 
      return response()->json($users);
  }  
  public function deleteUser($emailAddress){
      $users  = User::find($emailAddress);
      $users->delete();
 
      return response()->json('Removed successfully.');
  }
  public function index(){
 
      $users  = User::all();
 
      return response()->json($users);
 
  }
}

?>
