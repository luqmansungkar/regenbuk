$(document).ready(function(){
	// image preview for upload file
	function readURL(input,parent) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
				console.log(input);
	            parent.css('background-image', "url("+e.target.result+")");
	            parent.addClass("filled");
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}

	$(".upload").change(function(){
	    readURL(this,$(this).parent());
	});

	$('[data-toggle="tooltip"]').tooltip();

	$("#btn-show-phone").click(function(){
		$("#txt-phone").text($("#txt-phone").data("last"));
	})
})