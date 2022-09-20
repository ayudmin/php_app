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

			'Biology',
			'Chemistry',
			'Physics'
		];

    ?>
	<h1>Recommended Books</h1>

	<ul>
		<?php foreach($books as $book) : ?>
			<li><?= $book; ?></li>
		<?php endforeach; ?>
	</ul>

</body>
</html>