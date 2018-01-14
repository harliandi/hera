@extends('master')
@include('header')
@section('content')
    <div class="row">
        <div class="card" style="width: 100%">
            <h3 class="card-header">Master Data</h3>
            <div class="card-body">
                <div class="row">
                    <span class="col align-self-center text-center"><a href="{{route('faq.index')}}">FAQ</a></span>
                    <span class="col align-self-center text-center"><a href="{{route('produk.index')}}">Product</a></span>
                    <span class="col align-self-center text-center"><a href="{{route('kategori.index')}}">Category</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
@endsection