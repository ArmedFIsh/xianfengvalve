function raty(num,active,width="2vh"){
	var str="";
	
	for(var i=0;i<parseInt(active);i++){
		str = str + "<span><img class='star_im' src='/img/star.png' style='width:"+width+";height:"+width+";'></span>";
	}
	var xs = active-parseInt(active);
	if(xs>0.8){
		str = str + "<span><img class='star_im' src='/img/star.png' style='width:"+width+";height:"+width+";'></span>";
		num=num-1;
	}
	if(xs>=0.3&&xs<=0.8){
		str = str + "<span><img class='star_im' src='/img/star_half.png' style='width:"+width+";height:"+width+";'></span>";
		num=num-1;
	}
	for(var i=0;i<Math.ceil(num-active);i++){
		str = str + "<span><img class='star_im' src='/img/star_gray.png' style='width:"+width+";height:"+width+";'></span>";
	}
	
	return str;
}