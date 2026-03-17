@extends('frontoffice.layout_master')

@section('main_content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    {{--<ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active">Página Inicial</li>
                    </ol>--}}
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- ================= KPIs ================= -->
    <div class="row g-">

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Total Ocorrências</h6>
                    <h3 id="totalOcorrencias">{{$ocorrencias->count()}}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3" >
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Total Envolvidos</h6>
                    <h3 id="totalEnvolvidos">{{$envolvidos->count()}}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Infrações Migratórias</h6>
                    <h3 id="migratorias">{{$infraccoes_migratorias->count()}}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Infrações Alfandegárias</h6>
                    <h3 id="alfandegarias">{{$infraccoes_alfandegarias->count()}}</h3>
                </div>
            </div>
        </div>

    </div>


    <!-- ================= GRÁFICOS ================= -->
    <div class="row mt-1">

        <!-- Situação -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Ocorrências por Estado</h5>
                    <canvas id="chartSituacao"></canvas>
                </div>
            </div>
        </div>

        <!-- Fluxo -->
        <div class="col-md-6" >
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Fluxo Fronteiriço</h5>
                    <canvas id="chartFluxo" style="max-height: 300px;"></canvas>
                </div>
            </div>
        </div>

    </div>


    <div class="row mt-1">

        <!-- Mensal -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Ocorrências por Mês</h5>
                    <canvas id="chartMensal"></canvas>
                </div>
            </div>
        </div>

        <!-- Tipos -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Distribuição de Infrações</h5>
                    <canvas id="chartInfracoes" style="max-height: 300px;"></canvas>
                </div>
            </div>
        </div>

    </div>


    <!-- ================= TABELA ================= -->
    <div class="row mt-1">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Infrações Mais Frequentes</h5>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Subtipo</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Migratória</td>
                                    <td>Entrada ilegal de estrangeiros</td>
                                    <td>36</td>
                                </tr>
                                <tr>
                                    <td>Migratória</td>
                                    <td>Excesso de permanência</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>Alfandegária</td>
                                    <td>Falta de declaração de bens</td>
                                    <td>19</td>
                                </tr>
                                <tr>
                                    <td>Alfandegária</td>
                                    <td>Transgressão cambial</td>
                                    <td>11</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

    // SITUAÇÃO
    new Chart(document.getElementById("chartSituacao"), {
        type: 'bar',
        data: {
            labels: ["Aberto", "Em Investigação", "Encerrado", "Arquivado"],
            datasets: [{
                label: "Ocorrências",
                data: [15, 62, 21, 30]
            }]
        }
    });

    // FLUXO
    new Chart(document.getElementById("chartFluxo"), {
        type: 'pie',
        data: {
            labels: ["Entrada", "Saída"],
            datasets: [{
                data: [83, 45]
            }]
        }
    });

    // MENSAL
    new Chart(document.getElementById("chartMensal"), {
        type: 'line',
        data: {
            labels: ["Ago", "Set", "Out", "Nov", "Dez", "Jan"],
            datasets: [{
                label: "Ocorrências",
                data: [18, 21, 24, 19, 23, 23]
            }]
        }
    });

    // TIPOS
    new Chart(document.getElementById("chartInfracoes"), {
        type: 'doughnut',
        data: {
            labels: ["Migratórias", "Alfandegárias", "Outras"],
            datasets: [{
                data: [118, 54, 24]
            }]
        }
    });

</script>

@endsection