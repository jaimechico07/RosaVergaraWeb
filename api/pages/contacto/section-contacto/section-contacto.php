<section class="section-contacto">
  <figure class="section-contacto__figure">
    <img class="section-contacto__img" src="https://i.postimg.cc/7ZHVS0Fc/fondo-contacto.png" alt="fondo-contacto">
  </figure>

  <div class="section-contacto__containt">
    <div class="container">
      <div class="w-full px-5 py-2 text-center rounded-full bg-primary-gray-300">
        <h2 class=" heading-secondary section-contacto__title">
          Contáctanos
        </h2>
      </div>
    </div>

    <div class="section-contacto__bg">
      <form action="" method="POST" class="section-contacto__formulario">
        <div class="pt-8 section-contacto__form-group">
          <label for="nombre" class="section-contacto__sub">Nombre y Apellido</label>
          <input id="nombre" class="section-contacto__input" placeholder="Ingresa tu Nombre y Apellido" type="text" />
        </div>
        <div class="section-contacto__form-group">
          <label for="numero" class="section-contacto__sub">Correo Electrónico o Teléfono</label>
          <input id="numero" class="section-contacto__input" placeholder="Ingresa tu Correo o Teléfono" type="text" />
        </div>
        <div class="flex flex-col section-contacto__form-group">
          <label for="servicio" class="section-contacto__sub">Servicios</label>
          <select class="section-contacto__select" name="servicio" id="servicio">
            <option selected>Seleccione un servicio</option>
            <option value="Novia clásica">Novia Clásica</option>
            <option value="Novia Glamour">Novia Glamour</option>
            <option value="Maquillaje Social">Maquillaje Social</option>
            <option value="Maquillaje de Quinceañera">Maquillaje de Quinceañera</option>
            <option value="Maquillaje de Moda y Publicidad">Maquillaje de Moda y Publicidad</option>
          </select>
        </div>
        <div class="section-contacto__form-group">
          <label for="mensaje" class="section-contacto__sub">Mensaje</label>
          <textarea id="mensaje" class="section-contacto__txt-area" placeholder="Quisiera saber..."></textarea>
        </div>
        <div class="section-contacto__boton">
          <button class="btn btn--form">Enviar</button>
        </div>
      </form>
      <div class="section-contacto__redes-sociales">
        <a class="section-contacto__link" target="_blank" href="https://api.whatsapp.com/send?phone=+51123456789&text=Hola,%20¿qué%20tal,%20deseo%20más%20información?">
          <i class="section-contacto__icon fa-brands fa-whatsapp"></i>
        </a>
        <a class="section-contacto__link" target="_blank" href="https://www.facebook.com/rosavergara.pe/">
          <i class="section-contacto__icon fa-brands fa-square-facebook"></i>
        </a>
      </div>
    </div>

  </div>
</section>