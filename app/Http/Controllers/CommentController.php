<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('dashboard.rsvp.index', compact('comments'));
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
        if ($request->ajax()) {
            return response()->json($comment);
        }

        // Jika bukan AJAX, redirect seperti biasa
        return redirect()->back()->with('sukses', 'Komentar berhasil ditambahkan');
    }
}
