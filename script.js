		var slideTimer;//variable to hold the interval id
			var $heading=$("#heading-area");
			var $cloud1=$(".icon-cloud");
			var $cloud2=$(".icon-cloud2");
			var set=0;
			
			function header_load()
			{
				
				$heading.fadeIn(5000).css({'display':'flex'});
				$('#social-bar').fadeIn(1000);
				$('#social-bar').animate({
					bottom:'+=60px'
				},500);
				sliderTimer=setInterval(function(){
					slideChange();
				},1000*20);
				
			
				
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
			$(window).scroll(function(){
				

					var parscr=$(this).scrollTop();//gets the scrolled height of the window
					/*if(parscr > 200)
					{
						$heading.fadeOut();
						$("#header-top-bar").css({
							background:"rgba(205,30,99,0.9)"
						});
					}
					if(parscr < 200)
					{
						$heading.fadeIn();
						$("#header-top-bar").css({
							background:"rgba(0,0,0,0.0)"
						});
					}
					$heading.css({
						'transform':'translate(0,'+(parscr/10) +'%)',
						
					});
					if(parscr > $("#sector").offset().top)//compares the window scroll height against the offset height of the element from the top
					{
						$cloud1.css({
						'transform':'translate(0,'+(parscr/5) +'%)',
						
						});
						$cloud2.css({
						'transform':'translate(0,'+-(parscr/5) +'%)',
						
						});
					}

					if(parscr < $("#sector").offset().top)
					{
						$cloud1.css({
						'transform':'translate(0,'+-((parscr/4)) +'%)',
						
						});
						$cloud2.css({
						'transform':'translate(0,'+(parscr/4) +'%)',
						
						});
					}*/
					if(parscr > $("#sector").offset().top -100)
					{

						if(set == 0)
						{
							$(".item-info").each(function(i){
								setTimeout(function(){
									$(".item-info").eq(i).toggleClass('show-img');
								},200*i);
							});
							set=1;
						}
							
										
					}
					if(parscr < $("#sector").offset().top -100)
					{

						if(set == 1)
						{
							$(".item-info").each(function(i){
								setTimeout(function(){
									$(".item-info").eq(i).toggleClass('show-img');
								},500*i);
							});
							set=0;
						}
							
										
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
				interval=setInterval(function(){//interval that changes the slide every three seconds
					moveslide();//calls a function that performs the actual traversing of slides
					if(slideWidth != $(".slider").width())//additional function that checks if the width of the slide window has been changed.
					{	
						slideWidth=$(".slider").width();//if changed, get the new width of the element
						$(".pslide > span >img").width(slideWidth);//set the new width as the actual width
						$('.loading').fadeIn(1000);//show the loading screen again as one full execution of the slide sequence must be completed to sync 
													//slide positions even though individual image widths have changed[ not the most effecient way needs change ?]
						$('.loading').delay(5000).fadeOut(1000);
					}
					
				},3000);
				
			}
			
			
		}

		function moveslide()
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

		var animated = false;
		
		$('.icon-arrow').click(function(e){

			if(animated == false)
			{
				animated = true;
				var $layer =$(".material-layer");
				$layer.show();
				var posx=$('.icon-arrow').parent().offset().left,
				posy=$('.icon-arrow').parent().offset().top;
				$layer.css({
					"top":(e.pageY-posy-25)+' ',
					"left":(e.pageX-posx-25)+ ' '
				});
				
				$(".material-layer").addClass('materialise');
				
				setTimeout(function(){
					$layer.removeClass("materialise");
					$layer.hide();
					animated=false;
				},900);
			}

		});
		$( ".video-sector figure" ).hover(function(){
			$(".video-sector > figure figcaption").removeClass("shown-play-icon");
 			$(".video-sector > figure figcaption").addClass("show-play-icon");
		},
		function() {
			$(".video-sector > figure figcaption").removeClass("show-play-icon");
			$(".video-sector > figure figcaption").addClass("shown-play-icon");
		});
		function toggleBar()
		{
			$(".side-bar").toggle();
			$("#screen-cover").toggle();
			$(".side-bar").toggleClass('slide');
			$(".side-bar").height($(window).height());
			

		}