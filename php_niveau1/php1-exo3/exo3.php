<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //question1
    $q1 = "<p>Question 1 :
    Créer une fonction from scratch qui s'appelle estIlMajeur(). Elle prendra
    un argument de type int. Elle devra retourner un boolean.
    Si age >= 18 elle doit retourner true
    si age < 18 elle doit retourner false.</br>
    Exemple :
    age = 5 ==> false
    age = 34 ==> true</p>";
    echo $q1; 

    function estIlMajeur($age){ 
    if ($age >= 18){
        return "false";
    }if ($age < 18){
        return "true";
    }}
    echo estIlMajeur($age=6);

    //question2
    $q2 = "<p>Question 2 :
    Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra
    deux arguments de type int. Elle devra retourner le plus grand des deux.</p>";
    echo $q2;

    function plusGrand($arg1 ,$arg2){
        if ($arg1 > $arg2){
        return $arg1;
    }   else {
        return $arg2;
    }
}
    echo plusGrand($arg1 = 30,$arg2 = 20);


    //question3
    $q3 = "<p>Question 3 :
    Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra
    deux arguments de type int. Elle devra retourner le plus petit des deux.</p>";
    echo $q3;

    function plusPetit($arg3,$arg4){
        if ($arg3 < $arg4){
            return $arg3;
        }   else {
            return $arg4;
        }
    }
        echo plusPetit($arg3 = 30,$arg4 = 40);


    //question4
    $q4 = "<p>Question 4 :
    Créer une fonction from scratch qui s'appelle lePlusPetit(). Elle prendra
    trois arguments de type int. Elle devra retourner le plus petit des
    trois.</p>";
    echo $q4;

    function lePLusPetit($nbr1,$nbr2,$nbr3){
        if (($nbr1< $nbr2) AND ($nbr1<$nbr3)){
            return $nbr1;
        }if (($nbr2< $nbr1) AND ($nbr2<$nbr3)){
            return $nbr2;
        }else //($nbr3< ($nbr1 OR $nbr2))
        {
            return $nbr3;
        }
        }
    
    echo lePLusPetit(0,20,15);
    
    


    
    
    ?>
</body>
</html>