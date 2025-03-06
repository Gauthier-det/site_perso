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
            <a href="projets_perso.html">Projets perso</a>
            <a href="index.html" id="accueil">Accueil</a>
            <a href="projets_but.html">Projets de cours</a>
        </nav>
    </header>

    <section class="portfolio">
        <div class="container">
            <h2>Base de données du rap</h2>
            <form method="post" action="traitementAjout.php">
                <label for="ADenom"> Denomination : </label>
                <input type="text" id="ADenom" name="ADenom" maxlength="32" require/>
                <label for="ANom"> Nom : </label>
                <input type="text" id="ANom" name="ANom" maxlength="32"/>
                <label for="APrenom"> Prenom : </label>
                <input type="text" id="APrenom" name="APrenom" maxlength="32" require/>
                <label for="dateNa"> Date de Naissance : </label>
                <input type="date" id="dateNa" name="dateNa" maxlength="32" require/>
            </form>

            <h2 class="button"> <a href="bddraprecherche.php">Page de recherche</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Goatsith. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
