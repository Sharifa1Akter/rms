@extends('backend.master')
@section('content')

    


        <h1>Category Form</h1>
        <form  action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input name="cat_name"type="text" class="form-control" id="name" >

            </div>
            <div class="form-group">
                <label for="name">Food</label>
                <input name="food_number"type="number" class="form-control" id="name" >
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
   
  @endsection