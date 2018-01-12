<?php
    /**
     * Created by PhpStorm.
     * User: harliandi
     * Date: 01/01/18
     * Time: 23.48
     */
?>
@extends('master')
@include('header')
@section('content')

    <div class="row justify-content-center">
        <div class="col-6 align-items-center ">
            <div class="card" style="margin-top: 30px">
                <div class="card-body">
                    <h3 class="card-title text-center">Login</h3>
                    <div class="row justify-content-center">
                        <div class="card">
                            <a href="http://www.facebook.com" target="_blank">
                                <div class="card-body">
                                    <img src="{{ asset('assets/facebook.svg') }}" width="40px" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="card" style="margin-left: 20px;">
                            <a href="http://www.google.com" target="_blank">
                                <div class="card-body">
                                    <img src="{{ asset('assets/google.webp') }}" width="43px" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
@endsection