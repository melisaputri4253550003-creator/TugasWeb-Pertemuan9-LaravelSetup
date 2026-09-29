<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
</head>
<body>

    <h1>Edit Data Mahasiswa</h1>

    <form action="/students/{{ $student->id }}" method="POST">

        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $student->nama }}" required>
        <br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" value="{{ $student->kelas }}" required>
        <br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="{{ $student->jurusan }}" required>
        <br><br>

        <button type="submit">Update</button>
    </form>

    <br>

    <a href="/students">Kembali ke Data Mahasiswa</a>

</body>
</html>