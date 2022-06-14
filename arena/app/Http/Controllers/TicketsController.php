<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tickets;

class TicketsController extends Controller
{

    public function index()
    {
       $tickets = DB::table('tickets')->select('id','day','month','name','place','price')->get();
       //dd($tickets);

        return view('tickets')->with('tickets', $tickets);
     }

    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */

     function add(Request $request){

        //dd($request);
        $ticket = new tickets;
        $ticket->user_id="500";
        //$ticket->artist="Linda";
        $ticket->artist=$request->input('artist');
        $ticket->price=$request->input('price');
        $ticket->amount=$request->input('aantal');
        //  dd($request->input('name'));
        $ticket->day=$request->input('day');
        $ticket->month=$request->input('month');
       
        $ticket->save();

        return view('orderpage')->with('orders',$ticket)->with('ticket',$ticket);
     
        //return view('orderpage')->with('orders',$ticket);
     }

    function tickets(){
        return view('tickets');
    }
}



