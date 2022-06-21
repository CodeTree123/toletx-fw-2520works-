<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css"
		media="all" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript">
	</script>

	<style>
		 
 

		.sliderText {
			width: 40%;
			  
			padding: 10px 0 10px 0px;
			font-weight: bold;
		}

		.ui-slider-horizontal {
			height: .6em;
		}

		.ui-slider-horizontal {
			margin-bottom: 15px;
			width: 40%;
		}

		.ui-widget-header {
			background: #ff00b3;
		}

		.price-range-search {
			width: 40.5%;
			background-color: #f9f9f9;
			border: 1px solid #6e6666;
			min-width: 40%;
			display: inline-block;
			height: 32px;
			border-radius: 5px;
			float: left;
			margin-bottom: 20px;
			font-size: 16px;
		}

		.price-range-field {
			width: 20%;
			min-width: 16%;
			background-color: #f9f9f9;
			border: 1px solid #6e6666;
			color: black;
			font-family: myFont;
			font: normal 14px Arial, Helvetica, sans-serif;
			border-radius: 5px;
			height: 26px;
			padding: 5px;
		}

		.search-results-block {
			position: relative;
			display: block;
			clear: both;
		}
	</style>
</head>

<body>

	<div class="price-range-block">

		<div class="sliderText"> Price Range  </div>

		<!-- <div id="slider-range" class="price-filter-range" name="rangeInput"></div> -->
		 
		<div class="d-flex  ">
			<input type="number" min=100 max="9900000" oninput="validity.valid||(value='100');" id="min_price"
				class="price-range-field form-control mr-2" placeholder="Min-price" />
			<input type="number" min=100 max="10000000" oninput="validity.valid||(value='1000000');" id="max_price"
				class="price-range-field form-control" placeholder="Max-price" />
		</div>

		<!-- <button class="price-range-search" id="price-range-submit">Search</button> -->

		<!-- <div id="searchResults" class="search-results-block"></div> -->

	</div>
</body>

</html>


<script>
	$(document).ready(function () {

		$('#price-range-submit').hide();

		$("#min_price,#max_price").on('change', function () {

			$('#price-range-submit').show();

			var min_price_range = parseInt($("#min_price").val());

			var max_price_range = parseInt($("#max_price").val());

			if (min_price_range > max_price_range) {
				$('#max_price').val(min_price_range);
			}

			$("#slider-range").slider({
				values: [min_price_range, max_price_range]
			});

		});


		$("#min_price,#max_price").on("paste keyup", function () {

			$('#price-range-submit').show();

			var min_price_range = parseInt($("#min_price").val());

			var max_price_range = parseInt($("#max_price").val());

			if (min_price_range == max_price_range) {

				max_price_range = min_price_range + 100;

				$("#min_price").val(min_price_range);
				$("#max_price").val(max_price_range);
			}

			$("#slider-range").slider({
				values: [min_price_range, max_price_range]
			});

		});


		$(function () {
			$("#slider-range").slider({
				range: true,
				orientation: "horizontal",
				min: 100,
				max: 10000000,
				values: [100, 10000000],
				step: 100,

				slide: function (event, ui) {
					if (ui.values[0] == ui.values[1]) {
						return false;
					}

					$("#min_price").val(ui.values[0]);
					$("#max_price").val(ui.values[1]);
				}
			});

			$("#min_price").val($("#slider-range").slider("values", 0));
			$("#max_price").val($("#slider-range").slider("values", 1));

		});

		$("#slider-range,#price-range-submit").click(function () {

			var min_price = $('#min_price').val();
			var max_price = $('#max_price').val();

			$("#searchResults").text("Here List of products will be shown which are cost between " +
				min_price + " " + "and" + " " + max_price + ".");
		});

	});
</script>