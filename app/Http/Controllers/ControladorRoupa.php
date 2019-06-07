<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roupa;

class ControladorRoupa extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $listar = Roupa::all();
            return view('roupa', compact('listar'));
    }

    public function create()
    {
        return view('roupaNovo');
    }

    public function store(Request $request)
    {
        $novo = new Roupa();
        $novo->nome = $request->input('nome');
        $novo->categoria = $request->input('categoria');
        $novo->quantidade = $request->input('quantidade');
        $novo->preco = $request->input('preco');
        $novo->save();
        return redirect('/roupa');
    }

    public function consulta($id) 
    {
        $list = Roupa::find($id);
        if(isset($list)) {
            return view('roupaConsulta', compact('list'));
        }
        return redirect('/roupa');
    }

    public function edit($id) 
    {
        $edit = Roupa::find($id);
        if(isset($edit)) {
            return view('roupaEdita', compact('edit'));
        }
            return redirect('/roupa');
    }

    public function update(Request $request, $id)
    {
        $edit = Roupa::find($id);
        if(isset($edit)) {
            $edit->nome = $request->input('nome');
            $edit->categoria = $request->input('categoria');
            $edit->quantidade = $request->input('quantidade');
            $edit->preco = $request->input('preco');
            $edit->save();  
        }
        return redirect('/roupa');
    }

    public function destroy($id)
    {
        $del = Roupa::find($id);
        if(isset($del)) {
            $del->delete();
        }
        return redirect('/roupa');
    }
}
