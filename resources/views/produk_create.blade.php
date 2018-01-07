<?php
    /**
     * Created by PhpStorm.
     * User: harliandi
     * Date: 31/12/17
     * Time: 23.02
     */
?>
@extends('master')
@section('content')
    <div class="card" style="width: 100%">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">{{ link_to_route('produk.index', 'Produk') }}</li>
                    @if (isset($pengaturan))
                        <li class="breadcrumb-item active" aria-current="page">Ubah Data</li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                    @endif
                </ol>
            </nav>
            @if (isset($pengaturan))
                <h5 class="card-title">Ubah Produk</h5>
                {{ Form::model($pengaturan, ['route' => ['produk.update', $produk->id_produk], 'method' => 'put']) }}
            @else
                <h5 class="card-title">Tambah Produk</h5>
                {{ Form::open(['route' => 'produk.store', 'class' => 'form']) }}
            @endif
            <div class="form-group">
                {{ Form::label('nama_produk', 'Nama', ['class' => 'label']) }}
                {{ Form::text('nama_produk', null, ['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('id_kategori', 'Kategori', ['class' => 'label'])}}
                {{ Form::text('id_kategori', null,['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('deskripsi_produk', 'Deskripsi', ['class' => 'label'])}}
                {{ Form::textarea('deskripsi_produk', null,['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('latitude', 'Latitude', ['class' => 'label'])}}
                {{ Form::text('latitude', null,['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('longtitude', 'Longtitude', ['class' => 'label'])}}
                {{ Form::text('longtitude', null,['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                <div style="width: 500px; height: 500px;">
                    {!! Mapper::render() !!}
                </div>
            </div>

            {{ Form::submit('Simpan', ['class' => 'btn btn-primary']) }}
            {{ Form::close()}}
        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript">

        dynamicallyCreatedMarkers = [];

        function addMarkerListener(map)
        {
            map.addListener('click', function(e) {
                var marker = new google.maps.Marker({
                    position: e.latLng,
                    map: map
                });

                map.panTo(e.latLng);

                dynamicallyCreatedMarkers.push({
                    position: e.latLng
                });
            });
        }

        $('#submit').click(function() {
            $.ajax({
                type: "POST",
                url: '/produk/testing',
                data: dynamicallyCreatedMarkers.serialize(),
                success: function(response)
                {
                    console.log('success')
                }
            });
        });

    </script>
    @endsection


