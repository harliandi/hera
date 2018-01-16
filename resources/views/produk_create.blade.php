@extends('master')
@include('header')
@section('content')
    <div class="card" style="width: 100%">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">{{ link_to_route('produk.index', 'Produk') }}</li>
                    @if (isset($produk))
                        <li class="breadcrumb-item active" aria-current="page">Ubah Data</li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                    @endif
                </ol>
            </nav>
            @if (isset($produk))
                <h5 class="card-title">Ubah Produk</h5>
                {{ Form::model($produk, ['route' => ['produk.update', $produk->id_produk], 'method' => 'put']) }}
            @else
                <h5 class="card-title">Tambah Produk</h5>
                {{ Form::open(['route' => 'produk.store', 'class' => 'form', 'files' => true]) }}
            @endif
            <div class="form-group">
                {{ Form::label('nama_produk', 'Nama', ['class' => 'label']) }}
                {{ Form::text('nama_produk', null, ['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('id_kategori', 'Kategori', ['class' => 'label'])}}
                {{ Form::select('id_kategori', $cat,null, ['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('id_city', 'Kota', ['class' => 'label'])}}
                {{ Form::select('id_city', $city, null, ['class' => 'form-control select_complete', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('gambar', 'Gambar', ['class' => 'label'])}}
                @if (isset($produk))
                    {{ Form::file('gambar', ['class' => 'form-control']) }}
                @else
                    {{ Form::file('gambar', ['class' => 'form-control', 'required' => 'required']) }}
                @endif
            </div>
            @if (isset($produk))
                <div class="form-group">
                    <img src="{{ asset('storage/images/'.$produk->gambar) }}"
                         class="border border-primary img-responsive" alt="{{ $produk->nama_produk }}">
                </div>
            @endif
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
@section('css')
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
@endsection


