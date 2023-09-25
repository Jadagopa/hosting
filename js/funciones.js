function validateEmail(emailField){
    
	// Get our input reference.
	//var emailField = document.getElementById(emailacomprovar);
	
	// Define our regular expression.
	var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

	// Using test we can check if the text match the pattern
	if( validEmail.test(emailField) ){
		//alert('Email is valid, continue with form submission');
		return true;
	}else{
		alert('Correo invalido, es necesirio un correo valido');
		return false;
	} 
} 

function agregarUsuarios(nombre,apellido,email,contraseña){
	
	cadena="nombre=" + nombre + 
			"&apellido=" + apellido +
			"&email=" + email +
			"&contraseña=" + contraseña;

	$.ajax({
		type:"POST",
		url:"php/agregarUsuarios.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#pag_princ').load('PHP/login.php');
				alert("Usuario creado correctamente. Introduce tus datos y entra con tu cuenta");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregarConectados(email,contraseña){
	cadena="email=" + email + 
			"&contraseña=" + contraseña;
			
	$.ajax({
		type:"POST",
		url:"php/agregarConectados.php",
		data:cadena,
		success:function(r){
			alert(r);
			if(r==1){
				$('#pag_princ').load('inicio.php');
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}




                        