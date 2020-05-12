@extends('layouts.admin')
@extends('tema')


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

      responsive : true,
      ajax: "{{ route('getList') }}",
      columns: [
        {data: 'RFC', name: 'RFC'},
        {data: 'Nombre del Contribuyente', name: 'Nombre del Contribuyente'},

        
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
 
</script>
@endsection