<?php 	
	$lien = 'news'; 
?>
<section class="contenu twelvecol">
<h1>Ajouter un lien</h1>
<p class="retour"><a href="<?php echo base_url().'index.php/admin/'.$lien; ?>">Retour</a></p>
	<?php
 	    
     	$attributes = array('id'=>'');
		echo form_open_multipart('admin/addLien', $attributes);
 		?>
 		
        <fieldset>			
 		
		<p><label for="nomLien">Nom</label>
	    <input type="text" class="" name="nomLien" value="<?php echo set_value('nomLien'); ?>" /> </p>
	    
        <p><label for="lien">Lien</label>
	    <input type="text" class="required" name="lien" value="<?php echo set_value('lien'); ?>" /> </p>
 		
 		<p>
 		<label for="logo">Choisir le logo</label>
        <input type="file" name="logo" id="logo" size="20" />
 		</p>
        
 		<input type="submit" value="Ajouter" name="submit" class="btnSubmit" />
		</fieldset> 

<?php echo form_close(); ?>
<hr/>
</section>
<hr/>