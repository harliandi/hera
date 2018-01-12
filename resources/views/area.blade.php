@extends('master')
@include('header')
@section('content')
    <div class="row">
        <div class="card" style="width: 50%">
            <h3 class="card-header">Area</h3>
            <div class="card-body">
                {{ Form::open(['route' => 'area.change', 'class' => 'form']) }}
                <div class="form-group">
                    {{ Form::label('provinsi', 'Provinsi', ['class' => 'label']) }}
                    {{ Form::select('provinsi', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pilih Provinsi', 'class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('kota', 'Kota', ['class' => 'label']) }}
                    {{ Form::select('kota', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pilih Kota', 'class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('kategori', 'Kategori', ['class' => 'label']) }}
                    {{ Form::select('kategori', $cat, null, ['placeholder' => 'Pilih Kategori', 'class' => 'form-control']) }}
                </div>
                {{ Form::submit('Lihat Data', ['class' => 'btn btn-primary']) }}
                {{ Form::close()}}
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