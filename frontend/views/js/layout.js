/* Layout*/

$.ajax({

	url: "ajax/layout.ajax.php",
	success: function(response) {

		var backgroundColor = JSON.parse(response).backgroundColor;
		var textColor = JSON.parse(response).textColor;
		var topBarColor = JSON.parse(response).topBarColor;
		var topTextColor = JSON.parse(response).topTextColor;

		$(".backColor, .backColor a").css({"background":backgroundColor, "color":textColor})
		$(".topBar, .topBar a").css({"background":topBarColor, "color":topTextColor})

	}
});