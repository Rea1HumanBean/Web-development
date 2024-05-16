<?php

require_once(__DIR__ . '/../config/db_connection/db_connect.php');
function redirectToHome(): void
{
	header('Location: ../index.php');
	exit();
}

$pdo = connectToDatabase();

$sql = "SELECT * FROM web.ad";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (is_array($results)) {
	foreach ($results as $row) {
		echo '<tr>';
		$numColumns = count($row);
		$index = 0;

		foreach ($row as $cell) {
			$index++;
			if ($index < $numColumns) {
				echo "<td>" . htmlspecialchars($cell) . "</td>";
			}
		}
		echo '</tr>';
	}
}


