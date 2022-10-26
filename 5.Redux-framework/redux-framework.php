<?php

//function file ar vitore redux-core require_one korte hobe

//require_once('theme-option/redux-core/framework.php');
//require_once('theme-option/sample/config.php');

/*---------- 1st step -----
//amr je config.php file ta banabo setar vitore redux framework sokol kaz korebo and tader default kicu funnction name change korte hobe :::

//1. This is your option name where all the Redux data is stored.
	$opt_name = 'shipper';  // YOU MUST CHANGE THIS.  DO NOT USE 'redux_demo' IN YOUR PROJECT!!!


//2. Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type' => 'submenu',


//3. The text to appear in the admin menu.

	'menu_title' => esc_html__( 'Shipper Options', 'shipper' ),


//4. The text to appear on the page title.
	'page_title' => esc_html__( 'Shipper Options', 'shipper' ),


//5. Show the time the page took to load, etc. (forced on while on localhost or when WP_DEBUG is enabled).
	'dev_mode'   => false,

-------*/
/*---------- 2nd step Backehand ------------*/
//amader framework nijeder moto kore desgin korte hove ai niyome

// -> Start Header Top Fields
Redux::set_section( $opt_name, array (
	'title'			=>__('Header Option', 'shipper'),
	'id'			=>'header-option',
	'description'	=>__('There are really basic fields','shipper'),
	'icon'			=>'el el-check',
	'fields'		=>	array(
		array(
			'title'		=>'Header Top Left Text',
			'id'		=>'header-top-left',
			'type'		=>'text',
			'default'	=>'Now 547,684 packages we delivery to 8.903 stores'
		),
		array(
			'title'	=>'Language',
			'type'	=>'checkbox',
			'id'	=>'language',
			'options'=> array(
				'english'	=>'English',
				'portugues'	=>'PORTUGUES',
				'spanish'	=>'SPANISH',
			)
		),
		array(
			'title'		=>'Phone Number',
			'id'		=>'shipper-phone',
			'type'		=>'text',
			'default'	=>'+1 8734 7346 4'
		)
	)
));

?>

/*-------------------- Fonthand ------------------*/
// 1. je file ar sate add korbo redux-framework sei file a obosoy Global function use korte hobe

<?php
    global $shipper;
?>

<?php echo $shipper['header-top-left']?>





