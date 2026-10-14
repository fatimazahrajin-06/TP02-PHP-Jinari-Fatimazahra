<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP02 Exercice 05</title>
</head>
<body>
    <form method="post">
        <label>Entrez votre moyenne :</label>
        <input type="number" name="moyenne" step="0.01" min="0" max="20" required>
        <button type="submit">Valider</button>
    </form>

    <?php
    if (isset($_POST['moyenne'])) {
        $moyenne = (float) $_POST['moyenne'];

        if ($moyenne < 0 || $moyenne > 20) {
            echo "Note invalide";
        } elseif ($moyenne < 10) {
            echo "Non validé";
        } elseif ($moyenne >= 10 && $moyenne < 12) {
            echo "Passable";
        } elseif ($moyenne >= 12 && $moyenne < 14) {
            echo "Assez bien";
        } elseif ($moyenne >= 14 && $moyenne < 16) {
            echo "Bien";
        } else {
            echo "Très bien";
        }
    }
    ?>
</body>
</html>
