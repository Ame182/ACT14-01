<?php
//Registro de estilos:

	function register_enqueue_style(){
		$theme_data = wp_get_theme();

	/* Registrando Stilos */
	wp_register_style('bootstrap', get_parent_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.css'), null, '1.0.0', 'screen');
	wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css', null, '1.0.0', 'screen');
	wp_register_style('bootstrap-min', get_parent_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.min.css'), null, '1.0.0', 'screen');
	wp_register_style('bootstrap-grid', get_parent_theme_file_uri('assets/vendor/bootstrap/css/bootstrap-grid.min.css'), null, '1.0.0', 'screen');
	wp_register_style('bootstrap-grid2', get_parent_theme_file_uri('assets/vendor/bootstrap/css/bootstrap-grid.css'), null , '1.0.0', 'screen');
	wp_register_style('main', get_parent_theme_file_uri('assets/css/portfolio-item.css'), null, '1.0.0', 'screen');


	/* Enqueue estilos */
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('bootstrap-min');
	wp_enqueue_style('bootstrap-grid');
	wp_enqueue_style('bootstrap-grid2');
	wp_enqueue_style('main');

	}

	add_action('wp_enqueue_scripts' , 'register_enqueue_style');


//Registro de scripts:

	function register_enqueue_scripts(){
		$theme_data = wp_get_theme();

	/* Deregister scripts*/
	wp_deregister_script('jquery');
	wp_deregister_script('jquery-migrate');


	/* Registrando Scripts */
	wp_register_script('jQuery3', get_parent_theme_file_uri('assets/vendor/jquery/jquery.min.js
		'), null, '3.2.1', true);
	wp_register_script('jquery_migrate', 'https://code.jquery.com/jquery-migrate-3.0.1.min.js', 'jQuery3', '3.0.1', 'screen');
	wp_register_script('bootstrap', get_parent_theme_file_uri ('assets/vendor/bootstrap/js/bootstrap.js'), array('jquery_migrate'), null, true);
	wp_register_script('mainJS', get_parent_theme_file_uri ('assets/js/scrypt.js'), array('jQuery3'), null, true);

	/* Enqueue scripts */
	wp_enqueue_script('jQuery3');
	wp_enqueue_script('jquery_migrate');
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('mainJS');

	}

	add_action('wp_enqueue_scripts' , 'register_enqueue_scripts');


//Logo Personalizado
	function config_custom_logo() {
		add_theme_support('custom-logo' , array(
			'height'	  => 100,
			'width'		  => 400,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array('site-title', 'site-description'),
		));
	}

	add_action('after_setup_theme', 'config_custom_logo');


//Tamaños personalizados

  function thumbnails_setup() {
    add_theme_support( 'post-thumbnails' );
  }

  function dl_image_sizes( $sizes ) {

    $add_sizes = array(
      'portfolio-home'		=> __( 'Tamaño de las imágenes del portafolio en el home' ),
      'square'				=> __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
      'post-custom-size'	=> __( 'Tamaño personalizado para la imagen destada de los post' ),
      'custom-size-blog'	=> __( 'Tamaño personalizado para la imagen destada de los post' )
    );

    return array_merge( $sizes, $add_sizes );

  }

  if ( function_exists( 'add_theme_support' ) ) {

    add_image_size( 'portfolio-home', 465, 250, true );
    add_image_size( 'square', 400, 400, true );
    add_image_size( 'post-custom-size', 800, 600, true );
    add_image_size( 'custom-size-blog', 400, 300, true );

    add_filter( 'image_size_names_choose', 'dl_image_sizes' );

  }

  add_action( 'after_setup_theme', 'thumbnails_setup' );

//Menus personalizados


	function menus_setup() {
		register_nav_menus(
			array(
				'header-menu'	=> __( 'Header Menu' ),
				'footer-menu'	=> __( 'Footer Menu' ),
			)
		);
	}

	add_action( 'after_setup_theme', 'menus_setup' );


// Register Custom Post Type
	

//Redirect



?>