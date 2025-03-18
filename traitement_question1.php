<?php
function DechiffrementCesar($ciphertext, $cle) {
    $decryptedText = "";
    $ciphertext = strtolower($ciphertext);
    for ($i = 0; $i < strlen($ciphertext); $i++) {
        $char = $ciphertext[$i];
        if (ctype_alpha($char)) {
            $decryptedChar = chr(((ord($char) - ord('a') - $cle + 26) % 26) + ord('a'));
            $decryptedText .= $decryptedChar;
        } else {
            $decryptedText .= $char;
        }
    }
    return $decryptedText;
}

function frequencyAnalysis($ciphertext) {
    
    $freqFr = [
        'a' => 7.636, 'b' => 0.901, 'c' => 3.260, 'd' => 3.669, 'e' => 14.715,
        'f' => 1.066, 'g' => 0.866, 'h' => 0.737, 'i' => 7.529, 'j' => 0.545,
        'k' => 0.049, 'l' => 5.456, 'm' => 2.968, 'n' => 7.095, 'o' => 5.378,
        'p' => 3.021, 'q' => 1.362, 'r' => 6.553, 's' => 7.948, 't' => 7.244,
        'u' => 6.311, 'v' => 1.628, 'w' => 0.114, 'x' => 0.387, 'y' => 0.308, 'z' => 0.136
    ];

    $bestcles = [];
    for ($cle = 0; $cle < 26; $cle++) {
        $decryptedText = DechiffrementCesar($ciphertext, $cle);
        $score = 0;
        for ($j = 0; $j < strlen($decryptedText); $j++) {
            $char = $decryptedText[$j];
            if (array_key_exists($char, $freqFr)) {
                $score += $freqFr[$char];
            }
        }
        $bestcles[] = ['score' => $score, 'cle' => $cle, 'text' => $decryptedText];
    }

 
    usort($bestcles, function($a, $b) {
        return $b['score'] <=> $a['score'];
    });

 
    return array_slice($bestcles, 0, 5);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ciphertext = $_POST['ciphertext'];
    $results = frequencyAnalysis($ciphertext);
    header('Location: question1.php?results=' . urlencode(json_encode($results)));
    exit();
}
?>