@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-left mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cadastro</div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ url('/inserir/user') }}">
                    <input type="hidden" value="{{csrf_token()}}" name="_token" />

                        <div class="form-group">
                           
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Seu Nome">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" id="foto" placeholder="Escolha sua Foto">
                        </div>

                        <div class="form-group">
                            <label for="tipo">Tipo Usuario</label>
                            <select class="form-control" id="tipo">
                                <option value="Administrador">Administrador</option>
                                <option value="Operador">Operador</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection