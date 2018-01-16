@extends('master')
@include('header')
@section('content')
    <div class="card" style="width: 100%">
        <div class="card-body">
            <h5 class="card-title">Data Master Produk
                - {{ link_to_route('produk.create', 'Tambah Data', [], ['class' => 'btn btn-sm btn-success']) }}</h5>
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi Produk</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($produk as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->deskripsi_produk }}</td>
                        <td>{{ $item->kategori->nama_kategori }}</td>
                        <td>{{ date('d M Y H:i:s', strtotime($item->updated_date)) }}</td>
                        <td>{{ link_to_route('produk.edit', 'Ubah Data', ['id' => $item->id_produk], ['class' =>  'btn btn-sm btn-warning']) }}
                            <br>
                            {{ Form::open(array('url' => 'be/produk/' . $item->id_produk, 'class' => '')) }}
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
