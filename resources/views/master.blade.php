<?php
    /**
     * Created by PhpStorm.
     * User: harliandi
     * Date: 31/12/17
     * Time: 23.37
     */
?>

<html lang="id">
<head>
    <title>Wisata Kuliner Nusantara</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


    @yield('css')
    <script type="text/javascript">
        dynamicallyCreatedMarkers = [];

        function addMarkerListener(map) {
            map.addListener('click', function (e) {
                var marker = new google.maps.Marker({
                    position: e.latLng,
                    map: map
                });

                map.panTo(e.latLng);

                dynamicallyCreatedMarkers.push({
                    position: e.latLng
                });
                var coord = e.latLng;
                var data = coord.toString().split(',');
                console.log(coord.toString());
                document.getElementById('latitude').value = data[0].replace('(', '');
                document.getElementById('longtitude').value = data[1].replace(')', '');
            });
        }
    </script>

</head>
<body>
<div class="container">
    @yield('header')
    @yield('content')
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col align-self-start">
                <p>
                    &copy; 2018 WKN. All right Reserved.
                </p>
            </div>
            <div class="col align-self-end">
                <a href="http://www.facebook.com" target="_blank">
                    <img src="{{ asset('assets/facebook.svg') }}" width="40px" alt="">
                </a>
                <a href="http://www.google.com" target="_blank">
                    <img src="{{ asset('assets/google.webp') }}" width="43px" alt="">
                </a>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.1.min.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Indonesian.json"
            }
        });
        $('.fb-share').click(function(e) {
            e.preventDefault();
            window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
            return false;
        });
        $('.select_complete').select2();
    });
</script>
@yield('js')
</html>
