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
                         <th>
                             <strong>
                           no upp
                             </strong>
                         </th>
                         <th>
                            <strong>
                            departemen
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
                           seebelum perubahan
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
                       </tr>
                       @foreach ($tblcrupp as $crpp)
                       <tr>
                         <td>{{ $crpp->no_upp}}</td>
                         <td>{{ $crpp->departemen}}</td>
                         <td>{{ $crpp->kode_prosedur}}</td>
                         <td>{{ $crpp->nama_dokumen}}</td>
                         <td>{{ $crpp->sebelum_perubahan }}</td>
                         <td>{{ $crpp->setelah_perubahan }}</td>
                         <td>{{ $crpp->alasan}}</td>
                         <td>{{ $crpp->fileini}}</td>
                       </tr>
                       @endforeach
                     </thead>
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
