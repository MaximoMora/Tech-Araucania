<!--El archivo es de tipo html-->
<!DOCTYPE html>
<html lang="en">

<head> <!--  el elemento head se utiliza dar información y metadatos sobre un archivo HTML, pero no muestra en la página web.-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tech Araucania</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../Styles/products.css" /> <!--Vinculamos el archivo .css para poder estilizar de mejor manera-->
  <title>Document</title> <!--Titulo de la pag (TechAraucania)-->
</head>

<body background="../Images/fondo.jpg"> <!-- Ponemos un fondo (background) a la pagina para estilizar mas.-->


  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="login.php" id="botonnnn">Iniciar Sesion</a>
              </li> 
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="products.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Servicios</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nosotros
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="team.php">Quienes Somos</a></li>
                <li><a class="dropdown-item" href="history.php">Historia</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contacto</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <!--Agregamos un div, esto sera todas las otras secciones de la pagina, y de paso al div le asignamos una seccion-->
    <section class="maincontennt"> <!--Creamos una seccion que sera el contenido principal, que en este caso seran los productos-->
      <div class="catalogo"> <!--Esta clase son todos los productos de la pagina, los ponemos en este div para que asi despues sea mas facil el acomodar los productos en la pagina-->
        <div class="categoria"> <!--Cada Seccion de productos (Son tres, hardware, Perifericos y mantenimiento) tendraal inicio un div con clase categoria-->
          <h3>Componentes</h3> <!--Titulo de seccion-->
          <div class="producto"> <!--Div que tendra las propiedades de cada Producto, imagen, precio etc-->
            <a href="Products/Ventilador.html"> <!--Al presionar sobre el producto lleva a otro html que dira que el producto fue agregado al carro-->
              <img id="imagen-1" onmouseover="OnMouseOver('product-photo-1')" onmouseout="OutMouseOver('product-photo-1')" alt="ventilador" height="200" />
              <h2 id="titulo-1"></h2> <!--Nombre del producto-->
              <h3 id="precio-1" style="color: white">$59.990</h3> <!--Precio-->
            </a>
          </div>
          <div class="producto"> <!--Div que tendra las propiedades de cada Producto, imagen, precio etc-->
            <a href="../Pages/Products/Tarjeta.html"> <!--Al presionar sobre el producto lleva a otro html que dira que el producto fue agregado al carro-->
              <img id="imagen-4" onmouseover="OnMouseOver('product-photo-2')" onmouseout="OutMouseOver('product-photo-2')" alt="cpu" height="200"  />
              <h2 id="titulo-4"></h2>
              <h3 id="precio-4" style="color: white">$35.990</h3> <!--Precio-->
            </a>
          </div>
        </div>

        <div class="categoria"> <!--Cada Seccion de productos (Son tres, hardware, Perifericos y mantenimiento) tendraal inicio un div con clase categoria-->
          <h3>Perifericos</h3> <!--Titulo de seccion-->
          <div class="producto"> <!--Div que tendra las propiedades de cada Producto, imagen, precio etc-->
            <a href="Products/audifonos.html"> <!--Al presionar sobre el producto lleva a otro html que dira que el producto fue agregado al carro-->
              <img id="imagen-2" onmouseover="OnMouseOver('product-photo-3')" onmouseout="OutMouseOver('product-photo-3')" alt="audifonos" height="200"  />
              <h2  id="titulo-2"></h2>

              <h3 id="precio-2" style="color: white"></h3> <!--Precio-->
            </a>
          </div>
          <div class="producto"> <!--Div que tendra las propiedades de cada Producto, imagen, precio etc-->
            <a href="Products/Mouse.html"> <!--Al presionar sobre el producto lleva a otro html que dira que el producto fue agregado al carro-->
              <!--La imagen tiene un id que nos servira que cuando el mouse pase por encima llamara
                a la funcion OnMouseOver() que agranda la imagen mientras que OutMouse over la llevara
                 a su estado normal-->
              <img id="imagen-5" onmouseover="OnMouseOver('product-photo-4')" onmouseout="OutMouseOver('product-photo-4')" alt="maus" height="200" />
              <h2 id="titulo-5"></h2>

              <h3 id="precio-5" style="color: white">$21.000</h3> <!--Precio-->
            </a>
          </div>
        </div>

        <div class="categoria"> <!--Cada Seccion de productos (Son tres, hardware, Perifericos y mantenimiento) tendraal inicio un div con clase categoria-->
          <h3>Mantenimiento</h3> <!--Titulo de seccion-->
          <div class="producto"> <!--Div que tendra las propiedades de cada Producto, imagen, precio etc-->
            <a href="Products/Limpiador.html"> <!--Al presionar sobre el producto lleva a otro html que dira que el producto fue agregado al carro-->
              <!--La imagen tiene un id que nos servira que cuando el mouse pase por encima llamara
                a la funcion OnMouseOver() que agranda la imagen mientras que OutMouse over la llevara
                 a su estado normal-->
              <img id="imagen-3" onmouseover="OnMouseOver('product-photo-5')" onmouseout="OutMouseOver('product-photo-5')" alt="limpiador" height="200"  />
              <h2 id="titulo-3"></h2>
              <!--Nombre del producto-->
              <h3 id="precio-3" style="color: white">$13.990</h3> <!--Precio-->
            </a>
          </div>
          <div class="producto"> <!--Div que tendra las propiedades de cada Producto, imagen, precio etc-->
            <a href="Products/Pasta.html"> <!--Al presionar sobre el producto lleva a otro html que dira que el producto fue agregado al carro-->
              <!--La imagen tiene un id que nos servira que cuando el mouse pase por encima llamara
                a la funcion OnMouseOver() que agranda la imagen mientras que OutMouse over la llevara
                 a su estado normal-->
              <img id="imagen-6" onmouseover="OnMouseOver('product-photo-6')" onmouseout="OutMouseOver('product-photo-6')" alt="pasta" height="200"/>
              <h2 id="titulo-6"></h2>

              <h3 id="precio-6" style="color: white">$10.000</h3> <!--Precio-->
            </a>
          </div>
        </div>
      </div>
    </section>
    <!--Aqui es el "carrusel" de la pagina-->
    <h1>Mas Productos</h1>
    <div class="carrusel"> <!--Clase con las propiedades del carrusel-->
      <div class="elemento"> <!--Div que tendra las propiedades de cada Producto Del carrusel, imagen, precio etc-->
        <a href="Products/VentiladorPort.html"> <!--Al presionar sobre el producto lleva a otro html que dira que el producto fue agregado al carro-->
          <!--La imagen tiene un id que nos servira que cuando el mouse pase por encima llamara
            a la funcion OnMouseOver() que agranda la imagen mientras que OutMouse over la llevara
            a su estado normal-->
          <img src="../Images/Products/cama.jpg" alt="" width="400" height="400" />
          <br />
        </a>
        Ventilador Portatil <!--Nombre del producto-->
        <h3 style="color: white">$5.990</h3> <!--Precio-->
      </div>

      <div class="elemento"> <!--Div que tendra las propiedades de cada Producto Del carrusel, imagen, precio etc-->
        <a href="Products/joystick.html"> <!--Al presionar sobre el producto lleva a otro html que dira que el producto fue agregado al carro-->
          <!--La imagen tiene un id que nos servira que cuando el mouse pase por encima llamara
          a la funcion OnMouseOver() que agranda la imagen mientras que OutMouse over la llevara
          a su estado normal-->
          <img src="../Images/Products/joystick-arcade.jpg" alt="" width="400" height="400" />
          Joystick Arcade <br /> <!--Nombre del producto-->
          <h3 style="color: white">$15.990</h3> <!--Precio-->
        </a>
      </div>


      <div class="elemento"> <!--Div que tendra las propiedades de cada Producto Del carrusel, imagen, precio etc-->
        <a href="Products/Destornillador.html"> <!--Al presionar sobre el producto lleva a otro html que dira que el producto fue agregado al carro-->

          <!--La imagen tiene un id que nos servira que cuando el mouse pase por encima llamara
          a la funcion OnMouseOver() que agranda la imagen mientras que OutMouse over la llevara
          a su estado normal-->
          <img src="../Images/Products/destornillador.jpg" alt="" width="400" height="400" />
          Set Destornilladores <br /> <!--Nombre del producto-->
          <h3 style="color: white">$5.000</h3> <!--Precio-->
        </a>
      </div>

      <div class="elemento"> <!--Div que tendra las propiedades de cada Producto Del carrusel, imagen, precio etc-->
        <a href="Products/ps5.html"> <!--Al presionar sobre el producto lleva a otro html que dira que el producto fue agregado al carro-->
          <!--La imagen tiene un id que nos servira que cuando el mouse pase por encima llamara
        a la funcion OnMouseOver() que agranda la imagen mientras que OutMouse over la llevara
        a su estado normal-->
          <img src="../Images/Products/ps5.jpg" alt="" width="400" height="400" />
          Joystick PlayStation 5 <br /> <!--Nombre del producto-->
          <h3 style="color: white">$7.990</h3> <!--Precio-->
        </a>
      </div>

      <div class="elemento"> <!--Div que tendra las propiedades de cada Producto Del carrusel, imagen, precio etc-->
        <a href="Products/TECLADO.html"> <!--Al presionar sobre el producto lleva a otro html que dira que el producto fue agregado al carro-->
          <!--La imagen tiene un id que nos servira que cuando el mouse pase por encima llamara
        a la funcion OnMouseOver() que agranda la imagen mientras que OutMouse over la llevara
        a su estado normal-->
          <img src="../Images/Products/tecladin.jpg" alt="" width="400" height="400" />
          Teclado Gamer <br /> <!--Nombre del producto-->
          <h3 style="color: white">$28.990</h3> <!--Precio-->
        </a>
      </div>

      <div class="elemento"> <!--Div que tendra las propiedades de cada Producto Del carrusel, imagen, precio etc-->
        <a href="Products/Silla.html"> <!--Al presionar sobre el producto lleva a otro html que dira que el producto fue agregado al carro-->
          <!--La imagen tiene un id que nos servira que cuando el mouse pase por encima llamara
        a la funcion OnMouseOver() que agranda la imagen mientras que OutMouse over la llevara
        a su estado normal-->
          <img src="../Images/Products/silla.png" alt="" width="400" height="400" />
          Silla Gamer <br /> <!--Nombre del producto-->
          <h3 style="color: white">$128.990</h3> <!--Precio-->
        </a>
      </div>

    </div>
  </main>
  <footer>
    <div class="footer-container"> <!--Todo esto es la parte de abajo de la pagina-->
      <div>
        <h1>Tech Araucania</h1> <!--Nombre de la pagina-->
        <h4>Sigueno en</h4>
        <div>
          <!--Iconos De Redes Sociales-->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M18 2a1 1 0 0 1 .993 .883l.007 .117v4a1 1 0 0 1 -.883 .993l-.117 .007h-3v1h3a1 1 0 0 1 .991 1.131l-.02 .112l-1 4a1 1 0 0 1 -.858 .75l-.113 .007h-2v6a1 1 0 0 1 -.883 .993l-.117 .007h-4a1 1 0 0 1 -.993 -.883l-.007 -.117v-6h-2a1 1 0 0 1 -.993 -.883l-.007 -.117v-4a1 1 0 0 1 .883 -.993l.117 -.007h2v-1a6 6 0 0 1 5.775 -5.996l.225 -.004h3z" stroke-width="0" fill="currentColor" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M14.058 3.41c-1.807 .767 -2.995 2.453 -3.056 4.38l-.002 .182l-.243 -.023c-2.392 -.269 -4.498 -1.512 -5.944 -3.531a1 1 0 0 0 -1.685 .092l-.097 .186l-.049 .099c-.719 1.485 -1.19 3.29 -1.017 5.203l.03 .273c.283 2.263 1.5 4.215 3.779 5.679l.173 .107l-.081 .043c-1.315 .663 -2.518 .952 -3.827 .9c-1.056 -.04 -1.446 1.372 -.518 1.878c3.598 1.961 7.461 2.566 10.792 1.6c4.06 -1.18 7.152 -4.223 8.335 -8.433l.127 -.495c.238 -.993 .372 -2.006 .401 -3.024l.003 -.332l.393 -.779l.44 -.862l.214 -.434l.118 -.247c.265 -.565 .456 -1.033 .574 -1.43l.014 -.056l.008 -.018c.22 -.593 -.166 -1.358 -.941 -1.358l-.122 .007a.997 .997 0 0 0 -.231 .057l-.086 .038a7.46 7.46 0 0 1 -.88 .36l-.356 .115l-.271 .08l-.772 .214c-1.336 -1.118 -3.144 -1.254 -5.012 -.554l-.211 .084z" stroke-width="0" fill="currentColor" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
            <path d="M16.5 7.5l0 .01" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M3 5m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v6a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
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
        <a href="../Pages/history.html">Historia</a>
        <a href="../Pages/team.html">Nuestro Equipo</a>
      </div>
      <div>
        <h3>Contacto</h3>
        <p>+56 9 2315412412</p>
        <p>TechAraucania@gmail.cl</p>
      </div>
    </div>
  </footer>

  <?php
  $database = new mysqli("localhost", "root", "", "productos");

  if ($database->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
  }

  $consult = "SELECT * FROM productos";

  $result = mysqli_query($database, $consult);
  $message = "Esto se registrará en el archivo de registro del servidor.";
  $ciclos = 0;
  error_log($message);

  if ($result->num_rows > 0) {


    while ($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $nombre = $row['nombre'];
      $descripcion = $row['descripcion'];
      $precio = $row['precio'];
      $imagen_binaria = $row["imagen"];

      $imagen_base64 = base64_encode($imagen_binaria);
  
      echo '<script>';
      echo 'document.getElementById("titulo-' . $id . '").innerHTML = "' . $nombre . '";';
      echo 'document.getElementById("imagen-' . $id . '").src = "data:image/jpeg;base64,' . $imagen_base64 . '";';
      echo 'document.getElementById("precio-' . $id . '").innerHTML = "' . $precio . '";';

      echo '</script>';

    
    }
  } else {
    echo "Imagen no encontrada.";
  }



  ?>
  <script src="../js/products.js">
        var usuarioIniciado = <?php echo isset($_SESSION['correo']) ? 'true' : 'false'; ?>;
      var botonnn = document.getElementById("botonnnn");

      if(usuarioIniciado){
        botonnn.textContent = "Cerrar Sesion";
        botonnn.href = "cerrar_sesion.php";
      }

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>