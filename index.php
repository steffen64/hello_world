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
        # Punkte verbinden nicht nur Variablen 
        echo "Heute ist der " . date('d.m.Y') . ". Ich bin z.Z. " . (date('Y') - 1964) . " Jahre alt.";  
        # oder 
        $heute = date('d.m.Y'); 
        $mein_alter = date('Y') - 1964;
        echo "Heute ist der " . $heute . '. Ich bin z.Z. ' . $mein_alter . ' Jahre alt.'; 
?>    
    </body>
</html>
