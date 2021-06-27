<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('listar',compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $pessoa = new Pessoa;
       $pessoa->nome = $request->nome;
       $pessoa->tipo = $request->tipo;

        if ($request->hasFile('foto') && $request->file('foto')->isValid()){
            $foto = $request->foto;
            $hashFoto = md5($foto->getClientOriginalName().strtotime("now"));

            $extension = $request->foto->extension();
            $nomeFoto = "{$hashFoto}.{$extension}";
            $request->foto->storeAs('img',$nomeFoto); //upload
            $pessoa->foto =$nomeFoto;


            //dd($request->foto->extension());
        }
        $pessoa->save();
        return redirect('/')->with('success', 'New support ticket has been created! Wait sometime to get resolved');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $pessoa = Pessoa::find($id);
        $pessoa->delete();


        return redirect('/')->with('success', 'New support ticket has been created! Wait sometime to get resolved');

    }
}
