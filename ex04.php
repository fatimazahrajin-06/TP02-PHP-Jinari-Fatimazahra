<!DOCTYPE <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TP02 Exercice 04</title>
    </head>
    <body>
        <?php $valeur = 42; $valeur01="42"; $valeur02=true; $valeur03= false; $valeur04=null; $valeur05=15.8;
        echo "<p>resulta de question 02</p>";
        echo "<pre>"; // pour bien formater la sortie
        var_dump($valeur);
        var_dump($valeur01);
        var_dump($valeur02);
        var_dump($valeur03);
        var_dump($valeur04);
        var_dump($valeur05);
        echo "</pre>";
        $valeur01 = (int) $valeur01;
        $valeur05=(int) $valeur05;
        $valeur=(string) $valeur;
        echo "<p>resulta de question 03</p>";
        echo "<pre>"; 
        var_dump($valeur);
        var_dump($valeur01);
        var_dump($valeur05);
        echo "</pre>";
        echo "Q-4 La valeur de TRUE et FALSE <br>";
        echo $valeur02 . "<br>";
        echo $valeur03 . "<br>";
        var_dump($valeur02);
        echo "<br>";
        var_dump($valeur03);
        echo "<br>";
        echo "resultat du question 05";
        echo (bool) 0 . "<br>";
        echo (bool) "0". "<br>";
        echo (bool) "PHP";

?>
    </body>
</html>
