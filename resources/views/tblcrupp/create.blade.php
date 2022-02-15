@extends('layout.main')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Siswa</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('tblcrupp.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Input gagal.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tblcrupp.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NO UPP:</strong>
                <input type="text" name="no_upp" value="00{{$codeUniq}}/UPP/PDQA/{{$today->toDateString();}}" class="form-control" placeholder="NIS SISWA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tanggal upp:</strong>
                <input type="text" name="tanggal_upp" value="{{$today->toDateString();}}" class="form-control" placeholder="NAMA SISWA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>departemen:</strong>
                  <select class="form-control" name="departemen">
                    @foreach($departemen as $Tbl_dprtmn)
                    <option value="{{$Tbl_dprtmn->departemen}}">{{$Tbl_dprtmn->departemen}}</option>
                    @endforeach
                  </select>
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>EMAIL MANAGER</strong>
                <input name="manager_approval" class="form-control-plaintext" value="ramaaamam12233@gmail.com"  placeholder="" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>EMAIL MANAGER APPROVAL1</strong>
                <input type="text" name="email_manager_approval1" class="form-control-plaintext" value="ramaramdhani2112@gmail.com"  placeholder="" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pengaju:</strong>
                <input class="form-control" name="pengaju" placeholder="Content">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email pengaju:</strong>
                <input class="form-control" name="email_pengaju" placeholder="Content">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori Prosedur:</strong>
                  <select class="form-control" name="kategori_prosedur">
                    @foreach($kategori_prosedur as $Tbl_kategori)
                    <option value="{{$Tbl_kategori->kategori_prosedur}}">{{$Tbl_kategori->kategori_prosedur}}</option>
                    @endforeach
                  </select>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode prosedur:</strong>
                      <select class="form-control" name="kode_prosedur">
                        @foreach($kode_prosedur as $Tbl_kodesedur)
                        <option value="{{ $Tbl_kodesedur->kode_prosedur}}">{{ $Tbl_kodesedur->kode_prosedur}}</option>
                        @endforeach
                      </select>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> nama dokumen:</strong>
                <input class="form-control" name="nama_dokumen" placeholder="Content">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> setelah perubahan:</strong>
                <input class="form-control" name="setelah_perubahan" placeholder="Content">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> sebelum perubahan:</strong>
                <input class="form-control" name="sebelum_perubahan" placeholder="Content">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> alasan:</strong>
                <input class="form-control" name="alasan" placeholder="Content">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> attachment file:</strong>
                <input type="file" id="fileini" class="form-control" name="fileini" placeholder="Content">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> tanggal permohonan berlaku:</strong>
                <input class="form-control" name="tanggal_permohonan_berlaku" value="{{$today->addDays(5);}}" placeholder="Content">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>STATUS</strong>
                <input name="progres" class="form-control-plaintext" value="PENDING"  placeholder="" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
