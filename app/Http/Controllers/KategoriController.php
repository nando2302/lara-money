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
        $kategori = Kategori::latest()->get();
        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'namaKategori' => 'required|max:12',
            'Desckategori' => 'required'
        ]);
        $kategori = Kategori::create([
            'namaKategori' => $request->namaKategori,
            'Desckategori' => $request->Desckategori
        ]);

        if ($kategori) {
            return redirect()->route('kategori.index')->with(['success' => "berhasil Menambahkan Data"]);
        } else {
            return redirect()->back()->withInput()->with(['error' => 'something problem for fill']);
        }
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
        $kategori = Kategori::findOrFail($id);
        // dd($kategori);
        return view('admin.kategori.edit', compact('kategori'));
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
        $this->validate($request, [
            'namaKategori' => 'required|max:12',
            'Desckategori' => 'required',
        ]);
        $kategori = Kategori::findOrFail($id);
        $kategori->update([
            'namaKategori' => $request->namaKategori,
            'Desckategori' => $request->Desckategori
        ]);
        if ($kategori) {
            return redirect()->route('kategori.index')->with(['success' => 'this fill so updated!']);
        } else {
            return redirect()->back()->withInput()->with(['error' => 'something problem on this fill']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        if ($kategori) {
            return redirect()->route('kategori.index')->with(['success' => 'Data has been delete! ']);
        } else {
            return redirect()->back()->with(['error' => 'something wrong about delete']);
        }
    }
}
