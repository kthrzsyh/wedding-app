@extends('layouts.dashboard')

@section('title', 'Daftar Tamu')

@section('content')
    <h1 class="mt-4">Daftar Tamu</h1>
    <a href="{{ route('guests.create') }}" class="btn btn-primary mb-3">Tambah Tamu</a>

    <!-- Menampilkan pesan sukses setelah melakukan operasi seperti tambah, edit, atau hapus -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table id="example" class="display table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Invitation Code</th>
                <th>Type</th>
                <th>Relationship</th>
                <th>Invited by</th>
                <th>Qty</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th></th>
                <th>Nama</th>
                <th>Invitation Code</th>
                <th>Type</th>
                <th>Relationship</th>
                <th>Invited by</th>
                <th>Qty</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($guests as $guest)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $guest->name }}</td>
                    <td>{{ $guest->invitation_code }}</td>
                    <td>{{ $guest->invitation_type }}</td>
                    <td>{{ $guest->relationship }}</td>
                    <td>{{ $guest->invited_by }}</td>
                    <td>{{ $guest->qty }}</td>
                    <td class="text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('guests.show', $guest->id) }}"
                                class="btn btn-info btn-sm mx-1 action-btn">Detail</a>
                            <a href="{{ route('guests.edit', $guest->id) }}"
                                class="btn btn-warning btn-sm mx-1 action-btn">Edit</a>
                            <form action="{{ route('guests.destroy', $guest->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mx-1 action-btn"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus tamu ini?')">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
<!-- CSS -->
<style>
    .action-btn {
        min-height: 38px;
        /* Atur tinggi minimum tombol */
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
