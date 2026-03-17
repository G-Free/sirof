@extends('frontoffice.layout_master')

@section('main_content')

    <!-- Start Content-->
    <div class="container-fluid m-0 p-0">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Ocorrências</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-12">
                <div class="card sem-sombra">
                    <div class="card-body">
                        
                        <!-- Cabeçalho -->
                        <!-- style="border: 1px solid rgba(0, 0, 0, 0.055);" -->
                        <div class="card-header d-flex justify-content-between align-items-center p-0">
                            <h4 class="" style="opacity: 0.90"><a href="{{ route('dashboard') }}" class="btn btn-white waves-effect waves-light me-2"><i class="mdi mdi-arrow-left fs-5 me-1"></i>Voltar </a></h4>
                            {{--<button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modal-adicionar-ocorrencia"><i class="mdi mdi-plus me-1"></i> Nova Ocorrência</button>--}}
                           {{-- @if (Auth::user()->role == 'Operador')--}} 
                                <a href="{{ route('add.ocorrencia') }}" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus me-1"></i> Nova Ocorrência</a>
                           {{-- @endif--}}
                            
                        </div>

                        <div class="mb-2  mt-3">
                            <div class="row row-cols-sm-auto g-2 align-items-center mb-3">
                                
                                <div class="col-12 text-sm-center">
                                    <select id="demo-foo-filter-status" class="form-select form-select-md">
                                        <option value="">Todos os estados</option>
                                        <option value="Aberto">Aberto</option>
                                        <option value="Em Investigação">Em Investigação</option>
                                        <option value="Encerrado">Encerrado</option>
                                        <option value="Arquivado">Arquivado</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input id="demo-foo-search" type="text" placeholder="Pesquisar" class="form-control form-control-md" autocomplete="on">
                                </div>
                            </div>
                        </div>
                        
                        <div class="table-responsive">
                            <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                <thead>
                                    <tr>
                                        <th>Nº Ocorrência</th>
                                        <th>Fluxo</th>
                                        <th>Data</th>
                                        <th>Envolvidos</th>
                                        <th>Situação</th>
                                        <th>Estado</th>
                                        {{--@if (Auth::user()->role == 'Chefe_Posto')
                                            <td> Operador </td>
                                        @endif--}}
                                        <td> Operador </td>
                                        <th style="width: 120px">Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach($ocorrencias as $key=>$item)
                                        <tr>

                                            <td>{{ $item->numero_ocorrencia }}</td>
                                            <td>{{ $item->fluxo_fronteirico }}</td>
                                            <td>{{ $item->data }}</td>
                                            <td>{{ $item->envolvidos->count() }}</td>
                                            <td>{{ $item->situacao }}</td>
                                            <td>

                                                @php
                                                    $tema = '';
                                                    switch ($item->estado) {
                                                        case 'Aberto':
                                                            $tema = 'primary';
                                                        break;
                                                        case 'Em Investigação':
                                                            $tema = 'secondary';
                                                        break;
                                                        case 'Encerrado':
                                                            $tema = 'warning';
                                                        break;
                                                        case 'Arquivado':
                                                            $tema = 'danger';
                                                        break;
                                                        
                                                        default:
                                                            # code...
                                                        break;
                                                    }
                                                @endphp
                                                
                                                <span class="badge label-table bg-{{$tema}}">{{ $item->estado }}</span>
                                            </td>
                                            @if (Auth::user()->role == 'Chefe_Posto')
                                                @php
                                                    $user = App\Models\User::find($item->user_id);
                                                @endphp
                                                <td> {{ $user->name }} </td>
                                            @endif

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                @if (Auth::user()->role == 'Operador')
                                                    <a href="{{ route('details.ocorrencia', $item->id) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="{{ route('delete.ocorrencia', $item->id) }}" class="action-icon" id="delete"> <i class="mdi mdi-delete"></i></a>    
                                                @endif
                                                
                                            </td>
                                            
                                        </tr>
                                    @endforeach    

                                    {{--<td><span class="badge label-table bg-danger">Suspended</span></td>--}}
                                    
                                </tbody>
                                <tfoot>
                                <tr class="active">
                                    <td colspan="6">
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

    </div> <!-- container -->


    <!-- MODAL PARA ADICIONAR UMA NOVA OCORRÊNCIA -->

    <!-- Standard modal content -->
    <div id="modal-adicionar-ocorrencia" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-adicionar-ocorrenciaLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-adicionar-ocorrenciaLabel">Adicionar Ocorrência</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-2">
                    
                    <div class="card sem-sombra">
                        <div class="card-body m-0 pb-0">
                            
                            <form id="myForm" action="{{ route('store.ocorrencia') }}" method="post" enctype="multipart/form-data" >
                                
                                @csrf
                                
                                <div class="row">
                                
                                    <div class="col-md-6 mb-3 form-group">
                                        <label class="form-label">Data da Ocorrência:  <span class="text-danger">*</span></label>
                                        <input type="date" name="data_ocorrencia" class="form-control">  
                                    </div>

                                    <div class="col-md-6 mb-3 form-group">
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
                                            <option value="Em Investigacao">Em Investigação</option>
                                            <option value="Encerrado">Encerrado</option>
                                            <option value="Arquivado">Arquivado</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3 form-group">
                                        <label class="form-label">Local: </label>
                                        <input type="text" name="local_ocorrencia" class="form-control bg-light" value="Posto Fronteiriço do Luvo" readonly>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label class="form-label">Descrição: </label>
                                        <textarea class="form-control" name="descricao_ocorrencia" rows="4" placeholder="Descreva os factos da ocorrência"></textarea>
                                    </div>

                                    <div class="col-xl-12">
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
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    {{-- VALIDAÇÃO DOS CAMPOS COM JQUERY --}}
    <script type="text/javascript">
        $(document).ready(function (){

            $('#myForm').validate({
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

@endsection