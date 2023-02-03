<?php

namespace App\Http\Controllers;
use App\Models\signup;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\continuecarttbl;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product=DB::select("SELECT continuecarttbls.id as id, products.name as Product_Name, products.image as Product_Image, continuecarttbls.name as Customer_Name, continuecarttbls.subtotal as Total , continuecarttbls.address as Address, continuecarttbls.number as Number , continuecarttbls.created_at as Order_Date FROM continuecarttbls JOIN products ON continuecarttbls.productid = products.id");
        return view('profile',compact('product'));
    }
    public function admin()
    {
        $user = User::count();
        return view ('dashboard',compact('user'));
  
    }
   
  
}
