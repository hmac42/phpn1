<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        //exemple: operateur ternaire aide a simplifier le code, equivault a si/sinon.
        $x = 4;
        echo $x >=0 ? '$x est superieur a 0</br>':'$xest inferieur a 0</br>';

        //2°exemple: ou il affiche la variable si true ou la phrase si false.
        $y = 10;
        echo $y >=15 ?: '$y est inferieur a 15<br>';

        //3°exemple: ou il affecte a la variable la valeur NULL si elle est vide ou contient deja la valer NULL
        $a = 4;
        $b = NULL;
        $c;

        $resultatA = $a ?? 'NADA';
        $resultatB = $b ?? 'NULL';
        $resultatC = $c ?? 'NADA';

        echo '$a contient '.$resultatA.'<br>';
        echo  '$b contient '.$resultatB.'<br>';
        echo  '$c contient '.$resultatC.'<br>';

    ?>

    <?php
    //$q1 
    $q1 = "<p>Question 1 :
    Créer une fonction from scratch qui s'appelle premierElementTableau().
    Elle prendra un argument de type array. Elle devra retourner le premier
    élement du tableau.
    Si l'array est vide, il faudra retourner null;</p>";
    echo $q1;

    function premierElementTableau($prenoms){
       return $prenoms[0] ?: 'NULL';
    };
    $prenoms = array('Do','Re','Mi');
        echo premierElementTableau($prenoms);

        /*$prenoms = array('Do','Re','Mi');
        echo $prenoms[0];*/


    //$q2
    $q2 = "<p>Question 2 :
    Créer une fonction from scratch qui s'appelle dernierElementTableau().
    Elle prendra un argument de type array. Elle devra retourner le dernier
    élement du tableau.
    Si l'array est vide, il faudra retourner null;</p>";
    echo $q2;


    function dernierElementTableau($notes){
        return end($notes) ?: 'NULL';
        }
        $notes = array('Fa','Sol','La');
        echo dernierElementTableau($notes);
    
    //$q3
    $q3= "<p>Question 3 :
    Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra
    un argument de type array. Elle devra retourner le plus grand des
    élements présent dans l'array.
    Si l'array est vide, il faudra retourner null;</p>";
    echo $q3;

    function plusGrand($taille){
    return max($taille) ?: 'NULL';     
    }
    $taille = array('20', '50','60', '100');
    echo plusGrand($taille);
    
     
    //$q4
    $q4= "<p>Question 4 :
    Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra
    un argument de type array. Elle devra retourner le plus petit des
    élements présent dans l'array.
    Si l'array est vide, il faudra retourner null;</p>";
    echo $q4;

    function plusPetit($taille){
    return min($taille); //?: 'NULL';     
    }
    echo plusPetit($taille);


    //function plusPetit1(){  $tab = min(array("chien","chat","pigeon des îles","ourson")); if (!empty($tab)) {  return $tab; }else {   return null; }}

    ?>
</body>
</html>