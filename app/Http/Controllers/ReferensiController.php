<?php

namespace App\Http\Controllers;

use App\Models\Kustomisasi;
use Illuminate\Http\Request;
use App\Models\Referensi;

class ReferensiController extends Controller
{


    public function index()
    {
        return view('referensi');
    }
    public function index1()
    {
        $references = Referensi::all();
        return view('dashboard', compact('references'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',

        ]);

        $imagePath = $request->file('image')->store('image', 'public');

        Referensi::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('daftarUser')->with('success', 'Upload berhasil!');
    }
    public function store1(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|string',
            'description' => 'nullable|string',
            'quantity' => 'nullable|integer',
            'color' => 'nullable|string',
            'length' => 'nullable|integer',
            'width' => 'nullable|string',
            'height' => 'nullable|integer',
            'notes' => 'nullable|string',
        ]);
        
        // $imagePath = $request->file('image')->store('image', 'public');

        Kustomisasi::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'quantity' => $request->quantity,
            'color' => $request->color,
            'length' => $request->length,
            'width' => $request->width,
            'height' => $request->height,
            'notes' => $request->notes,
            'id_user' => auth()->id(),
            'status' => 3,
            'harga' => 0,
        ]);

        return redirect()->route('dashboard')->with('success', 'Upload berhasil!');
    }

    public function personalAdvance($id)
    {
        $reference = Referensi::find($id);

        if (!$reference) {
            abort(404);
        }

        return view('personalAdvance', ['reference' => $reference]);
    }

}