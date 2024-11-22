<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>

    <style>
        body {
            font-family: sans-serif;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2rem;
        }

        h2 {
            font-size: 1.5rem;
        }

        p {
            font-size: 1rem;
        }

        a {
            color: black;
            text-decoration: none;
            margin-top: 20px;
        }

        a:hover {
            color: blue;
            text-decoration: underline;
        }

        .details-container {
            padding: 20px;
            border: 1px solid #ddd;
            width: 80%;
            max-width: 800px;
            margin: 20px 0;
        }

        .reviews {
            margin-top: 20px;
            list-style-type: none;
            padding: 0;
        }

        .reviews li {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .reviews li strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Detail Buku</h1>

    <div class="details-container">
        <h2>{{ $book->judul }}</h2>
        <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
        <p><strong>Penulis:</strong>
            @foreach($book->penulis as $penulis)
                {{ $penulis->nama }}@if(!$loop->last), @endif
            @endforeach
        </p>

        h3>Reviews</h3>
        <ul class="reviews">
            @foreach($book->review as $review)
                <li>{{ $review->komentar }} - <strong>{{ $review->rating }} stars</strong></li>
            @endforeach
        </ul>
    </div><
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
</body>
</html>
