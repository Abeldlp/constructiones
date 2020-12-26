<?php

namespace App\Http\Controllers;

use App\Models\Construction;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ConstructionController extends Controller
{

    public function index()
    {
        $constructions = (new Construction())->all();
        return Inertia::render('work', compact('constructions'));
    }


    public function create()
    {
        return Inertia::render('admin/createConstruction');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required',
            'title' => '',
            'description' => ''
        ]);

        $imagePath = $request->image->store('obras', 'public');

        $dataToSave = array_merge($validatedData, [
            'image' => $imagePath
        ]);
        (new Construction())->create($dataToSave);
        return redirect('/admin');
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
