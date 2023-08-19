<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" type="text/css" href="header.css">
    <title>Berhasil Login</title>
</head>
<body>
<header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo">Sistem Informasi Penjualan</a>
        <form action="" method="POST">
                <div class="username">
                <?php echo "<h4>Selamat Datang, " . $_SESSION['username'] ."!". "</h4>"; ?>
                </div>
        <button class="button" id="form-open">Logout</button>
      </nav>
    </header>

</body>
</html>