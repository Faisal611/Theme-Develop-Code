<?php

/*--
 1. explode -> explode function holo ( content -> array ) te Converte kora hoy !
 2 .implode -> implode function holo ( array -> staing ) te converte kora hoy !
 3 . Search option
---*/


function readmore($count) {

    $content    = get_the_content();
    $array 	    = explode('',$content);
    $lassArray  = array_slice($array,0,$count);

    echo implode('',$lassArray);
}

?>
<!--Font Page-->
<p class="post-text"> <?php readmore(35) ?></p>

<!---- Search option ---->
<form action="<?php echo home_url(); ?>" method="get">
    <input type="text" name="s" placeholder="Type here">
    <button type="submit"><i class="ion-chevron-right"></i></button>
</form>