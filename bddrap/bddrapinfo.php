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
    <section class="portfolio">
        <div class="container">
        <h2>Recherche dans la base de données Rap</h2>
            <form method="POST" action="bddraprecherche.php">
                <label for="search">Recherche album :</label>
                <input type="text" id="searchAlbum" name="searchAlbum" placeholder="Entrez un mot-clé">
                <input type="submit" value="Rechercher">
            </form>
            </br>   
            <form method="POST" action="bddraprecherche.php">
                <label for="search">Recherche artiste :</label>
                <input type="text" id="searchArtist" name="searchArtist" placeholder="Entrez un mot-clé">
                <input type="submit" value="Rechercher">
            </form>
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

