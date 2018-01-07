<?php

    namespace App\Http\Controllers;

    use App\Models\Faq;
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
            return view('home');
        }

        public function faq()
        {
            return view('home')->with('faq', Faq::all());
        }

        public function be()
        {
            return view('be');
        }
    }
