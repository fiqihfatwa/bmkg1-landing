<!DOCTYPE html>
<!--[if IE 8]> <html lang="id" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="id" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="id">
<!--<![endif]-->

<head>
    <title>BMKG Wilayah I Medan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Informasi prakiraan cuaca, maritim, penerbangan, iklim, kualitas udara, gempabumi, tsunami dan tanda waktu di Indonesia dengan Cepat, Tepat, Akurat, Luas, dan Mudah Dipahami">
    <meta name="keywords" content="Informasi Cuaca, Citra Satelit Cuaca, Citra Radar, Cuaca Penerbangan, Cuaca Aktual, Cuaca Maritim, Cuaca Pelayaran, Iklim, Kualitas Udara, Gempabumi, Tsunami, Tanda Waktu, Petir">
    <meta name="author" content="BMKG">

    <meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">

    <meta property="og:type" content="website">
    <meta property="og:title" content="BMKG Medan | Badan Meteorologi, Klimatologi, dan Geofisika Wilayah 1 Medan">
    <meta property="og:image" content="https://www.bmkg.go.id/asset/img/logo/bg_BMKG3.jpg">
    <meta property="og:description" content="Informasi prakiraan cuaca, maritim, penerbangan, iklim, kualitas udara, gempabumi, tsunami dan tanda waktu di Indonesia dengan Cepat, Tepat, Akurat, Luas, dan Mudah Dipahami">
    <meta property="og:url" content="http://www.bmkg.go.id/">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@infoBMKG">
    <meta name="twitter:creator" content="@infoBMKG">
    <meta name="twitter:title" content="BMKG | Badan Meteorologi, Klimatologi, dan Geofisika">
    <meta name="twitter:description" content="Informasi prakiraan cuaca, maritim, penerbangan, iklim, kualitas udara, gempabumi, tsunami dan tanda waktu di Indonesia dengan Cepat, Tepat, Akurat, Luas, dan Mudah Dipahami">
    <meta name="twitter:image" content="https://www.bmkg.go.id/asset/img/logo/bg_BMKG3.jpg">

    <meta name="apple-itunes-app" content="app-id=1114372539">
    <meta name="google-play-app" content="app-id=com.Info_BMKG">

    <link rel="shortcut icon" href="https://www.bmkg.go.id/asset/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://www.bmkg.go.id/asset/img/favicon-60@3x.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="https://www.bmkg.go.id/asset/img/favicon-60.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.bmkg.go.id/asset/img/favicon-60@2x.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.bmkg.go.id/asset/img/favicon-60@3x.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.bmkg.go.id/asset/img/favicon-76.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.bmkg.go.id/asset/img/favicon-76@2x.png" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Roboto:300,300i,400,400i,700,700i">
    <link rel="stylesheet" href="asset/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/plugins/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="asset/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.bmkg.go.id/asset/css/thunderstorm.css">
    <link rel="stylesheet" href="https://www.bmkg.go.id/asset/css/thrustfault.css">

    <script type="text/javascript">
        function showLocalTime(a, b, c, d) {
            if (document.getElementById && document.getElementById(a)) {
                this.container = document.getElementById(a), this.displayversion = d;
                var e = "server-php" == b ? '<? print date("F d, Y H:i:s", time()) ?>' : "server-ssi" == b ? '<!--#config timefmt="%B %d, %Y %H:%M:%S"--><!--#echo var="DATE_LOCAL" -->' : "5/24/2021 2:35:54 PM";
                this.localtime = this.serverdate = new Date(e), this.localtime.setTime(this.serverdate.getTime() + 60 * c * 1e3), this.updateTime(), this.updateContainer()
            }
        }

        function formatField(a, b) {
            if ("undefined" != typeof b) {
                var c = a > 12 ? a - 12 : a;
                return 0 == c ? 12 : c
            }
            return a <= 9 ? "0" + a : a
        }
        var minggutxt = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
            weekdaystxt = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            bulantxt = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            monthstxt = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        showLocalTime.prototype.updateTime = function() {
            var a = this;
            this.localtime.setSeconds(this.localtime.getSeconds() + 1), setTimeout(function() {
                a.updateTime()
            }, 1e3)
        }, showLocalTime.prototype.updateContainer = function() {
            var a = this;
            if ("long" == this.displayversion) this.container.innerHTML = this.localtime.toLocaleString();
            else {
                var b = this.localtime.getHours(),
                    c = this.localtime.getMinutes(),
                    d = this.localtime.getSeconds(),
                    k = (this.localtime.getDate(), this.localtime.getUTCDate(), minggutxt[this.localtime.getDay()], bulantxt[this.localtime.getMonth()], weekdaystxt[this.localtime.getUTCDay()], monthstxt[this.localtime.getUTCMonth()], b + 1);
                k >= 24 && (k -= 24);
                var l = b + 2;
                l >= 24 && (l -= 24);
                var m = b - 7;
                m < 0 && (m += 24);
                this.container.innerHTML = "<span class='hari-digit hidden-sm'><a href='http://jam.bmkg.go.id/' target='_blank'>Standar Waktu Indonesia</a> </span><span class='FontDigit'>" + formatField(b) + ":" + formatField(c) + ":" + formatField(d) + " WIB / </span><span class='FontDigit'>" + formatField(m) + ":" + formatField(c) + ":" + formatField(d) + " UTC</span>"
            }
            setTimeout(function() {
                a.updateContainer()
            }, 1e3)
        };
    </script>
    <script type="text/javascript">
        if (window.top !== window.self || top != self) {
            window.top.location = window.self.location;
            top.location.replace(location);
        }
    </script>
</head>

<body class="header-fixed header-fixed-space bmkg-home">
    <div class="wrapper">
        <div class="header-v8 header-sticky">
            <div class="blog-topbar">
                <div class="topbar-search-block">
                    <div class="container">
                        <form action="">
                            <input type="text" class="form-control" placeholder="Pencarian...">
                            <div class="search-close"><i class="icon-close"></i></div>
                        </form>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <!--<i class="fa fa-search search-btn pull-right hidden-sm hidden-md hidden-lg"></i>-->
                            <!-- <div class="pull-right topbar-time bahasa hidden-sm hidden-md hidden-lg">
                                <a class="active" href="?lang=ID"><span class="id"></span>ID</a>
                                <a href="?lang=EN"><span class="en"></span>EN</a>
                            </div> -->
                            <div class="topbar-time hari-digit hidden-xs">Senin, 24 Mei 2021</div>
                            <div class="topbar-toggler"><span class="fa fa-angle-down"></span></div>
                            <ul class="topbar-list topbar-menu">
                                <li class="hidden-sm hidden-md hidden-lg hari-digit">Senin, 24 Mei 2021</li>
                                <li class="hidden-sm hidden-md hidden-lg" id="timecontainer1"></li>
                                <script type="text/javascript">
                                    new showLocalTime("timecontainer1", "server-asp", 0, "short")
                                </script>
                            </ul>
                        </div>
                        <div class="col-sm-8 col-xs-12 clearfix">
                            <!--<i class="fa fa-search search-btn pull-right hidden-xs"></i>-->
                            <!-- <div class="pull-right topbar-time bahasa hidden-xs">
                                <a class="active" href="?lang=ID"><span class="id"></span>ID</a>
                                <a href="?lang=EN"><span class="en"></span>EN</a>
                            </div> -->
                            <div id="timecontainer" class="topbar-time pull-right hidden-xs"></div>
                            <script type="text/javascript">
                                new showLocalTime("timecontainer", "server-asp", 0, "short")
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Bar -->
            @include('layouts-landing.navbar')

        </div>

        <!-- Content Wrapper. Contains page content -->
        @yield('content')

        <!-- Main Footer -->
        <div class="footer-v8">
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 column-one md-margin-bottom-30">
                            <div class="logo-circle margin-bottom-20">
                                <a href="../"><img class="footer-logo" src="https://www.bmkg.go.id/asset/img/logo/logo-bmkg.svg" alt=""></a>
                            </div>
                            <span>Kantor</span>
                            <p>Jl. Ngumban Surbakti No. 15 Sempakata<br>Kec. Medan Selayang, Kota Medan <br> Sumatera Utara 20131.</p>
                            <hr>
                            <span>Tel. & Fax</span>
                            <p>Tel. (061) xxxxxx<br>Fax (061) xxxxxx</p>
                            <hr>
                            <span>Email:</span>
                            <a href="mailto:bbmkg1@bmkg.go.id">bbmkg1@bmkg.go.id</a>
                        </div>

                        <!-- <div class="col-md-3 col-sm-6 md-margin-bottom-30">
                            <h2>Link BMKG</h2>
                            <ul class="footer-lists">
                                <li><i class="fa fa-angle-right"></i><a href="http://web.meteo.bmkg.go.id" target="_blank">Informasi Cuaca</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="http://maritim.bmkg.go.id" target="_blank">Cuaca Maritim</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="http://aviation.bmkg.go.id" target="_blank">Cuaca Penerbangan</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="http://cews.bmkg.go.id" target="_blank">CEWS (Climate Early Warning System)</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="http://inatews.bmkg.go.id" target="_blank">InaTEWS (Indonesia Tsunami Early Warning System)</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="http://dataonline.bmkg.go.id" target="_blank">Data Online BMKG</a></li>
                                <li class="ften"><i class="fa fa-angle-right"></i><a href="https://mail.bmkg.go.id" target="_blank">Email BMKG</a></li>
                                <li class="ften"><i class="fa fa-angle-right"></i><a href="http://jdih.bmkg.go.id" target="_blank">JDIH BMKG</a></li>
                                <li class="ften"><i class="fa fa-angle-right"></i><a href="http://inspektorat.bmkg.go.id" target="_blank">Inspektorat BMKG</a></li>
                                <li class="ften"><i class="fa fa-angle-right"></i><a href="http://sdm.sestama.bmkg.go.id" target="_blank">SDM BMKG</a></li>
                                <li class="ften"><i class="fa fa-angle-right"></i><a href="http://pusdiklat.bmkg.go.id" target="_blank">Pusdiklat BMKG</a></li>
                                <li class="ften"><i class="fa fa-angle-right"></i><a href="http://puslitbang.bmkg.go.id" target="_blank">Puslitbang BMKG</a></li>
                                <li class="ften"><i class="fa fa-angle-right"></i><a href="https://stmkg.ac.id" target="_blank">STMKG</a></li>
                                <li class="ften"><i class="fa fa-angle-right"></i><a href="http://perpustakaan.bmkg.go.id" target="_blank">E-Perpustakaan BMKG</a></li>
                            </ul>
                        </div> -->

                        <div class="clearfix visible-sm"></div>

                        <div class="col-md-3 col-sm-6 md-margin-bottom-30">
                            <h2>Aplikasi Mobile</h2>
                            <h4><a href="http://apps.bmkg.go.id" target="_blank">Info BMKG - Cuaca, Iklim, dan Gempabumi Indonesia</a></h4>
                            <p>Semua informasi mengenai Prakiraan Cuaca, Iklim, Kualitas Udara, dan Gempabumi yang terjadi di berbagai wilayah di Indonesia tercakup dalam satu aplikasi mobile.</p>
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="https://itunes.apple.com/id/app/id1114372539?l=id" target="_blank"><img class="img-responsive" src="https://www.bmkg.go.id/asset/img/logo/appstore.png" alt="infoBMKG on App Store"></a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="https://play.google.com/store/apps/details?id=com.Info_BMKG" target="_blank"><img class="img-responsive" src="https://www.bmkg.go.id/asset/img/logo/googleplay.png" alt="infoBMKG on Google Play"></a>
                                </div>
                            </div>
                            <hr>
                            <ul class="social-icon-list">
                                <li><a href="https://twitter.com/bbmkg1medan" target="_blank"><i class="rounded-x fa fa-twitter"></i></a></li>
                                <!-- <li><a href="https://www.facebook.com/infoBMKG" target="_blank"><i class="rounded-x fa fa-facebook"></i></a></li> -->
                                <li><a href="https://www.instagram.com/bbmkg1medan" target="_blank"><i class="rounded-x fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC6ZjKtRrsPPZyRaPCD7OiUg" target="_blank"><i class="rounded-x fa fa-youtube"></i></a></li>
                            </ul>
                        </div>

                        <!-- <div class="col-md-3 col-sm-6 md-margin-bottom-30">

                            <!DOCTYPE html>
                            <h2>Media BMKG</h2>
                            <a class="embedmedia" href="https://www.bmkg.go.id/video/?p=kaleidoskop-bmkg-2019-dan-outlook-bmkg-2020" target="_blank">
                                <img class="img-responsive loaded" data-original="https://cdn.bmkg.go.id/Web/thumbnail_refleksi-2019-Outlook2020.jpg" src="https://cdn.bmkg.go.id/Web/thumbnail_refleksi-2019-Outlook2020.jpg" alt="Media BMKG" />
                                <span class="playmedia"></span>
                            </a>
                            <h4><a href="https://www.bmkg.go.id/video/?p=kaleidoskop-bmkg-2019-dan-outlook-bmkg-2020" target="_blank">Kaleidoskop BMKG 2019 dan Outlook BMKG 2020</a></h4>

                        </div> -->
                    </div>
                </div>
            </footer>
            <footer class="copyright">
                <div class="container">
                    <ul class="list-inline terms-menu">
                        <li>&copy; 2021 - Badan Meteorologi, Klimatologi, dan Geofisika Wilayah I Medan</li>
                        <!-- <li class="home"><a href="../profil/?p=kontak-kami">Kontak Kami</a></li> -->
                        <!--<li><a href="#">Peta Situs</a></li>-->
                        <li class="sv"><a href="#"><span>sv-01</span></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>

    <script type="text/javascript" src="https://www.bmkg.go.id/asset/js/hayoo.js"></script>
    <script type="text/javascript" src="asset/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.bmkg.go.id/asset/plugins/master-slider/masterslider/masterslider.min.js" defer></script>
    <script type="text/javascript" src="asset/plugins/fancybox/source/jquery.fancybox.pack.js" defer></script>
    <script type="text/javascript" src="https://www.bmkg.go.id/asset/plugins/cumulonimbus.js" defer></script>
    <script>
        /*elnino*/
        var App = function() {
                function a() {
                    jQuery(window).scroll(function() {
                        jQuery(window).scrollTop() > 100 ? jQuery(".header-fixed .header-sticky").addClass("header-fixed-shrink") : jQuery(".header-fixed .header-sticky").removeClass("header-fixed-shrink")
                    })
                }

                function b() {
                    $(".blog-topbar .search-btn").on("click", function() {
                        jQuery(".topbar-search-block").hasClass("topbar-search-visible") ? (jQuery(".topbar-search-block").slideUp(), jQuery(".topbar-search-block").removeClass("topbar-search-visible")) : (jQuery(".topbar-search-block").slideDown(), jQuery(".topbar-search-block").addClass("topbar-search-visible"))
                    }), $(".blog-topbar .search-close").on("click", function() {
                        jQuery(".topbar-search-block").slideUp(), jQuery(".topbar-search-block").removeClass("topbar-search-visible")
                    }), jQuery(window).scroll(function() {
                        jQuery(".topbar-search-block").slideUp(), jQuery(".topbar-search-block").removeClass("topbar-search-visible")
                    })
                }

                function c() {
                    $(".topbar-toggler").on("click", function() {
                        jQuery(".topbar-toggler").hasClass("topbar-list-visible") ? (jQuery(".topbar-menu").slideUp(), jQuery(this).removeClass("topbar-list-visible")) : (jQuery(".topbar-menu").slideDown(), jQuery(this).addClass("topbar-list-visible"))
                    })
                }

                function d() {
                    $(".topbar-list > li").on("click", function(a) {
                        jQuery(this).children("ul").hasClass("topbar-dropdown") && (jQuery(this).children("ul").hasClass("topbar-dropdown-visible") ? (jQuery(this).children(".topbar-dropdown").slideUp(), jQuery(this).children(".topbar-dropdown").removeClass("topbar-dropdown-visible")) : (jQuery(this).children(".topbar-dropdown").slideDown(), jQuery(this).children(".topbar-dropdown").addClass("topbar-dropdown-visible")))
                    })
                }

                function e() {
                    $(".hoverSelector").on("hover", function(a) {
                        $(".hoverSelectorBlock", this).toggleClass("show"), a.stopPropagation()
                    })
                }

                function f() {
                    jQuery(".carousel").carousel({
                        interval: 15e3,
                        pause: "hover"
                    }), jQuery(".tooltips").tooltip(), jQuery(".tooltips-show").tooltip("show"), jQuery(".tooltips-hide").tooltip("hide"), jQuery(".tooltips-toggle").tooltip("toggle"), jQuery(".tooltips-destroy").tooltip("destroy"), jQuery(".popovers").popover(), jQuery(".popovers-show").popover("show"), jQuery(".popovers-hide").popover("hide"), jQuery(".popovers-toggle").popover("toggle"), jQuery(".popovers-destroy").popover("destroy")
                }
                return {
                    init: function() {
                        b(), c(), a(), f(), e(), d()
                    },
                    initScrollBar: function() {
                        jQuery(".mCustomScrollbar").mCustomScrollbar({
                            theme: "minimal",
                            scrollInertia: 300,
                            scrollEasing: "linear"
                        })
                    },
                    initCounter: function() {
                        jQuery(".counter").counterUp({
                            delay: 10,
                            time: 1e3
                        })
                    },
                    initParallaxBg: function() {
                        jQuery(window).load(function() {
                            jQuery(".parallaxBg").parallax("50%", .2), jQuery(".parallaxBg1").parallax("50%", .4)
                        })
                    }
                }
            }(),
            MasterSliderShowcase3 = function() {
                return {
                    initMasterSliderShowcase3: function() {
                        var a = new MasterSlider;
                        a.control("arrows"), a.control("circletimer", {
                            color: "#fff",
                            stroke: 9
                        }), a.control("thumblist", {
                            autohide: !1,
                            dir: "h",
                            type: "tabs",
                            width: 187.5,
                            height: 135,
                            align: "bottom",
                            space: 0,
                            margin: -12,
                            hideUnder: 992
                        }), a.setup("masterslider", {
                            width: 1140,
                            height: 550,
                            space: 0,
                            speed: 10,
                            preload: "all",
                            view: "basic",
                            autoplay: !0
                        })
                    }
                }
            }(),
            OwlBMKG = function() {
                return {
                    initOwlPrakicuKota: function() {
                        jQuery(document).ready(function() {
                            var a = jQuery(".owl-prakicu-kota");
                            a.owlCarousel({
                                items: [5],
                                itemsDesktop: [1200, 4],
                                itemsDesktopSmall: [992, 3],
                                itemsTablet: [600, 2],
                                itemsMobile: [479, 1],
                                autoPlay: 5e3
                            }), jQuery(".next-pk").click(function() {
                                a.trigger("owl.next")
                            }), jQuery(".prev-pk").click(function() {
                                a.trigger("owl.prev")
                            })
                        })
                    },
                    initOwlKualitasUdara: function() {
                        jQuery(document).ready(function() {
                            var a = jQuery(".owl-kualitas-udara");
                            a.owlCarousel({
                                items: [4],
                                itemsDesktop: [1200, 3],
                                itemsDesktopSmall: [992, 3],
                                itemsTablet: [600, 2],
                                itemsMobile: [479, 2],
                                autoPlay: 5e3
                            }), jQuery(".next-ku").click(function() {
                                a.trigger("owl.next")
                            }), jQuery(".prev-ku").click(function() {
                                a.trigger("owl.prev")
                            })
                        })
                    },
                    initOwlPeringatanDini: function() {
                        jQuery(document).ready(function() {
                            var a = jQuery(".owl-peringatan-dini");
                            a.owlCarousel({
                                items: [1],
                                itemsDesktop: [1200, 1],
                                itemsDesktopSmall: [992, 1],
                                itemsTablet: [600, 1],
                                itemsMobile: [479, 1],
                                autoPlay: 5e3
                            })
                        })
                    },
                    initOwlBannerLayanan: function() {
                        jQuery(document).ready(function() {
                            var a = jQuery(".owl-banner-layanan");
                            a.owlCarousel({
                                items: [5],
                                itemsDesktop: [1200, 5],
                                itemsDesktopSmall: [992, 3],
                                itemsTablet: [600, 2],
                                itemsMobile: [479, 1],
                                autoPlay: 5e3
                            })
                        })
                    }
                }
            }(),
            FancyBox = function() {
                return {
                    initFancybox: function() {
                        jQuery(".fancybox").fancybox({
                            groupAttr: "data-rel",
                            prevEffect: "fade",
                            nextEffect: "fade",
                            openEffect: "elastic",
                            closeEffect: "fade",
                            closeBtn: !0,
                            helpers: {
                                title: {
                                    type: "float"
                                }
                            }
                        }), $(".fbox-modal").fancybox({
                            maxWidth: 800,
                            maxHeight: 600,
                            fitToView: !1,
                            width: "70%",
                            height: "70%",
                            autoSize: !1,
                            closeClick: !1,
                            closeEffect: "fade",
                            openEffect: "elastic"
                        })
                    }
                }
            }();

        /*lazyload*/
        ! function(a, b) {
            "function" == typeof define && define.amd ? define([], b) : "object" == typeof exports ? module.exports = b() : a.LazyLoad = b()
        }(this, function() {
            function a() {
                r || (n = {
                    elements_selector: "img",
                    container: window,
                    threshold: 300,
                    throttle: 50,
                    data_src: "original",
                    data_srcset: "original-set",
                    class_loading: "loading",
                    class_loaded: "loaded",
                    skip_invisible: !0,
                    callback_load: null,
                    callback_error: null,
                    callback_set: null,
                    callback_processed: null
                }, o = !!window.addEventListener, p = !!window.attachEvent, q = !!document.body.classList, r = !0)
            }

            function b(a, b, c) {
                return o ? void a.addEventListener(b, c) : void(p && (a.attachEvent("on" + b, function(a) {
                    return function() {
                        c.call(a, window.event)
                    }
                }(a)), a = null))
            }

            function c(a, b, c) {
                return o ? void a.removeEventListener(b, c) : void(p && a.detachEvent("on" + b, c))
            }

            function d(a, b, c) {
                function d() {
                    return window.innerWidth || l.documentElement.clientWidth || document.body.clientWidth
                }

                function e() {
                    return window.innerHeight || l.documentElement.clientHeight || document.body.clientHeight
                }

                function f(a) {
                    return a.getBoundingClientRect().top + m - l.documentElement.clientTop
                }

                function g(a) {
                    return a.getBoundingClientRect().left + n - l.documentElement.clientLeft
                }

                function h() {
                    var d;
                    return d = b === window ? e() + m : f(b) + b.offsetHeight, d <= f(a) - c
                }

                function i() {
                    var e;
                    return e = b === window ? d() + window.pageXOffset : g(b) + d(), e <= g(a) - c
                }

                function j() {
                    var d;
                    return d = b === window ? m : f(b), d >= f(a) + c + a.offsetHeight
                }

                function k() {
                    var d;
                    return d = b === window ? n : g(b), d >= g(a) + c + a.offsetWidth
                }
                var l, m, n;
                return l = a.ownerDocument, m = window.pageYOffset || l.body.scrollTop, n = window.pageXOffset || l.body.scrollLeft, !(h() || j() || i() || k())
            }

            function e() {
                var a = new Date;
                return a.getTime()
            }

            function f(a, b) {
                var c, d = {};
                for (c in a) a.hasOwnProperty(c) && (d[c] = a[c]);
                for (c in b) b.hasOwnProperty(c) && (d[c] = b[c]);
                return d
            }

            function g(a) {
                try {
                    return Array.prototype.slice.call(a)
                } catch (b) {
                    var c, d = [],
                        e = a.length;
                    for (c = 0; e > c; c++) d.push(a[c]);
                    return d
                }
            }

            function h(a, b) {
                return q ? void a.classList.add(b) : void(a.className += (a.className ? " " : "") + b)
            }

            function i(a, b) {
                return q ? void a.classList.remove(b) : void(a.className = a.className.replace(new RegExp("(^|\\s+)" + b + "(\\s+|$)"), " ").replace(/^\s+/, "").replace(/\s+$/, ""))
            }

            function j(a, b) {
                var c = a.parentElement;
                if ("PICTURE" === c.tagName)
                    for (var d = 0; d < c.children.length; d++) {
                        var e = c.children[d];
                        if ("SOURCE" === e.tagName) {
                            var f = e.getAttribute("data-" + b);
                            f && e.setAttribute("srcset", f)
                        }
                    }
            }

            function k(a, b, c) {
                var d = a.tagName,
                    e = a.getAttribute("data-" + c);
                if ("IMG" === d) {
                    j(a, b);
                    var f = a.getAttribute("data-" + b);
                    return f && a.setAttribute("srcset", f), void(e && a.setAttribute("src", e))
                }
                return "IFRAME" === d ? void(e && a.setAttribute("src", e)) : void(a.style.backgroundImage = "url(" + e + ")")
            }

            function l(a, b) {
                return function() {
                    return a.apply(b, arguments)
                }
            }

            function m(c) {
                a(), this._settings = f(n, c), this._queryOriginNode = this._settings.container === window ? document : this._settings.container, this._previousLoopTime = 0, this._loopTimeout = null, this._handleScrollFn = l(this.handleScroll, this), b(window, "resize", this._handleScrollFn), this.update()
            }
            var n, o, p, q, r = !1;
            return m.prototype._showOnAppear = function(a) {
                function d() {
                    null !== e && (e.callback_load && e.callback_load(a), i(a, e.class_loading), h(a, e.class_loaded), c(a, "load", d))
                }
                var e = this._settings;
                ("IMG" === a.tagName || "IFRAME" === a.tagName) && (b(a, "load", d), b(a, "error", function() {
                    c(a, "load", d), i(a, e.class_loading), e.callback_error && e.callback_error(a)
                }), h(a, e.class_loading)), k(a, e.data_srcset, e.data_src), e.callback_set && e.callback_set(a)
            }, m.prototype._loopThroughElements = function() {
                var a, b, c = this._settings,
                    e = this._elements,
                    f = e ? e.length : 0,
                    g = [];
                for (a = 0; f > a; a++) b = e[a], c.skip_invisible && null === b.offsetParent || d(b, c.container, c.threshold) && (this._showOnAppear(b), g.push(a), b.wasProcessed = !0);
                for (; g.length > 0;) e.splice(g.pop(), 1), c.callback_processed && c.callback_processed(e.length);
                0 === f && this._stopScrollHandler()
            }, m.prototype._purgeElements = function() {
                var a, b, c = this._elements,
                    d = c.length,
                    e = [];
                for (a = 0; d > a; a++) b = c[a], b.wasProcessed && e.push(a);
                for (; e.length > 0;) c.splice(e.pop(), 1)
            }, m.prototype._startScrollHandler = function() {
                this._isHandlingScroll || (this._isHandlingScroll = !0, b(this._settings.container, "scroll", this._handleScrollFn))
            }, m.prototype._stopScrollHandler = function() {
                this._isHandlingScroll && (this._isHandlingScroll = !1, c(this._settings.container, "scroll", this._handleScrollFn))
            }, m.prototype.handleScroll = function() {
                var a, b, c;
                this._settings && (b = e(), c = this._settings.throttle, 0 !== c ? (a = c - (b - this._previousLoopTime), 0 >= a || a > c ? (this._loopTimeout && (clearTimeout(this._loopTimeout), this._loopTimeout = null), this._previousLoopTime = b, this._loopThroughElements()) : this._loopTimeout || (this._loopTimeout = setTimeout(l(function() {
                    this._previousLoopTime = e(), this._loopTimeout = null, this._loopThroughElements()
                }, this), a))) : this._loopThroughElements())
            }, m.prototype.update = function() {
                this._elements = g(this._queryOriginNode.querySelectorAll(this._settings.elements_selector)), this._purgeElements(), this._loopThroughElements(), this._startScrollHandler()
            }, m.prototype.destroy = function() {
                c(window, "resize", this._handleScrollFn), this._loopTimeout && (clearTimeout(this._loopTimeout), this._loopTimeout = null), this._stopScrollHandler(), this._elements = null, this._queryOriginNode = null, this._settings = null
            }, m
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            App.initCounter();
            App.initParallaxBg();
            MasterSliderShowcase3.initMasterSliderShowcase3();
            OwlBMKG.initOwlKualitasUdara();
            OwlBMKG.initOwlPrakicuKota();
            OwlBMKG.initOwlPeringatanDini();
            OwlBMKG.initOwlBannerLayanan();
            FancyBox.initFancybox();
        });
        new LazyLoad();

        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-10685897-2', 'auto');
        ga('send', 'pageview');
    </script>
    <!--[if lt IE 9]>
	<script type="text/javascript" src="https://www.bmkg.go.id/asset/plugins/respond.min.js"></script>
	<script type="text/javascript" src="https://www.bmkg.go.id/asset/plugins/html5shiv.min.js"></script>
	<script type="text/javascript" src="https://www.bmkg.go.id/asset/plugins/placeholder-IE-fixes.min.js"></script>
<![endif]-->
    <!-- </body></html> -->
    <!--<script>!function(e){"use strict";e.fn.firstVisitPopup=function(t){var i,o=e("body"),n=e(this),c=function(e,t){var i=new Date,o="expires=";i.setTime(i.getTime()+31536e6),o+=i.toGMTString(),document.cookie=e+"="+t+"; "+o+"; path=/"},p=function(e){var t=document.cookie.split(";"),i=0,o="";for(i=0;i<t.length;i++){for(o=t[i];" "===o.charAt(0);)o=o.substring(1,o.length);if(0===o.indexOf(e+"="))return o.substring(e.length+1,o.length)}return!1},f=function(){i.show(),n.show()},r=function(){i.hide(),n.hide(),c("fvpp"+t.cookieName,"true")};o.append('<div id="fvpp-blackout"></div>'),n.append('<span id="fvpp-close">&#10006;</span>'),i=e("#fvpp-blackout"),p("fvpp"+t.cookieName)?r():f(),e(t.showAgainSelector).on("click",f),o.on("click","#fvpp-blackout, #fvpp-close",r)}}(jQuery);
$(function () {
	$('#popup').firstVisitPopup({
		cookieName : 'homepage-20210524'
	});
});</script>-->

    <script type="text/javascript">
        jQuery(document).ready(function() {
            CirclesMaster.initCirclesMaster();
        });

        var CirclesMaster = function() {
            return {
                initCirclesMaster: function() {
                    Circles.create({
                        id: 'PALEMBANG',
                        percentage: 100,
                        radius: 35,
                        width: 7,
                        number: 47.62,
                        text: '',
                        colors: ['#fff', '#00cc00'],
                        duration: 2000
                    })
                    Circles.create({
                        id: 'PANGKALANBUN',
                        percentage: 100,
                        radius: 35,
                        width: 7,
                        number: 12.41,
                        text: '',
                        colors: ['#fff', '#00cc00'],
                        duration: 2000
                    })
                    Circles.create({
                        id: 'CIBEUREUM',
                        percentage: 100,
                        radius: 35,
                        width: 7,
                        number: 68.00,
                        text: '',
                        colors: ['#fff', '#194cc9'],
                        duration: 2000
                    })
                    Circles.create({
                        id: 'KOTOTABANG',
                        percentage: 100,
                        radius: 35,
                        width: 7,
                        number: 20.00,
                        text: '',
                        colors: ['#fff', '#00cc00'],
                        duration: 2000
                    })
                    Circles.create({
                        id: 'KEMAYORAN',
                        percentage: 100,
                        radius: 35,
                        width: 7,
                        number: 66.00,
                        text: '',
                        colors: ['#fff', '#194cc9'],
                        duration: 2000
                    })
                }
            };
        }();
    </script>
</body>

</html>