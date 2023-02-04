<?php require('views/templates/header.php') ?>
<?php require('views/templates/nav.php') ?>
<?php require('views/templates/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="POST">
            <label for="body">Description</label>
            <div>
                <textarea  id="body" name="body"></textarea>
            </div>
            <p>
                <button type="submit">Create Post</button>
            </p>
        </form>
    </div>
</main>

<?php require('views/templates/footer.php') ?>
