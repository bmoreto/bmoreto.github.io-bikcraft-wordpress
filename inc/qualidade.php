<?php $sobre = get_page_by_title('sobre'); ?>

<section class="qualidade container">
  <h2 class="subtitulo"><?php the_field('titulo_qualidade'); ?></h2>
  <img src="<?php the_field('logo_bikcraft'); ?>" alt="Bikcraft">
  <ul class="qualidade_lista">
    <li class="grid-1-3">
      <h3>Durabilidade</h3>
      <p>Sólida como pedra, leve como o vento e resistente como o diamante, são nossos diferenciais.</p>
    </li>
    <li class="grid-1-3">
      <h3>Design</h3>
      <p>Feitas sob medida para o melhor conforto e eficiência. Adaptamos a sua Bikcraft para o seu corpo.</p>
    </li>
    <li class="grid-1-3">
      <h3>Sustentabilidade</h3>
      <p>Além de ajudar a cuidar do meio ambiente, tirando carros da rua, toda a produção é sustentável.</p>
    </li>
  </ul>

  <?php
  if (!is_page('sobre')) :
  ?>
    <div class="call">
      <p><?php the_field('chamada_sobre'); ?></p>
      <a href="/sobre" class="btn btn-preto">Sobre</a>
    </div>
  <?php
  endif;
  ?>

</section>