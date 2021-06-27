@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-left mt-5">
       
        <div class="col-md-12">
            
            <div class="card">
            <div class="card-header">
            <div class="col-md-9">
                <a href ="{{url('/create/pessoa')}}">
                    <button class="btn btn-success">Cadastrar Novo</button>
                </a>
            </div>
            </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Foto</th>
                            <th>visualizar</th>
                            <th width="280px">Editar</th>
                        </tr>
                        @foreach($pessoas as $pessoa)
                            <tr>
                                <td>{{$pessoa->nome}}</td>
                                <td>{{$pessoa->tipo}}</td>
                                <td><img src="{{url('storage/img/'.$pessoa->foto)}}" width="80" height="80"></td>


                                <td>
                                <a href="{{url('/edit/pessoa/'.$pessoa->id)}}">Editar</a>



                                </td>


                                <td>
                                    <form action="{{action('PessoaController@destroy', $pessoa->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit">Excluir</button>
                                    </form>


                                </td>

                            </tr>
                        @endforeach
                    </table>




                </div>
            </div>
        </div>

    </div>
</div>
@endsection