<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Delivery;
use App\Models\User;
class DeliverymanController extends Controller
{
    public function create(){
        return view ('backend.layouts.delivery.create');
    }
    public function list(){
        $list=User::where('role','delivery_man')->paginate(10);
        return view ('backend.layouts.delivery.list',compact('list'));
    }
    public function store(Request $request)
    {
    
      $data = User::create([
        'role'=>'delivery_man',
        'name' => $request->name,
        'mobile' => $request->phone_number,
        'email'=> $request->email,
        'password' =>$request->password,

        ]);



        return redirect()->route('delivery.list');

   }
}
