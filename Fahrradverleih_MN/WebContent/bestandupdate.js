function bestandsupdate(id) {
	$.post("Servlet_JDBC_Connection", {
		id : id
	}, function() {
		alert("Das Fahrrad mit der ID " + id + " wurde erfolgreich ausgeliehen! Sie können es nun einfach an einem Standort abholen. Hierbei entscheidet sich dann auch die Preisklasse.");
	});
}
