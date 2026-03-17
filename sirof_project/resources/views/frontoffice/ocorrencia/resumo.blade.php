<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card sem-sombra">
                <div class="card-body">

                    <h4 class="header-title mb-4 fs-4">Resumo da Ocorrência</h4>

                    <!-- ================= DADOS GERAIS ================= -->
                    <div class="card sem-sombra border mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="mb-0">
                                    <i class="mdi mdi-file-document-outline me-1"></i>
                                    Dados Gerais
                                </h5>
                                <!--<button class="btn btn-sm btn-light">
                                    <i class="mdi mdi-pencil-outline"></i> Editar
                                </button>-->
                            </div>

                            <div class="row">
                                <div class="col-md-3 mb-2">
                                    <strong>Data:</strong>
                                    <p class="mb-0" id="resumo_data"></p>
                                </div>

                                <div class="col-md-3 mb-2">
                                    <strong>Hora:</strong>
                                    <p class="mb-0" id="resumo_hora"></p>
                                </div>

                                <div class="col-md-3 mb-2">
                                    <strong>Fluxo:</strong>
                                    <p class="mb-0" id="resumo_fluxo"></p>
                                </div>

                                <div class="col-md-3 mb-2">
                                    <strong>Estado:</strong>
                                    <span class="badge bg-warning text-dark" id="resumo_estado"></span>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <strong>Local:</strong>
                                    <p class="mb-0" id="resumo_local"></p>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <strong>Descrição:</strong>
                                    <p class="mb-0"  id="resumo_descricao">aaaaaaaaaaaaa</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ================= ENVOLVIDOS ================= -->
                    <div class="card sem-sombra border mb-4">
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="mb-0">
                                    <i class="mdi mdi-account-outline me-1"></i>
                                    Envolvidos
                                </h5>
                                <!--<button class="btn btn-sm btn-light">
                                    <i class="mdi mdi-pencil-outline"></i> Editar
                                </button>-->
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover mb-0" id="table_envolvidos_resumo">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Nome</th>
                                            <th>Idade</th>
                                            <th>Sexo</th>
                                            <th>Nacionalidade</th>
                                            <th>Tipo de envolvimento</th>
                                            <th>Documento</th>
                                            <th># Infrações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7" class="text-center text-muted">
                                                Não existem envolvidos
                                            </td>
                                        </tr>
                                        <!-- Dados adicionados via javascript -->    
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <!-- ================= INFRAÇÕES ================= -->
                    <div class="card sem-sombra border mb-4">
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="mb-0">
                                    <i class="mdi mdi-alert-outline me-1"></i>
                                    Infrações
                                </h5>
                                <!--<button class="btn btn-sm btn-light">
                                    <i class="mdi mdi-pencil-outline"></i> Editar
                                </button>-->
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover mb-0" id="table_infraccoes_resumo">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Envolvido</th>
                                            <th>Tipo</th>
                                            <th>Subtipo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="3" class="text-center text-muted">
                                                Não existem infracções
                                            </td>
                                        </tr>
                                        <!-- Dados adicionados via javascript -->
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <!-- ================= TOTAIS ================= -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card sem-sombra bg-light">
                                <div class="card-body text-center">
                                    <h5 class="mb-1">Total Envolvidos</h5>
                                    <h3 class="fw-bold" id="total_envolvidos">0</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card sem-sombra bg-light">
                                <div class="card-body text-center">
                                    <h5 class="mb-1">Total Infrações</h5>
                                    <h3 class="fw-bold" id="total_infraccoes">0</h3>
                                </div>
                            </div>
                        </div>

                        <!--
                        <div class="col-md-3">
                            <div class="card sem-sombra bg-light">
                                <div class="card-body text-center">
                                    <h5 class="mb-1">Suspeitos</h5>
                                    <h3 class="fw-bold text-danger">1</h3>
                                </div>
                            </div>
                        </div>
                        -->

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

