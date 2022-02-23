@extends('home')
@section('content')

<!-- partial -->
     <div class="main-panel">
       <div class="content-wrapper">
        <a href={{ route('tbldprtmn.create') }}><button type="button" class="btn btn-success btn-rounded btn-fw">CREATE</button></a>
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
                               NAMA MANAGER
                            </strong>
                          </th>
                          <th>
                            <strong>
                               EMAIL MANAGER
                            </strong>
                          </th>
                          <th width="245px">
                            <strong>
                              ACTION
                            </strong>
                          </th>
                       </tr>
                     </thead>
                     @foreach ($tbldprtmn as $dprt)
                     <tr>
                       <td>{{ $dprt->departemen}}</td>
                       <td>{{ $dprt->nama_manager}}</td>
                       <td>{{ $dprt->email_manager}}</td>
                       <td>


                         <form action="{{ route('tbldprtmn.destroy',$dprt->id) }}" method="POST">

                    <a class="btn btn-info btn-sm" href="{{ route('tbldprtmn.show',$dprt->id) }}">SHOW</a>

                    <a class="btn btn-primary btn-sm" href=" {{ route('tbldprtmn.edit',$dprt->id) }}">EDIT</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">DELETE</button>
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
       <script>
   $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');
         console.log(status);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/userChangeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
      </script>
<!-- content-wrapper ends -->
@endsection

