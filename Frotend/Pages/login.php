

<!--El archivo es de tipo html-->
<!DOCTYPE html>
<!--El idioma del documento-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Araucania</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/Styles/login.css">
    <script src="assets/js/login.js"></script>
  </head>
<!--Body contiene todo el contenido que ve en la pagina web-->
<body background="../Images/fondo.jpg">
    <!--El header en la parte de arriba de nuestra pagina, estara el titulo la barra de busqueda-->
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.html">Inicio de sesion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.html">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html">Servicios</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Nosotros
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="team.html">Quienes Somos</a></li>
                  <li><a class="dropdown-item" href="history.html">Historia</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contacto</a>
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
    
        <div class="container-form sign-up">
            <div class="welcome-back">
                <div class="message">
                    <h2>Bienvenido</h2>
                    <p>Si tienes ya una cuenta, inicie sesion</p>
                    <button class="sign-up-btn">Iniciar sesion</button>
                </div>
            </div>
            <form class="formulario">
                <h2 class="create-account">Crear Cuenta</h2>
                <div class="iconos">
                    <a href="https://www.instagram.com/ferreteriabertuzzi/?hl=es">
                    <div class="border-icon">
                        <i class='bx bxl-instagram'></i>
                    </div>
                    </a>
                    <a href="https://www.facebook.com/people/Grandes-Tiendas-Ferretería-Bertuzzi/100012910236910/?paipv=0&eav=AfYR1hD35d6et8fQohjbQfTQ4fqVBv3fGwzCnhxtZW5XP9bT74zGxvJPl32nBgFrXQg&_rdr">
                    <div class="border-icon">
                        <i class='bx bxl-facebook-square' ></i>
                    </div>
                    </a>
                </div>
                <form class="cuentaN" method="POST">
                    <p class="cuenta-gratis">Ingrese sus datos para mejorar nuestra atencion</p>
                                        <input type="text" placeholder="rut" name="rut" id="ruti">
                    <input type="text" placeholder="nombre" name="nombre" id="nombreci">
                    <input type="text" placeholder="apellido" name="apellido" id="apellidi">
                    <input type="email" placeholder="correo" name="correo" id="emial">
                    <input type="text" placeholder="direccion" name="direccion" id="direccion">
                    <button type="submit" name="registro" id="keso">Registrarse</button>
                </form>
            </form>
        </div>
        <div class="sign-in">
            <form class="formulario">
                <h2 class="sign-up-btn">Iniciar Sesion</h2>
                <div class="iconos">
                    <a href="https://www.instagram.com/ferreteriabertuzzi/?hl=es">
                    <div class="border-icon">
                        <i class='bx bxl-instagram'></i>
                    </div>
                    </a>
                    <a href="https://www.facebook.com/people/Grandes-Tiendas-Ferretería-Bertuzzi/100012910236910/?paipv=0&eav=AfYR1hD35d6et8fQohjbQfTQ4fqVBv3fGwzCnhxtZW5XP9bT74zGxvJPl32nBgFrXQg&_rdr">
                    <div class="border-icon">
                        <i class='bx bxl-facebook-square' ></i>
                    </div>
                    </a>
                </div>
                <form action="Inicio_sesion.php" method="post"></form>
                  <p class="cuenta-gratis"></p>
                  <input type="text"  id="rut" placeholder="rut">
                  <input type="email" id="email" placeholder="correo">
                  <input type="button" placeholder="Iniciar Sesion" name="subir">
                </form>
            </form>
            <div class="welcome-back">
                <div class="message message-register">
                    <h2>Bienvenido de nuevo</h2>
                    <p>Si aun no tiene una cuenta registrese aca</p>
                    <button class="sign-in-btn" onclick="register()">Registrarse</button>
                </div>
            </div>
        </div>
    <br>

    </main>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const btn = document.getElementById("keso");
    btn.addEventListener("click", function(){
        event.preventDefault();
        const rut = document.getElementById("ruti").value;
        const nombre = document.getElementById("nombreci").value;
        const apellido = document.getElementById("apellidi").value;
        const correo = document.getElementById("emial").value;
        const direccion = document.getElementById("direccion").value;
        const nuevoform = new FormData();
        nuevoform.append("rut", rut);
        nuevoform.append("nombre", nombre);
        nuevoform.append("apellido", apellido);
        nuevoform.append("correo", correo);
        nuevoform.append("direccion", direccion);
        form = document.getElementById("keso");
        
        fetch('registro.php', {
            method: 'POST',
            body: nuevoform 
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error(data.error);
            } else {
                
                
            }
        })
    });
});
</script>
</body>

</html>

