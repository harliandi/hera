<?php

    namespace App\Http\Controllers;

    use App\Models\Kategori;
    use Illuminate\Http\Request;

    class KategoriController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            return view('kategori_index')->with('kategori', Kategori::all());
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('kategori_create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            Kategori::create([
                'id_parent'          => $request->id_parent,
                'nama_kategori'      => $request->nama_kategori,
                'deskripsi_kategori' => $request->deskripsi_kategori,
            ]);
            return redirect('kategori');
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
            return view('kategori_create')->with('kategori', Kategori::find($id));
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
            $kategori = Kategori::find($id);
            $kategori->id_parent = $request->id_parent;
            $kategori->nama_kategori = $request->nama_kategori;
            $kategori->deskripsi_kategori = $request->deskripsi_kategori;
            $kategori->save();
            return redirect('kategori');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            Kategori::destroy($id);
            return redirect('kategori');
        }
    }
