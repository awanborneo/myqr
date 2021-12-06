 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>QR Menu | WEBClusive</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<meta name="theme-color" content="#06060a" />
	<meta name="color" content="#fff" />
	<link rel="apple-touch-icon" href="pwa/icons/icon-192x192.png" />
	<link rel="manifest" href="pwa/menumanifest.json" />
	<script src="https://kard.link/templates/restro-theme/js/jquery-3.4.1.min.js"></script>
	
<div id="pulltorefresh"></div><script src="https://kard.link/pwa/klrefresh/pulltorefresh.min.js"></script><script>PullToRefresh.init({mainElement: '#pulltorefresh', // above which element?
	onRefresh: function (done) {setTimeout(function () {done(); // end pull to refresh
	document.location.reload(true);}, 1500);}});</script>
	
<script type="text/javascript">function click (e) {if (!e)
    e = window.event;
  if ((e.type && e.type == "contextmenu") || (e.button && e.button == 2) || (e.which && e.which == 3)) {if (window.opera) window.alert(""); return false;}}
  if (document.layers)
  document.captureEvents(Event.MOUSEDOWN);
document.onmousedown = click;
document.oncontextmenu = click;
</script>

<script>document.onkeydown = function(e) {if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {return false;} else {return true;}}; $(document).keypress("u",function(e) {if (e.ctrlKey){return false;} else {return true;}});</script>

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">

    <meta name="author" content="WEBClusive">
    <meta name="keywords" content="QR Menu, Digital, Menucard, Restaurants, Hotels, Coffee Shops, Delivery, Pickup, Orders, Speed ">
    <meta name="description" content="QR Menu, is delivery & pickup digital menu, For Restaurants, Hotels & Coffee Shops. with modern appearance, easy to use, high accuracy and speed in taking orders">

    <link rel="shortcut icon" href="img/webclusive.jpg">

    <style>
        :root{--theme-color-0_01: rgba(236,27,75,0.01);--theme-color-0_02: rgba(236,27,75,0.02);--theme-color-0_03: rgba(236,27,75,0.03);--theme-color-0_04: rgba(236,27,75,0.04);--theme-color-0_05: rgba(236,27,75,0.05);--theme-color-0_06: rgba(236,27,75,0.06);--theme-color-0_07: rgba(236,27,75,0.07);--theme-color-0_08: rgba(236,27,75,0.08);--theme-color-0_09: rgba(236,27,75,0.09);--theme-color-0_1: rgba(236,27,75,0.1);--theme-color-0_11: rgba(236,27,75,0.11);--theme-color-0_12: rgba(236,27,75,0.12);--theme-color-0_13: rgba(236,27,75,0.13);--theme-color-0_14: rgba(236,27,75,0.14);--theme-color-0_15: rgba(236,27,75,0.15);--theme-color-0_16: rgba(236,27,75,0.16);--theme-color-0_17: rgba(236,27,75,0.17);--theme-color-0_18: rgba(236,27,75,0.18);--theme-color-0_19: rgba(236,27,75,0.19);--theme-color-0_2: rgba(236,27,75,0.2);--theme-color-0_21: rgba(236,27,75,0.21);--theme-color-0_22: rgba(236,27,75,0.22);--theme-color-0_23: rgba(236,27,75,0.23);--theme-color-0_24: rgba(236,27,75,0.24);--theme-color-0_25: rgba(236,27,75,0.25);--theme-color-0_26: rgba(236,27,75,0.26);--theme-color-0_27: rgba(236,27,75,0.27);--theme-color-0_28: rgba(236,27,75,0.28);--theme-color-0_29: rgba(236,27,75,0.29);--theme-color-0_3: rgba(236,27,75,0.3);--theme-color-0_31: rgba(236,27,75,0.31);--theme-color-0_32: rgba(236,27,75,0.32);--theme-color-0_33: rgba(236,27,75,0.33);--theme-color-0_34: rgba(236,27,75,0.34);--theme-color-0_35: rgba(236,27,75,0.35);--theme-color-0_36: rgba(236,27,75,0.36);--theme-color-0_37: rgba(236,27,75,0.37);--theme-color-0_38: rgba(236,27,75,0.38);--theme-color-0_39: rgba(236,27,75,0.39);--theme-color-0_4: rgba(236,27,75,0.4);--theme-color-0_41: rgba(236,27,75,0.41);--theme-color-0_42: rgba(236,27,75,0.42);--theme-color-0_43: rgba(236,27,75,0.43);--theme-color-0_44: rgba(236,27,75,0.44);--theme-color-0_45: rgba(236,27,75,0.45);--theme-color-0_46: rgba(236,27,75,0.46);--theme-color-0_47: rgba(236,27,75,0.47);--theme-color-0_48: rgba(236,27,75,0.48);--theme-color-0_49: rgba(236,27,75,0.49);--theme-color-0_5: rgba(236,27,75,0.5);--theme-color-0_51: rgba(236,27,75,0.51);--theme-color-0_52: rgba(236,27,75,0.52);--theme-color-0_53: rgba(236,27,75,0.53);--theme-color-0_54: rgba(236,27,75,0.54);--theme-color-0_55: rgba(236,27,75,0.55);--theme-color-0_56: rgba(236,27,75,0.56);--theme-color-0_57: rgba(236,27,75,0.57);--theme-color-0_58: rgba(236,27,75,0.58);--theme-color-0_59: rgba(236,27,75,0.59);--theme-color-0_6: rgba(236,27,75,0.6);--theme-color-0_61: rgba(236,27,75,0.61);--theme-color-0_62: rgba(236,27,75,0.62);--theme-color-0_63: rgba(236,27,75,0.63);--theme-color-0_64: rgba(236,27,75,0.64);--theme-color-0_65: rgba(236,27,75,0.65);--theme-color-0_66: rgba(236,27,75,0.66);--theme-color-0_67: rgba(236,27,75,0.67);--theme-color-0_68: rgba(236,27,75,0.68);--theme-color-0_69: rgba(236,27,75,0.69);--theme-color-0_7: rgba(236,27,75,0.7);--theme-color-0_71: rgba(236,27,75,0.71);--theme-color-0_72: rgba(236,27,75,0.72);--theme-color-0_73: rgba(236,27,75,0.73);--theme-color-0_74: rgba(236,27,75,0.74);--theme-color-0_75: rgba(236,27,75,0.75);--theme-color-0_76: rgba(236,27,75,0.76);--theme-color-0_77: rgba(236,27,75,0.77);--theme-color-0_78: rgba(236,27,75,0.78);--theme-color-0_79: rgba(236,27,75,0.79);--theme-color-0_8: rgba(236,27,75,0.8);--theme-color-0_81: rgba(236,27,75,0.81);--theme-color-0_82: rgba(236,27,75,0.82);--theme-color-0_83: rgba(236,27,75,0.83);--theme-color-0_84: rgba(236,27,75,0.84);--theme-color-0_85: rgba(236,27,75,0.85);--theme-color-0_86: rgba(236,27,75,0.86);--theme-color-0_87: rgba(236,27,75,0.87);--theme-color-0_88: rgba(236,27,75,0.88);--theme-color-0_89: rgba(236,27,75,0.89);--theme-color-0_9: rgba(236,27,75,0.9);--theme-color-0_91: rgba(236,27,75,0.91);--theme-color-0_92: rgba(236,27,75,0.92);--theme-color-0_93: rgba(236,27,75,0.93);--theme-color-0_94: rgba(236,27,75,0.94);--theme-color-0_95: rgba(236,27,75,0.95);--theme-color-0_96: rgba(236,27,75,0.96);--theme-color-0_97: rgba(236,27,75,0.97);--theme-color-0_98: rgba(236,27,75,0.98);--theme-color-0_99: rgba(236,27,75,0.99);--theme-color-1: rgba(236,27,75,1);}
    </style>

    <link rel="stylesheet" href="https://kard.link/includes/assets/css/icons.css">
    <link rel="stylesheet" href="https://kard.link/templates/restro-theme/css/style.css?ver=6.0.1">
    <link rel="stylesheet" href="https://kard.link/templates/restro-theme/css/color.css?ver=6.0.1">

    
</head>
<body class="ltr">
<!--[if lt IE 8]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.
</p>
<![endif]-->
<div class="single-page-header restaurant-header detail-header" data-background-image="https://kard.link/storage/restaurant/cover/161713696860638d4894764.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-page-header-inner">
                    <div class="left-side">
                        <div class="header-image"><img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="img/webclusive.jpg" alt=""></div>
                        <div class="header-details">
                            <h3>WEBClusive<span>Food and Beverage</span></h3>
                            <ul>
                                 <li><i class="icon-material-outline-access-time margin-right-5"></i> 8:30 - 23:30</li></br>
                                 <li><i class="icon-feather-phone margin-right-5"></i> <a href="tel:+6285162808811">+6285162808811</a></li>                                 <li><i class="icon-feather-phone margin-right-5"></i> <a href="tel:+628515899210">+628515899210</a></li></br>
                                <li><i class="icon-feather-map-pin margin-right-5"></i>Jl. Sunan Muria No.08 Dami, Pakis, Malang</a></li>
                            </ul>
                        </div>
                    </div>
                                        <!--div class="user-lang-wrapper">
                        <div class="btn-group bootstrap-select user-lang-switcher">
                            <button type="button" class="dropdown-toggle claslang-btn" data-toggle="dropdown">
                                <span class="filter-option pull-left">EN</span>&nbsp;
                                <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu scrollable-menu open">
                                <ul class="dropdown-menu inner">
                                    
                                        <li data-lang="english" data-code="en">
                                            <a role="menuitem" tabindex="-1" rel="alternate"
                                               href="#">English</a>
                                        </li>
                                    
                                        <li data-lang="german" data-code="de">
                                            <a role="menuitem" tabindex="-1" rel="alternate"
                                               href="#">German</a>
                                        </li>
                                    
                                        <li data-lang="العربية" data-code="ar">
                                            <a role="menuitem" tabindex="-1" rel="alternate"
                                               href="#">العربية</a>
                                        </li>
                                    
                                        <li data-lang="سۆرانی" data-code="so">
                                            <a role="menuitem" tabindex="-1" rel="alternate"
                                               href="#">سۆرانی</a>
                                        </li>
                                    
                                        <li data-lang="turkish" data-code="tr">
                                            <a role="menuitem" tabindex="-1" rel="alternate"
                                               href="#">Turkish</a>
                                        </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Content -->
        <div class="col-xl-12 content-right-offset">
            <div class="gallery-section" style="padding-top:20px">
                <div class="row-filter margin-bottom-20">
                    <!-- filter -->
                    <div class="filter-gallery">
                        <button data-filter="gallery-show-all" class="filter-button active">All Categories</button>
                        
                            <button data-filter="Grill" class="filter-button" data-catid="9">Grill</button>
                        
                            <button data-filter="Fast Foods" class="filter-button" data-catid="10">Fast Foods</button>
                        
                            <button data-filter="Pizza" class="filter-button" data-catid="11">Pizza</button>
                        
                            <button data-filter="Salad" class="filter-button" data-catid="8">Salad</button>
                        
                            <button data-filter="Dessert" class="filter-button" data-catid="12">Dessert</button>
                        
                            <button data-filter="Hot Drinks" class="filter-button" data-catid="13">Hot Drinks</button>
                        
                            <button data-filter="Cold Drinks" class="filter-button" data-catid="14">Cold Drinks</button>
                        
                    </div>
                </div>
                <!-- Boxed List -->
                <div class="boxed-list" data-category-image="Grill">
                    <div class="boxed-list-headline">
                        <h3 class="colorwhite"><i class="icon-feather-grid"></i> Grill</h3>
                    </div>
                    <div class="box-item">
                        <div class="row">   

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="66" data-name="Grilled Salmon" data-price="18,000 IDR" data-amount="18000" data-description="Grilled Salmon" data-image-url="https://kard.link/storage/menu/16171672136064036d46436.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/16171672136064036d46436.jpg" alt="Grilled Salmon">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Grilled Salmon</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">18,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="66" data-name="Grilled Salmon" data-price="18,000 IDR" data-amount="18000" data-description="Grilled Salmon" data-image-url="https://kard.link/storage/menu/16171672136064036d46436.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Grilled Salmon</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">18,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Grilled Salmon</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="67" data-name="Caesar Beef" data-price="12,000 IDR" data-amount="12000" data-description="Caesar Beef" data-image-url="https://kard.link/storage/menu/1617167328606403e0b03f2.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617167328606403e0b03f2.jpg" alt="Caesar Beef">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Caesar Beef</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">12,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="67" data-name="Caesar Beef" data-price="12,000 IDR" data-amount="12000" data-description="Caesar Beef" data-image-url="https://kard.link/storage/menu/1617167328606403e0b03f2.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Caesar Beef</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">12,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Caesar Beef</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="68" data-name="Chicken Curry" data-price="8,750 IDR" data-amount="8750" data-description="Chicken Curry" data-image-url="https://kard.link/storage/menu/1617167355606403fb53450.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617167355606403fb53450.jpg" alt="Chicken Curry">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Chicken Curry</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">8,750 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="68" data-name="Chicken Curry" data-price="8,750 IDR" data-amount="8750" data-description="Chicken Curry" data-image-url="https://kard.link/storage/menu/1617167355606403fb53450.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Chicken Curry</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">8,750 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Chicken Curry</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="69" data-name="Beef Fillet" data-price="12,500 IDR" data-amount="12500" data-description="Beef Fillet" data-image-url="https://kard.link/storage/menu/16171674076064042fb2854.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/16171674076064042fb2854.jpg" alt="Beef Fillet">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Beef Fillet</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">12,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="69" data-name="Beef Fillet" data-price="12,500 IDR" data-amount="12500" data-description="Beef Fillet" data-image-url="https://kard.link/storage/menu/16171674076064042fb2854.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Beef Fillet</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">12,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Beef Fillet</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="70" data-name="Elephant Fish" data-price="14,000 IDR" data-amount="14000" data-description="Elephant Fish" data-image-url="https://kard.link/storage/menu/1617167440606404502625d.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617167440606404502625d.jpg" alt="Elephant Fish">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Elephant Fish</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">14,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="70" data-name="Elephant Fish" data-price="14,000 IDR" data-amount="14000" data-description="Elephant Fish" data-image-url="https://kard.link/storage/menu/1617167440606404502625d.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Elephant Fish</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">14,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Elephant Fish</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="71" data-name="Mixed Grill Meal" data-price="15,000 IDR" data-amount="15000" data-description="Mixed Grill Meal" data-image-url="https://kard.link/storage/menu/161716747460640472a2750.png">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716747460640472a2750.png" alt="Mixed Grill Meal">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Mixed Grill Meal</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">15,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="71" data-name="Mixed Grill Meal" data-price="15,000 IDR" data-amount="15000" data-description="Mixed Grill Meal" data-image-url="https://kard.link/storage/menu/161716747460640472a2750.png">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Mixed Grill Meal</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">15,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Mixed Grill Meal</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="72" data-name="Tikka Meat" data-price="9,750 IDR" data-amount="9750" data-description="Tikka Meat" data-image-url="https://kard.link/storage/menu/161716750660640492ed872.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716750660640492ed872.jpg" alt="Tikka Meat">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Tikka Meat</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">9,750 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="72" data-name="Tikka Meat" data-price="9,750 IDR" data-amount="9750" data-description="Tikka Meat" data-image-url="https://kard.link/storage/menu/161716750660640492ed872.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Tikka Meat</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">9,750 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Tikka Meat</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="73" data-name="Tikka Kebab" data-price="10,500 IDR" data-amount="10500" data-description="Tikka Kebab" data-image-url="https://kard.link/storage/menu/1617167532606404ac9362a.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617167532606404ac9362a.jpg" alt="Tikka Kebab">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Tikka Kebab</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">10,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="73" data-name="Tikka Kebab" data-price="10,500 IDR" data-amount="10500" data-description="Tikka Kebab" data-image-url="https://kard.link/storage/menu/1617167532606404ac9362a.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Tikka Kebab</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">10,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Tikka Kebab</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Boxed List / End -->
                
                    <!-- Boxed List -->
                    <div class="boxed-list" data-category-image="Fast Foods">
                        <div class="boxed-list-headline">
                            <h3 class="colorwhite"><i class="icon-feather-grid"></i> Fast Foods
                                                            </h3>
                        </div>
                        <div class="box-item">
                            <div class="row">
                                
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="74" data-name="Zinger Sandwich" data-price="3,750 IDR" data-amount="3750" data-description="Zinger Sandwich" data-image-url="https://kard.link/storage/menu/1617167608606404f80cedc.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617167608606404f80cedc.jpg" alt="Zinger Sandwich">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Zinger Sandwich</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,750 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="74" data-name="Zinger Sandwich" data-price="3,750 IDR" data-amount="3750" data-description="Zinger Sandwich" data-image-url="https://kard.link/storage/menu/1617167608606404f80cedc.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Zinger Sandwich</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,750 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Zinger Sandwich</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="75" data-name="Chicken Nugget Sticks" data-price="5,500 IDR" data-amount="5500" data-description="Chicken Nugget Sticks" data-image-url="https://kard.link/storage/menu/161716765360640525c0be9.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716765360640525c0be9.jpg" alt="Chicken Nugget Sticks">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Chicken Nugget Sticks</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">5,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="75" data-name="Chicken Nugget Sticks" data-price="5,500 IDR" data-amount="5500" data-description="Chicken Nugget Sticks" data-image-url="https://kard.link/storage/menu/161716765360640525c0be9.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Chicken Nugget Sticks</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">5,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Chicken Nugget Sticks</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="76" data-name="Chicken Hamburger" data-price="4,000 IDR" data-amount="4000" data-description="Chicken Hamburger with Cheese" data-image-url="https://kard.link/storage/menu/161716768660640546af999.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716768660640546af999.jpg" alt="Chicken Hamburger">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Chicken Hamburger</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="76" data-name="Chicken Hamburger" data-price="4,000 IDR" data-amount="4000" data-description="Chicken Hamburger with Cheese" data-image-url="https://kard.link/storage/menu/161716768660640546af999.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Chicken Hamburger</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Chicken Hamburger with Cheese</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="77" data-name="Beef Fajita with Cheese" data-price="4,500 IDR" data-amount="4500" data-description="Beef Fajita with Cheese" data-image-url="https://kard.link/storage/menu/161716773260640574e2cf3.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716773260640574e2cf3.jpg" alt="Beef Fajita with Cheese">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Beef Fajita with Cheese</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="77" data-name="Beef Fajita with Cheese" data-price="4,500 IDR" data-amount="4500" data-description="Beef Fajita with Cheese" data-image-url="https://kard.link/storage/menu/161716773260640574e2cf3.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Beef Fajita with Cheese</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Beef Fajita with Cheese</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="78" data-name="Beef Hamburger" data-price="5,750 IDR" data-amount="5750" data-description="Beef Hamburger with Cheese" data-image-url="https://kard.link/storage/menu/161716776760640597f08ec.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716776760640597f08ec.jpg" alt="Beef Hamburger">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Beef Hamburger</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">5,750 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="78" data-name="Beef Hamburger" data-price="5,750 IDR" data-amount="5750" data-description="Beef Hamburger with Cheese" data-image-url="https://kard.link/storage/menu/161716776760640597f08ec.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Beef Hamburger</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">5,750 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Beef Hamburger with Cheese</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="79" data-name="Chicken Fajita with Cheese" data-price="4,000 IDR" data-amount="4000" data-description="Chicken Fajita with Cheese" data-image-url="https://kard.link/storage/menu/1617167798606405b6a4ea8.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617167798606405b6a4ea8.jpg" alt="Chicken Fajita with Cheese">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Chicken Fajita with Cheese</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="79" data-name="Chicken Fajita with Cheese" data-price="4,000 IDR" data-amount="4000" data-description="Chicken Fajita with Cheese" data-image-url="https://kard.link/storage/menu/1617167798606405b6a4ea8.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Chicken Fajita with Cheese</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Chicken Fajita with Cheese</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="80" data-name="Ciabatta Sandwich Ciabatta" data-price="4,250 IDR" data-amount="4250" data-description="Ciabatta Sandwich Ciabatta" data-image-url="https://kard.link/storage/menu/1617167826606405d244ef6.png">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617167826606405d244ef6.png" alt="Ciabatta Sandwich Ciabatta">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Ciabatta Sandwich Ciabatta</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,250 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="80" data-name="Ciabatta Sandwich Ciabatta" data-price="4,250 IDR" data-amount="4250" data-description="Ciabatta Sandwich Ciabatta" data-image-url="https://kard.link/storage/menu/1617167826606405d244ef6.png">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Ciabatta Sandwich Ciabatta</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,250 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Ciabatta Sandwich Ciabatta</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="81" data-name="Shawarma Sandwich" data-price="3,500 IDR" data-amount="3500" data-description="Shawarma Sandwich" data-image-url="https://kard.link/storage/menu/1617167852606405ec2dab3.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617167852606405ec2dab3.jpg" alt="Shawarma Sandwich">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Shawarma Sandwich</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="81" data-name="Shawarma Sandwich" data-price="3,500 IDR" data-amount="3500" data-description="Shawarma Sandwich" data-image-url="https://kard.link/storage/menu/1617167852606405ec2dab3.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Shawarma Sandwich</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Shawarma Sandwich</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Boxed List / End -->
                
                    <!-- Boxed List -->
                    <div class="boxed-list" data-category-image="Pizza">
                        <div class="boxed-list-headline">
                            <h3 class="colorwhite"><i class="icon-feather-grid"></i> Pizza
                                                            </h3>
                        </div>
                        <div class="box-item">
                            <div class="row">
                                
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="82" data-name="Vegetable Pizza" data-price="7,000 IDR" data-amount="7000" data-description="Vegetable Pizza" data-image-url="https://kard.link/storage/menu/16171682676064078ba39dd.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/16171682676064078ba39dd.jpg" alt="Vegetable Pizza">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Vegetable Pizza</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">7,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="82" data-name="Vegetable Pizza" data-price="7,000 IDR" data-amount="7000" data-description="Vegetable Pizza" data-image-url="https://kard.link/storage/menu/16171682676064078ba39dd.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Vegetable Pizza</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">7,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Vegetable Pizza</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="83" data-name="Mixed Pizza" data-price="11,000 IDR" data-amount="11000" data-description="Mixed Pizza" data-image-url="https://kard.link/storage/menu/1617168361606407e975486.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617168361606407e975486.jpg" alt="Mixed Pizza">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Mixed Pizza</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">11,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="83" data-name="Mixed Pizza" data-price="11,000 IDR" data-amount="11000" data-description="Mixed Pizza" data-image-url="https://kard.link/storage/menu/1617168361606407e975486.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Mixed Pizza</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">11,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Mixed Pizza</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="84" data-name="Chicken Ranch" data-price="9,000 IDR" data-amount="9000" data-description="Chicken Ranch" data-image-url="https://kard.link/storage/menu/161716842360640827a970d.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716842360640827a970d.jpg" alt="Chicken Ranch">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Chicken Ranch</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">9,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="84" data-name="Chicken Ranch" data-price="9,000 IDR" data-amount="9000" data-description="Chicken Ranch" data-image-url="https://kard.link/storage/menu/161716842360640827a970d.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Chicken Ranch</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">9,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Chicken Ranch</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="85" data-name="Chicken Dynamite" data-price="9,500 IDR" data-amount="9500" data-description="Chicken Dynamite" data-image-url="https://kard.link/storage/menu/16171684756064085b1aa76.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/16171684756064085b1aa76.jpg" alt="Chicken Dynamite">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Chicken Dynamite</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">9,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="85" data-name="Chicken Dynamite" data-price="9,500 IDR" data-amount="9500" data-description="Chicken Dynamite" data-image-url="https://kard.link/storage/menu/16171684756064085b1aa76.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Chicken Dynamite</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">9,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Chicken Dynamite</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="86" data-name="Pepperoni" data-price="10,750 IDR" data-amount="10750" data-description="Pepperoni" data-image-url="https://kard.link/storage/menu/161716851660640884dc43b.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716851660640884dc43b.jpg" alt="Pepperoni">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Pepperoni</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">10,750 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="86" data-name="Pepperoni" data-price="10,750 IDR" data-amount="10750" data-description="Pepperoni" data-image-url="https://kard.link/storage/menu/161716851660640884dc43b.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Pepperoni</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">10,750 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Pepperoni</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="87" data-name="Margarita" data-price="8,750 IDR" data-amount="8750" data-description="Margarita" data-image-url="https://kard.link/storage/menu/1617168555606408ab0ba08.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617168555606408ab0ba08.jpg" alt="Margarita">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Margarita</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">8,750 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="87" data-name="Margarita" data-price="8,750 IDR" data-amount="8750" data-description="Margarita" data-image-url="https://kard.link/storage/menu/1617168555606408ab0ba08.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Margarita</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">8,750 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Margarita</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="88" data-name="Mexican Pizza" data-price="12,250 IDR" data-amount="12250" data-description="Mexican Pizza" data-image-url="https://kard.link/storage/menu/1617168603606408db7fdbd.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617168603606408db7fdbd.jpg" alt="Mexican Pizza">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Mexican Pizza</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">12,250 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="88" data-name="Mexican Pizza" data-price="12,250 IDR" data-amount="12250" data-description="Mexican Pizza" data-image-url="https://kard.link/storage/menu/1617168603606408db7fdbd.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Mexican Pizza</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">12,250 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Mexican Pizza</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="89" data-name="Meat Balls" data-price="12,500 IDR" data-amount="12500" data-description="Meat Balls" data-image-url="https://kard.link/storage/menu/1617168630606408f65cd2a.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617168630606408f65cd2a.jpg" alt="Meat Balls">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Meat Balls</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">12,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="89" data-name="Meat Balls" data-price="12,500 IDR" data-amount="12500" data-description="Meat Balls" data-image-url="https://kard.link/storage/menu/1617168630606408f65cd2a.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Meat Balls</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">12,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Meat Balls</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="90" data-name="Mary Monte" data-price="10,500 IDR" data-amount="10500" data-description="Mary Monte" data-image-url="https://kard.link/storage/menu/16171686616064091557a3f.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/16171686616064091557a3f.jpg" alt="Mary Monte">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Mary Monte</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">10,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="90" data-name="Mary Monte" data-price="10,500 IDR" data-amount="10500" data-description="Mary Monte" data-image-url="https://kard.link/storage/menu/16171686616064091557a3f.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Mary Monte</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">10,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Mary Monte</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Boxed List / End -->
                
                    <!-- Boxed List -->
                    <div class="boxed-list" data-category-image="Salad">
                        <div class="boxed-list-headline">
                            <h3 class="colorwhite"><i class="icon-feather-grid"></i> Salad
                                                            </h3>
                        </div>
                        <div class="box-item">
                            <div class="row">
                                
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="59" data-name="Mozzarella Fingers" data-price="4,500 IDR" data-amount="4500" data-description="Mozzarella Fingers" data-image-url="https://kard.link/storage/menu/161713826360639257c801b.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161713826360639257c801b.jpg" alt="Mozzarella Fingers">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Mozzarella Fingers</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="59" data-name="Mozzarella Fingers" data-price="4,500 IDR" data-amount="4500" data-description="Mozzarella Fingers" data-image-url="https://kard.link/storage/menu/161713826360639257c801b.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Mozzarella Fingers</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Mozzarella Fingers</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="60" data-name="Potato Wedges" data-price="3,500 IDR" data-amount="3500" data-description="Potato Wedges" data-image-url="https://kard.link/storage/menu/16171395016063972d6b293.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/16171395016063972d6b293.jpg" alt="Potato Wedges">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Potato Wedges</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="60" data-name="Potato Wedges" data-price="3,500 IDR" data-amount="3500" data-description="Potato Wedges" data-image-url="https://kard.link/storage/menu/16171395016063972d6b293.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Potato Wedges</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Potato Wedges</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="61" data-name="Rocket Salad" data-price="3,750 IDR" data-amount="3750" data-description="Rocket Salad" data-image-url="https://kard.link/storage/menu/1617139526606397460d34d.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617139526606397460d34d.jpg" alt="Rocket Salad">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Rocket Salad</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,750 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="61" data-name="Rocket Salad" data-price="3,750 IDR" data-amount="3750" data-description="Rocket Salad" data-image-url="https://kard.link/storage/menu/1617139526606397460d34d.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Rocket Salad</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,750 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Rocket Salad</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="62" data-name="Cheese Fries" data-price="4,250 IDR" data-amount="4250" data-description="Cheese Fries" data-image-url="https://kard.link/storage/menu/16171395476063975b236e0.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/16171395476063975b236e0.jpg" alt="Cheese Fries">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Cheese Fries</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,250 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="62" data-name="Cheese Fries" data-price="4,250 IDR" data-amount="4250" data-description="Cheese Fries" data-image-url="https://kard.link/storage/menu/16171395476063975b236e0.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Cheese Fries</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,250 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Cheese Fries</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="63" data-name="Chicken Caesar Salad" data-price="5,500 IDR" data-amount="5500" data-description="Chicken Caesar Salad" data-image-url="https://kard.link/storage/menu/16171395696063977195e4f.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/16171395696063977195e4f.jpg" alt="Chicken Caesar Salad">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Chicken Caesar Salad</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">5,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="63" data-name="Chicken Caesar Salad" data-price="5,500 IDR" data-amount="5500" data-description="Chicken Caesar Salad" data-image-url="https://kard.link/storage/menu/16171395696063977195e4f.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Chicken Caesar Salad</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">5,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Chicken Caesar Salad</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="64" data-name="Roasted Potatoes" data-price="3,500 IDR" data-amount="3500" data-description="Roasted Potatoes with Herbs" data-image-url="https://kard.link/storage/menu/161713960060639790c5f1d.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161713960060639790c5f1d.jpg" alt="Roasted Potatoes">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Roasted Potatoes</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="64" data-name="Roasted Potatoes" data-price="3,500 IDR" data-amount="3500" data-description="Roasted Potatoes with Herbs" data-image-url="https://kard.link/storage/menu/161713960060639790c5f1d.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Roasted Potatoes</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Roasted Potatoes with Herbs</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="65" data-name="Mushroom Risotto Rice" data-price="3,750 IDR" data-amount="3750" data-description="Mushroom Risotto Rice" data-image-url="https://kard.link/storage/menu/1617139630606397ae47f16.png">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617139630606397ae47f16.png" alt="Mushroom Risotto Rice">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Mushroom Risotto Rice</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,750 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="65" data-name="Mushroom Risotto Rice" data-price="3,750 IDR" data-amount="3750" data-description="Mushroom Risotto Rice" data-image-url="https://kard.link/storage/menu/1617139630606397ae47f16.png">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Mushroom Risotto Rice</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,750 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Mushroom Risotto Rice</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Boxed List / End -->
                
                    <!-- Boxed List -->
                    <div class="boxed-list" data-category-image="Dessert">
                        <div class="boxed-list-headline">
                            <h3 class="colorwhite"><i class="icon-feather-grid"></i> Dessert
                                                            </h3>
                        </div>
                        <div class="box-item">
                            <div class="row">
                                
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="91" data-name="Honey Cake" data-price="3,000 IDR" data-amount="3000" data-description="Honey Cake" data-image-url="https://kard.link/storage/menu/16171686866064092e97505.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/16171686866064092e97505.jpg" alt="Honey Cake">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Honey Cake</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="91" data-name="Honey Cake" data-price="3,000 IDR" data-amount="3000" data-description="Honey Cake" data-image-url="https://kard.link/storage/menu/16171686866064092e97505.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Honey Cake</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Honey Cake</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="92" data-name="Banana Pudding" data-price="3,500 IDR" data-amount="3500" data-description="Banana Pudding" data-image-url="https://kard.link/storage/menu/16171687306064095a26a59.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/16171687306064095a26a59.jpg" alt="Banana Pudding">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Banana Pudding</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="92" data-name="Banana Pudding" data-price="3,500 IDR" data-amount="3500" data-description="Banana Pudding" data-image-url="https://kard.link/storage/menu/16171687306064095a26a59.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Banana Pudding</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Banana Pudding</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="93" data-name="Soft Konafa" data-price="4,500 IDR" data-amount="4500" data-description="Soft Konafa" data-image-url="https://kard.link/storage/menu/16171687676064097f92b91.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/16171687676064097f92b91.jpg" alt="Soft Konafa">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Soft Konafa</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="93" data-name="Soft Konafa" data-price="4,500 IDR" data-amount="4500" data-description="Soft Konafa" data-image-url="https://kard.link/storage/menu/16171687676064097f92b91.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Soft Konafa</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Soft Konafa</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="94" data-name="Konafa two Fires" data-price="2,750 IDR" data-amount="2750" data-description="Konafa Between two Fires" data-image-url="https://kard.link/storage/menu/16171687966064099c2f2e2.png">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/16171687966064099c2f2e2.png" alt="Konafa two Fires">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Konafa two Fires</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">2,750 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="94" data-name="Konafa two Fires" data-price="2,750 IDR" data-amount="2750" data-description="Konafa Between two Fires" data-image-url="https://kard.link/storage/menu/16171687966064099c2f2e2.png">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Konafa two Fires</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">2,750 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Konafa Between two Fires</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="95" data-name="Caramel Custard" data-price="2,500 IDR" data-amount="2500" data-description="Caramel Custard" data-image-url="https://kard.link/storage/menu/1617168830606409be3e917.png">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617168830606409be3e917.png" alt="Caramel Custard">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Caramel Custard</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">2,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="95" data-name="Caramel Custard" data-price="2,500 IDR" data-amount="2500" data-description="Caramel Custard" data-image-url="https://kard.link/storage/menu/1617168830606409be3e917.png">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Caramel Custard</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">2,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Caramel Custard</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="96" data-name="Baklava With Pistachio" data-price="3,750 IDR" data-amount="3750" data-description="Baklava With Pistachio" data-image-url="https://kard.link/storage/menu/1617168864606409e0dcee3.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617168864606409e0dcee3.jpg" alt="Baklava With Pistachio">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Baklava With Pistachio</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,750 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="96" data-name="Baklava With Pistachio" data-price="3,750 IDR" data-amount="3750" data-description="Baklava With Pistachio" data-image-url="https://kard.link/storage/menu/1617168864606409e0dcee3.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Baklava With Pistachio</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,750 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Baklava With Pistachio</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="97" data-name="Baklava With Ice Cream" data-price="3,250 IDR" data-amount="3250" data-description="Baklava With Ice Cream" data-image-url="https://kard.link/storage/menu/1617168889606409f9b908b.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/1617168889606409f9b908b.jpg" alt="Baklava With Ice Cream">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Baklava With Ice Cream</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,250 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="97" data-name="Baklava With Ice Cream" data-price="3,250 IDR" data-amount="3250" data-description="Baklava With Ice Cream" data-image-url="https://kard.link/storage/menu/1617168889606409f9b908b.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Baklava With Ice Cream</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,250 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Baklava With Ice Cream</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Boxed List / End -->
                
                    <!-- Boxed List -->
                    <div class="boxed-list" data-category-image="Hot Drinks">
                        <div class="boxed-list-headline">
                            <h3 class="colorwhite"><i class="icon-feather-grid"></i> Hot Drinks
                                                            </h3>
                        </div>
                        <div class="box-item">
                            <div class="row">
                                
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="98" data-name="Arabic Coffee" data-price="3,500 IDR" data-amount="3500" data-description="Arabic Coffee" data-image-url="https://kard.link/storage/menu/161716892160640a194cb29.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716892160640a194cb29.jpg" alt="Arabic Coffee">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Arabic Coffee</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="98" data-name="Arabic Coffee" data-price="3,500 IDR" data-amount="3500" data-description="Arabic Coffee" data-image-url="https://kard.link/storage/menu/161716892160640a194cb29.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Arabic Coffee</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Arabic Coffee</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="99" data-name="Turkish Coffee" data-price="3,500 IDR" data-amount="3500" data-description="Turkish Coffee" data-image-url="https://kard.link/storage/menu/161716895160640a372398a.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716895160640a372398a.jpg" alt="Turkish Coffee">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Turkish Coffee</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="99" data-name="Turkish Coffee" data-price="3,500 IDR" data-amount="3500" data-description="Turkish Coffee" data-image-url="https://kard.link/storage/menu/161716895160640a372398a.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Turkish Coffee</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Turkish Coffee</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="100" data-name="Espresso" data-price="4,000 IDR" data-amount="4000" data-description="Espresso" data-image-url="https://kard.link/storage/menu/161716899560640a6341d9c.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716899560640a6341d9c.jpg" alt="Espresso">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Espresso</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="100" data-name="Espresso" data-price="4,000 IDR" data-amount="4000" data-description="Espresso" data-image-url="https://kard.link/storage/menu/161716899560640a6341d9c.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Espresso</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Espresso</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="101" data-name="Cappuccino" data-price="4,000 IDR" data-amount="4000" data-description="Cappuccino" data-image-url="https://kard.link/storage/menu/161716902660640a827d0c8.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716902660640a827d0c8.jpg" alt="Cappuccino">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Cappuccino</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="101" data-name="Cappuccino" data-price="4,000 IDR" data-amount="4000" data-description="Cappuccino" data-image-url="https://kard.link/storage/menu/161716902660640a827d0c8.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Cappuccino</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Cappuccino</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="102" data-name="Macchiato" data-price="4,500 IDR" data-amount="4500" data-description="Macchiato" data-image-url="https://kard.link/storage/menu/161716908060640ab87e8a0.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716908060640ab87e8a0.jpg" alt="Macchiato">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Macchiato</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="102" data-name="Macchiato" data-price="4,500 IDR" data-amount="4500" data-description="Macchiato" data-image-url="https://kard.link/storage/menu/161716908060640ab87e8a0.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Macchiato</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Macchiato</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="103" data-name="Cafe Americano" data-price="3,500 IDR" data-amount="3500" data-description="Cafe Americano" data-image-url="https://kard.link/storage/menu/161716910460640ad0c95a1.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716910460640ad0c95a1.jpg" alt="Cafe Americano">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Cafe Americano</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="103" data-name="Cafe Americano" data-price="3,500 IDR" data-amount="3500" data-description="Cafe Americano" data-image-url="https://kard.link/storage/menu/161716910460640ad0c95a1.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Cafe Americano</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Cafe Americano</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="104" data-name="Toffee Net Latte" data-price="4,250 IDR" data-amount="4250" data-description="Toffee Net Latte" data-image-url="https://kard.link/storage/menu/161716912960640ae9bc43d.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716912960640ae9bc43d.jpg" alt="Toffee Net Latte">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Toffee Net Latte</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,250 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="104" data-name="Toffee Net Latte" data-price="4,250 IDR" data-amount="4250" data-description="Toffee Net Latte" data-image-url="https://kard.link/storage/menu/161716912960640ae9bc43d.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Toffee Net Latte</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,250 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Toffee Net Latte</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="105" data-name="Mocha Caramel Latte" data-price="4,250 IDR" data-amount="4250" data-description="Mocha Caramel Latte" data-image-url="https://kard.link/storage/menu/161716915760640b0551fec.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716915760640b0551fec.jpg" alt="Mocha Caramel Latte">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Mocha Caramel Latte</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,250 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="105" data-name="Mocha Caramel Latte" data-price="4,250 IDR" data-amount="4250" data-description="Mocha Caramel Latte" data-image-url="https://kard.link/storage/menu/161716915760640b0551fec.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Mocha Caramel Latte</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,250 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Mocha Caramel Latte</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="106" data-name="White Chocolate" data-price="2,500 IDR" data-amount="2500" data-description="White Chocolate" data-image-url="https://kard.link/storage/menu/161716918860640b2418a93.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716918860640b2418a93.jpg" alt="White Chocolate">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">White Chocolate</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">2,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="106" data-name="White Chocolate" data-price="2,500 IDR" data-amount="2500" data-description="White Chocolate" data-image-url="https://kard.link/storage/menu/161716918860640b2418a93.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">White Chocolate</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">2,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>White Chocolate</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="107" data-name="English Green Tea" data-price="1,500 IDR" data-amount="1500" data-description="English Green Tea" data-image-url="https://kard.link/storage/menu/161716921060640b3a73954.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716921060640b3a73954.jpg" alt="English Green Tea">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">English Green Tea</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">1,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="107" data-name="English Green Tea" data-price="1,500 IDR" data-amount="1500" data-description="English Green Tea" data-image-url="https://kard.link/storage/menu/161716921060640b3a73954.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">English Green Tea</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">1,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>English Green Tea</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="108" data-name="Moroccan Tea" data-price="1,500 IDR" data-amount="1500" data-description="Moroccan Tea" data-image-url="https://kard.link/storage/menu/161716924460640b5c35619.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716924460640b5c35619.jpg" alt="Moroccan Tea">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Moroccan Tea</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">1,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="108" data-name="Moroccan Tea" data-price="1,500 IDR" data-amount="1500" data-description="Moroccan Tea" data-image-url="https://kard.link/storage/menu/161716924460640b5c35619.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Moroccan Tea</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">1,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Moroccan Tea</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Boxed List / End -->
                
                    <!-- Boxed List -->
                    <div class="boxed-list" data-category-image="Cold Drinks">
                        <div class="boxed-list-headline">
                            <h3 class="colorwhite"><i class="icon-feather-grid"></i> Cold Drinks
                                                            </h3>
                        </div>
                        <div class="box-item">
                            <div class="row">
                                
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="109" data-name="Orange Juice" data-price="3,000 IDR" data-amount="3000" data-description="Orange Juice" data-image-url="https://kard.link/storage/menu/161716927060640b769c09f.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716927060640b769c09f.jpg" alt="Orange Juice">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Orange Juice</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">3,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="109" data-name="Orange Juice" data-price="3,000 IDR" data-amount="3000" data-description="Orange Juice" data-image-url="https://kard.link/storage/menu/161716927060640b769c09f.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Orange Juice</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">3,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Orange Juice</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="110" data-name="Strawberries" data-price="4,250 IDR" data-amount="4250" data-description="Strawberries" data-image-url="https://kard.link/storage/menu/161716931760640ba516de4.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716931760640ba516de4.jpg" alt="Strawberries">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Strawberries</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,250 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="110" data-name="Strawberries" data-price="4,250 IDR" data-amount="4250" data-description="Strawberries" data-image-url="https://kard.link/storage/menu/161716931760640ba516de4.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Strawberries</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,250 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Strawberries</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="111" data-name="Pineapple" data-price="4,500 IDR" data-amount="4500" data-description="Pineapple" data-image-url="https://kard.link/storage/menu/161716934260640bbe0893f.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716934260640bbe0893f.jpg" alt="Pineapple">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Pineapple</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="111" data-name="Pineapple" data-price="4,500 IDR" data-amount="4500" data-description="Pineapple" data-image-url="https://kard.link/storage/menu/161716934260640bbe0893f.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Pineapple</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Pineapple</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="112" data-name="Cocktail" data-price="6,000 IDR" data-amount="6000" data-description="Cocktail" data-image-url="https://kard.link/storage/menu/161716936560640bd5e6a8d.jpeg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716936560640bd5e6a8d.jpeg" alt="Cocktail">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Cocktail</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">6,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="112" data-name="Cocktail" data-price="6,000 IDR" data-amount="6000" data-description="Cocktail" data-image-url="https://kard.link/storage/menu/161716936560640bd5e6a8d.jpeg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Cocktail</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">6,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Cocktail</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="113" data-name="Banana With Milk" data-price="4,000 IDR" data-amount="4000" data-description="Banana With Milk" data-image-url="https://kard.link/storage/menu/161716941960640c0b03966.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716941960640c0b03966.jpg" alt="Banana With Milk">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Banana With Milk</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">4,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="113" data-name="Banana With Milk" data-price="4,000 IDR" data-amount="4000" data-description="Banana With Milk" data-image-url="https://kard.link/storage/menu/161716941960640c0b03966.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Banana With Milk</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">4,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Banana With Milk</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="114" data-name="Milk With Mint" data-price="2,500 IDR" data-amount="2500" data-description="Milk With Mint" data-image-url="https://kard.link/storage/menu/161716947560640c434a05b.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716947560640c434a05b.jpg" alt="Milk With Mint">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Milk With Mint</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">2,500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="114" data-name="Milk With Mint" data-price="2,500 IDR" data-amount="2500" data-description="Milk With Mint" data-image-url="https://kard.link/storage/menu/161716947560640c434a05b.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Milk With Mint</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">2,500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Milk With Mint</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="115" data-name="Soft Drinks" data-price="1,000 IDR" data-amount="1000" data-description="Soft Drinks" data-image-url="https://kard.link/storage/menu/161716950960640c651fc61.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716950960640c651fc61.jpg" alt="Soft Drinks">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Soft Drinks</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">1,000 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="115" data-name="Soft Drinks" data-price="1,000 IDR" data-amount="1000" data-description="Soft Drinks" data-image-url="https://kard.link/storage/menu/161716950960640c651fc61.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Soft Drinks</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">1,000 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Soft Drinks</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-grid-view" style="display:block" data-id="116" data-name="Water" data-price="500 IDR" data-amount="500" data-description="Water" data-image-url="https://kard.link/storage/menu/161716954060640c84007f7.jpg">
                                <div class="menu_item">
                                    <figure>
                                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://kard.link/storage/menu/161716954060640c84007f7.jpg" alt="Water">
                                    </figure>
                                    <div class="menu_detail">
                                        <h4 class="menu_post_title">
                                            <span class="menu_title">Water</span>
                                        </h4>
                                        <div class="menu_excerpt"><div class="menuprice">500 IDR</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 ajax-item-listing menu-list-view" style="display:none" data-id="116" data-name="Water" data-price="500 IDR" data-amount="500" data-description="Water" data-image-url="https://kard.link/storage/menu/161716954060640c84007f7.jpg">
                                <div class="menu_detail">
                                    <h4 class="menu_post">
                                        <span class="menu_title">Water</span>
                                        <span class="menu_dots"></span>
                                        <span class="menu_price">500 IDR</span>
                                    </h4>
                                    <div class="menu_excerpt"><div>Water</div><div class="margin-left-auto padding-left-10"><button type="button" class="button add-item-button add-extras">Add</button></div></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Boxed List / End -->
                
            </div>
        </div>
    </div>
</div>
<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->

<div id="view-order-wrapper">
    <button id="view-order-button" class="button ripple-effect">View Order</button>
</div>

<div id="your-order" class="zoom-anim-dialog mfp-hide dialog-with-tabs popup-dialog">
    <!--Tabs -->
    <div class="sign-in-form">
        <ul class="popup-tabs-nav">
            <li><a class="menu_title">My Order</a></li>
        </ul>
        <div class="popup-tabs-container">
            <!-- Tab -->
            <div class="popup-tab-content">
                <div class="your-order-content">
                    <div class="your-order-items"></div>
                    <div class="menu_detail order-total margin-bottom-20">
                        <h4 class="menu_post">
                            <span class="menu_title">Total</span>
                            <span class="menu_price"><span class="your-order-price" style="font-size: 19px;"></span></span>
                        </h4>
                    </div>
                                        <form type="post" data-id="2" id="send-order-form">
                        <div class="margin-bottom-20 ordering-type-div">
                            <small>Ordering type</small>
                            <select name="ordering-type" id="ordering-type" class="with-border selectpicker" required>
                                                                <option value="on-table">Makan di Tempat</option>
                                                                                                <option value="takeaway">Bawa Pulang</option>
                                                                                                <option value="delivery">Pesan Antar</option>
                                                            </select>
                        </div>
                                                <input name="pay_via" id="pay_via" type="hidden" value="pay_on_counter">
                                                <input type="text" class="with-border" name="name" placeholder="Nama" required>
                        <input id="table-number-field" type="number" class="with-border" name="table" placeholder="No. Kamar">
                        <textarea  class="with-border" name="message" placeholder="Catatan" rows="1"></textarea>
                        <small class="form-error"></small>
                        <button type="submit" id="submit-order-button" class="button ripple-effect margin-top-0"><i class="icon-feather-send"></i> <span>Send Order</span></button>
                    </form>
                                    </div>
                <div class="order-success-message" style="display: none">
                    <i class="icon-feather-check qr-success-icon"></i>
                    <h4>Sent Successfully</h4><br>
					<p class="owner-order-message">Thank you! Pesanan anda akan segera kami proses.</p>
					<img class="send-order-success" src="https://kard.link/storage/theme/kardlink-order.gif" alt="kardlink" style=""></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Extras Popup / End -->
<div id="add-extras" class="zoom-anim-dialog mfp-hide dialog-with-tabs popup-dialog">
    <!--Tabs -->
    <div class="sign-in-form">
        <ul class="popup-tabs-nav">
            <li><a class="menu_title"></a></li>
        </ul>
        <div class="popup-tabs-container">
            <!-- Tab -->
            <div class="popup-tab-content">
                <div class="menu_detail">
                    <h4 class="menu_post">
                        <span class="menu_title"></span>
                        <span class="menu_dots"></span>
                        <span class="menu_price"></span>
                    </h4>
                    <div class="menu_excerpt menu_desc margin-top-20"></div>
                </div>
                <div class="menu-data menu-extra-wrapper">
                    <div class="section-headline margin-bottom-12">
                        <h5>Extras</h5>
                    </div>
                    <div id="menu-extra-items">
                    </div>
                </div>
                <div class="menu-data">
                    <div class="d-flex">
                        <div class="qr-input-number">
                            <span role="button" class="qr-input-number__decrease is-disabled ripple-effect ripple-effect-dark" id="menu-order-quantity-decrease">-</span>
                            <div class="qr-input">
                                <input type="number" class="qr-input__inner with-border" value="1" id="menu-order-quantity">
                            </div>
                            <span role="button" class="qr-input-number__increase ripple-effect ripple-effect-dark" id="menu-order-quantity-increase">+</span>
                        </div>
                        <button id="add-order-button" class="button ripple-effect">Add <span id="order-price"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Extras Popup / End -->

<div class="container">
   <div class="footer-app-icon">
      <span class="header-details">Copyright © <?= date('Y')?> <strong style="color: #ffa217;">WEB</strong><strong style="color: #fd006a;">Clu</strong><strong style="color: #96006b;">sive</strong></span>
		<!-- wrapper end -->
      </div>
    </div>
</div>

<script src="https://kard.link/restaurant-templates/modern-theme/js/addapp.modal.min.js"></script>
<link rel="stylesheet" href="https://kard.link/restaurant-templates/modern-theme/css/addapp.modal.min.css" />
<!-- Footer-App-Icon / End -->

<script>
    var TOTAL_MENUS = {"66":{"id":"66","title":"Grilled Salmon","price":"18000","type":"","description":"Grilled Salmon","extras":[{"id":"112","title":"Milk With Mint","price":"2500.00"},{"id":"111","title":"Soft Drinks","price":"1000.00"}]},"67":{"id":"67","title":"Caesar Beef","price":"12000","type":"","description":"Caesar Beef","extras":[]},"68":{"id":"68","title":"Chicken Curry","price":"8750","type":"","description":"Chicken Curry","extras":[{"id":"129","title":"Milk With Mint","price":"2500.00"},{"id":"130","title":"Soft Drinks","price":"1000.00"}]},"69":{"id":"69","title":"Beef Fillet","price":"12500","type":"","description":"Beef Fillet","extras":[]},"70":{"id":"70","title":"Elephant Fish","price":"14000","type":"","description":"Elephant Fish","extras":[]},"71":{"id":"71","title":"Mixed Grill Meal","price":"15000","type":"","description":"Mixed Grill Meal","extras":[{"id":"117","title":"Milk With Mint","price":"2500.00"},{"id":"118","title":"Soft Drinks","price":"1000.00"}]},"72":{"id":"72","title":"Tikka Meat","price":"9750","type":"","description":"Tikka Meat","extras":[]},"73":{"id":"73","title":"Tikka Kebab","price":"10500","type":"","description":"Tikka Kebab","extras":[]},"74":{"id":"74","title":"Zinger Sandwich","price":"3750","type":"","description":"Zinger Sandwich","extras":[{"id":"119","title":"Milk With Mint","price":"2500.00"},{"id":"120","title":"Soft Drinks","price":"1000.00"}]},"75":{"id":"75","title":"Chicken Nugget Sticks","price":"5500","type":"","description":"Chicken Nugget Sticks","extras":[]},"76":{"id":"76","title":"Chicken Hamburger","price":"4000","type":"","description":"Chicken Hamburger with Cheese","extras":[{"id":"125","title":"Milk With Mint","price":"2500.00"},{"id":"126","title":"Soft Drinks","price":"1000.00"}]},"77":{"id":"77","title":"Beef Fajita with Cheese","price":"4500","type":"","description":"Beef Fajita with Cheese","extras":[]},"78":{"id":"78","title":"Beef Hamburger","price":"5750","type":"","description":"Beef Hamburger with Cheese","extras":[]},"79":{"id":"79","title":"Chicken Fajita with Cheese","price":"4000","type":"","description":"Chicken Fajita with Cheese","extras":[]},"80":{"id":"80","title":"Ciabatta Sandwich Ciabatta","price":"4250","type":"","description":"Ciabatta Sandwich Ciabatta","extras":[]},"81":{"id":"81","title":"Shawarma Sandwich","price":"3500","type":"","description":"Shawarma Sandwich","extras":[]},"82":{"id":"82","title":"Vegetable Pizza","price":"7000","type":"","description":"Vegetable Pizza","extras":[]},"83":{"id":"83","title":"Mixed Pizza","price":"11000","type":"","description":"Mixed Pizza","extras":[]},"84":{"id":"84","title":"Chicken Ranch","price":"9000","type":"","description":"Chicken Ranch","extras":[]},"85":{"id":"85","title":"Chicken Dynamite","price":"9500","type":"","description":"Chicken Dynamite","extras":[]},"86":{"id":"86","title":"Pepperoni","price":"10750","type":"","description":"Pepperoni","extras":[]},"87":{"id":"87","title":"Margarita","price":"8750","type":"","description":"Margarita","extras":[]},"88":{"id":"88","title":"Mexican Pizza","price":"12250","type":"","description":"Mexican Pizza","extras":[]},"89":{"id":"89","title":"Meat Balls","price":"12500","type":"","description":"Meat Balls","extras":[]},"90":{"id":"90","title":"Mary Monte","price":"10500","type":"","description":"Mary Monte","extras":[]},"59":{"id":"59","title":"Mozzarella Fingers","price":"4500","type":"","description":"Mozzarella Fingers","extras":[]},"60":{"id":"60","title":"Potato Wedges","price":"3500","type":"","description":"Potato Wedges","extras":[]},"61":{"id":"61","title":"Rocket Salad","price":"3750","type":"","description":"Rocket Salad","extras":[]},"62":{"id":"62","title":"Cheese Fries","price":"4250","type":"","description":"Cheese Fries","extras":[]},"63":{"id":"63","title":"Chicken Caesar Salad","price":"5500","type":"","description":"Chicken Caesar Salad","extras":[]},"64":{"id":"64","title":"Roasted Potatoes","price":"3500","type":"","description":"Roasted Potatoes with Herbs","extras":[]},"65":{"id":"65","title":"Mushroom Risotto Rice","price":"3750","type":"","description":"Mushroom Risotto Rice","extras":[]},"91":{"id":"91","title":"Honey Cake","price":"3000","type":"","description":"Honey Cake","extras":[]},"92":{"id":"92","title":"Banana Pudding","price":"3500","type":"","description":"Banana Pudding","extras":[]},"93":{"id":"93","title":"Soft Konafa","price":"4500","type":"","description":"Soft Konafa","extras":[]},"94":{"id":"94","title":"Konafa two Fires","price":"2750","type":"","description":"Konafa Between two Fires","extras":[]},"95":{"id":"95","title":"Caramel Custard","price":"2500","type":"","description":"Caramel Custard","extras":[]},"96":{"id":"96","title":"Baklava With Pistachio","price":"3750","type":"","description":"Baklava With Pistachio","extras":[]},"97":{"id":"97","title":"Baklava With Ice Cream","price":"3250","type":"","description":"Baklava With Ice Cream","extras":[]},"98":{"id":"98","title":"Arabic Coffee","price":"3500","type":"","description":"Arabic Coffee","extras":[]},"99":{"id":"99","title":"Turkish Coffee","price":"3500","type":"","description":"Turkish Coffee","extras":[]},"100":{"id":"100","title":"Espresso","price":"4000","type":"","description":"Espresso","extras":[]},"101":{"id":"101","title":"Cappuccino","price":"4000","type":"","description":"Cappuccino","extras":[]},"102":{"id":"102","title":"Macchiato","price":"4500","type":"","description":"Macchiato","extras":[]},"103":{"id":"103","title":"Cafe Americano","price":"3500","type":"","description":"Cafe Americano","extras":[]},"104":{"id":"104","title":"Toffee Net Latte","price":"4250","type":"","description":"Toffee Net Latte","extras":[]},"105":{"id":"105","title":"Mocha Caramel Latte","price":"4250","type":"","description":"Mocha Caramel Latte","extras":[]},"106":{"id":"106","title":"White Chocolate","price":"2500","type":"","description":"White Chocolate","extras":[]},"107":{"id":"107","title":"English Green Tea","price":"1500","type":"","description":"English Green Tea","extras":[]},"108":{"id":"108","title":"Moroccan Tea","price":"1500","type":"","description":"Moroccan Tea","extras":[]},"109":{"id":"109","title":"Orange Juice","price":"3000","type":"","description":"Orange Juice","extras":[]},"110":{"id":"110","title":"Strawberries","price":"4250","type":"","description":"Strawberries","extras":[]},"111":{"id":"111","title":"Pineapple","price":"4500","type":"","description":"Pineapple","extras":[]},"112":{"id":"112","title":"Cocktail","price":"6000","type":"","description":"Cocktail","extras":[]},"113":{"id":"113","title":"Banana With Milk","price":"4000","type":"","description":"Banana With Milk","extras":[]},"114":{"id":"114","title":"Milk With Mint","price":"2500","type":"","description":"Milk With Mint","extras":[]},"115":{"id":"115","title":"Soft Drinks","price":"1000","type":"","description":"Soft Drinks","extras":[]},"116":{"id":"116","title":"Water","price":"500","type":"","description":"Water","extras":[]}};
    var CURRENCY_SIGN = 'IDR';
    var CURRENCY_LEFT = 0;
    var CURRENCY_DECIMAL_PLACES = 0;
    var CURRENCY_DECIMAL_SEPARATOR = '.';
    var CURRENCY_THOUSAND_SEPARATOR = ',';

    var session_uname = "";
    var session_uid = "";
    var session_img = "{USERPIC}";
    // Language Var
    var LANG_ERROR_TRY_AGAIN = "Error: Please try again.";
    var LANG_LOGGED_IN_SUCCESS = "Logged in successfully. Redirecting...";
    var LANG_ERROR = "Error";
    var LANG_CANCEL = "Cancel";
    var LANG_DELETED = "Deleted";
    var LANG_ARE_YOU_SURE = "Are you sure?";
    var LANG_YOU_WANT_DELETE = "{LANG_YOU_WANT_DELETE}";
    var LANG_YES_DELETE = "Yes, delete it";
    var LANG_SHOW = "Show";
    var LANG_HIDE = "Hide";
    var LANG_HIDDEN = "Hidden";

    var LANG_TYPE_A_MESSAGE = "Type a message";
    var LANG_ADD_FILES_TEXT = "{LANG_ADD_FILES_TEXT}";
    var LANG_JUST_NOW = "Just now";
    var LANG_PREVIEW = "Preview";
    var LANG_SEND = "Send";
    var LANG_FILENAME = "{LANG_FILENAME}";
    var LANG_STATUS = "Status";
    var LANG_SIZE = "Size";
    var LANG_DRAG_FILES_HERE = "{LANG_DRAG_FILES_HERE}";
    var LANG_STOP_UPLOAD = "{LANG_STOP_UPLOAD}";
    var LANG_ADD_FILES = "{LANG_ADD_FILES}";

    var LANG_ADD = "Add";
    var LANG_PAY_NOW = "Pay Now";
    var LANG_SEND_ORDER = "Send Order";
</script>

<script type="text/javascript" src="https://kard.link/templates/restro-theme/js/chosen.min.js"></script>
<script src="https://kard.link/templates/restro-theme/js/jquery.lazyload.min.js"></script>
<script src="https://kard.link/templates/restro-theme/js/tippy.all.min.js"></script>
<script src="https://kard.link/templates/restro-theme/js/simplebar.min.js"></script>
<script src="https://kard.link/templates/restro-theme/js/bootstrap-slider.min.js"></script>
<script src="https://kard.link/templates/restro-theme/js/bootstrap-select.min.js"></script>
<script src="https://kard.link/templates/restro-theme/js/snackbar.js"></script>
<script src="https://kard.link/templates/restro-theme/js/counterup.min.js"></script>
<script src="https://kard.link/templates/restro-theme/js/magnific-popup.min.js"></script>
<script src="https://kard.link/templates/restro-theme/js/slick.min.js"></script>
<script src="https://kard.link/templates/restro-theme/js/jquery.cookie.min.js"></script>
<script src="https://kard.link/templates/restro-theme/js/user-ajax.js?ver=6.0.1"></script>
<script src="https://kard.link/templates/restro-theme/js/custom.js?ver=6.0.1"></script>
<script src="https://kard.link/templates/restro-theme/js/restaurant.js?ver=6.0.1"></script>
</body>
</html> 