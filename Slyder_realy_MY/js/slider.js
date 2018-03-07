
// Buttons Visible and hidde
var interval;
$('.show').click(function(){
	$('.box_with_sliders').css({
		'transition':'2s',
		'transition-timing-function':'ease-out',
		'transform':'translateY(0)',
		
	})
	$('.show').css({
		'display':'none'
	})
	$('.hidde').css({
		'display':'block'
	})
	 interval = setInterval(nextSlid,2000);
});
$('.hidde').click(function(){
	$('.box_with_sliders').css({
		'transform': 'translateY(-1400px)',
		
	})

	$('.show').css({
		'display':'block'
	})
	$('.hidde').css({
		'display':'none'
	})
	clearInterval(interval)
});

//Slider 
var translateWidth = -$('.box_with_sliders').width()/3;
var translateLeng = $('.box_with_sliders').children().length;
var count = 1;

setInterval(colorDots,1000);

function colorDots(){
	for(var i = 1; i <= $('.dots').children().length+1; i++){
	if(count == i){
		$('.dots' + i).css({
			'color':'white'
		})
	}else{
		$('.dots' + i).css({
			'color':'black'
		})
	}

}
}


function nextSlid(){
	
	if(count === translateLeng ){
		$('.box_with_sliders').css({
		'transform': 'translate(0,0)',
		})
		translateWidth = -$('.box_with_sliders').width()/3;
		count = 1;
	}else{
		$('.box_with_sliders').css({		
		 	'transform': 'translate(' + translateWidth + 'px, 0)',
			})
			count++;
			
			translateWidth += translateWidth;
		}

};
$('prev_btn').click({
	alert('work');

});

	
		
	





