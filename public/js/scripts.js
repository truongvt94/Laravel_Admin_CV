function ConfirmDelete(mess){
	if (window.confirm(mess)) {
		return true;
	}
	return false;
}

$("div.alert").delay(4000).slideUp();

$("div.register").delay(4000).slideUp();
