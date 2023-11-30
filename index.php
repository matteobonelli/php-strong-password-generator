<?php
function passGenerator($passLength)
{
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
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
    return $newPass;
}

if (isset($_GET['passLength']) && ($_GET['passLength'] !== '') && ($_GET['passLength'] <= 20) && ($_GET['passLength'] >= 8)) {
    $passLength = $_GET['passLength'];
    $newPass = passGenerator($passLength);
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php if (isset($newPass)) { ?>
        <div class='alert alert-success'>
            <?php echo $newPass ?>
        </div>
    <?php } ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" class='py-5'>
        <input type="number" min="8" max="20" name="passLength">
        <button type="submit" class="btn btn-primary">Genera</button>
        <button type='reset' class="btn btn-secondary">Reset</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>