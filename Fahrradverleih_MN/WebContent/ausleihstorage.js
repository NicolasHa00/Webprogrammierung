function init() {
	var fahrradArray = bestandAbrufen();
	for (var i = 0; i < fahrradArray.length; i++) {
		var fahrradEintrag = fahrradArray[i];
		var value = JSON.parse(localStorage[fahrradEintrag]);
		inHTMLschreiben(fahrradEintrag, value);
	}
}

window.onload = init;

function bestandAbrufen() {
	var fahrradArray = localStorage.getItem("fahrradArray");
	if (!fahrradArray) {
		fahrradArray = [];
		localStorage.setItem("fahrradArray", JSON.stringify(fahrradArray));
	} else {
		fahrradArray = JSON.parse(fahrradArray);
	}
	return fahrradArray;
}

function fahrradHinzufügen(div) {
	var fahrradArray = bestandAbrufen();
	var zeit = new Date();
	var text;

	switch (div) {
	case "1":
		text = "(" + zeit
				+ "): Ein Herrenfahrrad wurde erfolgreich ausgeliehen!";
		break;
	case "2":
		text = "(" + zeit
				+ "): Ein Damenfahrrad wurde erfolgreich ausgeliehen!";
		break;
	case "3":
		text = "(" + zeit
				+ "): Ein Kinderfahrrad wurde erfolgreich ausgeliehen!";
		break;
	case "4":
		text = "(" + zeit
				+ "): Ein Mountainbike wurde erfolgreich ausgeliehen!";
		break;
	case "5":
		text = "(" + zeit + "): Ein E-Bike wurde erfolgreich ausgeliehen!";
		break;
	default:
		text = "Sie haben bisher kein Fahrrad ausgeliehen!";

	}
	var value = text;
	if (value != "Sie haben bisher kein Fahrrad ausgeliehen!") {
		var eintragText = {
			'value' : value
		};
		var eintragIndex = div + "Verleih: " + zeit.getTime();
		localStorage.setItem(eintragIndex, JSON.stringify(eintragText));
		fahrradArray.push(eintragIndex);
		localStorage.setItem("fahrradArray", JSON.stringify(fahrradArray));
		inHTMLschreiben(eintragIndex, eintragText);
	}
}

function fahrradLöschen(fahrrad) {
	var fahrradEintrag = fahrrad.target.id;
	var idRückgabe = "";
	console.log(fahrrad.target.id);
	var fahrradArray = bestandAbrufen();
	if (fahrradArray) {
		for (var i = 0; i < fahrradArray.length; i++) {
			if (fahrradEintrag == fahrradArray[i]) {
				idRückgabe = fahrrad.target.id.slice(0,1);
				fahrradArray.splice(i, 1);
			}
		}
		localStorage.removeItem(fahrradEintrag);
		localStorage.setItem('fahrradArray', JSON.stringify(fahrradArray));
		ausDatenbankEntfernen(idRückgabe);
		ausHTMLentfernen(fahrradEintrag);
	}
}

function inHTMLschreiben(fahrradEintrag, ItemObj) {
	var eintraege = document.getElementById("verlieheneRaeder");
	var eintrag = document.createElement('li');
	eintrag.setAttribute('id', fahrradEintrag);
	eintrag.innerHTML = ItemObj.value;
	eintraege.appendChild(eintrag);
	eintrag.onclick = fahrradLöschen;
}

function ausHTMLentfernen(fahrradEintrag) {
	var eintrag = document.getElementById(fahrradEintrag);
	eintrag.parentNode.removeChild(eintrag);
	document.location.reload(true);
}

function ausDatenbankEntfernen(idRückgabe) {

	$.post("Servlet_JDBC_Connection2", {
		rückgabeId : idRückgabe
	});
}
