<!DOCTYPE html>
<html>

<head>
    <title>Test Formulaire Contact</title>
    <meta charset="utf-8" />
    <link href="style_contact.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8b9f753206.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="menu">
        <a href="../../Page_Principale/portfolio.html" class="solo-link"><i class="fas fa-home" style="font-size:15px"></i>&nbsp;&nbsp;Acceuil</a>
        <div class="dropdown">
            <button class="dropbtn"><i class="fa-solid fa-id-card" style="font-size:15px"></i>&nbsp;&nbsp;Mon
                Profil</button>
            <div class="dropdown-content">
                <a href="../Profil/CV/CV.html">Mon CV</a>
                <a href="../Profil/Stages/Stages.html">Mes Stages</a>
                <a href="../Profil/Projets_Personnels/projets.html">Mes Projets Personels</a>
                <a href="../Profil/Formations/Formations.html">Mes Formations</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><i class="fa-solid fa-newspaper"
                    style="font-size:15px"></i>&nbsp;&nbsp;News</button>
            <div class="dropdown-content">
                <a href="../News/Articles/Article_1/article_1.html">Article n°1</a>
                <a href="../News/Articles/Article_2/article_2.html">Article n°2</a>
            </div>
        </div>
        <a href="../Métiers_Informatique/Brochure/page_brochure.html" class="solo-link"><i
                class="fa-solid fa-desktop" style="font-size:15px"></i>&nbsp;&nbsp;Les métiers de l'informatique</a>
        <a href="../Veille Technologique/veille_techno.html" class="solo-link"><i class="fa-solid fa-globe"
                style="font-size:15px"></i>&nbsp;&nbsp;Veille Technologique</a>
        <a href="../Contact/contact.html" class="solo-link"><i class="fa-solid fa-envelope"
                style="font-size:15px"></i>&nbsp;&nbsp;Contact</a>
    </div><br>
    <div class="contactez-nous"> <!--Code du formulaire de contact-->
        <h1>Contactez-nous</h1>
        <p>Un problème, une question, envie de nous envoyer un message d’amour ? N’hésitez pas à utiliser ce formulaire
            pour prendre contact avec nous !</p>
        <form action="envoi.php" method="POST">
            <div>
                <label for="nom">Votre nom</label>
                <input type="text" id="nom" name="nom" placeholder="Martin" required>
            </div>
            <div>
                <label for="email">Votre e-mail</label>
                <input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
            </div>
            <div>
                <label for="sujet">Quel est le sujet de votre message ?</label>
                <select name="sujet" id="sujet" required>
                    <option value="" disabled selected hidden>Choisissez le sujet de votre message</option>
                    <option value="probleme-compte">Problème avec mon compte</option>
                    <option value="question-produit">Question à propos d’un produit</option>
                    <option value="suivi-commande">Suivi de ma commande</option>
                    <option value="autre">Autre...</option>
                </select>
            </div>
            <div>
                <label for="message">Votre message</label>
                <textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...."
                    required></textarea>
            </div>
            <div>
                <button type="submit">Envoyer mon message</button>
            </div>
        </form>
    </div>
</body>

</html>