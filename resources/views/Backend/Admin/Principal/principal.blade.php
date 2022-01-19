@extends('backend.menus.superior')

@section('content-admin-css')
    <link href="{{ asset('css/adminlte.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/toastr.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/estiloToggle.css') }}" type="text/css" rel="stylesheet" />

@stop

<style>

    table{
        /*Ajustar tablas*/
        table-layout:fixed;
    }

</style>

<div class="content-wrapper" id="app">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-bookmark"> NUEVO REGISTRO</i>

                    </h3>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">

                        <micomponente></micomponente>

                    </div>

                </div>
            </div>

        </div>
    </section>



</div>





@extends('backend.menus.footerjs')
@section('archivos-js')

</script>

    <script src="{{ asset('js/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/axios.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/alertaPersonalizada.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){


        });
    </script>


@endsection
