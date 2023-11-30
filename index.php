<?php

include __DIR__ . '/functions/functions.php';

$newPass = passGenerator();
var_dump($newPass);
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
    <?php if (isset($newPass) && ($newPass !== 'Inserisci un numero valido')) { ?>
        <div class='alert alert-success'>
            <?php echo $newPass ?>
        </div>
    <?php } else if (isset($newPass)) { ?>
            <div class="alert alert-danger">
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