@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-left mt-5">
        <div class="col-md-12">
            <div class="card">





                <div class="card-header">Altera Usuario</div>
                <div class="card-body">
                    <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('/update/pessoa/'.$pessoa->id) }}">
                    <input type="hidden" value="{{csrf_token()}}" name="_token" />

                        <div class="form-group">
                           
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome"  value="{{$pessoa->nome}}" name="nome" placeholder="Seu Nome">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control-file" id="foto" name="foto" placeholder="Escolha sua Foto">
                        </div>

                        <div class="form-group">
                            <label for="tipo">Tipo Usuario</label>
                            <select class="form-control" id="tipo" name="tipo">
                                @if (($pessoa->tipo) == 'Administrador')
                                    <option value="Administrador" selected >Administrador</option>
                                    <option value="Operador"  >Operador</option>
                                @else
                                    <option value="Administrador"  >Administrador</option>
                                    <option value="Operador" selected >Operador</option>
                                @endif;
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary ">Alterar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection