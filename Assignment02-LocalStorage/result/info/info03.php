<?php include('header-info.php'); ?>

<div id="space"></div>


<div class="container_12">

	<div class="grid_7">
	
		<div id="card-name">
			<span class="card-name-title">Eddie's Pizza</span><br />
			<span class="card-name-cat">Italian</span><br /><br />
			<!-- <span class="card-address">89 5th Ave<br />New York, NY 10003-3046</span> -->
			<p>Greenwich & Reade St.<br />New York, NY 10003</p>
		</div>
		
		<div id="card-info">
			<span class="card-info-title">About this truck</span><br />
			<p>Eddies Pizza of New Hyde Park has been the original home of the bar pie since the 1930's. Now our truck is hitting the streets of NYC. Eddie's Pizza has been serving its famous Bar Pie's for over 60 years. After years and years of people requesting that we bring our pizza to the city, the day has finally come.<br />

Our mission is to provide the highest quality product and service to our customers on a daily basis.<br />

10" and 16" Pies Available in Regular or Whole Wheat</p>
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
			<iframe width="380" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Greenwich+St+%26+Reade+St+New+York,+NY+10013&amp;aq=&amp;sll=40.745761,-73.980904&amp;sspn=0.046624,0.080767&amp;ie=UTF8&amp;hq=&amp;hnear=Greenwich+St+%26+Reade+St,+New+York,+10013&amp;ll=40.716897,-74.010783&amp;spn=0.001466,0.002524&amp;t=m&amp;z=14&amp;output=embed"></iframe>
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