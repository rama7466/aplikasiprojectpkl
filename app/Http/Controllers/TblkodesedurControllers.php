<?php

namespace App\Http\Controllers;

use App\Models\Tbl_kodesedur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TblkodesedurControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tblkodesedur = Tbl_kodesedur::latest()->paginate(5);
        return view ('tblkodesedur.index',compact('tblkodesedur'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tblkodesedur.create');
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
            'kode_prosedur'=> 'required',
        ]);
        Tbl_kodesedur::create($request->all());

        return redirect()->route('tblkodesedur.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tbl_kodesedur $tblkodesedur)
    {
        return view('tblkodesedur.show',compact('tblkodesedur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbl_kodesedur $tblkodesedur)
    {
        return view('tblkodesedur.edit', compact('tblkodesedur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl_kodesedur $tblkodesedur)
    {
        $request->validate([
            'kode_prosedur'=> 'required',
        ]);

        $tblkodesedur->update($request->all());

        return redirect()->route('tblkodesedur.index')->with('succes','Tbl_kodesedur Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbl_kodesedur $tblkodesedur)
    {
        $tblkodesedur->delete();

        return redirect()->route('tblkodesedur.index')->with('succes','Tbl_kodesedur Berhasil di Hapus');
    }
}


