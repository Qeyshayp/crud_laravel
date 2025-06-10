@extends('bioskop.navbar')

@section('content')
    <h1>Selamat Datang di Qeys Cinema</h1>
    <p>Temukan film-film pilihan dan suasana nonton yang hangat serta nyaman seperti di rumah sendiri.</p>

    <article>
        <a href="/listfilm"><h3>Daftar Film Terkini</h3></a>
        <p>Lihat film-film yang sedang tayang minggu ini</p>
    </article>

    <article>
        <a href="/listcinema"><h3>Lokasi Bioskop Kami</h3></a>
        <p>Temukan bioskop Qeys Cinema yang tersebar di berbagai kota</p>
    </article>

@endsection
