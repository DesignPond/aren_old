	<p class="spacer"></p>
	<footer>
		<div class="sevencol">
		<div class="miniLogo"><a href="index.php"><img src="<?php echo base_url();?>images/logo-mini.png" alt="" /></a></div>
			<p class="adresse">
			© 2012  AREN  -  Association Réseau Equestre Neuchâtelois<br/>
			AREN  |  Brot-Dessus 24  |  2318 Brot-Plamboz <br/>
			079 / 337 86 09  |  <a href="mailto:reseau.equestre.aren@gmail.com">reseau.equestre.aren@gmail.com</a> 
			</p>
		</div>
		<div class="fivecol last">
			<div id="inscriptionNewsletter">
			<p class="newsletter">Inscription à la newsletter</p>
				<form action="<?php echo base_url();?>index.php/newsletter">
				<input  type="text" name="emailNewsletter" class="defaultText" title="Entrez votre e-mail" />
				<input type="submit" class="btnNewsletter" name="submit" value="Envoyer">
				</form>
			</div>
		</div>
		<hr/>	
	</footer>
</div>

</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28180770-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
