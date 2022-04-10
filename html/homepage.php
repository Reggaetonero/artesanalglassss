<?php include './header.php'; ?>
<body>
        <header class="main-header">
         <div class="container container--flex"> 
             <div class="main-header__container">
                <h1 class="main-header__title">Artesanal Glass
                    <a name="prueba"></a>
                </h1>
                <span class="icon-menu" id="btn-menu"><i class="fa-solid fa-bars"></i></span>
                <nav class="main-nav" id="main-nav">
                    <ul class="menu">
                        <li class="menu__item"><a href="#prueba" class="menu__link">INICIO</a></li>
                        <li class="menu__item"><a href="" class="menu__link">ACERCA DE</a></li>
                        <li class="menu__item"><a href="#tienda" class="menu__link">TIENDA</a></li>
                        <li class="menu__item"><a href="#contacto" class="menu__link">CONTACTO</a></li>
                    </ul>
                </nav>
             </div>
              <div class="main-header__container">
                   <span class="main-header__txt">¿Necesitas ayuda?</span>
                   <p class="main-header__txt"><i class="fa-solid fa-phone"></i> Contáctanos al 611111111</p>
              </div>
              <div class="main-header__container">
                <i class="fa-solid fa-user-large"></i>
                <a href="" class="main-header__btn">Carrito<i class="fa-solid fa-cart-shopping"></i></a>
                <input type="search" class="main-header__input" placeholder="Buscar productos"><i class="fa-solid fa-magnifying-glass"></i>
              </div>
         </div>
        </header>
        <div class="container-slider">  <!--Slider de imágenes que se visualiza en la página principal-->
            <div class="slider" id="slider">
                <div class="slider__section"><img src="img/2.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Portavelas</h2>
                    <p class="slider__txt"></p>
                    <a href="" class="slider__link">COMPRAR</a>
                </div></div>
                <div class="slider__section"><img src="img/3.jpg" alt="" class="slider__img">
                    <div class="slider__content">
                        <h2 class="slider__title">Espejos</h2>
                        <p class="slider__txt"></p>
                        <a href="" class="slider__link">COMPRAR</a>
                    </div></div>
                <div class="slider__section"><img src="img/4.jpg" alt="" class="slider__img">
                    <div class="slider__content">
                        <h2 class="slider__title">Adornos</h2>
                        <p class="slider__txt"></p>
                        <a href="" class="slider__link">COMPRAR</a>
                    </div></div>
            </div>
            <a class="next" id="btn-right" onclick="plusSlides(1)">&#62;</a>
            <a class="prev" id="btn-left" onclick= "plusSlides(-1)">&#60;</a>
        </div>
        <br>

        <div style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <main class="main">
            <div class="container">
            <h2 class="main title">Artículos
                <a name="tienda"></a>
            </h2>
            <section class="container-products"> <!-- primer container de productos-->
                <div class="product">
                    <img src="img/espejo.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Espejo</h3>
                        <span class="product__price">100€</span>
                    </div>
                    <i class="product__icon fa-solid fa-cart-arrow-down"></i>
                </div>
                <div class="product">
                    <img src="img/portaincienso.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Portaincienso</h3>
                        <span class="product__price">20€</span>
                    </div>
                    <i class="product__icon fa-solid fa-cart-arrow-down"></i>
                </div>
                <div class="product">
                    <img src="img/lampara.jpg" alt="" class="product__img">
                    <div class="product__description">Lámpara hecha con cristal menorquín
                        <h3 class="product__title">Lámpara</h3>
                        <span class="product__price">15€</span>
                    </div>
                    <i class="product__icon fa-solid fa-cart-arrow-down"></i>
                </div>
                <div class="product">
                    <img src="img/separador.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Separador</h3>
                        <span class="product__price">70€</span>
                    </div>
                    <i class="product__icon fa-solid fa-cart-arrow-down"></i>
                </div>
            </section>
            <section class="container-products"><!-- segundo container de productos-->
                <div class="product">
                    <img src="img/espejo.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Espejo</h3>
                        <span class="product__price">100€</span>
                    </div>
                    <i class="product__icon fa-solid fa-cart-arrow-down"></i>
                </div>
                <div class="product">
                    <img src="img/portaincienso.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Portaincienso</h3>
                        <span class="product__price">20€</span>
                    </div>
                    <i class="product__icon fa-solid fa-cart-arrow-down"></i>
                </div>
                <div class="product">
                    <img src="img/lampara.jpg" alt="" class="product__img">
                    <div class="product__description">Lámpara hecha con cristal menorquín
                        <h3 class="product__title">Lámpara</h3>
                        <span class="product__price">15€</span>
                    </div>
                    <i class="product__icon fa-solid fa-cart-arrow-down"></i>
                </div>
                <div class="product">
                    <img src="img/separador.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">Separador</h3>
                        <span class="product__price">70€</span>
                    </div>
                    <i class="product__icon fa-solid fa-cart-arrow-down"></i>
                </div>
            </section>
         </main>
        <script src="js/slider.js"></script>

<?php include './footer.php'?>