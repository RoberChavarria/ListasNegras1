@extends('layouts.admin')
@extends('tema')
@extends('MenuLat')


@section('content')

<section class="content">
                <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
                            <li class="breadcrumb-item">Application Intel</li>
                            <li class="breadcrumb-item active">Lista Negra</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                   
       </section>

    <section class="content">
    
    
      <div class="container-fluid">
       <div id="panel-1" class="panel">
          <div class="panel-hdr">
              <h2></h2>
              <div class="panel-toolbar">
                 
              </div>
          </div> 
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-bordered table-hover table-striped w-100" id="tableGrid">
                      <thead class="bg-warning-200">
                        <tr>
                          <th>RFC</th>
                          <th>CONTRIBUYENTE</th>
                          <th>SITUACIÓN</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div> 
       </div>    
      </div><!-- /.container-fluid -->
    </section>

@endsection

@section('scriptpage')
<!-- DataTable -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
  $(document).ready(function() {

    $('#tableGrid').DataTable({
          ajax: "{{ route('getList') }}",
          columns: [
            {"data": "RFC"},
            {"data": "NOMBRE"},
            {"data": "SITUACION"}
          ]
    }); 

    $.ajax({
      url: "{{ route('getList') }}",
      success: function(data){
        console.log(data);
       

      }
    });
    
  });
 
</script>
@endsection