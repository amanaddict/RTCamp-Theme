<!--Including header or header.php file using wordpress php function-->
<?php
get_header();
?> 
<!---->   
    
		<article class="content px-3 py-5 p-md-5">
			<!--
				WordPress Loop: It is an iterator that requests DB and gets the data from there
			-->
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

