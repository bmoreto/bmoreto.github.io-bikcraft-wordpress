<?php

//Função para registrar os scripts 
function bikcraft_scripts()
{
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/js/libs/jquery-1.11.2.min.js', array(), "1.11.2", true);
  wp_register_script('plugins-script', get_template_directory_uri() . '/js/plugins.js', array('jquery'), false, true);
  wp_register_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery', 'plugins-script'), false, true);
  wp_register_script('modernizr', get_template_directory_uri() . '/js/libs/modernizr.custom.45655.js', array(), 456655, true);


  wp_enqueue_script('main-script');
  wp_enqueue_script('modernizr');
}
add_action('wp_enqueue_scripts', 'bikcraft_scripts');

//Funão para registrar o css
function origamid_css()
{
  wp_register_style('origamid_style', get_template_directory_uri() . '/style.css', array(), false, false);
  wp_enqueue_style('origamid_style');
}
add_action('wp_enqueue_scripts', 'origamid_css');


// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

// Registrar o Menu
function register_my_menu()
{
  register_nav_menu('menu-principal', __('Menu Principal'));
}
add_action('init', 'register_my_menu');

//Tamanho de imagens
function my_custom_sizes()
{
  add_image_size('large', 1400, 380, true);
  add_image_size('medium', 768, 380, true);
}
add_action('after_setup_theme', 'my_custom_sizes');


//Custom Post Types
function custom_post_type_produtos()
{
  register_post_type('produtos', array(
    'label' => 'Produtos',
    'description' => 'Produtos',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'produtos', 'with_front' => true),
    'query_var' => true,
    'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),

    'labels' => array(
      'name' => 'Produtos',
      'singular_name' => 'Produto',
      'menu_name' => 'Produtos',
      'add_new' => 'Adicionar Novo',
      'add_new_item' => 'Adicionar Novo Produto',
      'edit' => 'Editar',
      'edit_item' => 'Editar Produto',
      'new_item' => 'Novo Produto',
      'view' => 'Ver Produto',
      'view_item' => 'Ver Produto',
      'search_items' => 'Procurar Produtos',
      'not_found' => 'Nenhum Produto Encontrado',
      'not_found_in_trash' => 'Nenhum Produto Encontrado no Lixo',
    )
  ));
}
add_action('init', 'custom_post_type_produtos');
