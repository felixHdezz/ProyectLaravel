$(document).ready(function(){
	$('#formChat').on('submit',function(){
		var type = $('#formChat').attr('type');
		if(type == 'name'){
			var name = $('#name').val();
			if(name.length > 0){
				$.ajax({
					url: 'assets/php/sesion.php',
					type: 'POST',
					success: function(data){
						$('#chatpanel').html('<ul id="containerMessages"></ul>')
						$('#formChat table tr').html('<div class="input-group"> <td> <input type="text" placeholder="Escribe un mensaje..." id="message" autocomplete="off" class="form-control"> </td> <span class="input-group-btn"> <td> <input type="submit" id="submit" value="Enviar" class="btn btn-warning btn-sm"> </td></div>')
						$('#submit').attr('userName', name);
						$('#submit').attr('sesionName', data);
						$('#formChat').attr('type', 'chat');
						$('#userName').html(name);
						$('#name').val('');
						$('#message').focus();
					}

				});
			}else{
				alert('Completa tu nombre, gracias.');
				$('#name').focus();
			}
			return false;
		}else if(type == 'chat'){
			var message = $('#message').val();
			var name = $('#submit').attr('userName');
			if(message.length > 0){
				$.ajax({
					type: 'POST',
					url: 'assets/php/send.php',
					data: 'name='+name+'&message='+message,
					dataType: 'html',
					success: function(data){
						send(data);
						$('#message').val('').focus();
					}

				});
			}else{
				alert('Completa tu mensaje, gracias.');
				$('#name').focus();
			}
			return false;
		}
	});
});

