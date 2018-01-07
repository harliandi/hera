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
                    <li class="breadcrumb-item">{{ link_to_route('pengaturan.index', 'Pengaturan') }}</li>
                    @if (isset($pengaturan))
                        <li class="breadcrumb-item active" aria-current="page">Ubah Data</li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                    @endif
                </ol>
            </nav>
            @if (isset($pengaturan))
                <h5 class="card-title">Ubah Pengaturan</h5>
                {{ Form::model($pengaturan, ['route' => ['pengaturan.update', $pengaturan->id_pengaturan], 'method' => 'put']) }}
            @else
                <h5 class="card-title">Tambah Pengaturan</h5>
                {{ Form::open(['route' => 'pengaturan.store', 'class' => 'form']) }}
            @endif
            <div class="form-group">
                {{ Form::label('nama_pengaturan', 'Nama', ['class' => 'label']) }}
                {{ Form::text('nama_pengaturan', null, ['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('isi_pengaturan', 'Isi', ['class' => 'label'])}}
                {{ Form::text('isi_pengaturan', null,['class' => 'form-control', 'required' => 'required']) }}
            </div> <div class="form-group">
                {{ Form::label('deskripsi_pengaturan', 'Deskripsi', ['class' => 'label'])}}
                {{ Form::text('deskripsi_pengaturan', null,['class' => 'form-control', 'required' => 'required']) }}
            </div>

            {{ Form::submit('Simpan', ['class' => 'btn btn-primary']) }}
            {{ Form::close()}}
        </div>
    </div>

@endsection


