var modalOpened=0;
			var mHeight;
			$(function(){
				
				header_load();

			});

			var slideTimer; //variable to hold the interval id
			var $heading=$("#heading-area");
			var $cloud1=$(".icon-cloud");
			var $cloud2=$(".icon-cloud2");
			var $mainNav=$(".main-nav");
			var $itemInfo=$(".item-info");
			var set=0;
			var Timer;
			var startedScroll=0;
			var isScrolling=0;
			var reachedEnd=0;
			var reachedStart=0;
			var finishedScrolling=0;
			var vheight;
			$(".view-page").each(function(i){

				$(".view-page").eq(i).css({
					"flex":" " + randomIntFromInterval(3,5)
				});

			});



			function header_load()
			{

				
				$('#social-bar').fadeIn(1000);
				$('#social-bar').animate({
					bottom:'+=60px'
				},500);
				/*sliderTimer=setInterval(function(){
					slideChange();
				},1000*20);*/




			}

			
			function randomIntFromInterval(min,max)
			{
			    return Math.floor(Math.random()*(max-min+1)+min);
			}
			var array=[
				"picjumbo.com_HNCK4400.jpg",
				"hback.jpg",
				"hback2.jpg"
			]
			var counter=0;
			function slideChange()
			{

				counter++;
				$heading.animate({
					background:'rgba(0,0,0,0.7);'
				},500);

				$heading.animate({
					background:'rgba(0,0,0,0.4);'
				},500);
				if(counter == 2)
				{
					counter=0;
				}

			}
			function scrollhere(obj)
			{
						$('html, body').animate({scrollTop: $("#sector").offset().top}, 1200);
			}

			function scrollnav(obj)
			{
						$('html, body').animate({scrollTop: $(obj).offset().top - $mainNav.height()-50}, 1000);
			}

			var scrollFixed=0;
			$(window).scroll(function(){


					var parscr=$(this).scrollTop();//gets the scrolled height of the window

					if(parscr > $("#sector").offset().top -$(window).height()/8)
					{



							$itemInfo.each(function(i){
								setTimeout(function(){
									$itemInfo.eq(i).addClass('show-img');
								},200*i);
							});



					}
					if(parscr > $mainNav.offset().top )
					{



							if(scrollFixed == 0)
							{
								$mainNav.css({
										"position":"fixed",
										"top":"0",
										"left":"0",
										"width":"100%",
									});
								vheight=$mainNav.offset().top;
								scrollFixed=1;
							}
									



					}
					if(parscr < vheight )
					{


							
									$mainNav.css({
										"position":"static",
										
										"width":"auto",
									});
									scrollFixed=0;
							

							
									
								



					}


					


					if(parscr >$(".contacts").offset().top - $(window).height()/2)
					{


							$(".contact").each(function(i){
								setTimeout(function(){
									$(".contact").eq(i).addClass('zoom-out');
								},300*i);
							});




					}

					if(parscr > $(".sector-event").offset().top - $(window).height()/2)
					{


							$(".card-art").each(function(i){
								setTimeout(function(){
									$(".card-art").eq(i).addClass('enlarge');
								},100*i);
							});




					}

					if(parscr > $(".event-head-sector").offset().top - $(window).height()/2)
					{


							$(".team-art").each(function(i){
								setTimeout(function(){
									$(".team-art" ).eq(i).addClass('enlarge');
								},100*i);
							});




					}












			});


			var down=1;
			var ck=1;
			var interval;
			var count=1;
			var max=$(".pslide > span").length-1;//gets the max number of images to slide through
			var slideWidth=$(".slider").width();//gets the width of the image slider
			$(".pslide > span >img").width(slideWidth);//sets the width of the image slider to the width of the container
			//console.log(slideWidth);

		function check_count()//function to check if the slider box has reached the end or not general slide stoppages may be performed here
		{
			ck++;//incrementing the slide counter
			if(ck == max)//when count reaches the max number of preset slides
			{
				$('.loading').fadeOut(1000);//fades out the loading screen if failed to do so previously
				/*interval=setInterval(function(){//interval that changes the slide every three seconds
					//moveslide();calls a function that performs the actual traversing of slides
					if(slideWidth != $(".slider").width())//additional function that checks if the width of the slide window has been changed.
					{
						slideWidth=$(".slider").width();//if changed, get the new width of the element
						$(".pslide > span >img").width(slideWidth);//set the new width as the actual width
						$('.loading').fadeIn(1000);//show the loading screen again as one full execution of the slide sequence must be completed to sync
													//slide positions even though individual image widths have changed[ not the most effecient way needs change ?]
						$('.loading').delay(5000).fadeOut(1000);
					}

				},3000);*/

			}


		}

		function calculate_slide_movement(scroll)
		{
			var x,y,k;
			x=$("#scontainer").height();
			y=$("#scontainer").width();
			k=x/y;
			var amt=k*scroll;
			moveslides(amt);

		}

		function moveslides(amount)
		{
			$('.pslide').animate({marginLeft:"-="+amount+"px"},100);
		}
		function moveslide(amount)
		{

			if(count == max+1)
			{
				$('.pslide').animate({marginLeft:'0px'},1000); // margin left  0 is the default position of the first slide consequent slides are the n x the width of the slide.
				count=1;//setting the count back to the initial to make the slides start from thier initial state
			}

			else
			{
				$('.pslide').animate({marginLeft:"-="+slideWidth+"px"},1000);//incrementing the margin by slidewidth which has been set previously
				count++;//incrementing the value of count
			}


		}

		
		var animStart = 0;
		 $(".material-button").click(function(e){

		 		if(animStart == 0)
		 		{
		 			animStart=1;
		 			 var parentOffset = $(this).offset();
		               var $layer = $(this).find(".material-layer");
		               //or $(this).offset(); if you really just want the current element's offset
		               var relX = e.pageX - parentOffset.left;
		               var relY = e.pageY - parentOffset.top;

		               $layer.css({
		                 "left":relX,
		                 "top":relY,
		               });
		            $layer.addClass("animate");
		              setTimeout(function(){
		                  $layer.removeClass("animate");
		                  animStart=0;
		              },500);
		 		}
              

          });

			$( ".video-sector").find('figure').hover(function(){
				$(this).find('figcaption').removeClass("shown-play-icon");
 				$(this).find('figcaption').addClass("show-play-icon");
			},
			function(){
				$(this).find('figcaption').removeClass("show-play-icon");
				$(this).find('figcaption').addClass("shown-play-icon");
			});

		function toggleBar()
		{
			$(".side-bar").toggle();
			$("#screen-cover").toggle();
			$(".side-bar").toggleClass('slide');
			$(".side-bar").height($(window).height());


		}
		function checkaccount()
		{
			var pwtext = $('#password').val();
			var xhtp= new XMLHttpRequest();

			xhtp.onreadystatechange=function(){
				if(xhtp.readyState == 4 && xhtp.status == 200)
				{
					if(xhtp.responseText == "t")
					{


						$(".page-cover").hide();


					}
					else
					{

						$(".page-cover").css({
							background:"red"
						});

					}
				}


			}
			xhtp.open("POST","login.php",true);
			xhtp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xhtp.send("&password="+pwtext);
		}

		function close_modal()
		{
			$(".page-flow").hide();

		}
		function open_modal()
		{
			$(".page-flow").show();

		}
