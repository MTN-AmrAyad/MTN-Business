<?php

namespace App\Http\Controllers;

use App\Models\BiGrowthBook;
use Illuminate\Http\Request;

class BiGrowthBookController extends Controller
{
    public function store(Request $request)
    {
        $data = BiGrowthBook::create($request->all());
        return response()->json($data, 201);
    }

    public function index()
    {
        $data = BiGrowthBook::all();
        return response()->json($data);
    }
}
