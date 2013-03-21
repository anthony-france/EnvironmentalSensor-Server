$(document).ready(function() {
	
	$("body").on("click", ".clearForm", function(event) {
		event.preventDefault();
		clear_form_elements( $(this).closest('form') );
	});
	
	function clear_form_elements(iForm) {
         $(iForm).find(':input').each(function() {
            switch(this.type) {
                case 'password':
                case 'select-multiple':
                case 'select-one':
                case 'text':
                case 'textarea':
                    $(this).val('');
                    break;
                case 'checkbox':
                case 'radio':
					$(this).prop("checked", false);
            }
        });

    }
	
	$("body").on("click", ".advtimepicker", function(){
		$(this).datetimepicker({
			dateFormat: "yy-mm-dd",
			timeFormat: "hh:mm:ss"	
		}).datetimepicker("show");
    });
	
	$(".grpdelbtn").addClass("disabled");
	
	$("input[name=selected]").on("click", function() {
		if (!$('input[name=selected]:not(:checked)').length) {
			$("input[name=selectall]").attr('checked', true);
		}
		else {
			$("input[name=selectall]").attr('checked', false);
		}
		
		if ($('input[name=selected]:checked').length > 0) {
			$(".grpdelbtn").removeClass("disabled");
		}
		else {
			$(".grpdelbtn").addClass("disabled");
		}
	});

    $("input[name=selectall]").on("click", function() {
	if ( $(this).attr('checked') ) {
			$(".grpdelbtn").removeClass("disabled");
			$("input[name=selected]").each(function(index){
				$(this).attr('checked', true);
			});
		}
		else {
			$(".grpdelbtn").addClass("disabled");
			$("input[name=selected]").each(function(index){
				$(this).attr('checked', false);
			});
		}
	});
	
	$("body").on("click", "fieldset fieldset legend", function(event) {
		$(".settings-panel").hide();
		$(this).parent().children(".settings-panel").show();
	});
	
	var plotHumidity = [];
	var plotTempurature = [];
	
	var ajaxTempAndHumidityDataRenderer = function(url, plot, options) {
		var ret = null;
		$.ajax({
		  // have to use synchronous here, else the function 
		  // will return before the data is fetched
		  async: false,
		  url: url,
		  dataType:"json",
		  success: function(data) {
			for (var i=0;i<data.length;i++) {
				plotHumidity.push([data[i].EnvironmentalReading.createdjsformat, parseInt(data[i].EnvironmentalReading.humidity)]);
				plotTempurature.push([data[i].EnvironmentalReading.createdjsformat, parseInt(data[i].EnvironmentalReading.tempurature)]);
			}
			ret = [plotHumidity,plotTempurature];
		  }
		});
			$("#thplot").removeClass("loading-plot");
			$("#thplot").addClass("loaded-plot");
	
		return ret;
	};
	
	var start = $("#thplot").attr("start_time");
	var end = $("#thplot").attr("end_time");
		
	var jsonurl = "/environmental_readings/index/start_time:" + start + "/end_time:" + end;

	var diff = Math.abs(new Date(start.replace("-", "/")) - new Date(end.replace("-", "/")));
	var minutes = Math.floor((diff/1000)/60);

	var interval = "1 minutes";
	
	if (minutes >= 7140) {
		interval = "12 hours";
	}
	else if (minutes >= 2820) {
		interval = "6 hours";
	}
	else if (minutes >= 1200) {
		interval = "3 hours";
	} 
	else if (minutes >= 240) {
		interval = "1 hours";
	}
	else if (minutes >= 120) {
		interval = "15 minutes";
	}	
	else if (minutes >= 25) {
		interval = "5 minutes";
	} 

	try {
		$("#thplot").addClass("loading-plot");
		var tempAndHumidityPlot = $.jqplot('thplot', jsonurl,{
			title: "Temp and Humidity",  
			  seriesDefaults: { 
				showMarker: false,
				pointLabels: { show:false },
				rendererOptions: {
					smooth: true,           
					animation: {
						show: true
					}
				}
			  },
			legend: {
				show: true,
				location: "sw",
				labels: ["Humidity", "Tempurature"],
				showLabels: true
			},
			axes: {
			  xaxis: {
				  min: start,
				  tickInterval: interval, 
				  tickOptions:{formatString:'%H:%M %p'},
				  renderer: $.jqplot.DateAxisRenderer
			  },
			  yaxis: {
				min: 0,
				max: 100,
				tickInterval: 20,
			  }
			},
			dataRenderer: ajaxTempAndHumidityDataRenderer,
			dataRendererOptions: {
			  unusedOptionalUrl: jsonurl,
			}
		});
	}
	catch (err) {
	   $("#thplot").removeClass("loading-plot");
	   $("#thplot").html("No Data Found!");
	   $("#thplot").addClass("empty-plot");
	}
	
	// $(".loadDialog").on("click", function (event) {
		// $("#dialog-box").load($(this).attr('href'))
						// .dialog({
							// modal: true, 
							// title: "Setting Log",
							// width: screen.width * .75, 
							// position: { my: "top", at: "top", of: window },
						// });
		
		// event.preventDefault();
	// });
	
	$(".scrollTo").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
	});
	
 });