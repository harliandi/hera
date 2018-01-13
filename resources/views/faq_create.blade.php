@extends('master')
@include('header')
@section('content')
    <div class="card" style="width: 100%">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">{{ link_to_route('faq.index', 'FAQ') }}</li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                </ol>
            </nav>
            @if (isset($faq))
                <h5 class="card-title">Ubah FAQ</h5>
                {{ Form::model($faq, ['route' => ['faq.update', $faq->id_faq], 'method' => 'put']) }}
            @else
                <h5 class="card-title">Tambah FAQ</h5>
                {{ Form::open(['route' => 'faq.store', 'class' => 'form']) }}
            @endif
            <div class="form-group">
                {{ Form::label('tanya_faq', 'Pertanyaan', ['class' => 'label']) }}
                {{ Form::text('tanya_faq', null, ['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('jawab_faq', 'Jawaban', ['class' => 'label'])}}
                {{ Form::text('jawab_faq', null,['class' => 'form-control', 'required' => 'required']) }}
            </div>

            {{ Form::submit('Simpan', ['class' => 'btn btn-primary']) }}
            {{ Form::close()}}
        </div>
    </div>

@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
@endsection

