(function ($) {
	$(document).ready(function () {
		function getSliderSettings() {
			return {
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
			};
		}

		$(document).on("click", ".js-filter-item-pro > a", function (e) {
			e.preventDefault();

			var categorypro = $(this).data("categorypro");

			let links = document.querySelectorAll(".js-filter-item-pro > a");

			links.forEach((link) => {
				link.classList.remove("active-cat");
				link.classList.add("inactive-cat");
			});

			e.target.classList.add("active-cat");
			e.target.classList.remove("inactive-cat");

			$.ajax({
				url: wpAjax.ajaxUrl,
				data: { action: "filter_pro", categorypro: categorypro },
				type: "post",
				success: function (result) {
					$("#products-professional-slider").slick("unslick");
					$(".js-filter-pro").html(result);
					$("#products-professional-slider")
						.not(".slick-initialized")
						.slick(getSliderSettings());
				},
				error: function (result) {
					console.warn(result);
				},
			});
		});
	});
})(jQuery);
