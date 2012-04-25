<section class="contenu">
<h1>Liens utiles</h1> 
<h2>Partenaires</h2>	

 <ul class="liste">
   <?php
			
	if (!empty($liens)){
		foreach($liens as $lien)
		{
			$id = $lien -> id; 
    		$logo = $lien -> logo; 
    		$nomLien  = $lien -> nomLien; 
    		$lien = $lien -> lien; 	
    		
		echo '<li><div>';
		echo '<p><img src="'.base_url().'images/liens/'.$logo.'" alt="" /></p>';	
		echo '<p>'.$nomLien.'</p>';		
		echo'<a href="#">'.nice_url($lien).'</a>';
		echo '</div></li>';		
	}	
}
?>
 </ul> 	
 	 	
<hr /> 	
</section>
