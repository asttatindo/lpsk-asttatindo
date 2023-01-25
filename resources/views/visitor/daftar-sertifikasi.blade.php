<!doctype html>
<html lang="en-gb" class="no-js">

<head>
    <meta charset="utf-8">
    <title>Daftar Sertifikasi
    </title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{ asset('visitor/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/js/owl-carousel/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/js/owl-carousel/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/css/magnific-popup.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('visitor/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('visitor/css/etlinefont.css') }}">
    <link href="{{ asset('visitor/css/style.css') }}" type="text/css" rel="stylesheet" />
    <style>
        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        .footer {
            display: flex;
            flex-flow: row wrap;
            padding: 60px 150px 20px 150px;
            color: #fff;
            background-color: #212121;
            border-top: 1px solid #fff;
        }

        .footer>* {
            flex: 1 100%;
        }

        .footer__addr {
            margin-right: 1.25em;
            margin-bottom: 2em;
        }

        .footer__logo {
            font-family: 'Open-Sans', sans-serif;
            font-weight: 400;
            text-transform: uppercase;
            font-size: 3rem;
            color: #fff
        }

        .footer__addr h2 {
            margin-top: 1.3em;
            font-size: 15px;
            font-weight: 400;
        }

        .nav__title {
            font-weight: 400;
            font-size: 15px;
            color: #fff;
        }

        .footer address {
            font-style: normal;
            color: #fff;
        }

        .footer__btn {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 36px;
            max-width: max-content;
            background-color: rgb(33, 33, 33, 0.07);
            border-radius: 100px;
            color: #fff;
            line-height: 0;
            margin: 0.6em 0;
            font-size: 1rem;
            padding: 0 1.3em;
        }

        .footer ul {
            list-style: none;
            padding-left: 0;
        }

        .footer li {
            line-height: 2em;
        }

        .footer a {
            text-decoration: none;
        }

        .footer__nav {
            display: flex;
            flex-flow: row wrap;
        }

        .footer__nav>* {
            flex: 1 50%;
            margin-right: 1.25em;
        }

        .nav__ul a {
            color: #fff;
        }

        .nav__ul--extra {
            column-count: 2;
            column-gap: 1.25em;
        }

        .legal {
            display: flex;
            flex-wrap: wrap;
            color: #fff;
        }

        .heart {
            color: #fff;
        }

        @media screen and (min-width: 24.375em) {
            .legal .legal__links {
                margin-left: auto;
            }
        }

        @media screen and (min-width: 40.375em) {
            .footer__nav>* {
                flex: 1;
            }

            .nav__item--extra {
                flex-grow: 2;
            }

            .footer__addr {
                flex: 1 0px;
            }

            .footer__nav {
                flex: 2 0px;
            }
        }

        .warnaputih {
            color: #fff;
        }

        .fz {
            font-size: 16px;
        }

        .tengah {
            text-align: center;
        }

        .boxs {
            height: 200px;
            width: 200px;
            background-color: hotpink;
            color: #fff;
            padding: 10px;
            border: solid 3px black;
            margin: 0
        }

        .besar {
            font-size: 14px;
        }

        .topnav {
            background-color: #ff6900;
            position: absolute;
            width: 100%;
            overflow: hidden;
            height: 40px;
            padding: 8px;
            display: block;
            transition: top 0.3s;
            text-align: center;
        }

        .p2 {
            color: #fff;
            padding-right: 20px;
            font-weight: bold;
        }

        .nav-tengah {
            padding: 10px 0px 0px;
        }

        .menu-wrap {
            margin: 100px auto;
            text-align: center;
            padding: 25px 0px 0px 100px;
            margin: 0px 0px 0px 0px;
            position: absolute;
            left: 25%;
        }

        @media only screen and (max-width: 1185px) {
            .menu-wrap {
                margin: 100px;
                text-align: center;
                padding: 25px 0px 0px 100px;
                margin: 0px 0px 0px 0px;
                position: relative;
                left: 0%;
            }
        }

        .menu-wrap ul ul {
            display: none;
        }

        .menu-wrap ul li:hover>ul {
            display: block;
            border-radius: 0px;
        }

        .menu-wrap ul {
            background: #ff6900;
            padding: 0 20px;
            border-radius: 10px;
            list-style: none;
            position: relative;
            display: inline-table;
        }

        .menu-wrap ul:after {
            content: "";
            clear: both;
            display: block;
        }

        .menu-wrap ul li {
            float: left;
        }

        .menu-wrap ul li:hover {}

        .menu-wrap ul li:hover a {
            color: #fff;
        }

        .menu-wrap ul li a {
            display: block;
            padding: 15px 25px;
            color: #fff;
            text-decoration: none;
        }

        .menu-wrap ul ul {
            border-radius: 0px;
            padding: 0;
            position: absolute;
            top: 100%;
        }

        .menu-wrap ul ul li {
            float: none;
            position: relative;
        }

        .menu-wrap ul ul li a {
            padding: 15px 40px;
            color: #fff;
        }

        .menu-wrap ul ul li a:hover {}

        .menu-wrap ul ul ul {
            position: absolute;
            left: 100%;
            top: 0;
        }

        @media screen and (max-width: 992px) {
            .menu-wrap ul li:hover>ul {
                font-size: 10px;
                margin: 0px 0px 0px -40px;
                display: inline-table;
            }

            .menu-wrap ul li a {
                text-align: left;
                margin: 0px 0px 0px 0px;
            }
        }

        .paddinga {
            text-align: left;
        }

        .paddingaa {
            padding: 30px 30px 30px 30px;
        }

        .paddingb {
            padding: 0px 0px 0px 0px;
        }

        .margina {
            margin: 0px -17px 0px;
        }

        .marginb {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .marginc {
            margin: 0px 0px 0px;
            padding: 10px 20px;
        }

        .margind {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
            border: 0px 0px 0px 0px;
        }

        .logo-pass {
            float: left;
            line-height: 90px;
            padding: 25px 0px 25px;
        }

        .color_h {
            color: #000;
        }

        @media (max-width:768px) {
            .footer {
                padding: 60px 20px 20px 20px;
            }

            .p2 {
                font-size: 12px;
            }
        }

        .row,
        .navbar-toggle {
            margin-right: 0px;
        }

        .container {
            padding-right: 0px;
        }

        .d-flex {
            display: flex;
        }

        /* daftar sertifikasi style */
        #regForm {
            background-color: #ffffff;
            margin: 10px auto;
            margin-bottom: 5%;
            margin-top: 5%;
            padding: 0px;
            width: 100%;
            min-width: 300px;
        }

        input::placeholder {
            color: #000000;
            opacity: 1;
        }

        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #FFB580;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #FF6900;
        }
    </style>

<body data-spy="scroll" data-target="#main-menu">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#main-menu">
                        <span class="sr-only">Toggle navigation </span>
                        <span class="fa fa-bars" style="padding-right: 15px"> </span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                    </button>

                    <div class="logo-nav">
                        <a href="/">
                            <img src="lspk.png" width=300px height=60px>
                        </a>
                    </div>
                    <div class="login-nav">
                        <a href="/login">
                            <p class="login-style"><i class="fa fa-sign-in"> LOGIN</i></p>
                        </a>
                    </div>
                    <div class="clear-toggle">
                    </div>
                    <div id="main-menu" class="menu-wrap">
                        <ul class="paddingaa">
                            <b>
                                <li class="margind">
                                    <a>PROFIL LSP
                                    </a>
                                    <ul>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="#/visi">VISI & MISI
                                            </a>
                                        </li>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="/struktur">STRUKTUR
                                            </a>
                                        </li>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="/legalitas">LEGALITAS
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="margind">
                                    <a>SERTIFIKASI
                                    </a>
                                    <ul>

                                        <li class="marginb">
                                            <a class="paddinga margina" href="/proses-permohonan">PROSES PERMOHONAN
                                            </a>
                                        </li>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="/data-asesor">ASESOR
                                            </a>
                                        </li>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="/tahapan-pelaksanaan-sertifikasi">PROSEDUR
                                            </a>
                                        </li>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="#">CEK STATUS PROSES SERTIFIKASI
                                                UNTUK ASESI
                                            </a>
                                        </li>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="#">SKEMA
                                            </a>
                                        </li>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="#">TUK
                                            </a>
                                        </li>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="#">UNDUH PERSYARATAN
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="margind">
                                    <a>ANGGOTA
                                    </a>
                                    <ul>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="#">CEK KEANGGOTAAN
                                            </a>
                                        </li>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="#">STATISTIK AHLI
                                            </a>
                                        </li>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="#">STATISTIK TEKNISI
                                            </a>
                                        </li>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="#">STATISTIK OPERATOR
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="margind">
                                    <a>GALERI
                                    </a>
                                    <ul>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="/#galeri">KEGIATAN
                                            </a>
                                        </li>
                                        <li class="marginb">
                                            <a class="paddinga margina" href="/#galeri">INFORMASI
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="margind">
                                    <a href="/#alamat">HUBUNGI
                                    </a>
                                </li>
                            </b>
                        </ul>
                    </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="topnav" id="topnav">
            <p class="p2 kanan marginf">
                <a
                    href="https://www.google.com/maps/place/Dpp+Asttatindo/@-6.213958,106.844378,14z/data=!4m5!3m4!1s0x0:0x3af1fa5579bc844!8m2!3d-6.2139611!4d106.8443834?ll=-6.213958,106.844378&z=14&t=m&hl=en&gl=US&mapclient=embed&cid=265465698038040644&shorturl=1">
                    <i class="fa fa-map-marker color_h">&nbsp; Jakarta Selatan &nbsp; &nbsp;
                    </i>
                </a>
                <a href="mailto: info.lspk@asttatindo.org">
                    <i class="fa fa-envelope color_h">&nbsp; info.lspk@asttatindo.org &nbsp;
                    </i>
                </a>
                <a href="">
                </a>
                <a href="tel:+622183708284">
                    <i class="fa fa-phone color_h">&nbsp; +622183708284
                    </i>
                </a>
            </p>
        </div>
        <script>
            var prevScrollpos = window.pageYOffset;
            window.onscroll = function() {
                var currentScrollPos = window.pageYOffset;
                if (prevScrollpos > currentScrollPos) {
                    document.getElementById("topnav").style.top = "87px";
                } else {
                    document.getElementById("topnav").style.top = "-50px";
                }
                prevScrollpos = currentScrollPos;
            }
        </script>
    </header>
    <section id="page-header" class="parallax">
        <div class="container">
            <div class="breadcrumb">
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="post-content">
                    <div class="post-meta">
                    </div>
                    <div class="post-description">
                        <h1>
                            <b>Pendaftaran Uji Sertifikasi
                            </b>
                        </h1>
                        <h3>LSPK Asttatindo
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <img src="daftar-sertifikasi-bg.jpg" alt="Daftar Sertifikasi"
            style="
                  width: 100%;
                  height: 600px;
                  ">
        <div class="container">
            <div class="row">
                <div class="post-content">
                    <?php if(Session::has('error')) : ?>
                    <br>
                    <div class="alert alert-danger" role="alert">
                        {{ Session('error') }}
                    </div>
                    <?php endif; ?>
                    <form id="regForm" action="/daftar-sertifikasi" method="POST">
                        {{ csrf_field() }}
                        <div class="tab">
                            <h1 style="text-align: center;">FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI</h1>
                            <p style="text-align: center;">
                                Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan
                                anda pada saat ini.
                            </p>
                            <h4 style="text-align: center;">Data Pribadi</h4>
                            <p>Nama Lengkap<input placeholder="Nama lengkap..." name="nama_lengkap"></p>
                            <p style="margin: 0px;">Tempat & Tanggal Lahir
                            <div style="float: left;">
                                <input style="width: 435%; margin: 0px;" placeholder="Tempat lahir..."
                                    name="tempat">
                            </div>
                            <div style="float:right;">
                                <input style="border: 1px solid #aaaaaa; margin: 0px;"
                                    placeholder="Tempat, tanggal lahir..." type="date" name="tanggal_lahir">
                            </div>
                            </p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <p>Jenis Kelamin
                                <select style="border: 1px solid #aaaaaa; margin-bottom: 0px; margin-top: 0px;"
                                    name="gender">
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>
                            </p>
                            <p>Kebangsaan
                                <select onchange="wn(this);" style="border: 1px solid #aaaaaa; margin-bottom: 0px;"
                                    name="kebangsaan">
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                </select>
                            <div id="negara" style="display: none;">
                                <p>Pilih Negara<select style="border: 1px solid #aaaaaa; margin-bottom: 0px;"
                                        name="negara">
                                        <?php foreach ($country as $c) : ?>
                                        <option value="{{ $c->country }}">{{ $c->country }}</option>
                                        <?php endforeach; ?>
                                    </select></p>
                            </div>
                            </p>
                            <p>Alamat Rumah
                                <textarea style="border: 1px solid #aaaaaa; height: 100px; margin: 0px;" name="alamat" id=""
                                    cols="30" rows="20"></textarea>
                            </p>
                            <p>Kode Pos
                                <input style="border: 1px solid #aaaaaa; margin: 0px;" placeholder="Kode pos..."
                                    type="number" min="0" max="5" name="kode_pos" />
                            </p>
                            <p>Pendidikan Terakhir
                                <select style="border: 1px solid #aaaaaa; margin-bottom: 0px;" name="pendidikan">
                                    <option value="Taman Kanak-kanak">TK</option>
                                    <option value="Sekolah Dasar">Sekolah Dasar (SD)</option>
                                    <option value="Sekolah Menengah Pertama">Sekolah Dasar (SMP)</option>
                                    <option value="Sekolah Menengah Atas / Kejuruan">Sekolah Dasar (SMA/K)</option>
                                    <option value="Akademi / Politeknik / Sekolah Tinggi / Universitas">
                                        Akademi/Politeknik/Sekolah Tinggi/Universitas</option>
                                </select>
                            </p>
                        </div>

                        <div class="tab">
                            <h1 style="text-align: center;">FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI</h1>
                            <p style="text-align: center;">
                                Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan
                                anda pada saat ini.
                            </p>
                            <h4 style="text-align: center;">Data Pribadi</h4>
                            <p>Nomor Rumah<input style="border: 1px solid #aaaaaa; margin: 0px;"
                                    placeholder="No Rumah..." type="number" name="no_rumah_pribadi"></p>
                            <p>Nomor Handphone<input style="border: 1px solid #aaaaaa; margin: 0px;"
                                    placeholder="No HP..." type="number" name="no_hp_pribadi"></p>
                            <p>Nomor Kantor<input style="border: 1px solid #aaaaaa; margin: 0px;"
                                    placeholder="No Kantor..." type="number" name="no_kantor_pribadi"></p>
                            <p>Email<input style="border: 1px solid #aaaaaa; margin: 0px;" placeholder="Email..."
                                    type="email" name="email"></p>
                        </div>

                        <div class="tab">
                            <h1 style="text-align: center;">FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI</h1>
                            <p style="text-align: center;">
                                Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan
                                anda pada saat ini.
                            </p>
                            <h4 style="text-align: center;">Data Pekerjaan Sekarang</h4>
                            <p>Nama Lembaga / Perusahaan<input placeholder="Nama perusahaan..."
                                    name="nama_perusahaan"></p>
                            <p>Jabatan<input placeholder="Jabatan..." name="jabatan"></p>
                            <p>Alamat
                                <textarea style="border: 1px solid #aaaaaa; height: 100px; margin: 0px;" name="alamat_perusahaan" id=""
                                    cols="30" rows="20"></textarea>
                            </p>
                            <p>Kode Pos
                                <input style="border: 1px solid #aaaaaa; margin: 0px;" placeholder="Kode pos..."
                                    name="kode_pos_perusahaan" type="number">
                            </p>
                        </div>

                        <div class="tab">
                            <h1 style="text-align: center;">FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI</h1>
                            <p style="text-align: center;">
                                Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan
                                anda pada saat ini.
                            </p>
                            <h4 style="text-align: center;">Data Pekerjaan Sekarang</h4>
                            <p>Nomor Telepon<input style="border: 1px solid #aaaaaa; margin: 0px;"
                                    placeholder="No Telepon..." type="number" name="no_telepon_perusahaan"></p>
                            <p>Fax<input style="border: 1px solid #aaaaaa; margin: 0px;" placeholder="Fax..."
                                    type="number" name="fax_perusahaan"></p>
                            <p>Email<input style="border: 1px solid #aaaaaa; margin: 0px;" placeholder="Email..."
                                    type="email" name="email_perusahaan"></p>
                        </div>

                        <div class="tab">
                            <h1 style="text-align: center;">FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI</h1>
                            <p style="text-align: center;">
                                Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan
                                anda pada saat ini.
                            </p>
                            <h4 style="text-align: center;">Data Permohonan Sertifikasi</h4>
                            <p>Tujuan Asesmen <select onchange="lainnya(this);" name="tujuan_asesmen"
                                    style="border: 1px solid #aaaaaa; margin-bottom: 0px;" id="tujuan">
                                    <option value="rpl">RPL</option>
                                    <option value="pencapaian proses pembelajaran">Pencapaian Proses Pembelajaran
                                    </option>
                                    <option value="rcc">RCC</option>
                                    <option value="sertifikasi">Sertifikasi</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            <div id="lainnyaa" style="display: none;">
                                <p>Lainnya<input style="border: 1px solid #aaaaaa; margin: 0px;" name="tujuan_lain"
                                        placeholder="Email..." type="email"></p>
                            </div>
                            </p>
                            <p>Skema Sertifikasi <select style="border: 1px solid #aaaaaa; margin-bottom: 0px;"
                                    id="tujuan" name="skema">
                                    <option value="Manajer Pengelolaan Bangunan Gedung (Level 7)">Manajer Pengelolaan
                                        Bangunan Gedung (Level 7)</option>
                                    <option value="Ahli Teknik Bangunan Gedung">Ahli Teknik Bangunan Gedung</option>
                                    <option value="Mandor Pemasangan Baja Ringan">Mandor Pemasangan Baja Ringan
                                    </option>
                                    <option value="Pemasang Perancah dan Acuan / Cetak Beton">Pemasang Perancah dan
                                        Acuan / Cetak Beton</option>
                                    <option value="Ahli Perawatan Bangunan Gedung">Ahli Perawatan Bangunan Gedung
                                    </option>
                                    <option value="Mandor Tukang Pasang Beton Precast">Mandor Tukang Pasang Beton
                                        Precast</option>
                                    <option value="Pelaksana Lapangan Pekerjaan Gedung">Pelaksana Lapangan Pekerjaan
                                        Gedung</option>
                                    <option value="Ahli Teknik Bangunan Gedung">Ahli Teknik Bangunan Gedung</option>
                                    <option value="Mandor Pekerjaan Jalan">Mandor Pekerjaan Jalan</option>
                                    <option value="Pengawas Pekerjaan Struktur Bangunan Gedung">Pengawas Pekerjaan
                                        Struktur Bangunan Gedung</option>
                                    <option value="Tukang Besi Beton">Tukang Besi Beton</option>
                                    <option value="Ahli Utama K3 Konstruksi">Ahli Utama K3 Konstruksi</option>
                                    <option value="Ahli Madya K3 Konstruksi">Ahli Madya K3 Konstruksi</option>
                                    <option value="Ahli Muda K3 Konstruksi">Ahli Muda K3 Konstruksi</option>
                                    <option value="Ahli Utama Teknik Jalanan">Ahli Utama Teknik Jalanan</option>
                                    <option value="Ahli Muda Teknik Jalanan">Ahli Muda Teknik Jalanan</option>
                                    <option value="Pelaksana Lapangan Pengerjaan Jalan">Pelaksana Lapangan Pengerjaan
                                        Jalan</option>
                                    <option value="Pelaksana Lapangan Pekerjaan Saluran Irigasi">Pelaksana Lapangan
                                        Pekerjaan Saluran Irigasi</option>
                                    <option value="Pelaksana Produksi Campuran Aspal Panas">Pelaksana Produksi Campuran
                                        Aspal Panas</option>
                                    <option value="Ahli Utama Teknik Sumber Daya Air">Ahli Utama Teknik Sumber Daya Air
                                    </option>
                                    <option value="Ahli Madya Teknik Sumber Daya Air">Ahli Madya Teknik Sumber Daya Air
                                    </option>
                                    <option value="Ahli Muda Teknik Sumber Daya Air">Ahli Muda Teknik Sumber Daya Air
                                    </option>
                                    <option value="Ahli Utama Manajemen Konstruksi">Ahli Utama Manajemen Konstruksi
                                    </option>
                                    <option value="Ahli Madya Manajemen Konstruksi">Ahli Madya Manajemen Konstruksi
                                    </option>
                                    <option value="Ahli Muda Manajemen Konstruksi">Ahli Muda Manajemen Konstruksi
                                    </option>
                                </select></p>
                        </div>

                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <button type="button" class="btn" id="prevBtn"
                                    onclick="nextPrev(-1)">Sebelumnya</button>
                                <button type="button" class="btn" id="nextBtn"
                                    onclick="nextPrev(1)">Lanjut</button>
                            </div>
                        </div>

                        <div style="text-align:center;">
                            <span class="step">1</span>
                            <span class="step">2</span>
                            <span class="step">3</span>
                            <span class="step">4</span>
                            <span class="step">5</span>
                        </div>


                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <a href="#" class="scrollup">
        <i class="fa fa-chevron-up">
        </i>
    </a>
    <script>
        function lainnya(that) {
            if (that.value == "lainnya") {
                document.getElementById("lainnyaa").style.display = "block";
            } else {
                document.getElementById("lainnyaa").style.display = "none";
            }
        }
    </script>
    <script>
        function wn(that) {
            if (that.value == "WNA") {
                document.getElementById("negara").style.display = "block";
            } else {
                document.getElementById("negara").style.display = "none";
            }
        }
    </script>
    <script>
        var currentTab = 0;
        showTab(currentTab);

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Selanjutnya";
            }

            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");

            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("regForm").submit();
                return false;
            }

            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");

            for (i = 0; i < y.length; i++) {

                if (y[i].value == "") {
                    y[i].className += " invalid";
                    valid = false;
                }
            }

            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }

            x[n].className += " active";
        }
    </script>
    <script type="text/javascript" src="{{ asset('visitor/js/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('visitor/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('visitor/js/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('visitor/js/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('visitor/js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('visitor/js/easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('visitor/js/jquery.easypiechart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('visitor/js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ asset('visitor/js/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('visitor/js/jquery.mixitup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('visitor/js/custom.js') }}"></script>
</body>
<footer class="footer">
    <div class="footer__addr">
        <h1 class="footer__logo">
            <a href="/" class="warnaputih"> <img src="lspk2.png" height=40px width=40px></a>
            <b><a href="/" class="warnaputih">LSPK ASTTATINDO</a>
            </b>
        </h1>
        <p class="nav__title">Asosiasi Tenaga Teknik Ahli dan Terampil Indonesia (ASTTATINDO) adalah asosiasi profesi
            bidang jasa konstruksi yang merupakan wadah organisasi tenaga teknik ahli dan tenaga terampil.
        </p>
    </div>
    <ul class="footer__nav">
        <li class="nav__item">
            <h2 class="nav__title">
                <b>Keanggotaan
                </b>
            </h2>
            <ul class="nav__ul">
                <li>
                    <a href="/data-asesor">Asesor
                    </a>
                </li>
                <li>
                    <a href="#">Status Proses Permohonan
                    </a>
                </li>
                <li>
                    <a href="#">Status Keanggotaan
                    </a>
                </li>
                <li>
                    <a href="#">Statistik Keanggotaan Ahli
                    </a>
                </li>
                <li>
                    <a href="#">Statistik Keanggotaan Teknisi
                    </a>
                </li>
                <li>
                    <a href="#">Statistik Keanggotaan Operator
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav__item">
            <h2 class="nav__title">
                <b>Sertifikasi
                </b>
            </h2>
            <ul class="nav__ul">
                <li>
                    <a href="#">Prosedur
                    </a>
                </li>
                <li>
                    <a href="#">Skema
                    </a>
                </li>
                <li>
                    <a href="#">Tempat Uji Sertifikasi (TUK)
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav__item">
            <h2 class="nav__title">
                <b>Alamat
                </b>
            </h2>
            <ul class="nav__ul">
                <li>
                    <a href="https://goo.gl/maps/S93BrCe5JyFdFY4bA">Jl. Saharjo No. 76C Pasar Manggis, Setiabudi
                        Jakarta Selatan
                    </a>
                </li>
                <li>
                    <a href="Tel:02183708284">(021)83708284
                    </a>
                </li>
                <li>
                    <p class="warnaputih">Fax (021)83708265
                    </p>
                </li>
            </ul>
        </li>
        <li class="nav__item">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.753278424595!2d106.844378!3d-6.213958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3af1fa5579bc844!2sDpp%20Asttatindo!5e0!3m2!1sen!2sus!4v1628044833384!5m2!1sen!2sus"
                width="320" height="240" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </li>
    </ul>
    <div class="legal">
        <p>Copyright &copy; LSPK Asttatindo 2021
        </p>
    </div>
</footer>

</html>
