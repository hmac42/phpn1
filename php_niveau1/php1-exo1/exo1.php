<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php

        //EXEMPLES!!

            //Affiche "Hello World" avec un retour à la ligne
            echo 'Hello World <br>'; //Ceci est un commentaire PHP
            
            /*Affiche
              "Bonjour le Monde
            */
            echo "Bonjour le Monde</br>"; /*Ceci est un commentaire PHP*/


            //exercices demandé!
            //q1
            function helloWorld(){
                echo 'Hello World!</br>';
            }
            helloWorld();

            //q2
            function quiEstLeMeilleurProf(){
                print('Mon super formateur de dev web</br>');
            }
            quiEstLeMeilleurProf();

            //q3
            function jeRetourneMonArgument(){
                $argument = 'abc';
                return $argument;

                $arg = 123;
                return $arg;
            }

            //q4

            

            function concatenation($argument1 = "Kingsley",
            $argument2 = "Coman</br>"){
            $resultat = $argument1.$argument2;
            return $resultat;

            }
            echo concatenation();

            //q5

            
            
            function concatenationAvecEspace($argument3 = "Manuel",
            $argument4 = "Neuer</br>"){
                $resultat1 = $argument3." ".$argument4;
                return $resultat1;
            }
            echo concatenationAvecEspace();//c'est la bonne facon de faire.

            
            //exemple q5
            function concatenationAvecEspace1(){
                $argument5 = "Cris";
                $argument6 = "Ronaldo";
                
                $resultat2 = $argument5." ".$argument6;
                return $resultat2;
            }
            echo concatenationAvecEspace1();//ca marche aussi



        ?>
        <p>Un paragraphe</p>
   


<?php 
$x = 1;
$y = 6;

if($x < 4){
    echo '$x est inferieur a 4!';}
if($x > 4){
    echo '$x est superieur a 4!';}
        ?>
         </body>
</html>