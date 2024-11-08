<?php
function convertCurrency($amount, $rate) {
    return $amount * $rate;
}
echo convertCurrency(100, 0.85); // Misalnya, USD ke EUR