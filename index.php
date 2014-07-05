<!DOCTYPE html>
<?php
    date_default_timezone_set ('UTC');

    switch(date('H')){
        case '00': //Salt Lake City
            $timezone = array('name' => 'Salt Lake City', 'location' => '40.760779,-111.891047', 'img' => 'resources/SaltLakeCity.jpg');
            break;

        case '01': //Las Vegas
            $timezone = array('name' => 'Las Vegas', 'location' => '36.169941,-115.13983', 'img' => 'resources/LasVegas.jpg');
            break;

        case '02': //Pacific Ocean
            $timezone = array('name' => 'Pacific Ocean', 'location' => '-8.783195,-124.508523', 'img' => 'resources/PacificOcean.jpg');
            break;

        case '03': //Anchorage
            $timezone = array('name' => 'Anchorage', 'location' => '61.218056,-149.900278', 'img' => 'resources/Anchorage.jpg');
            break;

        case '04': // Rarotonga
            $timezone = array('name' => 'Rarotonga', 'location' => '-21.229237,-159.776349', 'img' => 'resources/Rarotonga.jpg');
            break;

        case '05': //Aukland
            $timezone = array('name' => 'Aukland', 'location' => '-36.84846,174.763332', 'img' => 'resources/Aukland.jpg');
            break;

        case '06': //Port Vila
            $timezone = array('name' => 'Port Vila', 'location' => '-17.733251,168.327325', 'img' => 'resources/PortVila.jpg');
            break;

        case '07': // Melbourne
            $timezone = array('name' => 'Melbourne', 'location' => '-37.814107,144.96328', 'img' => 'resources/Melbourne.jpg');
            break;

        case '08': //Tokyo
            $timezone = array('name' => 'Tokyo', 'location' => '35.689488,139.691706', 'img' => 'resources/Tokyo.jpg');
            break;

        case '09': //Hong Kong
            $timezone = array('name' => 'Hong Kong', 'location' => '22.276687,114.164429', 'img' => 'resources/HongKong.jpg');
            break;

        case '10': //Hanoi
            $timezone = array('name' => 'Hanoi', 'location' => '21.033333,105.85', 'img' => 'resources/Hanoi.jpg');
            break;

        case '11': //Yekaterinburg
            $timezone = array('name' => 'Yekaterinburg', 'location' => '56.833333,60.583333', 'img' => 'resources/Yekaterinburg.jpg');
            break;

        case '12': //Oral
            $timezone = array('name' => 'Oral', 'location' => '51.233333,51.366667', 'img' => 'resources/Oral.jpg');
            break;

        case '13': //Moscow
            $timezone = array('name' => 'Moscow', 'location' => '55.755826,37.6173', 'img' => 'resources/Moscow.jpg');
            break;

        case '14': //Helsinki
            $timezone = array('name' => 'Helsinki', 'location' => '60.173324,24.941025', 'img' => 'resources/Helsinki.jpg');
            break;

        case '15': //Amsterdam
            $timezone = array('name' => 'Amsterdam', 'location' => '52.370216,4.895168', 'img' => 'resources/Amsterdam.jpg');
            break;

        case '16': //London
            $timezone = array('name' => 'London', 'location' => '51.507351,-0.127758', 'img' => 'resources/London.jpg');
            break;

        case '17': //Casablanca
            $timezone = array('name' => 'Casablanca', 'location' => '33.533333,-7.583333', 'img' => 'resources/Casablanca.jpg');
            break;

        case '18'://Reykjavik
            $timezone = array('name' => 'Reykjavik', 'location' => '64.133333,-21.933333', 'img' => 'resources/Reykjavik.jpg');
            break;

        case '19': // Nuuk
            $timezone = array('name' => 'Nuuk', 'location' => '64.175,-51.738889', 'img' => 'resources/Nuuk.jpg');
            break;

        case '20': //Rio De Janeiro
            $timezone = array('name' => 'New York', 'location' => '-22.9083,-43.197077', 'img' => 'resources/RioDeJaneiro.jpg');
            break;

        case '21': //San Juan
            $timezone = array('name' => 'San Juan', 'location' => '-31.527273,-68.521408', 'img' => 'resources/SanJuan.jpg');
            break;

        case '22': // New York
            $timezone = array('name' => 'New York', 'location' => '40.744556,-73.987378', 'img' => 'resources/NewYork.jpg');
            break;

        case '23': //Mexico City
            $timezone = array('name' => 'Mexico City', 'location' => '19.432608,-99.133208', 'img' => 'resources/MexicoCity.jpg');
            break;
    }


?>
<head>
    <meta charset="utf-8" />
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="resources/script.js"></script>
    <script type="text/javascript">
	    window.onload = function() {
		    var myOptions = {
		        center: new google.maps.LatLng(<?php echo $timezone['location'] ?>),
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
			background-image:url("<?php echo $timezone['img'] ?>");
			margin-bottom:300px;
		}

    </style>
</head>
<body>
    <div id="map"></div>
    <div id="overlay"></div>
    <div id='text'>
    	<h2>It's 5:<?php echo date('i').'pm in '.$timezone['name'] ?></h2>
    	<h2>So go on, grab a drink.</h2>
    </div>
    <div class='circle' style=''>
    </div>
</body>
</html>