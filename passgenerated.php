<?php
include __DIR__ . '/partials/header.php';

if (empty($_SESSION['newpassword'])) {
    header('Location: index.php');
    die();
} else {
    $newPass = $_SESSION['newpassword'];
}

?>

<main class="container">
    <div class="alert alert-success">
        <?php echo $newPass ?>
    </div>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>