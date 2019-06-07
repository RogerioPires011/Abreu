<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ControladorCliente extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $listar = Cliente::all();
            return view('cliente', compact('listar'));
    }

    public function create()
    {
        return view('clienteNovo');
    }

    public function store(Request $request)
    {
        $novo = new Cliente();
        $novo->nome = $request->input('nome');
        $novo->cpf = $request->input('cpf');
        $novo->dataNasc = $request->input('dataNasc');
        $novo->sexo = $request->input('sexo');
        $novo->celular = $request->input('celular');
        $novo->email = $request->input('email');
        $novo->cep = $request->input('cep');
        $novo->endereco = $request->input('endereco');
        $novo->complemento = $request->input('complemento');
        $novo->bairro = $request->input('bairro');
        $novo->cidade = $request->input('cidade');
        $novo->uf = $request->input('uf');
        $novo->save();
        return redirect('/cliente');
    }

    public function consulta($id) 
    {
        $list = Cliente::find($id);
        if(isset($list)) {
            return view('clienteConsulta', compact('list'));
        }
        return redirect('/cliente');
    }

    public function edit($id) 
    {
        $edit = Cliente::find($id);
        if(isset($edit)) {
            return view('clienteEdita', compact('edit'));
        }
            return redirect('/cliente');
    }

    public function update(Request $request, $id)
    {
        $edit = Cliente::find($id);
        if(isset($edit)) {
            $edit->nome = $request->input('nome');
            $edit->cpf = $request->input('cpf');
            $edit->dataNasc = $request->input('dataNasc');
            $edit->sexo = $request->input('sexo');
            $edit->celular = $request->input('celular');
            $edit->email = $request->input('email');
            $edit->cep = $request->input('cep');
            $edit->endereco = $request->input('endereco');
            $edit->complemento = $request->input('complemento');
            $edit->bairro = $request->input('bairro');
            $edit->cidade = $request->input('cidade');
            $edit->uf = $request->input('uf');
            $edit->save();
        }
        return redirect('/cliente');
    }

    public function destroy($id)
    {
        $del = Cliente::find($id);
        if(isset($del)) {
            $del->delete();
        }
        return redirect('/cliente');
    }

}
