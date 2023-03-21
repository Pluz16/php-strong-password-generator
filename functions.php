<?php
function generaPassword($lunghezza, $numeri = false, $lettere = false, $simboli = false, $ripetizione = false) {
    $caratteri = '';
    if ($numeri) {
        $caratteri .= '0123456789';
    }
    if ($lettere) {
        $caratteri .= 'abcdefghijklmnopqrstuvwxyz';
    }
    if ($simboli) {
        $caratteri .= '!@#$%^&*()-=_+[]{}|;:,.<>?';
    }
    if (!$caratteri) {
        $caratteri = 'abcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-=_+[]{}|;:,.<>?';
    }
    $password = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        do {
            $carattere = $caratteri[rand(0, strlen($caratteri) - 1)];
            // carattere maiuscolo con il 50% di probabilità
            if (ctype_alpha($carattere) && rand(0, 1)) {
                $carattere = strtoupper($carattere);
            }
        } while (!$ripetizione && strpos($password, $carattere) !== false);
        $password .= $carattere;
    }
    return $password;
}
                ?>