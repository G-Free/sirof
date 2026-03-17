@extends('frontoffice.layout_master')

@section('main_content')

{{----}}
<div class="container-fluid m-0 p-0">

<!-- start page title -->
<div class="row mt-5">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                {{--<ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Página Inicial</li>
                </ol>--}}
            </div>
            {{--<h4 class="page-title">Página Inicial</h4>--}}
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card borda sem-sombra">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <h3 class="text-dark my-1 fs-4">Ocorrência</h3>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                  <a href="{{ route('all.ocorrencia') }}" class="btn btn-secondary waves-effect waves-light pull-right"><i class="mdi mdi-brightness-5 me-1"></i> Gerenciar</a>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-md-6 col-xl-3">
        <div class="card borda sem-sombra">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <h3 class="text-dark my-1 fs-4">Pesquisa</h3>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                  <a href="#" class="btn btn-secondary waves-effect waves-light pull-right"><i class="fe-search me-1"></i> Buscar um registro</a>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->

    @if (Auth::user()->role == 'Chefe_Posto')
        <div class="col-md-6 col-xl-3">
        <div class="card borda sem-sombra">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <h3 class="text-dark my-1 fs-4">Dashboard</h3>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                  <a href="{{ route('all.estatistica') }}" class="btn btn-secondary waves-effect waves-light pull-right"><i class="fe-eye me-1"></i> Visualizar</a>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->
    @endif
    

    <div class="col-md-6 col-xl-3">
        <div class="card borda sem-sombra">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <h3 class="text-danger my-1 fs-4">Alerta</h3>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                  <a href="#" class="btn btn-danger waves-effect waves-light pull-right"><i class="mdi mdi-alert me-1"></i> Emitir</a>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->

</div>
<!-- end row -->

@endsection