<!DOCTYPE HTML>
<html ng-app="my-app">
    <head>
        <title>shoe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".dropdown img.flag").addClass("flagvisibility");

                $(".dropdown dt a").click(function () {
                    $(".dropdown dd ul").toggle();
                });

                $(".dropdown dd ul li a").click(function () {
                    var text = $(this).html();
                    $(".dropdown dt a span").html(text);
                    $(".dropdown dd ul").hide();
                    $("#result").html("Selected value is: " + getSelectedValue("sample"));
                });

                function getSelectedValue(id) {
                    return $("#" + id).find("dt a span.value").html();
                }

                $(document).bind('click', function (e) {
                    var $clicked = $(e.target);
                    if (!$clicked.parents().hasClass("dropdown"))
                        $(".dropdown dd ul").hide();
                });


                $("#flagSwitcher").click(function () {
                    $(".dropdown img.flag").toggleClass("flagvisibility");
                });
            });
        </script>
        <!-- start menu -->
        <link href="{{URL::asset('css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="{{URL::asset('js/megamenu.js')}}"></script>
        <script>$(document).ready(function () { $(".megamenu").megamenu(); });</script>
        <!-- end menu -->
        <!-- top scrolling -->
        <script type="text/javascript" src="{{URL::asset('js/move-top.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/easing.js')}}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1200);
                });
            });
        </script>
    </head>

    <body>
        <div class="header-top">
            <div class="wrap">
                <div class="logo">
                    <a href="/shoe_store/public/"><img src="{{URL::asset('image/logo.png')}}" alt="" /></a>
                </div>
                <div class="cssmenu">
                    <ul>
                        <li class="active"><a href="/shoe_store/public/register">Sign up & Save</a></li>
                        <li><a href="shop.html">Store Locator</a></li>
                        <li><a href="/shoe_store/public/login">My Account</a></li>
                        <li><a href="checkout.html">CheckOut</a></li>
                    </ul>
                </div>
                <ul class="icon2 sub-icon2 profile_img">
                    <li><a class="active-icon c2" href="#"> </a>
                        <ul class="sub-icon2 list">
                            <li>
                                <h3>Products</h3><a href=""></a>
                            </li>
                            <li>
                                <p>Lorem ipsum dolor sit amet, consectetuer <a href="">adipiscing elit, sed diam</a></p>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="wrap">
                <!-- start header menu -->
                <ul class="megamenu skyblue">
                    <li><a class="color1" href="#">Home</a></li>
                    <li class="grid"><a class="color2" href="#">Men</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>popular</h4>
                                        <ul>
                                            <li><a href="shop.html">new arrivals</a></li>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">women</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">login</a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>style zone</h4>
                                        <ul>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">women</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">brands</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <img src="images/nav_img.jpg" alt="" />
                            </div>
                        </div>
                    </li>
                    <li class="active grid"><a class="color4" href="#">Women</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>shop</h4>
                                        <ul>
                                            <li><a href="shop.html">new arrivals</a></li>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">women</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">brands</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>help</h4>
                                        <ul>
                                            <li><a href="shop.html">trends</a></li>
                                            <li><a href="shop.html">sale</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>my company</h4>
                                        <ul>
                                            <li><a href="shop.html">trends</a></li>
                                            <li><a href="shop.html">sale</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>account</h4>
                                        <ul>
                                            <li><a href="shop.html">login</a></li>
                                            <li><a href="shop.html">create an account</a></li>
                                            <li><a href="shop.html">create wishlist</a></li>
                                            <li><a href="shop.html">my shopping bag</a></li>
                                            <li><a href="shop.html">brands</a></li>
                                            <li><a href="shop.html">create wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>popular</h4>
                                        <ul>
                                            <li><a href="shop.html">new arrivals</a></li>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">women</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <img src="images/nav_img1.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col2"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                            </div>
                        </div>
                    </li>
                    <li><a class="color5" href="#">Kids</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>popular</h4>
                                        <ul>
                                            <li><a href="shop.html">new arrivals</a></li>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">women</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">login</a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>style zone</h4>
                                        <ul>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">women</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">brands</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <img src="images/nav_img2.jpg" alt="" />
                            </div>
                        </div>
                    </li>
                    <li><a class="color6" href="#">Sale</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>shop</h4>
                                        <ul>
                                            <li><a href="shop.html">new arrivals</a></li>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">women</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">brands</a></li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>help</h4>
                                        <ul>
                                            <li><a href="shop.html">trends</a></li>
                                            <li><a href="shop.html">sale</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>account</h4>
                                        <ul>
                                            <li><a href="shop.html">login</a></li>
                                            <li><a href="shop.html">create an account</a></li>
                                            <li><a href="shop.html">create wishlist</a></li>
                                            <li><a href="shop.html">my shopping bag</a></li>
                                            <li><a href="shop.html">brands</a></li>
                                            <li><a href="shop.html">create wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>popular</h4>
                                        <ul>
                                            <li><a href="shop.html">new arrivals</a></li>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">women</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col2"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                            </div>
                        </div>
                    </li>
                    <li><a class="color7" href="#">Customize</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>shop</h4>
                                        <ul>
                                            <li><a href="shop.html">new arrivals</a></li>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">women</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">brands</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>help</h4>
                                        <ul>
                                            <li><a href="shop.html">trends</a></li>
                                            <li><a href="shop.html">sale</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>my company</h4>
                                        <ul>
                                            <li><a href="shop.html">trends</a></li>
                                            <li><a href="shop.html">sale</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>account</h4>
                                        <ul>
                                            <li><a href="shop.html">login</a></li>
                                            <li><a href="shop.html">create an account</a></li>
                                            <li><a href="shop.html">create wishlist</a></li>
                                            <li><a href="shop.html">my shopping bag</a></li>
                                            <li><a href="shop.html">brands</a></li>
                                            <li><a href="shop.html">create wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>my company</h4>
                                        <ul>
                                            <li><a href="shop.html">trends</a></li>
                                            <li><a href="shop.html">sale</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>popular</h4>
                                        <ul>
                                            <li><a href="shop.html">new arrivals</a></li>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">women</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col2"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                            </div>
                        </div>
                    </li>
                    <li><a class="color8" href="#">Shop</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>style zone</h4>
                                        <ul>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">women</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">brands</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>popular</h4>
                                        <ul>
                                            <li><a href="shop.html">new arrivals</a></li>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">login</a></li>
                                        </ul>
                                    </div>

                                    <div class="col1"></div>
                                    <div class="col1"></div>
                                    <div class="col1"></div>
                                    <div class="col1"></div>
                                </div>
                            </div>
                    </li>
                    <li><a class="color9" href="#">Football</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>shop</h4>
                                        <ul>
                                            <li><a href="shop.html">new arrivals</a></li>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">women</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">brands</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>help</h4>
                                        <ul>
                                            <li><a href="shop.html">trends</a></li>
                                            <li><a href="shop.html">sale</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>my company</h4>
                                        <ul>
                                            <li><a href="shop.html">trends</a></li>
                                            <li><a href="shop.html">sale</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>account</h4>
                                        <ul>
                                            <li><a href="shop.html">login</a></li>
                                            <li><a href="shop.html">create an account</a></li>
                                            <li><a href="shop.html">create wishlist</a></li>
                                            <li><a href="shop.html">my shopping bag</a></li>
                                            <li><a href="shop.html">brands</a></li>
                                            <li><a href="shop.html">create wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>my company</h4>
                                        <ul>
                                            <li><a href="shop.html">trends</a></li>
                                            <li><a href="shop.html">sale</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>popular</h4>
                                        <ul>
                                            <li><a href="shop.html">new arrivals</a></li>
                                            <li><a href="shop.html">men</a></li>
                                            <li><a href="shop.html">women</a></li>
                                            <li><a href="shop.html">accessories</a></li>
                                            <li><a href="shop.html">kids</a></li>
                                            <li><a href="shop.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col2"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                            </div>
                        </div>
                    </li>
                    <li><a class="color10" href="#">Running</a></li>
                    <li><a class="color11" href="#">Originals</a></li>
                    <li><a class="color12" href="#">Basketball</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>

        @yield('content')

        <div class="footer">
            <div class="footer-top">
                <div class="wrap">
                    <div class="col_1_of_footer-top span_1_of_footer-top">
                        <ul class="f_list">
                            <li><img src="images/f_icon.png" alt="" /><span class="delivery">Free delivery on all
                                    orders over £100*</span></li>
                        </ul>
                    </div>
                    <div class="col_1_of_footer-top span_1_of_footer-top">
                        <ul class="f_list">
                            <li><img src="images/f_icon1.png" alt="" /><span class="delivery">Customer Service :<span
                                        class="orange"> (800) 000-2587 (freephone)</span></span></li>
                        </ul>
                    </div>
                    <div class="col_1_of_footer-top span_1_of_footer-top">
                        <ul class="f_list">
                            <li><img src="images/f_icon2.png" alt="" /><span class="delivery">Fast delivery & free
                                    returns</span></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="footer-middle">
                <div class="wrap">
                    <div class="section group">
                        <div class="col_1_of_middle span_1_of_middle">
                            <dl id="sample" class="dropdown">
                                <dt><a href="#"><span>Please Select a Country</span></a></dt>
                                <dd>
                                    <ul>
                                        <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span
                                                    class="value">AS</span></a></li>
                                        <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span
                                                    class="value">SL</span></a></li>
                                        <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span
                                                    class="value">NZ</span></a></li>
                                        <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span
                                                    class="value">Pk</span></a></li>
                                        <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span
                                                    class="value">UK</span></a></li>
                                        <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span
                                                    class="value">US</span></a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </div>
                        <div class="col_1_of_middle span_1_of_middle">
                            <ul class="f_list1">
                                <li><span class="m_8">Sign up for email and Get 15% off</span>
                                    <div class="search">
                                        <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Search';}">
                                        <input type="submit" value="Subscribe" id="submit" name="submit">
                                        <div id="response"> </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="wrap">
                    <div class="section group">
                        <div class="col_1_of_5 span_1_of_5">
                            <h3 class="m_9">Shop</h3>
                            <ul class="sub_list">
                                <h4 class="m_10">Men</h4>
                                <li><a href="shop.html">Men's Shoes</a></li>
                                <li><a href="shop.html">Men's Clothing</a></li>
                                <li><a href="shop.html">Men's Accessories</a></li>
                            </ul>

                        </div>
                        <div class="col_1_of_5 span_1_of_5">
                            <h3 class="m_9">Sports</h3>
                            <ul class="list1">
                                <li><a href="shop.html">Basketball</a></li>
                                <li><a href="shop.html">Football</a></li>
                                <li><a href="shop.html">Football Boots</a></li>
                                <li><a href="shop.html">Predator</a></li>
                                <li><a href="shop.html">F50</a></li>
                                <li><a href="shop.html">Football Clothing</a></li>
                            </ul>
                        </div>
                        <div class="col_1_of_5 span_1_of_5">
                            <h3 class="m_9">Originals</h3>
                            <ul class="list1">
                                <li><a href="shop.html">Originals Shoes</a></li>
                                <li><a href="shop.html">Gazelle</a></li>
                                <li><a href="shop.html">Samba</a></li>
                                <li><a href="shop.html">LA Trainer</a></li>
                                <li><a href="shop.html">Superstar</a></li>
                                <li><a href="shop.html">SL</a></li>

                            </ul>
                        </div>
                        <div class="col_1_of_5 span_1_of_5">
                            <h3 class="m_9">Product Types</h3>
                            <ul class="list1">
                                <li><a href="shop.html">Shirts</a></li>
                                <li><a href="shop.html">Pants & Tights</a></li>
                                <li><a href="shop.html">Shirts</a></li>


                            </ul>
                        </div>
                        <div class="col_1_of_5 span_1_of_5">
                            <h3 class="m_9">Support</h3>
                            <ul class="list1">
                                <li><a href="shop.html">Store finder</a></li>
                                <li><a href="shop.html">Customer Service</a></li>
                                <li><a href="shop.html">FAQ</a></li>
                                <li><a href="shop.html">Online Shop Contact Us</a></li>

                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="copy">
                <div class="wrap">
                    <p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {

                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                };


                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
        <script type="text/javascript" src="{{URL::asset('app/lib/angular.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('app/app.js')}}"></script>
    </body>

</html>
