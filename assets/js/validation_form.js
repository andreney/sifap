/*
 *	Início bloco javascript para validação de campos a serem submetidos
 */

//Verifica se o campo foi preenchido e contém no mínimo três caracteres.
function validar_campo(input){
	var campo = document.getElementById(input);
	var valor_campo = campo.value;
	if(valor_campo == "" || valor_campo == null || valor_campo.length  < 3){
		campo.classList.add("is-invalid");
		campo.focus();
		return false;
	}else{
		campo.classList.remove("is-invalid");
		return true
	}
}

//Verifica se o campo está em branco.
function validar_nulo(input){
	var campo = document.getElementById(input);
	var valor_campo = campo.value;
	if(valor_campo == ""){
		campo.classList.add("is-invalid");
		campo.focus();
		return false;
	}else{
		campo.classList.remove("is-invalid");
		return true
	}
}

//Verifica se o campo está em branco e se é um email válido.
function validar_email(input){
	var campo = document.getElementById(input);
	var valor_campo = campo.value;
	if(valor_campo == "" || !checar_email_valido(valor_campo)){
		campo.classList.add("is-invalid");
		campo.focus();
		return false;
	}else{
		campo.classList.remove("is-invalid");
		return true
	}
}
function checar_email_valido(email) {
	var padrao = new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
	return padrao.test(email);
}

//Verifica se existe uma opção selecionada.
function validar_radio(input){
	var campo = document.getElementsByName(input);
	var aux = 0;
	for (var i = 0; i < campo.length; i++) {
		if (campo[i].checked) {
			//alert("Escolheu: " + campo[i].value);
			console.log("Escolheu: " + campo[i].value);
			aux++;
		}
	}
	if(aux == 0){
		$('#erro_sexo').html("<small class='form-text text-muted' id='textSexo'><font color='#DA3148'>Por favor selecione uma opção.</font></small>");
		//document.form.isexo[0].focus();
	}else{
		$('#erro_sexo').hide();
	}
}

function validar_radio(input){
	var campo = document.getElementsByName(input);
	var aux = 0;
	for (var i = 0; i < campo.length; i++) {
		if (campo[i].checked) {
			//alert("Escolheu: " + campo[i].value);
			console.log("Escolheu: " + campo[i].value);
			aux++;
			return true;
		}
	}
	if(aux == 0){
		$('#erro_tramite').html("<small class='form-text text-muted' id='tramite_txt'><font color='#DA3148'>Por favor selecione uma opção.</font></small>");
		//document.form.isexo[0].focus();
	}else{
		return false;
		$('#erro_tramite').hide();
	}
}

//Verifica se o campo de data com plugin datepricker está vazio.
function validar_data(input){
	var campo = document.getElementById(input);
	var valor_campo = campo.value;
	if(valor_campo == "" || valor_campo == null){
		campo.classList.add("is-invalid");
		return false;
	}else{
		campo.classList.remove("is-invalid");
		return true
	}
}

/*
 *	Fim bloco javascript para validação de campos a serem submetidos
 */