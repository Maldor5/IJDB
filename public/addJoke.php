<?php

	if (isset($_POST['jokeText'])) {
		try {

			include_once __DIR__ . '/../includes/DatabaseConnection.php';
			include_once __DIR__ . '/../includes/DatabaseFunctions.php';

			InsertJoke($pdo, $_POST['jokeText'], 2);

			header('location: jokes.php');

			
		} catch (PDOException $e) {

			$title = 'An Error has occured.';

			$output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
			
		}
	} else {

		$title = 'Add new joke';

		ob_start();

		include __DIR__ . '/../templates/addjoke.html.php';

		$output = ob_get_clean();
	}

include __DIR__ . '/../templates/layout.html.php';
?>