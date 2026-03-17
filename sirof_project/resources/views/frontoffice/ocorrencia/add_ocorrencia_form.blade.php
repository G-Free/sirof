
<div class="card sem-sombra mt-0 pt-0">
    <div class="card-body m-0 pb-0">
        
        <form action="{{ route('store.ocorrencia') }}" method="post" enctype="multipart/form-data" id="addOcorrenciaForm" class="mb-0 pb-0">
            
            @csrf

            <div class="row">
            
                <div class="col-md-6 mb-3">
                    <label class="form-label">Data da Ocorrência:  <span class="text-danger">*</span></label>
                    <input type="date" name="data_ocorrencia" class="form-control">  
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Hora: <span class="text-danger">*</span></label>
                    <input type="time" name="hora_ocorrencia" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group w-100">
                        <label class="form-label" for="formBasic">Fluxo Fronteiriço: <span class="text-danger">*</span></label>
                        <select name="fluxo_fronteirico" id="fluxo_fronteirico" class="form-control form-select">
                        <option value="">Seleccione o Fluxo</option>
                        <option value="Entrada">Entrada</option>
                        <option value="Saída">Saída</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group w-100">
                        <label class="form-label" for="formBasic">Estado : <span class="text-danger">*</span></label>
                        <select name="estado_ocorrencia" id="estado_ocorrencia" class="form-control form-select bg-light">
                        <option value="">Seleccione o Estado</option>
                        <option value="Aberto" selected>Aberto</option>
                        <option value="Em Investigação">Em Investigação</option>
                        <option value="Encerrado">Encerrado</option>
                        <option value="Arquivado">Arquivado</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Local: </label>
                    <input type="text" name="local_ocorrencia" class="form-control bg-light" value="Posto Fronteiriço do Luvo" readonly>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Descrição: </label>
                    <textarea class="form-control" name="descricao_ocorrencia" rows="4" placeholder="Descreva os factos da ocorrência"></textarea>
                </div>

            </div>

        </form>

    </div>
</div>
