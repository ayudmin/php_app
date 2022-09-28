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

			],

			[
				"name" => "Mathematics",
				"category" => "Science",
				"yearReleased" => "1902",
				"purchaseUrl" => "http.example.com"

			],

		]; 	

		function filterByCategory($books, $category){

			$filteredByCategory = [];

			foreach($books as $book){

				if ($book['category'] ===  $category){

					$filteredByCategory[] = $book;
				}

			}

			return $filteredByCategory;

		}		

    ?>

  	<h1>Recommended Books</h1>
		<ul>
			<?php foreach (filterByCategory($books, 'Science') as $book) : ?>
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