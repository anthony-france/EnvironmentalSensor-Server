function dupfrm() {
	$(".cloneable").each(function(index) {
		var count = $(this).parent().children().length - 2;
		
		var cloned = $(this).clone();
		cloned.removeClass("cloneable");
		cloned.find("legend").hide();
		
		var label = cloned.find("label");
		label.attr("for", count + "Name");
		
		var input = cloned.find(":input");
		input.val('');
		input.attr("id", count + "Name");
		input.attr("name", "data[" + count + "][name]");
		
		cloned.insertBefore("div.submit");
	});
	return false;
};
 