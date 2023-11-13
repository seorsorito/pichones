<!DOCTYPE html>
<html lang="es">
    <head>
       <title>PICHONES F.C</title> <!--ESTE ES EL TITULO DE LA PESTAÑA DE GOOGLE-->
       <link href="style.css" rel="stylesheet"> <!--para conectar con el css-->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Fuggles&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <h1>PICHONES FC</h1>
        <main>
            <div>
        <a href="#Tpartidos">partidos</a>
        <a href="#tienda">tienda</a>
        <a href="#jugadores">jugadores</a>
        <a href="#contacta con nosotros">contacta con nosotros</a>
    </div>
         <br><hr>
        <img src="images/pichones.jpg"alt="LOGO OFICIAL"> <!--el alt se utiliza para cuando no se caga la imagen-->
        <!--Agregar imagen de pichones-->
        <h3 id="Tpartidos">partidos</h3>
        <form action="temporadas">
            <label for="2022/2023">
                <input name="2022/2023-2023/2024" id="2022/2023" type="radio" value="2022/2023">2022/2023
            </label>
            <br>
            <label for="2023/2024">
                <input name="2022/2023-2023/2024" id="2023/2024" type="radio" checked value="2023/2024">2023/2024
            </label>
        </form>
        <a href="#"><img src="images/calendario.jpg"alt="calendario"></a>
        <!--aqui tengo que poner la tabla con todos los partidos de la temporada-->
        <h3 id="tienda">tienda oficial</h3>
        <!--aqui poner venta de camisetas y demas-->
        <h3 id="jugadores"><strong>jugadores Pichones F.C</strong></h3>
        <ul class="nombres">
            <li>JAIME</li>
            <li>ALVARO</li>
            <li>LUIS BH</li>
            <li>ALBERTO</li>
            <li>SALIM</li>
            <li>TRUJI</li>
            <li>VICTOR</li>
            <li>CARVAJAL</li>
            <li>SANCHEZ</li>
            <li>NICKY</li>
            <li>RINCÓN</li>
            <li>J.LETON</li>
        </ul>
        <!--aqui poner fotos y cosas de jugadores-->
        <h3 id="contacta con nosotros">contacto</h3>
        <p>En caso de estar interesado de ingresar en nuestro equipo envie su correo para enviarles las fechas de las pruebas</p>
        <form action="Ingresa con nosotros">
            <input type="text" placeholder="correo electronico" required> <br>
            <label for="terminos y condiciones"></label><input id="terminos y condiciones"name="obligatorio"type="checkbox" required> Aceptas nuestros terminos y condiciones <br>
            <label for="mayor de edad"><input id="obligatorio"name="obligatorio"type="checkbox" required> Eres mayor de 18 años</label> <br>
            <button type="submit">enviar</button>
        </form>

        
    </main>
    <!--pie de pagina-->
    <footer>
        <P lang="en"><small> website - instagram <a href="x">pichones f.c </small></a></P>
        
    </footer>
    </body>
</html> 