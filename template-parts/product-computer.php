<?php
/* Template Name: Computer*/
get_header('camtoptec'); ?>
			
			<section class="sec-title">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2 class="title border-brand pull-left"><?php the_title();?></h2>
						</div>
						<div class="col-md-6">
							<?php the_breadcrumb(); ?>
						</div>
					</div>
				</div>
			</section>
			
			<section class="product">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="row">
								<div class="col-md-12 show-grid-sm hidden-xs hidden-sm">
									<div class="category">
										<div class="header-category">
											<h3 class="title"><i class="fa fa-bars"></i>ប្រភេទ ម៉ាកកុំព្យូទ័រ</32>
										</div>
										<ul class="list-unstyled">
											<li><a href="#"><img src="images/samsung.jpg" alt="Samsung" /> <span class="pull-right">( 6 គ្រឿង )</span></a></li>
											<li><a href="#"><img src="images/asus.jpg" alt="Asus" /> <span class="pull-right">( 6 គ្រឿង )</span></a></li>
											<li><a href="#"><img src="images/lenovo.jpg" alt="Lenovo" /> <span class="pull-right">( 6 គ្រឿង )</span></a></li>
											<li><a href="#"><img src="images/sony.jpg" alt="Sony" /> <span class="pull-right">( 6 គ្រឿង )</span></a></li>
											<li><a href="#"><img src="images/lg.jpg" alt="LG" /> <span class="pull-right">( 6 គ្រឿង )</span></a></li>
											<li><a href="#"><img src="images/apple.jpg" alt="Apple" /> <span class="pull-right">( 6 គ្រឿង )</span></a></li>
											<li><a href="#"><img src="images/nokia.jpg" alt="Nokia" /> <span class="pull-right">( 6 គ្រឿង )</span></a></li>
											<li><a href="#"><img src="images/blackberry.jpg" alt="Blackberry" /> <span class="pull-right">( 6 គ្រឿង )</span></a></li>
											<li><a href="#"><img src="images/htc.jpg" alt="HTC" /> <span class="pull-right">( 6 គ្រឿង )</span></a></li>
											<li><a href="#"><img src="images/mi.jpg" alt="MI" /> <span class="pull-right">( 6 គ្រឿង )</span></a></li>
											<li><a href="#"><img src="images/zopo.jpg" alt="Zopo" /> <span class="pull-right">( 6 គ្រឿង )</span></a></li>
											<li><a href="#"><img src="images/oppo.jpg" alt="Oppo" /> <span class="pull-right">( 6 គ្រឿង )</span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-8">
							<div class="row">
                                      <?php
                                      global $paged;
                                      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                      $arr=array(
                                                'post_type'=>'post',
                                                'category_name'=>'computer',
                                                'posts_per_page'=>9,
                                                'paged'=>$paged
                                      );

                                      query_posts($arr);
                                      while(have_posts()) { the_post();
                                         ?>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="thumbnail">
                                                    <a href="<?php echo get_the_permalink(); ?>">
                                                        <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" alt="" />
                                                        <h4 class="title"><?php the_title(); ?></h4>
                                                        <span class="price">$ <?php the_field('price') ?></span>
                                                    </a>

                                                    <ul>
                                                        <?php $arr=explode('<br />',get_field('property',$post->ID)); ?>
                                                        <?php foreach($arr as $k => $v) : ?>
                                                                <li><?php echo $v; ?></li>
                                                        <?php endforeach; ?>

                                                    </ul>
                                                </div>
                                            </div>
                                          <?php } ?>

							</div>
						</div>
						<div class="col-md-12">
							<nav aria-label="Page navigation">
                              <?php camtoptec_pagination(); ?>
							</nav>
						</div>
						
					</div>
				</div>
			</section>
			
			<?php get_footer('camtoptec');