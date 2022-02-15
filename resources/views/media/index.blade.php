@extends('welcome')
@section('content')
@if(session()->has('message'))
<p>{{ session()->get('message') }}</p>
@endif
<form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="group">
    <label for="file">Upload File</label>
    <input type="file" id="file" name="file">
    @if($errors->has('file'))
        <small class="error">{{ $errors->first('file') }}</small>
    @endif
</div>
<div class="group">
    <button class="save">Upload</button>
</div>
</form>
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-striped">
                   <thead>
                     <tr>
                       <th>
                          <strong>
                         file
                          </strong>
                       </th>
                       <th>
                          <strong>
                              download
                          </strong>
                      </th>
                       <th>
                          <strong>
                              action
                          </strong>
                       </th>
                     </tr>
                   </thead>
                   @if($medias->count())
                   @foreach ($medias as $media)
                   <tr>
                       <td>
                       <div>Nama: {{ $media->name }}</div>
                       <div>File: {{ $media->file }}</div>
                       <div>Ekstensi: {{ $media->extension }}</div>
                       <div>Ukuran: {{ $media->size }}</div>
                       <div>Mime: {{ $media->mime }}</div>
                       </td>
                       <td><a href="{{ url('uploads/' . $media->file) }}" download>Download</a></td>
                       <td align="center">
                        <button form="delete-file" onclick="return confirm('Apakah anda yakin ingin menghapus file?')">Hapus</button>
                        <form action="{{ route('media.destroy', $media->id) }}" method="post" id="delete-file">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="delete">
                        </form>
                    </td>
                   </tr>
                   @endforeach
                   @else
                   <tr>
                       <td align="center" colspan="3">Belum ada file</td>
                   </tr>
               @endif
                 </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- row end -->
      <!-- row end -->
    </div>
@endsection
