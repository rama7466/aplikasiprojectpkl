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
                          <th width="245px">
                              <strong>
                                  ACTION
                               </strong>
                            </th>
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
                                ATTACHMENT FILE USER
                             </strong>
                         </th>
                         <th>
                             <strong>
                                 STATUS
                              </strong>
                          </th>
                        </tr>
                      </thead>
                      @foreach ($tblcrupp as $crpp)
                      <tr>
                       <td>
                          <a class="btn btn-info btn-sm" href="{{ route('tblcrupp.show',$crpp->id) }}">Show</a>



                            <?php if($crpp->status == 1){?>
                            <div class="row">
                            <form method="POST" action="{{route('sosialisasiCrupp')}}">
                              @csrf
                              <input type="hidden" name="nomor" value="{{$crpp->id}}">
                              <input type="submit" value="SOSIALISASI" class="btn btn-info btn-sm">
                                </form>
                              </div>
                          <?php }elseif($crpp->status == 3)
                          {
                              echo"DISOSIALISASI";
                            }
                          else{
                              echo"DITOLAK";}
                              ?>

                          <a class="btn btn-info btn-sm" href="{{ route('tblcrupp.edit',$crpp->id) }}">edit</a>


                        <td>{{$crpp->no_upp}}</td>
                        <td>{{ $crpp->tanggal_upp}}</td>
                        <td>{{ $crpp->departemen}}</td>
                        <td>{{ $crpp->pengaju}}</td>
                        <td>{{ $crpp->email_pengaju}}</td>
                        <td>{{ $crpp->manager_approval}}</td>
                        <td>{{ $crpp->email_manager_approval1}}</td>
                        <td>{{ $crpp->kategori_prosedur}}</td>
                        <td>{{ $crpp->kode_prosedur}}{{ $crpp->nama_prosedur}}</td>
                        <td>{{ $crpp->nama_dokumen}}</td>
                        <td>{{ $crpp->sebelum_perubahan }}</td>
                        <td>{{ $crpp->setelah_perubahan }}</td>
                        <td>{{ $crpp->alasan}}</td>
                        <td>{{ $crpp->fileini}}</td>
                        <td>{{ $crpp->progres}}</td>
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
