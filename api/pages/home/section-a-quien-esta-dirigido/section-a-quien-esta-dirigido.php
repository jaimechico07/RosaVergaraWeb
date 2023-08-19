<?php include_once("attributes.php"); ?>

<section class="section-a-quien-esta-dirigido">
  <figure class="section-a-quien-esta-dirigido__figure">
    <img class="section-a-quien-esta-dirigido__img" src="https://i.postimg.cc/Y9C9Fpcf/a-quien-esta-dirigido.png" alt="logo-a-quienes-esta-dirigido-mobile">
  </figure>

  <div class="section-a-quien-esta-dirigido__bg">
    <div class="section-a-quien-esta-dirigido__card">
      <h2 class="heading-secondary section-a-quien-esta-dirigido__title">¿A quién está dirigido?</h2>
      <ul class="section-a-quien-esta-dirigido__lista">
        <?php foreach ($data as $name) : ?>
          <li class="section-a-quien-esta-dirigido__item">
            <i class="fa-regular fa-circle-check section-a-quien-esta-dirigido__icon"></i>
            <p class="section-a-quien-esta-dirigido__p"><?php echo $name ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>