
<? $meta = [
	'title' => 'Visit - Ferry Building Marketplace',
] ?>

<div id="content" class="site-content">



	<section class="sub-page-header" style="background-image:url('<?= $baseURL ?>/assets/img/fb-visit-main.jpg');">
		<h1>Visiting the Ferry Building</h1>
	</section>

	<? include $pagesPath . 'inc/nav-categories.php'?>

	<div class="g-yellow-background g-small-padding-top">
		<div class="row g-section-padding-top">
			<div class='small-12 columns g-header-3'>
				<hr>
				<h3>OVERVIEW & HOURS</h3>
				<hr>
			</div>
		</div>
	</div>

	<section class="g-two-col-infobox g-yellow-background two-col-infobox-mobile">
		<div class="row mobile-content-pad">
			<div class="infobox-wrapper">

				<div class="content-area info-left-side-content column medium-12 large-6">

					<article id="post-103" class="post-103 page type-page status-publish has-post-thumbnail hentry">
						<header class="entry-header">
							<h1 class="entry-title">Visit</h1>	</header><!-- .entry-header -->

						<div class="entry-content">
							<p>The Ferry Building Marketplace is located along the Embarcadero at the foot of Market Street. It is the center of a transit hub that connects all of San Francisco&#8217;s neighborhoods and the surrounding bay communities. The marketplace is accessible by MUNI, BART and Ferry Boat. The historic trolley cars (Line F Market) stop directly in front of the Ferry Building.</p>
						</div><!-- .entry-content -->

						<footer class="entry-footer">
						</footer><!-- .entry-footer -->
					</article><!-- #post-## -->

					<a class="orange-btn" href="/overview">Learn more</a>
				</div>

				<div id="primary-right" class="content-area info-box-right darker-info-box column small-12 medium-12 large-6">
					<div class="info-box">
						<div class="row visit-box">
							<h3>General Hours</h3>
							<p>Monday-Friday 10am &#8211; 7pm</p>
							<p>Saturday 8am &#8211; 6pm</p>
							<p>Sunday 11am &#8211; 5pm</p>
							<p><strong><em>Hours for individual businesses may vary.<br />
										Please check merchant&#8217;s page for specific hours.</em></strong></p>
							<p>&nbsp;</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="transportation-parking">
		<div class="col-half g-small-padding-right">
			<div class="transportation-inner">
				<div class="constrain">
					<h2>Transportation & Parking</h2>
					<div class="transport-and-parking-img">
						<img src="<?= $baseURL ?>/assets/img/transport-parking-img-sm.jpg" />
					</div>            <p>Getting to the Ferry Building is easy. For more information and directions, visit our parking and transportation page.</p>
					<a class="orange-btn" href="/visit/transportation/">Let's go</a>
				</div>
			</div>
		</div>

		<div class="col-half">
			<div id="map"></div>
		</div>
		<div class="clearfloat"></div>
	</section>

	<section class="faq-section visit-faq g-yellow-background">
		<div class="row mobile-content-pad">
			<div class='small-12 columns g-header-3'>
				<hr>
				<h3>Frequently Asked Questions</h3>
				<hr>
			</div>
		</div>
		<div class="row mobile-content-pad">
			<div class='small-12 large-6 columns'>


				<ul class="faq">



					<li class="question">Do you have a Lost & Found?</li>
					<li class="answer"><p>Yes we do. It is in our Office Lobby located on the first floor, on the Embarcadero side of the building, between the historic stairs and the North Arcade shops.</p>
						<p>The direct phone number for our Lost &#038; Found is 415-983-8007.</p>
						<p>We hope you find what you are looking for.</p>
					</li>



					<li class="question">Do you have a Ferry Building gift card?</li>
					<li class="answer"><p>Unfortunately, we do not offer a gift card since the merchants are individual businesses and they do not have the same Point of Sale systems. Maybe one day!</p>
					</li>


				</ul></div><div class='small-12 large-6 columns'><ul class="faq">

					<li class="question">What are the winter holiday hours of the Ferry Building Marketplace?</li>
					<li class="answer"><p>On Sunday, December 25 in observance of the Christmas holiday, all of the shops and the building itself will be closed. On New Year&#8217;s Eve and New Years Day, the building and the shops will be open, but with shortened hours. The <a href="http://www.cuesa.org/" target="_blank" rel="noopener">FARMERS MARKETS</a> will be running on regular schedule for the next two weeks.</p>
					</li>



					<li class="question">What are the hours of the Ferry Building Marketplace?</li>
					<li class="answer"><p>The building opens at 7am and closes at 10pm, but the shops in the marketplace have their own hours. There are over 50 shops and the hours vary, but generally they open at 10am and close at 7pm, Mondays through Fridays; open at 9am and close at 6pm on Saturdays; and open at 11am and close at 5pm on Sundays.</p>
						<p>Please <a href="/merchants">check the individual merchant listings</a> for specific times, days and phone numbers.</p>
					</li>


















































				</ul>


			</div>
		</div>
		<div class="row">
			<div class='small-12 columns g-align-center'>
				<a class="orange-btn" href="/visit/faq/">See all questions</a>
			</div>
		</div>
	</section>



	<script>
    function initMap() {
      var eventLoc = {lat: 37.795661, lng: -122.393450};
      var mapDiv = document.getElementById('map');

      var map = new google.maps.Map(mapDiv, {
        center: {lat: 37.795661, lng: -122.393450},
        scrollwheel: false,
        draggable: false,
        zoom: 16
      });

      map.set('styles', [
        {
          "featureType": "water",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "color": "#d3d3d3"
            }
          ]
        },
        {
          "featureType": "transit",
          "stylers": [
            {
              "color": "#808080"
            },
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "visibility": "on"
            },
            {
              "color": "#b3b3b3"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "color": "#ffffff"
            }
          ]
        },
        {
          "featureType": "road.local",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "visibility": "on"
            },
            {
              "color": "#ffffff"
            },
            {
              "weight": 1.8
            }
          ]
        },
        {
          "featureType": "road.local",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#d7d7d7"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "visibility": "on"
            },
            {
              "color": "#ebebeb"
            }
          ]
        },
        {
          "featureType": "administrative",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#a7a7a7"
            }
          ]
        },
        {
          "featureType": "road.arterial",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "color": "#ffffff"
            }
          ]
        },
        {
          "featureType": "road.arterial",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "color": "#ffffff"
            }
          ]
        },
        {
          "featureType": "landscape",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "visibility": "on"
            },
            {
              "color": "#efefef"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#696969"
            }
          ]
        },
        {
          "featureType": "administrative",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "visibility": "on"
            },
            {
              "color": "#737373"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "labels.icon",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "labels",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "road.arterial",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#d6d6d6"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "labels.icon",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {},
        {
          "featureType": "poi",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "color": "#dadada"
            }
          ]
        }
      ]);


      var marker = new google.maps.Marker({
        position: eventLoc,
        // icon: "https://pages.apigee.com/rs/351-WXY-166/images/city-tours-pin.png",
        map: map
      });

      var contentString = '<div class="map-info"><div class="map-info-txt"><h3>Ferry Building Marketplace </h3><p>One Ferry Building <br /> San Francisco, California 94111 <br /> (415) 983-8030</p></div></div>';

      var infowindow = new google.maps.InfoWindow({
        content: contentString
      });

      infowindow.open(map,marker);

      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
      });
    } /* End Google Map */
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyDdfUSOCDzDV35GPkHTWPTbxu2IZnqpGiM" async defer></script>


</div><!-- #content -->