<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;
use Illuminate\Support\Facades\DB;
use App\Models\cart;
use App\Models\Order;

use Session;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itms=ItemModel::all();
    return view('item',compact('itms'));

    }

    public function viewM()
    {
        $itms=ItemModel::all();
    return view('menu',compact('itms'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getimage=$request->file('image');
        $name=$getimage->getClientOriginalName();
        
        $getimage->move(public_path('assets/product_img'), $name);

        $getid=request('code');
        $getname=request('name');
        $getprice=request('price');
       
        echo "<br>";
        echo $getid;
        echo "<br>";
        echo $getname;
        echo "<br>";
        echo $getprice;

        $itm = new ItemModel();
        $itm->ItemID=$getid;
        $itm->ItemName=$getname;
        $itm->Image=$name;
        $itm->Price=$getprice;
        $itm->save();

        return redirect('/viewItem');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itms=ItemModel::find($id);
        return view('EditItem',compact('itms'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $getimage=$request->file('image');
        $name=$getimage->getClientOriginalName();
        
        $getimage->move(public_path('assets/product_img'), $name);

        $getname=request('name');
        $getprice=request('price');
       
        echo "<br>";
        
        echo "<br>";
        echo $getname;
        echo "<br>";
        echo $getprice;

        $itm =  ItemModel::find($id);
        $itm->ItemName=$getname;
        $itm->Image=$name;
        $itm->Price=$getprice;
        $itm->save();

        return redirect('/viewItem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

public function del($id)
    {
        $s=DB::table('item_models')
                ->where('id',$id)
                ->delete();
        return redirect('/viewItem');
    }

function addToCart(Request $req)
{
    if($req->session()->has('user'))
    {
      $cart= new cart;
      $cart->UserID=$req->session()->get('uid');    //retrieving the id of the user logged in
      $cart->ItemID=$req->ItemID;
      $cart->save();
      return redirect('/menu');
    }
   else
   {
       return redirect('/login');
   }
}
static function cartItem()
{
    $userID=Session::get('uid');
    return cart::where('UserID',$userID)->count();
}
function cartList()
{
    $userID=session::get('uid');
    $items= DB::table('cart')
    ->join('item_models','cart.ItemID','=','item_models.id')
    ->where('cart.UserID',$userID)
    ->select('item_models.*','cart.id as cartid')
    ->get();

    return view('cartlist',['items'=>$items]);
}
function removeCart($id)
{
    cart::destroy($id);
    return redirect('cartlist');
}
function orderNow()
{
    $userID=session::get('uid');
    $total= DB::table('cart')
    ->join('item_models','cart.ItemID','=','item_models.id')
    ->where('cart.UserID',$userID)
    ->select('item_models.*','cart.id as cartid')
    ->sum('item_models.price');

    return view('ordernow',['total'=>$total]);
}
function orderPlace(Request $req)
{
    $userID=session::get('uid');
   $allcart= cart::where('UserID',$userID)->get();
    foreach($allcart as $cart)
    {
        $order= new Order;
        $order->ItemID=$cart['ItemID'];
        $order->UserID=$cart['UserID'];
        $order->status="pending";
        $order->payment_method=$req->payment;
        $order->payment_status="pending";
        $order->address=$req->address;
        $order->save();
        cart::where('UserID',$userID)->delete();
    }
    $req->input();
    return redirect('/payment');
}
}