<?php
include('partials/header.php');
?>

<main>
    <?php include('partials/banner.php'); ?>
    <section class="container">
        <?php
        generate_portfolio(2, 4);
        ?>


</main>

<?php
include_once('partials/footer.php')
?>