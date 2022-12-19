<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shockwaves
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,600;1,300;1,400;1,500;1,600&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <script async>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5HFZ9ND');</script>
    <!-- End Google Tag Manager -->


    <script defer id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="ddb17932-0138-4ac1-8b52-69ecfa2cac99" data-blockingmode="auto" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header>
        <div class="container">
            <div class="tabs">
                <div class="tab">
                    <a href="https://moonsociety.rocks/" target="_blank" rel="nofollow">
                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                             viewBox="0 0 190 48.4" style="enable-background:new 0 0 190 48.4;" xml:space="preserve" class="mooonSociety">
                    <style type="text/css">
                        .st0{enable-background:new;}
                        .st1{fill:#F9F9F9;}
                    </style>
                            <g id="Group_10200" transform="translate(-1103 -444.199)">
                                <g class="st0">
                                    <path class="st1" d="M1118.6,466.7v5.5h-1.3v-5.4c0-2-1-3-2.7-3c-1.9,0-3.2,1.3-3.2,3.4v5h-1.3v-5.4c0-2-1-3-2.7-3
                                c-1.9,0-3.2,1.3-3.2,3.4v5h-1.3v-9.5h1.2v1.7c0.7-1.1,1.9-1.8,3.5-1.8c1.6,0,2.8,0.7,3.4,2c0.7-1.2,2-2,3.7-2
                                C1117.1,462.6,1118.6,463.9,1118.6,466.7z"/>
                                    <path class="st1" d="M1130.4,467.8h-7.9c0.1,2,1.7,3.3,3.7,3.3c1.2,0,2.2-0.4,2.9-1.2l0.7,0.8c-0.8,1-2.2,1.5-3.7,1.5
                                c-3,0-5-2-5-4.8s2-4.8,4.6-4.8c2.7,0,4.6,2,4.6,4.8C1130.4,467.5,1130.4,467.7,1130.4,467.8z M1122.5,466.9h6.7
                                c-0.2-1.9-1.5-3.2-3.4-3.2C1124,463.7,1122.6,465,1122.5,466.9z"/>
                                    <path class="st1" d="M1148.6,466.7v5.5h-1.3v-5.4c0-2-1-3-2.7-3c-1.9,0-3.2,1.3-3.2,3.4v5h-1.3v-5.4c0-2-1-3-2.7-3
                                c-1.9,0-3.2,1.3-3.2,3.4v5h-1.3v-9.5h1.2v1.7c0.7-1.1,1.9-1.8,3.5-1.8c1.6,0,2.8,0.7,3.4,2c0.7-1.2,2-2,3.7-2
                                C1147.1,462.6,1148.6,463.9,1148.6,466.7z"/>
                                    <path class="st1" d="M1161.7,467.4c0,2.9-2,4.8-4.7,4.8c-1.6,0-2.9-0.7-3.7-2v1.9h-1.2v-13.4h1.3v5.7c0.8-1.2,2.1-1.9,3.6-1.9
                                C1159.7,462.6,1161.7,464.6,1161.7,467.4z M1160.4,467.4c0-2.2-1.5-3.7-3.5-3.7c-2,0-3.5,1.5-3.5,3.7s1.5,3.7,3.5,3.7
                                C1158.9,471.1,1160.4,469.6,1160.4,467.4z"/>
                                    <path class="st1" d="M1172.6,467.8h-7.9c0.1,2,1.7,3.3,3.7,3.3c1.2,0,2.2-0.4,2.9-1.2l0.7,0.8c-0.8,1-2.2,1.5-3.7,1.5
                                c-3,0-5-2-5-4.8s2-4.8,4.6-4.8c2.7,0,4.6,2,4.6,4.8C1172.6,467.5,1172.6,467.7,1172.6,467.8z M1164.6,466.9h6.7
                                c-0.2-1.9-1.5-3.2-3.4-3.2C1166.1,463.7,1164.8,465,1164.6,466.9z"/>
                                    <path class="st1" d="M1180,462.6v1.2c-0.1,0-0.2,0-0.3,0c-2,0-3.2,1.3-3.2,3.5v4.8h-1.3v-9.5h1.2v1.9
                                C1177,463.3,1178.2,462.6,1180,462.6z"/>
                                    <path class="st1" d="M1186.2,467.4c0-2.8,2.1-4.8,4.8-4.8c2.8,0,4.8,2,4.8,4.8s-2,4.8-4.8,4.8
                                C1188.2,472.2,1186.2,470.2,1186.2,467.4z M1194.5,467.4c0-2.2-1.5-3.7-3.5-3.7s-3.5,1.5-3.5,3.7s1.5,3.7,3.5,3.7
                                S1194.5,469.6,1194.5,467.4z"/>
                                    <path class="st1" d="M1199.9,461.6v1.1h2.9v1.1h-2.9v8.4h-1.3v-8.4h-1.7v-1.1h1.7v-1.2c0-1.7,1-2.8,2.9-2.8c0.7,0,1.4,0.2,1.9,0.6
                                l-0.4,1c-0.4-0.3-0.9-0.5-1.4-0.5C1200.4,459.8,1199.9,460.4,1199.9,461.6z"/>
                                </g>
                                <g id="Group_9958" transform="translate(1216.635 444.199)">
                                    <g id="Group_9953" transform="translate(60.129 11.112)">
                                        <g id="Path_3692">
                                            <path class="st1 logo-hover" d="M15.2,0v17l-3-2.3L1.3,6.3V17h-3v-17l3,2.3l10.9,8.4V0L15.2,0z"/>
                                        </g>
                                    </g>
                                    <g id="Group_9954" transform="translate(34.38 11.112)">
                                        <g id="Path_3693">
                                            <path class="st1 logo-hover" d="M15.2,8.5c0,4.7-3.8,8.5-8.5,8.5s-8.5-3.8-8.5-8.5C-1.8,3.8,2,0,6.7,0C11.4,0,15.2,3.8,15.2,8.5z M12.2,8.5
                                        c0-3-2.4-5.5-5.5-5.5S1.3,5.5,1.3,8.5S3.7,14,6.7,14C9.7,14,12.2,11.5,12.2,8.5L12.2,8.5z"/>
                                        </g>
                                    </g>
                                    <g id="Group_9955" transform="translate(0 11.112)">
                                        <g id="Path_3694">
                                            <path class="st1 logo-hover" d="M15.2,0v17h-3V6.2l-3,2.3l-2.5,1.9L4.2,8.5l-3-2.3V17h-3V0l3,2.3l5.5,4.2l5.5-4.2L15.2,0z"/>
                                        </g>
                                    </g>
                                    <g id="Group_9956" transform="translate(0.268 42.898)">
                                        <g id="Path_3695">
                                            <path class="st1 " d="M-1.8,4.9l0.3-0.8c0.5,0.4,1.1,0.6,1.8,0.6c0.8,0,1.2-0.3,1.2-0.7c0-1.2-3.2-0.4-3.2-2.4
                                        C-1.7,0.7-1,0,0.5,0c0.6,0,1.2,0.2,1.8,0.5L2,1.2C1.5,1,1,0.8,0.5,0.8c-0.8,0-1.2,0.3-1.2,0.7c0,1.1,3.2,0.4,3.2,2.4
                                        c0,0.9-0.7,1.6-2.2,1.6C-0.4,5.5-1.2,5.3-1.8,4.9z"/>
                                        </g>
                                        <g id="Path_3696">
                                            <path class="st1 " d="M10.4,2.8c-0.1-1.6,1.2-2.9,2.8-3c1.6-0.1,2.9,1.2,3,2.8c0.1,1.6-1.2,2.9-2.8,3c0,0-0.1,0-0.1,0
                                        c-1.5,0.1-2.8-1.1-2.9-2.6C10.4,2.9,10.4,2.8,10.4,2.8z M15.2,2.8c0-1-0.8-1.9-1.9-1.9s-1.9,0.8-1.9,1.9c0,1,0.8,1.9,1.9,1.9
                                        c0,0,0,0,0,0c1,0,1.9-0.8,1.9-1.8C15.2,2.8,15.2,2.8,15.2,2.8L15.2,2.8z"/>
                                        </g>
                                        <g id="Path_3697">
                                            <path class="st1 " d="M24.2,2.8c0.1-1.6,1.4-2.8,3-2.7c0.7,0,1.4,0.4,1.9,0.9l-0.6,0.6c-0.4-0.4-0.9-0.6-1.4-0.6
                                        c-1,0-1.9,0.8-1.9,1.8c0,1,0.8,1.9,1.8,1.9c0,0,0.1,0,0.1,0c0.5,0,1.1-0.2,1.4-0.6l0.6,0.6c-1.1,1.2-2.9,1.2-4.1,0.1
                                        C24.6,4.2,24.3,3.5,24.2,2.8L24.2,2.8z"/>
                                        </g>
                                        <g id="Path_3698">
                                            <path class="st1" d="M37.5,0.1h1v5.4h-1V0.1z"/>
                                        </g>
                                        <g id="Path_3699">
                                            <path class="st1" d="M51.3,4.6v0.8h-4V0.1h3.9v0.8h-2.9v1.4h2.6v0.8h-2.6v1.5L51.3,4.6z"/>
                                        </g>
                                        <g id="Path_3700">
                                            <path class="st1" d="M60.9,0.9h-1.8V0.1h4.5v0.8h-1.8v4.5h-1V0.9z"/>
                                        </g>
                                        <g id="Path_3701">
                                            <path class="st1" d="M74,3.5v1.9h-1V3.6l-2.1-3.5h1.1l1.6,2.6l1.6-2.6h1L74,3.5z"/>
                                        </g>
                                    </g>
                                    <g id="Group_9957" transform="translate(19.365 0)">
                                        <g id="Path_3702">
                                            <path class="st1 logo-hover" d="M17.2,37.9c-10.5,0-19-8.5-19-19s8.5-19,19-19c10.5,0,19,8.5,19,19C36.1,29.4,27.6,37.9,17.2,37.9z
                                         M17.2,2.7C8.2,2.7,0.9,10,0.9,19s7.3,16.2,16.2,16.2S33.4,27.9,33.4,19l0,0C33.4,10,26.1,2.7,17.2,2.7L17.2,2.7z"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="tab">
                    <nav>
                        <div class="hamburger"></div>
                        <div class="menu">
                            <div class="social">
                                <?php if(get_theme_mod('medium') != ''){ ?>
                                    <a href="<?php echo get_theme_mod('medium'); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33.88" height="19.242" viewBox="0 0 33.88 19.242">
                                            <path class="path" id="Path_3729" data-name="Path 3729" d="M9.555,0A9.621,9.621,0,1,1,0,9.62,9.588,9.588,0,0,1,9.555,0M24.815.563c2.639,0,4.778,4.055,4.778,9.057h0c0,5-2.139,9.057-4.778,9.057s-4.778-4.056-4.778-9.057S22.176.563,24.815.563m7.385.943c.928,0,1.68,3.633,1.68,8.114s-.752,8.114-1.68,8.114S30.52,14.1,30.52,9.62s.752-8.114,1.68-8.114" transform="translate(0 0.001)" fill="#f9f9f9"/>
                                        </svg>
                                    </a>
                                <?php } if(get_theme_mod('linkedin') != ''){ ?>
                                    <a href="<?php echo get_theme_mod('linkedin'); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.621" height="19.854" viewBox="0 0 19.621 19.854">
                                            <path class="path" id="Path_3730" data-name="Path 3730" d="M1068.5,217h-15.666a1.981,1.981,0,0,0-1.978,1.986v15.883a1.98,1.98,0,0,0,1.978,1.985H1068.5a1.981,1.981,0,0,0,1.978-1.985V218.986A1.982,1.982,0,0,0,1068.5,217Zm-11.347,15.71h-2.641v-8.493h2.641Zm-1.338-9.535a1.323,1.323,0,1,1,1.424-1.32A1.317,1.317,0,0,1,1055.818,223.175Zm10.975,9.535h-2.64V228c0-1.093-.382-1.841-1.338-1.841a1.451,1.451,0,0,0-1.355.991,1.9,1.9,0,0,0-.087.66v4.9h-2.64v-5.784c0-1.059-.034-1.945-.07-2.709h2.292l.122,1.181h.051a3.05,3.05,0,0,1,2.623-1.373c1.737,0,3.039,1.164,3.039,3.664Z" transform="translate(-1050.86 -217)" fill="#f9f9f9"/>
                                        </svg>
                                    </a>
                                <?php } if(get_theme_mod('twitter') != ''){ ?>
                                    <a href="<?php echo get_theme_mod('twitter'); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23.838" height="19.335" viewBox="0 0 23.838 19.335">
                                            <path class="path" id="Path_3731" data-name="Path 3731" d="M45.549,21.335A13.782,13.782,0,0,0,59.454,7.43V6.768a10.765,10.765,0,0,0,2.384-2.516,10.994,10.994,0,0,1-2.781.795A5.153,5.153,0,0,0,61.176,2.4,12.147,12.147,0,0,1,58.13,3.589,4.73,4.73,0,0,0,54.554,2a4.976,4.976,0,0,0-4.9,4.9,2.582,2.582,0,0,0,.132,1.059A13.692,13.692,0,0,1,39.722,2.795a5.072,5.072,0,0,0-.662,2.516,5.262,5.262,0,0,0,2.119,4.105,4.465,4.465,0,0,1-2.251-.662h0A4.84,4.84,0,0,0,42.9,13.522a4.083,4.083,0,0,1-1.324.132,2.254,2.254,0,0,1-.927-.132,5.017,5.017,0,0,0,4.635,3.443,10,10,0,0,1-6.092,2.119A3.666,3.666,0,0,1,38,18.952a12.5,12.5,0,0,0,7.549,2.384" transform="translate(-38 -2)" fill="#f9f9f9" fill-rule="evenodd"/>
                                        </svg>
                                    </a>
                                <?php } if(get_theme_mod('spotify') != ''){ ?>
                                    <a href="<?php echo get_theme_mod('spotify'); ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.927" height="19.927" viewBox="0 0 19.927 19.927">
                                            <g id="Group_10285" data-name="Group 10285" transform="translate(-541.5 -26.5)">
                                                <g id="Group_9950" data-name="Group 9950" transform="translate(541.5 26.5)">
                                                    <circle class="path" id="Ellipse_294" data-name="Ellipse 294" cx="9.963" cy="9.963" r="9.963" fill="#f9f9f9"/>
                                                    <g id="Group_9949" data-name="Group 9949" transform="translate(3.059 5.219)">
                                                        <g id="Group_9946" data-name="Group 9946" transform="translate(1.102 6.684)">
                                                            <path  id="Path_3686" data-name="Path 3686" d="M119.872,231.7a.651.651,0,0,1-.337-.094c-3.924-2.36-8.575-1-8.621-.981a.654.654,0,0,1-.381-1.252,13,13,0,0,1,9.677,1.111.655.655,0,0,1-.338,1.215Z" transform="translate(-110.07 -228.901)" fill="#201c26"/>
                                                        </g>
                                                        <g id="Group_9947" data-name="Group 9947" transform="translate(0.679 3.478)">
                                                            <path id="Path_3687" data-name="Path 3687" d="M117.865,205.28a.77.77,0,0,1-.385-.1,13.112,13.112,0,0,0-9.944-1.167.773.773,0,1,1-.5-1.463,14.525,14.525,0,0,1,11.217,1.29.774.774,0,0,1-.386,1.444Z" transform="translate(-106.512 -201.961)" fill="#201c26"/>
                                                        </g>
                                                        <g id="Group_9948" data-name="Group 9948" transform="translate(0 0)">
                                                            <path id="Path_3688" data-name="Path 3688" d="M114.064,176.477a.948.948,0,0,1-.442-.109,16.571,16.571,0,0,0-11.576-1.179.952.952,0,1,1-.573-1.816,18.314,18.314,0,0,1,13.034,1.309.952.952,0,0,1-.443,1.795Z" transform="translate(-100.808 -172.729)" fill="#201c26"/>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                <?php } ?>
                            </div>
                            <ul>
<!--                                <li>-->
<!--                                    <a data-id="1">Home</a>-->
<!--                                </li>-->
                                <li>
                                    <a data-id="2">Waves</a>
                                </li>
                                <li>
                                    <a data-id="3">The Rogue Wave</a>
                                </li>
                                <li>
                                    <a data-id="8">Services</a>
                                </li>
                                <li>
                                    <a data-id="6">Your Project Brief</a>
                                </li>
                                <li>
                                    <a data-id="4">Partners</a>
                                </li>
                                <li>
                                    <a data-id="7">FAQ</a>
                                </li>
                                <li>
                                    <a data-id="5">Referral Program</a>
                                </li>
                                <li>
                                    <a data-id="9">Let's Meet</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
