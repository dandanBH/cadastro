<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['id', 'nome', 'tipo','foto'];
    //'nome', 'tipo', 'imagem',


    public function salvaUsuario($data)
{
      
        $this->tipo = $data['tipo'];
        $this->nome = $data['nome'];
        $this->save();
        return 1;
}
}