@extends('home')
@section('content')

<!-- partial -->
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
                               no upp
                                </strong>
                             </th>
                             <th>
                                <strong>
                                    tanggal upp
                                </strong>
                            </th>
                            <th>
                                <strong>
                                    pengaju
                                </strong>
                              </th>
                              <th>
                                <strong>
                                    nama dan kode prosedur
                                 </strong>
                             </th>
                             <th>
                                <strong>
                                    nama dokumen
                                 </strong>
                             </th>
                             <th>
                                <strong>
                                    tanggal permohonan berlaku
                                 </strong>
                              </th>
                              <th>
                                <strong>
                                    STATUS
                                 </strong>
                              </th>
                              <th width="245px">
                                <strong>
                                    action
                                 </strong>
                              </th>
                        </tr>
                     </thead>
                     @foreach ($tblcrupp as $crpp)
                     <tr>
                        <td>{{$crpp->no_upp}}</td>
                        <td>{{ $crpp->tanggal_upp}}</td>
                        <td>{{ $crpp->pengaju}}</td>
                        <td>{{ $crpp->kode_prosedur}}{{ $crpp->nama_prosedur}}</td>
                        <td>{{ $crpp->nama_dokumen}}</td>
                        <td>{{ $crpp->tanggal_permohonan_berlaku}}</td>
                        <td>{{ $crpp->progres}}</td>
                       <td>
                         <form action="{{ route('tblcrupp.destroy',$crpp->id) }}" method="POST">

                    <a class="btn btn-info btn-sm" href="{{ route('tblcrupp.show',$crpp->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('tblcrupp.edit',$crpp->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
                        </form>
                       </td>
                     </tr>
                     @endforeach
                   </table>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <!-- row end -->
         <!-- row end -->
       </div>
<!-- content-wrapper ends -->
@endsection

