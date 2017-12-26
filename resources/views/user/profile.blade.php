@extends('layouts.master')
@section('content')
    <div class="row text-center">
        <h2>User {{Auth::user()->name}} profile</h2>
    </div>

@endsection