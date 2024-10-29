<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class GuestController extends Controller
{

    public function index()
    {
        $guests = Guest::all();
        return view('dashboard.guests.index', compact('guests'));
    }

    // Menampilkan form tambah tamu
    public function create()
    {
        return view('dashboard.guests.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'invitation_type' => 'required|in:digital,fisik',
            'relationship' => 'required|string|max:255',
            'invited_by' => 'required|in:tacha,vero',
            'qty' => 'required|integer|min:1',
        ]);


        // Membuat tamu baru dengan data yang divalidasi
        Guest::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'invitation_type' => $request->invitation_type,
            'relationship' => $request->relationship,
            'invited_by' => $request->invited_by,
            'qty' => $request->qty,
        ]);

        return redirect()->route('guests.index')->with('success', 'Tamu berhasil ditambahkan dengan kode undangan: ');
    }

    // Menampilkan detail tamu
    public function show(Guest $guest)
    {
        return view('dashboard.guests.show', compact('guest'));
    }

    // Menampilkan form edit tamu
    public function edit(Guest $guest)
    {
        return view('dashboard.guests.edit', compact('guest'));
    }

    // Memperbarui data tamu
    public function update(Request $request, Guest $guest)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'invitation_type' => 'required|in:digital,fisik',
            'relationship' => 'required|string|max:255',
            'invited_by' => 'required|in:tacha,vero',
            'qty' => 'required|integer|min:1',
        ]);

        $guest->update($request->all());

        return redirect()->route('guests.index')->with('success', 'Tamu berhasil diperbarui.');
    }

    // Menghapus tamu
    public function destroy(Guest $guest)
    {
        $guest->delete();

        return redirect()->route('guests.index')->with('success', 'Tamu berhasil dihapus.');
    }
}
