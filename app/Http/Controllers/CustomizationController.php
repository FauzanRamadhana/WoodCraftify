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
            'status' => 'Persetujuan',
            'created_at' => now()->toDateString()
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
                'u.name as namaPengaju',
                'k.status as status',
            )
            ->join('users as u', 'u.id', '=', 'k.id_user')
            ->orderBy('k.id', 'asc')
            ->get();

        return Datatables::of($customisations)
            ->make(true);
    }

    public function updateKustomisasi(Request $request)
    {
        if ($request->status == 1) {
        } else {
            DB::table('kustomisasi')
                ->where('id', '=', $request->idKustomisasi)
                ->update([
                    'status' => $request->status,
                ]);

            if ($request->status == 2) {
                DB::table('kustomisasi')
                    ->where('id', '=', $request->idKustomisasi)
                    ->update([
                        'status' => $request->status,
                    ]);
            }
            if ($request->status == 3) {
                DB::table('kustomisasi')
                    ->where('id', '=', $request->idKustomisasi)
                    ->update([
                        'status' => $request->status,
                    ]);
            }
        }

        $allDetailsCompleted = DB::table('kustomisasi')
            ->where('id', '=', $request->idKustomisasi)
            ->where('status', '!=', 2)
            ->where('status', '!=', 3)
            ->doesntExist();
        return redirect('daftarKustomisasi');
    }


    public function detailKustomisasi($detailKustomisasiId)
    {
        $detailKustomisasi = DB::table('kustomisasi as k')
            ->select(
                'k.id as id',
                'k.image as image',
                'k.name as name',
                'k.description as description',
                'u.name as namaPengaju',
                'k.status as status',
            )
            ->join('users as u', 'u.id', '=', 'k.id_user')
            ->where('k.id', '=', $detailKustomisasiId)->first();

        return view('detailKustomisasi', compact('detailKustomisasi'));
    }
}