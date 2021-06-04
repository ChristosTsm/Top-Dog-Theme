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

		$(".home-use-slider").slick({
			dots: false,
			prevArrow: $(".prev-home"),
			nextArrow: $(".next-home"),
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 4,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						dots: false,
					},
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						dots: true,
					},
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						dots: true,
					},
				},
			],
		});
		$("#products-professional-slider").slick({
			dots: false,
			prevArrow: $(".prev-pro"),
			nextArrow: $(".next-pro"),
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 4,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						dots: false,
					},
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						dots: true,
					},
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						dots: true,
					},
				},
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			],
		});

		if (document.querySelector(".product-tabs-cta-wrapper")) {
			let professionalUseCta = document.querySelector(
				"#professional-use-line"
			);
			let homeUseCta = document.querySelector("#home-use-line");

			let homeUseProductsContainer = document.querySelector(
				"#product-tabs-content-home"
			);
			let professionalProductsContainer = document.querySelector(
				"#product-tabs-content-professional"
			);

			professionalUseCta.addEventListener("click", () => {
				$("#products-professional-slider").slick("refresh");
				$(".home-use-slider").slick("unslick");

				professionalUseCta.classList.add("product-tab-active");
				professionalUseCta.classList.remove("product-tab-inactive");

				professionalProductsContainer.style.display = "block";

				homeUseProductsContainer.style.display = "none";

				homeUseCta.classList.remove("product-tab-active");
				homeUseCta.classList.add("product-tab-inactive");
			});

			homeUseCta.addEventListener("click", () => {
				$(".home-use-slider").slick("refresh");
				$("#products-professional-slider").slick("unslick");

				homeUseCta.classList.add("product-tab-active");
				homeUseCta.classList.remove("product-tab-inactive");

				homeUseProductsContainer.style.display = "block";
				professionalProductsContainer.style.display = "none";

				professionalUseCta.classList.remove("product-tab-active");
				professionalUseCta.classList.add("product-tab-inactive");
			});
		}
	});
})(jQuery);
