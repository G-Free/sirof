<div class="row p-3">
    <div class="col-12">
        <div class="card sem-sombra">
            <div class="card-body p-0 m-0">
                
                <!-- Cabeçalho -->
                <!-- style="border: 1px solid rgba(0, 0, 0, 0.055);" -->
                <div class="card-header d-flex justify-content-between align-items-center mb-3 p-0">
                    <h4></h4>                      
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modal-adicionar-envolvido"><i class="mdi mdi-plus me-1"></i> Adicionar Envolvido</button>
                </div>
                
                <div class="table-responsive">
                    <table id="demo-foo-filtering2" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Sexo</th>
                                <th>Nacionalidade</th>
                                <th>Tipo de Envolvimento</th>
                                <th>D. Identificação</th>
                                <th>Entrevista Operativa</th>
                                <th style="width: 120px">Acções</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- Code to be added by javascript -->
                            
                        </tbody>
                        <tfoot>
                        <tr class="active">
                            <td colspan="8">
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


<!----------------------------------------------------------------------------------------------------------------------->


<!-- MODAL PARA ADICIONAR UM ENVOLVIDO -->
<div id="modal-adicionar-envolvido" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-adicionar-envolvidoLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-adicionar-envolvidoLabel">Adicionar Envolvido</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2 pb-0 pt-1">
                
                <div class="card sem-sombra">
                    <div class="card-body m-0 pb-0">
                        
                        <form id="addEnvolvidoForm" enctype="multipart/form-data" >

                            @csrf

                            <input type="hidden" name="ocorrencia_id" id="ocorrencia_id">
                            
                            <div class="row m-0 p-0">
                            
                                <div class="col-md-8 mb-3 form-group">
                                    <label class="form-label">Nome Completo:  <span class="text-danger">*</span></label>
                                    <input type="text" name="nome_completo" class="form-control">  
                                </div>

                                <div class="col-md-4 mb-3 form-group">
                                    <label class="form-label">Data de Nascimento:  <span class="text-danger">*</span></label>
                                    <input type="date" name="data_de_nascimento" class="form-control">  
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="formBasic">Sexo: <span class="text-danger">*</span></label>
                                        <select name="sexo" class="form-control form-select">
                                            <option value="">Seleccione o Sexo</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Feminino">Feminino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 form-group">
                                    <label class="form-label">Nacionalidade:  <span class="text-danger">*</span></label>
                                    <input type="text" name="nacionalidade" class="form-control">  
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Profissão: </label>
                                    <input type="text" name="profissao" class="form-control">  
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="formBasic">Documento de Identificação: </label>
                                        <select name="documento_de_identificacao" class="form-control form-select">
                                        <option value="">Seleccione o Tipo</option>
                                        <option value="Bilhete de Identidade">Bilhete de Identidade</option>
                                        <option value="Passaporte">Passaporte</option>
                                        <option value="Cartão de Residente">Cartão de Residente</option>
                                        <option value="Outro">Outro</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Número do Documento:  </label>
                                    <input type="text" name="numero_do_documento" class="form-control">  
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="formBasic">Tipo de Envolvimento: <span class="text-danger">*</span></label>
                                        <select name="tipo_de_envolvimento" class="form-control form-select">
                                        <option value="">Seleccione o Estado</option>
                                        <option value="Suspeito">Suspeito</option>
                                        <option value="Vítima">Vítima</option>
                                        <option value="Testemunha">Testemunha</option>
                                        <option value="Informante">Informante</option>
                                        <option value="Outro">Outro</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Contacto: </label>
                                    <input type="text" name="contacto" class="form-control">
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label class="form-label">Morada: </label>
                                    <input type="text" name="endereco" class="form-control" placeholder="Endereço">
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Descrição: </label>
                                    <textarea class="form-control" name="descricao" rows="3" placeholder="Observações adicionar sobre o envolvido..."></textarea>
                                </div>

                                <div class="col-xl-12 mb-0 pb-0">
                                    <div class="d-flex mt-3 mb-1 justify-content-end">
                                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-success" type="submit">Cadastrar</button>
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


<!----------------------------------------------------------------------------------------------------------------------->


{{-- MODAL PARA EDITAR UM ENVOLVIDO --}}
<div id="modal-editar-envolvido" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-editar-envolvidoLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-editar-envolvidoLabel">Editar Envolvido</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2 pb-0 pt-1">
                
                <div class="card sem-sombra">
                    <div class="card-body m-0 pb-0">
                        
                        <form id="editEnvolvidoForm" enctype="multipart/form-data" >
                            
                            @csrf

                            <input type="hidden" name="envolvido_id" id="envolvido_id">
                            
                            <div class="row m-0 p-0">
                            
                                <div class="col-md-8 mb-3 form-group">
                                    <label class="form-label">Nome Completo:  <span class="text-danger">*</span></label>
                                    <input type="text" name="nome_completo_edit" id="nome_completo_edit" class="form-control">  
                                </div>

                                <div class="col-md-4 mb-3 form-group">
                                    <label class="form-label">Data de Nascimento:  <span class="text-danger">*</span></label>
                                    <input type="date" name="data_de_nascimento_edit" id="data_de_nascimento_edit" class="form-control">  
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="formBasic">Sexo: <span class="text-danger">*</span></label>
                                        <select name="sexo_edit" id="sexo_edit" class="form-control form-select">
                                            <option value="">Seleccione o Sexo</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Feminino">Feminino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 form-group">
                                    <label class="form-label">Nacionalidade:  <span class="text-danger">*</span></label>
                                    <input type="text" name="nacionalidade_edit" id="nacionalidade_edit" class="form-control">  
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Profissão: </label>
                                    <input type="text" name="profissao_edit" id="profissao_edit" class="form-control">  
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="formBasic">Documento de Identificação: </label>
                                        <select name="documento_de_identificacao_edit" id="documento_de_identificacao_edit" class="form-control form-select">
                                        <option value="">Seleccione o Tipo</option>
                                        <option value="Bilhete de Identidade">Bilhete de Identidade</option>
                                        <option value="Passaporte">Passaporte</option>
                                        <option value="Cartão de Residente">Cartão de Residente</option>
                                        <option value="Outro">Outro</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Número do Documento:  </label>
                                    <input type="text" name="numero_do_documento_edit" id="numero_do_documento_edit" class="form-control">  
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="formBasic">Tipo de Envolvimento: <span class="text-danger">*</span></label>
                                        <select name="tipo_de_envolvimento_edit" id="tipo_de_envolvimento_edit" class="form-control form-select">
                                        <option value="">Seleccione o Estado</option>
                                        <option value="Suspeito">Suspeito</option>
                                        <option value="Vítima">Vítima</option>
                                        <option value="Testemunha">Testemunha</option>
                                        <option value="Informante">Informante</option>
                                        <option value="Outro">Outro</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Contacto: </label>
                                    <input type="text" name="contacto_edit" id="contacto_edit" class="form-control">
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label class="form-label">Morada: </label>
                                    <input type="text" name="endereco_edit" id="endereco_edit" class="form-control" placeholder="Endereço">
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Descrição: </label>
                                    <textarea class="form-control" name="descricao_edit" id="descricao_edit" rows="3" placeholder="Observações adicionar sobre o envolvido..."></textarea>
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


<!----------------------------------------------------------------------------------------------------------------------->


{{-- MODAL PARA VISUALIZAR UM ENVOLVIDO --}}
<div id="modal-visualizar-envolvido" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-visualizar-envolvidoLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-visualizar-envolvidoLabel">Visualizar Envolvido</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2 pb-0 pt-1">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card sem-sombra">
                            <div class="card-body">

                                <ul class="list-group">
                                    <li class="list-group-item"> <strong>Nome:</strong> <span id="envolvido_nome_view"></span> </li>
                                    <li class="list-group-item"> <strong>Data de Nascimento:</strong> <span id="envolvido_data_nascimento_view"></span> </li>
                                    <li class="list-group-item"> <strong>Idade:</strong> <span id="envolvido_idade_view"></span> </li>
                                    <li class="list-group-item"> <strong>Sexo:</strong> <span id="envolvido_sexo_view"></span> </li>
                                    <li class="list-group-item"> <strong>Nacionalidade:</strong> <span id="envolvido_nacionalidade_view"></span> </li>
                                    <li class="list-group-item"> <strong>Documento de Identificação:</strong> <span id="envolvido_documento_view"></span> </li>
                                    <li class="list-group-item"> <strong>Profissão:</strong> <span id="envolvido_profissao_view"></span> </li>
                                    <li class="list-group-item"> <strong>Tipo de Envolvimento:</strong> <span id="envolvido_tipo_envolvimento_view"></span> </li>
                                </ul> 

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                </div>

            </div>
        
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!----------------------------------------------------------------------------------------------------------------------->


{{-- MODAL PARA ADICIONAR UMA ENTREVISTA OPERATIVA --}}
<div id="modal-entrevista-operativa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-entrevista-operativaLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-entrevista-operativaLabel">ENTREVISTA OPERATIVA</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2 pb-0 pt-1">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card sem-sombra">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card sem-sombra">
                                            <div class="card-body">

                                                <form id="addEntrevistaOperativaForm" enctype="multipart/form-data" >

                                                    <!-- Dados Pessoais -->
                                                    <div class="row mb-3 mt-0">
                                                        <div class="col-md-6">
                                                            <label class="form-label">Filho de</label>
                                                            <input type="text" class="form-control" name="nomePai" id="nomePai">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label">e de</label>
                                                            <input type="text" class="form-control" name="nomeMae" id="nomeMae">
                                                        </div>
                                                    </div>

                                                    <!-- Perguntas -->
                                                    <div class="mb-3">
                                                        <label class="form-label">1 - Quando saiu do seu país? Na companhia de quem?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">2 - Quem te mandou vir para Angola?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">3 - Quem organizou o grupo e quais foram os pontos de organização?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">4 - Como foi feito o contacto com o guia?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">5 - Quantos dias fizeram no caminho?</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">6 - Quem te guiou no primeiro ponto de partida?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">7 - Quanto pagou?</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">8 - Que meio de transporte utilizou desde o país de origem até Angola?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">9 - Quantas vezes já entrou ilegalmente em Angola?</label>
                                                        <input type="number" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">10 - Que objectivo te traz em Angola?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">11 - Em que língua se comunicava? E com quem?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">12 - Descreva o trajecto percorrido</label>
                                                        <textarea class="form-control" rows="3"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">13 - Teve assistência de outras pessoas com intenção de entrar ilegalmente em Angola?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">14 - Qual é a relação que tem com os demais do grupo?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">15 - Que bens (selos) você levava?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">16 - Vieram em carro ou embarcação? Cobertos ou disfarçados?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">17 - Por que razão abandonou o seu país?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">18 - Quem indicou o local de desembarque ou entrada?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">19 - O que os organizadores da viagem falaram sobre Angola?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">20 - O que sabes sobre a Polícia de Guarda Fronteira de Angola?</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">21 - Que trabalho fazias no país onde estavas?</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">22 - Outros dados de interesse</label>
                                                        <textarea class="form-control" rows="3"></textarea>
                                                    </div>

                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-primary">
                                                            cadastrar
                                                        </button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                </div>

            </div>
        
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!----------------------------------------------------------------------------------------------------------------------->


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


{{-- FUNÇÃO JS PARA EDITAR UM ENVOLVIDO --}}
<script>
    function envolvidoEdit(id){
        $.ajax({
            type: 'GET',
            url: '/edit/envolvido/'+id,
            datatype: 'json',
            success: function(data){
                //console.log(data);
                $('#nome_completo_edit').val(data.nome);
                $('#data_de_nascimento_edit').val(data.data_de_nascimento);
                $('#sexo_edit').val(data.sexo);
                $('#nacionalidade_edit').val(data.nacionalidade);
                $('#profissao_edit').val(data.profissao);
                $('#documento_de_identificacao_edit').val(data.documento_de_identificacao);
                $('#numero_do_documento_edit').val(data.numero_do_documento);
                $('#tipo_de_envolvimento_edit').val(data.tipo_de_envolvimento);
                $('#contacto_edit').val(data.contacto);
                $('#endereco_edit').val(data.endereco);
                $('#descricao_edit').val(data.descricao);
                $('#envolvido_id').val(data.id);
            }
        })
    }
</script>


<!----------------------------------------------------------------------------------------------------------------------->


{{-- FUNÇÃO JS PARA VISUALIZAR UM ENVOLVIDO --}}
<script>

    function formatarData(data) {
        const d = new Date(data);

        const dia = String(d.getDate()).padStart(2, '0');
        const mes = String(d.getMonth() + 1).padStart(2, '0');
        const ano = d.getFullYear();

        return `${dia}/${mes}/${ano}`;
    }

    function calcularIdade(dataNascimento) {
        // Converte para objeto Date (caso venha como string)
        const nascimento = new Date(dataNascimento);
        const hoje = new Date();

        let idade = hoje.getFullYear() - nascimento.getFullYear();

        // Verifica se ainda não fez aniversário este ano
        const mesAtual = hoje.getMonth();
        const diaAtual = hoje.getDate();

        const mesNascimento = nascimento.getMonth();
        const diaNascimento = nascimento.getDate();

        if (
            mesAtual < mesNascimento || 
            (mesAtual === mesNascimento && diaAtual < diaNascimento)
        ) {
            idade--;
        }

        return idade;
    }

    function envolvidoView(id){
        $.ajax({
            type: 'GET',
            url: '/edit/envolvido/'+id,
            datatype: 'json',
            success: function(data){
                
                console.log(data);

                $('#envolvido_nome_view').text(data.nome);
                
                $('#envolvido_data_nascimento_view').text(formatarData(data.data_de_nascimento));
                
                $('#envolvido_idade_view').text(calcularIdade(data.data_de_nascimento)+" anos");

                $('#envolvido_sexo_view').text(data.sexo);
                $('#envolvido_nacionalidade_view').text(data.nacionalidade);
                $('#envolvido_documento_view').text(data.documento_de_identificacao+" - n.º "+data.numero_do_documento);
                $('#envolvido_profissao_view').text(data.profissao);
                $('#envolvido_tipo_envolvimento_view').text(data.tipo_de_envolvimento);

            }
        })
    }
</script>


<!----------------------------------------------------------------------------------------------------------------------->


{{-- FUNÇÃO JS PARA REMOVER UM ENVOLVIDO --}}
<script>

    function removerLinhaDaTabelaEnvolvido(id) {

        const linha = document.getElementById(`row-${id}`);

        if (!linha) {
            console.warn("Linha não encontrada.");
            return;
        }

        linha.remove();
    }

    function envolvidoRemove(id){

        Swal.fire({
            title: 'Tem certeza?',
            text: "Este registo será removido permanentemente!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, remover!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            
            if (result.isConfirmed) {
                console.log("Remoção accionada");
                
                $.ajax({
                    type: 'GET',
                    url: '/delete/envolvido/'+id,
                    datatype: 'json',

                    success: function(data){
                        removerLinhaDaTabelaEnvolvido(id);
                        toastr.success(" Envolvido removido com sucesso!!! ");
                    }
                })

            }

        }) 
       
    }
</script>


<!----------------------------------------------------------------------------------------------------------------------->


{{-- FUNÇÃO JS PARA ADICIONAR UM ENVOLVIDO --}}
<script>

    function getTipoEnvolvimento(tipo_de_envolvimento) {
        switch (tipo_de_envolvimento) {
            case 'Vítima':
                return'primary';
            break;
            case 'Suspeito':
                return 'danger';
            break;
            case 'Testemunha':
                return 'info';
            break;
            case 'Informante':
                return 'dark';
            break;
            default:
                return 'warning';
            break;
        }
    }

    function adicionarLinhaNaTabelaEnvolvido(envolvido) {

        const tema = getTipoEnvolvimento(envolvido.tipo_de_envolvimento);

        const novaLinha = `
            <tr id="row-${envolvido.id}">
                <td>${envolvido.nome}</td>
                <td>${envolvido.data_de_nascimento}</td>
                <td>${envolvido.sexo}</td>
                <td>${envolvido.nacionalidade}</td>
                <td>
                    
                    <span class="badge label-table bg-${tema}">
                        ${envolvido.tipo_de_envolvimento}
                    </span>
                </td>
                <td>${envolvido.documento_de_identificacao} - ${envolvido.numero_do_documento}</td>
                <td><a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal-entrevista-operativa" id="${envolvido.id}" onclick="envolvidoView(this.id)">Entrevista Operativa</a></td>
                <td>
                    <a href="javascript:void(0);" class="action-icon">
                        <a href="#" class="action-icon" data-bs-toggle="modal" data-bs-target="#modal-visualizar-envolvido" id="${envolvido.id}" onclick="envolvidoView(this.id)"><i class="mdi mdi-eye"></i></a>
                    </a>
                    <a href="#" class="action-icon" data-bs-toggle="modal" 
                    data-bs-target="#modal-editar-envolvido" 
                    onclick="envolvidoEdit(${envolvido.id})">
                        <i class="mdi mdi-square-edit-outline"></i>
                    </a>
                    <a href="#" onclick="envolvidoRemove(${envolvido.id})" 
                    class="action-icon delete-btn">
                        <i class="mdi mdi-delete"></i>
                    </a>
                </td>
            </tr>   
        `;

        const tbody = document.getElementById("demo-foo-filtering2");

        // ADICIONA NO INÍCIO
        tbody.insertAdjacentHTML("afterbegin", novaLinha);
    }

    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // CREATE
    $('#addEnvolvidoForm').submit(function(e){
        e.preventDefault();

        $.post('/store/envolvido', $(this).serialize(), function(envolvido){
            
            $('#modal-adicionar-envolvido').modal('hide');
            $('#addEnvolvidoForm')[0].reset();
            adicionarLinhaNaTabelaEnvolvido(envolvido);
            toastr.success(" Envolvido adicionado com sucesso!!! ");
            
        });
    });

</script>


<!----------------------------------------------------------------------------------------------------------------------->


{{-- FUNÇÃO JS PARA ACTUALIZAR UM ENVOLVIDO --}}
<script>

    function actualizarLinhaNaTabelaEnvolvido(envolvido) {

        const tema = getTipoEnvolvimento(envolvido.tipo_de_envolvimento);

        const linha = document.getElementById(`row-${envolvido.id}`);

        if (!linha) {
            console.warn("Linha não encontrada.");
            return;
        }

        linha.innerHTML = `
            <td>${envolvido.nome}</td>
            <td>${envolvido.data_de_nascimento}</td>
            <td>${envolvido.sexo}</td>
            <td>${envolvido.nacionalidade}</td>
            <td>
                <span class="badge label-table bg-${tema}">
                    ${envolvido.tipo_de_envolvimento}
                </span>
            </td>
            <td>${envolvido.documento_de_identificacao}</td>
            <td>0</td>
            <td>
                <a href="javascript:void(0);" class="action-icon">
                    <a href="#" class="action-icon" data-bs-toggle="modal" data-bs-target="#modal-visualizar-envolvido" id="${envolvido.id}" onclick="envolvidoView(this.id)"><i class="mdi mdi-eye"></i></a>
                </a>
                <a href="#" class="action-icon" data-bs-toggle="modal" 
                data-bs-target="#modal-editar-envolvido" 
                onclick="envolvidoEdit(${envolvido.id})">
                    <i class="mdi mdi-square-edit-outline"></i>
                </a>
                <a href="#" onclick="envolvidoRemove(${envolvido.id})" 
                class="action-icon delete-btn">
                    <i class="mdi mdi-delete"></i>
                </a>
            </td>
        `;
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // EDIT
    $('#editEnvolvidoForm').submit(function(e){
        e.preventDefault();

        $.post('/update/envolvido', $(this).serialize(), function(envolvido){
            
            actualizarLinhaNaTabelaEnvolvido(envolvido);
            $('#modal-editar-envolvido').modal('hide');
            $('#editEnvolvidoForm')[0].reset();
            toastr.success(" Envolvido actualizado com sucesso!!! ");
            
        });
    });

</script>