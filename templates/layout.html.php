<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$title?></title>
</head>
<body>

	<header>
			<h1>Internet Jokes Database</h1>
		
	</header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="jokes.php">Jokes List</a></li>
				<li><a href="addJoke.php">Add Joke</a></li>
			</ul>
		</nav>
		<main><?=$output?></main>

	<footer>
		&copy; IJDB <?=DATE('Y')?>
	</footer>

</body>
</html>