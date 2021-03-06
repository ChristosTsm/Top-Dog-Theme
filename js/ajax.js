(function ($) {
	$(document).ready(function () {
		function getSliderSettings() {
			return {
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
						},
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
						},
					},
				],
			};
		}

		$(document).on("click", ".js-filter-item > a", function (e) {
			e.preventDefault();

			var category = $(this).data("category");

			let links = document.querySelectorAll(".js-filter-item > a");

			links.forEach((link) => {
				link.classList.remove("active-cat");
				link.classList.add("inactive-cat");
			});

			e.target.classList.add("active-cat");
			e.target.classList.remove("inactive-cat");

			$.ajax({
				url: wp_ajax.ajax_url,
				data: { action: "filter", category: category },
				type: "post",
				success: function (result) {
					$(".home-use-slider").slick("unslick");
					$(".js-filter").html(result);
					$(".home-use-slider")
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
