<?php

namespace App\Http\Controllers;

use App\Models\Rack;
use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

class RackController extends Controller
{
    public function index()
    {
        return Rack::all();
    }

    public function store(Request $request)
    {
        return Rack::create($request->all());
    }

    public function show($id)
    {
        return Rack::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $rack = Rack::findOrFail($id);
        $rack->update($request->all());
        return $rack;
    }

    public function destroy($id)
    {
        $rack = Rack::findOrFail($id);
        $rack->delete();
        return 204;
    }
}