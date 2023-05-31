<?php
include("connexion.php")
?>

<head>
    <body>
        <form action="introbase.php" method='get'>
            Réserver votre billets:
        <div>
           <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="user-prenom">
        </div>
        <div>
           <label for="name">Nom :</label>
            <input type="text" id="name" name="user-name">
        </div> 
        <div>
            <label for="mail">e-mail&nbsp;:</label>
            <input type="email" id="mail" name="user-mail">
        </div>
            <select name="day">
                <option value="1">06 JUL</option>
                <option value="2">07 JUL</option>
                <option value="3">08 JUL</option>
                <option value="4">09 JUL</option>
            </select>
        <div class="button">
            <button type="submit">Reservé</button>
        </div>
        </form>
    </body>
</head>