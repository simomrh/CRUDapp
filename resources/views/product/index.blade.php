@extends('product.layout')

@section('content')

<div class="jumbotron container">

    <p>page of products</p>
    <a class="btn btn-primary btn-lg" href="{{route('products.create')}}" role="button">Create Product</a>


  </div>

  <div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @endif

</div>
  <div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col" style="width: 400px">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 0;

            @endphp
         @foreach  ($products as $item)
         <tr>
            <th scope="row">{{++$i}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->price}} DH</td>
            <td>
                <div class="row">
                    <div class="col-sm">
                        <a class="btn btn-primary"  href="{{route('products.edit',$item->id)}}">Edit</a>
                    </div>
                    <div class="col-sm">
                        <a class="btn btn-light" href="{{route('products.show',$item->id)}}">Show</a>
                    </div>
                    <div class="col-sm">
                        <a class="btn btn-warning" href="{{route('soft.delete',$item->id)}}">trash</a>
                    </div>

                  </div>


        </form>

            </td>
          </tr>
            @endforeach
        </tbody>
      </table>
      <a class="btn btn-primary btn-lg" href="{{route('product.trash')}}" role="button">Trash</a>
{!!  $products->links() !!}
  </div>

@endsection

