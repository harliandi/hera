@section('header')
    <div class="row">
        <img class="logo-web img-rounded" src="{{ asset('assets/logo.png') }}" height="auto" alt="">
        <div class="title-web">
            <span class="text-center">Kuliner<br>Nusantara</span>
        </div>
        <div class="col align-self-end">
            <ul class="nav nav-pills nav-fill justify-content-end">
                <li class="nav-item ">
                    <a class="nav-link {{ (Route::currentRouteName() === 'home.index') ? 'active': '' }}" href="{{ route('home.index') }}">Near Me <span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::currentRouteName() === 'home.produk') ? 'active': '' }}" href="{{ route('home.produk') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::currentRouteName() === 'home.area') ? 'active': '' }}" href="{{ route('home.area') }}">Area</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::currentRouteName() === 'home.faq') ? 'active': '' }}" href="{{ route('home.faq') }}">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
    <br>
@endsection