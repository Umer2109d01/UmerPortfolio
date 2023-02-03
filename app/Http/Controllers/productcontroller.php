<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use App\Models\continuecarttbl;
use Auth;
class productcontroller extends Controller
{
    public function pinsert(Request $request)
{
    $insert = new product;
    $insert->name = $request->pname;
    $insert->price = $request->pprice;
    $insert->quantity=$request->pquantity;
    $insert->type=$request->ptype;
    $insert->desc=$request->pdesc;
    $insert->cat_id=$request->pcategory;
    $image=$request->file('pimage');
    $extension = rand().".".$image->getClientOriginalName();
    $image->move('Product_image/',$extension);
    $insert->image=$extension;
    $insert->save();

    return redirect()->back() ->with('alert', 'Product Added');


}
public function plocate(){
  
$url=url('/addproduct');

$data=compact('url');

    return view ('addproduct')->with($data);
}

public function product_delete($id)
{
    $delete = DB::select("DELETE FROM `products` WHERE `products`.`id` = $id");
    return redirect()->back();
}
public function catshow1(){
    $catdata=category::all();
    return view ('update',compact('catdata'));
}
public function product_edit($id)
{
    $product = DB::select("DELETE FROM `products` WHERE `products`.`id` = $id");
    if(is_null($product)){

        return redirect('viewproduct');
    }
else{

$url=url('/update_product').'/'.$id;

    
    $catdata=product::all();
    return view ('update',compact('url','catdata'));
}
}

public function product_update(Request $request){

    $insert = DB::select("UPDATE FROM `products` WHERE `products`.`id`");
    $insert->name = $request->pname;
    $insert->price = $request->pprice;
    $insert->quantity=$request->pquantity;
    $insert->type=$request->ptype;
    $insert->desc=$request->pdesc;
    $insert->cat_id=$request->pcategory;
    $image=$request->file('pimage');
    $extension = rand().".".$image->getClientOriginalName();
    $image->move('Product_image/',$extension);
    $insert->image=$extension;
    $insert->save();
    
}

public function product(){
    $product1=product::all();
    return view ('update',compact('product1'));
}

public function showproduct(){
    $product=product::all();
    return view ('viewproduct',compact('product'));
}
public function allshowproduct(){
    $product=product::all();
    return view ('all',compact('product'));
}
public function laptopshowproduct(){
    $product= DB::table('products')->where('cat_id', '1')->get();
    return view ('laptop',['product' => $product]);
}
public function computershowproduct(){
    $product= DB::table('products')->where('cat_id', '2')->get();
    return view ('computer',['product' => $product]);
}
public function tabletshowproduct(){
    $product= DB::table('products')->where('cat_id', '3')->get();
    return view ('tablet',['product' => $product]);
}
public function accesshowproduct(){
    $product= DB::table('products')->where('cat_id', '4')->get();
    return view ('accessories',['product' => $product]);
}


    public function productList()
    {
        $products = Product::all();

        return view('cart', compact('products'));
    }
    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $product = product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function continuecart(Request $req)
    {
        $cart = new continuecarttbl;
        $cart->productid= $req->post("productid");
        $cart->name = Auth::User()->name;
        $cart->address= $req->post("address");
        $cart->number= $req->post("number");
        $cart->subtotal= $req->post("subtotal1");
       $cart-> address=$req->address;
        $cart->number=$req->number;
       
        $cart->save();
        return redirect()->back();

    }
    public function showorder(){
        $product=DB::select("SELECT continuecarttbls.id as id, products.name as Product_Name, products.image as Product_Image, continuecarttbls.name as Customer_Name, continuecarttbls.subtotal as Total , continuecarttbls.address as Address, continuecarttbls.number as Number , continuecarttbls.created_at as Order_Date FROM continuecarttbls JOIN products ON continuecarttbls.productid = products.id");
        return view ('order',compact('product'));
} 

// public function showuserorder(){
//     $product= DB::table('continuecarttbl')->where('cat_id', '4')->get();
//     return view ('userorder',['continuecarttbl' => $product]);
// }
public function showorder1(){
    $product1=continuecarttbl::find((auth()->user()->admin == 1));
    return view ('userorder',compact('product1'));
} 

public function order_delete($id)
{
    $delete = DB::select("DELETE FROM `continuecarttbls` WHERE `continuecarttbls`.`id` = $id");
    return redirect()->back();
}






}