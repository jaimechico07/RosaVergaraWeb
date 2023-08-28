<?php include_once(__DIR__ . "/../../components/head.php") ?>

<body>
  <?php include_once(__DIR__ . "/../../components/header.php");
  echo headerEl("nosotros"); ?>

  <main>
    <?php
    include_once("section-hero-nosotros/setion-hero-nosotros.php");
    include_once("section-valores-marca/section-valores-marca.php");
    ?>
  </main>

  <?php include_once(__DIR__ . "/../../components/footer.php");
  echo footerEl("nosotros"); ?>
</body>

</html>