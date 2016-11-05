
function ingresar()
{
	var f=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			boton: "ingresar",
			patente: $("#patente").val(),
		}});
}

function login()
{
	var f=$.ajax(
		{
			url: "nexo.php",
			type: "post",
			data:
			{
				boton: "login",
				usuario: $("#usuario").val(),
				pass: $("#pass").val()
			}

		}
	);
	f.done (function(resultado)
		{
			if (resultado=="ok")
			{
				alert("OK");
				location.reload(true);
			}
			else
			{
				alert("Usuario o contraseña inexistentes");
			}
			
		});
}
