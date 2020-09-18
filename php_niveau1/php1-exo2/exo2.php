<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>exo 2</h1>
    <?php
    $q1 = "<p>Question 1 :
    Créer une fonction from scratch qui s'appelle somme(). Elle prendra deux
    arguments de type int. Elle devra retourner la somme des deux.
    Exemple :
    argument 1 = 5
    argument 2 = 6
    resultat : 11</p>";
    echo $q1;

    function somme($argument1 = 5,$argument2 = 6){
        return $argument1+$argument2;
    }
    echo "<p>".somme()."</p>";

    $q2 = "<p>Question 2 :
    Créer une fonction from scratch qui s'appelle soustraction(). Elle
    prendra deux arguments de type int. Elle devra retourner la soustraction
    des deux.
    Exemple :
    argument 3 = 5
    argument 4 = 4
    Resultat : 1
    </p>";
    echo $q2;

    function soustraction($argument3 = 5,$argument4 = 4){
        return $argument3-$argument4;
    }
    echo "<p>".soustraction()."</p>";

    $q3 = "<p>Question 3 :
    Créer une fonction from scratch qui s'appelle multiplication(). Elle
    prendra deux arguments de type int. Elle devra retourner la
    multiplication des deux.
    Exemple : argument 1 = 5
    argument 2 = 4
    Resultat : 20</p>";
    echo $q3;

    function multiplication($argument5 = 5,$argument6 = 4){
        return $argument5*$argument6;
    }
    echo "<p>".multiplication()."</p>";


    ?>
</body>
</html>