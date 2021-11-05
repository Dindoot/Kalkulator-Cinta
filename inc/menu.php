<script>
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
		x.className += " responsive";
	  } else {
		x.className = "topnav";
	  }
	}
</script>

<div class="topnav" id="myTopnav">
	<a href="./" class="home"><i class="far fa-heart"></i></a>
	<a href="about.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "about.php") { ?> selected <?php } ?>">Tentang Kami</a>
	<a href="faqs.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "faqs.php") { ?> selected <?php } ?>">FAQ's</a>	
	<a href="contact.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "contact.php") { ?> selected <?php } ?>">Kontak</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
</div>

<!--
 	/*  PRADANA ADITIYA   *\
	/*  KALKULATOR CINTA  *\
-->