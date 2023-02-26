<?php

	function totalJokes($pdo) {

		$stmt = $pdo->prepare('SELECT COUNT(*) FROM `ijdb`.`jokes`');
		$stmt->execute();
		$row = $stmt->fetch();
		return $row[0];

	}

	function showJokesTable($pdo) {

		$jokes = $pdo->query('SELECT `id`, `jokeText`, `jokeDate`, `authorName`, `authorEmail` FROM `ijdb`.`jokes` INNER JOIN `ijdb`.`author` ON `ijdb`.`jokes`.`id` = `ijdb`.`author`.`authorId`');

		return $jokes;

	}

	function deleteJoke($pdo, $id) {
		
		$stmt = $pdo->prepare('DELETE FROM `ijdb`.`jokes` WHERE `id` = :id');

		$values = [':id' => $id];

		$stmt->execute($values);
	}

	function insertJoke($pdo, $joketext, $authorId) {
		$stmt = $pdo->prepare('INSERT INTO `ijdb`.`jokes` (`jokeText`, `jokeDate`, `authorId`) VALUES (:joketext, :jokedate, :authorId)');
		$values = [
		':jokeText' => $joketext,
		':authorId' => $authorId,
		':jokeDate' => date('Y-m-d')
		];
		$stmt->execute($values);
}

?>