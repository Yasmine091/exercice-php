<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP</title>
</head>

<body>
    <!-- Exercice 1 -->
    <?php
    if (isset($_POST['envoi'])) {
        $nom = $_POST['nom'];
        $long = strlen($nom);
        if (empty($nom)) {
            echo ('Tu dois indiquer un nom!');
        } elseif ($long < 1 or $long > 10) {
            echo ('Ton nom doit comprendre entre 1 et 10 caractères!');
        } else {
            echo ('Bonjour ' . $nom . ' !');
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
    if (isset($_POST['envoi2'])) {

        $mail = $_POST['mail'];
        $pw = $_POST['mdp'];
        $omail = "léa@gmail.com";
        $opw = "123456";
        $longr = strlen($mail);

        if (empty($mail) or empty($pw)) {
            echo ('Tu dois tout remplire!');
        } elseif ($longr < 4) {
            echo ('Ton mail doit comprendre un minimum de 4 caractères!');
        } elseif (!preg_match("/@/i", $mail)) {
            echo ('Adresse mail invalide');
        } elseif ($mail != $omail or $pw != $opw) {
            echo ('Adresse mail ou mot de passe invalides!');
        } else {
            echo ('Bonjour ' . $mail . ' !');
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


    <!-- Exercice 4 -->

    <?php

    $random1 = rand(0, 10);
    $random2 = rand(0, 10);
    $oper = '+-*';
    $random3 = $oper[rand(0, strlen($oper) - 1)];

    if($random3 = "-"){
        $res = ($random1 - $random2);
    }
    if($random3 = "+"){
        $res = ($random1 + $random2);
    }
    if($random3 = "*"){
        $res = ($random1 * $random2);
    }


    if (isset($_POST['snd-res'])) {

        $myres = $_POST['myres'];

        if ($myres = $res) {
            echo ('Bravo!');
        } else {
            echo ('Essaye à nouveau');
        }
    }

    ?>

    <form method="POST">
        <label name="oper"><?php echo $random1 ?><?php echo $random3 ?><?php echo $random2 ?></label>
        <input type="text" placeholder="Ecris ici le résultat!!" name="myres">
        <input type="submit" name="snd-res" value="C'est ça!">
    </form>

    <hr style="margin-top: 20px; margin-bottom: 20px;">


    <!-- Exercice 5 -->

    <?php

    $notes = ([rand(0, 20),
               rand(0, 20),
               rand(0, 20),
               rand(0, 20),
               rand(0, 20),
               rand(0, 20),
               rand(0, 20),
               rand(0, 20),
               rand(0, 20), 
               rand(0, 20)]);

    $somme = array_sum($notes);

    $moyenne = ($somme / 10);

    ?>

<style>table,th,td,tr { border: 2px solid; text-align: center; } tbody td { width: 25px;} </style>

    <table>
    <thead>
    <tr>
    <td colspan="10" style="text-align:center;"><b>Notes</b></td>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $notes[0] ?></td>
            <td><?php echo $notes[1] ?></td>
            <td><?php echo $notes[2] ?></td>
            <td><?php echo $notes[3] ?></td>
            <td><?php echo $notes[4] ?></td>
            <td><?php echo $notes[5] ?></td>
            <td><?php echo $notes[6] ?></td>
            <td><?php echo $notes[7] ?></td>
            <td><?php echo $notes[8] ?></td>
            <td><?php echo $notes[9] ?></td>
        </tr>
    </tbody>
    <tfoot>
    <tr>
    <td colspan="10" style="text-align:center;"><b><?php echo $moyenne ?></b></td>
    </tr>
    </tfoot>
    </table>

    <hr style="margin-top: 20px; margin-bottom: 20px;">

    <!-- Exercice 6 -->

    <?php
    if (isset($_POST['try'])) {

        $mynum = $_POST['mynum'];
        $random = rand(0, 10);

        if ($random > $mynum) {
            echo ('Echec, ton numéro est plus petit!');
        } elseif ($random < $mynum) {
            echo ('Echec, ton numéro est plus grand!');
        } else {
            echo ('Bravo!');
        }
    }
    ?>

    <form method="POST">
        <label></label>
        <input type="text" placeholder="Indique un numéro de 1 a 10" name="mynum">
        <input type="submit" name="try" value="Je tire!">
    </form>

</body>

</html>