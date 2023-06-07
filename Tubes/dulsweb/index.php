<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

?>

<?php require('view/viiew.index.php') ?>
<?php require('view/nav.php') ?>

        <div class="content">
            <h1>Web Stream Anime Lovers</h1>
            <p>Lorem ipsum dolor sit amet, consectetur a
                dipisicing elit. 
                Molestias, perferendis.</p>
                <div>
                    <button><span></span>More</button>
                    <button><span></span>Bergabung</button>
                </div>
            </div>
    </div>
    <div id="copyright">
        <div class="wrapper">
            &copy; 2020. <b>Preva Site</b> All Rights Reserved.
        </div>
    </div>
    
</body>
</html>