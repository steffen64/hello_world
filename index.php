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
        echo "Heute ist der " . date('d.m.Y') . ". Ich bin z.Z. " . (60-8) . " Jahre alt.";  
?>    
    </body>
</html>
