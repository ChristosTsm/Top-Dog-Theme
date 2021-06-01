(function ($) {
	$(document).ready(function () {
		// Mobile Menu open & close
		if (document.querySelector("#open-menu")) {
			let openMenu = document.querySelector("#open-menu");
			let closeMenu = document.querySelector("#close-menu");
			let mobileMenu = document.querySelector(".mobile-menu");
			openMenu.addEventListener("click", () => {
				mobileMenu.classList.remove("hide-menu");
				openMenu.style.opacity = "0";
			});

			closeMenu.addEventListener("click", () => {
				mobileMenu.classList.add("hide-menu");
				openMenu.style.opacity = "1";
			});
		}

		if (document.querySelector(".nav-wrapper")) {
			let navbar_wrapper = document.querySelector(".nav-wrapper");

			// Change nav on scroll
			window.onscroll = function () {
				scrollFunction();
			};

			function scrollFunction() {
				if (
					document.body.scrollTop > 80 ||
					document.documentElement.scrollTop > 80
				) {
					navbar_wrapper.classList.add("scrolled-nav-mobile");
				} else {
					navbar_wrapper.classList.remove("scrolled-nav-mobile");
				}
			}
		}
	});
})(jQuery);
