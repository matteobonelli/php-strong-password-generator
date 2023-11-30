<?php
function passGenerator()
{
    if (isset($_GET['passLength'])) {
        if (($_GET['passLength'] !== '') && ($_GET['passLength'] <= 20) && ($_GET['passLength'] >= 8)) {
            $passLength = $_GET['passLength'];
            $symbols = '!?&%$>^+-*/()[]{}@#_=';
            $letters_min = 'abcdefghijklmnopqrstuvwxyz';
            $letters = $letters_min . strtoupper($letters_min);
            $numbers = '1234567890';
            $newPass = '';
            $allCharacters = '';
            if (isset($_GET['parametri']) && (!empty($_GET['parametri']))) {
                if (count($_GET['parametri']) === 3) {
                    $allCharacters = $symbols . $letters . $numbers;
                } else {
                    $parameters = $_GET['parametri'];
                    for ($i = 0; $i < count($parameters); $i++) {
                        $newString = '';
                        $stringCharacter = '$' . $parameters[$i];
                        if ($stringCharacter === '$numbers') {
                            $newString = $numbers;
                        } else if ($stringCharacter === '$letters') {
                            $newString = $letters;
                        } else if ($stringCharacter === '$symbols') {
                            $newString = $symbols;
                        }
                        $allCharacters .= $newString;
                    }
                }
            } else {
                return 'Inserisci un parametro';
            }

            while (strlen($newPass) < $passLength) {
                $newWord = $allCharacters[rand(0, strlen($allCharacters) - 1)];
                if (!strpos($newPass, $newWord)) {
                    $newPass .= $newWord;
                }
            }
            $_SESSION['newpassword'] = $newPass;
            header('Location: passgenerated.php');
            die();
        }
        return 'Inserisci un numero valido';
    }
    return;
}



?>