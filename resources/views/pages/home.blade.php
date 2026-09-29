<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home - Tugas Matkul Web 9</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    @foreach ($mahasiswa as $student)
    <p><strong>Nama:</strong> {{ $student->nama }}</p>
    <p><strong>Kelas:</strong> {{ $student->kelas }}</p>
    <p><strong>Jurusan:</strong> {{ $student->jurusan }}</p>
@endforeach

    <hr>

    <a href="/about">About</a> |
    <a href="/contact">Contact</a>
</body>
</html>