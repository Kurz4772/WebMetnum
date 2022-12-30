<?php
session_start();

include "koneksi.php";

//dapatkan data user dari form register
if (isset($_POST['btnregis'])) {
    $user = [
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'alamat' => $_POST['alamat'],
        'no_telp' => $_POST['no_telp'],
        'umur' => $_POST['umur'],
        'pekerjaan' => $_POST['pekerjaan'],
    ];

    //check apakah user dengan username tersebut ada di table users
    $query = "select * from users where username = ? limit 1";
    $stmt = mysqli_stmt_init($conn);
    $stmt->prepare($query);
    $stmt->bind_param('s', $user['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array(MYSQLI_ASSOC);

    //jika username sudah ada, maka return kembali ke halaman register.
    if ($row != null) {
        $_SESSION['error'] = 'Username: ' . $user['username'] . ' yang anda masukkan sudah ada di database.';
        $_SESSION['alamat'] = $_POST['alamat'];
        $_SESSION['no_telp'] = $_POST['no_telp'];
        $_SESSION['umur'] = $_POST['umur'];
        $_SESSION['pekerjaan'] = $_POST['pekerjaan'];

        header("Location: register.php");
        return;
    } else {

        $query = "insert into users (username, password, alamat, no_telp, umur, pekerjaan ) values  (?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        $stmt->prepare($query);
        $stmt->bind_param('sssdds', $user['username'], $user['password'], $user['alamat'], $user['no_telp'], $user['umur'], $user['pekerjaan']);
        $stmt->execute();
        $result = $stmt->get_result();
        var_dump($result);

        $_SESSION['message']  = 'Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat.';
        header("Location: register.php");
    }
}
