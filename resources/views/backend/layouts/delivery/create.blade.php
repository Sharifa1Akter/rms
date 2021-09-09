@extends ('backend.master')
@section('content')


<div class="row justify-content-center">
    <div class="col-md-10">
        <h1>Delivery Man Form</h1>
        <form  action="{{ route('delivery.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name"> Type</label>
                <input name="role" type="text" class="form-control" id="type" value="delivery_man">
            </div>

            <div class="form-group">
                <label for="name"> Name</label>
                <input name="name"type="text" class="form-control" id="name" >
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input name="phone_number" type="number" class="form-control" id="phone_number" >
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
    </div>

    </div>
  @endsection