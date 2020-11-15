<!--comments.php-->
<!--This file is meant for comments and replies functionality-->


<div class="comments-wrapper">


					<div class="comments" id="comments">


						<div class="comments-header">

							<h2 class="comment-reply-title">
                                
                                <?php
                                     if( ! have_comments() ){
                                        echo "No Comments, Kindly add one!";                       
                                     }
                                     else{
                                        echo get_comments_number(). "Comments";
                                     }
                                ?>


                            </h2><!-- .comments-title -->

						</div><!-- .comments-header -->

						<div class="comments-inner">
                        
                        <!--For each and every individual comments-->
                        <?php
                            wp_list_comments(
                                array(
                                  'avatar_size' => 120,
                                  'style' => 'div',
                                )
                            ); 
                        ?>

						</div><!-- .comments-inner -->

					</div><!-- comments -->

					<hr class="" aria-hidden="true">
                    <!--Response comment-->
                    <?php
                        if( comments_open() ){
                            comment_form(
                                array(
                                    'class_form' => '',
                                    'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                                    'title_reply_after' => '</h2>',
                                )
                            );
                        }
                    ?>

				</div>