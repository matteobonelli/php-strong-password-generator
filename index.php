<?php

include __DIR__ . '/functions/functions.php';
include __DIR__ . '/partials/header.php';

$_SESSION['newpassword'] = '';

$newPass = passGenerator();
var_dump($newPass);
?>


<?php if (isset($newPass) && ($newPass === 'Inserisci un numero valido')) { ?>
    <div class="alert alert-danger">
        <?php echo $newPass ?>
    </div>
<?php } ?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" class='py-5'>
    <input type="number" min="8" max="20" name="passLength">
    <button type="submit" class="btn btn-primary">Genera</button>
    <button type='reset' class="btn btn-secondary">Reset</button>
</form>

<?php include __DIR__ . '/partials/footer.php'; ?>