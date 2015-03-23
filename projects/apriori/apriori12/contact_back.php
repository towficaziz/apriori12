<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>a priori</title>

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

        <!-- Start Top Nav 

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
            <?php include "header.php" ; ?>
        </div>

        <!-- End Main Nav-->

        <!-- Start Wrap- -->


        <div id="wrap">
            <div class="main" id="main-no-space" >  
                <div id="main-page">
                    <div id="wrapper" class="container">
                        <div id="page-title"class= "portfolioBg">
                            <h2 style="color:#ffffff;font-weight:bold;font-size:25px;">���䤤��碌�ե�����</h2>
                        </div>
                        <div class="row">
                            <div class="span8">
                                <p>Donec odio ut arcu fringilla dictum eu eu nisl. Donec rutrum erat non arcu gravida porttitor. Nunc et magna nisi.Aliquam at erat in purus aliquet mollis. Fusce elementum velit vel dolor iaculis egestas. Maecenas ut nulla quis eros scelerisque posuere vel vitae nibh. Proin id condimentum sem. Morbi vitae dui in magna vestibulum suscipit vitae vel nunc. Integer ut risus nulla. malesuada tortor, nec scelerisque lorem mattis.</p>
                                <div id="contact-form" >
                                    <form>
                                        <fieldset>
                                            <label>Name</label>
                                            <input type="text" class="input-xlarge">
                                            <label>Email</label>
                                            <input type="text" class="input-xlarge">
                                            <label>Comment</label>
                                            <textarea rows="6" class="input-xxlarge"></textarea>
                                        </fieldset>
                                        <button type="submit" class="btn btn-a priori">Send a Message!</button>
                                    </form>
                                </div>
                            </div>
                            <div class="span4 google-map">
                                <div class="headline no-margin"><h4>Our Location</h4></div>
                                <div id="googlemaps" class="google-map google-map-full" style="height:250px"></div>
                            </div>
                            <div class="span4">
                                <div class="headline "><h4>Want to send a Message?</h4></div>
                                <div class="well">
                                    <h2>Special Message</h2>
                                    <p>We're offering great oppurtunites for Project Manager and Web Designer.</p>
                                    <button type="button" class="btn btn-a priori">Apply Now!</button>
                                </div>
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

        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/jquery.gmap.min.js"></script>
        <script type="text/javascript">
            jQuery('#googlemaps').gMap({
                maptype: 'ROADMAP',
                scrollwheel: false,
                zoom: 13,
                markers: [
                    {
                        address: '3-29-11, Hongo, Bunkyo-ku, Tokyo 113-0033, Japan', // Your Adress Here  Hongo, Bunkyo-ku, Tokyo 113-0033, Japan
                        html: '',
                        popup: false
                    }

                ]

            });
        </script>

        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3239.8115694305666!2d139.76198589999998!3d35.7062543!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c3cb829b81f%3A0x302ffee5d88c456b!2zMyBDaG9tZS0yOS0xMSBIb25nxY0sIEJ1bmt5xY0ta3UsIFTFjWt5xY0tdG8sIEphcGFu!5e0!3m2!1sen!2sbd!4v1408899447223" width="600" height="450" frameborder="0" style="border:0"></iframe> -->

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