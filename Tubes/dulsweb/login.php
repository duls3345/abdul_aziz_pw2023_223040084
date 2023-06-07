<?php
session_start();

if(isset($_SESSION["login"])){
    header("location:index.php");
    exit;
}

require "koneksi.php";

$error = "";

if(isset($_POST['login'])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE nama = '$username'");
    if(mysqli_num_rows($result) === 1 ){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){

            //set session  
            
            $_SESSION["login"] = true;



            header("Location: index.php");
            exit;
        } else {
            $error = "Username atau password salah.";
        }
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<?php require('view/view.login.php'); ?>
    <div class="main">
        <form action="" method="post">
            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-form">
                            <h2 class="form-title">LOGIN</h2>
                            <?php if(!empty($error)) { ?>
                                <p class="error-message"><?php echo $error; ?></p>
                            <?php } ?>
                            <div class="form-group">
                                <input type="text" name="username" id="nama" placeholder="Nama" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" />
                            </div>
                            <div style="margin-top:10px" class="form-group form-button">
                                <div class="col-sm-12 controls"></div>
                                <input type="submit" name="login" class="form-submit" value="Login" />
                                <a href="register.php" class="form-submit">Regis Untuk Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</body>

</html>
