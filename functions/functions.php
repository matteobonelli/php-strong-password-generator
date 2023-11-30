<?php
function passGenerator()
{
    if (isset($_GET['passLength'])) {
        if (($_GET['passLength'] !== '') && ($_GET['passLength'] <= 20) && ($_GET['passLength'] >= 8)) {
            $passLength = $_GET['passLength'];
            $symbols = '!?&%$>^+-*/()[]{}@#_=';
            $letters = 'abcdefghijklmnopqrstuvwxyz';
            $upperLetter = strtoupper($letters);
            $numbers = '1234567890';
            $newPass = '';
            while (strlen($newPass) < $passLength) {
                $allCharacters = $symbols . $letters . $upperLetter . $numbers;
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