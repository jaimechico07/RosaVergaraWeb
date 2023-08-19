<?php function footerEl(string $page = "inicio"): void
{ ?>
  <footer class="footer">
    <div class="footer__container">
      <div class="footer__content">
        <figure class="footer__containt-img">
          <a href="<?php echo $page === "inicio" ? "#!" : "/" ?>">
            <img class="footer__img" src="/img/logo--footer.svg" alt="logo-footer-rosa-vergara" />
          </a>
        </figure>

        <div class="footer__grid-2">
          <h3 class="heading-tertiary footer__title-3">INICIO</h3>
          <div class="flex flex-col gap-4 mb-4 ">
            <a class="footer__link" href="pages/estudio/estudio.php">Maquillaje</a>
            <a class="footer__link" href="/pages/la-escuela/la-escuela.php">La Escuela</a>
            <a class="footer__link" href="/pages/nosotros/nosotros.php">Nosotros</a>
            <a class="footer__link" href="/pages/contacto/contacto.php">Capacitaciones</a>
          </div>
        </div>

        <div class="footer__grid">
          <h3 class="heading-tertiary footer__title-3">CONTACTOS</h3>
          <div class="footer__flex-group">
            <div class="footer__flex">
              <a class="footer__link-icon" target="_blank" href="https://www.facebook.com/rosavergara.pe/">
                <i class="fa-brands fa-square-facebook footer__icon"></i>
              </a>
              <a class="footer__text" href="https://www.facebook.com/rosavergara.pe/">
                <i class="fa-brands fa-square-facebook footer__icon footer__icon--desktop"></i>
                Rosa Vergara - Maquilladora Profesional
              </a>
            </div>
            <div class="footer__flex">
              <a class="footer__link-icon" target="_blank" href="https://api.whatsapp.com/send?phone=+51123456789&text=Hola,%20¿qué%20tal,%20deseo%20más%20información?">
                <i class="fa-brands fa-whatsapp footer__icon"></i>
              </a>
              <a target="_blank" class="footer__text" href="https://api.whatsapp.com/send?phone=+51123456789&text=Hola,%20¿qué%20tal,%20deseo%20más%20información?">
                <i class="fa-brands fa-whatsapp footer__icon footer__icon--desktop"></i>
                +51 123 456 789</a>
            </div>
            <div class="footer__flex">
              <a class="footer__link-icon" target="_blank" href="mailto:contacto@profesionesdigitales.online">
                <i class="fa-regular fa-envelope footer__icon footer__icon--desktop"></i>
              </a>
              <a target="_blank" class="footer__text" href="mailto:contacto@profesionesdigitales.online">
                <i class="fa-regular fa-envelope footer__icon footer__icon--desktop"></i>
                contacto@profesionesdigitales.online
              </a>
            </div>
          </div>
        </div>

        <div class="footer__contactos">
          <a target="_blank" class="footer__tel" href="https://api.whatsapp.com/send?phone=+51123456789&text=hola,%20¿qué%20tal,%20deseo%20más%20información?">+51 123 456 789</a>
          <a target="_blank" class="footer__link" href="https://www.facebook.com/rosavergara.pe/">Rosa Vergara - Maquilladora Profesional</a>
          <a class="footer__link footer__link--contacto" href="mailto:contacto@profesionesdigitales.online">contacto@profesionesdigitales.online</a>
        </div>
      </div>
      <div class="footer__bottom">
        <p class="footer__copy">© Copyright 2022 ROSA VERGARA | Todos los derechos reservados Realizado por <a target="_blank" href="https://limadigital.pe/" class="footer__agencia">Agencia Lima Digital</a></p>
      </div>
    </div>
  </footer>
<?php } ?>