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
	if (value != '') {
		var eintragText = {
			'value' : value
		};
		var eintragIndex = "Verleih: " + zeit.getTime();
		localStorage.setItem(eintragIndex, JSON.stringify(eintragText));
		fahrradArray.push(eintragIndex);
		localStorage.setItem("fahrradArray", JSON.stringify(fahrradArray));
		inHTMLschreiben(fahrradEintrag, eintragText);
	}
}

/*
 * function toDoLöschen(e) { var fahrradEintrag = e.target.id; var fahrradArray =
 * bestandAbrufen(); if (fahrradArray) { for (var i = 0; i <
 * fahrradArray.length; i++) { if (fahrradEintrag == fahrradArray[i]) {
 * fahrradArray.splice(i, 1); } } localStorage.removeItem(fahrradEintrag);
 * localStorage.setItem('fahrradArray', JSON.stringify(fahrradArray));
 * ausDOMentfernen(fahrradEintrag); } }
 */

function inHTMLschreiben(fahrradEintrag, ItemObj) {
	var eintraege = document.getElementById("verlieheneRaeder");
	var eintrag = document.createElement('li');
	eintrag.setAttribute('id', fahrradEintrag);
	eintrag.innerHTML = ItemObj.value;
	eintraege.appendChild(eintrag);
	//eintrag.onclick = toDoLöschen;
}

/*function ausDOMentfernen(fahrradEintrag) {
	var eintrag = document.getElementById(fahrradEintrag);
	eintrag.parentNode.removeChild(eintrag);
}*/

/*function allesLöschen() {
	localStorage.clear();
	var ItemList = document.getElementById("verlieheneRaeder");
	var eintraege = ItemList.childNodes;
	for (var i = eintraege.length - 1; i >= 0; i--) {
		ItemList.removeChild(eintraege[i]);
	}
	var fahrradArray = bestandAbrufen();
}*/
