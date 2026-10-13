<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP02 Exercice 03</title>
</head>
<body>
<?php
// Définition des constantes
define("TAUX_TVA", 20);
define("DEVISE", "MAD");

// Déclaration des variables
$prix_unitaire_HT = 60;
$quantite = 3;

// Calculs
$total_HT = $prix_unitaire_HT * $quantite;
$montant_tva = $total_HT * TAUX_TVA / 100; // division par 100 manquante
$total_TTC = $total_HT + $montant_tva;

// Ajout des frais de livraison
$total_TTC += 15;

// Vérification de l’existence de la constante TAUX_TVA
if (defined("TAUX_TVA")) {
    echo "<h2>Récapitulatif de la commande</h2>";
    echo "Prix unitaire HT : " . $prix_unitaire_HT . " " . DEVISE . "<br>";
    echo "Quantité : " . $quantite . "<br>";
    echo "Total HT : " . $total_HT . " " . DEVISE . "<br>";
    echo "Montant TVA (" . TAUX_TVA . "%) : " . $montant_tva . " " . DEVISE . "<br>";
    echo "<strong>Total TTC (avec livraison) : " . $total_TTC . " " . DEVISE . "</strong><br>";
} else {
    echo "<p>La constante TAUX_TVA n’est pas définie.</p>";
}
?>
</body>
</html>