@extends('master')
@section('content')
    <div class="card" style="width: 100%">
        <div class="card-body">
            <h5 class="card-title">Data Master Pengaturan
                - {{ link_to_route('pengaturan.create', 'Tambah Data', [], ['class' => 'btn btn-sm btn-success']) }}</h5>
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengaturan</th>
                    <th>Isi Pengaturan</th>
                    <th>Deskripsi Pengaturan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pengaturan as $item)
                    @php
                        $i = 1;
                    @endphp
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->nama_pengaturan }}</td>
                        <td>{{ $item->isi_pengaturan }}</td>
                        <td>{{ $item->deskripsi_pengaturan }}</td>
                        <td>{{ date('d M Y H:i:s', strtotime($item->created_at)) }}</td>
                        <td>{{ link_to_route('pengaturan.edit', 'Ubah Data', ['id' => $item->id_pengaturan], ['class' =>  'btn btn-sm btn-warning']) }}
                            <br>
                            {{ Form::open(array('url' => 'pengaturan/' . $item->id_pengaturan, 'class' => '')) }}
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