@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <style>
        .card-equal-height {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }
    </style>
    <div class="container mt-4">
        <h1>Dashboard</h1>

        <div class="row">
            <!-- Total Undangan -->
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3 card-equal-height" data-toggle="tooltip"
                    title="Total jumlah undangan yang telah dibuat, termasuk fisik dan non fisik.">
                    <div class="card-body">
                        <h5 class="card-title">Total Undangan</h5>
                        <p class="card-text display-4">{{ $totalUndangan }}</p>
                        <small>Fisik: {{ $totalUndanganFisik }} | Non Fisik: {{ $totalUndanganNonFisik }}</small>
                    </div>
                </div>
            </div>

            <!-- Total Tamu yang Diundang (Dihitung dari Qty) -->
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3 card-equal-height">
                    <div class="card-body">
                        <h5 class="card-title">Total Tamu yang Diundang</h5>
                        <p class="card-text display-4">{{ $totalTamuDiundang }}</p>
                    </div>
                </div>
            </div>

            <!-- Total Undangan yang Sudah Respon Hadir -->
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3 card-equal-height">
                    <div class="card-body">
                        <h5 class="card-title">Total Respon Hadir</h5>
                        <p class="card-text display-4">{{ $totalResponHadir }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
