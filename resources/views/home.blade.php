<?php
    /**
     * Created by PhpStorm.
     * User: harliandi
     * Date: 01/01/18
     * Time: 23.48
     */
?>
@extends('master')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-right">
        <a class="navbar-brand" href="{{ route('home.index') }}">
            <i class="material-icons d-inline-block align-top">restaurant_menu</i>
            Kuliner Indonesia
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home.index') }}">Near Me <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.produk') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.area') }}">Area</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.faq') }}">FAQ</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="card" style="width: 80%;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

@endsection