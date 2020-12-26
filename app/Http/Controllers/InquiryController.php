<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required_without:tel',
            'tel' => 'required_without:email',
            'inquiry' => '',
            'contact_method' => '',
        ],
        [
            'first_name.required' => 'Por favor escribe tu nombre',
            'last_name.required' => 'Por favor escribe tus apellidos',
            'email.required_without' => 'Si no dejas tu numero deja tu email',
            'tel.required_without' => 'Si no dejas tu email deja tu numero',
        ]);

        (new Inquiry())->create($validatedData);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
