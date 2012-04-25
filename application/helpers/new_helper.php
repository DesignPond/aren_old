<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	function first_img($dir)
	{
	///////////////
	$d = $dir;
	$dirname = $dir;
      
    if ( $dir = opendir($dirname)) {
    while (false !== ($file = readdir($dir))) {
    if ($file != "." && $file != ".." ) 
    	{
         $tableau[] = $file;
         $nbr = count($tableau);
        }
    }
    closedir($dir);
         for ($i = 0 ; $i < $nbr  ; $i++)
          {      
            if ($tableau[$i] != '.DS_Store')
			{	
               $firstImage = '<img  class="video" src="'.base_url().''.$d.'/'.$tableau[2].'" alt="&nbsp;" />';
             }
           }
      }
    return $firstImage;
	///////////////
	}
	
	
	function all_img($dir)
	{
	///////////////
	$d = $dir;
	$dirname = $dir;
	$allImages ='';
      
    if ( $dir = opendir($dirname)) {
    while (false !== ($file = readdir($dir))) {
    if ($file != "." && $file != ".." ) 
    	{
         $tableau[] = $file;
         $nbr = count($tableau);
        }
    }
    closedir($dir);
    
         for ($i = 0 ; $i < $nbr  ; $i++)
          {      
            if ($tableau[$i] != '.DS_Store')
			{	
               $allImages .= ' <a class="group" href="'.base_url().''.$d.'/'.$tableau[$i].'"><img src="'.base_url().''.$d.'/'.$tableau[$i].'" alt="&nbsp;" /></a>';
             }
           }
      }
    return $allImages;
	///////////////
	}
	
	
	function all_img_atelier($dir)
	{
	///////////////
	$d = $dir;
	$dirname = $dir;
	$allImages ='';
      
    if ( $dir = opendir($dirname)) {
    while (false !== ($file = readdir($dir))) {
    if ($file != "." && $file != ".." ) 
    	{
         $tableau[] = $file;
         $nbr = count($tableau);
        }
    }
    closedir($dir);
    
         for ($i = 0 ; $i < $nbr  ; $i++)
          {      
            if ($tableau[$i] != '.DS_Store')
			{	
               $allImages .= ' <span><img src="'.base_url().''.$d.'/'.$tableau[$i].'" alt="&nbsp;" /></span>';
             }
           }
      }
    return $allImages;
	///////////////
	}
	
	
	function format_date($debut,$fin){
	
	if (setlocale(LC_TIME, 'fr_FR') == '') {
    	setlocale(LC_TIME, 'FRA');  //correction problème pour windows
    	$format_jour = '%#d';
	} else {
    $format_jour = '%e';
	}

	$datedebut = '';
	$datefin = '';
	
	$datedebut = $debut;
	$datefin = $fin;
	$date = '';
	
        //explode pour mettre la date du fin en format numerique: 12/05/2006  -> 12052006
		$dfin = explode("-", $datefin); 

        //explode pour mettre la date du jour en format numerique: 31/05/2009  -> 31052009
        $djour = explode("-", $datedebut); 

        // concaténation pour inverser l'ordre: 12052006 -> 20060512
	$finab = $dfin[2].$dfin[1].$dfin[0];
        // concaténation pour inverser l'ordre: 31052009 -> 20090531
	$auj = $djour[2].$djour[1].$djour[0]; 
	
	$aujd = $djour[0].$djour[1]; 

	// Ensuite il suffit de comparer les deux valeurs

	if ($auj==$finab)
		{
		//------une seule date-------
		
	$date .= strftime("%A $format_jour %B %Y", strtotime($datedebut));
	// affiche : vendredi 18 avril 2008
		}
	else
		{
	//------plusieurs-----
	$date .= 'Du ';
	$date .= strftime("%A $format_jour %B", strtotime($datedebut));
	$date .= ' au ';
	$date .= strftime("%A $format_jour %B %Y", strtotime($datefin));
		}
	return $date;	
		
	
	}
	
	
	
	function format_date_single($madate){
	
	if (setlocale(LC_TIME, 'fr_FR') == '') {
    	setlocale(LC_TIME, 'FRA');  //correction problème pour windows
    	$format_jour = '%#d';
	} else {
    $format_jour = '%e';
	}

	$date = '';

	
	$date .= strftime("%A $format_jour %B %Y", strtotime($madate));
	// affiche : vendredi 18 avril 2008

	return $date;	
		
	
	}
	
	
		
	function format_date_mysql($madate){
		$date = '';
			//explode pour mettre la date du fin en format numerique:
		$datepiece = explode("-", $madate); 
			// concaténation pour inverser l'ordre
		$date .= $datepiece[2].'-'.$datepiece[1].'-'.$datepiece[0];	
		return $date;	
	}
	
	
		function nice_url($url) {

   		 if(!(strpos($url, "http://") === 0) && !(strpos($url, "https://") === 0)) {

       		 $url = "http://$url";

			}

   		 return $url;

		}	
           