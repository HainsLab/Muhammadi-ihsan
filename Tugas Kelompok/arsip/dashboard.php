<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website with Login & Registration Form</title>
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <style>
        .alert {
            color: red;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <a href="#" class="nav_logo">Sistem Informasi Penjualan</a>
            <button class="button" id="form-open">Login</button>
        </nav>
    </header>

    <!-- Home -->
    <section class="home">
        <div class="form_container">
            <i class="uil uil-times form_close"></i>
            <!-- Login From -->
            <div class="form login_form">
                <?php
                include 'config.php';
                error_reporting(0);
                session_start();
                
                if (isset($_SESSION['username'])) {
                    header("Location: berhasil_login.php");
                    exit();
                }
                
                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);
                    
                    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
                    $result = mysqli_query($conn, $sql);
                    
                    if ($result->num_rows > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION['username'] = $row['username'];
                        header("Location: berhasil-login.php");
                        exit();
                    } else {
                        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
                    }
                }
                ?>
                <form action="#" method="POST">
                    <h2>Login</h2>
                    <div class="input_box">
                        <input type="email" placeholder="Enter your email" name="email" required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" placeholder="Enter your password" name="password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <div class="option_field">
                        <span class="checkbox">
                            <input type="checkbox" id="check" />
                            <label for="check">Remember me</label>
                        </span>
                    </div>
                    <button class="button" name="submit">Login Now</button>
                </form>
            </div>
        </div>
    </section>

    <script src="login.js"></script>
</body>
</html>
