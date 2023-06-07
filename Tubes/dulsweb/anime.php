<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

?>

<?php require('view/viiew.index.php'); ?>
<?php require('view/nav.php'); ?>

<section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Tutors</p>
                    <h2>Tutors</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, optio!</p>
                </div>
                <div class="tutor-list">
                    <ul>
                         <li>
                            <div class="kartu-tutor">
                                <a href=""></a>
                                <img width="200" height="200" src="img/sao.jpg" alt="Rimuru">                           
                            </div>
                        </li>
                        <li>
                            <div class="kartu-tutor">
                                <img width="200" height="200" src="img/rimuru.webp" alt="Rimuru">                           
                            </div>
                        </li>
                        <li>                                
                            <div class="kartu-tutor">
                                <img width="200" height="200" src="img/rimuru.webp" alt="Rimuru">                           
                             </div>
                        </li>
                        <li>
                            <div class="kartu-tutor">
                                <img width="200" height="200" src="img/rimuru.webp" alt="Rimuru">                           
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </section>
    
</body>
</html>