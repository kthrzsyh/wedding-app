@extends('layouts.dashboard')

@section('title', 'Tambah Tamu')

@section('content')
    <div class="container mt-4">
        <h1>Tambah Tamu</h1>

        <!-- Menampilkan pesan error jika ada -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form untuk menambah tamu baru -->
        <form action="{{ route('guests.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Telepon</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number"
                    value="{{ old('phone_number') }}">
            </div>
            <div class="form-group">
                <label for="invitation_type">Tipe Undangan</label>
                <select class="form-control" id="invitation_type" name="invitation_type">
                    <option value="fisik">Fisik</option>
                    <option value="digital">Non Fisik</option>
                </select>
            </div>
            <div class="form-group">
                <label for="relationship">Hubungan </label>
                <input type="text" class="form-control" id="relationship" name="relationship"
                    value="{{ old('relationship') }}">
            </div>
            <div class="form-group">
                <label for="invited_by">Invited By</label>
                <select class="form-control" id="invited_by" name="invited_by" required>
                    <option value="tacha">tacha</option>
                    <option value="vero">vero</option>
                </select>
            </div>

            <div class="form-group">
                <label for="qty">Jumlah Undangan (Qty)</label>
                <input type="number" class="form-control" id="qty" name="qty" value="1" min="1"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('guests.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
