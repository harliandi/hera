<?php

    namespace App\Http\Controllers;

    use App\Models\Faq;
    use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
    use Illuminate\Http\Request;

    class HomeController extends Controller
    {
        //index controller untuk frontend
        public function index()
        {
            return view('home');
        }

        public function produk()
        {
            return view('home');
        }

        public function near_me()
        {
            return view('home');
        }

        public function area()
        {
            Mapper::map(-6.3681819, 106.8328601, ['eventBeforeLoad' => 'addMarkerListener(map);']);
            return view('area');
        }

        public function faq()
        {
            return view('faq')->with('faq', Faq::all());
        }

        public function be()
        {
            return view('be');
        }
    }
