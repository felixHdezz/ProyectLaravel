$(document).ready(function(){
	$('#add_car').click(function(e){
		
		var can = document.getElementById('option');
        var can_pro = can.options[can.selectedIndex].value;
        var codprod = $('#cod').val();
        var nom = $('#nom').val();
        var pre = $('#pre').val();
        var img = $('#img').val();
        var exis = $('#exis').val();
        e.preventDefault(); 
        var formData = {
        	can: can_pro,
            codprod: $('#cod').val(),
            nom: $('#nom').val(),
            pre: $('#pre').val(),
            img: $('#img').val(),
            exis: $('#exis').val(),
        }
        $.ajax({
        	type: "post",
        	url:"/sistel-network.com.mx/prod/add_car",
        	data: formData,
        	dataType: 'json',
        	error: function (data) {
                console.log('Error:', data);
            }
        });
	});
});