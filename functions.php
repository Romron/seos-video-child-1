<?php 

// Быстрее чем @import
// add_action( 'wp_enqueue_scripts', 'my_child_theme_style' );
// function my_child_theme_style() {
// 	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// }



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
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
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

add_filter('template_include', 'template_type_posts');
function template_type_posts( $template ) {
	global $post;

	# шаблон для записи по типу
	if( $post->post_type == 'films' ){
		$path_tpl_file = get_stylesheet_directory() . '/template-pages/films-tpl.php';
		// проверяю существование файла шаблона
		if(file_exists($path_tpl_file)) {
			return $path_tpl_file;
		}
	}

	if( $post->post_type == 'posters' ){
		$path_tpl_file = get_stylesheet_directory() . '/template-pages/posters-tpl.php';
		// проверяю существование файла шаблона
		if(file_exists($path_tpl_file)) {
			return $path_tpl_file;
		}
	}

	if( $post->post_type == 'acters' ){
		$path_tpl_file = get_stylesheet_directory() . '/template-pages/acters-tpl.php';
		// проверяю существование файла шаблона
		if(file_exists($path_tpl_file)) {
			return $path_tpl_file;
		}
	}

	if( $post->post_type == 'announcement' ){
		$path_tpl_file = get_stylesheet_directory() . '/template-pages/announcement-tpl.php';
		// проверяю существование файла шаблона
		if(file_exists($path_tpl_file)) {
			return $path_tpl_file;
		}
	}

	if( $post->post_type == 'news' ){
		$path_tpl_file = get_stylesheet_directory() . '/template-pages/news-tpl.php';
		// проверяю существование файла шаблона
		if(file_exists($path_tpl_file)) {
			return $path_tpl_file;
		}
	}


	return $template;

}

add_action('init', 'add_custom_fields');
function add_custom_fields(){
	add_post_type_support( 'films', 'custom-fields');
}



?>