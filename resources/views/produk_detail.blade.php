@extends('master')
@include('header')
@section('content')
    <div class="row justify-content-center">
        <div class="card" style="width: 60%; height: 100%;">
            <h3 class="card-header">{{ $produk->nama_produk }}</h3>
            <div class="card-body">
                <div class="row justify-content-center" style="margin-bottom: 20px">
                    <div class="card" style="width: 100%; height: 270px;">
                        <i class="material-icons icon-food card-img-top">local_cafe</i>
                        <div class="card-body">
                            <div class="rating card-title"
                                 style="margin-left: -15px;width: 75px;margin-top: -10px;"></div>
                            <div class="row social-tool">
                                <p class="float-left text-muted">
                                    <i class="material-icons">share</i>
                                </p>
                                <p class="float-right text-muted ">
                                    <i class="material-icons">thumb_up</i>
                                </p>
                            </div>
                        </div>
                        <div id="disqus_thread"></div>
                        <script>

                            /**
                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                s.src = 'https://kuliner-indonesia.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="width: 35%;margin-left: 25px;">
            <div class="card-body">
                <div style="width: 100%; height: 100%;">
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
    <script>
        $(document).ready(function () {
            $('#myModal').modal();
            $(".rating").rateYo({
                rating: 3.6,
                starWidth: "15px"
            });
        });
    </script>
@endsection