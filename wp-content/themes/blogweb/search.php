<!--search.php-->
<!--This file is meant for searching posts from 404.php page or from any other page's footer-->

<!--Including header or header.php file using wordpress php function-->
<?php
get_header();
?> 
<!---->   
    
		<article class="content px-3 py-5 p-md-5">
			<!--WordPress Loop-->
			<?php
				if ( have_posts() ) {
					while( have_posts() ){
						the_post();
                        
                        get_template_part('template-parts/content','archive'); //checks the type of post from template-parts folder.
                                                                           //Working==> get_template_part('folder_link_or_url','type_of_post');
					}
				}
			?>
	    </article>
	    
    
    <!--Including footer using wordpress php function-->
   <?php
      get_footer();
   ?>  
   <!---->

