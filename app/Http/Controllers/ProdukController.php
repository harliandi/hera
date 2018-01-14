<?php

    namespace App\Http\Controllers;

    use App\Models\Kategori;
    use App\Models\Produk;
    use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
    use Illuminate\Http\Request;

    class ProdukController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            return view('produk_index')->with('produk', Produk::all());
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         *
         */
        public function create()
        {
            Mapper::map(-6.3681819, 106.8328601, ['marker' => false, 'eventBeforeLoad' => 'addMarkerListener(map);']);
            $cat = Kategori::pluck('nama_kategori', 'id_kategori');
            return view('produk_create')->with('cat', $cat);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            Produk::create([
                'nama_produk'      => $request->nama_produk,
                'id_kategori'      => $request->id_kategori,
                'deskripsi_produk' => $request->deskripsi_produk,
                'latitude'         => $request->latitude,
                'longtitude'       => $request->longtitude,
            ]);
            return redirect()->route('produk.index');
        }

        /**
         * Display the specified resource.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            return view('produk_create')->with('produk', Produk::find($id));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $produk = Produk::find($id);
            if($produk){
                $produk->nama_produk = $request->nama_produk;
                $produk->id_produl = $request->id_produl;
                $produk->deskripsi_produk = $request->deskripsi_produk;
                $produk->latitude = $request->latitude;
                $produk->latitude = $request->latitude;
                $produk->longtitude = $request->longtitude;
                $produk->save();
            }
            return redirect()->route('produk.index');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            Produk::destroy($id);
            return redirect()->route('produk.index');
        }
    }
