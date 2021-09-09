@extends('backend.master')
@section('content')

<h1>Employee Form</h1>
        <form  action="{{ route('employee.store') }}" method="post">
            @csrf
         <div class="form-group">
                <label for="name"> Type</label>
                <input name="role" type="text" class="form-control" id="type" value="employee">
            </div>
            <div class="form-group">
                <label for="name"> Name</label>
                <input name="name"type="text" class="form-control" id="name" >
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input name="phone_number"type="number" class="form-control" id="phone_number" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email"type="email" class="form-control" id="email" >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password"type="password" class="form-control" id="password" >
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @endsection