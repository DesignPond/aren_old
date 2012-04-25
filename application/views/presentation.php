<section class="contenu margeBottom">
  <h1>Présentation </h1>
 
<?php
			
if (!empty($presentation)){
		foreach($presentation as $row)
		{
			$id = $row -> id; 
    		$titre = $row -> titre; 
    		$texte= $row -> texte; 
    		$pageAccueil = $row -> pageAccueil; 	 
		
		if ($pageAccueil != 1)
		{
			echo '<h2>'.$titre.'</h2>';
			echo $texte;
		}
   }
 }
?>

<hr/>
</section>
