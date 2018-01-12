@extends('master')
@include('header')
@section('content')
    <div class="row">
        <div class="card" style="width: 50%">
            <h3 class="card-header">Area</h3>
            <div class="card-body">
                {{ Form::open(['route' => 'area.change', 'class' => 'form']) }}
                <div class="form-group">
                    {{ Form::label('provinsi', 'Province', ['class' => 'label']) }}
                    {{ Form::select('provinsi', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Choose Province', 'class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('kota', 'City', ['class' => 'label']) }}
                    {{ Form::select('kota', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Choose City', 'class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('kategori', 'Category', ['class' => 'label']) }}
                    {{ Form::select('kategori', $cat, null, ['placeholder' => 'Choose Category', 'class' => 'form-control']) }}
                </div>
                {{ Form::submit('View Data', ['class' => 'btn btn-primary']) }}
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