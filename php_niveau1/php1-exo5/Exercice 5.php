<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>
<section class="question 1">
<h1>Question 1</h1>
    <p>Créer une fonction from scratch qui s'appelle verificationPassword().</p>
    <p>Elle prendra un argument de type string.</p>
    <p>Elle devra retourner un boolean qui vaut true si le password fait 8 caractères ou plus et false si il
    fait moins.</p>

    <h3>Résolution</h3>

<?php
//strlen verifie la taille de la chaine de caracteres
/*function verificationPassword($nomDePass){
    if(strlen($nomDePass)>=8){
        return "true";
    }else{
        return "false";
    }
}
$nomDePass="hugo";
echo verificationPassword($nomDePass);*/
?>

</section>
<hr>
<section class="Question 2">
<h1>Question 2</h1>
    <p>On améliore la verificationPassword() écrite précédemment. </p>
    <p>Elle prend toujours un argument de type string.</p>
    <p> Elle devra désormais retourner un boolean qui vaut true si le password respecte toutes les règles suivantes:</p>
        <ul>
            <li> Faire au moins 8 caractères</li>
            <li> Avoir au moins 1 chiffre</li>
            <li> Avoir au moins une majuscule et une minuscule</li>
            <li>Et false dans tous les autres cas.</li>
        </ul>
    <h3>Résolution</h3>
<?php

//preg_match permet de evaluer une chaine de caracteres selon les conditions designée dedans
/*function verificationPassword($nomDePass){
    $maj = preg_match('@[A-Z]@', $nomDePass);
    $minsc = preg_match('@[a-z]@', $nomDePass);
    $chfr = preg_match('@[0-9]@', $nomDePass);
    if(strlen($nomDePass)>=8 && $maj && $chfr && $minsc){
        return "true";
    }else{
        return "false";
    }
}
$nomDePass="GTEGHYGUYGGUU9";
echo verificationPassword($nomDePass);*/
?>
</section>
<hr>
<section class="Question 3">
<h1>Question 3</h1>
    <p>Créer une fonction from scratch qui s'appelle capital(). </p>
    <p>Elle prendra un argument de type string. Elle devra retourner le nom de la capitale des
        pays suivants :</p>
    <ul>
        <li>France ==> Paris</li>
        <li>Allemagne ==> Berlin</li>
        <li>Italie ==> Rome</li>
        <li>Maroc ==> Rabat</li>
        <li>Espagne ==> Madrid</li>
        <li>Portugal ==> Lisbonne</li>
        <li>Angleterre ==> Londres</li>
        <li>Tout autre pays ==> Inconnu</li>
    </ul>
    <p>Il faudra utiliser la structure SWITCH pour faire cette exercice.</p>
    <p><em>Bonus : Faîtes en sorte de gérer le nom nom des pays indépendamment de la
            casse (majuscules/minuscules).</em></p>
    <h3>Résolution</h3>
<?php
/*function capital($nomDePays){
    //$nomDePays = strtolower($nomDePays);   ...change les MAJ en miniscules
    //$maj = preg_match('@[A-Z]@', $nomDePays);
    //$minsc = preg_match('@[a-z]@', $nomDePays);
    
    switch ($nomDePays) {
        case "France"; echo "Paris";
            break;

        case "Allemagne"; echo "Berlin";
            break;

        case "Italie"; echo "Rome";
            break;

        case "Maroc"; echo "Rabat";
            break;

        case "Espagne"; echo "Madrid";
            break;

        case "Portugal"; echo "Lisbonne";
            break;

        case "Angleterre"; echo "Londres";
            break;

        case "Tout autre pays"; echo "Inconnu";
            break;
    
 }     
}
$nomDePays ="Espagne";
echo capital($nomDePays);*/

?>
</section>
<hr>
<section class="Question 4">
<h1>Question 4</h1>
    <p>Créer une fonction from scratch qui s'appelle listHTML().</p>
    <p>Elle prendra deux arguments :</p>
        <ol>
            <li>Une string représentant le nom de la liste</li>
            <li>Un array représentant les éléments de cette liste</li>
        </ol>
    <p>Elle devra retourner une liste HTML.</p>
    <p>Chaque element de cette liste viendra du tableau passé en paramètre.</p>
    <p>Exemple :</p>
        <ul>
            <li>Argument titre : "Capitale"</li>
            <li>Argument liste : ["Paris", "Berlin", "Moscou"]</li>
        </ul>
    <h3>Résultat : Capitale</h3>
   <ul>
        <li>Paris</li>
        <li>Berlin</li>
        <li>Moscou</li>
    </ul>

<p>Comme vous pouvez le voir il n'y a pas d'espace ni de retour à la ligne
entre les éléments de la liste. Pas d'espace non plus entre le titre et la liste.</p>
<p>Contraintes :
    <ul>
        <li>Si le titre est null ou vide, il faut que la fonction retourne null.</li>
        <li>Si l'array est vide (0 élément), il faut que la fonction retourne null.</li>
    </ul>
<h3>Résolution</h3>
<?php

function listHTML($liste,$eltsListe) {
        $affiche ="<p>$liste</p>";
        $affiche.='<ul>';
    //TRES IMPORTANT: le .= concatène puis affecte le resultat 
        foreach ($eltsListe as $elts){$affiche.="<li>$elts</li>";}
        /*foreach prend chaque elements du tableau et lui donne
         une nouvelle variable*/
        $affiche.='</ul>';
        return $affiche;
        }
    $liste = "Les plus grand clubs";
    $eltsListe = ["Real Madrid",
                    "B.Munique",
                    "Man.United",
                    "Benfica",
                    "Barcelone",
                    "OGC Nice"];
   
     echo  listHTML($liste,$eltsListe);                  

  
?>

<?php 
//Exercice 3. 2°chemin pour y arriver 
    function listHTML1($a,$z) {
        echo  "<h3>". $a ."</h3>";
        echo "<ul>";
        for ($i=0; $i <count($z) ; $i++) {
             echo "<li>".$z[$i]."</li>";
            } // la boucle for va parcourir le array et ensuite les placer autant que <li>
        echo "</ul>";
}
$cap = "Capitale";
$vil = ["Paris", "Berlin", "Moscou"];
echo listHTML1($cap, $vil);

?>
</section>
<hr>
<section class="Question 5">
<h1>Question 5</h1>
    <p>Créer une fonction from scratch qui s'appelle remplacerLesLettres().</p>
    <p>Elle prendra un argument de type string.</p>
    <p>Elle devra retourner cette même string mais en remplaçant les "e" par des "3", les "i" par des "1" et les
    "o" par des "0"</p>
    <p>Exemple :</p>
        <ul>
            <li>argument : "Bonjour les amis" ==> Output : "B0nj0ur l3s am1s"</li>
            <li>argument : "La programmation Web est trop cool" ==> Output : "La
            pr0grammat10n W3b 3st tr0p c00l"</li>
        </ul>
<h3>Résolution</h3>

<?php
        function remplacerLesLettres($phrase) {
            $ltrs = ["o", "i", "e"];
            $rplce = ["0", "1", "3"];
            $nvlphrase = str_replace($ltrs, $rplce, $phrase);
            //str_replace remplace les elements definis
            echo $nvlphrase;
        }
    $exempl = "Bonjour les amis";
    $exempl1 = "La programmation Web est trop cool";
    echo remplacerLesLettres($exempl1);  
?>

</section>
<hr>
<section class="Question 6">
    <h1>Question 6</h1>
    <p>Créer une fonction from scratch qui s'appelle quelleAnnee(). </p>
    <p>Elle devra retourner un integer représentant l'année actuelle.</p>
    <p>Cherchez en PHP comment on intéragit avec les dates !</p>
    <h3>Résolution</h3>

<?php
    /*$t1 = mktime(10,25,0,17,9,2020);
    echo $t1;*/

    function quelleAnnee($tempo){
        return $tempo;
        }
        $tempo = date('d/m/y');//'d/m/y' => c'est un des formats dispo 
        echo quelleAnnee($tempo);

    

?> 

</section>
<hr>
<section class="Question 7">
    <h1>Question 7</h1>
        <p>Créer une fonction from scratch qui s'appelle quelleDate(). </p>
        <p>Elle devra retourner une string représentant la date actuelle sous le format suivant
        DD/MM/YYYY Où DD représente le jour actuel, MM le mois actuel et YYYY l'année
        actuelle. </p>
        <p>Là encore, cherchez comment en PHP on intéragit avec les dates.</p>
    <h3>Résolution</h3>

<?php
    function quelleDate($tempu){
        return $tempu;
        }
        //$tempu = date('D/M/Y');//unautre exemple de format dispo 
        //$tempu = date('l d m Y h:i:s');
        date_default_timezone_set('Europe/Paris');// date_default_timezone_set sert  definir le fuseau horaire pretendu
        $tempu = date('l d m Y h:i:s');
        echo quelleAnnee($tempu);


?>
</section>
</body>
</html>