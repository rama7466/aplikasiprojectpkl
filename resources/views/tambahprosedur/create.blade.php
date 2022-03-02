@extends('layout.main')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New </h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('tambahprosedur.index') }}"> Kembali</a>
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

<form action="{{ route('tambahprosedur.store') }}" method="POST">
    @csrf

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>departemen:</strong>
            <input class="form-control"  name="departement" placeholder="Content">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>kode prosedur:</strong>
            <input class="form-control" name="kategori_prosedur" placeholder="Content">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Kategori Prosedur:</strong>
            <input class="form-control" name="kode_prosedur" placeholder="Content">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
       <a href="tblprosedur/index"> <button type="submit" class="btn btn-primary">Submit</button></a>
    </div>
</div>

</form>
@endsection

