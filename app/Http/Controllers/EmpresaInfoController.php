<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpresaInfo;

class EmpresaInfoController extends Controller
{
    public function index()
    {
        $empresaInfo = EmpresaInfo::all();
        return view('sobrenosotros.index', compact('empresaInfo'));
    }

    /*public function create()
    {
        return view('sobrenosotros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        EmpresaInfo::create($request->all());

        return redirect()->route('sobrenosotros.index');
    }*/
}
