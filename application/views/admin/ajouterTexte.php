<?php 	
	$lien = 'presentation'; 
?>
<section class="contenu twelvecol">
<h1>Ajouter une section présentation</h1>
<p class="retour"><a href="<?php echo base_url().'index.php/admin/'.$lien; ?>">Retour</a></p>
	<?php
 	    
     	$attributes = array('id'=>'');
		echo form_open_multipart('admin/addTexte', $attributes);
 		?>
 		
        <fieldset>			
 		
		<p><label for="titre">Titre </label>
	    <input type="text" class="" name="titre" value="<?php echo set_value('titre'); ?>" /> </p>	    
 
	    <p><label for="texte">Texte</label> 
	    <textarea class="required" name="texte"></textarea></p>   
	    
	    <p class="radio">
	    <label for="">Visible en page d'accueil</label>
	    <span>
	    <input type="radio" name="pageAccueil" value="0" /> Non<br />
		<input type="radio" name="pageAccueil" value="1" /> Oui
		</span>
	    </p>
        
 		<input type="submit" value="Ajouter" name="submit" class="btnSubmit" />
		</fieldset> 

<?php echo form_close(); ?>
<hr/>
</section>
<hr/>