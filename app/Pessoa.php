<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = ['nome', 'tipo', 'foto'];


    public function salvaPessoa($data)
    {
        $this->user_id = auth()->user()->id;
        $this->nome = $data['nome'];
        $this->save();
        return 1;
    }
}
