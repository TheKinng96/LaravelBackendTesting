@extends('product.layout')

@section('content')

<br><br>
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left" style="display: flex; align-items:flex-end;">
      <h2>{{$product->product_name}}</h2>
      <h6 style="margin-left: 5px; color:grey;">{{$product->product_code}}</h6>
    </div>

    <div class="pull-right">
      <a href="{{route('product.index')}}" class="btn btn-success">Back</a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <img src="{{URL::to($product->logo)}}" height="500px" width="750px">
    </div>
  </div>

  <br>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      {{$product->details}}
    </div>
  </div>
</div>
@endsection