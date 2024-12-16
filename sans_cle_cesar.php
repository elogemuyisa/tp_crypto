<?php

if(isset($_POST['dechiffrer']))
{
    $message=htmlspecialchars($_POST['message']);
// Fréquences des lettres en français
$french_letter_freq = [
    'e' => 14.7, 'a' => 7.5, 's' => 7.9, 'i' => 7.3, 't' => 7.2,
    'n' => 7.0, 'r' => 6.4, 'u' => 6.1, 'l' => 5.4, 'o' => 5.1,
    'd' => 3.6, 'c' => 3.3, 'm' => 3.2, 'p' => 3.0, 'g' => 1.0,
    'b' => 0.9, 'v' => 1.3, 'h' => 1.0, 'q' => 0.9, 'f' => 1.1,
    'x' => 0.3, 'y' => 0.3, 'z' => 0.1, 'j' => 0.3, 'k' => 0.1, 'w' => 0.1
];

// Fonction pour déchiffrer un texte avec une clé donnée
function decrypt_caesar($ciphertext, $shift) {
    $alphabet = range('a', 'z');
    $decrypted_text = '';

    foreach (str_split($ciphertext) as $char) {
        if (ctype_lower($char)) {
            $index = (array_search($char, $alphabet) - $shift + 26) % 26;
            $decrypted_text .= $alphabet[$index];
        } elseif (ctype_upper($char)) {
            $index = (array_search(strtolower($char), $alphabet) - $shift + 26) % 26;
            $decrypted_text .= strtoupper($alphabet[$index]);
        } else {
            $decrypted_text .= $char; // Garder les caractères non alphabétiques
        }
    }

    return $decrypted_text;
}

// Calculer le score d'un texte en fonction des fréquences des lettres
function score_text($text, $french_letter_freq) {
    $text = strtolower($text);
    $letter_counts = array_count_values(str_split(preg_replace('/[^a-z]/', '', $text)));
    $total_letters = array_sum($letter_counts);
    $score = 0;

    foreach ($french_letter_freq as $letter => $expected_freq) {
        $actual_freq = isset($letter_counts[$letter]) ? ($letter_counts[$letter] / $total_letters) : 0;
        $score += pow($actual_freq - $expected_freq / 100, 2);
    }

    return $score;
}

// Tenter de casser le code en utilisant l'analyse fréquentielle
function crack_caesar($ciphertext, $french_letter_freq, $top_n = 5) {
    $potential_decryptions = [];

    for ($shift = 0; $shift < 26; $shift++) {
        $decrypted_text = decrypt_caesar($ciphertext, $shift);
        $score = score_text($decrypted_text, $french_letter_freq);
        $potential_decryptions[] = ['text' => $decrypted_text, 'score' => $score, 'shift' => $shift];
    }

    usort($potential_decryptions, function($a, $b) {
        return $a['score'] <=> $b['score'];
    });

    return array_slice($potential_decryptions, 0, $top_n);
}

// Exemple d'utilisation
$ciphertext = $message; // Exemple de texte chiffré
$results = crack_caesar($ciphertext, $french_letter_freq);



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déchiffrement Cesar sans clé</title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
</head>
<body>
<div class="col-4 offset-1 mt-5">
        <h5 class="text-center">Déchiffrement avec Cesar</h5>
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Message</label>
                <input type="text"
                    class="form-control" name="message" id="" aria-describedby="helpId" placeholder="" required>
            </div>
            
            <div class="mb-3">
              
              <input type="submit"
                class="btn btn-outline-primary" name="dechiffrer" id="" value="Déchiffrer">
            </div>
        </form>
    </div>
    <div class="col-4 offset-1 ">
        <h5><?php 
        if(isset($_POST['dechiffrer']))
        {
        echo "Les 5 déchiffrements les plus probables sont :\n";
        foreach ($results as $i => $result) {
            echo ($i + 1) . ". Texte: " . $result['text'] . " (Décalage: " . $result['shift'] . ", Score: " . round($result['score'], 4) . ")\n"; ?> <br> <?php
        }
    }
        
        ?></h5>
    </div>
</body>
</html>