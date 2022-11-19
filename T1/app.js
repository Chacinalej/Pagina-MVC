function validar(){
	var nombre, apellido, usuario, clave, ced, ExpCla, ExpNom;

	nombre = document.getElementById("nombre").value
	apellido = document.getElementById("apellido").value
	usuario = document.getElementById("usuario").value
	clave = document.getElementById("clave").value
	ced = document.getElementById("ced").value
	fecha = document.getElementById("fecha").value

	ExpCla = /^[a-zA-Z0-9\_\-]{8,10}$/;
	ExpNom = /^[a-zA-Z\_\-]{1,40}$/;
	

	if(nombre === ""|| apellido === ""|| usuario===""|| clave===""||ced===""||fecha===""){
		alert("Todos los campos son obligatorios")
		return false
	}
	else if(nombre.length>30||apellido.length>30){
		alert("El nombre y apellido solo deben tener 20 caracteres como maximo ")
		return false
	}
	else if(usuario.length>20 ||clave.length>20){
		alert("El usuario solo debe tener 20 caracteres como maximo")
		return false
	}
	else if(isNaN(ced)){
		alert("Por favor ingrese correctamente su cedula de identidad")
		return false
	}
	else if(!ExpCla.test(clave)){
		alert("La clave debe tener de 8 a 10 caracteres")
		return false
	}
	else if(!ExpNom.test(nombre)){
		alert("El nombre no debe tener numeros")
		return false
	}
	else if(!ExpNom.test(apellido)){
		alert("El Apellido no debe tener numeros")
		return false
	}
}

