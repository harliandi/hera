@extends('master')
@include('header')
@section('content')
    <div class="row justify-content-center">
        <div class="card" style="width: 60%; height: auto">
            <h3 class="card-header">{{ $produk->nama_produk }} <button class="float-right btn btn-primary btn-sm btn_like"><i class="material-icons">thumb_up</i></button></h3>
            <div class="card-body">
                <div class="row justify-content-center" style="margin-bottom: 20px;padding: 15px;">
                    <div class="card" style="width: 100%; height: auto;padding: 10px;">
                        @if($produk->gambar === '')
                            <img src="http://via.placeholder.com/336x200" class="img-responsive">
                        @else
                            <img src="{{ asset('storage/images/'.$produk->gambar) }}" class="img-responsive"
                                 height="400px">
                        @endif
                        <div class="card-body">
                            <p>
                                {{ $produk->deskripsi_produk }}
                            </p>
                            <div class="rating card-title"
                                 style="margin-left: -7px;width: 75px;margin-top: -7px;" data-rateyo-rating="{{ (empty($produk->ratings->rating)) ? 0 : $produk->ratings->rating }}"></div>

                            <div class="row social-tool">
                                <p class="float-left text-muted" style="margin-left: 12px;">
                                    <a class="fb-share"
                                       href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                       target="_blank">
                                        <i class="material-icons">share</i>
                                    </a>
                                </p>
                                <p class="float-right text-muted" style="margin-left: 87%">
                                    <span>{{ (int)$produk->likes->count() }}</span> <i class="material-icons">thumb_up</i>
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
                            (function () { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                s.src = 'https://kuliner-indonesia.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                                powered by Disqus.</a></noscript>
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
                starWidth: "35px"
            }).on("rateyo.set", function (e, data) {
                //alert("The rating is set to " + data.rating + "!");
                $.ajax({
                    type: "get",
                    url: "{{ route('produk.rating') }}",
                    data: { id_produk: '{{ $produk->id_produk }}', 'rating':data.rating },
                    dataType: 'html',
                    success: function (data) {
                        alert('Thank You for the rating!');
                        //window.location.reload(true);
                    }
                });
            });
            $('.btn_like').click(function () {
                $.ajax({
                    type: "get",
                    url: "{{ route('produk.like') }}",
                    data: { id_produk: '{{ $produk->id_produk }}' },
                    dataType: 'html',
                    success: function (data) {
                        alert('Thank You for the like!');
                    }
                });
            });
        });
    </script>
@endsection