<header role="title-page">

                        <h4>What we do</h4>

                        <h2 style=" padding-left:30px; padding-right: 30px;text-align: justify; text-align: center;"> <?php the_title(); ?>

                    </header> 

                    <article>
                        <!--<p style="text-align: justify;text-indent: 50px;">-->
                            
                        <p class="vuthy">
                        
                            <?php if (have_posts()) : the_post(); ?>

                        <div class="vuthy">
                            <?php the_content(); ?>
                        </div><!-- entry -->
                        <?php endif; ?>
                        </p>
                        <!-- <?php if (has_post_thumbnail()) : ?> 
                            <div>
                                <?php the_post_thumbnail('thumbnail') ?>
                            </div>
                         
                    <?php endif; ?> -->
                    </article>