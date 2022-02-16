<?php

namespace App\Http\Controllers;
use App\Models\Tbl_crupp;
use App\Models\Tbl_dprtmn;
use App\Models\Tbl_kodesedur;
use App\Models\Tbl_kategori;

use Illuminate\Http\Request;

class TbluppprocsControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tblcrupp = Tbl_crupp::latest()->paginate(5);
        $departemen = Tbl_dprtmn::all();
        $kode_prosedur = Tbl_kodesedur::all();
        $kategori_prosedur = Tbl_kategori::all();
         $tblcrupp = Tbl_crupp::whereIn('progres',['PENDING'])->get();
        return view('tbluppprocs.index', compact('departemen',$departemen ,'kode_prosedur',$kode_prosedur,'kategori_prosedur',$kategori_prosedur,'tblcrupp',$tblcrupp))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
