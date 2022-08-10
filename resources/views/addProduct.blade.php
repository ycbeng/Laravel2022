@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <form action="{{route('addProduct')}}" method="post" enctype="multipart/form-data"><br><br> @csrf
            <h3>Add New Product</h3> Name: <input name="productName" type="text" class="form-control"><br>
            
            Description:<input name="description" type="text" class="form-control"><br>
            Price; <input name="price" type="number" class="form-control"><br>
            Quantity: <input name="quantity" type="number" class="form-control"><br>

            Image: <input name="image" type="file" class="form-control"><br>

            Category: <select name="categoryID" id="" class="form-control">
                <option value="">Select Category</option>
                <option value="1">Phone</option>
                <option value="2">Computer</option>
            </select> <br>           
            <button type="submit" class="btn btn-info">Add Product</button><br><br>
        </form>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection