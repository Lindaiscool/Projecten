<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function select()
    {
        $orders = DB::table('orders')->select('id','user_id','artist','price','amount')->get();
        $ticket = DB::table('tickets')->select('*')->get();
        return view('orderpage')->with('orders', $orders)->with('ticket',$ticket);
      
    } 
    
    function save(Request $request){
        if (Auth::check()){
        $order = new orders;
        // $request->user()->id;
        $order->user_id=$request->user()->id;
        $order->artist=$request->input('artist');
        $order->amount=$request->input('amount');

        $order->save();
        return redirect('/')->withSuccess('Succes!');
        } else{
            return redirect('tickets')->withSuccess('Succes!');
        }
    }

    function index()
    {
        return view('orderpage');
    }
      
}
 
