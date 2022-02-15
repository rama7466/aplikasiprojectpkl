<?php

namespace App\Http\Controllers;

use App\Models\Tbl_crupp;
use App\Models\Tbl_dprtmn;
use App\Models\Tbl_kodesedur;
use App\Models\Tbl_kategori;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class TblcruppControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $tblcrupp = Tbl_crupp::all();
         $pagination  = 5;
        return view ('tblcrupp.index',compact('tblcrupp'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departemen = Tbl_dprtmn::all();
        $kode_prosedur = Tbl_kodesedur::all();
        $kategori_prosedur = Tbl_kategori::all();
        $today = new Carbon();
        $tblcrupp = Tbl_crupp::latest()->paginate(5);
        $codeUniq = Tbl_crupp::count();

        return view('tblcrupp.create', compact('departemen',$departemen ,'kode_prosedur',$kode_prosedur,'kategori_prosedur',$kategori_prosedur,'today',$today,'codeUniq',$codeUniq))
        ->with('i', (request()->input('page', 1) -1) * 5);
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
            'no_upp' => 'required',
            'tanggal_upp' => 'required',
            'departemen'=> 'required',
            'manager_approval'=> 'required',
            'email_manager_approval1'=> 'required',
            'pengaju'=> 'required',
            'email_pengaju'=> 'required',
            'kategori_prosedur'=> 'required',
            'kode_prosedur'=> 'required',
            'nama_dokumen'=> 'required',
            'sebelum_perubahan'=> 'required',
            'setelah_perubahan'=> 'required',
            'alasan'=> 'required',
            'fileini'=> 'required',
            'tanggal_permohonan_berlaku'=> 'required',
            'progres'=> 'required',
        ]);

        $file_name = $request->fileini->GetClientOriginalName();
        $fileini = $request->fileini->storeAs('DATAUPP', $file_name);

        Tbl_crupp::create([
             'no_upp'=>$request->no_upp,
            'tanggal_upp'=>$request->tanggal_upp,
            'departemen'=>$request->departemen,
            'manager_approval'=>$request->manager_approval,
            'email_manager_approval1'=>$request->email_manager_approval1,
            'pengaju'=>$request->pengaju,
            'email_pengaju'=>$request->email_pengaju,
            'kategori_prosedur'=>$request->kategori_prosedur,
            'kode_prosedur'=>$request->kode_prosedur,
            'nama_dokumen'=>$request->nama_dokumen,
            'sebelum_perubahan'=>$request->sebelum_perubahan,
            'setelah_perubahan'=>$request->setelah_perubahan,
            'alasan'=>$request->alasan,
            'fileini' => $fileini,
            'tanggal_permohonan_berlaku'=>$request->tanggal_permohonan_berlaku,
            'progres'=>$request->progres,

        ]);

        return redirect()->route('tblcrupp.index')->with('succes','Data Berhasil di Input');
    }
    public function downloadFile($fileini)
    {
        return response()->download(storage_path("app/public/DATAUPP/{$fileini}"));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tbl_crupp $tblcrupp)
    {
        return view('tblcrupp.show',compact('tblcrupp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbl_crupp $tblcrupp)
    {
        return view('tblcrupp.edit', compact('tblcrupp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl_crupp $tblcrupp)
    {
        $request->validate([
            'no_upp' => 'required',
            'tanggal_upp' => 'required',
            'departemen'=> 'required',
            'manager_approval'=> 'required',
            'email_manager_approval1'=> 'required',
            'pengaju'=> 'required',
            'email_pengaju'=> 'required',
            'kategori_prosedur'=> 'required',
            'kode_prosedur'=> 'required',
            'nama_dokumen'=> 'required',
            'sebelum_perubahan'=> 'required',
            'setelah_perubahan'=> 'required',
            'alasan'=> 'required',
            'fileini'=> 'required',
            'tanggal_permohonan_berlaku'=> 'required',
            'progres'=> 'required',
        ]);

        $tblcrupp->update($request->all());

        return redirect()->route('tblcrupp.index')->with('succes','Tbl_crupp Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbl_crupp $tblcrupp)
    {
        $tblcrupp->delete();

        return redirect()->route('tblcrupp.index')->with('succes','Tbl_crupp Berhasil di Hapus');
    }

}


