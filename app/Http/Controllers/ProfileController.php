<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Datatables\UsersDataTable;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update1(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => ['required', 'confirmed'],
            'phone' => 'required',
            'address' => 'required',
        ]);

        DB::table('users')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'address' => $request->address,
            ]);


        return Redirect::route('dashboard')->with('status', 'profile-updated');
    }

    

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/admin')->with('status', "Data Deleted Successfully!");
    }


    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('daftarUser');
    }

}