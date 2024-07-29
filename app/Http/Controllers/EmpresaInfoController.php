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
}
