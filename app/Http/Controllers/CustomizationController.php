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
    public function index1()
    {

        $userId = auth()->id();
        $customizations = Kustomisasi::where('id_user', $userId)->get();

        return view('daftarKustomisasiUser', ['customizations' => $customizations]);
    }



    public function create(): View
    {
        return view('kustomisasi');
    }

    public function advance()
    {
        return view('personalAdvance');
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
            'status' => 1,
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
                'k.quantity as quantity',
                'k.color as color',
                'k.length as length',
                'k.width as width',
                'k.height as height',
                'k.notes as notes',


            )
            ->join('users as u', 'u.id', '=', 'k.id_user')
            ->where('k.id', '=', $detailKustomisasiId)->first();

        return view('detailKustomisasi', compact('detailKustomisasi'));
    }

    public function show($id)
    {
        try {
            $kustomisasi = Kustomisasi::findOrFail($id);
            return view('detailsList', ['kustomisasi' => $kustomisasi]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Kustomisasi tidak ditemukan'], 404);
        }
    }
    public function destroy($id)
    {
        $customization = Kustomisasi::findOrFail($id);
        $customization->delete();

        return redirect()->route('daftarKustomisasiUser')->with('status', 'Customization deleted successfully!');
    }

    public function kustomisasiAdvance($id)
    {
        $kustomisasi = Kustomisasi::find($id);

        if (!$kustomisasi) {
            abort(404);
        }

        return view('updateKustomisasi', ['kustomisasi' => $kustomisasi]);
    }

    public function update(Request $request, $id)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'quantity' => 'required|integer',
            'color' => 'required|string',
            'length' => 'required|numeric',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'notes' => 'nullable|string',
        ]);

        // Dapatkan instance model Kustomisasi berdasarkan ID
        $kustomisasi = Kustomisasi::findOrFail($id);

        // Perbarui atribut-atribut model
        $kustomisasi->update([
            'quantity' => $request->input('quantity'),
            'color' => $request->input('color'),
            'length' => $request->input('length'),
            'width' => $request->input('width'),
            'height' => $request->input('height'),
            'notes' => $request->input('notes'),
        ]);

        // Redirect atau kembalikan respons sesuai kebutuhan Anda
        return redirect()->route('daftarKustomisasiUser')->with('success', 'Kustomisasi berhasil diperbarui');

    }
}