<!--single.php-->
<!--This file is meant for single posts-->

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
						the_content(); //gets the content
					}
				}
			?>
	    </article>
	    
    
    <!--Including footer using wordpress php function-->
   <?php
      get_footer();
   ?>  
   <!---->

