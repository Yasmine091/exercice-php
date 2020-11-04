<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP</title>
</head>
<body>
<!-- Exercice 1 -->
    <?php
    if (isset($_POST['envoi'])){
        $nom = $_POST['nom'];
        $long = strlen($nom); 
        if (empty($nom)) {
            echo('Tu dois indiquer un nom!');
        }
        elseif($long < 1 OR $long > 10){
            echo('Ton nom doit comprendre entre 1 et 10 caractères!');
        }
        else {
        echo('Bonjour ' . $nom . ' !');
    }
    };
    ?>
    <form method="POST">
        <label>Comment tu t'appelles?</label>
        <input type="text" name="nom" placeholder="Nom ou prénom">
        <input type="submit" value="envoyer" name="envoi">
    </form>

    <hr style="margin-top: 20px; margin-bottom: 20px;">

<!-- Exercice 3 -->

<?php
    if (isset($_POST['envoi2'])){

        $mail = $_POST['mail'];
        $pw = $_POST['mdp'];
        $omail = "léa@gmail.com";
        $opw = "123456";
        $longr = strlen($mail);

        if (empty($mail) OR empty($pw)) {
            echo('Tu dois tout remplire!');
        }
        elseif($longr < 4){
            echo('Ton mail doit comprendre un minimum de 4 caractères!');
        }
        elseif(!preg_match("/@/i", $mail)){
            echo('Adresse mail invalide');
        }
        elseif($mail != $omail OR $pw != $opw){
            echo('Adresse mail ou mot de passe invalides!');
        }
        else {
        echo('Bonjour ' . $mail . ' !');
        }
        
    };
    ?>
    <form method="POST">
        <label for="mail">Mail :</label>
        <input type="text" name="mail" id="mail" placeholder="ex : léa@gmail.com">
        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp">
        <input type="submit" value="Se connecter" name="envoi2">
    </form>
    
    <hr style="margin-top: 20px; margin-bottom: 20px;">
    
    <?php
    
    $random1 = rand(0,11);
    $random2 = rand(0,11);
    
    $oper = '+-*';

    $random3 = $oper[rand(0, strlen($oper)-1)];
    
    $myres = $_POST['myres'];
    
    $res = (int)$random1 + (string)$random3 + (int)$random2;
    
    if(isset($_POST['snd-res'])){
    
    if($res != $myres){
    	echo('Essaye à nouveau');
    }
    else {
    	echo('Bravo!');
    	}
    }
    
    ?>
    
     <!-- Exercice 4 -->
    
    <form method="POST">
    <label name="oper"><?php echo $random1 ?><?php echo $random3 ?><?php echo $random2?></label>
    <input type="text" placeholder="Ecris ici le résultat!!" name="myres">
    <input type="submit" name="snd-res" value="C'est ça!">
    </form>

<hr style="margin-top: 20px; margin-bottom: 20px;">

    <!-- Exercice 5 -->
    
    <form method="POST">
    <label></label>
    <input type="text" placeholder="Indique un numéro de 1 a 10" name="mynum">
    </form>

</body>
</html>
