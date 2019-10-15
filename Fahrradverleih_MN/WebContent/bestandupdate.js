function bestandsupdate(id) {
	var div = "";
	var bool = "";
	var text1 = "Das Fahrrad wurde erfolgreich ausgeliehen! Sie können es nun einfach an einem Standort abholen. Hierbei entscheidet sich dann auch die Preisklasse.";
	var text2 = "Das Fahrrad konnte nicht ausgeliehen werden, da keines mehr verfügbar ist! Wählen Sie ein anderes Modell.";
	
	$.post("Servlet_JDBC_Connection", {
		id : id
	}, function(verleihString) {
		div = verleihString.slice(0,1);
		console.log("ID ist: " + div);
		bool = verleihString.slice(1);
		console.log("ErlaubeVerleih ist: " + bool);
		
		var container = document.getElementById(div);
		if (bool == "true") {
			container.innerHTML = text1;
			fahrradHinzufügen(div);
		} else {
			container.innerHTML = text2;
		}
	});
}
