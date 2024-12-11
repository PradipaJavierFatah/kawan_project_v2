@extends('layout')

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.5.1/dist/flowbite.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('asset/faviconlogo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;400;700&family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="text-white">
<div class="w-screen">
    <div style="background-image: url('{{ asset('asset/home/bg-1.png') }}'); background-size: cover; background-position: center;">
    <div id="header">
        <nav class="sticky top-0 z-50 bg-white">
            @section('content')
        </nav>
    </div>
    <form method="GET" action="{{ route('articles.index') }}" class="mb-3">
    <div class="container">
        <div class="search-container">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari artikel berdasarkan judul">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>
        <h2>Artikel</h2>
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="article-card">
                    <div class="card d-flex">
                        <div class="card">
                            <img src="{{ asset('storage/' . $article->photo) }}" class="card-img-top" alt="">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $article->category }}</h6>
                                <p class="card-text">{{ $article->content }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $articles->links() }} <!-- Menampilkan link paginasi -->
        </div>
    </div>
    @endsection
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@1.5.1/dist/flowbite.min.js"></script>
</html>