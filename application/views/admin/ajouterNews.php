<?php 	
	$lien = 'news'; 
?>
<section class="contenu twelvecol">
<h1>Ajouter news</h1>
<p class="retour"><a href="<?php echo base_url().'index.php/admin/'.$lien; ?>">Retour</a></p>
	<?php
 	    
     	$attributes = array('id'=>'');
		echo form_open_multipart('admin/addNews', $attributes);
 		?>
 		
        <fieldset>			
 		
		<p><label for="titre">Titre </label>
	    <input type="text" class="" name="titre" value="<?php echo set_value('titre'); ?>" /> </p>
	    
        <p><label for="dateNews">Date</label>
	    <input type="text" class="required" id="datepicker" name="dateNews" value="<?php echo set_value('dateNews'); ?>" /> </p>
 
	    <p><label for="texte">Texte</label> 
	    <textarea class="required" name="texte"></textarea>
	     </p>
        
 		<input type="submit" value="Ajouter" name="submit" class="btnSubmit" />
		</fieldset> 

<?php echo form_close(); ?>
<hr/>
</section>
<hr/>