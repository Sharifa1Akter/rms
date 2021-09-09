<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Items;

class CategoryController extends Controller
{
    public function list()
    {
        $categories=Category::all();

       return view('backend.layouts.category.list',compact('categories') );
    }

    public function create()
    {
        return view('backend.layouts.category.create');
    }

    public function store(Request $request)
    {
       //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
        Category::create([
            'name'=>$request->cat_name,
            'food_no'=>$request->food_number,
        ]);

        return redirect()->route('category.list');
    }

    public function edit($id){

        $category = Category::find($id);

        return view ('backend.layouts.category.edit',compact('category'));
     }

     public function update(Request $request,$id)
     {
        // $request->validate([
        //     'name'=>'required',
        //     'food_no'=>'required',

        //  ]);


           $products =  Category::find($id);
           $products->name = $request->cat_name;
           $products->food_no = $request->food_number;



           $products->save();
           return redirect()->back()->with('message','Category Update sucessfully');

      }
      public function delete($id){
       // dd('ok');

        Category::find($id)->delete();

        return redirect(route('backend.layouts.category.list'))->with('msg','Delete Successfully.');
      }





    public function allItem($id)
    {
        $items=Items::where('category_id',$id)->get();
//        $category=Category::with('products')->find($id);//using relationshop
//        dd($products);

        return view('backend.layouts.category.item-list',compact('items'));
    }

}
