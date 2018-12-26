/**
 * File script.js
 */

( function( $ ) {
	ScrollReveal({ distance: '100px' });
	ScrollReveal().reveal('.problem img', { delay: 200, origin: 'rigth', mobile: false, });
	ScrollReveal().reveal('.solution img', { delay: 200, origin: 'left', mobile: false, });
} )( jQuery );
