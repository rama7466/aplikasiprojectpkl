@extends('welcome')
@section('content')

<!-- partial -->
     <div class="main-panel">
       <div class="content-wrapper">
        <a href={{ route('tambahprosedur.create') }}><button type="button" class="btn btn-success btn-rounded btn-fw">CREATE</button></a>
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
                                DEPARTEMEN
                            </strong>
                         </th>
                         <th>
                            <strong>
                               KODE PROSEDUR
                            </strong>
                          </th>
                          <th>
                            <strong>
                               KATEGORI PROSEDUR
                            </strong>
                          </th>
                          <th width="245px">
                            <strong>
                              ACTION
                            </strong>
                          </th>
                       </tr>
                     </thead>
                     @foreach ($tambahprosedur as $tbhpro)
                     <tr>
                       <td>{{ $tbhpro->departement}}</td>
                       <td>{{ $tbhpro->kategori_prosedur}}</td>
                       <td>{{ $tbhpro->kode_prosedur}}</td>
                       <td>


                        <a class="btn btn-info btn-sm" href="{{ route('tambahprosedur.show',$tbhpro->id) }}">SHOW</a>

                        <a class="btn btn-primary btn-sm" href=" {{ route('tambahprosedur.edit',$tbhpro->id) }}">EDIT</a>

                        @can('isAdmin')
                         <form action="{{ route('tambahprosedur.destroy',$tbhpro->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">DELETE</button>
                        </form>
                        @endcan

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

