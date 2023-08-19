<?php
include_once("attributes.php");
?>

<section class="section-servicios">
  <div class="section-servicios__contTitle">
    <h2 class="section-servicios__title ">Servicios</h2>
  </div>
  <div class="section-servicios__contentImages ">
    <?php foreach ($data as $data) : ?>
      <div class="section-servicios__figureCont">
        <figure>
          <img class="section-servicios__imgDesktop" src="<?php echo $data["imageDesktop"]; ?>" alt="<?php echo $data["alt"]; ?>">
        </figure>

        <figure>
          <img class="section-servicios__imgMobile" src="<?php echo $data["imageMobile"]; ?>" alt="<?php echo $data["alt"]; ?>">
        </figure>
        
        <p class="section-servicios__subtitle"><?php echo $data["subtitle"]; ?></p>
        <a href=<?php echo $data["link"]; ?> class="section-servicios__arrow">
        <i class="<?php echo $data["iconArrow"]; ?>"></i>
      </a>

        <div class="section-servicios__capa">
          <p class="section-servicios__subtitle"><?php echo $data["subtitle"]; ?></p>

          <figure>
            <img class="section-servicios__imgDesktop" src="<?php echo $data["imageDifuminado"]; ?>" alt="<?php echo $data["alt"]; ?>">
          </figure>

          <a class="section-servicios__showArrow" href=<?php echo $data["link"]; ?>>
            <?php echo $data["boton"] ?>
            <i class="<?php echo $data["iconArrow"]; ?> text-white text-3xl"></i>
          </a>
        </div>

      </div>
    <?php endforeach ?>
  </div>

</section>