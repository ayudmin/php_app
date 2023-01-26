<?php require('views/templates/header.php') ?>
<?php require('views/templates/nav.php') ?>
<?php require('views/templates/banner.php') ?>

<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <ul>
        <?php foreach ($notes as $note ) : ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500  hover:underline">
                    <?= $note['body'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <p class="mt-6">
        <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
    </p>
</div>
</main>

<?php require('views/templates/footer.php') ?>
