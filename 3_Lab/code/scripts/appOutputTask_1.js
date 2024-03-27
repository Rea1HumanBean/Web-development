function updateOutput() {
	var message = document.getElementById("message").value;
	var outputField = document.getElementById("outputField");
	var xhr = new XMLHttpRequest();

	xhr.open("POST", "Task_1.1.php", true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

	xhr.onreadystatechange = function() {
		if (xhr.readyState === 4 && xhr.status === 200) {
			outputField.textContent = xhr.responseText;
			outputField.style.color = " #aa00ff";
		}
	};

	var text = encodeURIComponent(message);
	xhr.send("message=" + text);
}