$(function(){
	$('#jqclienttype').change( 
		function(){
			var fieldVal = $.trim($(this).val());
			$.ajax({
				type : 'post',
				url : '/ajax/getclientsbyclienttypeid/',
				data : ({"client_type_id":fieldVal}),
				success : 
					function(msg){
						
						html="";
						var obj = $.parseJSON(msg);
						for(var key in obj) 
						{
							html += "<option value=" + key  + ">" +obj[key] + "</option>";
						}
						document.getElementById("jqclients").innerHTML = html;
						
					//alert(msg);
					}
			});
		}
	);
});

$(function(){
	$('#jqclients').change( 
		function(){
			var fieldVal = $.trim($(this).val());
			$.ajax({
				type : 'post',
				url : '/ajax/getclientbyid/',
				data : ({"client_id":fieldVal}),
				success : 
					function(msg){
						var obj = $.parseJSON(msg);
						document.getElementById("uaddress").innerHTML = obj.UADDRESS;
					}
			});
		}
	);
});