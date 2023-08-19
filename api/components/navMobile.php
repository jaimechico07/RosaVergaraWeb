<nav class="nav nav--mobile nav--hidden">
  <ul class="nav__list nav__list--mobile">
    <li class="nav__item nav__item--mobile-menu">Menú</li>
    <li class="nav__item nav__item--mobile <?php echo $page === "inicio" ? "nav__item--active" : "" ?>">
      <a class="nav__link" href="<?php echo $page === "inicio" ? "#!" : "/" ?>">
        Inicio
      </a>
      <hr class="nav__hr <?php echo $page === "inicio" ? "nav__hr--active" : "" ?>" />
    </li>

    <li class="nav__item nav__item--mobile <?php echo $page === "estudio" ? "nav__item--active" : "" ?>">
      <a class="nav__link" href="<?php echo $page === "estudio" ? "#!" : "/pages/estudio/estudio.php" ?>">Estudio</a>
      <hr class="nav__hr <?php echo $page === "estudio" ? "nav__hr--active" : "" ?>" />
    </li>

    <li class="nav__item nav__item--mobile nav__item--sublist <?php echo $page === "la-escuela" || $page === "servicios" ? "nav__item--sublist-active" : "" ?>">
      <button class="btn btn--dropdown">
        <span class="btn__span <?php echo $page === "la-escuela" || $page === "servicios" ? "btn__span--active" : "" ?>">Escuela</span>
        <i class="fa-solid fa-angle-down"></i>
        <hr class="btn__hr btn__hr--sublist" />
      </button>

      <!-- Sublista de item Escuela -->
      <ul class="nav__sublist nav__sublist--mobile <?php echo $page === "la-escuela" || $page === "servicios" ? "nav__sublist--active" : "" ?>">
        <li class="nav__subitem <?php echo $page === "la-escuela" ? "nav__subitem--active" : "" ?>">
          <a class="nav__link" href="<?php echo $page === "la-escuela" ? "#!" : "/pages/la-escuela/la-escuela.php" ?>">
            La Escuela
          </a>
          <hr class="nav__hr <?php echo $page === "la-escuela" ? "nav__hr--sublist-active" : "" ?>" />
        </li>

        <li class="nav__subitem <?php echo $page === "servicios" ? "nav__subitem--active" : "" ?>">
          <a class="nav__link" href="<?php echo $page === "servicios" ? "#!" : "/pages/servicios/servicios.php" ?>">
            Servicios
          </a>
          <hr class="nav__hr <?php echo $page === "servicios" ? "nav__hr--sublist-active" : "" ?>" />
        </li>
      </ul>
    </li>

    <li class="nav__item nav__item--mobile <?php echo $page === "nosotros" ? "nav__item--active" : "" ?>">
      <a class="nav__link" href="<?php echo $page === "nosotros" ? "#!" : "/pages/nosotros/nosotros.php" ?>">Nosotros</a>
      <hr class="nav__hr <?php echo $page === "nosotros" ? "nav__hr--active" : "" ?>" />
    </li>

    <li class="nav__item nav__item--mobile">
      <a class="nav__link" href="<?php echo $page === "contacto" ? "#!" : "/pages/contacto/contacto.php" ?>">
        Contáctanos
      </a>
      <hr class="nav__hr <?php echo $page === "contacto" ? "nav__hr--active" : "" ?>" />
    </li>
  </ul>
</nav>