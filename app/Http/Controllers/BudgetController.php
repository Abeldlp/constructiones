<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\In;
use Inertia\Inertia;

class BudgetController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $totalContact = (new Inquiry())->all();
        $undoneContact = (new Inquiry())->where('done', null)->get();
       return Inertia::render('admin/adminMain', compact(
           'user',
           'totalContact',
           'undoneContact'
       ));
    }

    public function create()
    {
        //
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
