<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    <link rel="icon" type="img/png" href="img/logo.png">
    <title>
        Site M2L
    </title>
</head>

<header>
    <nav>
        <!--Pour afficher le logo et revenir à l'accueil -->
        <div class = "logo">
            <a href="index.php"><img src="img/logo.png" width ='75' height = '64' /></a>
            <h1>Site Projet</h1>
        </div>

        <ul>
            <li><a href = "index.php">Accueil</a></li>
            <li><a href = "logout.php">Déconnexion</a></li>
            </a>
        </ul>

    </nav>
</header>


<body>

    <section class="page-content">
        <header>
            <h1 class="titreprincipal">FAQ</h1>
        </header>

        <form action="" method="post" class="popup">
            <a href="#popup3" class="buttonA">Ajouter une question</a>
            <a href="list.php" class="buttonA">Annuler</a>
        </form>

        <table class="style-table">
        
            <tr>
                <th>ID</th>
                <th>Utilisateur</th>
                <th>Question</th>
                <th>Reponse</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>User1</td>
                <td>"une question"</td>
                <td>"une réponse"</td>
                
                <td>
                <a href="#popup2" class="button">Modifier</a> <a class="button" href="#popup1">Supprimer</a> 
                </td>
                
            </tr>

            <tr class="alternance">
                <td>1</td>
                <td>User1</td>
                <td>"une question"</td>
                <td>"une réponse"</td>
                <td><a href="#popup2" class="buttonblue">Modifier</a> <a class="buttonblue" href="#popup1">Supprimer</a></td>
            </tr>

            <tr>
                <td>1</td>
                <td>User1</td>
                <td>"une question"</td>
                <td>"une réponse"</td>
                <td><a href="#popup2" class="button">Modifier</a> <a class="button" href="#popup1">Supprimer</a></td>
                </td>
            </tr>

            <tr class="alternance">
                <td>1</td>
                <td>User1</td>
                <td>"une question"</td>
                <td>"une réponse"</td>
                <td><a href="#popup2" class="buttonblue">Modifier</a> <a class="buttonblue" href="#popup1">Supprimer</a></td>
            </tr>

            </body>  
        </table>


    </section>

    <footer>
        <div id="colonne">
            <h3>Localisation</h3>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.407534895309!2d6.212015076932612!3d48.697691071310835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479498337fd326ab%3A0x193970a28747751e!2sMaison%20R%C3%A9gionale%20des%20Sports!5e0!3m2!1sfr!2sfr!4v1675181707166!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

        <div id="colonne">
            <h3>Mes contact</h3>
            <p>
                <img src="img/mailLogo.png" width="12px">Mail : adresse@mail.com</a>
            </p>
            <p>
                <img src="img/LogoTelephone.png" width="10px">Numéro : 06 30 87 75 52
            </p>

        </div>
    </footer>

    <div class ="copyright">
        © M2L 2003 - 2023 : Tous droits réservés
    </div>

</body>


<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Etes-vous sur ?</h2>
		<a class="close" href="#">&times;</a>
		<a href="" class="SUPPbutton">Supprimer</a> <a class="button" href="list.html">Annuler</a>
        
	</div>
</div>

<div id="popup2" class="overlay">
    <div class="popup">
        <h2>Modifier question</h2>
        <textarea name="Modifier" id="modifier" cols="20" rows="2"></textarea>
        <a class="close" href="#">&times;</a>
		<p><a href="" class="Validbutton">Valider</a> <a class="button" href="list.html">Annuler</a></p>
    
    </div>
</div>

<div id="popup3" class="overlay">
    <div class="popup">
        <h2>Ajouter question</h2>
        <textarea name="Modifier" id="modifier" cols="20" rows="2"></textarea>
        <a class="close" href="#">&times;</a>
		<p><a href="" class="Validbutton">Valider</a> <a class="button" href="list.html">Annuler</a></p>
    
    </div>
</div>