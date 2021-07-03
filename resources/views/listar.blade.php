@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-left mt-5">
        <div class="col-md-12">

            <h3 style="text-align:center">Listagem de Pessoas</h3>
            <div class="card">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <div class="alert custom">
                                <div class="row">
                                    <div class="col-md-9 align-middle">

                                    </div>
                                    <div class="col-md-3">
                                        <a class="btn btn-block btn-primary" href="{{url('/create/pessoa')}}">
                                            <span class="icon-plus2"></span> Cadastrar Novo</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body">
                                        <table class="table table-bordered  table-hover">
                                            <tr>
                                                <th>Nome</th>
                                                <th>Tipo</th>
                                                <th>Foto</th>
                                                <th>Alterar</th>
                                                <th>Excluir</th>
                                            </tr>

                                            @foreach($pessoas as $pessoa)
                                            <tr>
                                                <td>{{$pessoa->nome}}</td>
                                                <td>{{$pessoa->tipo}}</td>
                                                <td><img src="{{url('storage/img/'.$pessoa->foto)}}" width="60"
                                                        height="60"></td>
                                                <td><a href="{{url('/edit/pessoa/'.$pessoa->id)}}"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{action('PessoaController@destroy', $pessoa->id)}}"
                                                        method="post">
                                                        {{csrf_field()}}
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button class="btn btn-danger" type="submit"
                                                            placeholder="Excluir Usuario"
                                                            onclick="return confirm('Tem certeza que deseja deletar este registro?')">
                                                            <i class="fas fa-user-minus"></i></button>
                                                    </form>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>


                                       {!!$pessoas->links()!!}



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection