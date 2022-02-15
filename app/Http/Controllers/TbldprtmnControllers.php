<?php

namespace App\Http\Controllers;

use App\Models\Tbl_dprtmn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TbldprtmnControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbldprtmn = Tbl_dprtmn::latest()->paginate(5);
        return view ('tbldprtmn.index',compact('tbldprtmn'))->with('i', (request()->input('page', 1) -1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tbldprtmn.create');
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
            'departemen'=> 'required',
            'nama_manager'=> 'required',
            'email_manager'=> 'required',
        ]);
        Tbl_dprtmn::create($request->all());

        return redirect()->route('tbldprtmn.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tbl_dprtmn $tbldprtmn)
    {
        return view('tbldprtmn.show',compact('tbldprtmn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbl_dprtmn $tbldprtmn)
    {
        return view('tbldprtmn.edit', compact('tbldprtmn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl_dprtmn $tbldprtmn)
    {
        $request->validate([
            'departemen'=> 'required',
            'nama_manager'=> 'required',
            'email_manager'=> 'required',
        ]);

        $tbldprtmn->update($request->all());

        return redirect()->route('tbldprtmn.index')->with('succes','Tbl_dprtmn Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbl_dprtmn $tbldprtmn)
    {
        $tbldprtmn->delete();

        return redirect()->route('tbldprtmn.index')->with('succes','Tbl_dprtmn Berhasil di Hapus');
    }
}


