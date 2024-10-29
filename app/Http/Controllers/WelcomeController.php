<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Guest;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class WelcomeController extends Controller
{
    public function index($invitation_code = null)
    {
        // Cek apakah invitation_code ada di database
        $guest = null;
        $qrCode = null;

        $comments = Comment::orderBy('created_at', 'desc')->get();

        if (!empty($invitation_code)) {
            $guest = Guest::where('invitation_code', $invitation_code)->first();

            // Jika tamu ditemukan, generate QR code
            if ($guest) {
                $qrCode = QrCode::size(200)->generate($invitation_code);
            }
        }

        // Jika tamu ditemukan, buat QR code
        // Tampilkan view dengan atau tanpa data tamu dan QR code
        return view('welcome', compact('guest', 'qrCode', 'comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required',
            'nomor_telephone'   => 'required|numeric',
            'kehadiran'         => 'required',
            'comments'          => 'nullable|string',
        ]);

        $comment = Comment::create([
            'name'              => $request->name,
            'nomor_telephone'   => $request->nomor_telephone,
            'kehadiran'         => $request->kehadiran,
            'comments'          => $request->comments,
            'invitation_code'   => $request->invitation_code,
        ]);
        // dd($validatedData);
        // Simpan data ke database
        // dd($request);
        // Comment::create($validatedData);
        // $request->session()->flash('sukses', 'Registration successfull! Please Login');


        // return redirect()->back()->with('sukses', 'Submit RSVP Berhasil!');
        // Jika request berasal dari AJAX, kembalikan response JSON
        // $comment = Comment::create($comment);
        return response()->json($comment);
    }

    // public function create()
    // {
    //     return view('create_rsvp');
    // }
}
