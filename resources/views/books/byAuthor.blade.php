<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku oleh {{ $penulis->nama }}</title>

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

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px 0;
            background-color: transparent;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            color: blue;
            text-decoration: underline;
        }

        .back-link {
            margin-top: 20px;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <h1>Buku oleh {{ $penulis->nama }}</h1>

    <table>
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Judul</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->isbn }}</td>
                    <td><a href="{{ route('books.show', $book->isbn) }}">{{ $book->judul }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="back-link" href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
</body>
</html>
