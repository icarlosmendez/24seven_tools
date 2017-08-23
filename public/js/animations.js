// This is a collection of jQuery animations controlling various aspects of the UI

console.log("Animations.js is loading!");

// A fade-out for the particular success flash banner
// $(".alert-success").fadeOut( "slow", function() {
// 	// Animation complete.
// });



setTimeout(function() {
	$('.alert').slideUp('slow');
}, 5000); // <-- time in milliseconds
