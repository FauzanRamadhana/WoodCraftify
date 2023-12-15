<?php

namespace App\Http\Controllers;

use App\Models\Referensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiReferenceController extends Controller
{
    public function index()
    {
        $references = Referensi::paginate(10);
        return response()->json([
            'data' => $references
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'image' => 'required|string',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'errors' => $validator->errors()
            ], 422);
        }

        $reference = Referensi::create([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
        ]);

        return response()->json([
            'data' => $reference
        ], 201);
    }

    // Metode lainnya tetap sama...

    public function destroy($id)
    {
        $referensi = Referensi::find($id);

        if (!$referensi) {
            return response()->json(['message' => 'Referensi not found'], 404);
        }

        $referensi->delete();

        return response()->json([
            'message' => 'Referensi deleted successfully'
        ], 204);
    }
}