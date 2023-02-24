<?php require base_path('views/templates/header.php') ?>
<?php require base_path('views/templates/nav.php') ?>
<?php require base_path('views/templates/banner.php') ?>

<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
        <a href="/notes" class="text-blue-500">
            <button class="underline" >Go back</button>
        </a>
    </p>

    <p><?= htmlspecialchars($note['body']) ?></p>
    <footer class="mt-6">
        <a href="/note/edit?id=<?= $note['id'] ?>" class="inline-flex justify-center rounded-md border border-transparent bg-gray-500  py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-offset-2">Edit</a>
    </footer>
</div>
</main>

<?php require base_path('views/templates/footer.php') ?>
    <form class="mt-6" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" value="<?= $note['id'] ?>" name="id">
        <button class="text-sm text-red-500">Delete</button>
    </form>
