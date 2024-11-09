<?php
function shuffleWords($sentence) {
    $words = explode(" ", $sentence);
    shuffle($words);
    return implode(" ", $words);
}
echo shuffleWords("Saya belajar PHP dengan giat");
