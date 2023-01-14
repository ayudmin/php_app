<?php require('views/templates/header.php') ?>
<?php require('views/templates/nav.php') ?>
<?php require('views/templates/banner.php') ?>

<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php foreach ($notes as $note ) : ?>
        <li><?= $note['body'] ?></li>
    <?php endforeach; ?>
</div>
</main>

<?php require('views/templates/footer.php') ?>