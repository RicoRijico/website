<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory');?>/fav.png" type="image/x-icon">

    <title><?php wp_title(''); ?></title>

 

    <style type="text/css">
        #vl{font-size: 24px;
            display: inline-block;
            line-height: 36px;}
        #cn{
            width: 100%;
            text-align: center;
            color: white;
            border: 1px solid gray;
            background-color:#1F67A9;

        }


        #cn tr th
        {
            text-align: center;
            color: black;
        }
        #cn tr{border: 1px solid gray;}
        #cn tr th{border: 1px solid gray;}

        #cn tr td{border: 1px solid gray;
        }


 .navbar-nav > li > .dropdown-menu { background-color:rgba(20,20,30,0.5);}

/* Dropdown menu font color*/ 
 .navbar-nav > li > .dropdown-menu a:hover{ background-color:transparent!important;}

 .navbar-nav > li > .dropdown-menu a{color: #fff!important;
 margin-right:20px;  }

        #vlu{color:#fff!important;}

        .vuthy{
            text-align: justify;
            text-indent: 2px;
            margin-left: 30px;
            margin-right: 30px; 
        }
         @media screen and (max-width:480px){
            .vuthy{
                text-align: left;
                text-indent:0px;
                text-align: justify;

            }
        }
        @media screen and (max-width:767px){
            .vuthy{
                text-align: left;
                text-indent:0px;
                text-align: justify;
            }
        }
        @media screen and (max-width:991px){
            .vuthy{
                text-align: left;
                text-indent:0px;
                text-align: justify;
            }
        }
        @media screen and (max-width:1199px){
            .vuthy{
                text-align: left;
                text-indent:0px;
                text-align: justify;
            }
        }
         @media screen and (max-width: 1366px){
            .vuthy{
                text-align: left;
                text-indent:0px;
                text-align: justify;
            }
        }

    </style>

    <!-- style -->

    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->

    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- carousel -->

    <link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css">

    <!-- responsive -->

    <link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet" type="text/css">

    <!-- font-awesome -->

    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- font-awesome -->

    <link href="<?php bloginfo('template_url'); ?>/css/animate.min.css" rel="stylesheet" type="text/css">

    <link href="<?php bloginfo('template_url'); ?>/css/popup.css" rel="stylesheet" type="text/css">

 
 <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
<?php wp_head()?>
  </head>

   <body class="module-home" data-spy="scroll" data-target=".navbar">

        
<!-- 
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-lablledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 100%">
            <div class="modal-content">
                <div class="model-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                    <iframe width="100%" height="900px" frameborder="0" allowfullscreen src=""></iframe>
                </div>
            </div>
        </div>
    </div>
 -->


    <!-- header -->

   <!-- header -->

     <header role="header" class="header-top" id="headere-top">

        

            <div class="header-fixed-wrapper" role="header-fixed">

                <div class="container">

                    <!-- hgroup -->

                    <hgroup class="row">

                   <?php get_header(); ?>

                    </hgroup>

                    <!-- hgroup -->

                  </div>

            </div>

            <!-- banner Text --> 

                 <section class="text-center">

                    <h2>Welcome to Ocean Technology Co.,Ltd</h2>

                    <p>Confident , Best Service and Safe</p>
                     
                    <!-- testing -->

                    <!-- <div class="page">
                        <p><a href="#media-popup" data-media="//www.youtube.com/embed/YoXa2Pl7Hk0"><i class="fa fa-caret-right" aria-hidden="true">     
                     
                     </i></a></p>
                        
                        <div class="popup" id="media-popup">
                            <iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div> -->



                 <a class="popup-vimeo video-button" href="https://www.youtube.com/watch?v=-LgUTbljEhk"><i class="fa fa-caret-right" aria-hidden="true"> 

                     </i></a>
              



                          
                     <a  href="<?php echo get_permalink(55); ?>" class="button-header">Get Strated</a>

                </section>

                

            <!-- banner Text -->   

                

            <!-- banner image -->

            <figure>

                <div class="parallax-window item tp-banner-container" data-parallax="scroll" data-image-src="<?php echo bloginfo('template_directory');?>/33083898_195741204397969_4657672117301542912_n.png"></div>


            </figure>

            <!-- banner image -->

        </header>


    <!-- header -->    


    

    <!-- main -->

        <main role="main" id=" main-wrapper">

            

            <!-- top pan -->
<!-- 
            <section role="loges" class="top-pan">

                <div class="container">

                    <ul class="row">

                        <li class="col-xs-12 col-sm-3 col-md-2 col-lg-2 ">Trusted by</li>

                        <li class="col-xs-4 col-sm-3 col-md-2 col-lg-2 ">

                            <a href="#"><img src="images/logoes/logoes-1.png" alt="" class="img-responsive"/></a>

                        </li>

                        <li class="col-xs-4 col-sm-3 col-md-2 col-lg-2">

                            <a href="#"><img src="images/logoes/logoes-2.png" alt="" class="img-responsive"/></a>

                        </li>

                        <li class="col-xs-4 col-sm-3 col-md-2 col-lg-2">

                            <a href="#"><img src="images/logoes/logoes-3.png" alt="" class="img-responsive"/></a>

                        </li>

                        <li class="col-xs-4 col-sm-3 col-md-2 col-lg-2">

                            <a href="#"><img src="images/logoes/logoes-4.png" alt="" class="img-responsive"/></a>

                        </li>

                        <li class="col-xs-4 col-sm-3 col-md-2 col-lg-2">

                            <a href="#"><img src="images/logoes/logoes-5.png" alt="" class="img-responsive"/></a>

                        </li>

                    </ul>

                </div>

            </section> -->

            <!-- top pan -->

            <!-- section-one -->
            <!-- News -->

            <section class="section-one text-center" id="section-one">

                <div class="container">

                    <header role="title-page">

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

                  <!--   <article>

                        <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, ves<br/>

                        tibulum at eros. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue.<br/>

                        Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas mollis interdum!</p>

                    </article>      -->               

                    <!-- four boxes  -->

                        <div class="row four-box-pan" role="four-box">

                            

                            <section class="col-xs-12 col-sm-6 col-md-3">

                               <figure>
                                <?php
                            // Get the ID of a given category
                            $category_id = get_cat_ID( 'Promotion' );
                         
                            // Get the URL of this category
                            $category_link = get_category_link( $category_id );?>
                                                        
                            <a href="<?php echo esc_url( $category_link ); ?>"><i class="fa fa-bullhorn" aria-hidden="true">

                             </i></a></figure>

                                <h5>PROMOTION</h5>

                                <p>Our Promotions like products or monthy fee in here. Click here for more Detail.</p>

                            </section>

                            <section class="col-xs-12 col-sm-6 col-md-3">

                                <figure>

                                       <?php
                            // Get the ID of a given category
                            $category_id = get_cat_ID( 'system-update' );
                         
                            // Get the URL of this category
                            $category_link = get_category_link( $category_id );?>
                            <a href="<?php echo esc_url( $category_link ); ?>"><i class="fa fa-gears" aria-hidden="true"></i></a></figure>

                                <h5>SYSTEM UPDATE</h5>

                                <p>Our systems alway update. So, Please feel free for check this for know our systems update</p>

                            </section>

                            <section class="col-xs-12 col-sm-6 col-md-3">

                                <figure>

                                    <?php
                            // Get the ID of a given category
                            $category_id = get_cat_ID( 'technology' );
                         
                            // Get the URL of this category
                            $category_link = get_category_link( $category_id );?>
                                                        
                                    <a href="<?php echo esc_url( $category_link ); ?>"><i class="fa fa-connectdevelop" aria-hidden="true"></i></a></figure>

                                <h5>TECHNOLOGY</h5>

                                <p>Technology is refer to update of Technology related to Telematics.</p>

                            </section>

                            <section class="col-xs-12 col-sm-6 col-md-3">

                                <figure>
                                         <?php
                            // Get the ID of a given category
                            $category_id = get_cat_ID( 'job' );
                         
                            // Get the URL of this category
                            $category_link = get_category_link( $category_id );?>
                                    <a href="<?php echo esc_url( $category_link ); ?>"><i class="fa fa-briefcase" aria-hidden="true"></i></a></figure>

                                <h5>JOBS</h5>

                                <p>For you want to get job at my company check here.</p>

                            </section>

                          
                               
                            

                            

                        </div>


                    <!-- four boxes -->

                    

                </div>

            </section>

            <!-- section-one -->

            

            <!-- section-two -->

            <section class="section-two" id="section-two">

                

                <!-- image-content -->

                <!-- <section>

                    <div class="col-xs-12 col-sm-6 col-md-6">

                        <article>

                            <h2>Get Maxium benifites by working with our experts.</h2>

                            <p>Below is some feature of the Products.</p>

                            <ul>

                                <li>Real Time Tracking</li>

                                <li>Tracking Replay</li>

                                <li>Distance Report</li>

                                <li>Part Report</li>
                                <li>More...</li>

                            </ul>

                        </article>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">

                        <figure class="row" style="background-image:url(Cooperate_getty_0-1600x800.jpg)"></figure>
                     
                    </div>

                 </section> -->

                <!-- image-content -->

              <!--   <div class="clearfix"></div> -->

                 <!-- image-content -->
<!-- 
                 <section>

                    <div class="col-xs-12 col-sm-6 col-md-6">

                         <figure class="row" style="background-image:url(Cooperate_getty_0-1600x800.jpg)"></figure>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">

                        <article>

                            <h2>We even give you more than your expectation</h2>

                            <p>We can conect your truck to fuel sensor for tack of fuel. This is good for your
                                on process about fuel.
                       </p>

                        </article>

                    </div>

                 </section> -->

                <!-- image-content -->

             <!--    <div class="clearfix"></div> -->

                

                <!-- video -->
<!-- 
                <div class="video-pan text-center"> -->
                    
<!-- 
                    <a id="video" class="player" data-property="{videoURL:'https://youtu.be/-LgUTbljEhk',containment:'.bg-container-youtube', showControls:false,autoPlay:true, loop:true, startAt:0, opacity:1, addRaster:false, quality:'large'}"></a>
  -->
                    <!-- 5.0 background container autoPlay:true,  -->

                   <!--  <div class="bg-container-youtube"></div>

                    <header>

                        <a class="popup-vimeo video-button" href="https://youtu.be/-LgUTbljEhk"><i class="fa fa-caret-right" aria-hidden="true"></i></a>                                

                    <h4>Video Preview Of Product</h4>

                    </header>

                </div> -->

                <!-- video -->

                

                <!--slider pan -->

                <div class="slider-pan">

                    <header role="title-page" class="text-center">

                        <h4>Customer Voice</h4>

                    </header>

                    <!-- carousel -->

                    <div id="owl-demo" class="owl-carousel text-center" role="slider">

                    

                        <section class="item">

                            <article>                            

                                Morbi leo orta felis euismod semper.Maecenas sed diam eget risus varius blandit sit <br/>

                                amet non magna felis euismod leo orta felis semper. 

                            </article>

                            <header>

                                <h5>Antony Casalena</h5>

                                <h6>Vice president, IQTeam</h6>

                            </header>

                        </section>

                        <section class="item">

                            <article>

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis tortor nec diam dapibus<br>efficitur in quis sem. Morbi tristique purus at vestibulum malesuada.  

                            </article>

                            <header>

                                <h5>Brain Rice</h5>

                                <h6>VP, Lexix Pvt Ltd</h6>

                            </header>

                        </section>

                        <section class="item">

                            <article>

                                Morbi leo orta felis euismod semper.Maecenas sed diam eget risus varius blandit sit <br/>

                                amet non magna felis euismod leo orta felis semper. 

                            </article>

                            <header>

                                <h5>Antony Casalena</h5>

                                <h6>Vice president, IQTeam</h6>

                            </header>

                        </section>

                        <section class="item">

                            <article>

                                Morbi leo orta felis euismod semper.Maecenas sed diam eget risus varius blandit sit <br/>

                                amet non magna felis euismod leo orta felis semper. 

                            </article>

                            <header>

                                <h5>Antony Casalena</h5>

                                <h6>Vice president, IQTeam</h6>

                            </header>

                        </section>
                       

                    </div>

                    <!-- carousel -->

                </div>

                <!--slider pan -->
                

            </section>

            <!-- section-two -->

            

            <!-- section-three -->

            <!-- <section class="section-three" id="section-three">

                <div class="container">

                    <header role="title-page" class="text-center">

                        <h4>Flexible Products</h4>

                        <h2>Select the products that suitable for you.</h2>

                    </header> -->

                    <!-- pricing -->

                   <!--  <div class="pricing">

                        <section>

                            <header><h4>motor</h4></header>

                            <h2><span>$47 or $55</span> /Unit</h2>

                            <ul>

                                <li>Free Install</li>

                                <li>warranty 1Year</li>

                            </ul>

                            <input name="" type="button" value="get Strated">

                        </section>

                        <section>

                            <header><h4>Car</h4></header>

                            <h2><span>$82</span><br> /Unit</h2>

                            <ul>

                                <li>Free Install</li>

                                <li>warranty 1Year</li>

                            </ul>

                            <input name="" type="button" value="get Strated">

                        </section>

                        <section>

                            <header><h4>Big Truck and Car</h4></header>

                            <h2><span>$195 or $330</span> /Unit</h2>

                            <ul>

                               <li>Free Install</li>

                                <li>warranty 1 Year</li>

                            </ul>

                            <input name="" type="button" value="get Strated">

                        </section>

                    </div>
 -->
                    <!-- pricing -->

          <!--       </div> 

            </section>
 -->
            <!-- section-three -->

            

            <!-- section-four -->

     <!--        <section class="section-four" id="section-four">

                <div class="container">

                    <header role="title-page" class="text-center">

                        <h4>System Login</h4>

                        <h2>Click on the link or Scan barcode below for the type of O-track Product Package you have registered with to log in.</h2>

                    </header> -->

                    <!-- Team -->

                    <!-- <div class="team-pan row">

                        
                        <section class="col-sm-1 col-md-1"></section>   
                        <section class="col-xs-12 col-sm-3 col-md-3">

                            <figure><img src="images\Barcod\Lite1.png" alt="" class=" img-responsive"/></figure>

                            <header>

                                <h5>LITE O-TRACK</h5>                           

                                <a href="http://qrs.ly/go65vtc"><i class="fa fa-android" id="vl" aria-hidden="true"></i></a>

                                <a href="https://itunes.apple.com/kh/app/lite-o-track/id1298944338?mt=utf-8" id="vl"><i class="fa fa-apple"  aria-hidden="true"></i></a>

                            </header>

                        </section>


                        <section class="col-sm-2 col-md-2"></section> 

                        <section class="col-sm-2 col-md-2"></section>  

                        <section class="col-xs-12 col-sm-3 col-md-3">

                            <figure><img src="images\Barcod\Platinum1.png" alt="" class=" img-responsive"/></figure>

                            <header>

                                <h5>PLATINUM O-TRACK</h5>

                                <a href="https://play.google.com/store/apps/details?id=biz.platinum_otrack.oceantech"><i class="fa fa-android" id="vl" aria-hidden="true"></i></a>

                                <a href="https://itunes.apple.com/kh/app/platinum-o-track/id1189891684?mt=8"><i class="fa fa-apple" id="vl" aria-hidden="true"></i></a>
 -->
                                <!-- <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a> -->

                       <!--      </header>

                        </section>

                        <section class="col-sm-1 col-md-1"></section>
 -->
                       <!--  <section class="col-xs-12 col-sm-6 col-md-3">

                            <figure><img src="http://placehold.it/249x263" alt="" class=" img-responsive"/></figure>

                            <header>

                                <h5>Johnathan Doe</h5>

                                <h6>Development Lead</h6>

                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>

                            </header>

                        </section>

                        <section class="col-xs-12 col-sm-6 col-md-3">

                            <figure><img src="http://placehold.it/249x263" alt="" class=" img-responsive"/></figure>

                            <header>

                                <h5>Julian Gulia</h5>

                                <h6>Marketing Head</h6>

                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>

                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>

                            </header>

                        </section> -->

                        

             <!--        </div> -->

                    <!-- Team -->

             <!--    </div>

            </section> -->

            <!-- section-fore -->

            

            <!-- section-five -->

            <section class="section-five" id="section-five">

                <div class="container">

                   
                    <!-- subscribe -->

                    <div class="subscribe-form">
      <div> <?php dynamic_sidebar('sidebar'); ?>
</div>
                        <div class="ntify_form">

                         
                            <!-- subscribe message -->

                            <div id="mesaj"></div>

                            <!-- subscribe message --> 

                        </div>

                    </div>

                    <!-- subscribe -->

                </div>

            </section>

            <!-- section-five -->

            

            <!-- section-six -->

            <section class="section-six" id="section-six">

                <div class="container">

                     <header role="title-page" class="text-center">

                        <h3 style="text-transform:uppercase;">Ocean Technology Co.,Ltd</h3>

                        <h4 style="text-transform: lowercase;">Please contact us for further information about Ocean Technology Co., Ltd and the services as well as products we supply. <br>We can be reached through the following methods.</h4>
                        <h3>Contact Details</h3>

                    </header>

                    <!-- contact-form -->   
                  
                    <div class="contact-form">
                        <div id="message" style="color:white;font-size:20px;font-family: Times New Roman;text-align: center;">  
                            <div class="col-xs-12 col-sm-12 col-md-12" style="background-color:#1F67AA;">

                                <div class="col-xs-12 col-sm-6 col-md-6">

                                    <table style=";width:100%">
                                        <tr>
                                            <th style="text-align: center;"><u><h4>CONTECT</h4></u></th>
                                            
                                        </tr>
                                        <tr>

                                            <td>010/012/081/0883/0965/099/089-800-123</td>
                                            
                                        </tr>
                                        <tr>
                                            
                                            <td> OR 023-211-700</td>
                                        </tr>

                                    </table>

                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6">

                                    <table style="background-color:;width: 100%">
                                        
                                        <tr>
                                            
                                            <th style="text-align: center;"><u><h4>EMAIL</h4></u></td>
                                        </tr>

                                        <tr>                                            

                                            <td>sales@ocean-tech.biz</td>
                                                                            
                                        </tr>

                                        <tr>

                                            <td>info@ocean-tech.biz</td>

                                        </tr>

                                    </table>

                                </div>
                            </div>
                        </th>       
                    </div>  
                   

                    <!-- <div class="contact-form">

                        <div id="message">

                            <div class="col-md-12 col-lg-12 col-sm-12"> 

                            <table id="cn">
                                <tr>
                                    <th>SYSTEM SUPPORT</th>
                                    <th>SALES TEAM</th>
                                </tr>

                                <tr>
                                    <td>
                                    +855 12 800 123<br>
                                    +855 81 800 123<br>
                                    +855 10 800 123<br>
                                    +855 883 800 123
                                    </td>
                                    <td>
                                    +855 89 800 123<br>
                                    +855 965 800 123<br>
                                    +855 23 211 700<br>
                                    sales@ocean-tech.biz<br>
                                    info@ocean-tech.biz
                                    </td>
                                </tr>
                                <tr>
                                    
                                </tr>
                            </table>
                            
                        </div>

                       </div> -->
                               <!--  <form method="post" action="php/contactfrom.php" name="cform" id="cform">

                                <div class="col-md-6 col-lg-6 col-sm-6">

                                    <input  name="name" id="name" type="text" placeholder="Full Name">

                                </div>

                                <div class="col-md-6 col-lg-6 col-sm-6">

                                    <input  name="email" id="email" type="email"  placeholder="Email Address">

                                </div>

                                <div class="clearfix"></div>

                                <textarea name="comments" id="comments" cols="" rows="" placeholder="Question in Detail"></textarea>

                                <div class="clearfix"></div>

                                <input name="" type="submit" value="Send mail">

                                <div id="simple-msg"></div> -->

                        </form>

                     </div>

                    <!-- contact-form -->

                    <div class="clearfix"></div>

                </div>
                <div><br></div>
                <!-- map -->

                 <div class="map-wrapper">

                        <div id="surabaya">
                            
                            <iframe width="100%" height="340" frameborder="1" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3909.203075089949!2d104.9143017!3d11.5372854!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310950e7451f3faf%3A0x48708ecb6dcdf0af!2sOcean+Technology+Co.%2C+Ltd!5e0!3m2!1sen!2skh!4v1427427212570" width="600" height="450" frameborder="1" style="border:1"></iframe><br /><small><a href="hhttps://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3909.203075089949!2d104.9143017!3d11.5372854!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310950e7451f3faf%3A0x48708ecb6dcdf0af!2sOcean+Technology+Co.%2C+Ltd!5e0!3m2!1sen!2skh!4v1427427212570" style="color:#0000FF;text-align:right"></a></small>
                        </div>


                    </div>

                <!-- map -->

            </section>

            <!-- section-six -->            

           <!-- footer -->

           <footer role="footer" class="footer text-center">

                <div class="container">

                    <!-- socil-icons -->

                    <section role="socil-icons" class="socil-icons">

                        <a href="https://twitter.com/OceanGPS"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                        <a href="https://www.facebook.com/oceantechgps/"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                        <a href="https://www.linkedin.com/start/join?session_redirect=http%3A%2F%2Fwww.linkedin.com%2Fprofile%2Fview%3Ftrk%3Dspm_pic%26goback%3D%252Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1%26id%3D234083072&trk=login_reg_redirect"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>                       
                        
                        <a href="https://www.instagram.com/oceantech_gps/?ref=badge"><li class="fa fa-instagram" aria-hidden="true"></li></a>   
                    </section>

                    <!-- socil-icons -->
                    <!-- nav -->

                    <nav role="footer-nav">

                        <?php wp_nav_menu(array('menu'=>'footermenu2'));?>
                    

                        

                    </nav>

                    <!-- nav -->                   

                </div>
                <div class="footer-nav">

</div>


           </footer>

           <!-- footer -->

            

        </main>

    <!-- main -->

<?php wp_footer(); ?>

  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js" type="text/javascript"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/parallax.min.js" type="text/javascript"></script>

    <script type="text/javascript">

        $('.parallax-window').parallax({});

    </script>

    <script src="<?php bloginfo('template_url'); ?>/js/main.js" type="text/javascript"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js" type="text/javascript"></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> 

    <script src="<?php bloginfo('template_url'); ?>/js/maps.js" type="text/javascript"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mb.YTPlayer.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/video.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/custom.js" type="text/javascript"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/jquery.contact.js" type="text/javascript"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/html5shiv.min.js" type="text/javascript"></script>

<!-- /WhatsHelp.io widget --> 
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution="setup_tool"
  page_id="136095573116780"
  theme_color="#0084ff">
</div>

</div>

</script>
  </body>
</html>