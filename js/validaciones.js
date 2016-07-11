function validacionAgregarParque()
{
	var nombre, descripcion, fechaF, pais, ciudad, direccion, expresion;
	nombre= document.getElementById("nombre").value;
	descripcion= document.getElementById("descripcion").value;
	direccion= document.getElementById("direccion").value;
	fechaF= document.getElementById("fechaF").value;
	lugar= document.getElementById("lugar").value;
	
	
	if (nombre ==="" || descripcion ==="" || direccion ==="" || fechaF ==="" || lugar ==="")
	{
		alert("todos los campos son obligatorios");
		return false;	
	} 
	else if (nombre.length>50)
	{
		alert("el nombre del parque es muy largo");
		return false;
	}
	else if (descripcion.length>500)
	{
		alert("la descripcion del parque es muy larga");
		return false;
	}
	else if (direccion.length>100)
	{
		alert("la direccion del parque es muy larga");
		return false;
	}
	
}


function validacionModificarParque()
{
	var nombre, descripcion, direccion, fechaf, lugar;
	nombre= document.getElementById("nombre").value;
	descripcion= document.getElementById("descripcion").value;
	direccion= document.getElementById("direccion").value;
	fechaF= document.getElementById("fechaF").value;
	lugar= document.getElementById("lugar").value;
	
	if (nombre ==="" && descripcion ==="" && direccion ==="" && fechaF ==="" && lugar ==="")
	{
		alert("debe rellenar al menos un campo");
		return false;	
	}
	
}

function validacionAgregarAtraccion()
{
	var nombre, descripcion, estaturaM, duracion, magic, entrada, capacidad, codigoA, codigoP;
	nombre= document.getElementById("nombre").value;
	descripcion= document.getElementById("descripcion").value;
	estaturaM= document.getElementById("estaturaM").value;
	duracion= document.getElementById("duracion").value;
	magic= document.getElementById("magic").value;
	entrada= document.getElementById("entrada").value;
	capacidad= document.getElementById("capacidad").value;
	codigoA= document.getElementById("codigoA").value;
	codigoP= document.getElementById("codigoP").value;
	
	
	if (nombre ==="" || descripcion ==="" || duracion ==="" || magic ==="" || entrada ==="" || capacidad ==="" || codigoA ==="" || codigoP ==="")
	{
		alert("todos los campos son obligatorios");
		return false;
	}
	
}

function validacionEliminarParque()
{
	var codigoP;
	codigoP= document.getElementById("codigoP").value;
	
	if (codigoP === "")
	{
		alert ("debe de seleccionar un parque");
		return false;
	}
}