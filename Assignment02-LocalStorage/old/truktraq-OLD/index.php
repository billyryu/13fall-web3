<?php include('header.php'); ?>


    <section id="home" class="page">
    <!-- <section id="home"> -->
        <iframe width='100%' height='400' frameborder='0' src='http://billyryu.cartodb.com/viz/e75f34c2-390d-11e3-9d63-1f86795e476d/embed_map?title=false&description=false&search=false&shareable=false&cartodb_logo=false&layer_selector=false&legends=false&scrollwheel=false&sublayer_options=1&sql=&sw_lat=40.73590913117518&sw_lon=-74.01476383209229&ne_lat=40.75684745958904&ne_lon=-73.95764350891112'></iframe>
        <!--
<p>Locations in NYC!</p>
        <section class="feed">
            <ul>
                <li class="template"><img /><span></span>: <strong></strong> <em></em></li>
            </ul>
        </section>
-->


	<?php include('body01.php'); ?>
	<?php include('body02.php'); ?>
    </section><!-- END #home -->


<div class="container_12">
    <section id="random" class="page">
        <p>Add a random location to map</p>
        <p><button class="addRandom">Add Random Location</button></p>
    </section><!-- END #home -->

    <section id="location" class="page">
        <p>Add current location to map</p>
        <p><button class="addLocation">Add Current Location</button></p>
    </section><!-- END #home -->

    <div class="notice">loading...</div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

    <script src="js/main.js"></script>
    
</div><!-- end .container_12 -->


<?php include('footer.php'); ?>