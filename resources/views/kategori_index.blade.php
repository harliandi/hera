@extends('master')
@include('header')

@section('content')
    <div class="card" style="width: 100%">
        <div class="card-body">
            <h5 class="card-title">Data Master Kategori
                - {{ link_to_route('kategori.create', 'Tambah Data', [], ['class' => 'btn btn-sm btn-success']) }}</h5>
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi Kategori</th>
                    <th>Parent Kategori</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($kategori as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->nama_kategori }}</td>
                        <td>{{ $item->deskripsi_kategori }}</td>
                        <td>{{ $item->id_parent }}</td>
                        <td>{{ link_to_route('kategori.edit', 'Ubah Data', ['id' => $item->id_kategori], ['class' =>  'btn btn-sm btn-warning']) }}
                            <br>
                            {{ Form::open(array('url' => 'be/kategori/' . $item->id_kategori, 'class' => '')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Hapus Data', array('class' => 'btn btn-sm btn-danger')) }}
                            {{ Form::close() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
@endsection