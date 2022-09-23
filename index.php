<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<style type="text/css">

</style>
<body>

	<?php 

		$books = [

			[
				"name" => "Biology",
				"category" => "Science",
				"yearReleased" => "1902",
				"purchaseUrl" => "http.example.com"

			],

			[
				"name" => "History",
				"category" => "Arts",
				"yearReleased" => "1902",
				"purchaseUrl" => "http.example.com"

			]
		];

    ?>
	<h1>Recommended Books</h1>

	<?php foreach ($books as $book) : ?>

		<ul>

			<a href="<?= $book['purchaseUrl'] ?>">
				<?= $book['name'] ?>
			</a>
			<p>
				<?= $book['category'] ?>
			</p>
			<p>
				<?= $book['yearReleased'] ?>
			</p>
			
		</ul>

	<?php endforeach; ?>

</body>
</html>