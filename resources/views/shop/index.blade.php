@extends('layouts.master')

@section('title')
    Laravel Shopping-cart
@endsection

@section('content')
    <div class="header-logo">
        <img id="logo" src="{{asset('img/disney-and-pixar-cars.svg')}}" alt="logo">
    </div>
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="cold-md-4">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="{{$product->imgPath}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{$product->title}}</h4>
                            <p class="card-text description">{{$product->description}} </p>
                            <p class="card-text price"> Price: {{$product->price}}$ </p>
                            <a href="#" class="btn btn-primary pull-right">Add to Cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection