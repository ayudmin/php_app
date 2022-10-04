<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<style type="text/css">

</style>
<body>
  	<h1>Recommended Books</h1>
		<ul>
			<?php foreach ( $filteredbooks as $book) : ?>
				<li>
					<a href="<?= $book['purchaseUrl'] ?>">
						<?= $book['name'] ?>
					</a>
					<p> Categor: <?= $book['category'] ?>
					</p>
					<p> Year released: <?= $book['yearReleased'] ?>
					</p>
				</li>
			<?php endforeach; ?>
		</ul>
</body>
</html>
