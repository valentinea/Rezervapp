<html>
<head>
	<meta charset="utf-8">

</head>


<body>

	<?php

	 if (isset($_GET["change"])) {
	 ?>
	 <script>   document.getElementById("myDiv").innerHTML = "PMF Rulz";  </script>
	  <?php
	} ?>

	<script>

		function loadXMLDoc(){

			var xmlhttp;
			//xmlhttp = new XMLHttpRequest();

			if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
  				xmlhttp = new XMLHttpRequest();
  			}
			else {// code for IE6, IE5
  				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

             xmlhttp.onreadystatechange = function() {
                if( xmlhttp.readyState == 4 && xmlhttp.status == 200 ) {
                    document.body.innerHTML = xmlhttp.responseText;
                    }
                }
  			//nakon što je stvoren request
  			// open(metoda get ili post, url=lokacija filea na serveru, async= true ili false, asinkrono ili sinkrono)
  			// send(string) šalje request na server...string=samo za post

  			xmlhttp.open("GET","24.php?change=1",true);
			xmlhttp.send();

		}

	</script>


		<div id="myDiv"> <h1> Na klik će ajax promijeniti ovaj text  </h1></div>

		<button type="button" onclick="loadXMLDoc()"> Klikni </button>

</body>

</html>
