function divUpdate() {
	$.get("Servlet_JDBC_Connection", function(id, erlaubeVerleih) {
		var div = id;
		var bool = erlaubeVerleih;
	});

	var container = document.getElementById(div);
	if (bool == "true") {
		container.innerHTML = "Das Fahrrad wurde erfolgreich ausgeliehen! Sie können es nun einfach an einem Standort abholen. Hierbei entscheidet sich dann auch die Preisklasse."
	} else {
		container.innerHTML = "Das Fahrrad konnte nicht ausgeliehen werden, da keines mehr verfügbar ist! Wählen Sie ein anderes Modell.";
	}
	
}
