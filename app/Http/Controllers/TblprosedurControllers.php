<?php

namespace App\Http\Controllers;
use App\Models\Tbl_crupp;
use App\Models\Tbl_dprtmn;
use App\Models\Tbl_kodesedur;
use App\Models\Tbl_kategori;

use Illuminate\Http\Request;

class TblprosedurControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $pagination  = 25;
        $tblcrupp    = Tbl_crupp::when($request->keyword, function ($query) use ($request) {
            $query
            ->where('nama_dokumen', 'like', "%{$request->keyword}%");
        })->orderBy('created_at', 'desc')->paginate($pagination);

        $tblcrupp->appends($request->only('keyword'));

        $tblcrupp = Tbl_crupp::whereIn('status',[3])->get();
        return view('tblprosedur.index', [
            'nama_dokumen'    => 'tblcrupp',
            'tblcrupp' => $tblcrupp,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);

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
