<?php

    namespace App\Http\Controllers;

    use App\Models\Kategori;
    use App\Models\Produk;
    use App\Models\Regency;
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
            $city = Regency::pluck('name', 'id');
            return view('produk_create')->with(['cat' => $cat, 'city' => $city]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $model = Produk::create([
                'nama_produk'      => $request->nama_produk,
                'id_kategori'      => $request->id_kategori,
                'id_city'          => $request->id_city,
                'gambar'           => '',
                'deskripsi_produk' => $request->deskripsi_produk,
                'latitude'         => $request->latitude,
                'longtitude'       => $request->longtitude,
            ]);

            if ($request->hasFile('gambar')) {
                $request->file('gambar')->store('public/images');

                // ensure every image has a different name
                $file_name = $request->file('gambar')->hashName();

                // save new image $file_name to database
                $model->update(['gambar' => $file_name]);
            }
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
            $cat = Kategori::pluck('nama_kategori', 'id_kategori');
            $city = Regency::pluck('name', 'id');
            $produk = Produk::find($id);
            Mapper::map($produk->latitude, $produk->longtitude, ['eventBeforeLoad' => 'addMarkerListener(map);']);
            return view('produk_create')->with(['cat' => $cat, 'city' => $city, 'produk' => $produk]);
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
            if ($produk) {
                $produk->nama_produk = $request->nama_produk;
                $produk->id_produl = $request->id_produl;
                $produk->deskripsi_produk = $request->deskripsi_produk;
                $produk->latitude = $request->latitude;
                $produk->latitude = $request->latitude;
                $produk->longtitude = $request->longtitude;
                $produk->save();
                if ($request->hasFile('gambar')) {
                    $request->file('gambar')->store('public/images');

                    // ensure every image has a different name
                    $file_name = $request->file('gambar')->hashName();

                    // save new image $file_name to database
                    $produk->update(['gambar' => $file_name]);
                }
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
