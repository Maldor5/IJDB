<p><?=$result?> jokes have been submitted to the Internet Joke Database.</p>
<br>
<table>
	<tr>
		<td>id</td>
		<td>joke</td>
		<td>author</td>
		<td>email</td>
		<td>date added</td>
	</tr>
	<?php foreach ($jokes as $joke): ?>
		<tr>
			<td><?=htmlspecialchars($joke['id'], ENT_QUOTES, 'UTF-8')?></td>
			<td><?=htmlspecialchars($joke['jokeText'], ENT_QUOTES, 'UTF-8')?></td>
			<td><?=htmlspecialchars($joke['authorName'], ENT_QUOTES, 'UTF-8')?></td>
			<td> <a href="mailto:<?=htmlspecialchars($joke['authorEmail'], ENT_QUOTES, 'UTF-8')?>"><?=htmlspecialchars($joke['authorEmail'], ENT_QUOTES, 'UTF-8')?></a></td>
			<td>
				<form action="deletejoke.php" method="post">
					<input type="hidden" name="id" value="<?=$joke['id']?>">
					<input type="submit" value="Delete">
				</form>
			</td>
		</tr>
	<?php endforeach ?>
</table>