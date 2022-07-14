<DOCTYPE html>
    <html lang="es">
    <meta charset="UTF8">
    <head>
    <link rel="Stylesheet" href="Registro.css">
    <link rel="Stylesheet" href="Productos.css">
    <script src="https://kit.fontawesome.com/d80221b4e3.js" crossorigin="anonymous"></script>
        <title>Registro</title>
    </head>
    <body>
    <header>
        <nav>
            <section class="contenedor nav">
                <div class="logo">
                    <img src="https://lh3.googleusercontent.com/7MD3-OKfAu8dmF9fbKmHJgrUy8IiWsi-AqPKpkpd9J29lNkHd-T7zD8e9Rfh2mVDpjSu=s170"
                        alt="" width="100">
                </div>
                <div class="enlaces-header">
                    <a div="nav-link" href="paginaweb.php">Inicio</a>
                    <a div="nav-link"href="Productos.php">Productos</a>
                    <a div="nav-link"href="Servicio.php">Servicio</a>
                    <a div="nav-link"href="Carrito.php">Carrito</a>
                    <a div="nav-link"href="ingresar.php">Ingresar</a>
                </div>
                <div class="hamburguer">
                    <i class="fas fa-hamburguer"></i>
                </div>
            </section>
        </nav>
    <div class="Titulo">Productos Disponibles</div>
    </header>                
    <div id="current_date"></p>
    <script>
    date = new Date();
    year = date.getFullYear();
    month = date.getMonth() + 1;
    day = date.getDate();
    document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
    </script><body><rigth><center> 
    <hr color="#2ecb46" size=10>  
    <div style="border-radius: 15px; width: 1000px;
          background: #FFF; color: #000; ">   
    <table>
            <tr>
                <td>
                    <!--Formulario-->
                    <Form action="proceso.php" method="POST">
    <form action="url_destino">
    No. cliente:
        <label for="Matricula">
    <i class="fa-duotone fa-hashtag"></i>                       <input type= "text" placeholder="Ejemplo: 11876717 " maxlength="15" id="Cliente" name="txtcliente" autocomplete="name" required>
    <br>
    <form action="url_destino">
        Nombre(s):
    <label for="Nombre">
    <i class="fa-regular fa-user"></i>                          <input type= "text" placeholder="Ejemplo: Angel Yabin " maxlength="15" id="Nombre" name="txtnombre" autocomplete="name" required>
    <br>
    <form action="url_destino">
    Apellido Paterno:
    <label for="ApellidoP">
    <i class="fa-regular fa-user"></i>                          <input type="text" placeholder="Ejemplo: Mendoza " maxlength="15" name="txtapp" autocomplete="name" required>
    <br>
    <form action="url_destino">
    Apellido Materno:
    <label for="ApellidoM">
    <i class="fa-regular fa-user"></i>                          <input type="text" placeholder="Ejemplo: Cervantes " maxlength="15" name="txtapm" autocomplete="name" required>
    <br>
        Fecha de nacimiento: 
    <input type="date" name="txtfn" id="" class="" value="">
    <br>
    Genero:
    <abbr title="Este campo es obligatorio" aria-label="required"></abbr></legend>
                <input type="radio" name="txtgen" id="" class="" value="Femenino" checked> Femenino <br>
                <input type="radio" name="txtgen" id="" class="" value="Masculino"> Masculino <br>
    Tipo de cliente:
        <i class="fa-solid fa-arrows-down-to-people"></i>                               <select name="Cliente">
            <option value="Normal">Normal</option>
            <option value="Reconocido" selected="selected">Reconocido</option>
        </select> <br>
    <form action="url_destino">
        Correo:
    <label for="Correo">
        <i class="fa-regular fa-envelope"></i>                                      <input type="text" placeholder="Ejemplo: usuario@gmail.com " name="txtemail" autocomplete="name" required>
    <br>
    <form action="url_destino">
        Contraseña:
    <i class="fa-solid fa-unlock-keyhole"></i>                                      <input class="form-control" type="password" name="txtcontraseña"  minlength="8" maxlength="8" required placeholder="8 numeros"><div class="form-row">
    <div class="contenedor">
            <section class="contenido-header">
                <section class="textos-header">
    <input type="submit" name="submit" value="Registrarse">                   
</section>
    </form>
         </td>
        </tr>
        </table>
        <hr color="#2ecb46" size=10>
        </form>
                </form>
        </table>
    </div>
</div>
<div class="Tarjeta">
    <table>