<?php
// Template Name:Single Produtos
?>

<?php $contato = get_page_by_title('contato'); ?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="container produto_item animar-interno">

			<div class="grid-11">
				<img src="<?php the_field('foto_produto1'); ?>" alt="Bikcraft <?php the_title(); ?>">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="grid-5 produto_icone"><img src="<?php the_field('icone_produto'); ?>" alt="Icone Passeio"></div>
			<div class="grid-8"><img src="<?php the_field('foto_produto2'); ?>" alt="Bikcraft Passeio"></div>
			<div class="grid-8 produto_info">
				<?php the_content(); ?>
			</div>

		</section>

		<?php include(TEMPLATEPATH . "/inc/produtos-orcamento.php"); ?>
		</section>

<?php endwhile;
else: endif; ?>

<?php get_footer(); ?>