/*Variables*/
var item = 0;
var itemPagination = $("#pagination-slide li");
var stopCicle = false;
var imgProduct = $(".img-product");
var firstTitle = $("#slide h1");
var secondTitle = $("#slide h2");
var thirdTitle = $("#slide h3");
var btnShowProduct = $("#slide button");
var arrowForward = $("#forward")
var arrowBackward = $("#backward");
var stopInterval = false;
var slideToogle = false;



/* INITIAL ANIMATION*/

//top to bottom image animation

$(imgProduct[item]).animate({"top":-10 + "%", "opacity":0},100)
$(imgProduct[item]).animate({"top":30 + "px", "opacity":1},600)

//top to bottom first title animation
$(firstTitle[item]).animate({"top":-10 + "%", "opacity":0},100)
$(firstTitle[item]).animate({"top":30 + "px", "opacity":1},600)


//top to bottom second title animation
$(secondTitle[item]).animate({"top":-10 + "%", "opacity":0},100)
$(secondTitle[item]).animate({"top":30 + "px", "opacity":1},600)


//top to bottom first title animation
$(thirdTitle[item]).animate({"top":-10 + "%", "opacity":0},100)
$(thirdTitle[item]).animate({"top":30 + "px", "opacity":1},600)



//top to bottom first title animation
$(btnShowProduct[item]).animate({"top":-10 + "%", "opacity":0},100)
$(btnShowProduct[item]).animate({"top":30 + "px", "opacity":1},600)


/*Pagination*/

$("#pagination-slide li").click(function()
{

	item = $(this).attr("item") -1;

	moveSlide(item);
})



/*Forward Arrow*/

function forward() 
{
		if (item == 3 ) 
	{
		item = 0;
	}else{
		item++;
	}

	moveSlide(item);
}


$("#slide #forward").click(function()
{
	forward();
})

/*Backwards Arrow*/
$("#slide #backward").click(function()
{
	if (item == 0 ) 
	{
		item = 3;
	}else{
		item--;
	}

	moveSlide(item);
})


/*moveSlide function*/

function  moveSlide(item)

{	

	//using easing to animate

	//Change the property left to show the sliders
	$("#slide ul").animate({"left": item * -100 + "%"}, 800, "easeOutQuart");

	//change opacity when it is not selected
	$("#pagination-slide li").css({"opacity": .5})

	//change opacity when it is selected
	$(itemPagination[item]).css({"opacity": 1});

	stopCicle = true;

	$(imgProduct[item]).animate({"top":-10 + "%", "opacity":0},100)
	$(imgProduct[item]).animate({"top":30 + "px", "opacity":1},600)

		//top to bottom first title animation
	$(firstTitle[item]).animate({"top":-10 + "%", "opacity":0},100)
	$(firstTitle[item]).animate({"top":30 + "px", "opacity":1},600)


	//top to bottom second title animation
	$(secondTitle[item]).animate({"top":-10 + "%", "opacity":0},100)
	$(secondTitle[item]).animate({"top":30 + "px", "opacity":1},600)


	//top to bottom third title animation
	$(thirdTitle[item]).animate({"top":-10 + "%", "opacity":0},100)
	$(thirdTitle[item]).animate({"top":30 + "px", "opacity":1},600)

	 //top to bottom first title animation
	$(btnShowProduct[item]).animate({"top":-10 + "%", "opacity":0},100)
	$(btnShowProduct[item]).animate({"top":30 + "px", "opacity":1},600)



}

/*----------------Automatic Slider interval----------------*/
setInterval(function ()
{
	if (stopCicle) 
	{
		stopCicle = false;

	}else{
		//when true 
		if (!stopInterval)
		 {
		 	
			forward();
		 }

	}

}, 3000)


/*---------------Mouse over arrow apear ------*/
			
$("#slide").mouseover(function () 
{
	/*$(arrowBackward).animate({"opacity":1}, 100,"easeInSine")
	$(arrowForward).animate({"opacity":1}, 100,"easeInSine")
*/
	$("#slide #forward").css({"opacity": 1})
	$("#slide #backward").css({"opacity": 1})

	stopInterval = true;
})


/*---------------Mouse over arrow disapear ------*/
$("#slide").mouseout(function () 
{/*
	$(arrowBackward).animate({"opacity":0}, 100,"easeInSine")
	$(arrowForward).animate({"opacity":0}, 100,"easeInSine")*/

	$("#slide #forward").css({"opacity": 0})
	$("#slide #backward").css({"opacity": 0})

	stopInterval = false;

})


/*---------------Hide Slide ------*/

$("#btnSlide").click(function()
{
	if(!slideToogle)
	{
		slideToogle = true;
		$("#slide").slideUp("fast");
		$("#btnSlide").html('<i class="fa fa-angle-down"></i>');


	}else{

		slideToogle = false;
		$("#slide").slideDown("fast");
		$("#btnSlide").html('<i class="fa fa-angle-up"></i>');


	}
})