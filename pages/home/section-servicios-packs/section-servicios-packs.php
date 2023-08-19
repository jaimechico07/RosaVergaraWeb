<?php include_once("attributes.php"); ?>

<section class="section-servicios-packs">
  <h2 class="heading-secondary section-servicios-packs__title">
    <span class="section-servicios-packs__span">
      Servicios
    </span>
  </h2>

  <div class="swiper swiper--packs">
    <div class="swiper-wrapper">
      <?php foreach ($data as $servicio) : ?>
        <div class="swiper-slide">
          <div class="section-servicios-packs__subheading">
            <h3 class="heading-tertiary section-servicios-packs__title-3">
              <?php echo $servicio["title"] ?>
            </h3>
            <p class="text-white text-dynamic-des font-comfortaa"><?php echo $servicio["description"] ?></p>
          </div>
          <div class="section-servicios-packs__content">
            <figure>
              <img src="<?php echo $servicio["image"] ?>" alt="Pack">
            </figure>
            <a class="btn btn--home-servicios" href="<?php echo $servicio["link"] ?>"><?php echo $servicio["boton"] ?></a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>