function bestandsupdate(id) {
	$.post("/Servlet_JDBC_Connection", {
		anzahl : 1,
		id : id
	}, function(id) {
		alert("Das Fahrrad mit der ID " + id + "wurde erfolgreich ausgeliehen!");
	});
};