<?php
include_once("attributes.php");
?>

<section class="section-porque-elegirnos">
  <figure class="section-porque-elegirnos__figure">
    <img class="section-porque-elegirnos__img" src="https://i.postimg.cc/WzDqNRk3/Rectangle-139.png" alt="Mujer maquillandose" />
  </figure>

  <!-- El content es para igualarlo con el figure y el div text para centrarlo a la derecha -->
  <div class="section-porque-elegirnos__content">
    <div class="section-porque-elegirnos__text">
      <div class="section-porque-elegirnos__heading">
        <h2 class="heading-secondary section-porque-elegirnos__title">
          <span class="section-porque-elegirnos__span">
            ¿Por qué elegirnos?
          </span>
        </h2>
      </div>
      <div class=" section-porque-elegirnos__contentCard">
        <?php foreach ($data as $card) : ?>
          <div class="section-porque-elegirnos__card">
            <figure class="section-porque-elegirnos__cardCircle ">
              <img src="<?php echo $card["iconCircle"] ?>" class="section-porque-elegirnos__cardCircle--1" alt="icono prestigio" />
            </figure>
            <div class="section-porque-elegirnos__infoCard ">
              <i class="<?php echo $card["iconCard"] ?> section-porque-elegirnos__icon section-porque-elegirnos__icon--1"></i>
              <h3 class="section-porque-elegirnos__subTitle section-porque-elegirnos__title--color"><?php echo $card["subtitle"]; ?></h3>
              <p class="section-porque-elegirnos__p"><?php echo $card["description"]; ?></p>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</section>