@extends('layout.main')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Siswa</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('tbldprtmn.index') }}"> Kembali</a>
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
    <form action="{{ route('tbldprtmn.update',$tbldprtmn->id) }}" method="POST">
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
                        <input name="departemen" class="form-control" id="ramaramdhani@gm"  value={{$tbldprtmn->departemen}} placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>nama MANAGER</strong>
                        <input name="nama_manager" class="form-control-plaintext" value="ramaaamam12233@gmail.com"  placeholder="" readonly>
                    </div>
                    <div class="form-group">
                        <strong>EMAIL MANAGER</strong>
                        <input type="text" name="email_manager" class="form-control-plaintext" value="ramaramdhani2112@gmail.com"  placeholder="" readonly>

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
