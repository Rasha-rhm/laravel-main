<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\feedback;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function adminviewhome()
    {
        return view('adminhome');
    }

    public function custviewhome()
    {
        return view('customerhome');
    }
    public function viewBooking()
    {
        $bview=Order::where('status','=','Booked')->get();
        return view('booking',compact('bview'));
    }

    public function custpay(Request $request)
    {
        //$getamt=request('amount');
        return view('Payment');
    }

    public function cpayportal()
    {
        $logid=session::get('uid');
        $updt = DB::table('orders')
            ->where('orders.UserID','=',"$logid")
            ->update(['orders.status' => "Booked",'orders.payment_status' => "Paid"]);

        return redirect('/paysuccess');
    }

    public function psuccess()
    {
        return view('PaySuccess');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
    public function fView()
    {
        $User = feedback::all();
        return view('viewfeedback')->with('User',$User);
        //return view('management\viewfeedback');
    }
    public function fCreate()
    {
        return view('feedback');
    }
    public function fStore(Request $request)
    {
        $fbk=new feedback();
        $fbk->name=request('name');
        $fbk->email=request('email');
        $fbk->message=request('message');

        $fbk->save();
        echo "<script>alert('Feedback send successfully')</script>";
        return redirect('/CustHome');
    }
    
}
