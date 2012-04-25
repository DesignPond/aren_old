<section class="contenu margeBottom">
  <h1>News</h1>
  
   <?php
			
	if (!empty($news)){
		foreach($news as $row)
		{
			$id = $row -> id; 
    		$titre = $row -> titre; 
    		$dateNews = $row -> dateNews; 
    		$texte= $row -> texte; 	 
   ?>
   
  <div class="onecol">
		<h2 class="news"></h2>
  </div>
  <div class="news elevencol last">

 	     <h2><?php echo $titre; ?></h2>
 	     <h5><?php echo format_date_single($dateNews); ?></h5>
      	 <div>
      		 <?php echo $texte; ?>
      	 </div>
   </div>
   <hr/> 		
<?php
 	
   }
 }
 

?>
<?php if (strlen($pagination)): ?>
	<p class="pagination">
	  <?php echo $pagination; ?>
	</p>
<?php endif; ?>
 
</section>

