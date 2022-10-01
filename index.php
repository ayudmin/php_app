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
				"yearReleased" => "2000",
				"purchaseUrl" => "http.example.com"

			],

			[
				"name" => "History",
				"category" => "Arts",
				"yearReleased" => "1902",
				"purchaseUrl" => "http.example.com"

			],

			[
				"name" => "Mathematics",
				"category" => "Science",
				"yearReleased" => "1902",
				"purchaseUrl" => "http.example.com"

			],

		]; 	

		function filter($items, $fn){

			$filtereditems = [];

			foreach($items as $item){

				if ($fn($item)){

					$filtereditems[] = $item;
				}

			}

			return $filtereditems;

		}	

		$filteredbooks = filter($books, function ($book) {

			return $book['yearReleased'] < 2000;

		});

    ?>

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