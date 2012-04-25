<section class="contenu margeBottom">
  <h1>Page présentation</h1>
   <p class="retour"><a href="<?php echo base_url().'index.php/admin/' ?>">Retour à l'accueil</a></p>
	<h6 class="ajouter"><a href="<?php echo base_url();?>index.php/admin/ajouterTexte">Ajouter une section présentation</a></h6>
  <table class="twelvecol listeNews">
  
  <?php
			
	if (!empty($presentation)){
		foreach($presentation as $row)
		{
			$id = $row -> id; 
    		$titre = $row -> titre; 
    		$texte= $row -> texte; 	
    		$pageAccueil = $row -> pageAccueil;  
   ?>
  <tr>
  <td>
   <p>
   		<a href="<?php echo base_url();?>index.php/admin/editerTexte/<?php echo $id; ?>" class="outils editer">
   			<img src="<?php echo base_url();?>images/icons/editer.png" alt="" /></a>
   		<a onclick="return deletechecked('&Ecirc;tes vous sur de vouloir effacer?');" 
   		 href="<?php echo base_url();?>index.php/admin/deleteTexte/<?php echo $id; ?>" class="outils supprimer">
   			<img src="<?php echo base_url();?>images/icons/supprimer.png" alt="" /></a>
   </p>
  	<div <?php if ($pageAccueil == 1) { echo 'class="enAccueil"';} ?>>
 	     <h2><?php echo $titre; ?></h2>
      	 <?php 
             echo '<p>'.$texte.'</p>';
      	 ?>
      	 </div>
	</td></tr>
      		 		
<?php
   }
 }
?>

   </table>
<hr/>
</section>
