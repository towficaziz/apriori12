<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apriori</title>

        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
        <![endif]-->

        <link href="css/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.css" media="all" rel="stylesheet" type="text/css" />
        <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
        <link href="css/style-responsive.css" media="all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/colors/orange.css" id="colors">
        <link href="css/flexslider.css" media="all" rel="stylesheet" type="text/css" />

        <!-- Styles Switcher -->
        <link rel="stylesheet" type="text/css" href="css/switcher.css">

    </head>
    <body>

        <!-- Start Top Nav -->

        <div class="topnav" >
            <div class="container"><ul class="pull-right">
                    <li><a href="#"><i class="icon-envelope"></i></a></li>
                    <li><a href="#"><i class="icon-phone"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook-sign"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus-sign"></i></a></li>
                </ul></div>
        </div>

        <!-- End Top Nav -->

        <!-- Start Main Nav -->

        <div class="navbar navbar-fixed-top">
            <?php include "topmenu.php" ; ?>
        </div>

        <!-- End Main Nav -->

        <!-- Start Wrap- -->

        <div id="wrap">
            <div class="main" id="main-no-space" >  
                <div id="main-page">
                    <div id="wrapper" class="container">
                        <div id="page-title">
                            <h2>Gallery</h2>
                        </div>
                        <div class="headline marginbottom"><h4>Images with Description</h4></div>
                        <div class="row">
                            <div class="span3">
                                <div class="picture"><a href="images/portfolio/p1-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p1.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                                <div class="item-description">
                                    <h5><a href="#">Image Title</a></h5>
                                    <p>Description of the Image</p>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="picture">
                                    <a href="images/portfolio/p2-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p2.jpg" alt=""/>
                                        <div class="image-overlay-zoom"></div></a></div>
                                <div class="item-description">
                                    <h5><a href="#">Image Title</a></h5>
                                    <p>Description of the Image</p>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="picture"><a href="images/portfolio/p3-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p3.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                                <div class="item-description">
                                    <h5><a href="#">Image Title</a></h5>
                                    <p>Description of the Image</p>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="picture"><a href="images/portfolio/p4-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p4.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                                <div class="item-description">
                                    <h5><a href="#">Image Title</a></h5>
                                    <p>Description of the Image</p>
                                </div>
                            </div>
                        </div>
                        <div class="headline marginbottom"><h4>Images without Description</h4></div>
                        <div class="row">

                            <div class="span3">
                                <div class="picture"><a href="images/portfolio/p5-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p5.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                            </div>
                            <div class="span3">
                                <div class="picture"><a href="images/portfolio/p6-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p6.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                            </div>
                            <div class="span3">
                                <div class="picture"><a href="images/portfolio/p7-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p7.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                            </div>
                            <div class="span3">
                                <div class="picture"><a href="images/portfolio/p1-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p1.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                            </div>
                        </div>
                        <div class="headline marginbottom"><h4>Small Gallery</h4></div>
                        <div class="row">
                            <div class="span2">
                                <div class="picture"><a href="images/portfolio/p5-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p5.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                            </div>
                            <div class="span2">
                                <div class="picture"><a href="images/portfolio/p6-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p6.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                            </div>
                            <div class="span2">
                                <div class="picture"><a href="images/portfolio/p7-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p7.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                            </div>
                            <div class="span2">
                                <div class="picture"><a href="images/portfolio/p1-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p1.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                            </div>
                            <div class="span2">
                                <div class="picture"><a href="images/portfolio/p5-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p5.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                            </div>
                            <div class="span2">
                                <div class="picture"><a href="images/portfolio/p6-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p6.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                            </div>
                        </div>
                        <div class="headline marginbottom"><h4>Very Small Gallery</h4></div>
                        <div class="row">

                            <div class="span1">
                                <div class="picture"><a href="images/portfolio/p5-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p5.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>

                            </div>
                            <div class="span1">
                                <div class="picture"><a href="images/portfolio/p6-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p6.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>

                            </div>
                            <div class="span1">
                                <div class="picture"><a href="images/portfolio/p7-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p7.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>

                            </div>
                            <div class="span1">
                                <div class="picture"><a href="images/portfolio/p1-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p1.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>

                            </div>
                            <div class="span1">
                                <div class="picture"><a href="images/portfolio/p5-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p5.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>

                            </div>
                            <div class="span1">
                                <div class="picture"><a href="images/portfolio/p6-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p6.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>

                            </div>
                            <div class="span1">
                                <div class="picture"><a href="images/portfolio/p5-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p5.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>

                            </div>
                            <div class="span1">
                                <div class="picture"><a href="images/portfolio/p6-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p6.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>

                            </div>
                            <div class="span1">
                                <div class="picture"><a href="images/portfolio/p7-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p7.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>

                            </div>
                            <div class="span1">
                                <div class="picture"><a href="images/portfolio/p1-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p1.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>

                            </div>
                            <div class="span1">
                                <div class="picture"><a href="images/portfolio/p5-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p5.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>

                            </div>
                            <div class="span1">
                                <div class="picture"><a href="images/portfolio/p6-large.jpg" rel="image" title="Image Title"><img src="images/portfolio/p6.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>  
        </div> 

        <!-- End Wrap -->

        <!-- Start Footer -->

        <div id="footer">
            <?php include "footer.php" ?>
        </div>

        <!-- End Footer -->

        <!-- Javascripts================================================== -->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap-tab.js"></script>
        <script src="js/bootstrap-transition.js"></script>
        <script src="js/fancybox.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/switcher.js"></script>

        <!-- Styles Switcher -->

        <div id="style-switcher">
            <h2>Predefined Colors<a href="#"><i class="icon-cogs" style="font-size:36px;"></i></a></h2>
            <ul class="colors" id="color">
                <li><a href="#" class="green" title="Green"></a></li>
                <li><a href="#" class="blue" title="Blue"></a></li>
                <li><a href="#" class="orange" title="Orange"></a></li>
                <li><a href="#" class="pink" title="Pink"></a></li>
                <li><a href="#" class="red" title="Red"></a></li>
                <li><a href="#" class="white" title="White"></a></li>
                <li><a href="#" class="black" title="Black"></a></li>
            </ul>
            <div id="reset"><a href="#" class="btn">Reset</a></div>
        </div>

        <!-- End Switcher -->

    </body>
</html>