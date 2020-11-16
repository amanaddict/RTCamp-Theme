<!--404.php-->
<!--Error Message 404 - Handling Errors-->

<!--Including header or header.php file using wordpress php function-->
<?php
get_header();
?> 
<!---->   
    
		<article class="content px-3 py-5 p-md-5">
            <h1 class="text-center text-danger">404 - Page Not Found</h1>
            <p class="lead text-center text-success">Sorry, Maybe the link or page you are trying to reach is broken or under maintainance!</p>
            <p class="lead text-center text-primary"><u>You may search something related or something else!</u></p>
            <!--Since, User is trying to find something that is not there
                Therefore, We will try to give them the SEARCH POSTS functionality. 
            -->
            <div class="text-center align-center">
                 <?php
                    get_search_form();
                 ?>
            </div>
            

	    </article>
	    
    
    <!--Including footer using wordpress php function-->
   <?php
      get_footer();
   ?>  
   <!---->

