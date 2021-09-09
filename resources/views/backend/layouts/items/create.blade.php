@extends ('backend.master')
@section('content')

    
        <h1>Item Form</h1>
        <form  action="{{ route('items.store') }}" method="post" enctype="multipart/form-data">
            @csrf
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