@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-left mt-5">
       
        <div class="col-md-12">
            
            <div class="card">
            <div class="card-header">
            <div class="col-md-9">
                <a href ="{{url('/create/user')}}">
                    <button class="btn btn-success">Cadastrar Novo</button>
                </a>
            </div>
            </div>
              

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection