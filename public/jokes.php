<?php

	try {

		//

		include_once __DIR__ . '/../includes/DatabaseConnection.php';
		include_once __DIR__ . '/../includes/DatabaseFunctions.php';

		$result = totalJokes($pdo);

		$jokes = showJokesTable($pdo);

		ob_start();

		include __DIR__ . '/../templates/jokes.html.php';

		$output = ob_get_clean();

		
	} catch (PDOException $e) {

		$title = 'An error occured!';

		$output = 'Unable to connect to the database server: ' . $e->getMessage() . $e->getFile() . $e->getLine();
		
	}

	
include __DIR__ . '/../templates/layout.html.php';	
?>