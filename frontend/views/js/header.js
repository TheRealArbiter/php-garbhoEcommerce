/*HEADER*/
$("#btnCategories").click(function(){

	if (window.matchMedia("(max-width:767px)").matches) 
	{
		$("#btnCategories").after($("#categories").slideToggle("fast"))

	}else{
		$("#header").after($("#categories").slideToggle("fast"))

	}

});