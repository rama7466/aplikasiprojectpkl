@extends('welcome')
@section('content')

<!-- partial -->
     <div class="main-panel">
       <div class="content-wrapper">
        <a href={{ route('tblcrupp.create') }}><button type="button" class="btn btn-success btn-rounded btn-fw">CREATE</button></a>
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
                                departemen
                            </strong>
                         </th>
                         <th>
                            <strong>
                                manager approval
                            </strong>
                          </th>
                          <th>
                            <strong>
                                email manager approval1
                            </strong>
                          </th>
                          <th>
                            <strong>
                                pengaju
                            </strong>
                          </th>
                          <th>
                            <strong>
                                email pengaju
                            </strong>
                          </th>
                          <th>
                            <strong>
                               kategori prosedur
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
                                sebelum perubahan
                             </strong>
                         </th>
                         <th>
                            <strong>
                                setelah perubahan
                             </strong>
                         </th>
                         <th>
                            <strong>
                                alasan
                             </strong>
                         </th>
                         <th>
                            <strong>
                                attachment file
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
                              ACTION
                            </strong>
                          </th>
                       </tr>
                     </thead>
                     @foreach ($tblcrupp as $crpp)
                     <tr>
                       <td>{{$crpp->no_upp}}</td>
                       <td>{{ $crpp->tanggal_upp}}</td>
                       <td>{{ $crpp->departemen}}</td>
                       <td>{{ $crpp->manager_approval}}</td>
                       <td>{{ $crpp->email_manager_approval1}}</td>
                       <td>{{ $crpp->pengaju}}</td>
                       <td>{{ $crpp->email_pengaju}}</td>
                       <td>{{ $crpp->kategori_prosedur}}</td>
                       <td>{{ $crpp->kode_prosedur}}</td>
                       <td>{{ $crpp->nama_dokumen}}</td>
                       <td>{{ $crpp->sebelum_perubahan }}</td>
                       <td>{{ $crpp->setelah_perubahan }}</td>
                       <td>{{ $crpp->alasan}}</td>
                       <td>{{ $crpp->fileini}}</td>
                       <td>{{ $crpp->tanggal_permohonan_berlaku}}</td>
                       <td>{{ $crpp->progres}}</td>


                       @can('isAdmin')
                        <td><a class="btn btn-primary btn-sm" href="{{ route('downloadfile',$crpp->fileini) }}">download</a></td>
                       <td>
                         <form action="{{ route('tblcrupp.destroy',$crpp->id) }}" method="POST">

                    <a class="btn btn-info btn-sm" href="{{ route('tblcrupp.show',$crpp->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('tblcrupp.edit',$crpp->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
                @endcan
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

