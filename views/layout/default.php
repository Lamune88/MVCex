<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Demo Restaurant | Porto - Multipurpose Website Template</title>	

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<link rel="shortcut icon" href="media/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="media/img/apple-touch-icon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLora:400,500,700&display=swap" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="media/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="media/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="media/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="media/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="media/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="media/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="media/vendor/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" href="media/css/theme.css">
		<link rel="stylesheet" href="media/css/theme-elements.css">
		<link rel="stylesheet" href="media/css/theme-blog.css">
		<link rel="stylesheet" href="media/css/theme-shop.css">
		<link rel="stylesheet" href="media/css/demos/demo-restaurant.css">
		<link id="skinCSS" rel="stylesheet" href="media/css/skins/skin-restaurant.css">
		<link rel="stylesheet" href="media/css/custom.css">
		<script src="media/vendor/modernizr/modernizr.min.js"></script>
	</head>

	<body>

        <?= $content ?>

		<!-- Vendor -->
		<script src="media/vendor/jquery/jquery.min.js"></script>
		<script src="media/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="media/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="media/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="media/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="media/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="media/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="media/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="media/vendor/lazysizes/lazysizes.min.js"></script>
		<script src="media/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="media/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="media/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="media/vendor/vide/jquery.vide.min.js"></script>
		<script src="media/vendor/vivus/vivus.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="media/js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="media/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="media/js/theme.init.js"></script>

	    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script>
			function initializeGoogleMaps() {
				var initLatitude = 40.75198;
				var initLongitude = -73.96978;
				var mapMarkers = [{
					latitude: initLatitude,
					longitude: initLongitude,
					html: "<strong>Porto Restaurant</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
					icon: {
						image: "img/demos/restaurant/pin.png",
						iconsize: [26, 27],
						iconanchor: [12, 27]
					}
				}];
				var mapSettings = {
					controls: {
						draggable: (($.browser.mobile) ? false : true),
						panControl: false,
						zoomControl: false,
						mapTypeControl: false,
						scaleControl: false,
						streetViewControl: false,
						overviewMapControl: false
					},
					scrollwheel: false,
					markers: mapMarkers,
					latitude: initLatitude,
					longitude: initLongitude,
					zoom: 14
				};

				var map = $('#googlemaps').gMap(mapSettings),
					mapRef = $('#googlemaps').data('gMap.reference');

				var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

				var styledMap = new google.maps.StyledMapType(styles, {
					name: 'Styled Map'
				});

				mapRef.mapTypes.set('map_style', styledMap);
				mapRef.setMapTypeId('map_style');
			}
			theme.fn.intObs( '#googlemaps', 'initializeGoogleMaps()', {} );

			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

		</script>
	</body>
</html>