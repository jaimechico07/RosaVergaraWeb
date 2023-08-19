<?php function headerEl(string $page = "inicio", bool $showNavRedSoc = true): void
{ ?>
  <header class="header header--main">
    <nav class="nav nav--main">
      <ul class="nav__list nav__list--main">
        <li class="nav__item nav__item--main nav__item--logo">
          <a class="nav__link " href="<?php echo $page === "inicio" ? "#!" : "/" ?>">
            <img class="nav__img" src="/img/logo.svg" alt="Logo de navegación de Rosa Vergara">
          </a>
        </li>

        <li class="nav__item nav__item--main <?php echo $page === "inicio" ? "nav__item--active" : "" ?>">
          <a class="nav__link" href="<?php echo $page === "inicio" ? "#!" : "/" ?>">
            Inicio
          </a>
          <hr class="nav__hr <?php echo $page === "inicio" ? "nav__hr--active" : "" ?>" />
        </li>

        <li class="nav__item nav__item--main <?php echo $page === "estudio" ? "nav__item--active" : "" ?>">
          <a class="nav__link" href="<?php echo $page === "estudio" ? "#!" : "/pages/estudio/estudio.php" ?>">Estudio</a>
          <hr class="nav__hr <?php echo $page === "estudio" ? "nav__hr--active" : "" ?>" />
        </li>

        <li class="nav__item nav__item--main nav__item--sublist-desktop">
          <button class="btn btn--dropdown btn--sublist-desktop <?php echo $page === "la-escuela" || $page === "servicios" ? "btn--sublist-desktop-active" : "" ?>">
            <span class="btn__span <?php echo $page === "la-escuela" || $page === "servicios" ? "btn__span--active" : "" ?>">Escuela</span>
            <i class="fa-solid fa-angle-down"></i>
            <hr class="nav__hr <?php echo $page === "la-escuela" || $page === "servicios" ? "nav__hr--active" : "" ?>" />
          </button>

          <ul class="nav__sublist nav__sublist--main">
            <li class="nav__subitem nav__subitem--main <?php echo $page === "la-escuela" ? "nav__subitem--active" : "" ?>">
              <a class="nav__link" href="<?php echo $page === "la-escuela" ? "#!" : "/pages/la-escuela/la-escuela.php" ?>">
                La Escuela
              </a>
              <hr class="nav__hr <?php echo $page === "la-escuela" ? "nav__hr--sublist-active" : "" ?>" />
            </li>

            <li class="nav__subitem nav__subitem--main <?php echo $page === "servicios" ? "nav__subitem--active" : "" ?>">
              <a class="nav__link" href="<?php echo $page === "servicios" ? "#!" : "/pages/servicios/servicios.php" ?>">
                Servicios
              </a>
              <hr class="nav__hr <?php echo $page === "servicios" ? "nav__hr--sublist-active" : "" ?>" />
            </li>
          </ul>
        </li>

        <li class="nav__item nav__item--main <?php echo $page === "nosotros" ? "nav__item--active" : "" ?>">
          <a class="nav__link" href="<?php echo $page === "nosotros" ? "#!" : "/pages/nosotros/nosotros.php" ?>">Nosotros</a>
          <hr class="nav__hr <?php echo $page === "nosotros" ? "nav__hr--active" : "" ?>" />
        </li>

        <li class="nav__item nav__item--main">
          <a class="btn btn--primary" href="<?php echo $page === "contacto" ? "#!" : "/pages/contacto/contacto.php" ?>">
            <span class="btn__span btn__span--primary">Contáctanos</span>
          </a>
        </li>

        <li class="nav__item nav__item--main nav__item--burger">
          <button class="btn btn--open-nav-mobile">
            <i class="fa-solid fa-bars btn__icon btn__icon--open-nav-mobile"></i>
            <i class="fa-solid fa-xmark btn__icon btn__icon--close-nav-mobile btn__icon--hidden"></i>
          </button>
        </li>
      </ul>
    </nav>
    <?php echo $showNavRedSoc ? '
      <nav class="nav nav--redes-sociales">
        <hr class="nav__hr nav__hr--redes-sociales" />
        <ul class="nav__list nav__list--redes-sociales">
          <li class="nav__item nav__item--redes-sociales">
            <a class="nav__link nav__link--redes-sociales" href="mailto:contacto@profesionesdigitales.online">
              <i class="fa-regular fa-envelope nav__icon nav__icon--redes-sociales"></i>
            </a>
          </li>
          <li class="nav__item nav__item--redes-sociales">
            <a class="nav__link nav__link--redes-sociales" target="_blank" href="https://www.facebook.com/rosavergara.pe/">
              <i class="fa-brands fa-square-facebook nav__icon nav__icon--redes-sociales"></i>
            </a>
          </li>
          <li class="nav__item nav__item--redes-sociales">
            <a class="nav__link nav__link--redes-sociales" target="_blank" href="https://api.whatsapp.com/send?phone=+51123456789&text=hola,%20¿qué%20tal,%20deseo%20más%20información?">
              <i class="fa-brands fa-whatsapp nav__icon nav__icon--redes-sociales"></i>
            </a>
          </li>
        </ul>
      </nav>' : ""
    ?>
    <?php include_once("navMobile.php") ?>
  </header>
<?php } ?>