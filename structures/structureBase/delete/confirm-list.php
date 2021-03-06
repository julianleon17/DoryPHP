<?php
  if ( !isset( $reference_path ) ) {
    require_once( "../boot.php" );
  }

  require_once( $reference_path . "/read/read.php" );

//=================View :

create_header_of_page( 'Confirmar' );

  //Valida los botones
  if ( $fileExists  ) {

    echo "<h1> ¿Seguro que quieres eliminar " . $pluralTheme . "? </h1></br></br>";
    create_button( "/delete/delete-list.php" , 'Confirmar' , 'delete' );
    create_button( "/read/list.php" , 'Cancelar' );
  }else{

   	echo 'El archivo de ' . $pluralTheme . ' NO existe!';
    create_button( "/index.php" , 'Volver al Inicio' );
  }

create_footer_of_page();
