<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contacto.index');
    }


    public function list()
    {

        $messages = Message::paginate(2);
        return view('general.message', [
            'messages' => $messages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'surname' => 'required|max:100',
            'email' => 'required|email',
            'province' => 'required|max:100',
            'country' => 'required|max:100',
            'message' => 'required|max:250',
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'surname.required' => 'El campo apellido es obligatorio',
            'email.required' => 'El campo email es obligatorio',
            'province.required' => 'El campo provincia es obligatorio',
            'country.required' => 'El campo país es obligatorio',
            'message.required' => 'El campo mensaje es obligatorio',
        ]);

        Message::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'province' => $request->province,
            'country' => $request->country,
            'message' => $request->message,
        ]);

        return view('general.notification', [
           'title' => '¡Genial!',
           'msg' => 'Tu mensaje ha sido enviado al administrador del sitio ¡Muchas Gracias!',
           'alertType' => 'alert-success',
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function notification()
    {
        //
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
