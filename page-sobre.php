<?php
// Template Name: Sobre
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

		<section class="missao_sobre container animar-interno">
			<div class="grid-10">
				<h2 class="subtitulo-interno"><?php the_field('subtitulo_interno1'); ?></h2>
				<p><?php the_field('texto_subtitulo_interno1'); ?></p>
			</div>
			<div class="grid-6">
				<h2 class="subtitulo-interno"><?php the_field('subtitulo_interno_2'); ?></h2>
				<ul>
					<li><?php the_field('texto_subtitulo_interno2'); ?></li>
				</ul>
			</div>

			<div class="grid-16 foto-equipe">
				<img src="<?php echo get_template_directory_uri(); ?>/img/equipe-bikcraft.jpg" alt="Equipe Bikcraft">
			</div>

		</section>

		<?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>

<?php endwhile;
else: endif; ?>

<?php get_footer(); ?>