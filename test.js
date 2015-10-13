$(document).ready(function () {
	$.ajax({
    	type:'get',
        dataType:"jsonp",
        url:'http://sdm.ac.in/blog',
        data:{json:"get_recent_posts",count:"6"},
        success:function(data){
             $("#recent-news").empty();
        	if(data)
            	$.each(data.posts,function(k, v){
                	$("#recent-news").append('<div class="masonitem1"><a href="#modal' + v.id + '" data-toggle="modal"><img src="' + v.thumbnail_images.medium.url + '" alt="' + v.title + '"></a><div id="modal' + v.id + '" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="myModalLabel">' + v.title + '</h3></div><div class="modal-body" style="width: auto; height: auto; max-height: 100%;"><img src="' + v.thumbnail_images.full.url + '" alt="' + v.title + '"></a></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Close</button></div></div><div style="padding:0 4px"><h4><a href="' + v.url + '">' + v.title + '</a></h4>' + v.content + '<small class="muted">Posted <span data-livestamp="' + v.date + '"></span></small></div></div>');
                });
                $(function(){
	var vg = $("#recent-news").vgrid({
		easing: "easeOutQuint",
		useLoadImageEvent: true,
		time: 400,
		delay: 20,
		fadeIn: {
			time: 500,
			delay: 50,
			wait: 500
		}
	});
	$(window).load(function(e){
		vg.vgrefresh();
	});
});
        }
    });
});
