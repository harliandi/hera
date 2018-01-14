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
        <div class="card" style="width: 100%">
            @if(Route::currentRouteName() === 'area.detail')
                <h3 class="card-header">Area</h3>
                <h6 class="card-header">Provinsi : {{ $city->province->name }} - Kota : {{ $city->name }} -
                    Kategori: {{ $cat->nama_kategori }}</h6>
            @else
                <h3 class="card-header">Product
                    List {{ ( strpos(Route::currentRouteName(), 'food')) ? 'Food' : 'Drink' }}</h3>
            @endif
            <div class="card-body">
                <div class="row justify-content-center" style="margin-bottom: 20px">
                    <div class="card" style="width: 30%; height: 270px;">
                        <a href="{{ route('produk.detail') }}">
                            <i class="material-icons icon-food card-img-top">restaurant</i>
                            <div class="card-body">
                                <div class="rating card-title"
                                     style="margin-left: -15px;width: 75px;margin-top: -10px;"></div>
                                <div class="row social-tool">
                                    <p class="float-left text-muted">
                                        <a class="fb-share"
                                           href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                           target="_blank">
                                            <i class="material-icons">share</i>
                                        </a>
                                    </p>
                                    <p class="float-right text-muted ">
                                        <i class="material-icons">thumb_up</i>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card" style="width: 30%;height: 270px;margin: 0 3%;">
                        <a href="{{ route('produk.detail') }}">
                            <i class="material-icons icon-food card-img-top">local_cafe</i>
                            <div class="card-body">
                                <div class="rating card-title"
                                     style="margin-left: -15px;width: 75px;margin-top: -10px;"></div>
                                <div class="row social-tool">
                                    <p class="float-left text-muted align-self-start">
                                        <a class="fb-share"
                                           href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                           target="_blank">
                                            <i class="material-icons">share</i>
                                        </a>
                                    </p>
                                    <p class="float-right text-muted align-self-end">
                                        <i class="material-icons">thumb_up</i>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card" style="width: 30%;height: 270px;">
                        <a href="{{ route('produk.detail') }}">
                            <i class="material-icons icon-food card-img-top">local_cafe</i>
                            <div class="card-body">
                                <div class="rating card-title"
                                     style="margin-left: -15px;width: 75px;margin-top: -10px;"></div>
                                <div class="row social-tool">
                                    <p class="float-left text-muted align-self-start">
                                        <a class="fb-share"
                                           href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                           target="_blank">
                                            <i class="material-icons">share</i>
                                        </a>
                                    </p>
                                    <p class="float-right text-muted align-self-end">
                                        <i class="material-icons">thumb_up</i>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="card" style="width: 30%; height: 270px;">
                        <a href="{{ route('produk.detail') }}">
                            <i class="material-icons icon-food card-img-top">restaurant</i>
                            <div class="card-body">
                                <div class="rating card-title"
                                     style="margin-left: -15px;width: 75px;margin-top: -10px;"></div>
                                <div class="row social-tool">
                                    <p class="float-left text-muted">
                                        <a class="fb-share"
                                           href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                           target="_blank">
                                            <i class="material-icons">share</i>
                                        </a>
                                    </p>
                                    <p class="float-right text-muted ">
                                        <i class="material-icons">thumb_up</i>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card" style="width: 30%;height: 270px;margin: 0 3%;">
                        <a href="{{ route('produk.detail') }}">
                            <i class="material-icons icon-food card-img-top">local_cafe</i>
                            <div class="card-body">
                                <div class="rating card-title"
                                     style="margin-left: -15px;width: 75px;margin-top: -10px;"></div>
                                <div class="row social-tool">
                                    <p class="float-left text-muted align-self-start">
                                        <a class="fb-share"
                                           href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                           target="_blank">
                                            <i class="material-icons">share</i>
                                        </a>
                                    </p>
                                    <p class="float-right text-muted align-self-end">
                                        <i class="material-icons">thumb_up</i>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card" style="width: 30%;height: 270px;">
                        <a href="{{ route('produk.detail') }}">
                            <i class="material-icons icon-food card-img-top">local_cafe</i>
                            <div class="card-body">
                                <div class="rating card-title"
                                     style="margin-left: -15px;width: 75px;margin-top: -10px;"></div>
                                <div class="row social-tool">
                                    <p class="float-left text-muted align-self-start">
                                        <a class="fb-share"
                                           href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                           target="_blank">
                                            <i class="material-icons">share</i>
                                        </a>
                                    </p>
                                    <p class="float-right text-muted align-self-end">
                                        <i class="material-icons">thumb_up</i>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $(".rating").rateYo({
                rating: 3.6,
                starWidth: "15px"
            });
        });
    </script>
@endsection