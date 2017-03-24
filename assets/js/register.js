var oRegister = {
	init:function() {
		var date = new Date();
		var year = ""+date.getFullYear()-100+':'+date.getFullYear();		
	 	$( "#dob" ).datepicker({
	      changeMonth: true,
	      changeYear: true,
	      dateFormat: 'dd-mm-yy',
	      yearRange: year,
	      onSelect: function(dateText, inst) {
	      		//alert(dateText);

	      		//calculate age here
	      }
	  	});

	  	$("#patient_register").validate({
			rules: {
				first_name:{
					required:true,
					minlength:3
				},
				last_name:{
					required:true,
					minlength:1
				},
				age:{
					required:true,
					number:true
				},
				contact_no:{
					required:true,
					minlength:10,
					number:true
				},
				remarks:{
					required:true,
				}
			}
		});



	},
	save:function() {
		if($("#patient_register").valid()) {
			$("#patient_register").submit();
		}
	},
	photo:function() {
		/*$('#webcam').webcam({
			width: 160,
			height: 160,
			swffile: base_url+"assets/webcam/jscam_canvas_only.swf", 
			onLoad: function() {
			    var cams = webcam.getCameraList();
			    for(var i in cams) {
			        jQuery("#cams").append("<li>" + cams[i] + "</li>");
			    }
			},
			onCapture: function () {
				webcam.save(base_url+'index.php/register/save_image');
				jQuery("#flash").css("display", "block");
		        jQuery("#flash").fadeOut(100, function() {
		            jQuery("#flash").css("opacity", 1);
		        });
			}

		});*/
	}

}

$(document).ready(function(e) {
	oRegister.init();

	$('#savePatient').click(function(e){
		oRegister.save();
	});

	





});