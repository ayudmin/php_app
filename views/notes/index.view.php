<?php require base_path('views/templates/header.php') ?>
<?php require base_path('views/templates/nav.php') ?>
<?php require base_path('views/templates/banner.php') ?>

<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <ul>
        <?php foreach ($notes as $note ) : ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500  hover:underline">
                    <?= htmlspecialchars($note['body']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <p class="mt-6">
        <a href="/notes/create" class="inline-flex justify-center rounded-md border border-transparent bg-green-700  py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2">Create Note</a>
    </p>
</div>
</main>

<?php require base_path('views/templates/footer.php') ?>
