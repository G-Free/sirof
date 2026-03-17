@extends('frontoffice.layout_master')

@section('main_content')


        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Nova Ocorrência</h4>
                    @if(session('tab'))
                        <div class="alert alert-success">
                            {{ session('tab') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="container card p-2">

            <!-- Step Navigation -->
            <ol class="step-indicator" id="step-indicator"></ol>

            <!-- STEP 1 -->
            <div class="step-content" data-step="1">

                @include('frontoffice.ocorrencia.add_ocorrencia_form')

            </div>

            <!-- STEP 2 -->
            <div class="step-content" data-step="2">

                @include('frontoffice.ocorrencia.envolvidos.all_envolvidos')

            </div>

            <!-- STEP 3 -->
            <div class="step-content" data-step="3">

                @include('frontoffice.ocorrencia.infraccoes.all_infraccoes')

            </div>

            <!-- STEP 4 -->
            <div class="step-content" data-step="4">

                @include('frontoffice.ocorrencia.resumo')

            </div>

            <!-- Buttons -->
            <div class="step-wrapper mt-0 pt-0">
                <button type="button" id="btn-back">Voltar</button>
                <button type="button" id="btn-next">Seguinte</button>
                <button type="submit" id="btn-submit">Submeter</button>
            </div>

        </div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const steps = [
        { id: 1, title: "Dados Gerais", icon_class: "fa-solid fa-check" },
        { id: 2, title: "Envolvidos", icon_class: "fa-solid fa-user" },
        { id: 3, title: "Infracções", icon_class: "fa-solid fa-triangle-exclamation" },
        { id: 4, title: "Resumo", icon_class: "fa-solid fa-file-lines" }
    ];

    let currentStep = 1;

    const indicator = document.getElementById("step-indicator");
    const contents = document.querySelectorAll(".step-content");
    const btnBack = document.getElementById("btn-back");
    const btnNext = document.getElementById("btn-next");
    const btnSubmit = document.getElementById("btn-submit");

    function renderIndicator() {
        indicator.innerHTML = "";

        steps.forEach(step => {
            const li = document.createElement("li");

            if (currentStep === step.id) li.classList.add("active");
            if (currentStep > step.id) li.classList.add("complete");

            li.innerHTML = `
                <div class="step">
                    <i class="${step.icon_class}"></i>
                </div>
                <div class="caption">
                    ${step.title}
                </div>
            `;

            indicator.appendChild(li);
        });
    }

    function renderContent() {
        contents.forEach(content => {
            const step = parseInt(content.dataset.step);
            content.style.display = step === currentStep ? "block" : "none";
        });
    }

    function renderButtons() {
        btnBack.disabled = currentStep === 1;
        btnNext.style.display = currentStep === steps.length ? "none" : "inline-block";
        btnSubmit.style.display = currentStep === steps.length ? "inline-block" : "none";
    }

    function updateWizard() {
        renderIndicator();
        renderContent();
        renderButtons();
    }

    const formOcorrencia = document.getElementById("addOcorrenciaForm");

    btnNext.addEventListener("click", function () {

        // STEP 1 — Submeter ocorrência
        if (currentStep === 1) {
            
            const formData = new FormData(formOcorrencia);

            fetch("{{ route('store.ocorrencia') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {

                if (data.success) {

                    // Guardar ID da ocorrência (muito importante)
                    window.ocorrencia_id = data.ocorrencia.id;

                    $('#ocorrencia_id').val(data.ocorrencia.id);

                    currentStep++;
                    updateWizard();
                }

            })
            .catch(error => {
                console.error("Erro:", error);
            });

            return;
        }
        if (currentStep === 2) {
            
            $.ajax({
                type: 'GET',
                url: '/get/envolvidos/' + $('#ocorrencia_id').val(),
                dataType: 'json',
                success: function(data) {

                    let select = $('#envolvido');

                    // Limpar opções antigas
                    select.empty();

                    // Adicionar opção padrão
                    select.append('<option value="">Seleccione o Envolvido</option>');

                    // Verificar se existem envolvidos
                    if (data.length > 0) {

                        data.forEach(function(envolvido) {
                            select.append(
                                `<option value="${envolvido.id}">
                                    ${envolvido.nome}
                                </option>`
                            );
                        });

                    } else {
                        select.empty();
                        select.append('<option value="">Nenhum envolvido encontrado</option>');
                    }
                },
                error: function(error) {
                    console.log("Erro ao buscar envolvidos:", error);
                }
            });

        }

        if (currentStep === 3) {
            $.ajax({
                type: 'GET',
                url: '/get/resumo/' + $('#ocorrencia_id').val(),
                dataType: 'json',
                success: function(ocorrencia) {

                    // DADOS DA OCORRÊNCIA
                    $('#resumo_data').text(ocorrencia.data);               
                    $('#resumo_hora').text(ocorrencia.hora);               
                    $('#resumo_fluxo').text(ocorrencia.fluxo_fronteirico);               
                    $('#resumo_estado').text(ocorrencia.estado);               
                    $('#resumo_local').text(ocorrencia.local);               
                    $('#resumo_descricao').text(ocorrencia.descricao);   

                    let total_envolvidos=0, total_infraccoes=0;
                    
                    const tbody_envolvidos = document.getElementById("table_envolvidos_resumo");
                    const tbody_infraccoes = document.getElementById("table_infraccoes_resumo");

                    if(ocorrencia["envolvidos"].length > 0){
                        $("#table_envolvidos_resumo tbody").empty();
                        $("#table_infraccoes_resumo tbody").empty();
                    }
                                        
                    for (let envolvido_actual of ocorrencia["envolvidos"]) {
                        
                        const tema = getTipoEnvolvimento(envolvido_actual.tipo_de_envolvimento);

                        // PREENCHENDO A TABELA ENVOLVIDOS
                        const novaLinha = `
                            <tr id="row-${envolvido_actual.id}">
                                <td>${envolvido_actual.nome}</td>
                                <td>${envolvido_actual.data_de_nascimento}</td>
                                <td>${envolvido_actual.sexo}</td>
                                <td>${envolvido_actual.nacionalidade}</td>
                                <td> 
                                    <span class="badge label-table bg-${tema}">
                                        ${envolvido_actual.tipo_de_envolvimento}
                                    </span>
                                </td>
                                <td>${envolvido_actual.documento_de_identificacao}</td>
                                <td>0</td>
                                
                            </tr>   
                        `;

                        // ADICIONA NO INÍCIO
                        tbody_envolvidos.insertAdjacentHTML("afterbegin", novaLinha);
                        
                        // PREENCHENDO A TABELA ENVOLVIDOS
                        for (let infraccao_actual of envolvido_actual["infraccoes"]) {
                            
                            const nova_linha_infraccao = `
                                <tr id="row-${infraccao_actual.id}">
                                    <td>${envolvido_actual.nome}</td>
                                    <td>${infraccao_actual.tipo_de_infraccao}</td>
                                    <td>${infraccao_actual.subtipo_de_infraccao}</td>
                                </tr>   
                            `;

                            // ADICIONA NO INÍCIO
                            tbody_infraccoes.insertAdjacentHTML("afterbegin", nova_linha_infraccao);
                            total_infraccoes++;
                        }
                        total_envolvidos++;

                    }

                    $("#total_envolvidos").text(total_envolvidos);
                    $("#total_infraccoes").text(total_infraccoes);

                    
                },
                error: function(error) {
                    console.log("Erro ao buscar envolvidos:", error);
                }
            });
        }

        // Outros passos
        if (currentStep < steps.length) {
            currentStep++;
            updateWizard();
        }

    });

    btnBack.addEventListener("click", () => {
        if (currentStep > 1) {
            currentStep--;
            updateWizard();
        }
    });

    btnSubmit.addEventListener("click", () => {
        if (currentStep === 4) {
            

            $.ajax({
                type: 'GET',
                url: '/submeter/ocorrencia/' + $('#ocorrencia_id').val(),
                dataType: 'json',
                success: function(data) {

                    window.location.href = data.redirect;
                    
                },
                error: function(error) {
                    console.log("Erro ao buscar envolvidos:", error);
                }
            });

        }
    });

    updateWizard();
});
</script>

@endsection