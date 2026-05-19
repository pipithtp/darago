<?php

session_start();

if(!isset($_SESSION['email'])){
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>
    Selamat datang,
    <?php echo $_SESSION['nama']; ?>
</h1>

<a href="logout.php">
    Logout
</a>

</body>
</html>