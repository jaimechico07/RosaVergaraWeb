<?php
include_once("attributes.php");
?>

<section class="section-hora-atencion">
  <!-- Se le pone dentro de un div para ponerle container y en el h2 ponerle el color de fondo -->
  <div class="section-hora-atencion__heading">
    <h2 class="heading-secondary section-hora-atencion__title">Horario de <span class="section-hora-atencion__span">Atención</span></h2>
  </div>

  <!-- Card Normal de dias -->
  <div class="section-hora-atencion__days">
    <?php foreach ($data as $dia) : ?>
      <div class="section-hora-atencion__cardDays <?php echo $dia["activo"] ? "section-hora-atencion__cardDays--activo" : "" ?>">
        <div class="section-hora-atencion__card-container">
          <h3 class="heading-tertiary section-hora-atencion__title-3"><?php echo $dia["day"]; ?></h3>
          <p class=" section-hora-atencion__hora"><?php echo $dia["hora"]; ?></p>
        </div>
      </div>
    <?php endforeach ?>
  </div>

  <!-- swiper (se activa en móvil)-->
  <div class="swiper swiper--days">
    <div class="swiper-wrapper">
      <?php foreach ($data as $dia) : ?>
        <div class="swiper-slide <?php echo $dia["activo"] ? "swiper--activo" : "" ?>">
          <div class="swiper__slide-container">
            <h3 class="heading-tertiary section-hora-atencion__title-3"><?php echo $dia["day"]; ?></h3>
            <p class="section-hora-atencion__p"><?php echo $dia["hora"]; ?></p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <div class="section-hora-atencion__contentUbi">
    <div class="section-hora-atencion__bg">
      <h2 class="heading-secondary section-hora-atencion__title-ubi">Encuentranos en Nuestras Oficinas</h2>
      <div class="section-hora-atencion__card">
        <div class="section-hora-atencion__contDire">
          <i class="fa-solid fa-location-dot section-hora-atencion__icon">
          </i>
          <p class="section-hora-atencion__desUbi">Sede San Isidro: Av. Arequipa Nº 3484</p>
        </div>
        <div class="section-hora-atencion__contDire">
          <i class="fa-solid fa-location-dot section-hora-atencion__icon">
          </i>
          <p class="section-hora-atencion__desUbi">Sede Surco: Av. Circunvalación Nº 653</p>
        </div>
        <div class="section-hora-atencion__contDire">
          <i class="fa-solid fa-location-dot section-hora-atencion__icon">
          </i>
          <p class="section-hora-atencion__desUbi">Sede Pueblo Libre: General Artigas 972,
            Dpto. 601</p>
        </div>
      </div>
    </div>
  </div>
</section>