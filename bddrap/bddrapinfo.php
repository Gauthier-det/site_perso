<?php
    include_once "../fct_php/connexion.php";
            
            function getAlbum($conn){
                $search = $_POST['searchAlbum'];
                $search = preg_replace('/[^A-Za-z0-9]/', '', str_replace(' ', '', $search));
                $sql = "select * from rap_projet_musical
                            join rap_artiste using(art_id) 
                            where REPLACE(REPLACE(REPLACE(pro_titre, ' ', ''),'.', ''), '-', '') like '%".$search."%'";

                $donnees = [];
                lireDonneesPDO2($conn, $sql,$donnees);
            
                return $donnees;
            }

            function afficheAlbum($donnees){
                $search = $_POST['searchAlbum'];
                if($donnees != null){   
                    $lstAlb = [];
                    $i = 0;
                    echo "<h2>Résultats de la recherche pour '" . $search . "':</h2>";
                    echo "<ul>";
                    foreach($donnees as $l){
                        if(!in_array($l['PRO_TITRE'],$lstAlb)){
                            echo "<li>Album : " . $l['PRO_TITRE'] . " -  artiste(s) : ". $l['ART_DENOMINATION'] . "";
                            echo"</li>";
                            echo "</br>";
                            array_push($lstAlb, $l['PRO_TITRE']);
                        }
                    }    
                    echo "</ul>";
                } else {
                    echo "Aucun résultat trouvé pour '" . $search . "'.";
                }
            }
            
            function getArtiste($conn){
                $search = $_POST['searchArtist'];
                $search = preg_replace('/[^A-Za-z0-9]/', '', str_replace(' ', '', $search));
                $sql = "select * from rap_projet_musical
                        join rap_artiste using(art_id) 
                        where REPLACE(REPLACE(REPLACE(art_denomination, ' ', ''),'.', ''), '-', '') like '%".$search."%'";
                

                $donnees = [];
                lireDonneesPDO2($conn, $sql, $donnees);
                return $donnees;
            }

            function afficheArtiste($donnees){
                $search = $_POST['searchArtist'];
                
                    if($donnees != null){
                        $lstArt = [];
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

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de données du rap - Goatsith</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://kit.fontawesome.com/b0c1e9dba0.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <h1>Gauth-Yeah ! (Accueil)</h1>
        <nav>
            <a href="../projets_perso.html">Projets perso</a>
            <a href="../index.html" id="accueil">Accueil</a>
            <a href="../projets_but.html">Projets de cours</a>
        </nav>
    </header>
<main>
        
        <h2>Recherche dans la base de données Rap</h2>
            <form method="POST" action="bddrapinfo.php">
                <label for="search">Recherche album :</label>
                <input type="text" id="searchAlbum" name="searchAlbum" placeholder="Entrez un mot-clé">
                <input type="submit" value="Rechercher">
            </form>
            </br>   
            <form method="POST" action="bddrapinfo.php">
                <label for="search">Recherche artiste :</label>
                <input type="text" id="searchArtist" name="searchArtist" placeholder="Entrez un mot-clé">
                <input type="submit" value="Rechercher">
            </form>
        <div class="container">
            <?php 
            
                if (isset($_POST['searchAlbum'])) {
                    $donnees = getAlbum($conn);
                    afficheAlbum($donnees);
                } else if (isset($_POST['searchArtist'])) {
                    $donnees = getArtiste($conn);
                    afficheArtiste($donnees);
                }
            
            ?>
        </div>
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

