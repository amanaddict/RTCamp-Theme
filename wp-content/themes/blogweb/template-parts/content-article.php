<!--content-article.php file-->
<!--This file is checked for article type of posts-->


<div class="container">
    
    <header class="content-header">
		<div class="meta mb-3">
            <span class="date"> <b>Posted on:</b> <?php the_date(); ?> </span>
            <?php
                the_tags('<span class="tag"><i class="fa fa-tag"></i>','</span><span class="tag"><i class="fa fa-tag"></i>','</span>'); 
            ?>
            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?> </a></span>
        </div>
    </header>
    
    <!--Loading up content(i.e post) from single.php file-->
   <?php 
       the_content(); 
    ?>

    <!--Loading up comments.php file or comments template-->
    <?php
       comments_template();
    ?>

</div>