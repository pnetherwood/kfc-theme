/**
 * Scroll to Top Button
 * Shows a button when user scrolls down, clicking scrolls back to top
 */
(function() {
	'use strict';

	var button = document.getElementById('kfc-scroll-to-top');
	if (!button) return;

	var scrollThreshold = 300; // Show button after scrolling this many pixels

	// Show/hide button based on scroll position
	function toggleButton() {
		if (window.scrollY > scrollThreshold) {
			button.classList.add('visible');
		} else {
			button.classList.remove('visible');
		}
	}

	// Scroll to top when button is clicked
	function scrollToTop(e) {
		e.preventDefault();
		window.scrollTo({
			top: 0,
			behavior: 'smooth'
		});
	}

	// Event listeners
	window.addEventListener('scroll', toggleButton, { passive: true });
	button.addEventListener('click', scrollToTop);

	// Check initial scroll position
	toggleButton();
})();
