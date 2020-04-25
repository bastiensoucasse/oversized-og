<?php
require_once "utilities.php";

$page = array(
    "id" => "home",
    "name" => "Accueil",
    "description" => "Un label musical moderne propulsé par Profuder."
);
?>

<!doctype html>
<html lang="fr-fr">
    <?php require "include/head.php"; ?>

    <body>
        <?php require "include/header.php"; ?>

        <main id="main">
            <div id="home">
                <div id="home-background">
                    <video data-autoplay autoplay webkit-playsinline playsinline loop muted data-object-fit="cover">
                        <source src="https://amuseio.wpengine.com/wp-content/uploads/2019/10/Web-Final-Reel.mp4" />
                    </video>
                </div>
                <div id="home-content">
                    <h1 class="headline">Production et distribution de musique moderne.</div>
                </div>
            </div>
        </main>

        <?php require "include/footer.php"; ?>
    </body>
</html>
