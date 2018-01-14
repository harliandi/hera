@extends('master')
@include('header')
@section('content')
    <div class="row">
        <div class="card" style="width: 50%">
            <h3 class="card-header">Area</h3>
            <div class="card-body">
                {{ Form::open(['route' => 'area.detail', 'class' => 'form', 'method' => 'get']) }}
                <div class="form-group">
                    {{ Form::label('provinsi', 'Province', ['class' => 'label']) }}
                    {{ Form::select('provinsi',$prov, null, ['placeholder' => 'Choose Province', 'class' => 'form-control', 'required' => 'required']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('kota', 'City', ['class' => 'label']) }}
                    {{ Form::select('kota', [], null, ['placeholder' => 'Choose City', 'class' => 'form-control', 'required' => 'required']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('kategori', 'Category', ['class' => 'label']) }}
                    {{ Form::select('kategori', $cat, null, ['placeholder' => 'Choose Category', 'class' => 'form-control', 'required' => 'required']) }}
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
@section('js')
    <script type="text/javascript">
        $(function () {

            $('#provinsi').change(function () {
                var id = $(this).val();
                $.ajax({
                    type: "get",
                    url: "{{ route('area.change') }}",
                    data: {province_id: id},
                    dataType: 'html',
                    success: function (data) {
                        $('#kota').html(data);
                    },
                });
            });
        });

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
            return false;
        }

        function showPosition(position) {
            alert("Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude);
        }
    </script>
@endsection
