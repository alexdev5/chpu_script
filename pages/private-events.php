<? $meta = [
	'title' => 'Events - Ferry Building Marketplace',
] ?>



<div id="content" class="site-content">



	<section class="sub-page-header" style="background-image:url('/assets/img/fb-events-main.jpg');">
		<h1>Events</h1>        </section>

	<section class="pe-main-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<div class="row mobile-content-pad">
					<div class='small-12 columns g-header-3'>
						<hr>
						<h3>PRIVATE EVENTS AT THE FERRY BUILDING</h3>                  <hr>
					</div>
				</div>

				<div class="row pe-primary-content mobile-content-pad">
					<div class="small-12 medium-6 columns pe-left-side-content">
						<p><p>The Ferry Building is a one-of-a-kind venue, featuring event and programming space spanning dynamic interior and exterior locations. An iconic San Francisco landmark, the Ferry Building is located at the intersection of the city’s major thoroughfares and the waterfront. The site boasts integration potential with a world-class culinary marketplace renowned for local flavor and international influence. Spaces for activation include:</p>
						</p>                </div>
					<div class="small-12 medium-6 columns pe-right-side-content">
						<p><p>The Grand Hall features a soaring ceiling and skylights illuminating 6,500 square feet of historic mosaic tile.</p>
						<p>The Port Hearing Room includes turn-key event amenities and stunning SF Bay views through floor to ceiling windows.</p>
						<p>The Front &amp; Back Plazas offer sprawling indoor and outdoor footprints along San Francisco’s beloved waterfront, creating a foundation for expansive, immersive experiences.</p>
						</p>                </div>
				</div>

			</main><!-- #main -->
		</div><!-- #primary -->
	</section>


	<!-- Gallery Section -->

	<section class="pe-image-gallery">

		<div class="col-half">
			<div class="pe-gallery pe-gallery-carousel">
				<div class="pe-thumbs item">

					<div class="pe-thumbnail">
						<div class="pe-thumb-img" alt="Skylight at The Ferry Building Back Plaza" style="background-image:url('/assets/img/Skylight-at-The-Ferry-Building-Back-Plaza.jpg');"></div>
					</div>

					<div class="pe-thumbnail">
						<div class="pe-thumb-img" alt="Skylight at The Ferry Building Port Commission Hearing Room" style="background-image:url('/assets/img/Skylight-at-The-Ferry-Building-Port-Commission-Hearing-Room.jpg');"></div>
					</div>

					<div class="pe-thumbnail">
						<div class="pe-thumb-img" alt="Skylight at The Ferry Building Port Commission Hearing Room View" style="background-image:url('/assets/img/Skylight-at-The-Ferry-Building-Port-Commission-Hearing-Room-View.jpg');"></div>
					</div>

					<div class="pe-thumbnail">
						<div class="pe-thumb-img" alt="Skylight at The Ferry Building Port Commission Hearing Room Event" style="background-image:url('/assets/img/Skylight-at-The-Ferry-Building-Port-Commission-Hearing-Room-Event.jpg');"></div>
					</div>

					<div class="pe-thumbnail">
						<div class="pe-thumb-img" alt="Skylight at The Ferry Building Grand Hall" style="background-image:url('/assets/img/Skylight-at-The-Ferry-Building-Grand-Hall.jpg');"></div>
					</div>

					<div class="pe-thumbnail">
						<div class="pe-thumb-img" alt="Skylight at The Ferry Building Grand Hall Lighting" style="background-image:url('/assets/img/Skylight-at-The-Ferry-Building-Grand-Hall-Lighting.jpg');"></div>
					</div>

					<div class="pe-thumbnail">
						<div class="pe-thumb-img" alt="Skylight at the Ferry Building Grand Hall Event" style="background-image:url('/assets/img/Skylight-at-the-Ferry-Building-Grand-Hall-Event.jpg');"></div>
					</div>

					<div class="pe-thumbnail">
						<div class="pe-thumb-img" alt="Skylight at The Ferry Building Grand Hall Detail" style="background-image:url('/assets/img/Skylight-at-The-Ferry-Building-Grand-Hall-Detail.jpg');"></div>
					</div>

					<div class="pe-thumbnail">
						<div class="pe-thumb-img" alt="Skylight at The Ferry Building Front Arcade" style="background-image:url('/assets/img/Skylight-at-The-Ferry-Building-Front-Arcade.jpg');"></div>
					</div>


				</div>
			</div>
		</div>

		<div class="col-half">
			<div class="pe-gallery pe-active" id="big-gallery-img">
				<div class="pe-full-img">
				</div>
				<div id="pe-orange-bar">
					<p id="pe-full-img-caption"></p>
				</div>
			</div>
		</div>

	</section>


	<div class="clearfloat"></div>

	<!-- Form Section -->
	<section class="pe-form">
		<div class="row">
			<div class="small-12 columns">

				<div class="pe-event-copy g-header-3">
					<hr>
					<h3>EVENT INQUIRIES</h3>
					<hr>
					<p>For event rental inquiries and programming partnership opportunities, please email <a href="mailto:ferry@skylightstudios.com">ferry@skylightstudios.com</a>.</p>
				</div>

			</div>
		</div>
	</section>

	<!-- End Form Section -->

	<script type="text/javascript">

    jQuery(document).ready(function($) {

      // $('.pe-gallery-carousel').owlCarousel({
      //     dots:true,
      //     dotsEach:true,
      //     loop:true,
      //     // animateIn: 'fadeIn',
      //     // animateOut: 'fadeOut',
      //     mouseDrag:false,
      //     responsive:{
      //         0:{
      //             items:1
      //         },
      //         600:{
      //             items:1
      //         },
      //         1000:{
      //             items:1
      //         }
      //     }
      // });

      //Set Full Image
      var setBkg = $(".pe-thumb-img:first-child").css('background-image');
      var setCaption = $(".pe-thumb-img:first-child").attr('alt');
      $(".pe-full-img").css('background-image', setBkg);
      $("#pe-full-img-caption").html(setCaption);
      // Hover image change
      $(".pe-thumb-img").hover(function() {
        var bkg = $(this).css('background-image');
        var caption = $(this).attr('alt');
        $("#pe-full-img-caption").html(caption);
        $(".pe-full-img").css("opacity","0").css('background-image', bkg).css("opacity","1");
      });



    });

	</script>


</div><!-- #content -->