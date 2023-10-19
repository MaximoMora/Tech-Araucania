<?php
include('sesiones.php');
echo "hola";
?>

<!--El archivo es de tipo html-->
<!DOCTYPE html>
<!--El idioma del documento-->
<html lang="en">
<!--  el elemento head se utiliza dar información y metadatos sobre un archivo HTML, pero no muestra en la página web.-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Araucania</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Styles/index.css">
    <title>Document</title>
</head>
<!--Body contiene todo el contenido que ve en la pagina web-->

<body>
    <header class="nav">
        <h1>Tech Araucania</h1>
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
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="products.php">Productos</a>
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
                  <li class="nav-item">
                    <a class="nav-link">
                        <?php
                        if (!isset($_SESSION['correo'])) {
                            echo "<div><b>No has iniciado sesión</b></div>";
                        } else {
                            print_r($_SESSION['correo']);
                        }
                        ?></a>
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
        <section class="mainContainer">
            <img src="../Images/Home/ORiginal 1.png" alt="">
            <div class="mainText">
                <h5>Llego a Temuco</h5>
                <h1>Tech Araucania</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum nostrum, eligendi quod labore
                    cupiditate </p>
                <button><a href="products.html">Comprar Ahora</a></button>
            </div>
        </section>
        <section class="mainCatalogue">
            <h2>Busca en nuestro catalogo</h3>
                <div class="mainCatalogueImages">
                    <div class="mainCatalogueImagesProduct">
                        <img src="../Images/Home/processor.jpg" alt="">
                        <h3>Procesadores</h3>

                    </div>
                    <div class="mainCatalogueImagesProduct">
                        <img src="../Images/Home/card.jpg" alt="">
                        <h3>Tarjeta Grafica</h3>
                    </div>
                    <div class="mainCatalogueImagesProduct">
                        <img src="../Images/Home/ram.jpg" alt="">
                        <h3>Ram</h3>
                    </div>
                </div>
        </section>
        <section class="mainProducts">
            <h2>Nuestros Productos</h2>
            <div class="mainGalery">
                <div class="mainProduct">
                    <img src="../Images/motherBoard.jpg" alt="">
                    <div class="mainProductText">
                        <h4>MSI PRO Z790</h4>
                        <p class="text">Tarjeta Madre</p>
                        <p class="price">CLP 250.000 <span class="past-price">350.000</span></p>
                    </div>

                </div>
                <div class="mainProduct">
                    <img src="../Images/motherBoard.jpg" alt="">
                    <div class="mainProductText">
                        <h4>MSI PRO Z790</h4>
                        <p class="text">Tarjeta Madre</p>
                        <p class="price">CLP 250.000 <span class="past-price">350.000</span></p>
                    </div>
                </div>
                <div class="mainProduct">
                    <img src="../Images/motherBoard.jpg" alt="">
                    <div class="mainProductText">
                        <h4>MSI PRO Z790</h4>
                        <p class="text">Tarjeta Madre</p>
                        <p class="price">CLP 250.000 <span class="past-price">350.000</span></p>
                    </div>
                </div>
                <div class="mainProduct">
                    <img src="../Images/motherBoard.jpg" alt="">
                    <div class="mainProductText">
                        <h4>MSI PRO Z790</h4>
                        <p class="text">Tarjeta Madre</p>
                        <p class="price">CLP 250.000 <span class="past-price">350.000</span></p>
                    </div>
                </div>
            </div>
            <div class="mainGalery">
                <div class="mainProduct">
                    <img src="../Images/motherBoard.jpg" alt="">
                    <div class="mainProductText">
                        <h4>MSI PRO Z790</h4>
                        <p class="text">Tarjeta Madre</p>
                        <p class="price">CLP 250.000 <span class="past-price">350.000</span></p>
                    </div>
                </div>
                <div class="mainProduct">
                    <img src="../Images/motherBoard.jpg" alt="">
                    <div class="mainProductText">
                        <h4>MSI PRO Z790</h4>
                        <p class="text">Tarjeta Madre</p>
                        <p class="price">CLP 250.000 <span class="past-price">350.000</span></p>
                    </div>
                </div>
                <div class="mainProduct">
                    <img src="../Images/motherBoard.jpg" alt="">
                    <div class="mainProductText">
                        <h4>MSI PRO Z790</h4>
                        <p class="text">Tarjeta Madre</p>
                        <p class="price">CLP 250.000 <span class="past-price">350.000</span></p>
                    </div>
                </div>
                <div class="mainProduct">
                    <img src="../Images/motherBoard.jpg" alt="">
                    <div class="mainProductText">
                        <h4>MSI PRO Z790</h4>
                        <p class="text">Tarjeta Madre</p>
                        <p class="price">CLP 250.000 <span class="past-price">350.000</span></p>
                    </div>
                </div>

            </div>


        </section>
        <footer class="footer">
            <div class="footerText">
                <h2>Tech Araucania</h2>
                <p>400 Av. Alemania 312</p>
                <p>Cautin</p>
                <p>FA 42141 CL</p>
                <br>
                <br>
                <h3>2023 Tech Araucania</h3>
                <h3>Derechos reservados</h3>

            </div>
            <div class="footerText">
                <h3>Links</h3>
                <a href="">Home</a>
                <a href="">Tienda</a>
                <a href="">Nosotros</a>
                <a href="">Contacto</a>
            </div>
            <div class="footerText">
                <h3>Ayuda</h3>
                <a href="">Opciones de pago</a>
                <a href="">Devoluciones</a>
                <a href="">Politicas de privacidad</a>



            </div>
            <div class="footerText">
                <h3>Promociones</h3>
                <input type="text" placeholder="Email">
                <button>Subcribirse</button>
            </div>

        </footer>


    </main>



<script>
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