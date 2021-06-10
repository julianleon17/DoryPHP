<?php

/*===========================================================================================================
 *
 *                                             H   E   L   P   E   R   S
 *
 *===========================================================================================================*/



                    //Works with associative type array


function build_the_form( $formType, $action='', $method='', $array, $extractedData ) {

  $formTypeUppercase = strtoupper( $formType );

  $fieldsArray = count( $array );  
  $bodyForm = "";

  if ( $formTypeUppercase == "CREATE" ) {
    foreach ( $array as $key => $type ) {

      $bodyForm .= "
      <p>" . $key . " :  
      <input type='" . $type . "' placeholder='". $key ."' name='data[" . $key . "]' required > </p>\n";
    }
  }
  else if ( $formTypeUppercase == "UPDATE" ) {
    foreach ( $array as $key => $type ) {

      if ( $type == 'number' ) {

        $bodyForm .= "
        <p>" . $key . " :  
        <input type='" . $type . "' placeholder='". $key ."' name='data[" . $key . "]' value='" . (int)$extractedData[$key] . "' required > </p>\n";
      }else{

        $bodyForm .= "
        <p>" . $key . " :  
        <input type='" . $type . "' placeholder='". $key ."' name='data[" . $key . "]' value='" . $extractedData[$key] . "' required > </p>\n";
      }
    }
  }


  //Assemble the form to return  

  //Form head
  $form = "<form action='" . $action . "' method='" . $method . "'>\n\n";

  //Form body
  $form .= $bodyForm;

  //Form footer
  $form .= "  
  </br>
  </br>	
  <input type='submit' value='Enviar' >
  <input type='reset' value='Borrar' >
  <br>    
  </form>\n";

  return $form;
}




       //Create hader of page
       
function create_header_of_page( $nameOfPage='' ) {
	
	$header = "
	<!DOCTYPE html>
	<html lang='en'>
	<head>
    	<meta charset='UTF-8'>
    	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
    	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
    	<title>$nameOfPage</title>
    	
    	<link rel='stylesheet' href='../../../CSS/styles.css'>
        	
	<style>
	
	.delete a{
    	background-color: red;
    	color: white;
	}
	
	.verMas{
		list-style: none;
	}
	
	.verMas a{
		text-decoration: none;
	}
	
	.verMas a:hover{
		color: blue;
		font-size: 15px;
	}
		
	</style>
	
	</head>
	";

  echo $header;
}
       
       


                  //Create buttons
       
function create_button( $path , $buttonName , $class='' ) {

	echo "
	<div class='menu' >        
    	<div class='opcion' >
        	<ul>
            	<li class='$class'> <a href='$path'> $buttonName </a> </li>
        	</ul>
    	</div>
	</div>
	";
	
}
       
       

