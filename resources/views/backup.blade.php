<!DOCTYPE html>
<!--[if IE 8]> <html lang="id" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="id" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="id">
<!--<![endif]-->

<head>
    <title>BMKG | Badan Meteorologi, Klimatologi, dan Geofisika</title>
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

            <div class="navbar mega-menu" role="navigation">
                <div class="container">
                    <div class="res-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="navbar-brand">
                            <a href="/?lang=ID">
                                <img src="asset/img/logo/logo-bmkg.png" alt="Logo">
                                <span class="hidden-xs hidden-md">BMKG Wilayah 1 Medan</span>
                            </a>
                            <span class="hidden-xs hidden-md slogan">Cepat, Tepat, Akurat, Luas, dan Mudah Dipahami</span>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <div class="res-container">
                            <ul class="nav navbar-nav">
                                <li class="dropdown mega-menu-fullwidth home">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        Profil
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="mega-menu-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-3 md-margin-bottom-30">
                                                            <h2>Profil</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="profil/?p=sejarah">Sejarah</a></li>
                                                                <li><a href="profil/?p=visi-misi">Visi dan Misi</a></li>
                                                                <li><a href="profil/?p=tugas-fungsi">Tugas dan Fungsi</a></li>
                                                                <li><a href="profil/?p=struktur-organisasi">Struktur Organisasi</a></li>
                                                                <li><a href="profil/pejabat-bmkg-pusat.bmkg">Pejabat BMKG Pusat</a></li>
                                                                <li><a href="profil/balai-besar-mkg.bmkg">Balai Besar MKG</a></li>
                                                                <li><a href="profil/stasiun-upt.bmkg">Stasiun MKG</a></li>
                                                                <li><a href="profil/?p=logo-bmkg">Logo BMKG</a></li>
                                                                <li><a href="profil/sumber-daya-manusia.bmkg">Sumber Daya Manusia</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3 md-margin-bottom-30">
                                                            <h2>Publikasi</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="press-release/">Siaran Pers</a></li>
                                                                <li><a href="pidato/">Pidato Pimpinan BMKG</a></li>
                                                                <li><a href="artikel/">Artikel</a></li>
                                                                <li><a href="profil/?p=majalah">Majalah</a></li>
                                                                <li><a href="http://media.bmkg.go.id/" target="_blank">Audio dan Video</a></li>
                                                                <li><a href="http://puslitbang.bmkg.go.id/jmg" target="_blank">Jurnal</a></li>
                                                                <li><a href="http://pusdiklat.bmkg.go.id/" target="_blank">E-Learning</a></li>
                                                                <li><a href="brosur/">Brosur / Leaflet / Booklet</a></li>
                                                                <li><a href="profil/proyek-perubahan.bmkg">Proyek Perubahan</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3 md-margin-bottom-30">
                                                            <h2>Informasi Publik</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="profil/?p=informasi-berkala">Berkala</a></li>
                                                                <li><a href="profil/?p=informasi-setiap-saat">Setiap Saat</a></li>
                                                                <li><a href="profil/?p=informasi-serta-merta">Serta Merta</a></li>
                                                                <li><a href="profil/?p=dipa">DIPA</a></li>
                                                                <li><a href="profil/?p=lakip">LAKIP</a></li>
                                                                <li><a href="profil/?p=rencana-strategis">Rencana Strategis</a></li>
                                                                <li><a href="profil/?p=rencana-kerja">Rencana Kerja</a></li>
                                                                <li><a href="profil/?p=laporan-keuangan">Laporan Keuangan</a></li>
                                                                <li><a href="profil/?p=dokumen-kinerja">Dokumen Kinerja</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3 md-margin-bottom-30">
                                                            <h2>Layanan Publik</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="http://ptsp.bmkg.go.id" target="_blank">Pelayanan Terpadu Satu Pintu (PTSP)</a></li>
                                                                <li><a href="http://ppid.bmkg.go.id" target="_blank">Pejabat Pengelola Informasi dan Dokumentasi (PPID)</a></li>
                                                                <li><a href="http://lpse.bmkg.go.id" target="_blank">LPSE</a></li>
                                                                <li><a href="https://www.lapor.go.id/" target="_blank">Pengaduan Masyarakat</a></li>
                                                                <li><a href="https://elhkpn.kpk.go.id/portal/user/pengumuman_lhkpn/VFRoMlZTdHZRelZpZUVKNWNWSXlSa3BwZWtWVGR6WnlUSGtyUWtoWWFFODVkMWsyU0VOTU9FRjFjRUl5YzJaWk1HNDRkRTVDYVdWMlpsUXlUeTl5Wnc9PQ==" target="_blank">LHKPN</a></li>
                                                                <li><a href="profil/?p=media-sosial">Media Sosial</a></li>
                                                            </ul>
                                                            <h2>Regulasi</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="http://jdih.bmkg.go.id" target="_blank">Jaringan Dokumentasi Informasi Hukum BMKG</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown mega-menu-fullwidth">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        Cuaca
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="mega-menu-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4 md-margin-bottom-30">
                                                            <h2>Prakiraan Cuaca</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="cuaca/prakiraan-cuaca-dunia.bmkg">Prakiraan Cuaca Dunia</a></li>
                                                                <li><a href="cuaca/prakiraan-cuaca-indonesia.bmkg">Prakiraan Cuaca Indonesia</a></li>
                                                                <li><a href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=07&NamaProv=DKI%20Jakarta">Prakiraan Cuaca DKI Jakarta</a></li>
                                                                <li><a href="cuaca/cuaca-berbasis-dampak.bmkg">Prakiraan Cuaca Berbasis Dampak</a></li>
                                                                <li><a href="http://web.meteo.bmkg.go.id?fromURL=www.bmkg.go.id" target="_blank">Informasi Selengkapnya</a></li>
                                                                <li>
                                                                    <hr>
                                                                </li>
                                                            </ul>
                                                            <h2>Prospek Cuaca Harian</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="cuaca/ikhtisar-cuaca-harian.bmkg">Ikhtisar Cuaca Harian</a></li>
                                                                <li><a href="cuaca/prakiraan-cuaca-tigaharian.bmkg">Prospek Cuaca Tiga Harian</a></li>
                                                                <li><a href="cuaca/prakiraan-cuaca-mingguan.bmkg">Prospek Cuaca Mingguan</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4 md-margin-bottom-30">
                                                            <h2>Cuaca Penerbangan</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="cuaca/cuaca-aktual-bandara.bmkg">Laporan Cuaca Aktual Bandara</a></li>
                                                                <li><a href="cuaca/prakiraan-cuaca-bandara.bmkg">Prakiraan Cuaca Bandara</a></li>
                                                                <li><a href="http://aviation.bmkg.go.id?fromURL=www.bmkg.go.id" target="_blank">Informasi Selengkapnya</a></li>
                                                                <li>
                                                                    <hr>
                                                                </li>
                                                            </ul>

                                                            <h2>Cuaca Maritim</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="cuaca/peringatan-gelombang-tinggi.bmkg">Peringatan Gelombang Tinggi</a></li>
                                                                <li><a href="http://maritim.bmkg.go.id?fromURL=www.bmkg.go.id" target="_blank">Prakiraan Cuaca Wilayah Pelayanan</a></li>
                                                                <li><a href="http://maritim.bmkg.go.id?fromURL=www.bmkg.go.id" target="_blank">Prakiraan Tinggi Gelombang</a></li>
                                                                <li><a href="http://maritim.bmkg.go.id?fromURL=www.bmkg.go.id" target="_blank">Prakiraan Cuaca Pelabuhan</a></li>
                                                                <!--<li><a href="http://maritim.bmkg.go.id?fromURL=www.bmkg.go.id" target="_blank">Informasi Selengkapnya</a></li>-->
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4 md-margin-bottom-30">
                                                            <h2>Pengindraan Jauh</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="satelit/">Citra Satelit</a></li>
                                                                <li><a href="cuaca/citra-radar.bmkg">Citra Radar</a></li>
                                                                <li><a href="cuaca/indeks-uv.bmkg">Indeks Sinar Ultraviolet (UV)</a></li>
                                                                <li>
                                                                    <hr>
                                                                </li>
                                                                <li><a href="cuaca/prakiraan-angin.bmkg">Prakiraan Angin</a></li>
                                                                <!--<li><a href="cuaca/potensi-banjir-jakarta.bmkg">Potensi Banjir Jakarta (Harian)</a></li>
															<li><a href="#">Analisis Curah Hujan Harian JABODETABEK (Isohyet)</a></li>-->
                                                                <li><a href="cuaca/probabilistik-curah-hujan.bmkg">Probabilistik Curah Hujan</a></li>
                                                                <li><a href="cuaca/cuaca-berbasis-dampak.bmkg">Prakiraan Cuaca Berbasis Dampak</a></li>
                                                                <li><a href="cuaca/kebakaran-hutan.bmkg">Kebakaran Hutan dan Lahan (SPARTAN)</a></li>
                                                                <li><a href="http://tcwc.bmkg.go.id/siklon" target="_blank">Siklon Tropis</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown mega-menu-fullwidth">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        Iklim
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="mega-menu-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-3 md-margin-bottom-30">
                                                            <h2>Prakiraan Iklim</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="iklim/prakiraan-hujan-bulanan.bmkg">Prakiraan Hujan Bulanan</a></li>
                                                                <li><a href="iklim/prakiraan-hujan-dasarian.bmkg">Prakiraan Hujan Dasarian</a></li>
                                                                <li><a href="iklim/prakiraan-musim.bmkg">Prakiraan Musim</a></li>
                                                                <li><a href="iklim/potensi-banjir.bmkg">Potensi Banjir Bulanan</a></li>
                                                                <li><a href="iklim/potensi-banjir-dasarian.bmkg">Potensi Banjir Dasarian</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-md-3 md-margin-bottom-30">
                                                            <h2>Analisis Iklim</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="iklim/informasi-hujan-bulanan.bmkg">Informasi Hujan Bulanan</a></li>
                                                                <li><a href="iklim/dinamika-atmosfir.bmkg">Dinamika Atmosfer</a></li>
                                                                <li><a href="iklim/indeks-presipitasi-terstandarisasi.bmkg">Indeks Presipitasi Terstandarisasi</a></li>
                                                                <li><a href="iklim/ketersediaan-air-tanah.bmkg">Air Tersedia Bagi Tanaman (ATi)</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-md-3 md-margin-bottom-30">
                                                            <h2>Informasi Iklim</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="http://cews.bmkg.go.id/Peta/Hari_Tanpa_Hujan.bmkg" target="_blank">Informasi Hari Tanpa Hujan</a></li>
                                                                <li><a href="iklim/informasi-suhu-muka-laut.bmkg">Informasi Suhu Muka Laut</a></li>
                                                                <li><a href="iklim/informasi-index-elnino.bmkg">Informasi Index El Nino</a></li>
                                                                <li><a href="iklim/informasi-temperatur-subsurface-pasifik.bmkg">Informasi Temperatur Subsurface Pasifik</a></li>
                                                                <li><a href="iklim/buletin-iklim.bmkg">Buletin Iklim</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-md-3 md-margin-bottom-30">
                                                            <h2>Perubahan Iklim</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="iklim/?p=tren-curah-hujan">Tren Curah Hujan</a></li>
                                                                <li><a href="iklim/?p=tren-suhu">Tren Suhu</a></li>
                                                                <li><a href="iklim/perubahan-normal-curah-hujan.bmkg">Perubahan Normal Curah Hujan</a></li>
                                                                <li><a href="iklim/?p=ekstrem-perubahan-iklim">Ekstrem Perubahan Iklim</a></li>
                                                                <li><a href="iklim/?p=proyeksi-perubahan-iklim">Proyeksi Perubahan Iklim</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <!-- <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        Kualitas Udara
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="kualitas-udara/informasi-so2.bmkg">Informasi SO<sub>2</sub></a></li>
                                        <li><a href="kualitas-udara/informasi-no2.bmkg">Informasi NO<sub>2</sub></a></li>
                                        <li><a href="kualitas-udara/informasi-spm.bmkg">Informasi SPM</a></li>
                                        <li><a href="kualitas-udara/informasi-kimia-air-hujan.bmkg">Informasi Kimia Air Hujan</a></li>
                                        <li><a href="kualitas-udara/informasi-ozon.bmkg">Informasi Ozon (O3)</a></li>
                                        <li><a href="kualitas-udara/?p=gas-rumah-kaca">Informasi Gas Rumah Kaca</a></li>
                                        <li><a href="kualitas-udara/informasi-partikulat-pm10.bmkg">Informasi Partikulat (PM<sub>10</sub>)</a></li>
                                        <li><a href="kualitas-udara/informasi-partikulat-pm25.bmkg">Informasi Partikulat (PM<sub>2.5</sub>)</a></li> -->
                                <!--<li><a href="kualitas-udara/informasi-partikulat-tsp.bmkg">Total Suspended Particulate (TSP)</a></li>-->
                                <!-- </ul>
                                </li> -->

                                <li class="dropdown mega-menu-fullwidth">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        Gempabumi &amp; Tsunami
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="mega-menu-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4 md-margin-bottom-30">
                                                            <h2>Gempabumi</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="gempabumi/gempabumi-terkini.bmkg">Gempabumi Terkini (M &ge; 5.0)</a></li>
                                                                <li><a href="gempabumi/gempabumi-dirasakan.bmkg">Gempabumi Dirasakan</a></li>
                                                                <li><a href="gempabumi/antisipasi-gempabumi.bmkg">Antisipasi Gempabumi</a></li>
                                                                <li><a href="gempabumi/skala-intensitas-gempabumi.bmkg">Skala Intensitas Gempabumi</a></li>
                                                                <li><a href="gempabumi/skala-mmi.bmkg">Skala MMI</a></li>
                                                                <li><a href="http://repogempa.bmkg.go.id/" target="_blank">Data Gempabumi</a></li>
                                                                <li><a href="gempabumi/katalog-gempabumi-signifikan.bmkg">Katalog Gempabumi Signifikan</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4 md-margin-bottom-30">
                                                            <h2>Tsunami</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="tsunami">Tsunami</a></li>
                                                                <li>
                                                                    <hr>
                                                                </li>
                                                            </ul>

                                                            <h2>Seismologi Teknik</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="seismologi-teknik/">Tentang Seismologi Teknik</a></li>
                                                                <li><a href="seismologi-teknik/ulasan-guncangan-tanah.bmkg">Ulasan Guncangan Tanah</a></li>
                                                                <li><a href="seismologi-teknik/peta-isoseismal.bmkg">Peta Isoseismal</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4 md-margin-bottom-30">
                                                            <h2>Geofisika Potensial & Tanda Waktu</h2>
                                                            <ul class="dropdown-link-list">
                                                                <li><a href="geofisika-potensial/nilai-gravitasi-indonesia.bmkg">Gaya Berat</a></li>
                                                                <li><a href="hilal-gerhana/">Informasi Hilal dan Gerhana</a></li>
                                                                <li><a href="tanda-waktu/terbit-terbenam-matahari.bmkg">Terbit Terbenam Matahari</a></li>
                                                                <li><a href="geofisika-potensial/magnet-bumi.bmkg">Magnet Bumi</a></li>
                                                                <li><a href="geofisika-potensial/kalkulator-magnet-bumi.bmkg">Kalkulator Magnet Bumi</a></li>
                                                                <li><a href="geofisika-potensial/peta-sambaran-petir.bmkg">Peta Sambaran Petir</a></li>
                                                                <li><a href="geofisika-potensial/petir.bmkg">Petir (JABODETABEK)</a></li>
                                                                <li><a href="tanda-waktu/?p=ebook-almanak">E-Book Almanak</a></li>
                                                                <li><a href="tanda-waktu/?p=ebook-peta-ketinggian-hilal">E-Book Peta Ketinggian Hilal</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        Instrumentasi &amp; Kalibrasi
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Instrumentasi, Rekayasa dan Kalibrasi</a>
                                            <ul class="dropdown-menu kir">
                                                <li><a href="#">Instrumentasi</a></li>
                                                <li><a href="#">Peta Instrumentasi BMKG</a></li>
                                                <li><a href="#">Kalibrasi</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Jaringan Komunikasi</a>
                                            <ul class="dropdown-menu kir">
                                                <li><a href="email/?p=syarat-ketentuan-pembuatan">Email BMKG</a></li>
                                                <li><a href="jaringan-komunikasi/?p=layanan">Layanan Jaringan Komunikasi</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Database</a>
                                            <ul class="dropdown-menu kir">
                                                <li><a href="http://dataonline.bmkg.go.id/" target="_blank">Data Online</a></li>
                                                <li><a href="database/?p=tentang-database">Tentang Database</a></li>
                                                <li><a href="database/?p=alur-pengumpulan-data">Alur Pengumpulan Data</a></li>
                                                <li><a href="database/?p=jenis-data">Jenis Data</a></li>
                                                <li><a href="database/?p=pengetahuan">Pengetahuan</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="meteorologi-geofisika">
            <div class="container">
                <div class="row">
                    <!-- include file="../config.bmkg" -->
                    <div class="col-md-8 md-margin-bottom-20">
                        <div class="prakicu-kota-besar no-space-carousel-block owl-carousel-v1 margin-bottom-10 md-margin-bottom-20">
                            <div class="headline">
                                <h4 class="pull-left">Prakiraan Cuaca <small>(24 Mei 2021)</small></h4>
                                <div class="owl-navigation">
                                    <div class="customNavigation">
                                        <a class="owl-btn prev-pk"><i class="fa fa-angle-left"></i></a>
                                        <a class="owl-btn next-pk"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="prakicu-kota-besar-bg">
                                <div class="owl-prakicu-kota">
                                    <div class="col-width-full id-501397">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Banda Aceh</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/cerah-am.png" alt="cerah">
                                                <p>Cerah</p>
                                                <h2 class="heading-md">32&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Banda_Aceh&Prov=Aceh&AreaID=501397&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-5008773">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Serang</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                                <p>Hujan Ringan</p>
                                                <h2 class="heading-md">32&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Serang&Prov=Banten&AreaID=5008773&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501178">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Bengkulu</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                                <p>Hujan Ringan</p>
                                                <h2 class="heading-md">32&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Bengkulu&Prov=Bengkulu&AreaID=501178&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501190">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Yogyakarta</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                                <p>Hujan Ringan</p>
                                                <h2 class="heading-md">32&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Yogyakarta&Prov=DI_Yogyakarta&AreaID=501190&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501195">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Jakarta</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                                <p>Berawan</p>
                                                <h2 class="heading-md">32&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Jakarta&Prov=DKI_Jakarta&AreaID=501195&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501205">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Jambi</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">33&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Jambi&Prov=Jambi&AreaID=501205&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501212">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Bandung</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                                <p>Hujan Ringan</p>
                                                <h2 class="heading-md">31&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Bandung&Prov=Jawa_Barat&AreaID=501212&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501262">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Semarang</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                                <p>Berawan</p>
                                                <h2 class="heading-md">33&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Semarang&Prov=Jawa_Tengah&AreaID=501262&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501306">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Surabaya</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">34&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Surabaya&Prov=Jawa_Timur&AreaID=501306&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501315">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Pontianak</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">33&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Pontianak&Prov=Kalimantan_Barat&AreaID=501315&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501342">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Palangkaraya</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                                <p>Berawan</p>
                                                <h2 class="heading-md">33&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Palangkaraya&Prov=Kalimantan_Tengah&AreaID=501342&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501365">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Pangkal Pinang</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">32&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Pangkal_Pinang&Prov=Kep_Bangka_Belitung&AreaID=501365&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501371">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Tanjung Pinang</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                                <p>Berawan</p>
                                                <h2 class="heading-md">32&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Tanjung_Pinang&Prov=Kepulauan_Riau&AreaID=501371&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501373">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Lampung</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">32&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Lampung&Prov=Lampung&AreaID=501373&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501478">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Pekanbaru</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">32&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Pekanbaru&Prov=Riau&AreaID=501478&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501545">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Padang</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">28&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Padang&Prov=Sumatera_Barat&AreaID=501545&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501568">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Palembang</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">33&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Palembang&Prov=Sumatera_Selatan&AreaID=501568&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501580">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Medan</h2>
                                                <p>13:00&nbsp;WIB</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">31&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Medan&Prov=Sumatera_Utara&AreaID=501580&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501164">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Denpasar</h2>
                                                <p>14:00&nbsp;WITA</p>
                                                <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                                <p>Berawan</p>
                                                <h2 class="heading-md">33&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Denpasar&Prov=Bali&AreaID=501164&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501197">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Gorontalo</h2>
                                                <p>14:00&nbsp;WITA</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">33&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Gorontalo&Prov=Gorontalo&AreaID=501197&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501325">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Banjarmasin</h2>
                                                <p>14:00&nbsp;WITA</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">34&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Banjarmasin&Prov=Kalimantan_Selatan&AreaID=501325&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501354">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Samarinda</h2>
                                                <p>14:00&nbsp;WITA</p>
                                                <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                                <p>Berawan</p>
                                                <h2 class="heading-md">31&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Samarinda&Prov=Kalimantan_Timur&AreaID=501354&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501359">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Tanjung Selor</h2>
                                                <p>14:00&nbsp;WITA</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">33&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Tanjung_Selor&Prov=Kalimantan_Utara&AreaID=501359&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501421">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Mataram</h2>
                                                <p>14:00&nbsp;WITA</p>
                                                <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                                <p>Berawan</p>
                                                <h2 class="heading-md">32&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Mataram&Prov=Nusa_Tenggara_Barat&AreaID=501421&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501434">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Kupang</h2>
                                                <p>14:00&nbsp;WITA</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">33&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Kupang&Prov=Nusa_Tenggara_Timur&AreaID=501434&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501485">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Mamuju</h2>
                                                <p>14:00&nbsp;WITA</p>
                                                <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                                <p>Hujan Ringan</p>
                                                <h2 class="heading-md">31&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Mamuju&Prov=Sulawesi_Barat&AreaID=501485&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501495">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Makassar</h2>
                                                <p>14:00&nbsp;WITA</p>
                                                <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                                <p>Hujan Ringan</p>
                                                <h2 class="heading-md">33&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Makassar&Prov=Sulawesi_Selatan&AreaID=501495&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-1200106">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Palu</h2>
                                                <p>14:00&nbsp;WITA</p>
                                                <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                                <p>Hujan Ringan</p>
                                                <h2 class="heading-md">28&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Palu&Prov=Sulawesi_Tengah&AreaID=1200106&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-5013053">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Kendari</h2>
                                                <p>14:00&nbsp;WITA</p>
                                                <img src="asset/img/icon-cuaca/hujan sedang-am.png" alt="hujan sedang">
                                                <p>Hujan Sedang</p>
                                                <h2 class="heading-md">31&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Kendari&Prov=Sulawesi_Tenggara&AreaID=5013053&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501534">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Manado</h2>
                                                <p>14:00&nbsp;WITA</p>
                                                <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                                <p>Hujan Ringan</p>
                                                <h2 class="heading-md">32&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Manado&Prov=Sulawesi_Utara&AreaID=501534&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501382">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Ambon</h2>
                                                <p>15:00&nbsp;WIT</p>
                                                <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                                <p>Hujan Ringan</p>
                                                <h2 class="heading-md">27&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Ambon&Prov=Maluku&AreaID=501382&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-5002253">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Sofifi</h2>
                                                <p>15:00&nbsp;WIT</p>
                                                <img src="asset/img/icon-cuaca/hujan sedang-am.png" alt="hujan sedang">
                                                <p>Hujan Sedang</p>
                                                <h2 class="heading-md">31&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Sofifi&Prov=Maluku_Utara&AreaID=5002253&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501447">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Jayapura</h2>
                                                <p>15:00&nbsp;WIT</p>
                                                <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                                <p>Cerah Berawan</p>
                                                <h2 class="heading-md">31&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Jayapura&Prov=Papua&AreaID=501447&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-width-full id-501467">
                                        <div class="carousel-block-table prakicu-kota">
                                            <div class="service-block bg-cuaca cerah-berawan-siang">
                                                <h2 class="kota">Manokwari</h2>
                                                <p>15:00&nbsp;WIT</p>
                                                <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                                <p>Hujan Ringan</p>
                                                <h2 class="heading-md">31&deg;C</h2>
                                                <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Manokwari&Prov=Papua_Barat&AreaID=501467&lang=ID"></a>
                                                <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="right-arrow-svgrepo-com">
                                                            <g id="Group" fill="#FFA500">
                                                                <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                                <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                            </g>
                                                            <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="peringatan-dini-home owl-carousel-v1 md-margin-bottom-20">
                            <div class="clearfix">
                                <div class="peringatan-dini-home-head col-md-2 no-padding">
                                    <h4><span></span>Peringatan Dini</h4>
                                </div>
                                <div class="peringatan-dini-home-bg col-md-10">
                                    <div class="owl-peringatan-dini">
                                        <div><strong>24 Mei 2021 | Aceh</strong>Waspada hujan dengan intensitas sedang hingga lebat dapat disertai angin kencang dan petir untuk wilayah Aceh Tenggara, dan sekitarnya.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=01&NamaProv=Aceh"></a></div>
                                        <div><strong>24 Mei 2021 | Banten</strong>Waspada potensi hujan sedang hingga lebat yang dapat disertai kilat/petir dan angin kencang di sebagian besar wilayah Kab. Lebak, Kab. Pandeglang bagian Utara, Kab. Tangerang bagian Selatan, Kota Tangerang dan Kota Tangerang Selatan.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=04&NamaProv=Banten"></a></div>
                                        <div><strong>24 Mei 2021 | Bengkulu</strong>Waspada potensi hujan dengan intensitas sedang hingga lebat da[at disertai kilat/petir dan angin kencang di wilayah Kab. Bengkulu Utara, Lebong, Rejang Lebong, Kepahiang, Bengkulu Tengah, Seluma dan Kaur.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=05&NamaProv=Bengkulu"></a></div>
                                        <div><strong>24 Mei 2021 | DKI Jakarta</strong>Waspada Potensi hujan disertai kilat/petir dan angin kencang di Jakpus, Jakbar, Jaksel, dan Jaktim pada sore dan malam hari<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=07&NamaProv=DKI Jakarta"></a></div>
                                        <div><strong>24 Mei 2021 | Gorontalo</strong>WASPADA POTENSI HUJAN DENGAN INTENSITAS SEDANG HINGGA LEBAT YANG DAPAT DISERTAI KILAT/PETIR DAN ANGIN KENCANG BERDURASI SINGKAT ANTARA SIANG DAN SORE HARI DI WILAYAH POPAYATO, MARISA, TILAMUTA, SUMALATA, PAGUYAMAN PANTAI, PINOGU, ANGGREK, KWANDANG, BATUDAA, DAN SEKITARNYA.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=08&NamaProv=Gorontalo"></a></div>
                                        <div><strong>24 Mei 2021 | Jawa Barat</strong>Waspada potensi hujan yang dapat disertai kilat/petir dan angin kencang pada siang/sore hingga dini hari di wilayah Kota dan Kota dan Kab. Bogor, Kota Depok, Kota dan Kab. Sukabumi,&nbsp; Kab. Cianjur, Kab dan Kota Bandung, Kab Bandung Barat, Kota Cimahi, Kab Sumedang, Kab Majalengka, Kab Karawang, Kab dan Kota Bekasi, Kab Purwakarta, Kab Subang, Kab Indramayu, Kab dan Kota Cirebon, Kab Garut, Kab dan Kota Tasikmalaya, Kab Ciamis, Kota Banjar, Kab Kuningan.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=10&NamaProv=Jawa Barat"></a></div>
                                        <div><strong>24 Mei 2021 | Jawa Timur</strong>Waspadai hujan intensitas sedang hingga lebat disertai petir dan angin kencang sesaat pada:
                                            Siang-Sore hari di wilayah Jombang, Nganjuk, Kab. Kediri, Kab. Malang, Batu, Kab. Pasuruan, Kab. Probolinggo, Lumajang dan Situbondo.
                                            Malam hari di wilayah Lamongan, Bojonegoro dan Ngawi.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=12&NamaProv=Jawa Timur"></a></div>
                                        <div><strong>24 Mei 2021 | Kalimantan Selatan</strong>Waspada potensi hujan disertai kilat/petir dan angin kencang berdurasi singkat pada siang/sore hari di wilayah Kabupaten Kotabaru, Tanah Bumbu dan sekitarnya.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=14&NamaProv=Kalimantan Selatan"></a></div>
                                        <div><strong>24 Mei 2021 | Kalimantan Tengah</strong>Waspada potensi hujan intensitas sedang hingga lebat yang dapat disertai petir/kilat dan angin kencang di hampir sebagian besar wilayah Kalimantan Tengah.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=15&NamaProv=Kalimantan Tengah"></a></div>
                                        <div><strong>24 Mei 2021 | Kalimantan Utara</strong>Waspada potensi hujan sedang-lebat yang dapat disertai kilat/petir dan angin kencang pada malam dan dini hari di wilayah Sei Menggaris, Sembakung Atulai,&nbsp; Tana Lia,&nbsp; Tanjung Palas Utara, Nunukan, Bunyu, dan Tarakan.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=17&NamaProv=Kalimantan Utara"></a></div>
                                        <div><strong>24 Mei 2021 | Lampung</strong>Waspada potensi hujan lebat disertai kilat/petir dan angin kencang di Way Kanan, Lamteng, Lampura, Metro, Balam, Pesawaran, Pringsewu, Pesibar, Lambar, Lamsel, Tanggamus, pada sore hari.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=19&NamaProv=Lampung"></a></div>
                                        <div><strong>24 Mei 2021 | Maluku</strong>Waspada hujan dengan intensitas sedang hingga lebat disertai angin kencang di wilayah Kota Ambon, Kota Tual, Kab.: Seram Bagian Barat, Seram Bagian Timur, Maluku Tengah, Buru Selatan, Maluku Tenggara dan Kepulauan Aru.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=20&NamaProv=Maluku"></a></div>
                                        <div><strong>24 Mei 2021 | Maluku Utara</strong>WASPADA POTENSI TERJADI HUJAN SEDANG-LEBAT DISERTAI PETIR DAN ANGIN KENCANG DI WILAYAH JAILOLO, SIDANGOLI, SOFIFI, TIDORE, TERNATE, MOROTAI PADA PAGI &amp; SIANG HARI.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=21&NamaProv=Maluku Utara"></a></div>
                                        <div><strong>24 Mei 2021 | Nusa Tenggara Barat</strong>Waspadai adanya potensi hujan sedang hingga lebat yang dapat disertai kilat/petir dan angin kencang di sebagian wilayah Kota Mataram, Lombok Utara, Lombok Timur, Lombok Tengah, Sumbawa Barat, pada siang hingga malam hari, dan waspadai tinggi gelombang yang mencapai 2 meter atau lebih di Selat Lombok bag. selatan, Selat Alas bag. selatan, Samudra Hindia selatan NTB dan Selat Sape bag. selatan.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=22&NamaProv=Nusa Tenggara Barat"></a></div>
                                        <div><strong>24 Mei 2021 | Papua</strong>BERPOTENSI HUJAN SEDANG HINGGA LEBAT DI WILAYAH AGATS, SUMOHAI, DAN MAMBERAMO ULU PADA SIANG HINGGA MALAM HARI.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=24&NamaProv=Papua"></a></div>
                                        <div><strong>24 Mei 2021 | Sulawesi Tengah</strong>Berpotensi hujan dengan intensitas sedang hingga lebat disertai petir/kilat dan angin kencang pada Siang dan Malam hari di wilayah Kab/Kota : Palu, Donggala, Sigi, Parimo, Poso, Touna, Tolitoli, Buol, Morowali, Morowali Utara, Banggai, Banggai Laut dan Banggai Kepulauan<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=29&NamaProv=Sulawesi Tengah"></a></div>
                                        <div><strong>24 Mei 2021 | Sulawesi Tenggara</strong>Berpotensi Hujan Sedang di wilayah Kendari, Konawe Selatan, Konawe Utara, Konawe, dan Kolaka Timur<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=30&NamaProv=Sulawesi Tenggara"></a></div>
                                        <div><strong>24 Mei 2021 | Sulawesi Utara</strong>WASPADA POTENSI HUJAN LEBAT DI WILAYAH KEP. SITARO<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=31&NamaProv=Sulawesi Utara"></a></div>
                                        <div><strong>24 Mei 2021 | Sumatera Barat</strong>Waspada potensi hujan sedang-lebat dapat disertai petir/kilat dan angin kencang pada siang hingga sore hari di wilayah Kep. Mentawai, Pasaman, Limapuluh Kota, Payakumbuh, Agam, Bukittinggi, Tanah Datar, Kab Solok, dan Solok Selatan<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=32&NamaProv=Sumatera Barat"></a></div>
                                        <div><strong>24 Mei 2021 | Sumatera Selatan</strong>Waspada potensi hujan sedang - lebat yang dapat disertai petir/kilat dan angin kencang berdurasi singkat pada sore -&nbsp; malam hari di wilayah OKU Selatan, OKU Timur dan OKI.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=33&NamaProv=Sumatera Selatan"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 md-margin-bottom-10">

                        <div class="headline">
                            <h4>Gempabumi Terkini</h4>
                        </div>
                        <div class="gempabumi-home-bg margin-top-13">
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <a href="https://ews.bmkg.go.id/tews/data/20210524114350.mmi.jpg" class="fancybox img-hover-v1" rel="gallery1" title="Gempabumi Terkini">
                                        <img class="img-responsive" src="https://ews.bmkg.go.id/tews/data/20210524114350.mmi.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-md-6 col-xs-6 gempabumi-detail no-padding">
                                    <ul class="list-unstyled">
                                        <li><span class="waktu">24 Mei 2021, 11:43 WIB</li>
                                        <li><span class="ic magnitude"></span>2.9</li>
                                        <li><span class="ic kedalaman"></span>4 km</li>
                                        <li><span class="ic koordinat"></span>4.92 LS - 103.96 BT</li>
                                        <li><span class="ic lokasi"></span>Pusat gempa berada di darat 15 km BaratLaut lampung</li>
                                        <li><span class="ic dirasakan"></span>Dirasakan (Skala MMI): II Liwa</li>
                                        <li><a class="more" href="gempabumi/gempabumi-dirasakan.bmkg">Selengkapnya →</a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-unstyled gempabumi-detail no-bot">
                                <li><span class="ic lokasi"></span>Pusat gempa berada di darat 15 km BaratLaut lampung</li>
                                <li><span class="ic dirasakan"></span>Dirasakan (Skala MMI): II Liwa</li>
                                <li><a class="more" href="gempabumi/gempabumi-dirasakan.bmkg">Selengkapnya →</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="berita-press-release">
            <div class="container">
                <div class="row">
                    <div class="berita-utama-home col-md-8 md-margin-bottom-20">
                        <div class="headline">
                            <h4>Berita</h4>
                        </div>

                        <div class="berita-utama-home margin-bottom-30">
                            <div class="master-slider ms-skin-black-2 round-skin" id="masterslider">

                                <div class="ms-slide blog-slider">
                                    <img src="asset/plugins/master-slider/masterslider/style/blank.gif" data-src="https://cdn.bmkg.go.id/Web/upload-17.jpg" />
                                    <div class="ms-info"></div>
                                    <div class="blog-slider-title">
                                        <span class="blog-slider-posted">21 Mei 2021</span>
                                        <h2><a href="berita/?p=deputi-bidang-meteorologi-buka-pelatihan-teknis-pengamatan-meteorologi-penerbangan&lang=ID">Deputi Bidang Meteorologi Buka Pelatihan Teknis Pengamatan Meteorologi Penerbangan </a></h2>
                                    </div>
                                    <div class="ms-thumb">
                                        <p>Deputi Bidang Meteorologi Buka Pelatihan Teknis Pengamatan Meteorologi Penerbangan </p>
                                    </div>
                                </div>
                                <div class="ms-slide blog-slider">
                                    <img src="asset/plugins/master-slider/masterslider/style/blank.gif" data-src="https://cdn.bmkg.go.id/Web/bandicam-2021-05-20-09-47-44-112.jpg" />
                                    <div class="ms-info"></div>
                                    <div class="blog-slider-title">
                                        <span class="blog-slider-posted">20 Mei 2021</span>
                                        <h2><a href="berita/?p=bmkg-gelar-pelatihan-group-fellowship-training-on-the-enhancement-of-numerical-weather-prediction-2021&lang=ID">Pusdiklat BMKG Gelar Pelatihan "Group Fellowship Training On The Enhancement of Numerical Weather Prediction 2021"</a></h2>
                                    </div>
                                    <div class="ms-thumb">
                                        <p>Pusdiklat BMKG Gelar Pelatihan "Group Fellowship Training On The Enhancement of Numerical Weather Prediction 2021"</p>
                                    </div>
                                </div>
                                <div class="ms-slide blog-slider">
                                    <img src="asset/plugins/master-slider/masterslider/style/blank.gif" data-src="https://cdn.bmkg.go.id/Web/WhatsApp-Image-2021-05-12-at-12.55.01-PM-3.jpeg" />
                                    <div class="ms-info"></div>
                                    <div class="blog-slider-title">
                                        <span class="blog-slider-posted">11 Mei 2021</span>
                                        <h2><a href="berita/?p=kepala-bmkg-buoy-bppt-mampu-deteksi-ada-tidaknya-tsunami-pasca-gempa&lang=ID">Kepala BMKG: Buoy BPPT Mampu Deteksi Ada Tidaknya Tsunami Pascagempa</a></h2>
                                    </div>
                                    <div class="ms-thumb">
                                        <p>Kepala BMKG: Buoy BPPT Mampu Deteksi Ada Tidaknya Tsunami Pascagempa</p>
                                    </div>
                                </div>
                                <div class="ms-slide blog-slider">
                                    <img src="asset/plugins/master-slider/masterslider/style/blank.gif" data-src="https://cdn.bmkg.go.id/Web/WhatsApp-Image-2021-05-06-at-7.28.26-AM.jpeg" />
                                    <div class="ms-info"></div>
                                    <div class="blog-slider-title">
                                        <span class="blog-slider-posted">06 Mei 2021</span>
                                        <h2><a href="berita/?p=sli-bmkg-dorong-petani-melek-teknologi-dan-ilmu-iklim&lang=ID">SLI BMKG Dorong Petani Melek Teknologi dan Ilmu Iklim</a></h2>
                                    </div>
                                    <div class="ms-thumb">
                                        <p>SLI BMKG Dorong Petani Melek Teknologi dan Ilmu Iklim</p>
                                    </div>
                                </div>
                                <div class="ms-slide blog-slider">
                                    <img src="asset/plugins/master-slider/masterslider/style/blank.gif" data-src="https://cdn.bmkg.go.id/Web/179697340_517790412683231_7254844579949390585_n.jpg" />
                                    <div class="ms-info"></div>
                                    <div class="blog-slider-title">
                                        <span class="blog-slider-posted">04 Mei 2021</span>
                                        <h2><a href="berita/?p=tutup-rangkaian-hmd-2021-puslitbang-bmkg-gelar-kuliah-umum-bahas-dinamika-laut-dan-iklim-indonesia&lang=ID">Tutup Rangkaian HMD 2021, Puslitbang BMKG Gelar Kuliah Umum Bahas Dinamika Laut dan Iklim Indonesia</a></h2>
                                    </div>
                                    <div class="ms-thumb">
                                        <p>Tutup Rangkaian HMD 2021, Puslitbang BMKG Gelar Kuliah Umum Bahas Dinamika Laut dan Iklim Indonesia</p>
                                    </div>
                                </div>
                                <div class="ms-slide blog-slider">
                                    <img src="asset/plugins/master-slider/masterslider/style/blank.gif" data-src="https://cdn.bmkg.go.id/Web/bandicam-2021-04-30-15-36-28-471.jpg" />
                                    <div class="ms-info"></div>
                                    <div class="blog-slider-title">
                                        <span class="blog-slider-posted">30 Apr 2021</span>
                                        <h2><a href="berita/?p=rotasi-pejabat-administrasi-kepala-bmkg-ingatkan-dedikasi-dan-loyalitas&lang=ID">Rotasi Pejabat Administrasi, Kepala BMKG Ingatkan Dedikasi dan Loyalitas</a></h2>
                                    </div>
                                    <div class="ms-thumb">
                                        <p>Rotasi Pejabat Administrasi, Kepala BMKG Ingatkan Dedikasi dan Loyalitas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="http://web.meteo.bmkg.go.id/id/posko-nataru-2019-2020/posko/posko-jawa" target="_blank">
                            <img class="img-responsive" data-original="https://www.bmkg.go.id/asset/img/banner/banner-posko-monitoring-2021.png" alt="">
                            <!--<img class="img-responsive" data-original="https://www.bmkg.go.id/asset/img/banner/banner_panduan-evakuasi-gempa-tsunami-di-situasi-covid-19.jpg" alt="">-->
                        </a>
                        <!--
			<a href="cuaca/posko.bmkg">
				<img class="img-responsive" data-original="https://www.bmkg.go.id/asset/img/banner/banner_posko_natal_tahun_baru_2020.jpeg" alt="">
			</a>
			<div id="popup">
				<a href="http://web.meteo.bmkg.go.id/id/posko-nataru-2019-2020/darat" target="_blank">
					<img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/banner_posko_natal_tahun_baru_2020.jpg" alt="">
				</a>
			</div>-->

                    </div>

                    <div class="col-md-4 md-margin-bottom-10">
                        <div class="headline">
                            <h4>Siaran Pers</h4>
                        </div>

                        <div class="press-release-home-bg margin-bottom-20">
                            <div class="blog-thumb margin-bottom-20">
                                <div class="blog-thumb-mkg">
                                    <img src="https://cdn.bmkg.go.id/Web/Lokasi-gempabumi-Blitar-250x150.jpg" alt="">
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="/press-release/?p=gempabumi-tektonik-m-62-di-blitar-jawa-timur-tidak-berpotensi-tsunami&tag=press-release&lang=ID">Gempabumi Tektonik M 6,2 di Blitar-Jawa Timur, Tidak Berpotensi Tsunami</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>21 Mei 2021</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog-thumb margin-bottom-20">
                                <div class="blog-thumb-mkg">
                                    <img src="https://cdn.bmkg.go.id/Web/GBT-250x150.jpg" alt="">
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="/press-release/?p=gerhana-bulan-total-26-mei-2021&tag=press-release&lang=ID">Gerhana Bulan Total 26 Mei 2021</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>21 Mei 2021</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog-thumb margin-bottom-20">
                                <div class="blog-thumb-mkg">
                                    <img src="https://cdn.bmkg.go.id/Web/WhatsApp-Image-2021-05-21-at-8.16.20-AM-250x150.jpeg" alt="">
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="/press-release/?p=super-blood-moon-gerhana-bulan-total-26-mei-2021&tag=press-release&lang=ID">Super Blood Moon; Gerhana Bulan Total 26 Mei 2021</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>21 Mei 2021</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog-thumb margin-bottom-20">
                                <div class="blog-thumb-mkg">
                                    <img src="https://cdn.bmkg.go.id/Web/76574-gelombang-panas-250x150.jpg" alt="">
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="/press-release/?p=apakah-di-indonesia-terjadi-gelombang-panas-ini-penjelasan-bmkg&tag=press-release&lang=ID">Apakah di Indonesia Terjadi Gelombang Panas? Begini Penjelasan BMKG</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>17 Mei 2021</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <a href="gempabumi/panduan-evakuasi-gempa-tsunami-situasi-covid19.bmkg">
                            <img class="img-responsive md-margin-bottom-30" data-original="https://www.bmkg.go.id/asset/img/banner/banner_web_Panduan_evakuasi_gempa_tsunami_di_situasi_covid_19_01.png" alt="">
                        </a>

                        <!-- include file="includes/depan-section-banner-layanan.bmkg" -->
                    </div>
                </div>
            </div>
        </section>
        <section id="klimatologi">
            <div class="container">
                <div class="row margin-bottom-30 md-margin-bottom-10">
                    <div class="col-md-6 md-margin-bottom-20">
                        <div class="kualitas-udara-home no-space-carousel-block owl-carousel-v1 owl-work-v1">
                            <div class="headline">
                                <h4 class="pull-left">Kualitas Udara (PM<sub>10</sub> &amp; PM<sub>2.5</sub>)</h4>
                                <div class="owl-navigation">
                                    <div class="customNavigation">
                                        <a class="owl-btn prev-ku"><i class="fa fa-angle-left"></i></a>
                                        <a class="owl-btn next-ku"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="kualitas-udara-home-bg">
                                <div class="owl-kualitas-udara">
                                    <div class="ku-chart col-width-full PALEMBANG">
                                        <div class="ku-in">
                                            <h3 class="heading-xs">Palembang</h3>
                                            <div class="circle margin-bottom-20" id="PALEMBANG"></div>
                                            <p><a class="link-block" href="/kualitas-udara/informasi-partikulat-pm10.bmkg?Lokasi=PALEMBANG">Baik</a></p>

                                        </div>
                                    </div>

                                    <div class="ku-chart col-width-full PANGKALANBUN">
                                        <div class="ku-in">
                                            <h3 class="heading-xs">Pangkalanbun</h3>
                                            <div class="circle margin-bottom-20" id="PANGKALANBUN"></div>
                                            <p><a class="link-block" href="/kualitas-udara/informasi-partikulat-pm10.bmkg?Lokasi=PANGKALANBUN">Baik</a></p>

                                        </div>
                                    </div>

                                    <div class="ku-chart col-width-full CIBEUREUM">
                                        <div class="ku-in">
                                            <h3 class="heading-xs">Cibeureum</h3>
                                            <div class="circle margin-bottom-20" id="CIBEUREUM"></div>
                                            <p><a class="link-block" href="/kualitas-udara/informasi-partikulat-pm10.bmkg?Lokasi=CIBEUREUM">Sedang</a></p>

                                        </div>
                                    </div>

                                    <div class="ku-chart col-width-full KOTOTABANG">
                                        <div class="ku-in">
                                            <h3 class="heading-xs">Kototabang</h3>
                                            <div class="circle margin-bottom-20" id="KOTOTABANG"></div>
                                            <p><a class="link-block" href="/kualitas-udara/informasi-partikulat-pm10.bmkg?Lokasi=KOTOTABANG">Baik</a></p>

                                        </div>
                                    </div>

                                    <div class="ku-chart col-width-full KEMAYORAN">
                                        <div class="ku-in">
                                            <h3 class="heading-xs">Kemayoran</h3>
                                            <div class="circle margin-bottom-20" id="KEMAYORAN"></div>
                                            <p><a class="link-block" href="/kualitas-udara/informasi-partikulat-pm10.bmkg?Lokasi=KEMAYORAN">Sedang</a></p>

                                        </div>
                                    </div>

                                </div>
                                <ul class="ku-legend">
                                    <li>0&ndash;50 <span>&micro;gr/m<sup>3</sup></span><small>Baik</small></li>
                                    <li>51&ndash;150 <span>&micro;gr/m<sup>3</sup></span><small>Sedang</small></li>
                                    <li>151&ndash;350 <span>&micro;gr/m<sup>3</sup></span><small>Tidak Sehat</small></li>
                                    <li>351&ndash;420 <span>&micro;gr/m<sup>3</sup></span><small>Sangat Tidak Sehat</small></li>
                                    <li>> 420 <span>&micro;gr/m<sup>3</sup></span><small>Berbahaya</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 md-margin-bottom-20">
                        <div class="headline">
                            <h4>Informasi Iklim</h4>
                        </div>
                        <div class="img-mkg-home-bg">
                            <a href="https://cdn.bmkg.go.id/DataMKG/CEWS/pch/pch.bulan.1.cond1.png?id=85621tumfh6x54f6hs7it0d" class="fancybox img-hover-v1" rel="gallery" title="Informasi Ikilim">
                                <img class="img-responsive" data-original="https://cdn.bmkg.go.id/DataMKG/CEWS/pch/pch.bulan.1.cond1.png?id=85621tumfh6x54f6hs7it0d" alt="Informasi Ikilim">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 md-margin-bottom-20">
                        <div class="headline">
                            <h4>Hari Tanpa Hujan</h4>
                        </div>
                        <div class="img-mkg-home-bg">
                            <a href="https://cdn.bmkg.go.id/DataMKG/CEWS/hth/PetaMonitoringHariTanpaHujan-Indonesia.jpg?id=85621tumfh6x54f6hs7it0d" class="fancybox img-hover-v1" rel="gallery" title="Hari Tanpa Hujan">
                                <img class="img-responsive" data-original="https://cdn.bmkg.go.id/DataMKG/CEWS/hth/PetaMonitoringHariTanpaHujan-Indonesia.jpg?id=85621tumfh6x54f6hs7it0d" alt="Hari Tanpa Hujan">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6 md-margin-bottom-20">
                        <div class="headline">
                            <h4>Citra Satelit</h4>
                        </div>
                        <div class="img-mkg-home-bg">
                            <a href="https://inderaja.bmkg.go.id/IMAGE/HIMA/H08_EH_Indonesia.png?id=85621tumfh6x54f6hs7it0d" class="fancybox img-hover-v1" rel="gallery" title="Citra Satelit">
                                <img class="img-responsive" data-original="https://inderaja.bmkg.go.id/IMAGE/HIMA/H08_EH_Indonesia.png?id=85621tumfh6x54f6hs7it0d" alt="Citra Satelit">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 md-margin-bottom-20">
                        <div class="headline">
                            <h4>Prakiraan Tinggi Gelombang</h4>
                        </div>
                        <div class="img-mkg-home-bg">
                            <a href="https://cdn.bmkg.go.id/DataMKG/MEWS/maritim/gelombang_maritim.png?id=85621tumfh6x54f6hs7it0d" class="fancybox img-hover-v1" rel="gallery" title="Prakiraan Tinggi Gelombang">
                                <img class="img-responsive" data-original="https://cdn.bmkg.go.id/DataMKG/MEWS/maritim/gelombang_maritim.png?id=85621tumfh6x54f6hs7it0d" alt="Prakiraan Tinggi Gelombang">
                            </a>
                        </div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="col-md-3 col-sm-6 md-margin-bottom-10">
                        <div class="headline">
                            <h4>Prakiraan Angin</h4>
                        </div>
                        <div class="img-mkg-home-bg">
                            <a href="https://cdn.bmkg.go.id/DataMKG/MEWS/angin/streamline_d1.jpg?id=85621tumfh6x54f6hs7it0d" class="fancybox img-hover-v1" rel="gallery" title="Prakiraan Angin">
                                <img class="img-responsive" data-original="https://cdn.bmkg.go.id/DataMKG/MEWS/angin/streamline_d1.jpg?id=85621tumfh6x54f6hs7it0d" alt="Prakiraan Angin">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 md-margin-bottom-10">
                        <div class="headline">
                            <h4>Potensi Kebakaran Hutan</h4>
                        </div>
                        <div class="img-mkg-home-bg">
                            <a href="https://cdn.bmkg.go.id/DataMKG/MEWS/spartan/36_indonesia_ffmc_01.png?id=85621tumfh6x54f6hs7it0d" class="fancybox img-hover-v1" rel="gallery" title="Potensi Kebakaran Hutan">
                                <img class="img-responsive" data-original="https://cdn.bmkg.go.id/DataMKG/MEWS/spartan/36_indonesia_ffmc_01.png?id=85621tumfh6x54f6hs7it0d" alt="Potensi Kebakaran Hutan">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="foto-artikel-pengumuman">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 md-margin-bottom-20">
                        <div class="foto-daerah-home tab-v1">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#foto">Berita Foto</a></li>
                                <li><a data-toggle="tab" href="#daerah">Berita Daerah</a></li>
                            </ul>

                            <div class="tab-content foto-daerah-home-bg margin-top-13">
                                <div id="foto" class="tab-pane fade in active">
                                    <div class="blog-thumb margin-bottom-20">
                                        <div class="blog-thumb-mkg">
                                            <img data-original="https://cdn.bmkg.go.id/Web/bandicam-2021-05-17-16-29-16-194-250x150.jpg" alt="" width="120" height="72">
                                        </div>
                                        <div class="blog-thumb-desc">
                                            <h3><a href="berita/?p=bmkg-gelar-halal-bi-halal-idul-fitri-1442h-secara-daring&lang=ID">BMKG Gelar Halal Bi Halal Idul Fitri 1442 H Secara Daring</a></h3>
                                            <ul class="blog-thumb-info">
                                                <li>17 Mei 2021</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="blog-thumb margin-bottom-20">
                                        <div class="blog-thumb-mkg">
                                            <img data-original="https://cdn.bmkg.go.id/Web/foto-utama-124-250x150.jpg" alt="" width="120" height="72">
                                        </div>
                                        <div class="blog-thumb-desc">
                                            <h3><a href="berita/?p=tim-psgt-lakukan-pengamatan-hilal-di-pantai-karnaval-ancol&lang=ID">Tim PSGT Lakukan Pengamatan Hilal di Pantai Karnaval Ancol</a></h3>
                                            <ul class="blog-thumb-info">
                                                <li>13 Apr 2021</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="blog-thumb margin-bottom-20">
                                        <div class="blog-thumb-mkg">
                                            <img data-original="https://cdn.bmkg.go.id/Web/SIDOARJO-5-250x150.jpg" alt="" width="120" height="72">
                                        </div>
                                        <div class="blog-thumb-desc">
                                            <h3><a href="berita/?p=kunjungan-kerja-kepala-bmkg-di-stasiun-meteorologi-juanda-sidoarjo&lang=ID">Kunjungan Kerja Kepala BMKG di Stasiun Meteorologi Juanda Sidoarjo</a></h3>
                                            <ul class="blog-thumb-info">
                                                <li>08 Mar 2021</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div id="daerah" class="tab-pane fade in">
                                    <div class="blog-thumb margin-bottom-20">
                                        <div class="blog-thumb-mkg">
                                            <img data-original="https://cdn.bmkg.go.id/Web/2-36-250x150.jpeg" alt="" width="120" height="72">
                                        </div>
                                        <div class="blog-thumb-desc">
                                            <h3><a href="berita/?p=membangun-sinergi-bersama-media-bmkg-sorong-perkuat-perjanjian-kerja-sama-antara-rri-sorong-dan-tv-cwm-sorong&lang=ID">Membangun Sinergi Bersama Media, BMKG Sorong Perkuat Perjanjian Kerja Sama Antara RRI Sorong dan TV CWM Sorong</a></h3>
                                            <ul class="blog-thumb-info">
                                                <li>11 Mei 2021</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="blog-thumb margin-bottom-20">
                                        <div class="blog-thumb-mkg">
                                            <img data-original="https://cdn.bmkg.go.id/Web/WhatsApp-Image-2021-05-07-at-06.49.13-250x150.jpeg" alt="" width="120" height="72">
                                        </div>
                                        <div class="blog-thumb-desc">
                                            <h3><a href="berita/?p=inspeksi-kepala-bbmkg-wilayah-i-medan-ke-stasiun-geofisika-deli-serdang&lang=ID">Inspeksi Kepala BBMKG Wilayah I Medan ke Stasiun Geofisika Deli Serdang</a></h3>
                                            <ul class="blog-thumb-info">
                                                <li>07 Mei 2021</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="blog-thumb margin-bottom-20">
                                        <div class="blog-thumb-mkg">
                                            <img data-original="https://cdn.bmkg.go.id/Web/WhatsApp-Image-2021-05-07-at-11.11.49-250x150.jpeg" alt="" width="120" height="72">
                                        </div>
                                        <div class="blog-thumb-desc">
                                            <h3><a href="berita/?p=kenalkan-potensi-ancaman-gempabumi-dan-tsunami-stageof-sorong-lakukan-goes-to-school&lang=ID">Kenalkan Potensi Ancaman Gempabumi dan Tsunami, Stageof Sorong Lakukan Goes To School</a></h3>
                                            <ul class="blog-thumb-info">
                                                <li>07 Mei 2021</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 artikel-pengumuman-home md-margin-bottom-20">
                        <div class="headline">
                            <h4>Artikel</h4>
                        </div>

                        <div class="blog-thumb margin-bottom-10">
                            <div class="blog-thumb-desc">
                                <h3><a href="/artikel/?p=dampak-penambahan-jaringan-inatews-di-kab-maros-sulawesi-selatan&tag=artikel&lang=ID">Dampak Penambahan Jaringan InaTEWS di Kab. Maros, Sulawesi Selatan</a></h3>
                                <ul class="blog-thumb-info">
                                    <li>24 Mei 2021</li>
                                </ul>
                            </div>
                        </div>

                        <div class="blog-thumb margin-bottom-10">
                            <div class="blog-thumb-desc">
                                <h3><a href="/artikel/?p=gerhana-bulan-total-super-blood-moon&tag=artikel&lang=ID">Gerhana Bulan Total (Super Blood Moon) </a></h3>
                                <ul class="blog-thumb-info">
                                    <li>19 Mei 2021</li>
                                </ul>
                            </div>
                        </div>

                        <div class="blog-thumb margin-bottom-10">
                            <div class="blog-thumb-desc">
                                <h3><a href="/artikel/?p=analisa-lengkap-kejadian-hujan-lebat-dan-anging-kencang-puting-beliung-di-desa-labuhan-ratu-ii-kecamatan-way-jepara-lampung-timur&tag=artikel&lang=ID">Analisis Lengkap Kejadian Hujan Lebat dan Anging Kencang (Puting Beliung) di Desa Labuhan Ratu II Kecamatan Way Jepara Lampung Timur</a></h3>
                                <ul class="blog-thumb-info">
                                    <li>10 Mei 2021</li>
                                </ul>
                            </div>
                        </div>

                        <div class="blog-thumb margin-bottom-10">
                            <div class="blog-thumb-desc">
                                <h3><a href="/artikel/?p=analisis-klimatologis-terkait-hujan-ekstrem-di-kecamatan-kediri-lombok-barat-01-mei-2021&tag=artikel&lang=ID">Analisis Klimatologis Terkait Hujan Ekstrem Di Kecamatan Kediri Lombok Barat 01 Mei 2021</a></h3>
                                <ul class="blog-thumb-info">
                                    <li>05 Mei 2021</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="artikel-pengumuman-home col-md-4 md-margin-bottom-20">
                        <div class="headline">
                            <h4>Pengumuman</h4>
                        </div>

                        <div class="blog-thumb margin-bottom-10">
                            <div class="blog-thumb-desc">
                                <h3><a href="/pengumuman/?p=penempatan-tugas-lulusan-ikatan-dinas-stmkg-program-diploma-iv-tahun-2020&tag=pengumuman&lang=ID">Penempatan Tugas Lulusan Ikatan Dinas STMKG Program Diploma IV Tahun 2020</a></h3>
                                <ul class="blog-thumb-info">
                                    <li>21 Mei 2021</li>
                                </ul>
                            </div>
                        </div>

                        <div class="blog-thumb margin-bottom-10">
                            <div class="blog-thumb-desc">
                                <h3><a href="/pengumuman/?p=pemanggilan-peserta-pelatihan-teknis-meteorologi-penerbangan-secara-online-tahun-2021&tag=pengumuman&lang=ID">Pemanggilan Peserta Pelatihan Teknis Meteorologi Penerbangan Secara Online Tahun 2021</a></h3>
                                <ul class="blog-thumb-info">
                                    <li>18 Mei 2021</li>
                                </ul>
                            </div>
                        </div>

                        <div class="blog-thumb margin-bottom-10">
                            <div class="blog-thumb-desc">
                                <h3><a href="/pengumuman/?p=pengumuman-hasil-seleksi-penyesuaian-inpassing-jabatan-fungsional-analis-pengelolaan-keuangan-apbn-pranata-keuangan-apbn-dan-penata-laksana-barang-pegawai-bmkg-tahun-2021&tag=pengumuman&lang=ID">Pengumuman Hasil Seleksi Penyesuaian / Inpassing Jabatan Fungsional Analis Pengelolaan Keuangan APBN, Pranata Keuangan APBN, dan Penata Laksana Barang Pegawai BMKG Tahun 2021</a></h3>
                                <ul class="blog-thumb-info">
                                    <li>10 Mei 2021</li>
                                </ul>
                            </div>
                        </div>

                        <div class="blog-thumb margin-bottom-10">
                            <div class="blog-thumb-desc">
                                <h3><a href="/pengumuman/?p=tawaran-mengikuti-pelatihan-daring-rtc-nanjing-nuist-tahun-2021&tag=pengumuman&lang=ID">Tawaran Mengikuti Pelatihan Daring RTC Nanjing/NUIST Tahun 2021</a></h3>
                                <ul class="blog-thumb-info">
                                    <li>10 Mei 2021</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <section id="partner" class="margin-bottom-30">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12md-margin-bottom-20">
                        <div class="banner-layanan-home owl-carousel-v1">
                            <div class="owl-banner-layanan">
                                <!--<div class="col-md-12">
			<a href="#">
				<img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/bersatu-lawan-terorisme.jpg" alt="Bersatu Lawan Terorisme">
			</a>
		</div>-->
                                <div class="col-md-12">
                                    <a href="https://www.wmo.int/" target="_blank">
                                        <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/banner-wmo.jpg" alt="WMO">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="http://epengawasan.bmkg.go.id/wbs/" target="_blank">
                                        <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/banner-epengawasan.jpg" alt="E-Pengawasan">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://www.lapor.go.id/" target="_blank">
                                        <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/Lapor-UKP4.jpg" alt="LAPOR!">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://www.bmkg.go.id/rb" target="_blank">
                                        <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/banner-reformasi-birokrasi.jpg" alt="Reformasi Birokrasi BMKG">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://www.bmkg.go.id/profil/?p=stop-pungli-bmkg" target="_blank">
                                        <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/saber-pungli.jpg" alt="Saber Pungli">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="http://dataonline.bmkg.go.id/home" target="_blank">
                                        <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/banner_data_online.jpg" alt="Data Online">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="http://puslitbang.bmkg.go.id/jmg" target="_blank">
                                        <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/banner-journalMG.jpg" alt="Jurnal Meteorologi dan Geofisika">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="http://inatews.bmkg.go.id/new/query_gmpqc.php" target="_blank">
                                        <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/dataGempa.jpg" alt="Data Gempabumi">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://www.bmkg.go.id/geofisika-potensial/kalkulator-magnet-bumi.bmkg" target="_blank">
                                        <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/kalkulator-magnet.jpg" alt="Kalkulator Magnet Bumi">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="#">
                                        <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/mottobmkg.jpg" alt="Motto BMKG">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://www.bmkg.go.id/profil/?p=maklumat-pelayanan">
                                        <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/maklumatpelayanan.jpg" alt="Maklumat Pelayanan">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="http://lpse.bmkg.go.id" target="_blank">
                                        <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/lpse.jpg" alt="LPSE">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer-v8">
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 column-one md-margin-bottom-30">
                            <div class="logo-circle margin-bottom-20">
                                <a href="../"><img class="footer-logo" src="https://www.bmkg.go.id/asset/img/logo/logo-bmkg.svg" alt=""></a>
                            </div>
                            <span>Kantor Pusat</span>
                            <p>Jl. Angkasa I No.2 Kemayoran<br>Jakarta Pusat, DKI Jakarta 10610<br>PO Box 3540 Jkt.</p>
                            <hr>
                            <span>Tel. & Fax</span>
                            <p>Tel. (021) 4246321<br>Fax (021) 4246703</p>
                            <hr>
                            <span>Email:</span>
                            <a href="mailto:info@bmkg.go.id">info@bmkg.go.id</a>
                        </div>

                        <div class="col-md-3 col-sm-6 md-margin-bottom-30">
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
                                <!--<li class="ften"><i class="fa fa-angle-right"></i><a href="http://perpustakaan.bmkg.go.id" target="_blank">E-Perpustakaan BMKG</a></li>-->
                            </ul>
                        </div>

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
                                <li><a href="https://twitter.com/infoBMKG" target="_blank"><i class="rounded-x fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/infoBMKG" target="_blank"><i class="rounded-x fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/infoBMKG" target="_blank"><i class="rounded-x fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/infoBMKG" target="_blank"><i class="rounded-x fa fa-youtube"></i></a></li>
                            </ul>
                        </div>

                        <div class="col-md-3 col-sm-6 md-margin-bottom-30">

                            <!DOCTYPE html>
                            <h2>Media BMKG</h2>
                            <a class="embedmedia" href="https://www.bmkg.go.id/video/?p=kaleidoskop-bmkg-2019-dan-outlook-bmkg-2020" target="_blank">
                                <img class="img-responsive loaded" data-original="https://cdn.bmkg.go.id/Web/thumbnail_refleksi-2019-Outlook2020.jpg" src="https://cdn.bmkg.go.id/Web/thumbnail_refleksi-2019-Outlook2020.jpg" alt="Media BMKG" />
                                <span class="playmedia"></span>
                            </a>
                            <h4><a href="https://www.bmkg.go.id/video/?p=kaleidoskop-bmkg-2019-dan-outlook-bmkg-2020" target="_blank">Kaleidoskop BMKG 2019 dan Outlook BMKG 2020</a></h4>

                            <!--
<h2>Media BMKG</h2>
<a class="embedmedia" href="http://media.bmkg.go.id/vod.bmkg" target="_blank">
	<img class="img-responsive loaded" data-original="https://cdn.bmkg.go.id/Web/BMKG-VOD_20195159118.jpg" src="https://cdn.bmkg.go.id/Web/BMKG-VOD_20195159118.jpg" alt="Media BMKG" />
	<span class="playmedia"></span>
</a>
<h4><a href="http://media.bmkg.go.id/vod.bmkg" target="_blank">Simulasi Gempabumi Kuat dalam Rangka Hari Kesiapsiagaan Bencana Tahun 2019</a></h4>-->
                        </div>
                    </div>
                </div>
            </footer>
            <footer class="copyright">
                <div class="container">
                    <ul class="list-inline terms-menu">
                        <li>&copy; 2021 - Badan Meteorologi, Klimatologi, dan Geofisika</li>
                        <li class="home"><a href="../profil/?p=kontak-kami">Kontak Kami</a></li>
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