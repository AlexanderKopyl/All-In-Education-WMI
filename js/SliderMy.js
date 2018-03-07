var count_sliders = 1;
var slider_box_length = $('.slider_box').children().length;
var translateWidth = 0;
var slideInterval = 2000;
var navBtnId = 0;
// Slider moveOn
function next_slider(){
	if(count_sliders == slider_box_length ){
		$('.slider_box').css('transform', 'translate(0, 0)');
        count_sliders = 1;

	}else{
		translateWidth = - $('.viewport').width() * (count_sliders);
		$('.slider_box').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',});
		count_sliders++;
	}

}


// Hover for ViewPort
$(document).ready(function($) {
	
var interval = setInterval(next_slider, slideInterval);
	$('.viewport').hover(


		function(){
	clearInterval(interval)
},
		function(){
	interval = setInterval(next_slider, slideInterval);
});


});
// Butto next,prev
$('.next-btn').click(function() {
       next_btn();
    });

    $('.prev-btn').click(function() {
         prev_btn();
});

function prev_btn(){
	if(count_sliders == 1 ){
		$('.slider_box').css('transform', 'translate(0, 0)');
        count_sliders = 1;

	}else{
		translateWidth = -$('.viewport').width() * (count_sliders - 2);
		$('.slider_box').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',});
		count_sliders--;
	}
	

}
function next_btn(){
	if(count_sliders == slider_box_length ){
		$('.slider_box').css('transform', 'translate(0, 0)');
        count_sliders = 1;

	}else{
		translateWidth = - $('.viewport').width() * (count_sliders);
		$('.slider_box').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',});
		count_sliders++;
	}
}
// Dots
$('.slide-nav-btn').click(function() {
	navBtnId = $(this).index();
	if (navBtnId + 1 != count_sliders) {
            translateWidth = -$('.viewport').width() * (navBtnId);
            $('.slider_box').css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
            });
       
        
            count_sliders = navBtnId + 1;
        }

});


