<?php 

function form(){
		
	echo "
		<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hacer Pedido</title>

    <link rel='stylesheet' href='../../../CSS/styles.css'>
</head>
<body>
    <form action='create.php' method='POST'>

        <p><b>Nombre del Cliente:</b> <input type='text' placeholder='Su Nombre' name='nombre' required > </p>
        <p><b>Número Celular:</b> <input type='number'placeholder='Número de celular' name='celular' required > </p>
        <br>
        
        <p> <b>Pedido:</b>  
            <br> 
            <br> 
        
            <input type='radio' name='pedido' id='Hamburguesa'  value='Hamburguesa' required=''/> 
            <label for='Hamburguesa'>Hamburguesa</label>
            <br>
            <br>

            <input type='radio' name='pedido' id='Platano'  value='Platano' required=''/>  
            <label for='Platano'>Platano</label>
            <br>
            <br>

            <input type='radio' name='pedido' id='PerroFrito'  value='Perro Frito' required=''/> 
            <label for='PerroFrito'>Perro Frito</label>
            <br>
            <br>

            <input type='radio' name='pedido' id='GatoFrito'  value='Gato Frito' required=''/> 
            <label for='GatoFrito'>Gato Frito</label>
            <br>
            <br>
        </p>

        <input type='submit' value='Enviar' >
        <input type='reset' value='Borrar' >
        <br>    

        <div class='menu' >
            <ul>
                <div class='opcion' >
                    <li> <a href='../index.html'> Volver al Inicio </a> </li>
                </div>
            </ul>
        </div>
    </form>

</body>
</html>

	";
	
}