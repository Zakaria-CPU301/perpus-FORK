<?php
include 'koneksi.php';

$id = $_GET['id'];
require 'query_peminjaman.php';
foreach ($result as $row) {
    if ($row['id'] == $id) {
        $data = $row;
        break;
    }
}
?>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(to right, #f0f2f0, #000c40);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .p {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        width: 350px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        animation: fadeIn 1s ease-in-out;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    input[type="text"] {
        padding: 12px 15px;
        border: 2px solid #ccc;
        border-radius: 10px;
        transition: 0.3s;
        font-size: 16px;
    }

    input[type="text"]:focus {
        border-color: #000c40;
        outline: none;
        box-shadow: 0 0 10px #000c40aa;
    }

    button {
        background: linear-gradient(to right, #000c40, #334d50);
        color: white;
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: linear-gradient(to right, #334d50, #000c40);
        box-shadow: 0 4px 15px rgba(0, 12, 64, 0.4);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }
</style>

<div class="p">
    <h2>Edit Data Buku</h2>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="text" name="nama_buku" value="<?= $data['judul'] ?>"><br>
        <input type="text" name="pengarang" value="<?= $data['pengarang'] ?>"><br>
        <input type="text" name="jenis_buku" value="<?= $data['nama_kategori'] ?>"><br>
        <button type="submit">Update</button>
    </form>
</div>