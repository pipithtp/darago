<?php

session_start();

include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query(
    $conn,
    "SELECT * FROM users
    WHERE email='$email'"
);

$data = mysqli_fetch_assoc($query);

if($data){

    if(password_verify(
        $password,
        $data['password']
    )){

        $_SESSION['nama'] = $data['nama'];
        $_SESSION['email'] = $data['email'];

        header("Location: dashboard.php");

    }else{

        echo "
        <script>
            alert('Password salah!');
            window.location='index.php';
        </script>
        ";

    }

}else{

    echo "
    <script>
        alert('Email tidak ditemukan!');
        window.location='index.php';
    </script>
    ";

}

?>