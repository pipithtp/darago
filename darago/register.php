<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (nama, email, password)
VALUES ('$nama', '$email', '$passwordHash')";

$query = mysqli_query($conn, $sql);

if($query){

    echo "
    <script>
        alert('Register berhasil');
        window.location='index.html';
    </script>
    ";

}else{

    echo mysqli_error($conn);

}

?>