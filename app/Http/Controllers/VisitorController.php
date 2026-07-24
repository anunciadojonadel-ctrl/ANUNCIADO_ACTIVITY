<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    // GET
    public function index()
    {
        return Visitor::all();
    }

    // POST
    public function store(Request $request)
    {
        $visitor = Visitor::create([
            'name' => $request->name,
            'address' => $request->address,
            'purpose' => $request->purpose,
            'visit_date' => $request->visit_date
        ]);

        return response()->json($visitor);
    }

    // PUT
    public function update(Request $request, $id)
    {
        $visitor = Visitor::findOrFail($id);

        $visitor->update([
            'name' => $request->name,
            'address' => $request->address,
            'purpose' => $request->purpose,
            'visit_date' => $request->visit_date
        ]);

        return response()->json($visitor);
    }
}