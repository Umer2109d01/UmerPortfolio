<?php

namespace App\Http\Controllers;
use App\Models\signup;
use DB;
use Illuminate\Http\Request;
use App\Models\User;
class signupcontroller extends Controller
{
    
public function insert(Request $req)
{
$user = new signup();
$user->Name=$req->uname;
$user->Number=$req->uemail;
$user->Email=$req->uemail;
$user->Password=$req->upassword;
$user->C_password=$req->ucpassword;
$user->Address=$req->uaddress;
$user->Dob=$req->udob;
$user->save();
// return Redirect::back();



}

public function showuser(){
    $data=User::all();
    return view ('user',compact('data'));
}
public function user_delete($id)
{
    $delete = DB::select("DELETE FROM `users` WHERE `users`.`id` = $id");
    return redirect()->back();
}



}