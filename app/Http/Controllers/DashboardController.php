<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Guest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // // Total undangan
        $totalUndangan = Guest::count();

        // // Total undangan fisik dan non fisik
        $totalUndanganFisik = Guest::where('invitation_type', 'fisik')->count();
        $totalUndanganNonFisik = Guest::where('invitation_type', 'digital')->count();

        // // Total tamu yang diundang dihitung dari qty
        $totalTamuDiundang = Guest::sum('qty');

        // // Total undangan yang sudah respon "Hadir" (jumlah undangan, bukan qty)
        $totalResponHadir = Comment::where('kehadiran', 'hadir')->count();

        // // Estimasi total tamu undangan yang akan hadir (dari qty yang respon "Hadir")
        // $estimasiTamuHadir = Guest::where('status', 'Hadir')->sum('qty');

        // Kirim data ke view
        return view('dashboard.index', compact('totalUndangan', 'totalUndanganFisik', 'totalUndanganNonFisik', 'totalResponHadir', 'totalTamuDiundang'));
    }
}
