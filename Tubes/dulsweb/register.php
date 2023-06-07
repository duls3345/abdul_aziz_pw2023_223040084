<?php 
require 'koneksi.php';

if (isset($_POST["submit"])) {

    header("Location:login.php");
    if( registrasi($_POST) >0){
    }else{"<script>
        alert('Regis Gagal!');
        </script>";
    }
}


?>

<?php require('view/view.regis.php'); ?>
    <div class="main">
    <form action="" method="post">

        
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <input type="text" name="nama" id="nama" placeholder=" Nama" required  />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password"  placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password2"  placeholder="Password Ulang" required />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit"  class="form-submit" value="Register" />
                                <a href="login.php" class="form-submit">Sudah Punya Akun?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </form>


    </div>

</body>

</html>