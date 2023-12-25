<?php

namespace App\Http\Controllers;

use App\Models\Referensi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;



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
        $reference = Referensi::create([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,

        ]);
        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan referensi',
            'data' => $reference
        ]);
    }

    public function show($id)
    {
        $referensi = Referensi::find($id);
        if (!$referensi) {
            return response()->json(['message' => 'referensi not found'], 404);
        }
        $referensiData = [
            'name' => $referensi->name,
            'image' => $referensi->image,
            'description' => $referensi->description,
        ];
        return response()->json([
            'success' => true,
            'data' => $referensiData,
            'message' => 'Berhasil mendapatkan data'
        ]);
    }

    public function update(Request $request, $id)
    {
        $referensi = Referensi::find($id);

        $referensi->name = $request->name;
        $referensi->image = $request->image;
        $referensi->description = $request->description;
        $referensi->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil memperbarui referensi',
            'data' => $referensi
        ]);
    }

    public function destroy($id)
    {
        $referensi = Referensi::find($id);

        if (!$referensi) {
            return response()->json(['message' => 'Referensi not found'], 404);
        }

        $referensi->delete();

        return response()->json([
            'status' => true,
            'message' => 'Referensi berhasil dihapus',
            'data' => null,
        ], 200);
    }



}