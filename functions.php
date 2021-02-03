<?php 

// Быстрее чем @import
// add_action( 'wp_enqueue_scripts', 'my_child_theme_style' );
// function my_child_theme_style() {
// 	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// }

//==========================================================================================
//		====================	ЧИСТОВИК	=======================================

// Создаю типы постов 
add_action( 'init', 'register_post_type_Films' ); // Использовать Фильм только внутри хука init
function register_post_type_Films(){
	$labels_Films = array(
		'name' => 'Films',
		'singular_name' => 'Film', // админ панель Добавить->Фильм
		'add_new' => 'Добавить запись типа Film',
		'add_new_item' => 'add_new_item', // заголовок тега <title>
		'edit_item' => 'Редактировать FILMS',
		'new_item' => 'Текст новой записи',
		'all_items' => 'Все записи типа Фильмы',
		'view_item' => 'Для просмотра записи этого типа',
		'search_items' => 'Для поиска по этим типам записи',
		'not_found' =>  'Нет записей типа Films',
		'capability_type' => 'post',
		'not_found_in_trash' => 'Если не было найдено в корзине',
		'menu_name' => 'ФИЛЬМЫ' // Название пункта меню в админке
	);
	$args_Films = array(
		'labels' => $labels_Films,
		'public' => true,
		'show_in_menu' => true, // показывать интерфейс в админке
		// 'has_archive' => true, 
		// 'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
		'menu_position' => 4, // порядок в меню
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail'),
		'taxonomies' => [
				"ProductionYear",
				"Country",
				"Genre",
				"Actors",
				"Producer",
				"Scenario",
				"Director"
			]
	);

	$labels_Posters = array(
		'name' => 'Posters',
		'singular_name' => 'Poster', // админ панель Добавить->Фильм
		'add_new' => 'Добавить запись типа Poster',
		'add_new_item' => 'add_new_item', // заголовок тега <title>
		'edit_item' => 'Редактировать PosterS',
		'new_item' => 'Текст новой записи',
		'all_items' => 'Все записи типа Posters',
		'view_item' => 'Для просмотра записи этого типа',
		'search_items' => 'Для поиска по этим типам записи',
		'not_found' =>  'Нет записей типа Posters',
		'not_found_in_trash' => 'Если не было найдено в корзине',
		'menu_name' => 'ПОСТЕРЫ' // Название пункта меню в админке
	);
	$args_Posters = array(
		'labels' => $labels_Posters,
		'public' => true,
		'show_in_menu' => true, // показывать интерфейс в админке
		// 'has_archive' => true, 
		// 'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
		'menu_position' => 5, // порядок в меню
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
	);

	$labels_Acters = array(
		'name' => 'Acters',
		'singular_name' => 'Acters', // админ панель Добавить->Фильм
		'add_new' => 'Добавить запись типа Acters',
		'add_new_item' => 'add_new_item', // заголовок тега <title>
		'edit_item' => 'Редактировать PosterS',
		'new_item' => 'Текст новой записи',
		'all_items' => 'Все записи типа Acters',
		'view_item' => 'Для просмотра записи этого типа',
		'search_items' => 'Для поиска по этим типам записи',
		'not_found' =>  'Нет записей типа Acters',
		'not_found_in_trash' => 'Если не было найдено в корзине',
		'menu_name' => 'АКТЁРЫ' // Название пункта меню в админке
	);
	$args_Acters = array(
		'labels' => $labels_Acters,
		'public' => true,
		'show_in_menu' => true, // показывать интерфейс в админке
		// 'has_archive' => true, 
		// 'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
		'menu_position' => 6, // порядок в меню
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
	);

	$labels_Announcement = array(
		'name' => 'Announcement',
		'singular_name' => 'Announcement', // админ панель Добавить->Фильм
		'add_new' => 'Добавить запись типа Announcement',
		'add_new_item' => 'add_new_item', // заголовок тега <title>
		'edit_item' => 'Редактировать PosterS',
		'new_item' => 'Текст новой записи',
		'all_items' => 'Все записи типа Announcement',
		'view_item' => 'Для просмотра записи этого типа',
		'search_items' => 'Для поиска по этим типам записи',
		'not_found' =>  'Нет записей типа Announcement',
		'not_found_in_trash' => 'Если не было найдено в корзине',
		'menu_name' => 'АНОННСЫ' // Название пункта меню в админке
	);
	$args_Announcement = array(
		'labels' => $labels_Announcement,
		'public' => true,
		'show_in_menu' => true, // показывать интерфейс в админке
		// 'has_archive' => true, 
		// 'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
		'menu_position' => 7, // порядок в меню
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
	);

	$labels_News = array(
		'name' => 'News',
		'singular_name' => 'News', // админ панель Добавить->Фильм
		'add_new' => 'Добавить запись типа News',
		'add_new_item' => 'add_new_item', // заголовок тега <title>
		'edit_item' => 'Редактировать News',
		'new_item' => 'Текст новой записи',
		'all_items' => 'Все записи типа News',
		'view_item' => 'Для просмотра записи этого типа',
		'search_items' => 'Для поиска по этим типам записи',
		'not_found' =>  'Нет записей типа News',
		'not_found_in_trash' => 'Если не было найдено в корзине',
		'menu_name' => 'НОВОСТИ' // Название пункта меню в админке
	);
	$args_News = array(
		'labels' => $labels_News,
		'public' => true,
		'show_in_menu' => true, // показывать интерфейс в админке
		// 'has_archive' => true, 
		// 'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
		'menu_position' => 8, // порядок в меню
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
	);


	register_post_type('films', $args_Films);
	register_post_type('posters', $args_Posters);
	register_post_type('acters', $args_Acters);
	register_post_type('announcement', $args_Announcement);
	register_post_type('news', $args_News);
}

// Устанавливаю файл шаблона страницы 
add_filter('template_include', 'template_type_posts');
function template_type_posts( $template ) {
	global $post;

	# шаблон для записи по типу
	if( $post->post_type == 'films' and !is_tax()){
		$path_tpl_file = get_stylesheet_directory() . '/template-pages/films-tpl.php';
		// проверяю существование файла шаблона
		if(file_exists($path_tpl_file)) {
			return $path_tpl_file;
		}
	}

		if( $post->post_type == 'posters' and !is_tax()){
			$path_tpl_file = get_stylesheet_directory() . '/template-pages/posters-tpl.php';
			// проверяю существование файла шаблона
			if(file_exists($path_tpl_file)) {
				return $path_tpl_file;
			}
		}

		if( $post->post_type == 'acters' and !is_tax()){
			$path_tpl_file = get_stylesheet_directory() . '/template-pages/acters-tpl.php';
			// проверяю существование файла шаблона
			if(file_exists($path_tpl_file)) {
				return $path_tpl_file;
			}
		}

		if( $post->post_type == 'announcement' and !is_tax()){
			$path_tpl_file = get_stylesheet_directory() . '/template-pages/announcement-tpl.php';
			// проверяю существование файла шаблона
			if(file_exists($path_tpl_file)) {
				return $path_tpl_file;
			}
		}

		if( $post->post_type == 'news' and !is_tax()){
			$path_tpl_file = get_stylesheet_directory() . '/template-pages/news-tpl.php';
			// проверяю существование файла шаблона
			if(file_exists($path_tpl_file)) {
				return $path_tpl_file;
			}
		}

		if( is_search('serch')){
			$path_tpl_file = get_stylesheet_directory() . '/template-pages/serch-tpl.php';
			// проверяю существование файла шаблона
			if(file_exists($path_tpl_file)) {
				return $path_tpl_file;
			}
		}

		if( is_front_page()){
			$path_tpl_file = get_stylesheet_directory() . '/template-pages/page-tpl.php';
			// проверяю существование файла шаблона
			if(file_exists($path_tpl_file)) {
				return $path_tpl_file;
			}
		}

		if( is_tax()){
			$path_tpl_file = get_stylesheet_directory() . '/template-pages/taxonomy-tpl.php';
			// проверяю существование файла шаблона
			if(file_exists($path_tpl_file)) {
				return $path_tpl_file;
			}
		}
		

	return $template;
}

// регистрация сайдбаров
add_action( 'widgets_init', 'register_sidebars_addPF' );
function register_sidebars_addPF(){

	$parameters_left_sidebar = array(
		'id' => 'left_sidebar',
		'name' => 'left-sidebar',
		'description' => 'Данный сайдбар позволит добавить что-либо в левую колонку сайта.',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
		);

	$parameters_right_sidebar = array(
		'id' => 'right_sidebar',
		'name' => 'right-sidebar',
		'description' => 'Данный сайдбар позволит добавить что-либо в правую колонку сайта.',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
		);
	register_sidebar($parameters_left_sidebar);
	register_sidebar($parameters_right_sidebar);
}

//	добавление таксономий
	/* Список аксономий:
			"ProductionYear"
			"Country"
			"Genre"
			"Actors"
			"Producer"
			"Scenario"
			"Director"
	*/
add_action( 'init', 'register_taxonomy_Genre' );
function register_taxonomy_Genre(){
	    $labels = array(
	            'name'                       => 'Жанры',
	            'singular_name'              => _x( 'Жанр', 'taxonomy singular name' ),
	            'menu_name'                  => 'Жанры' ,	// То как будет отображаться название таксономии в меню админ панели
	            'all_items'                  => 'Все жанры',
	            'edit_item'                  => __( 'Редактировать жанр' ),
	            'view_item'                  => 'Посмотреть жанр',
	            'update_item'                => 'Сохранить жанр',
	            'add_new_item'               => 'Добавить новый жанр',
	            'new_item_name'              => 'Новый жанр',          
	            'parent_item'                => 'Родительский жанр',
	            'parent_item_colon'          => 'Родительская жанр:',
	            'search_items'               => 'Поиск по жанрам',
	            'popular_items'              => 'Популярные жанры',
	            'separate_items_with_commas' => 'Список жанров (разделяются запятыми)',
	            'add_or_remove_items'        => 'Добавить или удалить жанр',
	            'choose_from_most_used'      => 'Выбрать жанр',
	            'not_found'                  => 'Жанров не найдено',
	            'back_to_items'              => 'Назад на страницу рубрик',
	    		);
	    $args = array(
	        'label'                 => '',
	        'description'           => 'Жанр фильмов: ',
	        'hierarchical'          => true,
	        'labels'                => $labels,
	        'public'                => true,
	        'show_ui'               => true,
	        'show_in_menu'          => true,
	        'show_in_nav_menus'     => true,
	        'show_tagcloud'         => true,
	        'show_in_rest'          => true,
	        'rest_base'             => null,
	        'rest_controller_class' => 'WP_REST_Terms_Controller',
	        'update_count_callback' => '',
	        'rewrite'               => true,
	        'publicly_queryable'    => true,
	        'show_in_quick_edit'    => true,
	        'meta_box_cb'           => null,
	        'show_admin_column'     => true,
	        // 'query_var'             => $taxonomy, 
	        'query_var'             => true,      
	        'sort'                  => true,
	        '_builtin'              => false,
	    	);
		register_taxonomy('Genre', array('films','posters'), $args);
}

add_action( 'init', 'register_taxonomy_ProductionYear',0 );
function register_taxonomy_ProductionYear(){
	    $labels = array(
	            'name'                       => 'Год выпуска',
	            'singular_name'              => _x( 'Год выпуска', 'taxonomy singular name' ),
	            'menu_name'                  => 'Год выпуска' ,	// То как будет отображаться название таксономии в меню админ панели
	            'all_items'                  => 'Все годы выпуска',
	            'edit_item'                  => __( 'Редактировать год выпуска' ),
	            'view_item'                  => 'Посмотреть год выпуска',
	            'update_item'                => 'Сохранить жанр год выпуска',
	            'add_new_item'               => 'Добавить новый год выпуска',
	            'new_item_name'              => 'Новый год выпуска',          
	            'parent_item'                => 'Родительский год выпуска',
	            'parent_item_colon'          => 'Родительский год выпуска:',
	            'search_items'               => 'Поиск по году выпуска',
	            'popular_items'              => 'Популярные года выпуска',
	            'separate_items_with_commas' => 'Список годов выпуска (разделяются запятыми)',
	            'add_or_remove_items'        => 'Добавить или удалить год выпуска',
	            'choose_from_most_used'      => 'Выбрать год выпуска',
	            'not_found'                  => 'Годов выпуска не найдено',
	            'back_to_items'              => 'Назад на страницу рубрик',
	    		);
	    $args = array(
	        'label'                 => '',
	        'description'           => 'Год производства фильмов: ',
	        'hierarchical'          => false,
	        'labels'                => $labels,
	        'public'                => true,
	        'show_ui'               => true,
	        'show_in_menu'          => true,
	        'show_in_nav_menus'     => true,
	        'show_tagcloud'         => true,
	        'show_in_rest'          => true,
	        'rest_base'             => null,
	        'rest_controller_class' => 'WP_REST_Terms_Controller',
	        'update_count_callback' => '',
	        'rewrite'               => true,
	        'publicly_queryable'    => true,
	        'show_in_quick_edit'    => true,
	        'meta_box_cb'           => null,
	        'show_admin_column'     => true,
	        // 'query_var'             => $taxonomy,       
	        'query_var'             => true,       
	        'sort'                  => true,
	        '_builtin'              => false,
	    	);
		register_taxonomy('ProductionYear', array('films','posters'), $args);
}

add_action( 'init', 'register_taxonomy_Country' );
function register_taxonomy_Country(){
	    $labels = array(
	            'name'                       => 'Страна производитель',
	            'singular_name'              => _x( 'Страна производитель', 'taxonomy singular name' ),
	            'menu_name'                  => 'Страны производители' ,	// То как будет отображаться название таксономии в меню админ панели
	            'all_items'                  => 'Все страны производители',
	            'edit_item'                  => __( 'Редактировать страна производитель' ),
	            'view_item'                  => 'Посмотреть страна производитель',
	            'update_item'                => 'Сохранить страна производитель',
	            'add_new_item'               => 'Добавить новый страна производитель',
	            'new_item_name'              => 'Новая страна производитель',          
	            'parent_item'                => 'Родительская страна производитель',
	            'parent_item_colon'          => 'Родительская страна производитель:',
	            'search_items'               => 'Поиск по странам производителям',
	            'popular_items'              => 'Популярные страны производители',
	            'separate_items_with_commas' => 'Список стран производителей (разделяются запятыми)',
	            'add_or_remove_items'        => 'Добавить или удалить страну производителя',
	            'choose_from_most_used'      => 'Выбрать страну производителя',
	            'not_found'                  => 'Страны производителя не найдено',
	            'back_to_items'              => 'Назад на страницу рубрик',
	    		);
	    $args = array(
	        'label'                 => '',
	        'description'           => 'Страна производства фильмов:  ',
	        'hierarchical'          => true,
	        'labels'                => $labels,
	        'public'                => true,
	        'show_ui'               => true,
	        'show_in_menu'          => true,
	        'show_in_nav_menus'     => true,
	        'show_tagcloud'         => true,
	        'show_in_rest'          => true,
	        'rest_base'             => null,
	        'rest_controller_class' => 'WP_REST_Terms_Controller',
	        'update_count_callback' => '',
	        'rewrite'               => true,
	        'publicly_queryable'    => true,
	        'show_in_quick_edit'    => true,
	        'meta_box_cb'           => null,
	        'show_admin_column'     => true,
	        // 'query_var'             => $taxonomy,  
	        'query_var'             => true,     
	        'sort'                  => true,
	        '_builtin'              => false,
	    	);
		register_taxonomy('Country', array('films','posters'), $args);
}

add_action( 'init', 'register_taxonomy_Actors' );
function register_taxonomy_Actors(){
	    $labels = array(
	            'name'                       => 'Актёры',
	            'singular_name'              => _x( 'Актёры', 'taxonomy singular name' ),
	            'menu_name'                  => 'Актёры' ,	// То как будет отображаться название таксономии в меню админ панели
	            'all_items'                  => 'Все Актёры',
	            'edit_item'                  => __( 'Редактировать актёра' ),
	            'view_item'                  => 'Посмотреть актёра',
	            'update_item'                => 'Сохранить актёра',
	            'add_new_item'               => 'Добавить новый актёра',
	            'new_item_name'              => 'Новый актёр',          
	            'parent_item'                => 'Родительский актёр',
	            'parent_item_colon'          => 'Родительский актёр:',
	            'search_items'               => 'Поиск по актёрам',
	            'popular_items'              => 'Популярные актёры',
	            'separate_items_with_commas' => 'Список актёров (разделяются запятыми)',
	            'add_or_remove_items'        => 'Добавить или удалить актёра',
	            'choose_from_most_used'      => 'Выбрать актёра',
	            'not_found'                  => 'Актёров не найдено',
	            'back_to_items'              => 'Назад на страницу рубрик',
	    		);
	    $args = array(
	        'label'                 => '',
	        'description'           => 'Фильмы с участием актёра:  ',
	        'hierarchical'          => true,
	        'labels'                => $labels,
	        'public'                => true,
	        'show_ui'               => true,
	        'show_in_menu'          => true,
	        'show_in_nav_menus'     => true,
	        'show_tagcloud'         => true,
	        'show_in_rest'          => true,
	        'rest_base'             => null,
	        'rest_controller_class' => 'WP_REST_Terms_Controller',
	        'update_count_callback' => '',
	        'rewrite'               => true,
	        'publicly_queryable'    => true,
	        'show_in_quick_edit'    => true,
	        'meta_box_cb'           => null,
	        'show_admin_column'     => true,
	        // 'query_var'             => $taxonomy, 
	        'query_var'             => true,      
	        'sort'                  => true,
	        '_builtin'              => false,
	    	);
		register_taxonomy('Actors', array('films','posters'), $args);
}

add_action( 'init', 'register_taxonomy_Producer' );
function register_taxonomy_Producer(){
	    $labels = array(
	            'name'                       => 'Режиссеры',
	            'singular_name'              => _x( 'Режиссеры', 'taxonomy singular name' ),
	            'menu_name'                  => 'Режиссеры' ,	// То как будет отображаться название таксономии в меню админ панели
	            'all_items'                  => 'Все режиссеры',
	            'edit_item'                  => __( 'Редактировать режиссера' ),
	            'view_item'                  => 'Посмотреть режиссера',
	            'update_item'                => 'Сохранить режиссера',
	            'add_new_item'               => 'Добавить нового режиссера',
	            'new_item_name'              => 'Новый режиссер',          
	            'parent_item'                => 'Родительский режиссер',
	            'parent_item_colon'          => 'Родительская режиссер:',
	            'search_items'               => 'Поиск по режиссерам',
	            'popular_items'              => 'Популярные режиссеры',
	            'separate_items_with_commas' => 'Список режиссеров (разделяются запятыми)',
	            'add_or_remove_items'        => 'Добавить или удалить режиссера',
	            'choose_from_most_used'      => 'Выбрать режиссера',
	            'not_found'                  => 'Режиссеров не найдено',
	            'back_to_items'              => 'Назад на страницу рубрик',
	    		);
	    $args = array(
	        'label'                 => '',
	        'description'           => 'Режисёр фильмов   ',
	        'hierarchical'          => true,
	        'labels'                => $labels,
	        'public'                => true,
	        'show_ui'               => true,
	        'show_in_menu'          => true,
	        'show_in_nav_menus'     => true,
	        'show_tagcloud'         => true,
	        'show_in_rest'          => true,
	        'rest_base'             => null,
	        'rest_controller_class' => 'WP_REST_Terms_Controller',
	        'update_count_callback' => '',
	        'rewrite'               => true,
	        'publicly_queryable'    => true,
	        'show_in_quick_edit'    => true,
	        'meta_box_cb'           => null,
	        'show_admin_column'     => true,
	        // 'query_var'             => $taxonomy,
	        'query_var'             => true,       
	        'sort'                  => true,
	        '_builtin'              => false,
	    	);
		register_taxonomy('Producer', array('films','posters'), $args);
}

add_action( 'init', 'register_taxonomy_Scenario' );
function register_taxonomy_Scenario(){
	    $labels = array(
	            'name'                       => 'Сценаристы',
	            'singular_name'              => _x( 'Сценаристы', 'taxonomy singular name' ),
	            'menu_name'                  => 'Сценаристы' ,	// То как будет отображаться название таксономии в меню админ панели
	            'all_items'                  => 'Все сценаристы',
	            'edit_item'                  => __( 'Редактировать сценариста' ),
	            'view_item'                  => 'Посмотреть сценариста',
	            'update_item'                => 'Сохранить сценариста',
	            'add_new_item'               => 'Добавить нового сценариста',
	            'new_item_name'              => 'Новый сценарист',          
	            'parent_item'                => 'Родительский сценарист',
	            'parent_item_colon'          => 'Родительская сценарист:',
	            'search_items'               => 'Поиск по сценаристам',
	            'popular_items'              => 'Популярные сценаристы',
	            'separate_items_with_commas' => 'Список сценаристов (разделяются запятыми)',
	            'add_or_remove_items'        => 'Добавить или удалить сценариста',
	            'choose_from_most_used'      => 'Выбрать сценариста',
	            'not_found'                  => 'Сценариста не найдено',
	            'back_to_items'              => 'Назад на страницу рубрик',
	    		);
	    $args = array(
	        'label'                 => '',
	        'description'           => 'Фильмы сценариста  ',
	        'hierarchical'          => true,
	        'labels'                => $labels,
	        'public'                => true,
	        'show_ui'               => true,
	        'show_in_menu'          => true,
	        'show_in_nav_menus'     => true,
	        'show_tagcloud'         => true,
	        'show_in_rest'          => true,
	        'rest_base'             => null,
	        'rest_controller_class' => 'WP_REST_Terms_Controller',
	        'update_count_callback' => '',
	        'rewrite'               => true,
	        'publicly_queryable'    => true,
	        'show_in_quick_edit'    => true,
	        'meta_box_cb'           => null,
	        'show_admin_column'     => true,
	        // 'query_var'             => $taxonomy,       
	        'query_var'             => true,
	        'sort'                  => true,
	        '_builtin'              => false,
	    	);
		register_taxonomy('Scenario', array('films','posters'), $args);
}

add_action( 'init', 'register_taxonomy_Director' );
function register_taxonomy_Director(){
	    $labels = array(
	            'name'                       => 'Директора',
	            'singular_name'              => _x( 'Директора', 'taxonomy singular name' ),
	            'menu_name'                  => 'Директора' ,	// То как будет отображаться название таксономии в меню админ панели
	            'all_items'                  => 'Все директора',
	            'edit_item'                  => __( 'Редактировать директора' ),
	            'view_item'                  => 'Посмотреть директора',
	            'update_item'                => 'Сохранить директора',
	            'add_new_item'               => 'Добавить нового директора',
	            'new_item_name'              => 'Новый директор',          
	            'parent_item'                => 'Родительский директор',
	            'parent_item_colon'          => 'Родительский директор:',
	            'search_items'               => 'Поиск по директорам',
	            'popular_items'              => 'Популярные директора',
	            'separate_items_with_commas' => 'Список директоров (разделяются запятыми)',
	            'add_or_remove_items'        => 'Добавить или удалить директора',
	            'choose_from_most_used'      => 'Выбрать директора',
	            'not_found'                  => 'Директора не найдено',
	            'back_to_items'              => 'Назад на страницу рубрик',
	    		);
	    $args = array(
	        'label'                 => '',
	        'description'           => 'Фильмы директора  ',
	        'hierarchical'          => true,
	        'labels'                => $labels,
	        'public'                => true,
	        'show_ui'               => true,
	        'show_in_menu'          => true,
	        'show_in_nav_menus'     => true,
	        'show_tagcloud'         => true,
	        'show_in_rest'          => true,
	        'rest_base'             => null,
	        'rest_controller_class' => 'WP_REST_Terms_Controller',
	        'update_count_callback' => '',
	        'rewrite'               => true,
	        'publicly_queryable'    => true,
	        'show_in_quick_edit'    => true,
	        'meta_box_cb'           => null,
	        'show_admin_column'     => true,
	        // 'query_var'             => $taxonomy, 
	        'query_var'             => true,      
	        'sort'                  => true,
	        '_builtin'              => false,
	    	);
		register_taxonomy('Director', array('films','posters'), $args);
}

// подключаю файлы стилей для разных страниц. Чем больше отдельных файлов стилей тем медленее загружаеться файл
add_action( 'wp_enqueue_scripts', 'add_file_style');
function add_file_style() {
	if( is_front_page() or is_tax()){	
		wp_enqueue_style('style-page', get_stylesheet_directory_uri().'/styles/style-page.css');
	}
}

// выбор картинки поста на главную страницу
function get_rnd_img_post($post){
	/*
		получает объект post
		возвращает:
			если у поста нет картинки false
			если у поста одна картинка ссылку на эту картинку
			если у поста несколько картинок ссылку на случайную
	*/

	$arr_media = get_attached_media('image',$post->ID);
	$num_img = 0;
	foreach ($arr_media as $id_attach => $arr_date_attach) { 
		$num_img++;
		if (count($arr_media) == 0) {
			$result_str = false;
			break;
		}elseif (count($arr_media) == 1) {
			// echo('<img src="' . wp_get_attachment_image_url($arr_date_attach->ID,'size-for-posters') . '" alt="">');
			$result_str = wp_get_attachment_image_url($arr_date_attach->ID,'thumbnail');
			break;
		}else{
			if ($num_img == rand(0, count($arr_media))) {
				$result_str = wp_get_attachment_image_url($arr_date_attach->ID,'thumbnail');
				break;
			}elseif ($num_img >= count($arr_media)) {
				$result_str = wp_get_attachment_image_url($arr_date_attach->ID,'thumbnail');
				break;
			}
		}
	}
	return $result_str;
}

//==========================================================================================
//		====================	ЧЕРНОВИК	=======================================


function pagination_to_page() {
	global $wp_query;
	// global $post;


		$arg = array(
			'post_type' => 'any',
			'posts_per_page' => -1
			);
	$arr_posts = get_posts($arg);
	setup_postdata($arr_posts);
	echo '<pre>+++'; print_r (get_query_var('paged')) ; echo '+++</pre>';
	
	$args = array(
		'base'    => 'http://test-prostofilm-ml-local-host/',
		'format'  => '',
		'current' => max( 1, get_query_var('paged') ),
		'total'   => count($arr_posts),
		'show_all'=>true
	);

	
	$result = paginate_links( $args );
	echo '**** <pre>'; print_r($result); echo '</pre>****';

















	return $arr_posts;
}










		// global $wp_query;

		// $big = 999999999; // уникальное число для замены

		// $args = array(
		// 	'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
		// 	'format'  => '',
		// 	'current' => max( 1, get_query_var('paged') ),
		// 	'total'   => $wp_query->max_num_pages,
		// );

		// $result = paginate_links( $args );

		// // удаляем добавку к пагинации для первой страницы
		// $result = preg_replace( '~/page/1/?([\'"])~', '\1', $result );










add_action('after_setup_theme','register_menu' );
function register_menu(){
	register_nav_menu('menu_left_sibear_top', 'Левый верхний sibear');
	register_nav_menu('menu_left_sibear_button', 'Левый нижний sibear');
}



?>
