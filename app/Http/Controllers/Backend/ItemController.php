<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
class ItemController extends Controller
{


 public function list()
    {
        //eager load
        //lazy load


        $items=Items::with('category')->paginate(10);
        //        dd($products);
                $categories=Category::all();
//        dd($products);

        return view('backend.layouts.items.list',compact('items'));
    }
    public function create()
    {
        $categories=Category::all();
        return view('backend.layouts.items.create',compact('categories'));
    }


    public function store(Request $request)

    {

        $fileName='';
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
           //generate file name here
            $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);
        }


//        dd($request->all());
       Items::create([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'price'=>$request->price,
            'details'=>$request->details,
            'image'=>$fileName
        ]);

        return redirect()->route('items.list');
    }
    /* @param $id
     * @return RedirectResponse
     */
    public function delete($id): RedirectResponse
    {
//        Product::destroy($id);
        $items=Items::find($id);
        if($items)
        {
            $items->delete();
            return redirect()->back()->with('message','Item Deleted successfully.');
        }
        return redirect()->back()->with('message','No item found to delete.');
    }


    public function edit($id)
    {
        $items=Items::find($id);
//        dd($product);
        $categories=Category::all();
        return view('backend.layouts.items.edit',compact('categories','items'));
    }

    public function update(Request $request,$id)
    {
//        dd($request->all());
        $items=Items::find($id);
        $items->update([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'price'=>$request->price,
            'details'=>$request->details,

        ]);

        return redirect()->route('items.list')->with('message','Item updated successfully.');
    }
}
