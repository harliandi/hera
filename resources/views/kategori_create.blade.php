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
                    <li class="breadcrumb-item">{{ link_to_route('kategori.index', 'Kategori') }}</li>
                    @if (isset($kategori))
                        <li class="breadcrumb-item active" aria-current="page">Ubah Data</li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                    @endif
                </ol>
            </nav>
            @if (isset($kategori))
                <h5 class="card-title">Ubah Kategori</h5>
                {{ Form::model($kategori, ['route' => ['kategori.update', $kategori->id_kategori], 'method' => 'put']) }}
            @else
                <h5 class="card-title">Tambah Kategori</h5>
                {{ Form::open(['route' => 'kategori.store', 'class' => 'form']) }}
            @endif
            <div class="form-group">
                {{ Form::label('nama_kategori', 'Nama Kategori', ['class' => 'label']) }}
                {{ Form::text('nama_kategori', null, ['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('deskripsi_kategori', 'Deskripsi', ['class' => 'label'])}}
                {{ Form::text('deskripsi_kategori', null,['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('id_parent', 'Parent Kategori', ['class' => 'label'])}}
                {{ Form::text('id_parent', null,['class' => 'form-control', 'required' => 'required']) }}
            </div>

            {{ Form::submit('Simpan', ['class' => 'btn btn-primary']) }}
            {{ Form::close()}}
        </div>
    </div>

@endsection


