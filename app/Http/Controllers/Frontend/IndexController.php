<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Items;

class IndexController extends Controller
{
    public function index(){
        $items=Items::latest()->get()->take(3);
        
        return view('frontend.layouts.index',compact('items'));
       // return view('frontend.layouts.index');

    }
   // public function items(){
        //return view('frontend.layouts.index');

  //  }
    
}
