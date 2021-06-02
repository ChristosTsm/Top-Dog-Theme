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

		// Change nav on scroll
		if (document.querySelector(".nav-wrapper")) {
			let navbar_wrapper = document.querySelector(".nav-wrapper");

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

		// Slider Config
		if (document.querySelector("#td-story")) {
			$(".our-story-slider").slick({
				prevArrow: $(".prev"),
				nextArrow: $(".next"),
				dots: false,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							dots: false,
						},
					},
					{
						breakpoint: 320,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							dots: true,
						},
					},
				],
			});
		}

		// Tabs Config
		if (document.querySelector(".product-line-tabs")) {
			const tabs = document.querySelectorAll("[data-tab-target]");
			const tabContents = document.querySelectorAll(
				".product-line-tab-content"
			);

			tabs[0].classList.add("tab-active-title");
			tabContents[0].classList.add("tab-active");

			tabs.forEach((tab) => {
				tab.addEventListener("click", () => {
					const target = document.querySelector(
						tab.dataset.tabTarget
					);
					tabContents.forEach((tabContent) => {
						tabContent.classList.remove("tab-active");
						tabContent.classList.add("tab-hidden");
					});
					tabs.forEach((tab) => {
						tab.classList.remove("tab-active-title");
					});
					tab.classList.add("tab-active-title");
					target.classList.remove("tab-hidden");
					target.classList.add("tab-active");
				});
			});
		}
	});
})(jQuery);
