<section class="contenu margeBottom">
  <h1>News</h1>
   <p class="retour"><a href="<?php echo base_url().'index.php/admin/' ?>">Retour à l'accueil</a></p>
	<h6 class="ajouter"><a href="<?php echo base_url();?>index.php/admin/ajouterNews">Ajouter une news</a></h6>
  <table class="twelvecol listeNews">
  
  <?php
			
	if (!empty($news)){
		foreach($news as $row)
		{
			$id = $row -> id; 
    		$titre = $row -> titre; 
    		$dateNews = $row -> dateNews; 
    		$texte= $row -> texte; 	 
   ?>
  <tr><td>
   <p>
   		<a href="<?php echo base_url();?>index.php/admin/editerNews/<?php echo $id; ?>" class="outils editer">
   			<img src="<?php echo base_url();?>images/icons/editer.png" alt="" /></a>
   		<a onclick="return deletechecked('&Ecirc;tes vous sur de vouloir effacer?');" 
   		 href="<?php echo base_url();?>index.php/admin/deleteNews/<?php echo $id; ?>" class="outils supprimer">
   			<img src="<?php echo base_url();?>images/icons/supprimer.png" alt="" /></a>
   </p>
  	<div>
 	     <h2><?php echo $titre; ?></h2>
 	     <h3><?php echo format_date_single($dateNews); ?></h3>
      	 <?php 
      	 
      	 $chaine = $texte;

			// le nombre de lettres                   
			$max = 105; 
 			 if (strlen($chaine) >= $max) 
 			 { 
                         $chaine = substr($chaine, 0, $max); 
                         $espace = strrpos($chaine, " "); 
                         $chaine = substr($chaine, 0, $espace)."..."; 
                } 

             echo '<p>'.$chaine.'</p>';
      	 ?>
      	 </div>
	</td></tr>
      		 		
<?php
   }
 }
?>

   </table>
<?php if (strlen($pagination)): ?>
	<p class="pagination">
	  <?php echo $pagination; ?>
	</p>
<?php endif; ?>
</section>
