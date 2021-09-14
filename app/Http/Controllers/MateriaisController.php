<?php

namespace App\Http\Controllers;

use App\Http\Requests\MateriaisFormRequest;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MateriaisController extends Controller
{
    public function index(Request $request)
    {
        $materiais = Material::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('materiais.index', compact('materiais', 'mensagem'));
    }

    public function create()
    {
        return view('materiais.create');
    }

    public function store(MateriaisFormRequest $request)
    {
        $material = Material::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Material \"{$material->nome}\" criado com o id {$material->id}"
            );
        return redirect()->route('listar_materiais');
    }

    public function destroy(Request $request)
    {
        Material::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Material removido com sucesso"
            );
        return redirect()->route('listar_materiais');
    }
};
