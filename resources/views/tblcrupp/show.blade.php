@extends('layout.main')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show </h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('tblcrupp.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>no upp:</strong>
                {{ $tblcrupp->no_upp }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tanggal upp:</strong>
                {{ $tblcrupp->tanggal_upp }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>departemen:</strong>
                {{ $tblcrupp->departemen }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>manager approval:</strong>
                {{ $tblcrupp->manager_approval }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email manager approval1:</strong>
                {{ $tblcrupp->email_manager_approval1 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pengaju:</strong>
                {{ $tblcrupp->pengaju }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>kategori prosedur:</strong>
                {{ $tblcrupp->kategori_prosedur }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>kode prosedur:</strong>
                {{ $tblcrupp->kode_prosedur }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Dokumen:</strong>
                {{ $tblcrupp->nama_dokumen }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>sebelum perubahan:</strong>
                {{ $tblcrupp->sebelum_perubahan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>setelah_perubahan:</strong>
                {{ $tblcrupp->setelah_perubahan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>alasan:</strong>
                {{ $tblcrupp->alasan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>attachment_file:</strong>
                {{ $tblcrupp->fileini   }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tanggal_permohonan_berlak:</strong>
                {{ $tblcrupp->tanggal_permohonan_berlaku }}
            </div>
        </div>
    </div>
@endsection
