<?php
use App\User;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
       return view('cadastro');
    }

    public function store(Request $request)
    {
        $usuario = new User();
        print_r($usuario);
        $data = $this->validate($request, [
            'nome'=>'required',
            'tipo'=> 'required'
        ]);
       
        $usuario->salvaUsuario($data);
        return redirect('/lista')->with('success', 'New support ticket has been created! Wait sometime to get resolved');
    }
}
