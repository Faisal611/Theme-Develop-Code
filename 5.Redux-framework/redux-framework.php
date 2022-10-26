<?php



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





