<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\category;
class categorycontroller extends Controller
{
    public function catinsert(Request $req)
    {
        $category = new category();
        $category->cat_name=$req->catname;
        $category->save();
        return Redirect::back();
    }
    public function catlocate(){
  
        return view ('addcategory');
    }
    public function catshow(){
        $catdata=category::all();
        return view ('addproduct',compact('catdata'));
    }
    public function catshow1(){
        $catdata=category::all();
        return view ('update',compact('catdata'));
    }
    
}
