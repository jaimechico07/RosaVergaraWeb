<?php include_once(__DIR__ . "/../../components/head.php") ?>
<?php include_once(__DIR__ . "/attributes.php"); ?>

<body>
  <?php include_once(__DIR__ . "/../../components/header.php");
  echo headerEl("la-escuela"); ?>

  <main>
    <section class="section-escuela">
      <div class="section-escuela__container">
        <div class="section-escuela__decorator"></div>
        <div class="section-escuela__container-swiper relative">
          <div class="section-escuela__circle"></div>
          <h2 class="section-escuela__title">La Escuela de Maquillaje Profesional</h2>
          <div class="swiper swiper--escuela">
            <div class="swiper-wrapper">
              <?php
              foreach ($attrbutes as $e) :
              ?>
                <div class="swiper-slide flex items-center">
                  <img class="section-escuela__img" src="<?php echo $e['img']; ?>" alt="<?php echo $e['alt']; ?>">
                </div>
              <?php
              endforeach
              ?>
            </div>
            <div class="swiper-pagination section-escuela__pagination"></div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php
  include_once(__DIR__ . "/../../components/footer.php");
  echo footerEl("la-escuela");
  ?>

  <?php include_once(__DIR__ . "/../../components/script-swiper.php") ?>
</body>

</html>