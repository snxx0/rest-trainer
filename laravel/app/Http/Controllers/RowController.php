<?php

namespace App\Http\Controllers;

use App\Models\Row;
use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

class RowController extends Controller
{
    public function index()
    {
        return Row::all();
    }

    public function store(Request $request)
    {
        return Row::create($request->all());
    }

    public function show($id)
    {
        return Row::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $row = Row::findOrFail($id);
        $row->update($request->all());
        return $row;
    }

    public function destroy($id)
    {
        $row = Row::findOrFail($id);
        $row->delete();
        return 204;
    }
}