<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<title></title>
</head>
<body >

 <div class="col-xs-5 col-sm-2 col-md-2 col-lg-2">
                             <!-- logo -->

                                <a href=" <?php echo site_url(); ?> " title="Ocean"><img src="<?php echo bloginfo('template_directory');?>/oceanlogo.png" style="vertical-align: baseline;" width="160px" alt="Ocean" title="Ocean"/></a>

                        </div>
                           <!-- logo -->

                          <!-- nav -->

                        <nav role="navigation" class="col-xs-12 col-sm-10 col-md-10 col-lg-10 navbar navbar-default">

                            <div class="navbar-header">

                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                                    <span class="sr-only">Toggle navigation</span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                            </div>

                            <div id="navbar" class="navbar-collapse collapse">            

                                <ul class="nav navbar-nav">     
                                <li>  <?php
                                   wp_nav_menu( array(
                                       'menu'              => 'primary',
                                       'theme_location'    => 'primary',
                                       'depth'             => 2,
                                       'container'         => 'div',
                                       'container_cl+ass'   => 'collapse navbar-collapse',
                                       'container_id'      => 'bs-example-navbar-collapse-5',
                                       'menu_class'        => 'nav navbar-nav',
                                       'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                       'walker'            => new wp_bootstrap_navwalker())
                                   );

                                    ?></li>
                               

                                </ul>

                            </div>

                        </nav>
                        
                    
    
</body>
</html>