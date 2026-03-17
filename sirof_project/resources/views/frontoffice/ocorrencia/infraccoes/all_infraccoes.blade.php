<div class="row p-3">
    <div class="col-12">
        <div class="card sem-sombra">
            <div class="card-body p-0 m-0">
                
                <!-- Cabeçalho -->
                <!-- style="border: 1px solid rgba(0, 0, 0, 0.055);" -->
                <div class="card-header d-flex justify-content-between align-items-center mb-3 p-0">
                    <h4></h4>                      
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modal-adicionar-infraccao"><i class="mdi mdi-plus me-1"></i> Adicionar Infracção</button>
                </div>
                
                <div class="table-responsive">
                    <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                        <thead>
                            <tr>
                                <th>Envolvido</th>
                                <th>Tipo de Infracção</th>
                                <th>Subtipo de Infracção</th>
                                <th style="width: 120px">Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <!-- Code to be added by javascript -->
                            
                        </tbody>
                        <tfoot>
                        <tr class="active">
                            <td colspan="5">
                                <div class="text-end">
                                    <ul class="pagination pagination-rounded justify-content-end footable-pagination mb-0"></ul>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div> <!-- end .table-responsive-->
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->


<!----------------------------------------------------------------->


<!-- MODAL PARA ADICIONAR UMA INFRACÇAO -->
<div id="modal-adicionar-infraccao" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-adicionar-infraccaoLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-adicionar-infraccaoLabel">Adicionar Infracção</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2 pb-0 pt-1">
                
                <div class="card sem-sombra">
                    <div class="card-body m-0 pb-0">
                        
                        {{--<form action="{{ route('store.infraccao') }}" method="post" enctype="multipart/form-data" id="addInfraccaoForm">--}}
                        <form id="addInfraccaoForm" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="row m-0 p-0">
                            
                                <div class="col-md-12 mb-3">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="formBasic">Envolvido: <span class="text-danger">*</span></label>
                                        <select name="envolvido" id="envolvido" class="form-control form-select">
                                            
                                            <option value="">Seleccione o Envolvido</option>
                                        
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group w-100">
                                        
                                        <label class="form-label" for="formBasic">Tipo da Infração: <span class="text-danger">*</span></label>
                                        
                                        <select id="tipo_de_infraccao" name="tipo_de_infraccao" class="form-control form-select">
                                            
                                            <option value="" selected>Selecione a infração</option>
                                            
                                            <optgroup label="Infracções Contravencionais">
                                                <option value="Migratoria">Migratória</option>
                                                <option value="Alfandegaria">Alfandegária</option>
                                                <option value="Sanitarias e Ambientais">Sanitárias e Ambientais</option>
                                                <option value="Transito em Áreas Fronteiricas">De Trânsito em Áreas Fronteiriças</option>
                                            </optgroup>

                                            <optgroup label="Infracções Criminais">
                                                <option value="INF004">Contra a Segurança do Estado e Defesa Nacional</option>
                                                <option value="INF005">Contra a Ordem Económica e Fiscal</option>
                                                <option value="INF006">Contra a Saúde Pública</option>
                                                <option value="INF007">Contra Pessoas (em fronteiras)</option>
                                                <option value="INF008">Contra a Propriedade</option>
                                            </optgroup>

                                            <optgroup label="Violação da Normas Marítimas e das Pescas">
                                                <option value="INF009">Violação da Normas Marítimas e das Pescas</option>
                                            </optgroup>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="subtipo">Subtipo da Infracção: <span class="text-danger">*</span></label>
                                        <select name="subtipo_de_infraccao" id="subtipo_de_infraccao" class="form-control form-select" disabled>
                                            <option value="">---</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Descrição dos Factos: </label>
                                    <textarea class="form-control" name="descricao" rows="5" placeholder="Observações adicionar sobre a infracção..."></textarea>
                                </div>

                                <div class="col-xl-12 mb-0 pb-0">
                                    <div class="d-flex mt-3 mb-1 justify-content-end">
                                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-success" type="submit">Submeter</button>
                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!----------------------------------------------------------------->


<!-- MODAL PARA EDITAR UMA INFRACÇAO -->
<div id="modal-editar-infraccao" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-editar-infraccaoLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-editar-infraccaoLabel">Editar Infracção</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2 pb-0 pt-1">
                
                <div class="card sem-sombra">
                    <div class="card-body m-0 pb-0">
                        
                        <form action="{{ route('update.infraccao') }}" method="post" enctype="multipart/form-data" id="editInfraccaoForm">
                            
                            @csrf

                            <input type="hidden" name="infraccao_id" id="infraccao_id">

                            <div class="row m-0 p-0">
                            
                                <div class="col-md-12 mb-3">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="formBasic">Envolvido: <span class="text-danger">*</span></label>
                                        <select name="envolvido_edit" id="envolvido_edit" class="form-control form-select bg-light " disabled>
                                            
                                            <option value="">Seleccione o Envolvido</option>
                                            
                                            {{--@foreach ($ocorrencia->envolvidos as $envolvido)
                                                <option value="{{ $envolvido->id }}">{{ $envolvido->nome }}</option>
                                            @endforeach--}}
                                        
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group w-100">
                                        
                                        <label class="form-label" for="formBasic">Tipo da Infração: <span class="text-danger">*</span></label>
                                        
                                        <select id="tipo_de_infraccao_edit" name="tipo_de_infraccao_edit" class="form-control form-select">
                                            
                                            <option value="" selected>Selecione a infração</option>
                                            
                                            <optgroup label="Infracções Contravencionais">
                                                <option value="Migratoria">Migratória</option>
                                                <option value="Alfandegaria">Alfandegária</option>
                                                <option value="Sanitarias e Ambientais">Sanitárias e Ambientais</option>
                                                <option value="Transito em Áreas Fronteiricas">De Trânsito em Áreas Fronteiriças</option>
                                            </optgroup>

                                            <optgroup label="Infracções Criminais">
                                                <option value="INF004">Contra a Segurança do Estado e Defesa Nacional</option>
                                                <option value="INF005">Contra a Ordem Económica e Fiscal</option>
                                                <option value="INF006">Contra a Saúde Pública</option>
                                                <option value="INF007">Contra Pessoas (em fronteiras)</option>
                                                <option value="INF008">Contra a Propriedade</option>
                                            </optgroup>

                                            <optgroup label="Violação da Normas Marítimas e das Pescas">
                                                <option value="INF009">Violação da Normas Marítimas e das Pescas</option>
                                            </optgroup>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="subtipo">Subtipo da Infracção: <span class="text-danger">*</span></label>
                                        <select name="subtipo_de_infraccao_edit" id="subtipo_de_infraccao_edit" class="form-control form-select" disabled>
                                            <option value="">---</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label class="form-label">Descrição dos Factos: </label>
                                    <textarea class="form-control" name="descricao_infraccao_edit" id="descricao_infraccao_edit" rows="5" placeholder="Observações adicionar sobre a infracção..."></textarea>
                                </div>

                                <div class="col-xl-12 mb-0 pb-0">
                                    <div class="d-flex mt-3 mb-1 justify-content-end">
                                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-success" type="submit">Actualizar</button>
                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


<!----------------------------------------------------------------->


<script>
    const subcategorias = {
        Migratoria: [
            { value: 'Entrada ilegal de estrangeiros', text: 'Entrada ilegal de estrangeiros' },
            { value: 'Saída ilegal de estrangeiros', text: 'Saída ilegal de estrangeiros' },
            { value: 'Excesso de permanência no país', text: 'Excesso de permanência no país' },
            { value: 'Utilização de documentos falsos ou caducados', text: 'Utilização de documentos falsos ou caducados' },
            { value: 'Falta de visto ou autorização de residência', text: 'Falta de visto ou autorização de residência' },
        ],
        Alfandegaria: [
            { value: 'Falta de declaração de bens', text: 'Falta de declaração de bens' },
            { value: 'Transporte acima do limite permitido', text: 'Transporte acima do limite permitido' },
            { value: 'Irregularidades na documentação comercial', text: 'Irregularidades na documentação comercial' },
            { value: 'Transgressão cambial', text: 'Transgressão cambial' },
        ]
    };

    const categoriaSelect = document.getElementById('tipo_de_infraccao');
    const subcategoriaSelect = document.getElementById('subtipo_de_infraccao');

    categoriaSelect.addEventListener('change', function () {
        const categoria = this.value;

        // Limpa o segundo select
        subcategoriaSelect.innerHTML = '<option value="">Selecione um subtipo</option>';

        if (!categoria) {
            subcategoriaSelect.disabled = true;
            return;
        }

        // Preenche conforme a categoria
        subcategorias[categoria].forEach(item => {
            const option = document.createElement('option');
            option.value = item.value;
            option.textContent = item.text;
            subcategoriaSelect.appendChild(option);
        });

        subcategoriaSelect.disabled = false;
    });
</script>


<!----------------------------------------------------------------->


<script>
    const subcategorias_edit = {
        Migratoria: [
            { value: 'Entrada ilegal de estrangeiros', text: 'Entrada ilegal de estrangeiros' },
            { value: 'Saída ilegal de estrangeiros', text: 'Saída ilegal de estrangeiros' },
            { value: 'Excesso de permanência no país', text: 'Excesso de permanência no país' },
            { value: 'Utilização de documentos falsos ou caducados', text: 'Utilização de documentos falsos ou caducados' },
            { value: 'Falta de visto ou autorização de residência', text: 'Falta de visto ou autorização de residência' },
        ],
        Alfandegaria: [
            { value: 'Falta de declaração de bens', text: 'Falta de declaração de bens' },
            { value: 'Transporte acima do limite permitido', text: 'Transporte acima do limite permitido' },
            { value: 'Irregularidades na documentação comercial', text: 'Irregularidades na documentação comercial' },
            { value: 'Transgressão cambial', text: 'Transgressão cambial' },
        ]
    };

    const categoriaSelect_edit = document.getElementById('tipo_de_infraccao_edit');
    const subcategoriaSelect_edit = document.getElementById('subtipo_de_infraccao_edit');

    categoriaSelect_edit.addEventListener('change', function () {
        const categoria_edit = this.value;

        // Limpa o segundo select
        subcategoriaSelect_edit.innerHTML = '<option value="">Selecione um subtipo</option>';

        if (!categoria_edit) {
            subcategoriaSelect_edit.disabled = true;
            return;
        }

        // Preenche conforme a categoria
        subcategorias_edit[categoria_edit].forEach(item => {
            const option = document.createElement('option');
            option.value = item.value;
            option.textContent = item.text;
            subcategoriaSelect_edit.appendChild(option);
        });

        subcategoriaSelect_edit.disabled = false;
    });
</script>


<!----------------------------------------------------------------->


{{-- FUNÇÃO JS PARA EDITAR A INFRACÇÃO --}}
<script>
    function infraccaoEdit(id){
        $.ajax({
            type: 'GET',
            url: '/edit/infraccao/'+id,
            datatype: 'json',

            success: function(data){
                console.log(data);
                $('#descricao_infraccao_edit').val(data.descricao);
                $('#envolvido_edit').val(data.envolvido_id);
                $('#tipo_de_infraccao_edit').val(data.tipo_de_infraccao);                
                
                categoriaSelect_edit.dispatchEvent(new Event('change'));
                $('#subtipo_de_infraccao_edit').val(data.subtipo_de_infraccao);
                $('#infraccao_id').val(data.id);
            }
        })
    }
</script>


<!----------------------------------------------------------------->


{{-- FUNÇÃO JS PARA ADICIONAR UMA INFRACÇÃO --}}
<script>

    function adicionarLinhaNaTabelaInfraccao(data) {

        const novaLinha = `
            <tr id="row-${data.infraccao.id}">
                <td>${data.envolvido.nome}</td>
                <td>${data.infraccao.tipo_de_infraccao}</td>
                <td>${data.infraccao.subtipo_de_infraccao}</td>
                <td>Acções</td>
            </tr>   
        `;

        const tbody2 = document.getElementById("demo-foo-filtering");

        // ADICIONA NO INÍCIO
        tbody2.insertAdjacentHTML("afterbegin", novaLinha);
    }

    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // CREATE
    $('#addInfraccaoForm').submit(function(e){
        e.preventDefault();

        $.post('/store/infraccao', $(this).serialize(), function(infraccao){
            
            //console.log(infraccao);

            $('#modal-adicionar-infraccao').modal('hide');
            $('#addInfraccaoForm')[0].reset();
            adicionarLinhaNaTabelaInfraccao(infraccao);
            toastr.success(" Infracção adicionada com sucesso!!! ");
            
        });
    });

</script>