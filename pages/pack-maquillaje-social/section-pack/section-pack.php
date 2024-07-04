<?php include_once("attributes.php")?>
<section class="section-pack md:bg-[url(https://i.postimg.cc/1zbyhVSH/maquillaje-Social.png)]">
  <figure>
    <img class="w-full md:hidden" src="https://i.postimg.cc/6pj9c11F/maquillaje-Social-Mobile.png" alt="Maquillaje">
  </figure>
  <div class="container md:flex md:justify-end  md:pt-[12rem] pb-[7rem]">
    <?php foreach($quincianieros as $data) { ?>
      <div class="section-pack__card">
         <!-- Titulo Servicios -->
        <div class="py-1 w-[85%] bg-primary-gray-200  rounded-full absolute top-0 left-1/2 translate-x-[-50%] 
        translate-y-[-50%]">
          <h2 class="section-pack__title"><?php echo $data["title"]?></h2>
        </div>
        <!-- Packs Quinceañeros -->
        <div class="flex flex-col gap-7">
          <h2 class="section-pack__title-pack"><?php echo $data["packsTitle"]?></h2>
          <p class="text-center text-white max-w-[351px] mx-auto"><?php echo $data["des"]?></p>
        </div>

        <!-- Servicio Completo para Quinceañeras: -->
        <div class="flex flex-col gap-7 max-w-[361px] mx-auto">
          <h2 class="section-pack__title-completo text-left"><?php echo $data["servicioCompletoTitle"]?></h2>
          <?php foreach($data["itemServicioCompleto"] as $item) { ?>
          <div class="flex gap-4 items-center text-white">
          <?php echo $item["icon"]?>
            <p><?php echo $item["des"]?></p>
          </div>
          <?php } ?>
        </div>

        <!-- Enlaces -->
        <div class="flex flex-col gap-3">
          <a href="#" class="btn btn--cotiza leading-[2.5] text-center">Cotiza aquí</a>
          <a href="#" class="btn btn--primary-outline leading-[2.5]">Ver más packs</a>
        </div>
      </div>
    <?php } ?>
  </div>
</section>