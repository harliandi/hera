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
    <div class="card">
        <h3 class="card-header">FAQ</h3>
        <div class="card-body">
            @foreach($faq as $data)
                <div class="row">
                    <div class="col-md-1">Q</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-10">{{ $data->tanya_faq }}</div>
                </div>
                <div class="row">
                    <div class="col-md-1">A</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-10">{{ $data->jawab_faq }}</div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
@endsection