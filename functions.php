<?php
function generaPassword($lunghezza) {
                        $caratteri = 'abcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-=_+[]{}|;:,.<>?';
                        $password = '';
                        for ($i = 0; $i < $lunghezza; $i++) {
                            $carattere = $caratteri[rand(0, strlen($caratteri) - 1)];
        // carattere maiuscolo con il 50% di probabilità
                            if (ctype_alpha($carattere) && rand(0, 1)) {
                                $carattere = strtoupper($carattere);
                            }
                            $password .= $carattere;
                        }
                        return $password;
                    }
                ?>