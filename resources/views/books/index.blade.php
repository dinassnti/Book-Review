<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>

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
            color: black;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
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
    </style>
</head>
<body>
    <h1>Daftar Buku</h1>

    <table>
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Nama Penulis</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td><a href="{{ route('books.show', $book->isbn) }}">{{ $book->judul }}</a></td>
                    <td>
                        @foreach($book->penulis as $penulis) 
                            <a href="{{ route('penulis.books', $penulis->id) }}">{{ $penulis->nama }}</a>@if(!$loop->last), @endif
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
