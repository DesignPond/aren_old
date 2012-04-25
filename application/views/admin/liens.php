<section class="contenu margeBottom">
  <h1>Liens</h1>
  <p class="retour"><a href="<?php echo base_url().'index.php/admin/' ?>">Retour à l'accueil</a></p>
	<h6 class="ajouter"><a href="<?php echo base_url();?>index.php/admin/ajouterLien">Ajouter un lien</a></h6>
  <table class="twelvecol listeNews">
  
  <?php
			
	if (!empty($liens)){
		foreach($liens as $lien)
		{
			$id = $lien -> id; 
    		$logo = $lien -> logo; 
    		$nomLien  = $lien -> nomLien; 
    		$lien = $lien -> 	lien; 	 
   ?>
  <tr><td>
   <p>
   		<a href="<?php echo base_url();?>index.php/admin/editerLien/<?php echo $id; ?>" class="outils editer">
   			<img src="<?php echo base_url();?>images/icons/editer.png" alt="" /></a>
   		<a onclick="return deletechecked('&Ecirc;tes vous sur de vouloir effacer?');" 
   		 href="<?php echo base_url();?>index.php/admin/deleteLien/<?php echo $id; ?>" class="outils supprimer">
   			<img src="<?php echo base_url();?>images/icons/supprimer.png" alt="" /></a>
   </p>
  	<div>
  	<p class="logoLien"><img src="<?php echo base_url();?>images/liens/<?php echo $logo; ?>" /></p>
 	     <h2><?php echo $nomLien; ?></h2>
      	 <?php 
             echo '<p><a target="_blank" href="'.nice_url($lien).'">'.nice_url($lien).'</a></p>';
      	 ?>
    </div>
	</td></tr>
      		 		
<?php
   }
 }
?>

   </table>
<hr/>
<?php if (strlen($pagination)): ?>
	<p class="pagination">
	  <?php echo $pagination; ?>
	</p>
<?php endif; ?>
</section>
