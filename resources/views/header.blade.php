@section('header')
    <div class="row">
        <a href="{{ route('home.index') }}"><img class="logo-web img-rounded" src="{{ asset('assets/logo.png') }}" height="auto" alt=""></a>
        <div class="title-web">
            <span class="text-center">Kuliner<br>Nusantara</span>
        </div>
        <div class="col align-self-end">
            <ul class="nav nav-pills nav-fill justify-content-end">
                @if(strpos(url()->current(),'be') !== false)
                <li class="nav-item ">
                    <a class="nav-link {{ (strpos(url()->current(),'be') !== false) ? 'active': '' }}" href="{{ route('be.index') }}">Backend Data</a>
                </li>
                @endif
                <li class="nav-item ">
                    <a class="nav-link {{ (Route::currentRouteName() === 'home.nearme') ? 'active': '' }}" href="{{ route('home.nearme') }}">Near Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::currentRouteName() === 'home.produk') ? 'active': '' }}" href="{{ route('home.produk') }}">Product</a>
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