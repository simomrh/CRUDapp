@extends('product.layout')


@section('content')
<div class="container " style="padding-top: 12%">
    <div class="card " >

    <div class="card-body">

      <p class="card-text"> Product name:{{$product->name}}</p>
    </div>
  </div></div>
<div class="container" style="padding-top: 2%">
    <form action="{{route('products.update', $product->id)}}" method = "POST" >
        @csrf
        @method("PUT")
        <div class="form-group">
          <label for="exampleFormControlInput1">Product name</label>
          <input type="text" name="name" value="{{$product->name}}" class="form-control"  placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Product price</label>
            <input type="text" name="price" value="{{$product->price}}" class="form-control"  placeholder="price">
          </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Product details</label>
          <textarea class="form-control" name="details" rows="3">
              {!!$product->details!!}
            </textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">update</button>
          </div>
          <div class="form-group">
            <a class="btn btn-primary"  href="{{route('products.index')}}">back</a>
        </div>
      </form>
</div>





@endsection
