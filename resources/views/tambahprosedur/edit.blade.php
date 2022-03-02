@extends('layout.main')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>EDIT TAMBAH PROSEDUR</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('tambahprosedur.index') }}"> Kembali</a>
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
    <form action="{{ route('tambahprosedur.update',$tambahprosedur->id) }}" method="POST">
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
                        <strong>DEPARTEMEN</strong>
                        <input name="departement" class="form-control" value={{$tambahprosedur->departement}} placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>KATEGORI PROSEDUR</strong>
                        <input name="kategori_prosedur" class="form-control" value={{$tambahprosedur->kategori_prosedur}} placeholder="" >
                    </div>
                    <div class="form-group">
                        <strong>KODE PROSEDUR</strong>
                        <input name="kode_prosedur" class="form-control" value={{$tambahprosedur->kode_prosedur}}   placeholder="">
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
