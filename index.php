<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan Sekolah</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    padding: 20px;
    color: #333;
}

.container {
    max-width: 900px;
    margin: 0 auto;
    background: #fff;
    padding: 30px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 8px;
}

h1, h3 {
    color: #2c3e50;
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 20px;
}

input[type="text"],
input[type="number"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: fit-content;
    padding: 10px 20px;
    background-color: #2ecc71;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #27ae60;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

table th {
    background-color: #3498db;
    color: white;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

a {
    color: #2980b9;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <a href="auth/logout.php" style="width: fit-content; padding: 10px 20px; background-color: #2ecc71; color: white; border: none; border-radius: 4px; cursor: pointer;">logout</a>
    <div class="container">
        <h1>Daftar Buku</h1>

        <div class="form-section">
            <h3>Tambah Buku Baru</h3>
            <form action="proses_tambah_buku.php" method="post">
                <input type="text" name="nama_buku" placeholder="Nama Buku" required>
                <input type="text" name="pengarang" placeholder="Pengarang" required>
                <input type="text" name="jenis_buku" placeholder="Jenis Buku">
                <button type="submit">Tambah</button>
            </form>
        </div>

        <hr>

        <h3>List Buku</h3>
        <table>
            <thead>
                <tr class="">
                    <th>id</th> 
                    <th>No</th>
                    <th>Nama Buku</th>
                    <th>Pengarang</th>
                    <th>Jenis Buku</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            require 'query_peminjaman.php';
            foreach ($result as $row) :
            ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($row['judul']) ?></td>
                    <td><?= htmlspecialchars($row['pengarang']) ?></td>
                    <td><?= htmlspecialchars($row['nama_kategori']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                        <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
