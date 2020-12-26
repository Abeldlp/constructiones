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
        //
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
