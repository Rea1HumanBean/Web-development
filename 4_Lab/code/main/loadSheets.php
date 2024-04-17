<?php

include 'log.php';
include 'posFirstFreeCell.php';
require __DIR__.'/../../vendor/autoload.php';

use Google\Client as Google_Client;
use Google\Spreadsheet\ServiceRequestFactory;
use Google\Spreadsheet\DefaultServiceRequest;

try{
	$client = new Google_Client;
	$client->setApplicationName("LAB_4");
	$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
	$client->addScope('https://www.googleapis.com/auth/spreadsheets');
	$client->setAuthConfig(__DIR__.'/credentials.json');
	$client->setAccessType("offline");
	$client->useApplicationDefaultCredentials();

	$service = new Google_Service_Sheets($client);
	$spreadsheetId = '1J-pwaAyc7dVmDIrF26H_7s-aZLLoOAvrXuykSU8Qwu4';

	$response = $service->spreadsheets_values->get($spreadsheetId, 'Лист1!A2:D');
	$values = $response->getValues();

	if(is_array($values)) {
		foreach ($values as $row) {
			echo '<tr>';
			foreach ($row as $cell) {
				echo "<td>" . htmlspecialchars($cell) . "</td>";
			}
			echo '</tr>';
		}
	} else {
		logError("No data found");
		echo "<tr><td colspan='4'>No data found</td></tr>";
	}

}catch(Exception $e){
	logError($e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile() . ' ' . $e->getCode);
}