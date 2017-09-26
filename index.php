<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Formulario</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
    </head>
    <style type="text/css">
        body{
            font-family: 'Cuprum', sans-serif;
            background: #0066cf;
        }
        .contenedor{
            width: 30%;
            margin: 0 auto;
        }
        a{
            color: wheat;
        }
        img{
            max-width: 60%;
        }
        h4{
            color: white;
            font-weight: 100;
        }
        span{
            color: #ccc;
            font-size: 12px;
        }
        .logo{
            width: 192px;
            margin: 0 auto;
            display: flex;
        }
        .form{
        font-family: 'Cuprum', sans-serif;
        margin: 5px;
        font-size: 17px;
        font-weight: 100;
        padding: 12px;
        width: 100%;
        height: 40px;
            color: white;
        background: transparent;
        border: 1px solid #fff;
        }
        input::-webkit-input-placeholder {
        color: white;}
        
    
        input[type=radio] {
	display:none; 
        }
        input[type=radio] + label {
	cursor: pointer;
    color: white;
    padding: 20px;
    display: -webkit-inline-box;
        }
    label:before {
	content: "";
	background: transparent;
	border: 2px solid #fff;
	display: inline-block;
	height: 45px;
    color: white;
	margin-right: 20px;
	vertical-align:middle;
	width: 45px;
        }
    input[type=radio]:checked + label:before {
	content: '✓';
    text-align: center;
	font-size: 25px;
	color: #88c64b;
    }

        input[type="submit"]{
        margin: 5px;
        font-family: 'Cuprum', sans-serif;
        outline: none;
            font-size: 1.2em;
       -webkit-appearance: none;
        background: transparent;
        border: solid 1px #fff;    
        color: #fff;
        padding: .8em 3em;
        -webkit-appearance: none;
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        -o-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -ms-transition: 0.5s all;
        cursor: pointer;}
        
        #modal-contacto{
        position: fixed;
        border-radius: 20px;
        width: 40%;
        height: 30%;
        padding-top: 40px;
        background: white;
        color: #0066cf;
        margin: 0 auto;
        right: 0;
        top: 40%;
        bottom: 0;
        font-size: 2em;
        left: 0;
        transition: all 1s;
        }
        input[type="submit"]:hover{
            background: #fff;
            color: #0070d7;
        }

    </style>
    
    <body>
        <img class="logo" src="logo.png">
    <section class="contenedor">
      <form method="post" action="index.php" >
        <!-- Nombre --->
        <input type="text" class="form" name="nombre" placeholder="Nombre Completo"><br>
        <!-- Edad --->
        <input type="number" class="form" name="edad"  placeholder="Edad"><br>
        <!-- Lugar --->
        <input type="text" class="form" name="lugar" placeholder="Lugar"><br>
        <!--Talla de ropa--->
          
         <input type="text" class="form" name="talla" placeholder="Qué talla de ropa es?"><br>
        <h4>Qué talla de ropa es?</h4>
        <input type="radio" class="btn" name="talla" id="S">
        <label class="label" for="S" value="S">S</label>
        
        <input type="radio" class="btn" name="talla" id="XS">
        <label class="label" for="XS" value="XS">XS</label>
        
        <input type="radio" class="btn" name="talla" id="M">
        <label class="label" for="M" value="M">M</label>
        
        <input type="radio" class="btn" name="talla" id="L">
        <label class="label" for="L" value="L">L</label> 
        
        <input type="radio" class="btn" name="talla" id="XL">
        <label class="label" for="XL" value="XL">XL</label>  <br>
        <!--Frecuencia--->
        <input type="text" class="form" name="tiempo" placeholder="¿Cada cuanto tiempo compras ropa?"><br>
        <input type="submit" value="Enviar">
        </form>
        <!-- Validacion --->
        <?php
        if(isset($_POST['nombre'])) {

        // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
        $email_to = "moda.skandal@gmail.com";
        $email_subject = "Detalles del Sorteo";
        $email_headers = "From: WEBAPP.COLAGINE.COM a través de Colagine.com ";

        // Aquí se deberían validar los datos ingresados por el usuario
        if(!isset($_POST['nombre']) ||
        !isset($_POST['edad']) ||
        !isset($_POST['lugar']) ||
        !isset($_POST['talla']) ||
        !isset($_POST['tiempo']))
        {

        echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
        echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
        die();
        }
       
        $email_message = "Detalles del formulario de contacto:\n\n";
        $email_message .= "Nombre Completo: " . $_POST['nombre'] . "\n";
        $email_message .= "Edad: " . $_POST['edad'] . "\n";
        $email_message .= "Lugar: " . $_POST['lugar'] . "\n";
        $email_message .= "Talla de la Ropa: " . $_POST['talla'] . "\n";
        $email_message .= "¿Cuanto tiempo compras ropa?: " . $_POST['tiempo'] . "\n\n";

        // Ahora se envía el e-mail usando la función mail() de PHP
        $headers = 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $email_headers);


          echo '<h4 ALIGN=center id="modal-contacto">Gracias por enviar la información '.$_POST['nombre'].'...<br><img src="enviando.gif"></h4>';
          echo '<meta HTTP-EQUIV="REFRESH" CONTENT="5;URL=index.php">';
        }
        ?>

        <hr>
        <span>Widgets y Aplicaciones web: <a href="https://webapp.colagine.com/" target="_blank"> Colagine.com</a></span>
    </form>
    </section>
    </body>
</html>
