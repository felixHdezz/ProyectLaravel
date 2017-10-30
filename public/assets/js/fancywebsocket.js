var Server;

$(document).ready(function(){
	Server = new FancyWebSocket('ws://192.168.1.33:12345');
    Server.bind('open', function()
	{
    });
    Server.bind('close', function( data ) 
	{
    });
    Server.bind('message', function( payload ) 
	{
    });
    Server.connect();
});

function send(text){
    Server.send('message', text);
}

var FancyWebSocket = function(url)
{
	var callbacks = {};
	var ws_url = url;
	var conn;
	
	this.bind = function(event_name, callback)
	{
		callbacks[event_name] = callbacks[event_name] || [];
		callbacks[event_name].push(callback);
		return this;
	};
	
	this.send = function(event_name, event_data)
	{
		this.conn.send( event_data );
		return this;
	};
	
	this.connect = function() 
	{
		if ( typeof(MozWebSocket) == 'function' )
		this.conn = new MozWebSocket(url);
		else
		this.conn = new WebSocket(url);
		
		this.conn.onmessage = function(evt)
		{
			dispatch('message', evt.data);
		};
		
		this.conn.onclose = function(){dispatch('close',null)}
		this.conn.onopen = function(){dispatch('open',null)}
	};
	
	this.disconnect = function()
	{
		this.conn.close();
	};
	
	var dispatch = function(event_name, message)
	{
		if(message == null || message == ""){
			console.log('no envio');
		}else{
			var JSONdata = JSON.parse(message);
			var nameData = JSONdata[0].name;
			var messageData = JSONdata[0].message;
			var sesionData = JSONdata[0].sesion;
			var dateTime = JSONdata[0].dateTime;
			var sesionBody = $('#submit').attr('sesionName');
			if(sesionData == sesionBody){
				$('#chatpanel').append('<ul id="containerMessages"><li class="meMessage"><div class="chat_body"><p>Yo:'+messageData+' '+dateTime+'</p></div></li></ul>');
			}else{
				$('#chatpanel').append('<ul id="containerMessages"><li class="yourMessage"><div class="chat_body"><p>'+nameData+': </label>'+messageData+' '+dateTime+'</p></div></li></ul>');
			}
			var height = $('body').prop('scrollHeight');
			$('body').scrollTop(height);
		}
		
	}
};
