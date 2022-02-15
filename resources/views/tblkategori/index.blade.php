@extends('home')
@section('content')

<!-- partial -->
     <div class="main-panel">
       <div class="content-wrapper">
        <a href={{ route('tblkategori.create') }}><button type="button" class="btn btn-success btn-rounded btn-fw">CREATE</button></a>
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
                                kategori prosedur
                            </strong>
                          </th>
                          <th width="245px">
                            <strong>
                              ACTION
                            </strong>
                          </th>
                       </tr>
                     </thead>
                     @foreach ($tblkategori as $ktprosedur)
                     <tr>
                       <td>{{ $ktprosedur->kategori_prosedur}}</td>
                       <td>
                         <form action="{{ route('tblkategori.destroy',$ktprosedur->id) }}" method="POST">

                    <a class="btn btn-info btn-sm" href="{{ route('tblkategori.show',$ktprosedur->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href=" {{ route('tblkategori.edit',$ktprosedur->id) }}">Edit</a>

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

