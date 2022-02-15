<?php

namespace App\Http\Controllers;

use App\Models\Tbl_kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TblkategoriControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tblkategori = Tbl_kategori::latest()->paginate(5);
        return view ('tblkategori.index',compact('tblkategori'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tblkategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kategori_prosedur'=> 'required',
        ]);
        Tbl_kategori::create($request->all());

        return redirect()->route('tblkategori.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tbl_kategori $tblkategori)
    {
        return view('tblkategori.show',compact('tblkategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbl_kategori $tblkategori)
    {
        return view('tblkategori.edit', compact('tblkategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl_kategori $tblkategori)
    {
        $request->validate([
            'kategori_prosedur'=> 'required',
        ]);

        $tblkategori->update($request->all());

        return redirect()->route('tblkategori.index')->with('succes','Tbl_kategori Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbl_kategori $tblkategori)
    {
        $tblkategori->delete();

        return redirect()->route('tblkategori.index')->with('succes','Tbl_kategori Berhasil di Hapus');
    }
}


