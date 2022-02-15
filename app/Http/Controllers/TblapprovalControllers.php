<?php

namespace App\Http\Controllers;
use App\Models\Tbl_crupp;
use App\Models\Tbl_dprtmn;
use App\Models\Tbl_kodesedur;
use App\Models\Tbl_kategori;


use Illuminate\Http\Request;

class TblapprovalControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departemen = Tbl_dprtmn::all();
        $kode_prosedur = Tbl_kodesedur::all();
        $kategori_prosedur = Tbl_kategori::all();
        $tblcrupp = Tbl_crupp::all();
        return view('tblapproval.index', compact('departemen',$departemen ,'kode_prosedur',$kode_prosedur,'kategori_prosedur',$kategori_prosedur,'tblcrupp',$tblcrupp))->with('i', (request()->input('page', 1) -1) * 5);
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
    public function approvedCrupp(Request $request){
        $id = $request->nomor;
        $data = Tbl_crupp::find($id);

        $data->update([
            'progres'=>'DIPROSES',
            'status'=>'1'
        ]);

        return redirect(route('tblapproved.index'));
    }
    public function disapprovedCrupp(Request $request){
        $id = $request->nomor;
        $data = Tbl_crupp::find($id);

        $data->update([
            'progres'=>'DITOLAK',
            'status'=>'2']);

        return redirect(route('tbluppprocs.index'));
    }
    public function sosialisasiCrupp(Request $request){
        $id = $request->nomor;
        $data = Tbl_crupp::find($id);

        $data->update([
            'progres'=>'DISOSIALISASI',
            'status'=>'3']);

        return redirect(route('tblformsosi.create'));
    }
}
