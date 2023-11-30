<?php

include __DIR__ . '/functions/functions.php';
include __DIR__ . '/partials/header.php';

$_SESSION['newpassword'] = '';

$error = passGenerator();

// var_dump($error);
?>


<?php if (isset($error) && ($error === 'Inserisci un numero valido') || ($error === 'Inserisci un parametro')) { ?>
    <div class="alert alert-danger">
        <?php echo $error ?>
    </div>
<?php } ?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" class='py-5'>
    <input type="number" min="8" max="20" name="passLength">
    <button type="submit" class="btn btn-primary">Genera</button>
    <button type='reset' class="btn btn-secondary">Reset</button>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="numbers" id="flexCheckDefault" name='parametri[]'>
        <label class="form-check-label" for="flexCheckDefault">
            Numeri
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="letters" id="flexCheckDefault" name='parametri[]'>
        <label class="form-check-label" for="flexCheckDefault">
            Lettere
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="symbols" id="flexCheckDefault" name='parametri[]'>
        <label class="form-check-label" for="flexCheckDefault">
            Simboli
        </label>
    </div>
</form>


<?php include __DIR__ . '/partials/footer.php'; ?>