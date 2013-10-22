<?php include('header-info.php'); ?>

<div id="space"></div>


<div class="container_12">

	<div class="grid_7">
	
		<div id="card-name">
			<span class="card-name-title">Old Traditional Polish Cuisine</span><br />
			<span class="card-name-cat">Sausages, Polish</span><br /><br />
			<!-- <span class="card-address">89 5th Ave<br />New York, NY 10003-3046</span> -->
			<p>52nd St & 6th Ave.<br />New York, NY 10013</p>
		</div>
		
		<div id="card-info">
			<span class="card-info-title">About this truck</span><br />
			<p>Katch it if you can! The Katchkie Truck hit the streets of NYC in May 2011 boasting a menu of farm fresh fare inspired by our organic Katchkie Farm. Open Monday-Friday for lunch, the truck will be parked in our Hudson Square Urban Courtyard, located on Spring Street between Hudson and Varick. </p>
		</div>
		
		
		
		<div id="local-comments" class="container">
            <span class="card-info-title">How was it?</span><br />
            <form id="draft">
            	<!-- <label for="name">Name</label> -->
                <input id="name" name="name" placeholder="Your Name">
                <br />
                <!-- <label for="title">Title</label> -->
                <input id="title" name="title" placeholder="Title">
                <br />
                <!-- <label for="content">Content</label> -->
                <textarea id="content" name="content" placeholder="Leave a tip for others..."></textarea>
                
                <button>Publish</button>
            </form>
        
        </div><!-- // .container -->

        <div id="feed" class="container">
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="../js/localstorage.js"></script>
		
			
	</div>
	
	
	
	
	<div class="grid_5">
	
		<div id="googlemap">
			<iframe width="380" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=52nd+and+6th,+New+York,+NY&amp;aq=&amp;sll=40.697488,-73.979681&amp;sspn=1.49302,2.584534&amp;ie=UTF8&amp;hq=&amp;hnear=Avenue+of+the+Americas+%26+W+52nd+St,+New+York,+10019&amp;ll=40.761149,-73.979528&amp;spn=0.002913,0.005048&amp;t=m&amp;z=14&amp;output=embed"></iframe>
		</div>
		
		<div class="bttn-menu">
			<a href="#"><span class="card-info-title">Menu</span></a>
		</div>
		
		<div class="bttn-menu">
			<a href="#"><span class="card-info-title">Book Now</span></a>
		</div>
	
	</div>

</div>


<?php include('footer-info.php'); ?>