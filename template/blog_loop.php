                    <?php 
                        if(have_posts()): 
                        while(have_posts()): the_post();    
                    ?>

                    <div id="blog_area">
                        <div class="pst_thumb">
                            <a href="<?php the_permalink(); ?>"> <?php echo the_post_thumbnail('post-thumbnails'); ?> </a>                            
                        </div>

                        <div class="pst_details">
                            <h2 class="title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
                            
                            <p><b>Category : </b> <?php the_category(', '); ?> </p>
                                
                            <p><b>Tags : </b> <?php //the_tags(''); ?> </p>

<?php
                            // GET TAGS BY POST_ID
                               $tags = get_the_tags($post->ID);  ?>
 
                               <ul class="cloudTags">

                                    <?php foreach($tags as $tag) :  ?>

                                   <li>
									  <a class="btn btn-warning"
                                          href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>">
                                                <?php print_r($tag->name); ?>
                                       </a>	
                                    </li>
                                    <?php endforeach; ?>
						      </ul>




                            
                            

                            <?php the_excerpt(); ?>
                        </div>
                    </div>

                    <?php 
                        endwhile;
                        else:
                            _e( 'No Post Founded' );
                        endif; 
                    ?> 

                    <div id="page_nav">
                        <?php if('ifti_pagination') { ifti_pagination(); } else{ ?>
                            <?php next_posts_link(); ?>
                            <?php previous_posts_link(); ?>
                        <?php } ?>
                    </div>