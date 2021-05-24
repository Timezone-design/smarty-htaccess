// $('.jcarousel-wrapper .jcarousel li:nth-of-type(4) img').css({'transform': 'scale(1)', 'opacity': '1'}); 
// $('.jcarousel-wrapper .jcarousel li:nth-of-type(2) img').css({'transform': 'scale(1)', 'opacity': '1'});

$('.jcarousel-control-next').click(function() {
    console.log('next pressed');
    $('.jcarousel-wrapper .jcarousel li:nth-of-type(4) img').css({'transform': 'scale(1)', 'opacity': '1'}); 
    $('.jcarousel-wrapper .jcarousel li:nth-of-type(2) img').css({'transform': 'scale(1)', 'opacity': '1'});
    $('.jcarousel-wrapper .jcarousel li:nth-of-type(1) img').css({'transform': 'scale(0.5)', 'opacity': '0.5'}); 
    $('.jcarousel-wrapper .jcarousel li:nth-of-type(3) img').css({'transform': 'scale(0.5)', 'opacity': '0.5'});
});

$('.jcarousel-control-prev').click(function() {
    console.log('prev pressed');
    $('.jcarousel-wrapper .jcarousel li:nth-of-type(3) img').css({'transform': 'scale(1)', 'opacity': '1'}); 
    $('.jcarousel-wrapper .jcarousel li:nth-of-type(1) img').css({'transform': 'scale(1)', 'opacity': '1'});
    $('.jcarousel-wrapper .jcarousel li:nth-of-type(4) img').css({'transform': 'scale(0.5)', 'opacity': '0.5'}); 
    $('.jcarousel-wrapper .jcarousel li:nth-of-type(2) img').css({'transform': 'scale(0.5)', 'opacity': '0.5'});
});
