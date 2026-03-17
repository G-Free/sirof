@extends('frontoffice.layout_master')

@section('main_content')

    <!-- Start Content-->
    <div class="container-fluid m-0 p-0">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Detalhes da Ocorrência</h4>
                    @if(session('tab'))
                        <div class="alert alert-success">
                            {{ session('tab') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-12">
                <div class="card sem-sombra">
                    <div class="card-body">
                        <h4 class="" style="opacity: 0.90"><a href="{{ route('all.ocorrencia') }}" class="btn btn-white waves-effect waves-light me-2 mb-3"><i class="mdi mdi-arrow-left fs-5 me-1"></i>Voltar </a></h4>

                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#ocorrencia" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    Ocorrência
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#envolvidos" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Envolvidos(0)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#infraccoes" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    Infracções (0)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#infraccoes" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    Finalizar
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">

                            {{-- TAB DA OCORRÊNCIA --}}
                            <div class="tab-pane tab-pane fade" id="ocorrencia">

                                @include('frontoffice.ocorrencia.add_ocorrencia_form')
                                
                            </div>

                            {{-- TAB DOS ENVOLVIDOS --}}
                            <div class="tab-pane" id="envolvidos">
                                
                                {{--@include('frontoffice.ocorrencia.envolvidos.all_envolvidos')--}}   

                            </div>

                            {{-- TAB DAS INFRACÇÕES --}}
                            <div class="tab-pane" id="infraccoes">
                                
                                {{--@include('frontoffice.ocorrencia.infraccoes.all_infraccoes')--}}                         

                            </div>
                        </div>

                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->            

        </div>
        <!-- end row -->

    </div> <!-- container -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {

            let abaAtiva = "{{ session('aba_ativa', 'ocorrencia') }}";
            // Se não existir sessão, abre "ocorrencia" por padrão

            let triggerEl = document.querySelector('a[href="#' + abaAtiva + '"]');

            if (triggerEl) {
                let tab = new bootstrap.Tab(triggerEl);
                tab.show();
            }

        });
        
        /*function setAba(valor){
                // Se não existir sessão, abre "ocorrencia" por padrão

                let triggerEl = document.querySelector('a[href="#' + valor + '"]');

                if (triggerEl) {
                    let tab = new bootstrap.Tab(triggerEl);
                    tab.show();
                }
        }*/
        
    </script>



    {{-- VALIDAÇÃO DOS CAMPOS DA OCORRÊNCIA COM JQUERY --}}
    <script type="text/javascript">
        $(document).ready(function (){

            $('#editOcorrenciaForm').validate({
                rules: {
                    data_ocorrencia: {
                        required : true,
                    },
                    hora_ocorrencia: {
                        required : true,
                    },
                    fluxo_fronteirico: {
                        required : true,
                    },
                    estado_ocorrencia: {
                        required : true,
                    },
                },
                messages :{
                    data_ocorrencia: {
                        required : 'Por favor, introduza a data da ocorrencia.',
                    }, 
                    hora_ocorrencia: {
                        required : 'Por favor, introduza a hora da ocorrencia.',
                    }, 
                    fluxo_fronteirico: {
                        required : 'Por favor, seleccione o fluxo da ocorrência.',
                    }, 
                    estado_ocorrencia: {
                        required : 'Por favor, seleccione o estado da ocorrência.',
                    }, 
                },
                errorElement : 'span', 
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    error.addClass('text-danger');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });
        
    </script>


    {{-- VALIDAÇÃO DOS CAMPOS DOS ENVOLVIDOS - ADD COM JQUERY --}}
    <script type="text/javascript">
        $(document).ready(function (){

            $('#addEnvolvidoForm').validate({
                rules: {
                    nome_completo: {
                        required : true,
                    },
                    data_de_nascimento: {
                        required : true,
                    },
                    sexo: {
                        required : true,
                    },
                    nacionalidade: {
                        required : true,
                    },
                    tipo_de_envolvimento: {
                        required : true,
                    },
                },
                messages :{
                    nome_completo: {
                        required : 'Por favor, introduza o nome do envolvido.',
                    }, 
                    data_de_nascimento: {
                        required : 'Por favor, introduza a data de nascimento do envolvido.',
                    }, 
                    sexo: {
                        required : 'Por favor, seleccione o sexo do envolvido.',
                    }, 
                    nacionalidade: {
                        required : 'Por favor, introduza a nacionalidade do envolvido.',
                    }, 
                    tipo_de_envolvimento: {
                        required : 'Por favor, seleccione o tipo de envolvimento.',
                    }, 
                },
                errorElement : 'span', 
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    error.addClass('text-danger');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });
        
    </script>


    {{-- VALIDAÇÃO DOS CAMPOS DOS ENVOLVIDOS - EDIT COM JQUERY --}}
    <script type="text/javascript">
        $(document).ready(function (){

            $('#editEnvolvidoForm').validate({
                rules: {
                    nome_completo_edit: {
                        required : true,
                    },
                    data_de_nascimento_edit: {
                        required : true,
                    },
                    sexo_edit: {
                        required : true,
                    },
                    nacionalidade_edit: {
                        required : true,
                    },
                    tipo_de_envolvimento_edit: {
                        required : true,
                    },
                },
                messages :{
                    nome_completo_edit: {
                        required : 'Por favor, introduza o nome do envolvido.',
                    }, 
                    data_de_nascimento_edit: {
                        required : 'Por favor, introduza a data de nascimento do envolvido.',
                    }, 
                    sexo_edit: {
                        required : 'Por favor, seleccione o sexo do envolvido.',
                    }, 
                    nacionalidade_edit: {
                        required : 'Por favor, introduza a nacionalidade do envolvido.',
                    }, 
                    tipo_de_envolvimento_edit: {
                        required : 'Por favor, seleccione o tipo de envolvimento.',
                    }, 
                },
                errorElement : 'span', 
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    error.addClass('text-danger');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });
        
    </script>


    {{-- VALIDAÇÃO DOS CAMPOS DAS INFRACÇÕES - ADD COM JQUERY --}}
    <script type="text/javascript">
        $(document).ready(function (){

            $('#addInfraccaoForm').validate({
                rules: {
                    envolvido: {
                        required : true,
                    },
                    tipo_de_infraccao: {
                        required : true,
                    },
                    subtipo_de_infraccao: {
                        required : true,
                    },
                },
                messages :{
                    envolvido: {
                        required : 'Por favor, seleccione o envolvido.',
                    }, 
                    tipo_de_infraccao: {
                        required : 'Por favor, seleccione o tipo de infracção.',
                    }, 
                    subtipo_de_infraccao: {
                        required : 'Por favor, seleccione o subtipo da infracção.',
                    }, 
                },
                errorElement : 'span', 
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    error.addClass('text-danger');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });
        
    </script>


    {{-- VALIDAÇÃO DOS CAMPOS DAS INFRACÇÕES - EDIT COM JQUERY --}}
    <script type="text/javascript">
        $(document).ready(function (){

            $('#editInfraccaoForm').validate({
                rules: {
                    tipo_de_infraccao_edit: {
                        required : true,
                    },
                    subtipo_de_infraccao_edit: {
                        required : true,
                    },
                },
                messages :{
                    tipo_de_infraccao_edit: {
                        required : 'Por favor, seleccione o tipo de infracção.',
                    }, 
                    subtipo_de_infraccao_edit: {
                        required : 'Por favor, seleccione o subtipo da infracção.',
                    }, 
                },
                errorElement : 'span', 
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    error.addClass('text-danger');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });
        
    </script>

@endsection