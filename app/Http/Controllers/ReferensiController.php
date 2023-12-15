<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referensi;

class ReferensiController extends Controller
{

    public function index()
    {
        return view('referensi');
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

        return redirect()->route('dashboardAdmin')->with('success', 'Upload berhasil!');
    }


}