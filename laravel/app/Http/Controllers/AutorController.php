<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

#[OpenApi\PathItem]
class AutorController extends Controller
{
    /**
     * Lista de autores.
     *
     * ...
     */
    #[OpenApi\Operation]
    public function index()
    {
        return Autor::all('id','nombre');
    }

    public function store(Request $request)
    {
        return Autor::create($request->all());
    }

    public function show($id)
    {
        return Autor::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $autor = Autor::findOrFail($id);
        $autor->update($request->all());
        return $autor;
    }

    public function destroy($id)
    {
        $autor = Autor::findOrFail($id);
        $autor->delete();
        return 204;
    }
}