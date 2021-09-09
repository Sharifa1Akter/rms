<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Orders;

class OrderController extends Controller
{
    public function create(){
        return view ('backend.layouts.order.create');
    }
    public function list(){
        $page=Orders::paginate();
        // dd($page);
        return view ('backend.layouts.order.list',compact('page'));
    }
    public function store(Request $request){


          $orders = new Orders();
          $orders->total_discount = $request->total_discount;
          $orders->total = $request->total;
          $orders->total_payable = $request->total_payable;



          $orders->save();
          return redirect()->back()->with('message','Order added sucessfully');

    }


    public function view($id){

        $order = Orders::with('details')->find($id);

        return view ('backend.layouts.order.view',compact('order'));
      }

      public function edit($id){


        $order=Orders:find($id);
        return view ('backend.layouts.order.edit',compact('order'));
    }

    public function update(Request $request,$id){
       // dd($request->all());
        // $request->validate([
        //     'first_name'=>'required',
        //     'last_name'=>'required',
        //     'mobile'=>'required',
        //     'email'=>'required',
        //     'address'=>'required',

        //     'comment'=>'required',
        //  ]);


        $order = Orders::find($id);


       $order->first_name= $request->first_name;
        $order->last_name = $request->last_name;
        $order->mobile= $request->mobile;
        $order->email= $request->email;
        $order->address= $request->address;
        $order->status = $request->status;
        $order->comment = $request->comment;
        $order->save();
        return redirect()->back()->with('message','Product Update sucessfully');

     }
     public function invoice($id){
        $order=Order::find($id);

         return view ('backend.layouts.order.invoice',compact('order'));


    //      $cart=session('cart');

    //      foreach($cart as $data)
    //      {

    //          OrderDetails::create([

    //                 'order_id'=>$data['id'],
    //                  'item_id'=>$data['id'],
    //                  'quantity'=>$data['quantity'],
    //                  'price'=>$data['price'],
    //                  'sub_total'=>$data['sub_total']
    //          ]);

    //  }
    }
}


