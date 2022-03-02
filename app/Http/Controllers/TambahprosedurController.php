<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tambahprosedur;

class TambahprosedurController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tambahprosedur = Tambahprosedur::latest()->paginate(5);
        return view ('tambahprosedur.index',compact('tambahprosedur'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahprosedur.create');
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
            'departement'=> 'required',
            'kategori_prosedur'=> 'required',
            'kode_prosedur'=> 'required',
        ]);
        Tambahprosedur::create($request->all());

        return redirect()->route('tambahprosedur.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tambahprosedur $tambahprosedur)
    {
        return view('tambahprosedur.show',compact('tambahprosedur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tambahprosedur $tambahprosedur)
    {
        return view('tambahprosedur.edit', compact('tambahprosedur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tambahprosedur $tambahprosedur)
    {
        $request->validate([
            'departement'=> 'required',
            'kategori_prosedur'=> 'required',
            'kode_prosedur'=> 'required',
        ]);

        $tambahprosedur->update($request->all());

        return redirect()->route('tambahprosedur.index')->with('succes','Tambahprosedur Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tambahprosedur $tambahprosedur)
    {
        $tambahprosedur->delete();

        return redirect()->route('tambahprosedur.index')->with('succes','Tambahprosedur Berhasil di Hapus');
    }
}
