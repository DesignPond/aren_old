<?php 	
	$lien = 'presentation'; 
	$id = $this->uri->segment(3); 
?>

<section class="contenu twelvecol">
<h1>&Eacute;diter une section présentation</h1>

<p class="retour"><a href="<?php echo base_url().'index.php/admin/'.$lien; ?>">Retour</a></p>
	<?php

	
 	 if (!empty($presentation)){
		foreach($presentation as $row)
		{
			$id = $row -> id; 
    		$titre = $row -> titre; 
    		$texte= $row -> texte; 	
    		$pageAccueil = $row -> pageAccueil; 
    		
    	}
     }	
     	$attributes = array('id'=>'');
		echo form_open_multipart('admin/editTexte', $attributes);
 		?>
 		
        <fieldset>			
 		
		<p><label for="titre">Titre </label>
	    <input type="text" class="" name="titre" value="<?php echo $titre; ?>" /> </p>
 
	    <p><label for="texte">Texte</label> 
	    <textarea class="required" name="texte"><?php echo $texte; ?></textarea></p>
	     
	    <p class="radio">
	    <label for="">Visible en page d'accueil</label>
	     <span>
	    <input type="radio" <?php if ($pageAccueil == 0) { echo 'checked="checked"'; } ?> name="pageAccueil" value="0" /> Non<br />
		<input type="radio" <?php if ($pageAccueil == 1) { echo 'checked="checked"'; } ?> name="pageAccueil" value="1" /> Oui
		</span>
	    </p>
	     
        <input type="hidden" value="<?php echo $id; ?>" name="id" />
 		<input type="submit" value="&Eacute;diter" name="submit" class="btnSubmit" />
		</fieldset> 

<?php echo form_close(); ?>
<hr/>
</section>
<hr/>