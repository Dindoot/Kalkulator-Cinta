<html>
	<?php require_once ('inc/head.php')?>
<body>
	<?php require_once ('inc/menu.php')?>
	<form action="share.php">
		<div class="container">
			<div class="intro">
				<a href="./"><img width="120px" src="assets/lope.png" /></a>
				<h1><i class="fas fa-heart"></i> Kalkulator Cinta <i class="fas fa-heart"></i></h1>
				<p><b>Kalkulator Cinta</b> Untuk Menghitung Presentasi Cinta</p>
			</div>
			<div class="form-holder">
				<p>Masukkan dua nama orang dan tekan "Hitung Kecocokan Cinta" untuk melihat peluang hubungan Anda.</p>
				<input type="text" name="cnameone" placeholder="Nama Orang Pertama" size="5" id="cnameone" autocomplete="off">
				<input type="text" name="cnametwo" placeholder="Nama Orang Kedua" size="5" id="cnametwo" autocomplete="off">
				<input type="hidden" name="resulta" id="resulta">			
				<input type="button" value="Hitung Kecocokan Cinta" class="calc first" onclick="calc();smoothScroll(document.getElementById('second'))">		
			</div>
			<div id="second" class="guage-holder">    
				<div class="circle-mask">
					<div class="circle">
						<div class="circle-inner"></div> 
					</div>
				</div>
				<div class="percentage">0 %</div>
				<div class="gauge-copy"></div>
			</div>
			<div id="coutput"></div>
			</div>
		</div>	
	<?php require_once ('inc/footer.php')?>	
	</form>			
	<script>
		function gObj(B){
			var A;if(document.all){
				if(typeof B=="string"){return document.all(B)}
				else{ return B.style}
					}
			if(document.getElementById){
				if(typeof B=="string"){return document.getElementById(B)}
				else{return B.style}
					}
					return null
				}
			function showquickmsg(B,A){
				if(A){B="<div class='error'>"+B+"</div>"}
				gObj("coutput").innerHTML=B
				}
			function trimAll(A){
				while(A.substring(0,1)==" "){A=A.substring(1,A.length)}
				while(A.substring(A.length-1,A.length)==" "){A=A.substring(0,A.length-1)}
					return A
				}
			function getNum(A){
				outputNum=0;
				for(i=0;i<A.length;i++){outputNum+=A.charCodeAt(i)}
					return outputNum
				}
			function calc(){
				showquickmsg("<input class='more' type='submit' value='keterangan lebih lanjut..'>",true);
				cnameone=trimAll(gObj("cnameone").value);
				cnametwo=trimAll(gObj("cnametwo").value);
			if(cnameone.length<1){showquickmsg("<p>Harap lengkapi semua bidang yang wajib diisi</p>",true);return }
			else{
				if(cnametwo.length<1){showquickmsg("<p>Harap lengkapi semua bidang yang wajib diisi</p>",true);return }
				}
				cnameone=cnameone.toLowerCase();
				cnametwo=cnametwo.toLowerCase();
				totalNum=getNum(cnameone)*getNum(cnametwo);
				finalScore=totalNum%100;
		  var newVal = finalScore * 1.8 - 45;
		  $('.circle-inner, .gauge-copy').css({
			'transform' : 'rotate(' + newVal + 'deg)' 
		  });
		  $('.gauge-copy').css({
			'transform' : 'translate(-50%, -50%) rotate(' + finalScore * 1.8 + 'deg)'
		  });
		  $('.percentage').text(finalScore + ' %');
			document.getElementById("resulta").value = finalScore;
		};
		
		window.smoothScroll = function(target) {
			var scrollContainer = target;
			do { 
				scrollContainer = scrollContainer.parentNode;
				if (!scrollContainer) return;
				scrollContainer.scrollTop += 1;
			} while (scrollContainer.scrollTop == 0);
			var targetY = 0;
			do { 
				if (target == scrollContainer) break;
				targetY += target.offsetTop;
			} while (target = target.offsetParent);
			scroll = function(c, a, b, i) {
				i++; if (i > 30) return;
				c.scrollTop = a + (b - a) / 30 * i;
				setTimeout(function(){ scroll(c, a, b, i); }, 20);
			}
			scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
		}
	</script>					
</body>
</html>

<!--
 	/*  PRADANA ADITIYA   *\
	/*  KALKULATOR CINTA  *\
-->