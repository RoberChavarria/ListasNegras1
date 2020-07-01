@extends('layouts.admin')
@extends('tema')
@extends('MenuLat')



@section('content')
    <section class="content">
      <div class="container-fluid">

       <div id="panel-1" class="panel">
          <div class="panel-hdr">
              <h2>
                Busqueda masiva de contribuyentes.

              </h2>
              <div class="panel-toolbar">
                 
              </div>
          </div>    
          <div class="panel-container show">
            <div class="panel-content" id="altaContent">
              <div class="row">
                <div class="col-md-12">
                  <div id="appianDivAlta">
           
                  <appian-task taskId="{{ $nuevo }}"></appian-task>
                   <!-- <appian-action processModelUuid="0002dd27-8994-8000-f92f-7f0000014e7a"></appian-action> -->
                  </div>
                </div>
              </div>
            </div>
          </div> 
       </div>







    
      </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
@endsection

@section('scriptpage')
<!-- DataTable -->

<meta name="csrf-token" content="{{ csrf_token() }}">
              <script src="https://mbgedev.appiancloud.com/suite/tempo/ui/sail-client/embeddedBootstrap.nocache.js" id="appianEmbedded"></script>
<script>
            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

</script>

@endsection