<?php
include_once 'koneksi.php';
require 'query_peminjaman.php';

?>
<table>
    <thead>
        <tr>
            <th>Nama_buku</th>
            <th>Pengarang</th>
            <th>Jenis_buku</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row) : ?>
        <tr>
            <td><?php echo $row['judul']; ?></td>
            <td><?php echo $row['pengarang']; ?></td>
            <td><?php echo $row['nama_kategori']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $conn->close(); ?>
