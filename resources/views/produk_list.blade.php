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
                <h6 class="card-header">Province : {{ $city->province->name }} - City : {{ $city->name }} -
                    Category: {{ $cat->nama_kategori }}</h6>
            @else
                <h3 class="card-header">Product
                    List {{ ( strpos(Route::currentRouteName(), 'food')) ? 'Food' : 'Drink' }}</h3>
            @endif
            <div class="card-body">
                @php $i = 0; @endphp
                <div class="row justify-content-center" style="margin-bottom: 20px">
                    @if(!$produk->isEmpty())
                        @foreach($produk as $data)
                            <div class="card" style="width: 30%; height: 270px; margin: 1% 1%">
                                <a href="{{ route('produk.detail', ['id' => $data->id_produk]) }}">
                                    @if($data->gambar === '')
                                        <img src="http://via.placeholder.com/336x200" class="img-responsive">
                                    @else
                                        <img src="{{ asset('storage/images/'.$data->gambar) }}" class="img-responsive"
                                             width="336px" height="200px">
                                    @endif
                                    {{--<i class="material-icons icon-food card-img-top">{{ ($cat->nama_kategori ===  'Food') ? 'restaurant':'local_cafe' }}</i>--}}
                                    <div class="card-body">
                                        <div class="rating card-title"
                                             style="margin-left: -15px;width: 75px;margin-top: -10px;" data-rateyo-rating="{{ (empty($data->ratings->rating)) ? 0 : $data->ratings->rating }}"></div>
                                        <div class="row social-tool">
                                            <p class="float-left text-muted">
                                                <a class="fb-share"
                                                   href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                                   target="_blank">
                                                    <i class="material-icons">share</i>
                                                </a>
                                            </p>
                                            <p class="float-right text-muted " style="margin-left: 80%;">
                                                <span>{{ (int)$data->likes->count() }}</span> <i class="material-icons">thumb_up</i>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    @else
                        <h3>No Match for your search, find on another location. Click <a
                                    href="{{ route('home.area') }}">here</a> to go back</h3>
                    @endif
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
                starWidth: "15px"
            });
        });
    </script>
@endsection