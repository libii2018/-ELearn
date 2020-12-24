<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

/**
 * A sample helper for renaming url
 * 
 * @author	@KalySo
 * @link	https://github.com/KalySo
 * @since	Version 1.0.0
 */
 
 if ( ! function_exists('url_rename')){
   function url_rename($chaine){

    // 
    $accents = ['à', 'â', 'ä', 'å', 'ã', 'á', 'ç', 'é', 'è', 'ê', 'ë', 'ï', 'î', 'ì', 'í','ñ', 'ö','ô', 'ó','ò','õ','ù','û','ü', 'ú', 'ÿ']; 
    $sans_accents = ['a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','u','u','u','u','y']; 
    $chaine = trim($chaine); 
    $chaine= strtolower(str_replace($accents,$sans_accents, $chaine)); 
    $chaine= mb_ereg_replace("[0-9]","",$chaine);
    $chaine = url_title($chaine, '-');
        
         return $chaine;
       }
   }


  /**
   * Enlever les caractères spéciaux
  */
  if ( ! function_exists('url_not_special_characters')){
    function url_not_special_characters($chaine){
 
     // 
     $accents = ['à', 'â', 'ä', 'å', 'ã', 'á', 'ç', 'é', 'è', 'ê', 'ë', 'ï', 'î', 'ì', 'í','ñ', 'ö','ô', 'ó','ò','õ','ù','û','ü', 'ú', 'ÿ']; 
     $sans_accents = ['a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','u','u','u','u','y']; 
         
          return $chaine;
        }
    }
 



?>