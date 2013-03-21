
function del() {
	$("input[name=selected]:checked").each(function(index){
		$(this).parents("tr").addClass("delete-action-pending");
	});
	
    $("input[name=selected]:checked").each(function(index){
		var request = $.ajax({
			type: "POST",
			url: "/ProficiencyItems/delete/" + $(this).attr("id") + ".json"
		});
		
		request.done(function(msg){
			if (msg.result == "success") {
				$("#" + msg.id).parents("tr").effect('highlight', {color: '#BB0000'}, 200, function(){
					$(this).slideUp('fast', function(){
						$(this).remove();
					});
				});
			}
			else {
				$("#" + msg.id).parents("tr").removeClass("delete-action-pending");
			}
		});
		
		request.fail(function(jqXHR, textStatus) {
			alert( "Request failed: " + textStatus + "\nPlease refresh the page." );
		});
	});
};
