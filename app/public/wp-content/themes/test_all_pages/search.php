<?php

if(have_posts()){
    while(have_posts()){

        the_post();
        echo "Search.php";
        ?>
        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
        <?php 
        
        the_content();
    }
}

?>