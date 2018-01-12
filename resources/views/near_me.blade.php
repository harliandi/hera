@extends('master')
@include('header')
@section('content')
    <div class="row">
        <div class="card" style="width: 100%">
            <h3 class="card-header">Area</h3>
            <div class="card-body">
                <div class="col align-self-center" style="width: 100%; height: 500px;">
                    {!! Mapper::render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
@endsection