<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
class EmployeeController extends Controller
{
    public function list(){
        $list=Employee::paginate(5);
        $list=User::where('role','employee')->paginate(10);
        return view ('backend.layouts.employee.list',compact('list'));
    }

    public function create(){
        return view ('backend.layouts.employee.create');
    }

    public function store(Request $request)
    {



        $data = User::create([

            'role'=>'employee',
            'name' => $request->name,
            'mobile' => $request->phone_number,
            'email'=> $request->email,
            'password' =>$request->password,

            ]);


           return redirect()->route('employee.list');

     }
     public function edit($id){
        $employee= Employee::find ($id);
        return view ('backend.layouts.employee.edit',compact('employee'));
      }

      public function update(Request $request,$id){
        $empolyees->Employee::find($id);
        $employees->update([
            'role'=>'employee',
            'name' => $request->name,
            'mobile' => $request->phone_number,
            'email'=> $request->email,
            'password' =>$request->password,
        ]);
         return redirect()->back()->with('message','employee Update sucessfully');
      }
      public function delete($id)
      {
         Employee::find($id)->delete();

          return redirect(route('backend.layouts.employee.list'))->with ('msg','delete successfully');
      }
      public function view($id){
        $employees=Employee::find($id);
        return view ('backend.layouts.employee.view',compact('employees'));
      }

}
