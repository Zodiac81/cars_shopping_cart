@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6 col-sm-4 col-md-offset-4 col-sm-offset-3">
            <h2>Checkout</h2>
            <h4>Total Price: {{$total}} $</h4>
            <div id="card-errors" class="alert alert-danger" {{ !Session::has('error')? "style = display:none;": "style=display:block;" }} role="alert"></div>

            <form action="{{route('checkout')}}" method="post" id="checkout-form">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" class="form-control" required>
                    </div>
                </div>
                <hr>
               {{-- <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-name">Card Holder Name</label>
                        <input type="text" id="card-name" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-num">Credit Card Number</label>
                        <input type="number" id="card-num" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="card-expiry-month">Credit Card Expiration Month</label>
                                <input type="text" id="card-expiry-month" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="card-expiry-year">Credit Card Expiration Year</label>
                                <input type="text" id="card-expiry-year" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="card-cvc">CVC</label>
                                <input type="text" id="card-cvc" class="form-control" required>
                            </div>
                        </div>--}}
                <div id="card-element">
                    <!-- a Stripe Element will be inserted here. -->
                </div>
                {{csrf_field()}}
                <br>
                <input type="submit" class="btn bg-success" value="Buy Now">
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/checkout.js') }}"></script>
@endsection