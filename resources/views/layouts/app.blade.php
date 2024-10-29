<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tacha & Vero</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('assets/images/icon.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{ asset('assets/css/superfish.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    <!-- Modernizr JS -->
    <script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- Bootstrap and FontAwesome JS for icons -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <style>
        body.locked {
            overflow: hidden;
            /* Mengunci scroll pada div id="startPage" */
        }

        /* Custom CSS for positioning the button */
        #playPauseButton {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #BDA270;
            color: white;
            font-size: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 999;
            padding: 0;
        }

        #playPauseButton:hover {
            background-color: #A58957;
        }

        .map-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            margin: 0 auto;
        }

        .fh5co-map {
            width: 100%;
            max-width: 600px;
            height: 450px;
            border: 0;
        }

        @media (max-width: 768px) {
            .fh5co-map {
                height: 300px;
            }
        }

        .text-center {
            text-align: center;
        }

        .footer-family {
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: nowrap;
        }

        .family-item {
            width: 45%;
            /* Ensure both families take up 45% of the width */
            text-align: center;
        }

        @media (max-width: 576px) {
            .footer-family {
                flex-direction: column;
                align-items: center;
            }

            .family-item {
                width: 100%;
                /* Full width on mobile */
                margin-bottom: 15px;
                /* Add spacing between the two family items on mobile */
            }
        }

        /* Styling untuk list comment */
        .comment-list {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            background-color: #f9f9f9;
            max-height: 300px;
            overflow-y: auto;
        }

        /* Styling untuk item komentar */
        .list-group-item {
            background-color: #fff;
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
        }

        .list-group-item:hover {
            background-color: #f1f1f1;
            /* Warna hover untuk item */
        }

        /* Styling untuk heading (nama) */
        .list-group-item-heading {
            font-weight: bold;
            color: #333;
        }

        /* Styling untuk teks komentar */
        .list-group-item-text {
            color: #777;
            margin-top: 5px;
        }

        /* Styling untuk badge kehadiran */
        .badge {
            font-size: 14px;
            padding: 5px 10px;
            border-radius: 15px;
            background-color: #007BFF;
            color: white;
        }

        /* Custom scrollbar */
        .comment-list::-webkit-scrollbar {
            width: 8px;
        }

        .comment-list::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .comment-list::-webkit-scrollbar-thumb {
            background: #007BFF;
            border-radius:
        }

        .custom-form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            background-color: #fff;
            transition: border-color 0.3s, box-shadow 0.3s;
            outline: none;
        }

        /* Membuat kedua kotak memiliki tinggi yang sama */
        .equal-height-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* Menambahkan align-items untuk memusatkan secara horizontal */
            height: 100%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        /* Pengaturan ukuran gambar logo BCA */
        .bca-logo {
            max-width: 150px;
            /* Atur lebar maksimal gambar */
            height: auto;
            margin-bottom: 15px;
        }

        /* Tombol Salin */
        .copy-btn {
            margin-top: 10px;
            padding: 8px 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .copy-btn:hover {
            background-color: #0056b3;
        }

        /* Responsive styling untuk mobile */
        @media (max-width: 768px) {
            .row-bottom-padded-md {
                flex-direction: column;
            }

            .equal-height-box {
                margin-bottom: 20px;
            }

            .bca-logo {
                max-width: 120px;
                /* Ukuran lebih kecil di layar mobile */
            }
        }

        .custom-btn {
            font-size: 12px;
            /* Ukuran font yang lebih kecil */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            /* Pastikan tombol memiliki ketinggian penuh */
            text-align: center;
            /* Pastikan teks di tengah secara horizontal */
            padding: 10px;
            /* Tambahkan padding agar lebih nyaman */
        }
    </style>

</head>

<body class="locked" id="startPageBody">
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            {{-- page awal --}}
            <div class="fh5co-hero" id="startPage" data-section="home">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
                    style="background-image: url({{ asset('assets/images/cover_bg_1.jpg') }});">
                    {{-- <div class="display-t"> --}}
                    <div style="padding-top:100px; align-items:center">
                        <div class="display-tc">
                            <div class="container">
                                <div class="col-md-11 col-md-offset-1">
                                    <div class="animate-box">
                                        <h1>The Wedding of</h1>
                                        <h2>Tacha &amp; Veronica</h2>
                                        <p><span>24.11.2024</span></p>
                                    </div>
                                    @if ($guest && $qrCode)
                                        <div class="row animate-box">
                                            <div class="col-md-6 col-md-offset-3 text-center">
                                                <p>Kepada, Bpk / Ibu</p>
                                                <p><strong>{{ $guest->name }}</strong></p>
                                                <br>
                                                <div class="d-flex justify-content-center">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <a href="#" class="btn btn-primary btn-block custom-btn"
                                                            data-toggle="modal" data-target="#qrModal"
                                                            title="Scan untuk informasi lebih lanjut">
                                                            Lihat QR Code
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <!-- Tombol Open Invitation -->
                                                        <button class="btn btn-primary btn-block custom-btn"
                                                            id="openInvitation">Open
                                                            Invitation</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="row animate-box">
                                        <div class="d-flex justify-content-center">
                                            <div class="col-md-6 col-md-offset-3 text-center">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!-- Tombol Open Invitation -->
                                                    <button class="btn btn-primary btn-block custom-btn"
                                                        id="openInvitation">Open
                                                        Invitation</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($guest && $qrCode)
                    <!-- Modal untuk menampilkan QR Code -->
                    <div class="modal fade" id="qrModal" tabindex="-1" role="dialog" aria-labelledby="qrModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="modal-title" id="qrModalLabel">QR Code</p>
                                </div>
                                <div class="modal-body text-center">
                                    <div>
                                        <!-- QR code ditampilkan di sini -->
                                        {!! $qrCode !!}
                                    </div>
                                    <div>
                                        <p>Nomor Undangan</p>
                                        <p><b>{{ $guest->invitation_code }}</b></p>
                                    </div>
                                    <div>
                                        <p>Valid for : {{ $guest->qty }} person(s)</p>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- end:header-top -->

                {{-- Tacha & Veronica --}}
                <div id="fh5co-couple" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row row-bottom-padded-md animate-box">
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                                    <img src="{{ asset('assets/images/tacha.jpg') }}" class="img-responsive"
                                        alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                                    <h3>Tacha</h3>
                                    <p><strong>(A. Kathariza Syah)</strong></p>
                                    <p>Putra Kedua dari</p>
                                    <p>Alm. Bp. Joseph A. Irian Berliansyah</p>
                                    <p>&</p>
                                    <p>Ibu Katharina Berliansyah</p>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 nopadding">
                                    <h2 class="amp-center"><i class="icon-heart"></i></h2>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                                    <img src="{{ asset('assets/images/monic.jpg') }}" class="img-responsive"
                                        alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                                    <h3>Veronica</h3>
                                    <p><strong>(Veronica Sandra)</strong></p>
                                    <p>Putri Pertama dari</p>
                                    <p>Bp. Yesaya Wijaya</p>
                                    <p>&</p>
                                    <p>Ibu Linda Sandra</p>
                                </div>
                            </div>
                        </div>
                        <div class="row animate-box">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-12 text-center heading-section">
                                    <h2>Are Getting Married</h2>
                                    <p><strong>on 24th November 2024 &mdash; Surakarta</strong></p>
                                    <p>"And they twain shall be one flesh: so then they are no more twain, but one
                                        flesh.
                                        What therefore God hath joined together, let not man put asunder"</p>
                                    <p>Mark 10:8-9</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- countdown --}}
                <div id="fh5co-countdown">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center animate-box">
                            <p class="countdown">
                                <span id="days">0 <small>days</small></span>
                                <span id="hours">0 <small>hours</small></span>
                                <span id="minutes">0 <small>minutes</small></span>
                                <span id="seconds">0 <small>seconds</small></span>
                            </p>
                        </div>
                    </div>
                </div>

                {{-- gallery --}}
                <div id="fh5co-gallery">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                                <h2>Our Gallery</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="gallery animate-box">
                                    <a class="gallery-img image-popup image-popup"
                                        href="{{ asset('assets/images/gallery/gallery_1.jpg') }}"><img
                                            src="{{ asset('assets/images/gallery/gallery_1.jpg') }}"
                                            class="img-responsive"
                                            alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                                </div>
                                <div class="gallery animate-box">
                                    <a class="gallery-img image-popup"
                                        href="{{ asset('assets/images/gallery/gallery_2.jpg') }}"><img
                                            src="{{ asset('assets/images/gallery/gallery_2.jpg') }}"
                                            class="img-responsive"
                                            alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery animate-box">
                                    <a class="gallery-img image-popup"
                                        href="{{ asset('assets/images/gallery/gallery_3.jpg') }}"><img
                                            src="{{ asset('assets/images/gallery/gallery_3.jpg') }}"
                                            class="img-responsive"
                                            alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                                </div>
                                <div class="gallery animate-box">
                                    <a class="gallery-img image-popup"
                                        href="{{ asset('assets/images/gallery/gallery_4.jpg') }}"><img
                                            src="{{ asset('assets/images/gallery/gallery_4.jpg') }}"
                                            class="img-responsive"
                                            alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                                </div>
                                <div class="gallery animate-box">
                                    <a class="gallery-img image-popup"
                                        href="{{ asset('assets/images/gallery/gallery_7.jpg') }}"><img
                                            src="{{ asset('assets/images/gallery/gallery_7.jpg') }}"
                                            class="img-responsive"
                                            alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery animate-box">
                                    <a class="gallery-img image-popup"
                                        href="{{ asset('assets/images/gallery/gallery_6.jpg') }}"><img
                                            src="{{ asset('assets/images/gallery/gallery_6.jpg') }}"
                                            class="img-responsive"
                                            alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                                </div>
                                <div class="gallery animate-box">
                                    <a class="gallery-img image-popup"
                                        href="{{ asset('assets/images/gallery/gallery_5.jpg') }}"><img
                                            src="{{ asset('assets/images/gallery/gallery_5.jpg') }}"
                                            class="img-responsive"
                                            alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- When & Where --}}
                <div id="fh5co-when-where" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                                <h2>When &amp; Where</h2>
                            </div>
                        </div>
                        <div class="row row-bottom-padded-md">
                            <div class="col-md-6 text-center animate-box">
                                <div class="wedding-events">
                                    <div class="desc">
                                        <h3>Holy Matrimony</h3>
                                        <p><strong>Sunday, 24th November 2024</strong>

                                        </p>
                                        <p><strong>11.00 - 12.00 WIB</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-center animate-box">
                                <div class="wedding-events">
                                    <div class="desc">
                                        <h3>Wedding Reception</h3>
                                        <p><strong>Sunday, 24th November 2024</strong>
                                        </p>
                                        <p><strong>18.00 - 20.00 WIB</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-center">
                                    <strong>Golden Restaurant</strong>
                                </p>
                                <p class="text-center">
                                    Jl. Jend. Urip Sumoharjo No.118, Purwodiningratan, Kec. Jebres, Kota Surakarta, Jawa
                                    Tengah 57128
                                </p>
                                <div class="map-container">

                                    <iframe class="fh5co-map"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.119391412088!2d110.8336344743902!3d-7.5619596924519845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16f3f4228bc7%3A0xcbbe17f6564f932d!2sRestoran%20Golden!5e0!3m2!1sen!2sid!4v1727783767513!5m2!1sen!2sid"
                                        allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- End When & Where --}}
                {{-- RSVP & Comments --}}

                <div id="fh5co-started" style="background-image:url({{ asset('assets/images/cover_bg_2.jpg') }});"
                    data-stellar-background-ratio="1">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row animate-box">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section">
                                <h2>RSVP</h2>
                                <div id="read" class="mt-3"></div>
                            </div>
                        </div>
                        {{-- Form RSVP --}}
                        <!-- Notifikasi berhasil submit -->
                        <div id="success-alert" class="alert alert-success" style="display: none;">
                            RSVP Anda berhasil disimpan!
                        </div>
                        <div class="row animate-box">
                            <div class="col-md-10 col-md-offset-1">
                                <form class="form-inline" action="{{ route('comment.store') }}" method="POST"
                                    id="rsvpForm">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nama Tamu</label>
                                        <input type="text" class="custom-form-control" id="name"
                                            name="name"
                                            value="@if ($guest && $qrCode) {{ $guest->name }} @endif"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nomor Telephone</label>
                                        <input type="tel" pattern="[0-9]{10,15}" inputmode="numeric"
                                            class="custom-form-control" id="phone" name="nomor_telephone"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kehadiran">Kehadiran</label>
                                        <select class="custom-form-control" id="kehadiran" name="kehadiran" required>
                                            <option value="hadir">Hadir</option>
                                            <option value="tidak_hadir">Tidak Hadir</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="comments">Komentar atau Ucapan</label>
                                        <textarea class="custom-form-control" id="comments" name="comments" placeholder="Say Something..." rows="2"></textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12" style="margin-top: 15px;">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                    <input type="hidden" name="invitation_code"
                                        value="@if ($guest && $qrCode) {{ $guest->invitation_code }}@else '' @endif">
                                </form>
                                <!-- Bagian untuk menampilkan komentar dengan scroll -->
                                <div class="row animate-box" style="margin-top: 100px;" id="commentSection">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="list-group comment-list"
                                            style="max-height: 300px; overflow-y: auto; border: 1px solid #ddd; padding: 10px; border-radius: 8px; background-color: #f9f9f9;">

                                            @foreach ($comments as $comment)
                                                <div class="list-group-item"
                                                    style="margin-bottom: 10px; padding: 15px; background-color: #fff;">
                                                    <p><strong>{{ $comment->name }}</strong></p>
                                                    <p>{{ $comment->comments }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Load jQuery dan Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                <!-- Script AJAX untuk RSVP -->
                <script>
                    $(document).ready(function() {
                        $('#rsvpForm').on('submit', function(e) {
                            e.preventDefault(); // Mencegah reload halaman

                            // Ambil data form
                            var formData = $(this).serialize();

                            // Submit form dengan AJAX
                            $.ajax({
                                url: $(this).attr('action'),
                                type: $(this).attr('method'),
                                data: formData,
                                success: function(response) {
                                    // Tampilkan komentar baru di bawah tanpa reload
                                    $('#commentSection .comment-list').prepend(`
                    <div class="list-group-item" style="margin-bottom: 10px; padding: 15px; background-color: #fff;">
                        <p><strong>${response.name}</strong></p>
                        <p>${response.comments}</p>
                    </div>
                `);
                                    // Tampilkan notifikasi berhasil submit
                                    $('#success-alert').fadeIn(); // Tampilkan notifikasi
                                    setTimeout(function() {
                                        $('#success-alert')
                                            .fadeOut(); // Sembunyikan notifikasi setelah 3 detik
                                    }, 3000);

                                    // Reset form setelah submit
                                    $('#rsvpForm')[0].reset();
                                },
                                error: function(xhr) {
                                    alert('Ada masalah saat menyimpan data.');
                                }
                            });
                        });
                    });
                </script>
                {{-- Gift Corner --}}
                <div id="fh5co-when-where" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                                <h2>Gift Corner</h2>
                                <p>Tanpa mengurangi rasa hormat kami bagi tamu yang ingin mengirimkan hadiah kepada
                                    kedua
                                    mempelai dapat mengirimkannya melalui :</p>
                            </div>
                        </div>
                        <div class="row row-bottom-padded-md">
                            <!-- Kotak Kiri (Rekening) -->
                            <div class="col-md-4 text-center animate-box">
                                <div class="wedding-events equal-height-box">
                                    <div class="desc">
                                        <img src="{{ asset('assets/images/bca_logo.png') }}"
                                            class="img-responsive bca-logo">
                                        <p><strong id="noRekening1">7735180304</strong></p>
                                        <button class="copy-btn" onclick="copyToClipboard('#noRekening1')">Salin
                                            Nomor
                                            Rekening</button>
                                        <p>Achmad Kathariza Syah</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="wedding-events equal-height-box">
                                    <div class="desc">
                                        <img src="{{ asset('assets/images/bca_logo.png') }}"
                                            class="img-responsive bca-logo">
                                        <p><strong id="noRekening2">1084714456</strong></p>
                                        <button class="copy-btn" onclick="copyToClipboard('#noRekening2')">Salin
                                            Nomor
                                            Rekening</button>
                                        <p>Veronica Sandra</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Kotak Kanan (Alamat) -->
                            <div class="col-md-4 text-center animate-box">
                                <div class="wedding-events equal-height-box">
                                    <div class="desc">
                                        <p><strong>Alamat</strong></p>
                                        <p>Jl. Gedangan IV B, Blok U-11, Gedangan, Kec. Grogol, Kabupaten Sukoharjo,
                                            Jawa
                                            Tengah 57552</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- Footer --}}
                <footer>
                    <div id="footer">
                        <div class="container">
                            <div class="row row-bottom-padded-md animate-box">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila
                                        Bapak/Ibu/Saudara/i
                                        berkenan hadir untuk memberikan doa restu kepada putra-putri kami.</p>
                                    <p>Kami yang Berbahagia</p>
                                    <br>
                                    <div class="col-md-6 col-sm-6 col-xs-6 nopadding">
                                        <p>Keluarga</p>
                                        <strong>
                                            <p> Alm. Bp. Joseph A. Irian Berliansyah </p>
                                            <p>&</p>
                                            <p>Ibu Katharina Berliansyah</p>
                                        </strong>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 nopadding">
                                        <p>Keluarga</p>
                                        <strong>
                                            <p>Bp. Yesaya Wijaya</p>
                                            <p>&</p>
                                            <p>Ibu Linda Sandra</p>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p class="text-center">Designed by
                                <a href="https://github.com/kthrzsyh" target="_blank">Yeremia Tacha</a>
                            </p>
                        </div>
                    </div>
                </footer>
            </div>

            <!-- Audio player element -->
            <audio id="backgroundMusic">
                <source src="{{ asset('storage/music/goodness_of_god.mp3') }}" type="audio/mp3">
            </audio>

            <!-- Play/Pause Button -->
            <button id="playPauseButton" class="btn btn-primary" onclick="togglePlayPause()">
                <i class="fas fa-play"
                    style="
                justify-content: center;
                align-items: center;"></i>
            </button>
            <!-- END fh5co-page -->

        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
        <!-- jQuery -->
        <script src="{{ asset('assets/dist/scripts.min.js') }}"></script>

        {{-- Countdown acara --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Set the date we're counting down to
                var countDownDate = new Date("Nov 24, 2024 18:00:00").getTime();

                // Update the countdown every 1 second
                var x = setInterval(function() {

                    // Get today's date and time
                    var now = new Date().getTime();

                    // Find the distance between now and the countdown date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes, and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Display the result in elements with respective IDs
                    document.getElementById("days").innerHTML = days + " <small>days</small>";
                    document.getElementById("hours").innerHTML = hours + " <small>hours</small>";
                    document.getElementById("minutes").innerHTML = minutes + " <small>minutes</small>";
                    document.getElementById("seconds").innerHTML = seconds + " <small>seconds</small>";

                    // If the countdown is finished, display some text or stop the interval
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("countdown").innerHTML = "The event has started!";
                    }
                }, 1000);
            });
        </script>
        <!-- Script untuk mengatur tombol dan scroll otomatis -->
        <script>
            // Fungsi untuk mengunci halaman pada awal
            function lockPage() {
                document.body.classList.add('locked');
                window.scrollTo(0, 0); // Memastikan halaman tetap di atas
            }

            // Fungsi untuk membuka halaman
            function unlockPage() {
                document.body.classList.remove('locked');
            }

            // Cek apakah user sudah pernah klik 'Open Invitation'
            if (localStorage.getItem('invitationOpened') === 'true') {
                unlockPage(); // Jika sudah klik, buka halaman
            } else {
                lockPage(); // Jika belum klik, kunci halaman
            }

            // Event listener untuk tombol 'Open Invitation'
            document.getElementById('openInvitation').addEventListener('click', function() {
                // Hapus kunci dan simpan status ke localStorage
                unlockPage();
                localStorage.setItem('invitationOpened', 'true');

                // Scroll ke elemen dengan id="fh5co-couple"
                document.getElementById('fh5co-couple').scrollIntoView({
                    behavior: 'smooth'
                });

                // Memulai pemutaran audio
                var audio = document.getElementById('backgroundMusic');
                audio.play();

                // Tampilkan pesan di console
                console.log('Audio diputar setelah tombol Open Invitation diklik.');
            });
        </script>
        {{-- button background music --}}
        <script>
            var music = document.getElementById('backgroundMusic');
            var playPauseButton = document.getElementById('playPauseButton');
            var playPauseIcon = document.getElementById('playPauseIcon');

            // Toggle play/pause
            function togglePlayPause() {
                if (music.paused) {
                    music.muted = false; // Unmute and play the music
                    music.play();
                    playPauseIcon.classList.remove('fa-play');
                    playPauseIcon.classList.add('fa-pause');
                } else {
                    music.pause();
                    playPauseIcon.classList.remove('fa-pause');
                    playPauseIcon.classList.add('fa-play');
                }
            }
            // // Autoplay handler
            // document.addEventListener('DOMContentLoaded', function() {
            //     var playPromise = music.play();
            //     if (playPromise !== undefined) {
            //         playPromise.catch(function(error) {
            //             console.log('Autoplay blocked: ', error);
            //             // Ensure the button shows the play icon if autoplay is blocked
            //             playPauseIcon.classList.remove('fa-pause');
            //             playPauseIcon.classList.add('fa-play');
            //         });
            //     }
            // });
        </script>
        {{-- Copy to Clip Board --}}
        <script>
            function copyToClipboard(element) {
                var temp = document.createElement("textarea");
                temp.value = document.querySelector(element).innerText;
                document.body.appendChild(temp);
                temp.select();
                document.execCommand("copy");
                document.body.removeChild(temp);
                alert("Nomor rekening berhasil disalin!");
            }
        </script>


</body>

</html>
