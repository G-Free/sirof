
<div class="card sem-sombra">
    <div class="card-body m-0 pb-0">
        
        <form action="{{ route('update.ocorrencia') }}" method="post" enctype="multipart/form-data" id="editOcorrenciaForm">
            
            @csrf

            <input type="hidden" name="id" value="{{ $ocorrencia->id }}">
            
            <div class="row">
            
                <div class="col-md-6 mb-3">
                    <label class="form-label">Data da Ocorrência:  <span class="text-danger">*</span></label>
                    <input type="date" name="data_ocorrencia" class="form-control" value="{{ $ocorrencia->data }}">  
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Hora: <span class="text-danger">*</span></label>
                    <input type="time" name="hora_ocorrencia" class="form-control" value="{{ $ocorrencia->hora }}">
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group w-100">
                        <label class="form-label" for="formBasic">Fluxo Fronteiriço: <span class="text-danger">*</span></label>
                        <select name="fluxo_fronteirico" id="fluxo_fronteirico" class="form-control form-select">
                        <option value="">Seleccione o Fluxo</option>
                        <option value="Entrada" {{ $ocorrencia->fluxo_fronteirico=='Entrada' ? 'Selected' : ''; }}>Entrada</option>
                        <option value="Saída" {{ $ocorrencia->fluxo_fronteirico=='Saída' ? 'Selected' : ''; }}>Saída</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group w-100">
                        <label class="form-label" for="formBasic">Estado : <span class="text-danger">*</span></label>
                        <select name="estado_ocorrencia" id="estado_ocorrencia" class="form-control form-select bg-light">
                        <option value="">Seleccione o Estado</option>
                        <option value="Aberto" {{ $ocorrencia->estado=='Aberto' ? 'Selected' : ''; }}>Aberto</option>
                        <option value="Em Investigação" {{ $ocorrencia->estado=='Em Investigação' ? 'Selected' : ''; }}>Em Investigação</option>
                        <option value="Encerrado" {{ $ocorrencia->estado=='Encerrado' ? 'Selected' : ''; }}>Encerrado</option>
                        <option value="Arquivado" {{ $ocorrencia->estado=='Arquivado' ? 'Selected' : ''; }}>Arquivado</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Local: </label>
                    <input type="text" name="local_ocorrencia" class="form-control bg-light"  value="{{ $ocorrencia->local }}" readonly>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Descrição: </label>
                    <textarea class="form-control" name="descricao_ocorrencia" rows="4" placeholder="Descreva os factos da ocorrência">{{ $ocorrencia->descricao }}</textarea>
                </div>

                <div class="col-xl-12">
                    <div class="d-flex mt-3 mb-1 justify-content-end">
                        <button class="btn btn-success" type="submit">Actualizar</button>
                    </div>
                </div>

            </div>

        </form>

    </div>
</div>
