<?php

    namespace App\Http\Controllers;

    use App\Models\Faq;
    use App\Models\Kategori;
    use App\Models\Province;
    use App\Models\Regency;
    use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
    use Illuminate\Http\Request;

    class HomeController extends Controller
    {
        //function
        //todo: connect fb login and save data for like and rating
        //todo: get top list data by like and rating
        //todo: get list data by kategori on produk
        //todo: get list data by nearme on produk
        //todo: func for like
        //todo: func for rating

        //view
        //todo: view detil produk
        //todo: view detil area after choose
        public function index()
        {
            Mapper::map(-6.3681819, 106.8328601, ['eventBeforeLoad' => 'addMarkerListener(map);']);
            return view('home');
        }

        public function produk()
        {
            return view('produk');
        }

        public function near_me()
        {
            Mapper::map(-6.3681819, 106.8328601, ['eventBeforeLoad' => 'addMarkerListener(map);']);
            return view('near_me');
        }

        public function area()
        {
            Mapper::map(-6.3681819, 106.8328601, ['eventBeforeLoad' => 'getLocation();']);
            $cat = Kategori::pluck('nama_kategori', 'id_kategori');
            $prov = Province::pluck('name', 'id');
            return view('area')->with(['cat' => $cat, 'prov' => $prov]);
        }

        public function area_change(Request $req)
        {
            $city = Regency::where('province_id', $req->province_id)->pluck('name', 'id');
            $string = '<option value="" selected disabled>Choose City</option>';
            foreach ($city as $key => $data) {
                $string .= '<option value="' . $key . '">' . $data . '</option>';
            }
            return $string;
        }

        public function area_detail(Request $req)
        {

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
