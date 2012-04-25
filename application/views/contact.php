<section class="contenu">
 	 	<?php
		if (isset($notice))
		{
		echo '<div class="ok"> <p>'.$notice.'</p></div>';
		}
 	   
 		if (function_exists('validation_errors') && validation_errors()) 
 		{
   			echo '<div class="errors">';
    		echo validation_errors();
    		echo '</div>';
 		 }
  
 		?>
<div class="ninecol">
 	   	<?php
 	    
     	$attributes = array('id'=>'formContact');
		echo form_open_multipart('site/send', $attributes);
 		?>
 		
        <fieldset>			
 		<h1>Nous contacter</h1>	
 		
		<p><label for="societe">Société <em> &nbsp;(facultatif)</em></label>
	    <input type="text" class="" name="societe" value="<?php echo set_value('societe'); ?>" /> </p>
	    
        <p><label for="nom">Nom et prénom</label>
	    <input type="text" class="required" name="nom" value="<?php echo set_value('nom'); ?>" /> </p>
 
	    <p><label for="email">Email</label> 
	    <input type="text" class="required email" name="email" value="<?php echo set_value('email'); ?>"  /> </p>
 
	    <p><label for="telephone">Téléphone</label> 
	    <input type="text" class="required" name="telephone" value="<?php echo set_value('telephone'); ?>"  /> </p>
	    
	    <p><label for="message">Votre Message</label>
           <textarea rows="17" class="required" cols="70" name="message"><?php echo set_value('message'); ?></textarea>
        </p>
        
 		<input type="submit" value="Envoyer le message" name="submit" class="btnSubmit" />
		</fieldset><!--end user-details-->
 

<?php echo form_close(); ?>
</div>
	<div class="threecol last polaroids">
		<p class="pola03">
			<img src="<?php echo base_url();?>images/cdv01.jpg" alt="Creux du Van" />
			<span class="tape tapeBig"></span>
			<span class="shadow shadowBig"></span>
			<span class="title">Le Creux du Van</span>
		</p>
	</div>
<hr/>	
</section>
