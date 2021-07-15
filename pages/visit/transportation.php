<? $meta = [
	'title' => 'Transportation - Ferry Building Marketplace',
] ?>


<div id="content" class="site-content">

   <link rel="text/css" href="/assets/css/jquery-ui.min.css">



   <section class="sub-page-header" style="background-image:url('/assets/img/visit-main.jpg');">
      <h1>Transportation</h1>    </section>

	<? include $pagesPath . 'inc/nav-categories.php'?>

   <section class="g-yellow-background g-section-padding-top g-section-padding-bottom transportation-page-copy">
      <div class="row">
         <div class='small-12 columns g-header-3'>
            <hr>
            <h3>Driving & Parking</h3>
            <hr>
         </div>
      </div>
      <div class="row g-row-padding-top" id="driving-parking">
         <div class='small-12 large-6 columns centered mobile-content-pad'>
            <p>The Ferry Building is easy to get to from anywhere in San Francisco or from the Golden Gate Bridge, Bay Bridge or Peninsula.</p>
            <p>For detailed driving directions, visit <a href="../../maps/place/San Francisco Ferry Bldg, 1 Sausalito - San Francisco Ferry Bldg, San Francisco, CA 94111/@37.7955469,-122.3956064,17z/data=!3m1!4b1!4m5!3m4!1s0x808580668cd055bb0x9cbbc099ec82aef7!8m2!3d37.7.html" target="_blank" rel="noopener">Google Maps</a>. There are a number of affordable parking options within a couple blocks of the Ferry Building.</p>
            <h3>Ferry Building Valet Parking</h3>
            <p>The Ferry Building offers valet parking Monday thru Friday from 9:30am &#8211; 5:30pm. Attendants are at the north side curb by Gott’s ($15/hour, validated rate is $12/hour).</p>
            <h3>Veggie Valet for Farmers Market Shoppers on Saturdays</h3>
            <p>The Veggie Valet is a free service that allows you to drop off your farmers market purchases and either continue shopping or grab your car for curbside pickup. The Veggie Valet booth is open from 8am &#8211; 1pm on Saturdays.</p>
         </div>
         <div class='small-12 large-6 columns centered mobile-content-pad'>
            <h3>Validated Parking</h3>
            <ul class="parking-list">
               <li><div class="list-number"><p>1</p></div><p><strong>ProPark Parking Lot at Embarcadero &amp; Washington</strong><br>
                     ($4 &#8211; 1st hour, $8 &#8211; 2nd hour, $8 each additional hour thereafter. $62 Max Daily Rate. $25 Flat Rate after 5pm.) Attendants are onsite from Sun. &#8211; Fri. 8am &#8211; 8pm; Sat. 7am &#8211; 8pm</p>
               </li>
            </ul>

            <h3>General Parking</h3>
            <ul class="parking-list validated-list">
               <li><div class="list-number"><p>2</p></div><p><strong>Pier 3 along Northbound Embarcadero</strong><br>
                     offers parking at $5/hour.</p>
               </li>
               <li><div class="list-number"><p>3</p></div><p><strong>Pier ½  Motorcycle Parking</strong><br>
                     There are 40 spaces just north of the Ferry Building ($0.50/hour 7am &#8211; 7 pm; $0.25/hour 7pm &#8211; 11pm).</p>
               </li>
               <li><div class="list-number"><p>4</p></div><p><strong>Accessible Parking</strong><br>
                     There are two spots just south and north of the Ferry Building, along northbound Embarcadero.</p>
               </li>
            </ul>
         </div>
      </div>
   </section>

   <section id="parking-map">
      <div class="col-half g-small-padding-right centered">
         <div class="parking-inner centered">
            <div class="parking-constrain">
               <p>The Ferry Building Marketplace is located along The Embarcadero at the foot of Market Street.</p>
               <p>It is a transit hub that connects all of San Francisco&#8217;s neighborhoods and the surrounding bay communities.</p>
            </div>
         </div>
      </div>

      <div class="col-half">
         <div id="map">
            <img id="parking-map-zoom" src="<?= $baseURL ?>assets/img/Parking-map-rev.png">
         </div>
      </div>
      <div class="clearfloat"></div>
   </section>


   <section class="g-yellow-background g-section-padding-top g-section-padding-bottom transportation-page-copy">
      <div class="row">
         <div class='small-12 columns g-header-3'>
            <hr>
            <h3>Public Transit & BICYCLES</h3>
            <hr>
         </div>
      </div>
      <div class="row g-row-padding-top mobile-content-pad mobile-content-pad">
         <div class='small-12 large-6 columns centered'>
            <p>The Ferry Building is one of the most easily accessed locations in the Bay Area. We encourage shoppers to take public transit to spare the air. You can reach us by several ferry lines, all San Francisco BART lines, many MUNI lines, the F Market Streetcar, and the California Street Cable Car line. From the Peninsula, ride Caltrain and connect with Muni’s N-Judah. Find Bay Area transit information, maps, and schedules at <a href="../../index-17.htm">www.transit.511.org</a>.</p>
            <p><strong>Bay Area Rapid Transit (BART)</strong> The Embarcadero stop is just one block away. Go to <a href="../../index-14.htm" target="_blank" rel="noopener">www.bart.gov</a>.</p>
         </div>
         <div class='small-12 large-6 columns centered'>
            <p><strong>SF Municipal Railway (MUNI)</strong>  Busses, trains, and streetcars all stop at or near the Ferry Building. Plan your trip at <a href="../../index-17.htm" target="_blank" rel="noopener">www.transit.511.org</a>.</p>
            <p><strong>Bicycles</strong>  With a large bike lane, the Embarcadero is easily accessed by bicycle. Bike racks are located in front of and behind the building. We recommend that you use a sturdy U-lock, as there have been incidents of cable-clipping. For bike lane maps and cycling information, go to <a href="../../index-18.htm" target="_blank" rel="noopener">www.sfbike.org</a>.</p>
            <p><strong>Ferry Systems</strong>  For Vallejo, Oakland, and Alameda ferry schedules, visit <a href="../../index-19.htm" target="_blank" rel="noopener">www.sanfranciscobayferry.com</a>. For Larkspur, Sausalito, and Tiburon ferr schedules, visit <a href="../../ferry/schedules-maps/index.htm">goldengateferry.org.</a></p>
         </div>
      </div>
   </section>

   <section class="g-fullwidth-image" style="background-position: bottom center; background-image:url('<?= $baseURL ?>assets/img/fb-transportation.jpg');"></section>



   <script>

     jQuery(document).ready(function($) {

       var height = $("#parking-map-zoom").height();

       var parkingHeight = function() {
         setTimeout(function() {
           // Visit / Transportation Map Resizing
           if ($("#parking-map").width() < 1024) {
             var noResize = $( ".parking-inner" ).height();
             noResize = noResize + 80;
             $( ".parking-inner" ).css("height", noResize);
             $( window ).resize(function(e) {
               if (Modernizr.touch) {
                 e.preventDefault();
               }
               $( ".parking-inner" ).css("height", height);
             });

           } else {
             var startHeight = $("#parking-map-zoom").height();
             $( ".parking-inner" ).css("height", startHeight);

             $( window ).resize(function() {
               var height = $("#parking-map-zoom").height();
               if ($("#parking-map").width() < 800) {
                 height = height + 120;
               }
               $( ".parking-inner" ).css("height", height);
             });
           }
         }, 10);
       };

       parkingHeight();

       if (height == 0) {
         // setTimeout(function() {
         $("#parking-map-zoom").load(function() {
           parkingHeight();
         });
         // }, 100);
         console.log("height didnt load");
       }


     });

   </script>






</div><!-- #content -->