<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
</head>
<body>

    <h1>Tambah Data Mahasiswa</h1>

    <form action="/students" method="POST">
        @csrf

        <p>
            <label>Nama:</label><br>
            <input type="text" name="nama">
        </p>

        <p>
            <label>Kelas:</label><br>
            <input type="text" name="kelas">
        </p>

        <p>
            <label>Jurusan:</label><br>
            <input type="text" name="jurusan">
        </p>

        <button type="submit">Simpan</button>
    </form>

    <br>

    <a href="/students">Kembali ke Data Mahasiswa</a>

</body>
</html>