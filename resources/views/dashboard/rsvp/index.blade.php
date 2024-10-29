@extends('layouts.dashboard')

@section('title', 'RSVP')

@section('content')
    <h1 class="mt-4">RSVP</h1>

    <table id="example" class="display table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Invitation Code</th>
                <th>Kehadiran</th>
                <th>Nomor Telephone</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Invitation Code</th>
                <th>Kehadiran</th>
                <th>Nomor Telephone</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $comment->name }}</td>
                    <td>{{ $comment->invitation_code }}</td>
                    <td>{{ $comment->kehadiran }}</td>
                    <td>{{ $comment->nomor_telephone }}</td>
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
