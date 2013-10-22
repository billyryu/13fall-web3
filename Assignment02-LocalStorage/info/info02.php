<?php include('header-info.php'); ?>

<div id="space"></div>


<div class="container_12">

	<div class="grid_7">
	
		<div id="card-name">
			<span class="card-name-title">The Bistro Truck</span><br />
			<span class="card-name-cat">French, Mediterranean</span><br /><br />
			<!-- <span class="card-address">89 5th Ave<br />New York, NY 10003-3046</span> -->
			<p>89 5th Ave<br />New York, NY 10003-3046</p>
		</div>
		
		<div id="card-info">
			<span class="card-info-title">About this truck</span><br />
			<p>Launched by Moroccan-born Yassir Z. Raouli, The Bistro Truck runs in the Union Square area with the concept of an affordable Bistro menu with a Moroccan-Mediterranean influence.<br /><br />

We are a street side mobile restaurant serving real-deal roasted lamb over couscous, Grass fed beef Bistro burgers and more... Specials and dessert are added to your enjoyment daily! Ready to satisfy any urge with fresh gourmet food while you're on the go.<br /><br />

The desire of finding restaurant quality food in the streets of NYC drove us to launch the concept of Bistro Truck concentrating on quality and affordability-- a food truck for street food lovers in NY not to be missed!</p>
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
			<iframe width="380" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=89+5th+Ave,+New+York,+NY+10003-3046&amp;aq=&amp;sll=40.697488,-73.979681&amp;sspn=1.49302,2.584534&amp;ie=UTF8&amp;hq=&amp;hnear=89+5th+Ave,+New+York,+10003&amp;t=m&amp;ll=40.737551,-73.992469&amp;spn=0.005691,0.00912&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>
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