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
        <div class="card" style="width: 60%">
            <h3 class="card-header">Top List</h3>
            <div class="card-body">
                <div class="row justify-content-center" style="margin-bottom: 20px">
                    <div class="card" style="width: 30%; height: 270px;">
                        <i class="material-icons icon-food card-img-top">restaurant</i>
                        <div class="card-body">
                            <div class="rating card-title"
                                 style="margin-left: -15px;width: 75px;margin-top: -10px;"></div>
                            <div class="row social-tool">
                                <p class="float-left text-muted">
                                    <a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                       target="_blank">
                                        <i class="material-icons">share</i>
                                    </a>
                                </p>
                                <p class="float-right text-muted ">
                                    <i class="material-icons">thumb_up</i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 30%;height: 270px;margin: 0 3%;">
                        <i class="material-icons icon-food card-img-top">local_cafe</i>
                        <div class="card-body">
                            <div class="rating card-title"
                                 style="margin-left: -15px;width: 75px;margin-top: -10px;"></div>
                            <div class="row social-tool">
                                <p class="float-left text-muted align-self-start">
                                    <a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                       target="_blank">
                                        <i class="material-icons">share</i>
                                    </a>
                                </p>
                                <p class="float-right text-muted align-self-end">
                                    <i class="material-icons">thumb_up</i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 30%;height: 270px;">
                        <i class="material-icons icon-food card-img-top">local_cafe</i>
                        <div class="card-body">
                            <div class="rating card-title"
                                 style="margin-left: -15px;width: 75px;margin-top: -10px;"></div>
                            <div class="row social-tool">
                                <p class="float-left text-muted align-self-start">
                                    <a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                       target="_blank">
                                        <i class="material-icons">share</i>
                                    </a>
                                </p>
                                <p class="float-right text-muted align-self-end">
                                    <i class="material-icons">thumb_up</i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="card" style="width: 30%; height: 270px;">
                        <i class="material-icons icon-food card-img-top">restaurant</i>
                        <div class="card-body">
                            <div class="rating card-title"
                                 style="margin-left: -15px;width: 75px;margin-top: -10px;"></div>
                            <div class="row social-tool">
                                <p class="float-left text-muted">
                                    <a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                       target="_blank">
                                        <i class="material-icons">share</i>
                                    </a>
                                </p>
                                <p class="float-right text-muted ">
                                    <i class="material-icons">thumb_up</i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 30%;height: 270px;margin: 0 3%;">
                        <i class="material-icons icon-food card-img-top">local_cafe</i>
                        <div class="card-body">
                            <div class="rating card-title"
                                 style="margin-left: -15px;width: 75px;margin-top: -10px;"></div>
                            <div class="row social-tool">
                                <p class="float-left text-muted align-self-start">
                                    <a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                       target="_blank">
                                        <i class="material-icons">share</i>
                                    </a>
                                </p>
                                <p class="float-right text-muted align-self-end">
                                    <i class="material-icons">thumb_up</i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 30%;height: 270px;">
                        <i class="material-icons icon-food card-img-top">local_cafe</i>
                        <div class="card-body">
                            <div class="rating card-title"
                                 style="margin-left: -15px;width: 75px;margin-top: -10px;"></div>
                            <div class="row social-tool">
                                <p class="float-left text-muted align-self-start">
                                    <a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                       target="_blank">
                                        <i class="material-icons">share</i>
                                    </a>
                                </p>
                                <p class="float-right text-muted align-self-end">
                                    <i class="material-icons">thumb_up</i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="width: 35%;margin-left: 25px;">
            <div class="card-body">
                <div style="width: 100%; height: 620px;">
                    {!! Mapper::render() !!}
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row justify-content-center">
                    <div class="card" style="margin: 50px 0;">
                        <a href="http://www.facebook.com" target="_blank">
                            <div class="card-body">
                                <a href="{{ route('fb-login') }}" target="_blank"><img src="{{ asset('assets/facebook.svg') }}" width="40px" alt=""></a>
                            </div>
                        </a>
                    </div>
                    <div class="card" style="margin-left: 20px; margin-top: 50px; margin-bottom: 50px">
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
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('#myModal').modal();
            $(".rating").rateYo({
                rating: 3.6,
                starWidth: "15px"
            });
        });
    </script>
@endsection