<?php

namespace App\Http\Controllers;

use App\Models\Kustomisasi;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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


        $customizations = Kustomisasi::where('id_user', $userId)
            ->whereBetween('status', [0, 5])
            ->get();

        return view('daftarKustomisasiUser', ['customizations' => $customizations]);
    }


    public function pembayaran($id)
    {
        // Fetch the transaction details including harga for the specified ID
        $transaction = Kustomisasi::findOrFail($id);

        // Fetch the harga for the specified ID
        $harga = Kustomisasi::where('id', $id)->value('harga');

        // Pass the transaction and harga values to the view
        return view('pembayaran', compact('transaction', 'harga'));
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
            'harga' => 0
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
        $updateData = [
            'status' => $request->status,
        ];

        // Check if 'harga' is present in the request
        if ($request->has('harga')) {
            $updateData['harga'] = $request->harga;
        }

        $updateData['reasoning'] = $request->reasoning;

        // Update the kustomisasi table
        DB::table('kustomisasi')
            ->where('id', '=', $request->idKustomisasi)
            ->update($updateData);

        // Check if all details are completed
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
                'k.reasoning as reasoning',
                'k.harga as harga',
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
            'status' => 3
        ]);

        // Redirect atau kembalikan respons sesuai kebutuhan Anda
        return redirect()->route('daftarKustomisasiUser')->with('success', 'Kustomisasi berhasil diperbarui');

    }


    public function transactionsList()
    {
        // Ambil ID user yang sedang diautentikasi
        $userId = auth()->id();

        // Ambil data kustomisasi dengan status 7 untuk user yang sedang diautentikasi
        $transactions = Kustomisasi::where('id_user', $userId)
            ->where('status', 6)
            ->get();

        // Kirim data ke tampilan Blade
        return view('transaksi', compact('transactions'));
    }

    public function historyList()
    {
        // Ambil ID user yang sedang diautentikasi
        $userId = auth()->id();

        // Ambil data kustomisasi dengan status 7 untuk user yang sedang diautentikasi
        $historys = Kustomisasi::where('id_user', $userId)
            ->where('status', 7)
            ->get();

        // Kirim data ke tampilan Blade
        return view('history', compact('historys'));
    }

    public function processTransaction(Request $request, $id)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'pembayaran' => 'required',
            'buktitf' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Fetch the existing kustomisasi record
        $kustomisasi = Kustomisasi::findOrFail($id);

        // Update data based on the form inputs
        $kustomisasi->pembayaran = $request->input('pembayaran');

        // Proses gambar jika diunggah
        if ($request->hasFile('buktitf')) {
            $file = $request->file('buktitf');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('buktitf', $fileName, 'public');
            $kustomisasi->buktitf = $fileName;
        }

        $kustomisasi->update([
            'status' => 7
        ]);

        // Save the updated kustomisasi record
        $kustomisasi->save();

        // Redirect or return response as needed
        return redirect()->route('daftarHistoryUser')->with('success', 'Pembayaran berhasil diupdate');
    }

    public function statusBill($id)
    {
        try {
            // Find the record by ID
            $kustomisasi = Kustomisasi::findOrFail($id);

            // Update the status
            $kustomisasi->update(['status' => 6]);

            // Redirect to the 'daftarTransaksiUser' route
            return redirect()->route('daftarTransaksiUser')->with('success', 'Status updated successfully');
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Record not found'], 404);
        } catch (\Exception $e) {
            // Handle other exceptions if needed
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }

}