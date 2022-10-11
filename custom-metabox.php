<?php

/*---- Functions.php-----*/
    require_once('metabox/init.php');
    require_once('metabox/custom.php');

/*---- Back-END -----*/
    add_action('cmb2_admin_init','meta_box_add_function');
    function meta_box_add_function() {
        $additional_field = new_cmb2_box(array(
            'title'         =>'Additional Field',
            'object_types'  =>array('shipper-carousel'),
            'id'            =>'additional-field',
        ));
        $additional_field->add_field(array(
            'name'=>'designation',
            'id'=>'__designation__',
            'type'=>'text'
        ));
    }
/*---  Font END ---*/
/*-- <small><?php echo get_post_meta(get_the_ID(),'__designation__',true)?></small> // ar vitore add k --*/

/*---!
    1. matebox add_field()function teke je ID pabo sete {<?php echo get_post_meta(get_the_ID(),'__designation__',true)?>} ar vitore add korte hobe !
    2. custom { register_post_type('shipper-carousel') } post type ta seta => add korte hobe { 'object_types'  =>array('shipper-carousel'), } ar modde !
    3. add_action('cmb2_admin_init','meta_box_add_function'); // add_action ar modde {add_action('cmb2_admin_init',)} add korte hobe !
    4.
!---*/