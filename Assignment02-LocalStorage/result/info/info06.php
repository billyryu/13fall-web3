<?php include('header-info.php'); ?>

<div id="space"></div>


<div class="container_12">

	<div class="grid_7">
	
		<div id="card-name">
			<span class="card-name-title">Big D's Grub</span><br />
			<span class="card-name-cat">Korean-Mexican</span><br /><br />
			<!-- <span class="card-address">89 5th Ave<br />New York, NY 10003-3046</span> -->
			<p>Hudson and King<br />New York, NY 10013</p>
		</div>
		
		<div id="card-info">
			<span class="card-info-title">About this truck</span><br />
			<p>Big D (aka Dennis) is a native New Yorker born and raised with a big love of food. While growing up in the culinary mecca of Queens, his family gatherings always featured good food with bold flavors influenced by Guyana, the American South and China in the spotlight. His family’s delicious, down home food played a huge part in Big D’s childhood and then ultimately shaped his love of food which became a desire to learn how to cook. His dream is to share his passion for food with everyone and now it’s a reality with Big D’s Grub Truck. This brainchild of Big D’s desire to share honest, good tasting food with a focus on big flavors and big tastes is now hitting the streets of Manhattan. Big D is proud to bring his big flavored cooking to the people of New York!</p>
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