<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengaturan_index')->with('pengaturan', Pengaturan::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengaturan_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengaturan::create([
           'nama_pengaturan' => $request->nama_pengaturan,
           'isi_pengaturan' => $request->isi_pengaturan,
           'deskripsi_pengaturan' => $request->deskripsi_pengaturan,
        ]);
        return redirect('pengaturan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pengaturan_create')->with('pengaturan', Pengaturan::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengaturan = Pengaturan::find($id);
        $pengaturan->nama_pengaturan = $request->nama_pengaturan;
        $pengaturan->isi_pengaturan = $request->isi_pengaturan;
        $pengaturan->deskripsi_pengaturan = $request->deskripsi_pengaturan;
        $pengaturan->save();
        return redirect('pengaturan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengaturan::destroy($id);
        return redirect('pengaturan');
    }
}
