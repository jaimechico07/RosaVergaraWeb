<?php include_once("attibutes.php")?>
<section class="section-clases">
  <div class="grid lg:grid-cols-2 gap-5">
    <!-- Primera card -->
    <div class="section-clases__card">
      <?php
      foreach ($queAprenderas as $data) {
      ?>
        <div class="flex flex-col gap-7">
          <h2 class="heading-secondary section-clases__title">
            <!-- Titulo -->
            <?php echo $data["title"] ?>
          </h2>
          <!-- Descripción -->
          <p class="text-white max-w-[273px] xl:w-[379px] xl:max-w-[initial] mx-auto"><?php echo $data["des"] ?></p>
        </div>
        <div class="flex flex-col gap-4 max-w-[273px] xl:w-[379px] xl:max-w-[initial] mx-auto">
          <?php foreach ($data["plus"] as $plus) { ?>
            <div class="text-white flex gap-4">
              <div class="border-[2px] border-primary-700 w-6 h-6 rounded-full text-primary-700 grid place-items-center flex-none">
                <?php echo $plus["icon"] ?>
              </div>
              <p><?php echo $plus["des"] ?></p>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
      <div class="section-clases__deco"></div>
    </div>

    <!-- Segunda card -->
    <div class="section-clases__card lg:row-span-2">
      <?php foreach ($beneficiosTemarios as $data) {
      ?>
        <!-- Beneficios del Curso -->
        <div class="flex flex-col gap-7 md:gap-20 text-white">
          <h2 class="heading-secondary section-clases__title"><?php echo $data["beneficios"] ?></h2>
          <div class="flex flex-col gap-4 max-w-[273px] xl:w-[379px] xl:max-w-[initial] mx-auto">
            <?php foreach ($data["itemBeneficios"] as $item) { ?>
              <div class="flex gap-4 items-center">
                <?php echo $item["icon"] ?>
                <p><?php echo $item["des"] ?></p>
              </div>
            <?php } ?>
          </div>
        </div>
        <!--Cierra Beneficios del Curso -->

        <!-- Temario -->
        <div class="flex flex-col gap-7 text-white">
          <h2 class="heading-secondary section-clases__title"><?php echo $data["temario"] ?></h2>
          <div class="flex flex-col gap-4 max-w-[273px] xl:w-[379px] xl:max-w-[initial] mx-auto">
            <?php foreach ($data["itemTemario"] as $item) { ?>
              <div class="flex gap-4 items-center ">
                <?php echo $item["icon"] ?>
                <p><?php echo $item["des"] ?></p>
              </div>
            <?php } ?>
          </div>
        </div>
        <!--Cierra Temario -->

      <?php } ?>
      <a href="#" class="btn btn--primary text-center leading-[2.7]">Cotiza aquí</a>
      <div class="section-clases__deco"></div>
    </div>
    <!-- Tercera card -->
    <div class="section-clases__card">
      <div class="flex flex-col gap-7">
        <h2 class="heading-secondary text-white">
          Medios de Pago
        </h2>
        <figure class="self-center">
          <img src="../../../img/BBVA.svg" alt="BBVA">
        </figure>
      </div>

      <div class="flex flex-col gap-4 max-w-[273px] xl:w-[379px] xl:max-w-[initial] mx-auto">
        <div class="flex gap-4">
          <div class="text-[#19BD29] text-xl">
            <i class="fa-regular fa-circle-check"></i>
          </div>
          <p class="text-white">Cuenta de Ahorros <br>
            0011-0814-0220187794</p>
        </div>
        <div class="flex gap-4">
          <div class="text-[#19BD29] text-xl">
            <i class="fa-regular fa-circle-check"></i>
          </div>
          <p class="text-white">Código de cuenta Interbancario <br>
            011-814-000220187794-17</p>
        </div>
        <!-- Imagen -->
        <figure class="self-center">
          <img src="../../../img/scotiabank.svg" alt="Scotiabank">
        </figure>
        <div class="flex gap-4">
          <div class="text-[#19BD29] text-xl">
            <i class="fa-regular fa-circle-check"></i>
          </div>
          <p class="text-white">Cuenta de Ahorros <br>
            04905973744</p>
        </div>
        <div class="flex gap-4">
          <div class="text-[#19BD29] text-xl">
            <i class="fa-regular fa-circle-check"></i>
          </div>
          <p class="text-white">Código de cuenta Interbancario <br>
            00909820049059737459</p>
        </div>
      </div>
    </div>
  </div>
</section>