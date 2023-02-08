<?php require('views/templates/header.php') ?>
<?php require('views/templates/nav.php') ?>
<?php require('views/templates/banner.php') ?>

<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
        <a href="/notes" class="text-blue-500">
            <button class="underline" >Go back</button>
        </a>
    </p>

    <p><?= htmlspecialchars($note['body']) ?></p>
</div>
</main>

<?php require('views/templates/footer.php') ?>
