$('document').ready(function(){
	console.log("document ready");
	
	
	
	
	
	/* /child/add */
	$('.btn-create-child').on('click',function(e){
		console.log("create child");
		e.preventDefault;
		var name = $("#name").val();
		var yyyy_birthday = $("#yyyy").val();
		var mm_birthday = $("#mm").val();
		var dd_birthday = $("#dd").val();
		var gender = $("#gender").val();
		var eye_color = $("#eye_color").val();
		var hair_color = $("#hair_color").val();
		var height = $("#height").val();
		var weight = $("#weight").val();
		var biography = $("#biography").val();
		
		if ($('#public_profile').is(":checked")){
			var public_profile = 1;
		} else {
			var public_profile = 0;
		}

		// request to create child
		$.ajax({
		  type: "POST",
		  url: BASE_URL + "api/child/create/",
		  data: { 
			'key':'$v^Y2Il4%lC%xIA7HCxYmL(J#qSA3SJ2fQk2ICjf',
			'name':name,
			'birthday':yyyy_birthday+'/'+mm_birthday+'/'+dd_birthday,
			'gender':gender,
			'eye_color':eye_color,
			'hair_color':hair_color,
			'height':height,
			'weight':weight,
			'biography':biography,
			'public':public_profile,
			}
		}).done(function( msg ) {
		  console.log(msg);
		});
	});
	
	
	
	
	
});