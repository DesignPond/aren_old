<?php 	
	$lien = 'liens'; 
	$id = $this->uri->segment(3); 
?>

<section class="contenu twelvecol">
<h1>Ajouter lien</h1>

<p class="retour"><a href="<?php echo base_url().'index.php/admin/'.$lien; ?>">Retour</a></p>
	<?php

			
	if (!empty($liens)){
		foreach($liens as $lien)
		{
			$id = $lien -> id; 
    		$logo = $lien -> logo; 
    		$nomLien  = $lien -> nomLien; 
    		$lien = $lien -> 	lien; 	
    		
    	}
     }	
     	$attributes = array('id'=>'');
		echo form_open_multipart('admin/editLien', $attributes);
 		?>
 		
        <fieldset>			
 		
		<p><label for="nomLien">Nom</label>
	    <input type="text" class="" name="nomLien" value="<?php echo $nomLien; ?>" /> </p>
	    
        <p><label for="lien">Lien</label>
	    <input type="text" class="required" name="lien" value="<?php echo $lien; ?>" /> </p>
 		
 		<p><img src="<?php echo base_url();?>images/liens/<?php echo $logo; ?>" /></p>
 		<p>
 			<label for="logo">Changer le logo</label>
        	<input type="file" name="logo" id="logo" size="20" />
 		</p>
	     
        <input type="hidden" value="<?php echo $id; ?>" name="id" />
 		<input type="submit" value="&Eacute;diter" name="submit" class="btnSubmit" />
		</fieldset> 

<?php echo form_close(); ?>
<hr/>
</section>
<hr/>