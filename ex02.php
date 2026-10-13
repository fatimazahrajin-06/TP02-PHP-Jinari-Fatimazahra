<!DOCTYPE <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TP02 Exercice 01</title>
    </head>
    <body>
    <?php 
// declaration des variable
$nom ="jinari";
$age = 20;
$prenom ="fatimazahra";
$formation = "iAP";
// construction de la phrase
$phrase = "Je m'appelle" . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en formation " . $formation . ",";
$phrase .= " Et j'apprends PHP,<br>";
echo $phrase;
// declaration des notes 
$note = 12;
$Note = 16;
echo "Mes notes :" . $note ." et " . $Note . " .<br>";
?>
</body>
</html>
