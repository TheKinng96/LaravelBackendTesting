@extends('product.layout')

@section('content')

<br><br>
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>Laravel Product List</h2>
    </div>

    <div class="pull-right">
      <a href="{{route('create.product')}}" class="btn btn-success">Create New Product</a>
    </div>
  </div>
</div>


@if($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{$message}}</p>
</div>

@endif

<table class="table table-bordered">
  <tr>
    <th width="150px">Product Name</th>
    <th width="150px">Product Code</th>
    <th width="200px">Details</th>
    <th width="150px">Logo</th>
    <th width="280px">Action</th>
  </tr>

  @foreach($products as $product)

  <tr>
    <td>{{$product -> product_name}}</td>
    <td>{{$product -> product_code}}</td>
    <td>{{$product -> details}}</td>
    <td><img src="{{ URL::to($product->logo)}}" height="70px" width="80px" alt="{{$product->product_name}}"></td>
    <td>
      <a href="" class="btn btn-info">Show</a>
      <a href="{{ URL::to('edit/product/'.$product->id)}}" class="btn btn-primary">Edit</a>
      <a href="{{ URL::to('delete/product/'.$product->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
    </td>
  </tr>
  @endforeach

</table>

@endsection