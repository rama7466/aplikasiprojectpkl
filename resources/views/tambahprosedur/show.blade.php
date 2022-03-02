@extends('layout.main')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show </h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('tambahprosedur.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>departemen:</strong>
                {{ $tambahprosedur->departement }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>KATEGORI PROSEDUR:</strong>
                {{$tambahprosedur->kategori_prosedur}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>KODE PROSEDUR:</strong>
                {{ $tambahprosedur->kode_prosedur}}
            </div>
        </div>
    </div>
@endsection
