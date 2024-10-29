@extends('layouts.dashboard')

@section('title', 'Detail Tamu')

@section('content')
    <div class="container mt-4">
        <h1>Detail Tamu</h1>

        <div class="row">
            <div class="col-md-8">
                <!-- Tabel untuk menampilkan detail tamu -->
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $guest->name }}</td>
                        </tr>
                        <tr>
                            <th>Telepon</th>
                            <td>{{ $guest->phone_number ?? 'Tidak diisi' }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Undangan</th>
                            <td>{{ $guest->invitation_type }}</td>
                        </tr>
                        <tr>
                            <th>Hubungan</th>
                            <td>{{ $guest->relationship ?? 'Tidak diisi' }}</td>
                        </tr>
                        <tr>
                            <th>Invited By</th>
                            <td>{{ $guest->invited_by ?? 'Tidak diisi' }}</td>
                        </tr>
                        <tr>
                            <th>Jumlah Undangan</th>
                            <td>{{ $guest->qty }}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>
                                <div class="form-group">
                                    <label for="invitationMessage">Undangan:</label>
                                    <textarea class="form-control" id="invitationMessage" rows="8" readonly>
Kepada Yth Bapak/Ibu/Saudara/i. *{{ $guest->name }}*

Shallom, 

Dengan ini kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri acara pernikahan kami,

Achmad Kathariza Syah(*Tacha*)
(Putra Kedua dari Alm. Bp. Joseph Yoes Berliansyah & Ibu Katharina Berliansyah)
dan
Veronica Sandra (*Veronica*)
(Putri Pertama dari Bp. Yesaya Widjaja & Ibu Linda Sandra)

Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.

Detail undangan dapat diakses melalui link berikut :
{{ url('/' . $guest->invitation_code) }}

Atas perhatiannya kami ucapkan terima kasih. 

Dari kami yang berbahagia,

Tacha & Veronica,
Keluarga Alm. Bp. Joseph Yoes Berliansyah & Ibu Katharina Berliansyah,
Keluarga Bp. Yesaya Widjaja & Ibu Linda Sandra

Tuhan Yesus memberkati.</textarea>
                                    <button class="btn btn-primary mt-2" onclick="copyText()">Copy Text</button>
                                </div>

                                <!-- Script untuk menyalin teks -->
                                <script>
                                    function copyText() {
                                        var copyText = document.getElementById("invitationMessage");
                                        copyText.select();
                                        document.execCommand("copy");
                                        alert("Teks undangan berhasil disalin!");
                                    }
                                </script>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-4 text-center">
                <h4>QR Code</h4>
                <!-- QR Code untuk URL undangan -->
                <div class="qr-code">
                    {!! QrCode::size(200)->generate('https://forevertachavero.com/invitations/' . $guest->invitation_code) !!}
                </div>
                <p class="mt-2">{{ $guest->invitation_code }}</p>
            </div>
        </div>

        <!-- Tombol navigasi -->
        <div class="mt-3">
            <a href="{{ route('guests.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('guests.edit', $guest) }}" class="btn btn-warning">Edit</a>
            <form action="#" method="POST" class="d-inline"
                onsubmit="return confirm('Apakah Anda yakin ingin menghapus tamu ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
@endsection

<!-- Script untuk menyalin teks -->
<script>
    function copyText() {
        var copyText = document.getElementById("invitationMessage");
        copyText.select();
        document.execCommand("copy");
        alert("Teks undangan berhasil disalin!");
    }
</script>
