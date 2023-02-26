<?php

	try {


		include_once __DIR__ . '/../includes/DatabaseConnection.php';
		include_once __DIR__ . '/../includes/DatabaseFunctions.php';

		deletJoke($pdo, $_POST['id']);

		header('location: jokes.php');
		
	} catch (PDOException $e) {

		$title = 'An error occured!';

		$output = 'Unable to connect to the database server: ' . $e->getMessage() . $e->getFile() . $e->getLine();
		
	}

include __DIR__ . '/../templates/layout.html.php';

?>