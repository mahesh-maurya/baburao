<!DOCTYPE html>
<html lang="">
<?php $pop=array();?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Local Banya | Landing Page</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/less/app.css">

    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <script src="bower_components/jquery/main.js"></script>
    <script src="bower_components/jquery/jquery-ui-1.9.0.custom.min.js"></script>
    <!--    <script src="bower_components/jquery/hamburger-menu.js"></script>-->
    <script src="bower_components/jquery/snap.svg-min.js"></script>
    <script src="bower_components/jquery/jquery.mCustomScrollbar.js"></script>

    <!--
    <link rel="stylesheet" href="bower_components/less/font-awesome.css">
    <link rel="stylesheet" href="bower_components/less/font-awesome.min.css">
-->
    <link rel="stylesheet" href="bower_components/less/animate.css">
    <link rel="stylesheet" href="bower_components/less/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <!--    <link rel="stylesheet/less" href="bower_components/less/styles.less">-->
    <link rel="stylesheet" href="bower_components/less/styles.css">
    <!--    <script src="bower_components/less/dist/less.min.js" type="text/javascript"></script>-->

    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        
    <![endif]-->
    <style type='text/css'>
        /*This will work for chrome */
        /*This will work for firefox*/
        
        @-moz-document url-prefix() {
            .fot-txt {
                padding: 56px 0px 30px;
            }
            .sco-set {
                display: flex;
                display: -webkit-box;
            }
        }
    </style>
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1589474464632854";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="section head">
        <div class="head-set">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="lf-head">
                            <img src="bower_components/img/head.png" class="img-responsive">
                        </div>
                        <!--
                        <div class="col-md-12">
                            <div class="head-left">
                                <img class="img-left" src="bower_components/img/obj1.png">
                                <img class="img-right" src="bower_components/img/cap.png">
                                <h2>WE ARE TURNING<span>3</span></h2>
                                <h4>and we are celebrating it with</h4>
                                <h1>#threemuch</h1>
                                <ul>
                                    <li>contest</li>
                                    <li>surprises</li>
                                    <li>discounts</li>
                                    <li>and more</li>
                                </ul>
                                <p>#ThreeMuch,because doing ‘Too Much’ is way too mainstream.</p>
                                <img class="im-man" src="bower_components/img/man.png">
                            </div>
                        </div>
-->
                        <!--
                        <div class="col-md-4">
                            <div class="left-img">
                                
                            </div>
                        </div>
-->
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="head-right">
                            <img src="bower_components/img/obj3.png" style="position: absolute;top:-15px;">
                            <div class="text-right">
                                <div class="rgh-txt">
                                    <div class="nw">
                                        <p>Register for events and offer details</p>
                                        <input class="in-right newsletteremail" type="text" placeholder="Enter email address">
                                        <button class="btn-right newslettersubmit" type="submit">submit</button>
                                    </div>
                                    <div class="thn">
                                        <h3>thank you</h3>
                                        <p>for your subscription</p>
                                    </div>
                                </div>
                                <div class="imgs-right">
                                    <!--
                                    <img class="obj-cl" src="bower_components/img/obj2.png">
                                    <br>
-->
                                    <a href="http://localbanya.com/" target="_blank">
                                        <img class="log-cl" src="bower_components/img/logo.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="head-mid">
            <div class="container">
                <div class="row">
                    <a href="https://twitter.com/LocalBanya" target="_blank">
                        <div class="col-md-12">
                            <div class="mid-left">
                                <p>We will turn your every tweet with #ThreeMuch into a chocolate for a child at Unity Foundation.</p>
<!--                                                                <p>We equate the no. of times you tweet with #ThreeMuch, to the no. of chocolates for an NGO.</p>-->
                                <!--                                <p>The times you tweet using #ThreeMuch, we equate them into number of chocolates for an NGO.</p>-->
                            </div>
                        </div>
                    </a>
                    <!--
                    <div class="col-md-4">
                        <div class="mid-right">
                            <p>Tweet count:</p>
                            <a href="https://twitter.com/LocalBanya">
                                <ul>
                                    <li>2</li>
                                    <li>0</li>
                                    <li>7</li>
                                    <li>4</li>
                                    <li>3</li>
                                </ul>
                            </a>
                        </div>
                    </div>
-->
                </div>
            </div>
        </div>
        <div class="head-end">
            <div class="container">
                <div class="row">
                    <div class="rw-head">
                        <div class="col-md-3 col-xs-6 cl3 col-sm-3">
                            <div class="roll">
                                <p>visit me again</p>
                                <img src="bower_components/img/roll.png">
                            </div>
                            <a href="http://www.localbanya.com/featured?isCampaign=true" target="_blank">
                                <div class="cl1 cl2">
                                    <img src="bower_components/img/buy1.png" class="img-responsive">
                                </div>
                            </a>
                            <div class="cl4">
                                <p>9th May - 14th May</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-3">
                            <!--
                                <div class="roll">
                                    <p>visit me again</p>
                                    <img src="bower_components/img/roll.png">
                                </div>
-->
                            <a href="http://www.localbanya.com/featured?isCampaign=true" target="_blank">
                                <div class="cl1">
                                    <!--                                <img src="bower_components/img/coupan.png" class="img-responsive">-->
                                    <!--                                <img src="bower_components/img/coupan.png" class="img-responsive">-->
                                    <img src="bower_components/img/buy.png" class="img-responsive">
                                </div>
                                <div class="cl5">
                                    <p>15th May - 21st May</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-xs-6 col-sm-3 cl3">

                            <div class="roll">
                                <p>visit me again</p>
                                <img src="bower_components/img/roll.png">
                            </div>


                            <a href="http://www.localbanya.com/featured?isCampaign=true" target="_blank">
                                <div class="cl1 cl2">
                                    <!--                                <img src="bower_components/img/discount.png" class="img-responsive">-->
                                    <img src="bower_components/img/buy1.png" class="img-responsive">
                                </div>
                            </a>
                            <div class="cl4">
                                <p>22nd May - 28th May</p>
                            </div>

                        </div>

                        <div class="col-md-3 col-xs-6 col-sm-3 cl3">
                            <div class="roll">
                                <p>visit me again</p>
                                <img src="bower_components/img/roll.png">
                            </div>
                            <a href="http://www.localbanya.com/featured?isCampaign=true" target="_blank">
                                <div class="cl1 cl2">
                                    <!--                                <img src="bower_components/img/shop.png" class="img-responsive">-->
                                    <img src="bower_components/img/buy1.png" class="img-responsive">
                                </div>
                            </a>
                            <div class="cl4">
                                <p>29th May - 8th June</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="rg-tc" style="  padding-top: 30px;">
                            <p>T & C Apply.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="section mid">
        <div class="text-center livefeedhead">
            <p>Live Feeds</p>
        </div>
        <div class="row rw" style="margin-right:0px;">
            <div class="col-md-4 col-xs-4 afterlocal">
                <img src="bower_components/img/banya.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-8 col-xs-8 back-set"></div>
        </div>
        <div class="container">
            <div class="row scocial-set">
                <div class="col-md-4 col-sm-4">
                    <div class="fb">
                        <a href=" https://www.facebook.com/localbanya" target="_blank"><i class="fa fa-facebook"></i></a>
                        <div class="fb-st">
                            <div class="fb-page" data-href="https://www.facebook.com/localbanya" data-width="200" data-height="360" data-hide-cover="false" data-show-facepile="false" data-show-posts="true">
                                <div class="fb-xfbml-parse-ignore">
                                    <blockquote cite="https://www.facebook.com/localbanya"><a href="https://www.facebook.com/localbanya">Local Banya</a>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">

                    <div class="twit">
                        <a href=" https://twitter.com/LocalBanya" target="_blank"> <i class="fa fa-twitter"></i>
                        </a>
                        <div class="tw-st">
                            <a class="twitter-timeline" href="https://twitter.com/LocalBanya" data-widget-id="594025626274648064">Tweets by @LocalBanya</a>
                            <script>
                                ! function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0],
                                        p = /^http:/.test(d.location) ? 'http' : 'https';
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = p + "://platform.twitter.com/widgets.js";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, "script", "twitter-wjs");
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="insta">

                        <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                        <div class="in-st" style="height: 365px;overflow-y: scroll;">
                            <iframe src="//instansive.com/widgets/ba0ad9aad53001654f6fac3da0abca67b15d2329.html" id="instansive_ba0ad9aad5" name="instansive_ba0ad9aad5" scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="section end">
            <div class="cal-set">
                <div class="text-center livefeedheads">
                    <p>EVENTS CALENDAR</p>
                </div>
                <div class="row rws" style="margin-right:0px;">
                    <div class="col-md-8 col-xs-8 back-set"></div>
                    <div class="col-md-4 col-xs-4 afterlocals">
                        <img src="bower_components/img/banya2.png" alt="" class="img-responsive">
                    </div>

                </div>
                <div class="cal-cont">
                    <div class="container">
                        <div class="row bor">
                            <div class="col-xs-3">
                                <div class="cal-left">
                                    <h3>
                               date
                           </h3>

                                </div>
                            </div>
                            <div class="col-xs-5">
                                <h3>What's happening</h3>

                            </div>
                            <div class="col-xs-4">
                                <h3 class="text-center">Where</h3>


                            </div>
                        </div>
                        <!--                        -->
                        <div class="row">
                            <div class="list-set scroll">
                                <!--
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            6th May
                                        </div>
                                    </div>

                                    <div class="col-xs-5">

                                        Surprises Round the Corner!
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>


                                    </div>
                                </div>
-->
                                <!--
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            6th May
                                        </div>
                                    </div>

                                    <div class="col-xs-5">

                                        #ThreeMuch
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">

                                            <li style="opacity:0;">
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>

                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>

                                            <li style="opacity:0;"> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
-->


                                <!--
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            8th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        Happy Birthday Localbanya!
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
-->
                                <!--
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            8th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #ContestAlert
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
-->
                                <!--
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            8th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #ThreeMuch
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">

                                            <li style="opacity:0;">
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>

                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>

                                            <li style="opacity:0;"> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
-->
                                <!--
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            9th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #NewWeeklyOffer
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
-->
                                <!--
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            9th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        Order to receive a #FreeBite!
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
-->
                                <!--
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            10th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #ContestAlert Mother's Day
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
-->
<!--
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            11th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #ContestAlert
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
-->
<!--

                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            13th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #ContestAlert
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
-->
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            15th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #ContestAlert
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            15th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #NewWeeklyOffer
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            16th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        Order to receive a #FreeBite!
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            18th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #ContestAlert
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            21st May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #ContestAlert
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            22nd May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #NewWeeklyOffer!
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            23rd May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        Order to receive a #FreeBite!
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            25th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #ContestAlert
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            27th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #ContestAlert
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            29th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #NewWeeklyOffer
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            30th May
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        Order to receive a #FreeBite!
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            1st June
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #ContestAlert
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            4th June
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        #ContestAlert
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cal-mk">
                                    <div class="col-xs-3">
                                        <div class="cal-left">
                                            6th June
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        Order to receive a #FreeBite!
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <ul class="sco-set">
                                            <li>
                                                <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="rg-tc">
                                    <p>T & C Apply.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="df">
            <div class="head-foot">
                <div class="dff">
                    <div class="text-center livefeedhead">
                        <p>Return gifts</p>
                    </div>
                    <div class="row rw" style="margin-right:0px;">
                        <div class="col-md-4 col-xs-4 afterlocal">
                            <img src="bower_components/img/banya.png" alt="">
                        </div>
                        <div class="col-md-8 col-xs-8 back-set"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fot-txt">
                                <p>A sweet surprise for the first 150 orders of the day,</p>
                                <p>specially made by your local food magicians.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slic-set">
                                <div class="slider js_multislides multislides">
                                    <div class="frame js_frame">
                                        <?php $pop=array();?>
                                        <div class="whit-box">
                                            <img class="wt-img" src="bower_components/img/close.png">
                                            <div class="wht-cont">
                                                <h4 class="whiteboxname">amisha arora</h4>
                                                <p class="whiteboxcontent"></p>
                                                <a href="http://www.localbanya.com/" target="_blank">
                                                    <p class="p-wht">Order now</p>
                                                </a>
                                            </div>

                                        </div>
                                        <ul class="slides js_slides">


                                            <!--
                                            <li class="js_slide">
                                                <div class="prof-set">
                                                    <h4 class="profname">Dimpy Agarwal</h4>
                                                    <p>Bake A Wish</p>
                                                    <p class="bodyofprof">One solution to all your dessert cravings !<br>
Each cake is designed just for you & to be perfect for your celebration. <br>We customize as per your wish.
</p>
                                                    <img src="bower_components/img/dimpy.png" class="img-responsive">

                                                    <p style="line-height: 20px;">Mumbai</p>
                                                    <h5 class="date">  9th May, 2015  </h5>
                                                </div>

                                            </li>     
-->
                                            <!--                                            <li class="js_slide">-->
                                            <!--
                                                <div class="prof-set">
                                                    <h4 class="profname">Chef Rishika Bhatia</h4>
                                                    <p style="line-height:100%;  margin-top: 15px;white-space: pre-wrap;">Chocoholic- chocolates and more...</p>
                                                    <p class="bodyofprof">Chocoholic offers a wide range of products which are delicately made by hand while using only the finest quality ingredients. They are apt for any time you have a desire for something sweet to bite your teeth into as well as when you wish to celebrate any occasion you choose.
                                                    </p>
                                                    <img src="bower_components/img/rishika.png" class="img-responsive">

                                                    <p style="line-height: 20px;">Mumbai</p>
                                                    <h5 class="date">  9th May, 2015  </h5>
                                                </div>
-->

                                            <!--                                            </li>-->
                                            <li class="js_slide">
                                                <div class="prof-set">
                                                    <h4 class="profname">Chef Amal Farooque</h4>
                                                    <p>SugarOverDose</p>
                                                    <p class="bodyofprof">Chef Amal Farooque Owner/Creator at SugarOverdose, originally from a financial background, decided to follow her heart and turn her love for desserts and flavours into business. She's a self taught Chef who is not afraid to give flavours a bold twist. Always creating and looking for newer flavour combination which involve use of best quality ingredients. Even though the kitchen has grown when it comes to staff, Amal still continues to works in her own kitchen and still dishes out most of the yum desserts you will eat.
                                                        <br>The House of SugarOverdose is a firm believer of the celebration of MADNESS! They do desserts for all occasions, including DIVORCE!' As they say - Let the woes n worries SOD off!
                                                    </p>
                                                    <img src="bower_components/img/amal.png" class="img-responsive">


                                                    <p style="line-height: 20px;">Mumbai</p>
                                                    <h5 class="date">  16th May, 2015  </h5>
                                                </div>
                                            </li>
                                            <li class="js_slide">
                                                <div class="prof-set">
                                                    <h4 class="profname">Chef Nishita Kamdar</h4>
                                                    <p>Jar Designs</p>
                                                    <p class="bodyofprof">JAR Designs, a home bakery in Mumbai, baking some of the freshest and most delicious eggless cakes and desserts in a Jar! They love to experiment with unique flavours and give their customers desserts they have never tried before!!</p>
                                                    <img src="bower_components/img/nitisha.png" class="img-responsive">


                                                    <p style="line-height: 20px;">Mumbai</p>
                                                    <h5 class="date">  23rd May, 2015  </h5>
                                                </div>
                                            </li>
                                            <li class="js_slide">
                                                <div class="prof-set">
                                                    <h4 class="profname">Chef Dimpy Agarwal & <br> Dimple Parekh</h4>
                                                    <p>Bake A Wish</p>
                                                    <p class="bodyofprof">One solution to all your dessert cravings !
                                                        <br>Each cake is designed just for you & to be perfect for your celebration.
                                                        <br>Bake A Wish customize as per your wish.
                                                    </p>
                                                    <img src="bower_components/img/dimpy.png" class="img-responsive">


                                                    <p style="line-height: 20px;">Mumbai</p>
                                                    <h5 class="date">  30th May, 2015  </h5>

                                                </div>
                                            </li>
                                            <li class="js_slide">
                                                <div class="prof-set">
                                                    <h4 class="profname">Chef Simran Talreja</h4>
                                                    <p>Sucr&eacute;</p>
                                                    <p class="bodyofprof">Sucré, owned & run by Simran Talreja is true expression with confection. A home-brand focused on offering it's clients tasteful quality products. </p>
                                                    <img src="bower_components/img/dimpy2.png" class="img-responsive">


                                                    <p style="line-height: 20px;">Mumbai</p>
                                                    <h5 class="date">  6th June, 2015  </h5>
                                                </div>


                                                <!--
                                                    <li class="js_slide">
                                                        <div class="prof-set">
                                                            <h4 class="profname">Amal Farooque</h4>
                                                            <p>JAR Design</p>
                                                            <p class="bodyofprof">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At labore perspiciatis quasi cumque. Et rerum, recusandae labore officiis, impedit earum vel eligendi mollitia commodi voluptates dolorem, sunt quam deleniti alias.</p>
                                                            <img src="bower_components/img/amal.png" class="img-responsive">

                                                            <p style="    line-height: 36px;">delhi</p>
                                                        </div>
                                                    </li>
                                                    <li class="js_slide">
                                                        <div class="prof-set">
                                                            <h4 class="profname">Sumira Roy</h4>
                                                            <p>JAR Design</p>
                                                            <p class="bodyofprof">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At labore perspiciatis quasi cumque. Et rerum, recusandae labore officiis, impedit earum vel eligendi mollitia commodi voluptates dolorem, sunt quam deleniti alias.</p>
                                                            <img src="bower_components/img/nita.png" class="img-responsive">

                                                            <p style="   line-height: 36px;">mumbai</p>
                                                        </div>
                                                    </li>
                                                    <li class="js_slide">
                                                        <div class="prof-set">
                                                            <h4 class="profname">Gavin Birer</h4>
                                                            <p>JAR Design</p>
                                                            <p class="bodyofprof">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At labore perspiciatis quasi cumque. Et rerum, recusandae labore officiis, impedit earum vel eligendi mollitia commodi voluptates dolorem, sunt quam deleniti alias.</p>
                                                            <img src="bower_components/img/govind.png" class="img-responsive">

                                                            <p style="   line-height: 36px;">chennai</p>
                                                        </div>
                                                    </li>
-->

                                        </ul>
                                    </div>

                                    <span class="js_prev prev">
                   <img src="bower_components/img/left.png" class="img-responsive">
                </span>

                                    <span class="js_next next">
                    <img src="bower_components/img/right.png" class="img-responsive">
                </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="foo-txt">
                    <div class="col-md-3 col-xs-4 text-center">
                        <div class="">
                            <h6>copyright 2015 @ localbanya</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-4 text-center">
                        <a href="doc/termsandcondition.pdf" target="_blank">
                            <h6>terms and conditions</h6>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-4 text-center">
                        <a href="http://www.localbanya.com/" target="_blank"><h6>www.localbanya.com</h6></a>
                    </div>
                    <div class="col-md-3 col-xs-12 ">
                        <div class="li-soc">
                            <ul>
                                <li> <a href="https://twitter.com/LocalBanya" target="_blank"><i class="fa fa-twitter">
                                        </i></a>
                                </li>
                                <li> <a href="https://www.facebook.com/LocalBanya" target="_blank"><i class="fa fa-facebook">
                                        </i></a>
                                </li>

                                <li> <a href="https://instagram.com/localbanyadotcom" target="_blank"><i class="fa fa-instagram">
                                        </i></a>
                                </li>
                                <li><a href="https://plus.google.com/108132928203762919323/about" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/company/localbanya?trk=nav_account_sub_nav_company_admin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li><a href="https://www.pinterest.com/localbanya/" target="_blank"><i class="fa fa-pinterest-p"></i><a/></li>
<!--
                                    <li><a href=""><i class="fa fa-youtube"></i></a>
                                </li>
                                -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="bower_components/jquery/jquery.lory.min.js"></script>
        <script src="bower_components/jquery/classie.js"></script>
        <!--    <script src="bower_components/jquery/main4.js"></script>-->
        <script src="bower_components/jquery/jquery.mCustomScrollbar.js"></script>

        <script src="//instansive.com/widget/js/instansive.js"></script>




        <script>
            'use strict';

            document.addEventListener('DOMContentLoaded', function () {
                var multiSlides = document.querySelector('.js_multislides');

                lory(multiSlides, {
                    //                    infinite: 4,
                    slidesToScroll: 4
                });
            });
        </script>
        <script>
            (function ($) {
                $(window).load(function () {

                    $(".scroll").mCustomScrollbar({
                        autoHideScrollbar: false,
                        theme: "rounded"
                    });

                });
            })(jQuery);
        </script>

        <script>
            $(document).ready(function () {

                $(".prof-set").click(function () {
                    //                    console.log($pop);
                    $(".whit-box").show(500);
                    //        $(".round4").show();
                });

                $(".wt-img").click(function () {
                    $(".whit-box").hide(500);
                    //        $(".round4").show();
                });



                $(".whit-box").hide();
                $('a[href^="#"]').on('click', function (e) {
                    e.preventDefault();

                    var target = this.hash;
                    var $target = $(target);

                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top
                    }, 900, 'swing', function () {
                        window.location.hash = target;
                    });
                });
            });
        </script>
        <script>
            $(document).ready(
                function () {
                    if ($.browser.mozilla == true && $.browser.version < '1.9') {
                        $('.fot-txt').css('padding', '69px 0px 16px;');
                    }
                }
            );
        </script>


</body>

</html>