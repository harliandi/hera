@extends('master')
@include('header')
@section('content')
    <div class="row">
        <div class="card" style="width: 100%">
            <h3 class="card-header">Product</h3>
            <div class="card-body">
                <div class="row">
                    <span class="col align-self-center text-center">Food</span>
                    <span class="col align-self-center text-center">Drink</span>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
@endsection