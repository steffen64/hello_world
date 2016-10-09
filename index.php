<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
        $vorname = "Sascha";
        $zusatz = "ein geiler Typ";
        echo "Dein Vorname ist <h3>$vorname</h3> und Du bist <h3>$zusatz</h3>";
        echo "Dein Vorname ist <h3>" . $vorname . "</h3> und Du bist <h3>" . $zusatz . "</h3>";
        # Punkte verbinden nicht nur Variablen mit Zeichenketten
        # man kann auch Funktionen direkt einbinden oder Berechnungen ausführen, ohne vorher Variablen dafür anzulegen   
        echo "Heute ist der " . date('d.m.Y') . ". Ich bin z.Z. " . (date('Y') - 1964) . " Jahre alt. <br>";  
        # oder mit Variablen 
        $datum_heute = date('d.m.Y'); 
        $mein_alter = date('Y') - 1964;
        echo "Heute ist der " . $datum_heute . '. Ich bin z.Z. ' . $mein_alter . ' Jahre alt. <br>';  
        # Variablen erhöhen die Übersichtlichkeit, vor allem wenn man berechnete Werte mehrfach nutzen will 
        echo "Aber Du bist noch keine $mein_alter Jahre alt. <br>";          
        $sascha = $mein_alter - 10;  
        if($sascha < $mein_alter){
            echo  " ... junger Hüpfer ... <br>";
        }
?>    
    </body>
</html>
