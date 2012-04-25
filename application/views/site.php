
 	<section class="contenu">
 	    <div class="sevencol">
      		<h1>Bienvenue sur le site de l’aren</h1>
      		 <?php
			
	if (!empty($presentation)){
		foreach($presentation as $row)
		{
			$id = $row -> id; 
    		$titre = $row -> titre; 
    		$texte= $row -> texte; 	
    		$pageAccueil = $row -> pageAccueil;  
    		
   			if ($pageAccueil == 1)
		{
			echo '<h2>'.$titre.'</h2>';
			echo $texte;
		}
   }
 }
?> 
      		
      		<p class="infoLien"><a href="<?php echo base_url();?>index.php/site/presentation"><span></span>En savoir plus</a></p>
    	</div>
   	<div class="fivecol last polaroids">
   		<p class="etiquette">
   		Venez nous soutenir en devenant membre de l’AREN !
   		<span class="tape"></span>
   		<span class="shadow"></span></p>
		<p class="pola01">
			<img src="<?php echo base_url();?>images/pola01.jpg" alt="itinéraires équestres" />
			<span class="tape"></span>
			<span class="shadow"></span>
		</p>
		<p class="pola02">
			<img src="<?php echo base_url();?>images/pola02.jpg" alt="Discussion" />
			<span class="tape"></span>
			<span class="shadow"></span>
		</p>
    </div>
    	
    <hr/>	
 	</section>
 	<p class="spacer"></p> 
 	 <section class="contenu">
  	    <div class="sevencol">
 	     <h3>Découvrez nos activités</h3>
 	    	<article class="activites">
 	    	<div class="icon"><img src="<?php echo base_url();?>images/icons/pin.png" alt="itinéraires équestres" /></div>
      			<h4>itinéraires équestres</h4>
      			<p>Soutenir l’essor croissant de <strong>la randonnée équestre</strong> dans le canton de Neuchâtel 
      			et assurer la continuité des tracés avec les différents réseaux équestres des régions et cantons voisins.</p>
      		</article>
      		<article class="activites last">
      		<div class="icon"><img src="<?php echo base_url();?>images/icons/home.png" alt="Hébergements" /></div>
      			<h4>Hébergements</h4>
      			<p>Disposer d’un <strong>répertoire d’hébergements</strong> (gîtes équestres, aventure sur la paille, chambres d’hôtes, écuries, manèges, etc.) pour la pratique de la randonnée. </p>
      		</article>
      		<hr/>
      		<article class="activites">
      		<div class="icon"><img src="<?php echo base_url();?>images/icons/star.png" alt="améliorations" /></div>
      			<h4>améliorations</h4>
      			<p>Aider au développement <strong>d’itinéraires équestres </strong> alliant les caractéristiques naturelles et culturelles de chaque région et développer la parahôtellerie en milieu agricole.</p>
      		</article>
      		<article class="activites last">
      		<div class="icon"><img src="<?php echo base_url();?>images/icons/talk.png" alt="Dialogue" /></div>
      			<h4>Dialogue</h4>
      			<p>Améliorer le dialogue et la tolérance entre tous les utilisateurs de chemins de randonnées
      			 et inciter les cavaliers à <strong>l’évasion équestre</strong> . </p>
      		</article>
    	</div>
   		<div class="fivecol last">
   		<h3>Découvrez une nouvelle randonnée</h3>
   		<p class="location"><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting.</p>
   			<div class="map">
   				<?php echo $map['html']; ?>
   			</div>
   			<p class="infoLien"><a href="#"><span></span>En savoir plus</a></p>
    	</div>
    	
    <hr/>	
 	</section>
