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
  <link rel="stylesheet" href="assets/Styles/products.css" /> <!--Vinculamos el archivo .css para poder estilizar de mejor manera-->
  <link rel="stylesheet" href="../Styles/category.css">
  <title>Document</title> <!--Titulo de la pag (TechAraucania)-->
</head>

<body> <!-- Ponemos un fondo (background) a la pagina para estilizar mas.-->


  <header> <!--encabezado de la página web -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary"> <!-- barra de navegación de la página -->
      <div class="container-fluid">

        <!--botón que se usa para la funcionalidad de abrir y cerrar la barra de navegación -->.
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"> <!-- elemento de lista que contienen el link -->
              <a class="nav-link" aria-current="page" href="login.php" id="botonnnn">Iniciar Sesion</a>
            </li>
            <li class="nav-item"> <!-- elemento de lista que contienen el link -->

              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item"> <!-- elemento de lista que contienen el link -->
              <a class="nav-link active" href="products.php">Productos</a>
            </li>
            <li class="nav-item"> <!-- elemento de lista que contienen el link -->
              <a class="nav-link" aria-current="page" href="login.php">Inicio Sesion</a>
            </li>
            <li class="nav-item"> <!-- elemento de lista que contienen el link -->
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item"> <!-- elemento de lista que contienen el link -->
              <a class="nav-link active" href="products.php">Productos</a>
            </li>
            <li class="nav-item"> <!-- elemento de lista que contienen el link -->
              <a class="nav-link" href="services.php">Servicios</a>
            </li>
            <li class="nav-item dropdown"> <!-- elementos de lista que contienen el link -->
              <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nosotros
              </a>
              <ul class="dropdown-menu"> <!--lista no ordenada  -->
                <li> <!-- elemento de lista que contienen el link -->
                  <a class="dropdown-item" href="team.php">Quienes Somos</a>
                </li>
                <li> <!-- elemento de lista que contienen el link -->
                  <a class="dropdown-item" href="history.php">Historia</a>
                </li>
                <li> <!-- elemento de lista que contienen el link -->
                  <hr class="dropdown-divider">
                </li>
              </ul>

            </li>

            <li class="nav-item"> <!-- elemento de lista que contienen el link -->
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

    <div class="container is-fluid mb-6">
      <h1 class="title">Productos</h1>
    </div>

    <div class="container pb-6 pt-6">
      <div class="columns">



        <div class="column is-one-third">
          <h2 class="title has-text-centered">Categorías</h2>
          <?php
          include "conexion_productos.php";
          $result = $conn->query("SELECT * FROM categorias");

          if ($result->rowCount() > 0) {
            $categories = $result->fetchAll();
            foreach ($categories as $row) {

              echo '<a href="categoria.php?categoria_id=' . $row['id_categoria'] . ' ">' . $row['nombre_categoria'] . '</a> </br>';
            }
          } else {
            echo '<p class="has-text-centered">No hay categorías registradas</p>';
          }


          ?>



        </div>



        <div class="column">
          <?php
          if (isset($_GET['categoria_id'])) {
            $categoria_id = $_GET['categoria_id'];
            $conect = $conn;
            echo '<p  >Desde base de datos ' . $categoria_id . '</p>';

            $categoria = $conect->query('SELECT * FROM categorias WHERE id_categoria = ' . $categoria_id . '');
            if ($categoria->rowCount() > 0) {
              $categoria = $categoria->fetch();
              echo '<h2> ' . $categoria["nombre_categoria"] . ' <h2>';
            } else {
              echo '<h2> ' . 'Elige un nombre de categoria correcto' . ' <h2>';
              echo '</br>';
            }
          }
          ?>
        </div>

        <div class="productos">
          <?php
          $categoria_id = $_GET['categoria_id'];
          $products = $conect->query('SELECT * FROM productos WHERE id_categoria = ' . $categoria_id . '');

          if ($products->rowCount() > 0) {
            foreach ($products as $product) {

              $imagen_base64 = base64_encode($product['imagen']);


              echo  '
              <div class="producto">
              <div class="imagen-contenedor" >
              <img class="imagen-producto" src="data:image/jpeg;base64,' . $imagen_base64 . '" alt="' . $product["nombre"] . '">
              </div>
              <div class="product-text">

                    <p> Nombre = ' . $product["nombre"] . '  </p>
                    <p> Precio = ' . $product["precio"] . '  </p>
                    
                    <p>  ID ' . $product["id_producto"] .' </p>



              </div>

              <div class="options">

                <button onclick="AgregarCarrito('.$product["id_producto"] .')" >Agregar a Carrito</button>



              

              </div>

              </div>
              ';
            }
          } else {
            echo '<h2> ' . 'Elige otro componente' . ' <h2>';
          }


          ?>


        </div>

        


        <article class="media">
          <figure class="media-left">

          </figure>
          <div class="media-content">

            <div class="has-text-right">
              <a href="#" class="button is-link is-rounded is-small">Imagen</a>
              <a href="#" class="button is-success is-rounded is-small">Actualizar</a>
              <a href="#" class="button is-danger is-rounded is-small">Eliminar</a>
            </div>
          </div>
        </article>




        <p class="has-text-centered">
          <a href="#" class="button is-link is-rounded is-small mt-4 mb-4">
            Haga clic acá para recargar el listado
          </a>
        </p>

        <p class="has-text-centered">No hay registros en el sistema</p>

        <hr>

        <p class="has-text-right">Mostrando productos <strong>1</strong> al <strong>17</strong> de un <strong>total de 17</strong></p>

        <nav class="pagination is-centered is-rounded" role="navigation" aria-label="pagination">
          <a class="pagination-previous" href="#">Anterior</a>

          <ul class="pagination-list">
            <li><a class="pagination-link" href="#">1</a></li>
            <li><span class="pagination-ellipsis">&hellip;</span></li>
            <li><a class="pagination-link is-current" href="#">2</a></li>
            <li><a class="pagination-link" href="#">3</a></li>
            <li><span class="pagination-ellipsis">&hellip;</span></li>
            <li><a class="pagination-link" href="#">3</a></li>
          </ul>

          <a class="pagination-next" href="#">Siguiente</a>
        </nav>





        <h2 class="has-text-centered title">Seleccione una categoría para empezar</h2>

      </div>

    </div>
    </div>
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
      die("Error en la conexión: ");
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

      if (usuarioIniciado) {
        botonnn.textContent = "Cerrar Sesion";
        botonnn.href = "cerrar_sesion.php";
      }



    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>