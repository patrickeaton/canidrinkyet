<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="resources/script.js"></script>
    <script type="text/javascript">
	    window.onload = function() {
		    var myOptions = {
		        center: new google.maps.LatLng(40.744556,-73.987378),
		        zoom: 13,
		        mapTypeId: google.maps.MapTypeId.ROADMAP,
		        disableDefaultUI: true
		    };

		    var map = new google.maps.Map(document.getElementById("map"), myOptions);
		}
    </script>
    <style>
    	html, body{
    			height:100%;
    			margin:0;
    			font-family: 'Josefin Sans', sans-serif;
    	}
    	#map{
    		position: absolute;
    		width:100%;
    		height:100%;
    		z-index: 0;
    		bottom:0;
    		left:0;
    	}
    	#overlay{
    		position: absolute;
    		width:100%;
    		height:100%;
    		z-index: 5;
    		bottom:0;
    		top:0;
    		left:0;
    		background-color: #000000;
    		opacity: 0.65;
    	}
    	#text{
    		position: absolute;
    		z-index: 6;
    		bottom:30px;
    		left:30px;
    	}
    	h2{
    		color:#FFFFFF;
    		font-size:85px;
    		font-weight:300;
    		margin:0px;

    	}
    	.circle{
			background-size:cover;
			width:400px;
			height:400px;
			border-radius: 200px;
			-webkit-border-radius: 200px;
			-moz-border-radius: 200px;
			position: absolute;
			left:50%;
			margin-left:-200px;
			z-index: 5;
			top:150px;
			background-image:url("http://policonference.com/wp-content/uploads/2012/12/featured-1-nyc.jpg");
			margin-bottom:300px;
		}

    </style>
</head>
<body>
    <div id="map"></div>
    <div id="overlay"></div>
    <div id='text'>
    	<h2>It's 5:15pm in New York</h2>
    	<h2>So go on, grab a drink.</h2>
    </div>
    <div class='circle' style=''>
    </div>
</body>
</html>