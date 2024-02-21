<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

class BorrowController extends Controller
{
    public function index()
    {
        return Borrow::all();
    }

    public function store(Request $request)
    {
        return Borrow::create($request->all());
    }

    public function show($id)
    {
        return Borrow::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $borrow = Borrow::findOrFail($id);
        $borrow->update($request->all());
        return $borrow;
    }

    public function destroy($id)
    {
        $borrow = Borrow::findOrFail($id);
        $borrow->delete();
        return 204;
    }
}