/**
 * knit.js.
 *
 * Handles all custom js
 */


(function(){
	
	$('#js-flip-1').toggle(
    function() {
        $('#js-flip-1 .card').addClass('flipped');
    },
    function() { $('#js-flip-1 .card').removeClass('flipped');
    }
);
});

