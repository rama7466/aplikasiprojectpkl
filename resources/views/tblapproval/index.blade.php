 @extends('welcome')
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
                                    action
                                 </strong>
                              </th>
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
                                   manager approval 1
                               </strong>
                             </th>
                             <th>
                               <strong>
                                   email manager approval1
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
                                   attachment file user
                                </strong>
                            </th>
                            <th>
                                <strong>
                                    progress
                                 </strong>
                             </th>
                          </tr>
                        </thead>
                        @foreach ($tblcrupp as $crpp)
                        <tr>
                            <td>
                            <?php if($crpp->status == 0){?>
                            <div class="row">
                               <form method="POST" action="{{route('validateCrupp')}}">
                              @csrf
                              <input type="hidden" name="nomor" value="{{$crpp->id}}">
                              <input type="submit" value="ACCEPT" class="btn btn-info btn-sm">
                                </form>
                               <form method="POST" action="{{route('dissapprovedCrupp')}}">
                              @csrf
                              <input type="hidden" name="nomor" value="{{$crpp->id}}">
                              <input type="submit" value="REJECT" class="btn btn-info btn-sm">
                                </form>
                              </div>
                          <?php }
                             elseif($crpp->status == 1){
                              echo"DIPROSES";
                             }elseif ($crpp->status == 3) {
                                echo"DISOSIALISASI";
                             }
                               else{
                                   echo"DITOLAK";
                                }

                               ?>
                            <a class="btn btn-info btn-sm" href="{{ route('tblcrupp.show',$crpp->id) }}">Show</a>

                            </td>

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
                           <td>{{ $crpp->nommor}}</td>
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
