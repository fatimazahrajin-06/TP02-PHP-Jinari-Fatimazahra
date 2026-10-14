<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php 
        $numeroMois = 9;
        switch ($numeroMois){
            case 1:
                echo "janvier";
                break;
            case 2:
                echo "fevier";
                break;
            case 3:
                echo "mars";
                break;
            case 4:
                echo "avril";
                break;
            case 5:
                echo "mai";
                break;
            case 6:
                echo "juin";
                break;
            case 7:
                echo "juil";
                break;
            case 8:
                echo "aout";
                break;
            case 9:
                echo "septembre";
                break;
            case 10:
                echo "octobre";
                break;
            case 11:
                echo "novembre";
                break;
            case 12:
                echo "decembre";
                break;
            default : echo "le nembre de mois est invalide";
        }
        $numbrMonth = (int) date("m");
        switch ($numbrMonth){
            case 1:
                echo "<br>janvier";
                break;
            case 2:
                echo "<br>fevier";
                break;
            case 3:
                echo "<br>mars";
                break;
            case 4:
                echo "<br>avril";
                break;
            case 5:
                echo "<br>mai";
                break;
            case 6:
                echo "<br>juin";
                break;
            case 7:
                echo "<br>juil";
                break;
            case 8:
                echo "<br>aout";
                break;
            case 9:
                echo "<br>septembre";
                break;
            case 10:
                echo "<br>octobre";
                break;
            case 11:
                echo "<br>novembre";
                break;
            case 12:
                echo "<br>decembre";
                break;
            default : echo "<br>le nembre de mois est invalide";
        }

        ?>
    </body>
</html>
