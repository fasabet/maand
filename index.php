<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fan1</title>
    </head>
    <body>
    <?php
    // Farshid eerste php progeramma //
    echo "<h1>Hi </h1>";
    //24-10-2017
    $w0=array("zondag","mandag","dinsdag","wonesdag","donderdag","vrijdag","zaterdag");
    $c=0;
    for($m=0;$m<30;$m++){
        for($k=0;$k< count($w0)&$c<31;$k++){
        $c++;
         echo $w0[$k].$c."Janvary"."<br>";
        }
    }
    ?>          
    </body>
</html>
