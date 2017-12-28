@extends('layouts.master')

@section('content')
    <h2>Shopping-cart</h2>
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">

                    @foreach($products as $product)
                        <li class="list-group-item">
                          <span class="badge badge-info">{{ $product['qty']  }}</span>
                            <strong> {{  $product['item']['title'] }}</strong>
                            <span class="badge badge-success">{{  $product['price'] }} $</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                    Action
                                    <span class="caret">
                                        <ul class="dropdown-menu">
                                            <li><a href="#"> Reduce by 1 </a></li>
                                            <li><a href="#"> Reduce all </a></li>
                                        </ul>
                                    </span>
                                </button>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                <strong> Total: {{ $totalPrice  }} $</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
               <a href="{{route('checkout')}}" class="btn btn-success btn-sm">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                <h3> No Items in Cart </h3>
            </div>
        </div>
    @endif
@endsection