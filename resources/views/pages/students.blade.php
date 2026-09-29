<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>

    <h1>Data Mahasiswa</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->nama }}</td>
            <td>{{ $student->kelas }}</td>
            <td>{{ $student->jurusan }}</td>
            <td>
    <a href="/students/{{ $student->id }}/edit">Edit</a>

    <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">
            Hapus
        </button>
    </form>
</td>
        </tr>
        @endforeach

    </table>

    <br>

    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/contact">Contact</a>

</body>
</html>