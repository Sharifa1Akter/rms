@extends ('backend.master')
@section('content')


    <h2>Update your Item</h2>
    <form action="{{route('items.update',$items->id)}}" method="POST" enctype="multipart/form-data" >
        @method('PUT')
        <div class="modal-body">
            @csrf
            <div class="form-group">
                <label for="product_name">Select Category</label>
                <select class="form-control" name="category_id" id="">
                    @foreach($categories as $data)
                        <option
                            @if($items->category_id==$data->id)
                            selected
                            @endif
                            value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>


    <div class="form-group">
        <label for="name">Item Name</label>
        <input name="name"type="text" class="form-control" id="name" placeholder="Enter Item Name" >
    </div>
    <div class="form-group">
        <label for="food">Food Category</label>
        <select name="category_id" id="food"class="form-control">

            @foreach ($categories  as $cat )
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input name="price"type="text" class="form-control" id="price" placeholder="Enter Item Price" >
    </div>
    <div class="form-group">
        <label for="details">Details</label>
        <input name="details"type="text" class="form-control" id="details" placeholder="Enter Item description" >
    </div>
    <div class="form-group">

        <label for="image">Upload Product Image</label>
        <input name="image" type="file" class="form-control" id="image" >
    </div>

    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</form>

@endsection
