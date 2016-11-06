
function ingresar()
{
	var f=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			boton: "ingresar",
			patente: $("#patente").val(),
		}});
	f.done (function()
			{
				var d=$.ajax({
				url:"grilla.php",
				type:"get",
				data:{
				}});
				d.done(function(resultado)
					{
						$("#tabla").val(resultado);
					}
				);
			}
		);

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
				window.location.href = "estacionamiento.php";
			}
			else
			{
				alert("Usuario o contraseña inexistentes");
			}
			
		});
}
