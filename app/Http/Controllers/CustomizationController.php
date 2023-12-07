<?php

namespace App\Http\Controllers;

use App\Models\Kustomisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\View\View;
use DB;
use Yajra\DataTables\DataTables;

class CustomizationController extends Controller
{
    public function index()
    {
        return view('daftarKustomisasi');
    }
    public function create(): View
    {
        return view('kustomisasi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        $imagePath = $request->file('image')->store('image', 'public');

        Kustomisasi::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
            'id_user' => auth()->id(),
            'created_at' => Carbon::now()->toDateString()
        ]);

        return redirect()->route('dashboard')->with('success', 'Upload berhasil!');
    }
    


public function getAllCustomisations()
{
    $customisations = DB::table('kustomisasi as k')
        ->select(
            'k.id as id',
            'k.image as image',
            'k.name as name',
            'k.description as description',
            'u.name as namaPengaju'
        )
        ->join('users as u', 'u.id', '=', 'k.id_user')
        ->orderBy('k.id', 'asc')
        ->get();

    return Datatables::of($customisations)
        ->make(true);
}


}