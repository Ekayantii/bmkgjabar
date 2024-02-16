        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?php echo site_url('home/index'); ?>">Home</a></li>
                                    <li><a href="<?php echo site_url('home/about'); ?>">Tentang</a></li>
                                    <li><a href="#">Cuaca</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <p>Prakiraan Cuaca</p>
                                                <li><a href="<?php echo site_url('home/PDCJ'); ?>">Peringatan Dini Cuaca Jabar</a></li>
                                                <li><a href="<?php echo site_url('home/PCJ'); ?>">Prakiraan Cuaca Hari Ini Jabar</a></li>
                                                <li><a href="<?php echo site_url('home/PCBD'); ?>">Prakiraan Cuaca Berbasis Dampak</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <p>Prospek Cuaca Harian</p>
                                                <li><a href="<?php echo site_url('home/PC3H'); ?>">Prakiraan Cuaca 3 hari</a></li>
                                                <li><a href="<?php echo site_url('home/PCM'); ?>">Prakiraan Cuaca Mingguan</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">Iklim</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <p>Informasi Iklim Terkini</p>
                                                <li><a href="<?php echo site_url('home/PDIJ'); ?>">Peringatan Dini Iklim Jabar</a></li>
                                                <li><a href="#"></a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <p>Analisa Iklim</p>
                                                <li><a href="<?php echo site_url('home/HTHJ'); ?>">Hari Tanpa Hujan Jabar</a></li>
                                                <li><a href="<?php echo site_url('home/ACHDSH'); ?>">Analisis Curah Hujan dan Sifat Hujan</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <p>Informasi Iklim Lainnya Jabar</p>
                                                <li><a href="<?php echo site_url('home/NHB'); ?>">Normal Hujan Bulanan</a></li>
                                                <li><a href="<?php echo site_url('home/NMKH'); ?>">Normal Musim Kemarau dan Hujan</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="<?php echo site_url('home/buletin'); ?>">Buletin</a></li>
                                    <li><a href="<?php echo site_url('home/Berita'); ?>">Berita</a></li>
                                    <li><a href="<?php echo site_url('home/Galeri'); ?>">Galeri Kegiatan</a></li>
                                    <li><a href="<?php echo site_url('auth'); ?>">Login</a></li>
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img src="<?= base_url('front-end/'); ?>assets/img/core-img/call2.png" alt=""> 087881153333</a>
                        </div>
                    </nav>