<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style/Task_3.css">
	<title>Задача 3</title>
</head>
<body>
	<form method="POST" action="save.php">
		<label for="email">Email</label>
		<input id="email" type="email" name="email" required>

		<label for="category">Category</label>
		<select name="category" id="category">
			<?php

			$categories =opendir('categories');

			while ($file = readdir($categories))
			{
				if (is_dir('categories/'.$file) && $file != '.' && $file != '..') {
					echo '<option value="'.$file.'">'.$file.'</option>';
				}
			}
			?>
		</select>

		<label for="title">Title</label>
		<input id="title" type="text" name="title" required>

		<label for="description">Description</label>
		<textarea id="description" rows="3" cols="20" name="description"></textarea>

		<input type="submit" value="save">
	</form>

	<div class="TableOfAnnouncement">
		<table>
			<caption><span style="color: blue; font-size: 20px" >Advertisement list</span></caption>
			<thead>
				<tr>
					<th>Category</th>
					<th>Title</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php
					$dir = opendir("categories");

					while ($category = readdir($dir)) {
						if ($category != '.' && $category != '..' && is_dir('categories/'.$category)) {
							$files = scandir('categories/'.$category);

							foreach ($files as $file) {
								if ($file != '.' && $file != '..') {
									$filePath = 'categories/'.$category.'/'.$file;
									$content = file_get_contents($filePath);

									echo '<tr>';
									echo '<td>'.basename($category).'</td>';
									echo '<td>'.pathinfo($file, PATHINFO_FILENAME).'</td>';
									echo '<td>'.$content.'</td>';
									echo '</tr>';
								}
							}
						}
					}
					?>
				</tr>
			</tbody>
		</table>
	</div>

</body>
</html>