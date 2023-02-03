<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\contact;
class contactcontroller extends Controller
{
    public function coninsert(Request $req)
{
$user = new contact();
$user->Con_name=$req->Name;
$user->Con_email=$req->Email;
$user->Con_number=$req->Number;
$user->Con_message=$req->Message;

$user->save();
return redirect('contact');


}

public function conshow(){
    $message=contact::all();
    return view ('message',compact('message'));
}
public function conlocate(){
  
    return view ('contactus');
}

public function contact_delete($id)
{
    $delete = DB::select("DELETE FROM `contacts` WHERE `contacts`.`Cont_id` = $id");
    return redirect()->back();
}


}
