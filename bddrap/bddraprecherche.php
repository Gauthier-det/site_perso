<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de données du rap - Goatsith</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://kit.fontawesome.com/b0c1e9dba0.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <h1>Gauth-Yeah ! (BDD Rap)</h1>
        <nav>
            <a href="../projets_perso.html">Projets perso</a>
            <a href="../index.html" id="accueil">Accueil</a>
            <a href="../projets_but.html">Projets de cours</a>
        </nav>
    </header>
<main>
    <section class="portfolio">
        <div class="container">
            <h2>Base de données du rap</h2>
            <?php
                include_once "../fct_php/param_connexion.php";
                include_once "../fct_php/jsp.php";
                if (isset($_POST['searchAlbum'])) {
                    $search = $_POST['searchAlbum'];
            
                    $sql = "select * from rap_projet_musical 
                            join rap_posseder using(pro_id) 
                            join rap_artiste using(art_id) 
                            where pro_titre like '%".$search."%'";

                    $donnees = [];
                    $donnees = lireDonnees($conn, $sql);

                    $lstAlb = [];
                    

                    if ($donnees != null) {
                        foreach($donnees as $l){
                            if(!in_array($l['PRO_TITRE'],$lstAlb)){
                                array_push($lstAlb, $l['PRO_TITRE']);
                            }
                        }
        
                        echo "<h2>Résultats de la recherche pour '" . $search . "':</h2>";
                        echo "<ul>";
                        foreach ($lstAlb as $ligne) {
                            echo "<li>Album : " . $ligne . " -  Artiste(s) : <ul>";
                            foreach($donnees as $l){
                                if($l['PRO_TITRE'] == $ligne){
                                    echo "<li>";
                                    echo $l['ART_DENOMINATION'];
                                    echo "</li>";
                                }
                            }
                            echo "</ul>";
                            echo "</br>";
                        }
                        echo "</ul>";
                    } else {
                        echo "Aucun résultat trouvé pour '" . $search . "'.";
                    }
                }

                if (isset($_POST['searchArtist'])) {
                    $search = $_POST['searchArtist'];
            
                    $sql = "select * from rap_projet_musical 
                            join rap_posseder using(pro_id) 
                            join rap_artiste using(art_id) 
                            where art_denomination like '%".$search."%'";

                    $donnees = [];
                    $donnees = lireDonnees($conn, $sql);

                    $lstArt = [];
                    
                    if ($donnees != null) {
                        foreach($donnees as $l){
                            if(!in_array($l['ART_DENOMINATION'],$lstArt)){
                                array_push($lstArt, $l['ART_DENOMINATION']);
                            }
                        }

                    
                        echo "<h2>Résultats de la recherche pour '" . $search . "':</h2>";
                        echo "<ul>";
                        foreach ($lstArt as $ligne) {
                            echo "<li>Artiste : " . $ligne . " -  album(s) : <ul>" ;
                            foreach($donnees as $l){
                                if($l['ART_DENOMINATION'] == $ligne){
                                    echo "<li>";
                                    echo $l['PRO_TITRE'];
                                    echo "</li>";
                                }
                            }
                            echo "</ul>";
                            echo"</li>";
                            echo "</br>";
                        }
                        echo "</ul>";
                    } else {
                        echo "Aucun résultat trouvé pour '" . $search . "'.";
                    }
                }


            ?>

            <h2 class="button"> <a href="bddrapinfo.php">Page de recherche</a>
        </div>
    </section>
            </main>
    <footer>
        <div class="footer-bar">
            <a href="https://github.com/Gauthier-det"><i class="fa-brands fa-github fa-xl"></i></a>
            <a href="https://www.instagram.com/gauthyeh"><i class="fa-brands fa-instagram fa-xl" style="color: #B197FC;"></i></a>
            <a href="https://www.linkedin.com/in/gauthier-detroussel/"><i class="fa-brands fa-linkedin fa-xl"></i></a>
        </div>
    </footer>
</body>
</html>

