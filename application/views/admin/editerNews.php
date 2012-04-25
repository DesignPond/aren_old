<?php 	
	$lien = 'news'; 
	$id = $this->uri->segment(3); 
?>

<section class="contenu twelvecol">
<h1>Ajouter news</h1>

<p class="retour"><a href="<?php echo base_url().'index.php/admin/'.$lien; ?>">Retour</a></p>
	<?php

	
 	 if (!empty($news)){
		foreach($news as $row)
		{
			$id = $row -> id; 
    		$titre = $row -> titre; 
    		$dateNews = $row -> dateNews; 
    		$texte= $row -> texte; 	 
    		
    	}
     }	
     	$attributes = array('id'=>'');
		echo form_open_multipart('admin/editNews', $attributes);
 		?>
 		
        <fieldset>			
 		
		<p><label for="titre">Titre </label>
	    <input type="text" class="" name="titre" value="<?php echo $titre; ?>" /> </p>
	    
        <p><label for="dateNews">Date</label>
	    <input type="text" class="required" id="datepicker" name="dateNews" value="<?php echo $dateNews; ?>" /> </p>
 
	    <p><label for="texte">Texte</label> 
	    <textarea class="required" name="texte"><?php echo $texte; ?></textarea>
	     </p>
	     
        <input type="hidden" value="<?php echo $id; ?>" name="id" />
 		<input type="submit" value="&Eacute;diter" name="submit" class="btnSubmit" />
		</fieldset> 

<?php echo form_close(); ?>
<hr/>
</section>
<hr/>