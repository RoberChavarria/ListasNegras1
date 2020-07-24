@extends('layouts.admin')
@extends('tema')
@extends('MenuLat')


@section('content')

<section class="content">
                <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
                            <li class="breadcrumb-item">Application Intel</li>
                            <li class="breadcrumb-item active">Tareas Activas</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-chart-area'></i> <span class='fw-300'>Tareas Activas</span>
                                <small>
                                </small>
                            </h1>
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
                          <th>NOMBRE</th>
                          <th>ESTATUS</th>
                          <th>FECHA PROCESO</th>
                          <th>USUARIO</th>
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
    
    //$('.select2').select2({ width: '100%',height:'100%' });
    $('#tableGrid').DataTable({
      //processing: true,
      //serverSide: true,
      responsive : true,
      ajax: "{{ route('api.reporteTareasGrid') }}",
      columns: [
        {data: 'c0', name: 'NOMBRE'},
        {data: 'c7', name: 'ESTATUS'},
        {data: 'c3', name: 'FECHA PROCESO'},
        {data: 'c6', name: 'USUARIO'}

        
      ],
      language: {
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
          "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Entradas",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
              "first": "Primero",
              "last": "Ultimo",
              "next": "Siguiente",
              "previous": "Anterior"
          }
      }

    }); 
  });


  

 
</script>
@endsection