<html>
<?php 
error_reporting(0); 
$resulta = $_GET['resulta']; 
$cnametwo = $_GET['cnametwo']; 
$cnameone = $_GET['cnameone']; 
if (empty ($resulta)) { header("Location: ./");
die();; } else { 
?>
<?php require_once ('inc/head.php')?>
<body>
<?php require_once ('inc/menu.php')?>
	<div class="container">
		<div class="intro">
			<a href="./"><img width="120px" src="assets/love.gif" /></a>
			<h2>Ini Hasil Kalkulator Cinta Kalian Berdua</h2>
				<b class="names"> </br>
					<span><?php echo $cnameone; ?></span> <br> AND <br> <span><?php echo $cnametwo; ?></span>
				</b>
			<br>
			<br>
			<h3>
				<i class="fas fa-heart"></i> 
					<?php echo $resulta; ?>% Cocok
				<i class="fas fa-heart"></i> 
			</h3>
		</div>
		<input type="submit" class="share" onclick="javascript:fbshareCurrentPage()" value="Bagikan ke Facebook" >
		<script language="javascript">
			function fbshareCurrentPage()
			{window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+document.title, '', 
			'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
			return false; }
		</script>
		
		<p class="more"><a 
		data-action="share/whatsapp/share"
			href="whatsapp://send?text=
				Hasil Kalkulator Cinta Untuk :%0A
				%0A
                <?php echo $cnameone;?> &#9829; AND &#9829; <?php echo $cnametwo;?>%0A
				%0A
				Skor Kecocokan Cinta Mereka Berdua Adalah : <?php echo $resulta;?>% &#9829; %0A %0A
			">
				<span> Bagikan ke WhatsApp </span>
		</a>
		</p>
		</div>
	</div>
	<?php require_once ('inc/footer.php')?>				
</body>
</html>
<?php
	}
?>		

<!--
 	/*  PRADANA ADITIYA   *\
	/*  KALKULATOR CINTA  *\
-->
