<?php
include_once 'koneksi.php';
$sql = "SELECT * FROM tb_buku";
$result = $conn->query($sql);
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
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['Nama_buku']; ?></td>
            <td><?php echo $row['pengarang']; ?></td>
            <td><?php echo $row['Jenis_buku']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php $conn->close(); ?>
