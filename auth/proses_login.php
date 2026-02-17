<?php
session_start();
include '../koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $u = $_POST['username'];
        $p = $_POST['password'];

        $userQry = $conn->query("SELECT * FROM user WHERE username = '$u' AND password = '$p'");
        $res = $userQry->fetch_all(MYSQLI_ASSOC);

        if(count($res) > 0) {
            $_SESSION['monyet'] = $res[0];
            header('Location: ../');
        } else {
            echo "Login Gagal";
        }
    }
}
