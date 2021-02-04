<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Wireframe a HTML, Exercici 1, Home</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="estilos.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <main class="padre">
        <header class="header">
                <div class="logo">
                    <img src="img/logo1.png" alt="logo" class="imagen-logo">
                </div>
                <div class="titulo">
                    <h1>Home</h1>
                    <a href="index.html"><i class="fas fa-home"></i></a>
                    <a href="portafolio.html">Portafolio</a>
                    <a href="curriculum.html">Curr&iacute;culum</a>
                </div>
                <div class="social">
                     
                     <div class="links">
                        <a href="https://facebook.com">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://linkedin.com">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
        </header>
        <nav>
                 <ul class="navegacion">
                    <li class="elemento"><a href="#">Biograf&iacutea</a></li>
                    <li class="elemento"><a href="#">Carrera profesional</a></li>
                    <li class="elemento"><a href="#">Skills</a></li>
                    <li class="elemento"><a href="#">Fotos</a></li>
                    <li class="elemento"><a href="#">Otros</a></li> 
                </ul> 
        </nav>

        <section class="section1">
            
            <div class="foto">
                <img class="imagen" src="img/news1.jpg" alt="foto1" />
                <pre><p>Prop&oacutesitos 2021  </p>
                <a href="#" class="btn">Acceder</a></pre> 
            </div>
            <div class="foto">
                <img class="imagen" src="img/news2.jpg" alt="foto2" />
                <pre><p>Comida saludable  </p> 
                <a href="#" class="btn">Acceder</a></pre> 
            </div>
            <div class="foto">
                <img class="imagen" src="img/news3.jpg" alt="foto3" />
                <pre><p>Galer&iacutea de arte  </p>
                <a href="#" class="btn">Acceder</a></pre> 
            </div>
        </section>

        <section class="section2">       
              <aside class="aside1">
                <img src="img/news4.jpg" alt="foto4" />
                <div><h3>&Uacuteltimas noticias</h3><br>
                Revisa las &uacuteltimas noticias<br>
                disponibles en nuestra Web y<br>
                mantente al día de la actualidad<br>
                cultural de nuestra ciudad y<br>
                los &uacuteltimos eventos destacados.<br>
                No te pierdas la secci&oacuten de conciertos.</div>
                <pre><a href="#" class="btn">Leer más</a></pre>
              </aside>
              <article class="articulo1">
                <img src="img/news5.jpg" alt="foto5" />
                <div><h3>Noches m&aacutegicas</h3><br>
                    Disfruta de estupendos paseos en barca en las noches m&aacutegicas que tienen preparadas<br>
                    en el lago de Como para conmemorar el 150 aniversario de la cofrad&iacutea de la pesca<br> 
                    para honrar a su patr&oacuten San Pedro. Una tradici&oacuten que ha sido retomada gracias<br>
                    al esfuerzo de los pescadores locales y de las asociaciones de vecinos de las poblaciones<br>
                    que rodean el lago. Por el m&oacutedico precio de 20 euros, podr&aacutes<br>
                    disfrutar de 40 minutos de navegación bajo el cielo estrellado de 4 de las 8 principales localidades<br>
                    que conforman las orillas del lago durante las noches de julio y agosto.<br>
                    Una oportunidad &uacutenica que no puedes dejar escapar. M&aacutes de 1300 personas ya han<br> 
                    disfrutado de esta experiencia y nos explican con todo lujo de detalles sus sensaciones<br> 
                    en exclusiva para nuestra revista. </div>
                <pre><a href="#" class="btn">Leer más</a></pre>
              </article>
              <aside class="aside2">
                <img src="img/news6.jpg" alt="foto6" />
                <div><h3>Recordatorios</h3><br>
                    Con motivo del comienzo del nuevo año<br>
                    hacemos un repaso de aquellos pequeños<br>
                    prop&oacutesitos que nos hacemos<br>
                    para que los lleves a buen t&eacutermino<br>
                    sin que tengas que renunciar a nada.</div>
                <pre><a href="#" class="btn">Leer más</a></pre>
              </aside>
        </section>
        <?php include "footer.html";?>
    </main>
</body>
</html>