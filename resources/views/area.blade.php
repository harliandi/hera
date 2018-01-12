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
    <div class="row">

        <div class="card" style="width: 50%">
            <h3 class="card-header">Area</h3>
            <div class="card-body">

            </div>
        </div>
        <div class="card" style="width: 45%;margin-left: 35px;">
            <div class="card-body">
                <div style="width: 100%; height: 500px;">
                    {!! Mapper::render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
@endsection