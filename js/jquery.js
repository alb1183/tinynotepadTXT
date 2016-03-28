$(document).ready(function()
{
    $('#file_data').change(function(){
		var parametros = {
				"text" : $(this).val()	
		};
		$.ajax({
				data:  parametros,
				url:   urlweb + 'php/actualizar.php',
				type:  'post',
				success:  function (response) {
						if(response == 1){
							$('#file_data').linkify();
						}else{
							alert("Error:" + response);
						}
				}
		});
    });
});