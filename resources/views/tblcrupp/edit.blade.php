@extends('layout.main')
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
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      <!-- partial -->
    <form action="{{ route('tblcrupp.update',$tblcrupp->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">CREATE UPP</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                        <strong>no upp</strong>
                        <input name="no_upp" class="form-control-plaintext" value="{{$tblcrupp->no_upp}}"  placeholder="" readonly>
                    </div>
                     <div class="form-group">
                        <strong>TANGGALUPP</strong>
                        <input name="tanggal_upp" class="form-control-plaintext" value="{{$tblcrupp->tanggal_upp}}"  placeholder="" readonly>
                    </div>
                    <div class="form-group">
                        <strong>DEPARTEMEN</strong>
                        <input name="departemen" class="form-control" id="ramaramdhani@gm"  value={{$tblcrupp->departemen}} placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>EMAIL MANAGER</strong>
                        <input name="manager_approval" class="form-control-plaintext" value="ramaaamam12233@gmail.com"  placeholder="" readonly>
                    </div>
                    <div class="form-group">
                        <strong>EMAIL MANAGER APPROVAL1</strong>
                        <input type="text" name="email_manager_approval1" class="form-control-plaintext" value="ramaramdhani2112@gmail.com"  placeholder="" readonly>
                    </div>
                    <div class="form-group">
                        <strong>PENGAJU</strong>
                        <input type="text" name="pengaju" class="form-control"  value={{ $tblcrupp->pengaju}} placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>EMAIL PENGAJU</strong>
                        <input name="email_pengaju" class="form-control" id="ramaramdhani@gm"  value={{$tblcrupp->email_pengaju}} placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>KATEGORI PRSEDUR</strong>
                        <input name="kategori_prosedur" class="form-control" id="ramaramdhani@gm"  value={{$tblcrupp->kategori_prosedur}} placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>KODE PROSEDUR</strong>
                        <input name="kode_prosedur" class="form-control" id="ramaramdhani@gm"  value={{$tblcrupp->kode_prosedur}} placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>NAMA DOKUMEN</strong>
                        <input type="text" name="nama_dokumen" class="form-control"   value={{$tblcrupp->nama_dokumen}} placeholder="jika prosedur eksist,pastikan nama file copy dari prosedur">
                    </div>
                    <div class="form-group">
                        <strong>SETELAH PERUBAHAN</strong>
                        <input type="text" name="setelah_perubahan" class="form-control"  value={{$tblcrupp->setelah_perubahan}} placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>SEBELUM PERUBAHAN</strong>
                        <input type="text" name="sebelum_perubahan" class="form-control"  value={{$tblcrupp->sebelum_perubahan}} placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>ALASAN</strong>
                        <input type="text" name="alasan" class="form-control"  value={{$tblcrupp->alasan}} placeholder="">
                    </div>
                    <div class="form-group">
                      <strong>File upload</strong>
                      <input name="fileini" value="{{$tblcrupp->fileini}}" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info"  disabled placeholder="Upload">
                      </div>
                    </div>
                    <div class="form">
                        <strong>TANGGAL BERLAKU</strong>
                        <input name="tanggal_permohonan_berlaku" class="form-control-plaintext" value="{{$tblcrupp->tanggal_permohonan_berlaku}}"  placeholder="" readonly>
                    </div>
                    <div class="form-group">
                        <strong>STATUS</strong>
                        <input type="text" name="progres" class="form-control"  value={{$tblcrupp->progres}} placeholder="">
                    </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
