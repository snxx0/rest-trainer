<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

class StockController extends Controller
{
    public function index()
    {
        return Stock::all();
    }

    public function store(Request $request)
    {
        return Stock::create($request->all());
    }

    public function show($id)
    {
        return Stock::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $stock = Stock::findOrFail($id);
        $stock->update($request->all());
        return $stock;
    }

    public function destroy($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();
        return 204;
    }
}