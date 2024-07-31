<?php

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit = mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc($edit);
}
if (isset($_POST['simpan'])) {
    // jika param edit ada maka update, selain itu maka Tambah
    $id = isset($_GET['edit']) ? $_GET['edit'] : '';
    
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    if (!$id) {
        $insert = mysqli_query($koneksi, "INSERT INTO user (nama_lengkap, email, password) VALUES('$nama_lengkap', '$email','$Password')");
    } else {
        $update = mysqli_query($koneksi. "UPDATE user set
        nama_lengkap='$nama_lengkap'
        email = '$email',
        password = '$password'
        WHERE id = '$id'
        ");
    }
    header("location:")
  
    
}