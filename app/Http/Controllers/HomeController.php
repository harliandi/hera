<?php

    namespace App\Http\Controllers;

    use App\Models\Faq;
    use App\Models\Kategori;
    use App\Models\Like;
    use App\Models\Produk;
    use App\Models\Province;
    use App\Models\Rating;
    use App\Models\Regency;
    use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
    use Illuminate\Http\Request;

    class HomeController extends Controller
    {
        //function
        //todo: connect fb login and save data for like and rating
        //todo: get top list data by like and rating
        //todo: get list data by nearme on produk
        //todo: func for like
        //todo: func for rating

        public function index()
        {
            $food = Produk::where('id_kategori', 5)->take(3)->get();
            $drink = Produk::where('id_kategori', 7)->take(3)->get();
            Mapper::map(-6.3681819, 106.8328601);
            foreach ($food as $item) {
                Mapper::marker($item->latitude, $item->longtitude);
            }
            foreach ($drink as $item) {
                Mapper::marker($item->latitude, $item->longtitude);
            }
            return view('home')->with(['food' => $food, 'drink' => $drink]);
        }

        public function produk()
        {
            Mapper::map(-6.3681819, 106.8328601, ['eventBeforeLoad' => 'addMarkerListener(map);']);
            return view('produk');
        }

        public function product_detail(Request $req)
        {
            if (!empty($req->id)) {
                $produk = Produk::find($req->id);
                Mapper::map((string)$produk->latitude, (string)$produk->longtitude);
            } else {
                $produk = Produk::all()->first();
                Mapper::map($produk->latitude, $produk->longtitude);
            }
            return view('produk_detail')->with('produk', $produk);
        }

        public function product_like(Request $req)
        {
            $like = new Like([
                'id_produk' => $req->id_produk
            ]);

            $like->save();
        }

        public function product_rating(Request $req)
        {
            $exist = Rating::find($req->id_produk);
            if (is_null($exist)) {
                $like = new Rating([
                    'id_produk' => $req->id_produk,
                    'rating'    => $req->rating,

                ]);
                $like->save();
            } else {
                $exist->rating = $req->rating;
                $exist->save();
            }
        }

        public function product_list(Request $req)
        {
            $type = $req->path();
            if (strpos($type, 'food') !== false) {
                $cat = Kategori::find(5);
                $produk = Produk::where('id_kategori', 5)->limit(3)->orderBy('id_produk', 'desc')->get();
            } elseif (strpos($type, 'drink') !== false) {
                $cat = Kategori::find(5);
                $produk = Produk::where('id_kategori', 7)->limit(3)->get();
            } else {
                $produk = Produk::all();
            }
            return view('produk_list')->with(['produk' => $produk, 'cat' => $cat]);
        }

        public function near_me()
        {
            $produk = Produk::all();
            Mapper::map(-6.3681819, 106.8328601);
            foreach ($produk as $item) {
                Mapper::marker($item->latitude, $item->longtitude);
            }
            return view('near_me');
        }

        public function area()
        {
            Mapper::map(-6.3681819, 106.8328601, ['eventBeforeLoad' => 'getLocation();']);
            $produk = Produk::all();
            foreach ($produk as $item) {
                Mapper::marker($item->latitude, $item->longtitude);
            }
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
            $cat = Kategori::find($req->kategori);
            $city = Regency::find($req->kota);
            if ($req->kategori == 8) {
                $produk = Produk::where(['id_city' => $req->kota])->with('kategori',
                    'likes', 'ratings', 'city')->get();
            } else {
                $produk = Produk::where(['id_kategori' => $req->kategori, 'id_city' => $req->kota])->with('kategori',
                    'likes', 'ratings', 'city')->get();
            }
            return view('produk_list')->with(['produk' => $produk, 'city' => $city, 'cat' => $cat]);
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
