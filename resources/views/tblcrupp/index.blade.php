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
                           NO UPP
                            </strong>
                         </th>
                         <th>
                            <strong>
                                TANGGAL UPP
                            </strong>
                        </th>
                         <th>
                            <strong>
                                DEPARTEMEN
                            </strong>
                         </th>
                         <th>
                            <strong>
                                MANAGER APPROVAL
                            </strong>
                          </th>
                          <th>
                            <strong>
                                EMAIL MANAGER APPROVAL
                            </strong>
                          </th>
                          <th>
                            <strong>
                                PENGAJU
                            </strong>
                          </th>
                          <th>
                            <strong>
                               EMAIL PENGAJU
                            </strong>
                          </th>
                          <th>
                            <strong>
                               KATEGORI PROSEDUR
                            </strong>
                          </th>
                         <th>
                            <strong>
                               NAMA DAN KODE PROSEDUR
                             </strong>
                         </th>
                         <th>
                            <strong>
                               NAMA DOKUMEN
                             </strong>
                         </th>
                         <th>
                            <strong>
                                SEBELUM PERUBAHAN
                             </strong>
                         </th>
                         <th>
                            <strong>
                               SETELAH PERUBAHAN
                             </strong>
                         </th>
                         <th>
                            <strong>
                                ALASAN
                             </strong>
                         </th>
                         <th>
                            <strong>
                                ATTACHMENT FILE
                             </strong>
                         </th>
                         <th>
                            <strong>
                                TANGGAL PERMOHONAN BERLAKU
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

                    <a class="btn btn-info btn-sm" href="{{ route('tblcrupp.show',$crpp->id) }}">SHOW</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('tblcrupp.edit',$crpp->id) }}">EDIR</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">DELETE</button>
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

