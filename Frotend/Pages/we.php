<?php
include('sesiones.php');
echo "hola";
?>

<!DOCTYPE html>
<html lang="en">
  <!--  el elemento head se utiliza dar información y metadatos sobre un archivo HTML, pero no muestra en la página web.-->

  <head> <!--  el elemento head se utiliza dar información y metadatos sobre un archivo HTML, pero no muestra en la página web.-->
    <meta charset="UTF-8" /> <!-- Indicamos el tipo de codificacion que debe utilizar para representar la info-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Viewport para configurar el ancho de la pagina.-->
    <link rel="preconnect" href="https://fonts.googleapis.com" /> <!--Conexion con fuentes de google-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../Styles/we.css" /> <!--Vinculamos el archivo .css para poder estilizar de mejor manera-->
    <title>Nosotros</title> <!--Titulo de la pag (Nosotros)-->
  </head>

  <!--Body contiene todo el contenido que ve en la pagina web-->

  <body background="../Images/fondo3.jpg">
    <header class="header-container"> <!--Asignamos una clase al encabezado-->
      <h1 id="header-title">Tech Araucania</h1>  <!--Titulo del encabezado-->
      <div class="search-container"> <!--Todo esto es el buscador de productos (No funciona)-->
        <input
          id="search-bar"
          type="text"
          placeholder="Busca los mejores Productos"
        />
        <!--Este SVG es todo el icono de busqueda-->
        <svg
          id="search-icon"
          xmlns="http://www.w3.org/2000/svg"
          class="icon icon-tabler icon-tabler-search"
          width="44"
          height="44"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="#ffffff"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
          <path d="M21 21l-6 -6" />
        </svg>
      </div>
      <!--Icono de Usuario-->
      <svg
        id="user-icon"
        xmlns="http://www.w3.org/2000/svg"
        class="icon icon-tabler icon-tabler-user-circle"
        width="44"
        height="44"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="#ffffff"
        fill="none"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
        <path
          d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"
        />
      </svg>
      <!--Icono Del Carrito-->

      <svg
        id="shop-icon"
        xmlns="http://www.w3.org/2000/svg"
        class="icon icon-tabler icon-tabler-shopping-cart"
        width="44"
        height="44"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="#ffffff"
        fill="none"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        <path d="M17 17h-11v-14h-2" />
        <path d="M6 5l14 1l-1 7h-13" />
      </svg>
    </header>
    <div class="nav-container">
      <nav class="a-container">
        <a href="login.php">Inicia Sesion</a>
        <a href="index.php">Pagina Inicial</a>
        <a href="products.php">Productos</a>
        <a href="services.php">Servicios</a>
        <a href="we.php">Quienes Somos</a>
        <a href="contact.php">Contacto</a>
      </nav>
    </div>
    <main>
       <!--Agregamos un div, esto sera todas las otras secciones de la pagina, y de paso al div le asignamos una seccion-->

      <div class="main-container">
        <div class="main-content-container"> <!--Agregamos esta div para crear la seccion de Historia-->
            <div class="main-content-title-containe">
                <h1><a style="color: white;" href="../Pages/history.php">Historia</a></h1> <!--Link hacia la pagina de historia-->
            </div>
            <div class="main-content-text-containe">
              <h2>Breve historia de nuestra empresa</h2> <!--Texto de Tech Araucania-->
          </div>
        </div>
        <div class="main-image-container">
            <img src="../Images/We/historia.jpg" width="450" >
        </div>
    </div>
    <hr> <!-- Divimo las dos seccione por la mitad con esta linea-->
    <div class="main-container">
      <div class="main-content-container"> <!--Creamos esta seccion nuesto Para equipo-->
          <div class="main-content-title-containe">
            <h1><a style="color: white;" href="../Pages/team.html">Equipo</a></h1> <!--Link para equipo-->
          </div>
          <div class="main-content-text-containe">
              <h2 class="nostro">Breve informacion sobre nuestro Equipo</h2> <!-- Informacion de el equipo de tech araucania-->
          </div>
      </div>
      <div class="main-image-container">
          <img src="../Images/We/equipo.jpg" width="450" >
      </div>
    </div>

    </main>
    <!--El footer de nuestra pagina-->
    <footer>
      <div class="footer-container">
        <div>
          <h1>Tech Araucania</h1>
          <h4>Sigueno en</h4>
          <div>
             <!--Icono de facebook-->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon icon-tabler icon-tabler-brand-facebook-filled"
              width="44"
              height="44"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="#ffffff"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M18 2a1 1 0 0 1 .993 .883l.007 .117v4a1 1 0 0 1 -.883 .993l-.117 .007h-3v1h3a1 1 0 0 1 .991 1.131l-.02 .112l-1 4a1 1 0 0 1 -.858 .75l-.113 .007h-2v6a1 1 0 0 1 -.883 .993l-.117 .007h-4a1 1 0 0 1 -.993 -.883l-.007 -.117v-6h-2a1 1 0 0 1 -.993 -.883l-.007 -.117v-4a1 1 0 0 1 .883 -.993l.117 -.007h2v-1a6 6 0 0 1 5.775 -5.996l.225 -.004h3z"
                stroke-width="0"
                fill="currentColor"
              />
            </svg>
            <!--Icono de twitter-->

            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon icon-tabler icon-tabler-brand-twitter-filled"
              width="44"
              height="44"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="#ffffff"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M14.058 3.41c-1.807 .767 -2.995 2.453 -3.056 4.38l-.002 .182l-.243 -.023c-2.392 -.269 -4.498 -1.512 -5.944 -3.531a1 1 0 0 0 -1.685 .092l-.097 .186l-.049 .099c-.719 1.485 -1.19 3.29 -1.017 5.203l.03 .273c.283 2.263 1.5 4.215 3.779 5.679l.173 .107l-.081 .043c-1.315 .663 -2.518 .952 -3.827 .9c-1.056 -.04 -1.446 1.372 -.518 1.878c3.598 1.961 7.461 2.566 10.792 1.6c4.06 -1.18 7.152 -4.223 8.335 -8.433l.127 -.495c.238 -.993 .372 -2.006 .401 -3.024l.003 -.332l.393 -.779l.44 -.862l.214 -.434l.118 -.247c.265 -.565 .456 -1.033 .574 -1.43l.014 -.056l.008 -.018c.22 -.593 -.166 -1.358 -.941 -1.358l-.122 .007a.997 .997 0 0 0 -.231 .057l-.086 .038a7.46 7.46 0 0 1 -.88 .36l-.356 .115l-.271 .08l-.772 .214c-1.336 -1.118 -3.144 -1.254 -5.012 -.554l-.211 .084z"
                stroke-width="0"
                fill="currentColor"
              />
            </svg>
            <!--Icono de instagram-->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon icon-tabler icon-tabler-brand-instagram"
              width="44"
              height="44"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="#ffffff"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"
              />
              <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
              <path d="M16.5 7.5l0 .01" />
            </svg>
            <!--Icono de youtube-->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon icon-tabler icon-tabler-brand-youtube"
              width="44"
              height="44"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="#ffffff"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M3 5m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v6a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z"
              />
              <path d="M10 9l5 3l-5 3z" />
            </svg>
          </div>
        </div>
        <div>
          <!--Tabla de productos-->
          <h3>
              Productos
          </h3>
          <h4>Hardware</h4>
          <h4>Perifericos</h4>
          <h4>Mantenimiento</h4>
      </div>
      <div>
          <!--Tablam de servicios-->
          <h3>Servicios</h3>
          <h4>Desarrollo web</h4>
          <h4>Escudo digital</h4>
          <h4>Capacitacion</h4>
          <h4>Soporte Tecnico</h4>
          <h4>Consultoria</h4>
      </div>
      <div>
          <!--Enlace a Quienes somos-->
          <h3>Quienes Somos</h3>
          <a href="history.html">Historia</a>
          <a href="team.html">Nuestro Equipo</a>
      </div>
        <!--Tabla de contactos-->
        <div>
          <h3>Contacto</h3>
          <p>+56 9 2315412412</p>
          <p>TechAraucania@gmail.cl</p>
        </div>
      </div>
    </footer>
  </body>
</html>
