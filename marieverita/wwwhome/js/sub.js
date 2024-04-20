var vInterval, vDuration = 3000;
var vCurNum, vMaxNum;
$(function(){
	vMaxNum = jQuery(".sub>.vBg").size()-1;
	vCurNum = 0;
	if(vMaxNum != 0) {
		vInterval = setInterval("visual()", vDuration);	
	} else {
		jQuery(".controller").css("display", "none");
		jQuery(".controller2").css("display", "none");
	}
	jQuery(".sub>.controller>.btns>a").each(function(q){
		jQuery(this).hover(function(){
			clearInterval(vInterval);
			jQuery(this).find("img").attr("src", jQuery(this).find("img").attr("src").replace(".png", "_on.png"));
		}, function(){
			clearInterval(vInterval);
			vInterval = setInterval("visual()", vDuration);
			jQuery(this).find("img").attr("src", jQuery(this).find("img").attr("src").replace("_on.png", ".png"));
		}).click(function(){
			if(q) {
				jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src").replace("_on.png", ".png"));
				jQuery(".vBg").eq(vCurNum).stop().animate({left: "-100%"}, 900);
				vCurNum++;
				if(vCurNum > vMaxNum) vCurNum = 0;
				jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src").replace(".png", "_on.png"));
				jQuery(".vBg").eq(vCurNum).stop().animate({left: "100%"}, 0).stop().animate({left: "0%"}, 900);
			} else {
				jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src").replace("_on.png", ".png"));
				jQuery(".vBg").eq(vCurNum).stop().animate({left: "100%"}, 900);
				vCurNum--;
				if(vCurNum < 0) vCurNum = vMaxNum;
				jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src").replace(".png", "_on.png"));
				jQuery(".vBg").eq(vCurNum).stop().animate({left: "-100%"}, 0).stop().animate({left: "0%"}, 900);
			}
		})
	})
	
	jQuery(".sub>.controller2 a").each(function(q){
		jQuery(this).click(function(){
			if(q != vCurNum) {
				jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src").replace("_on.png", ".png"));
				jQuery(".vBg").eq(vCurNum).stop().animate({left: "-100%"}, 900);
				vCurNum = q;
				jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src").replace(".png", "_on.png"));
				jQuery(".vBg").eq(vCurNum).stop().animate({left: "100%"}, 0).stop().animate({left: "0%"}, 900);
			}
		}).hover(function(){
			clearInterval(vInterval);
		}, function(){
			clearInterval(vInterval);
			vInterval = setInterval("visual()", vDuration);
		})
	})


})

function visual()
{
	jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src").replace("_on.png", ".png"));
	jQuery(".vBg").eq(vCurNum).stop().animate({left: "-100%"}, 900);
	vCurNum++;
	if(vCurNum > vMaxNum) vCurNum = 0;
	jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src", jQuery(".sub>.controller2 a").eq(vCurNum).find("img").attr("src").replace(".png", "_on.png"));
	jQuery(".vBg").eq(vCurNum).stop().animate({left: "100%"}, 0).stop().animate({left: "0%"}, 900);
}