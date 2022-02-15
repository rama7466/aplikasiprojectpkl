@extends('welcome')
@section('content')

<!-- partial -->
     <div class="main-panel">
       <div class="content-wrapper">
         <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
             <div class="card">
               <div class="card-body">
                  <form action="{{ url()->current() }}"
                    method="get">
                  <div class="input-group mb-3">
                    <div class="input-group-append">
                    <input type="search" class="form-control" value="{{ request('keyword') }}" placeholder="search" name="keyword">
                      <button class="btn btn-outline-secondary" type="submit">search</button>
                    </div>
                  </div>
                  </form>
                 <div class="table-responsive">
                   <table class="table table-striped">
                     <thead>
                       <tr>

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
                           no.revisi
                            </strong>
                         </th>
                         <th>
                            <strong>
                            tanggal revisi
                            </strong>
                          </th>

                          <th>
                            <strong>
                            attachment file
                            </strong>
                          </th>
                           <th>
                               <strong>
                                   Tanggal berlaku
                               </strong>
                           </th>
                           <th>
                            <strong>
                                status
                            </strong>
                        </th>
                           <th>
                            <strong>
                                action
                            </strong>
                        </th>
                       </tr>
                     </thead>
                     @foreach ($tblcrupp as $crpp)
                     <tr>

                       <td>{{ $crpp->kode_prosedur}}{{ $crpp->nama_prosedur}}</td>
                       <td>{{ $crpp->nama_dokumen}}</td>
                       <td>0{{++$i}}</td>
                       <td>{{ $crpp->tanggal_upp}}</td>
                       <td>{{ $crpp->fileini}}</td>
                       <td>{{ $crpp->tanggal_permohonan_berlaku}}</td>
                       <td>{{ $crpp->progres}}</td>
                       <td> <a class="btn btn-info btn-sm" href="{{ route('tblcrupp.show',$crpp->id) }}">Show</a> </td>
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
