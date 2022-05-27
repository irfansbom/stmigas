<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Survei Tahunan Migas</title>
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ url('./assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ url('./assets/css/style.css') }}">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100 d-flex justify-content-between   ">
                        <a href="{{ url('/') }}">
                            <img class="logo-dark" src="{{ url('images/logolong.png') }}"
                                srcset="{{ url('images/logolong.png') }}" alt="" />
                            <img class="logo-light" src="{{ url('images/logowhitelong.png') }}"
                                srcset="{{ url('images/logowhitelong.png') }}" alt="" />
                        </a>
                        <div class="d-flex align-items-center">
                            <a href="{{ url('login') }}" class="btn btn-sm btn-white rounded-pill py-0 px-2 ">Login</a>
                        </div>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start" style="width: 0">


                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    {{-- <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item d-none d-md-block">
                                <a href="{{ url('login') }}"
                                    class="btn btn-sm btn-white rounded-pill py-0 px-2">Login</a>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div> --}}
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->
        <section class="wrapper image-wrapper bg-image bg-overlay text-white"
            data-image-src="{{ url('images/bg3.JPG') }}">
            <div class="container pt-17 pb-13 pt-md-19 pb-md-17 text-center">
                <div class="row">
                    <div class="col-md-10 col-xl-8 mx-auto">
                        <div class="post-header">
                            <div class="post-category text-line text-white">
                                <a href="#" class="text-reset" rel="category">Statistik Produksi</a>
                            </div>
                            <!-- /.post-category -->
                            <h1 class="display-1 mb-4 text-white">Badan Pusat Statistik <br> Provinsi Sumatera Selatan
                            </h1>
                            <ul class="post-meta text-white">
                                <li class="post-date"><i
                                        class="uil uil-calendar-alt"></i><span>{{ $date }}</span></li>
                                <li class="post-author"><i class="uil uil-user"></i><a
                                        href="https://sumsel.bps.go.id" class="text-reset" target="_blank"><span>By
                                            BPS Sumsel</span></a></li>
                                <li class="post-comments"><i class="uil uil-intercom-alt"></i><a
                                        href="https://zi.bpssumsel.com" class="text-reset"><span> Zona
                                            Integritas</span></a></li>
                                {{-- <li class="post-likes"><i class="uil uil-heart-alt"></i><a href="#" class="text-reset">3<span> Likes</span></a></li> --}}
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <section class="wrapper bg-light">
            <div class="container py-14 ">
                <div class="row gx-lg-8 gx-xl-12">
                    <div class="col-lg-8">
                        <div class="blog single">
                            <div class="card">
                                <figure class="card-img-top"><img src="{{ url('images/bg4.JPG') }}" alt="" />
                                </figure>
                                <div class="card-body">
                                    <div class="classic-view">
                                        <article class="post">
                                            <div class="post-content mb-5">
                                                <h2 class="h1 mb-4">Informasi Umum BPS</h2>
                                                <p>
                                                    Badan Pusat Statistik adalah Lembaga Pemerintah Non-Departemen yang
                                                    bertanggung jawab langsung kepada Presiden. Sebelumnya, BPS
                                                    merupakan Biro Pusat Statistik, yang dibentuk berdasarkan UU Nomor 6
                                                    Tahun 1960 tentang Sensus dan UU Nomer 7 Tahun 1960 tentang
                                                    Statistik. Sebagai pengganti kedua UU tersebut ditetapkan UU Nomor
                                                    16 Tahun 1997 tentang Statistik. Berdasarkan UU ini yang
                                                    ditindaklanjuti dengan peraturan perundangan dibawahnya, secara
                                                    formal nama Biro Pusat Statistik diganti menjadi Badan Pusat
                                                    Statistik.
                                                </p>


                                                Materi yang merupakan muatan baru dalam UU Nomor 16 Tahun 1997, antara
                                                lain :
                                                <ul>
                                                    <li> Jenis statistik berdasarkan tujuan pemanfaatannya terdiri atas
                                                        statistik dasar yang sepenuhnya diselenggarakan oleh BPS,
                                                        statistik sektoral yang dilaksanakan oleh instansi Pemerintah
                                                        secara mandiri atau bersama dengan BPS, serta statistik khusus
                                                        yang diselenggarakan oleh lembaga, organisasi, perorangan, dan
                                                        atau unsur masyarakat lainnya secara mandiri atau bersama dengan
                                                        BPS.</li>
                                                    <li>
                                                        Hasil statistik yang diselenggarakan oleh BPS diumumkan dalam
                                                        Berita Resmi Statistik
                                                        (BRS) secara teratur dan transparan agar masyarakat dengan mudah
                                                        mengetahui dan atau mendapatkan data yang diperlukan.
                                                    </li>
                                                    Sistem Statistik Nasional yang andal, efektif, dan efisien.
                                                    <li>

                                                        Dibentuknya Forum Masyarakat Statistik sebagai wadah untuk
                                                        menampung aspirasi masyarakat statistik, yang bertugas
                                                        memberikan saran dan pertimbangan kepada BPS.
                                                    </li>
                                                </ul>
                                                Berdasarkan undang-undang yang telah disebutkan di atas, peranan yang
                                                harus dijalankan oleh BPS adalah sebagai berikut :
                                                <ul>
                                                    <li>
                                                        Menyediakan kebutuhan data bagi pemerintah dan masyarakat. Data
                                                        ini didapatkan dari sensus atau survey yang dilakukan sendiri
                                                        dan juga dari departemen atau lembaga pemerintahan lainnya
                                                        sebagai data sekunder
                                                    </li>
                                                    <li>Membantu kegiatan statistik di departemen, lembaga pemerintah
                                                        atau institusi lainnya, dalam membangun sistem perstatistikan
                                                        nasional.</li>
                                                    <li>Mengembangkan dan mempromosikan standar teknik dan metodologi
                                                        statistik, dan menyediakan pelayanan pada bidang pendidikan dan
                                                        pelatihan statistik.</li>
                                                    <li>Membangun kerjasama dengan institusi internasional dan negara
                                                        lain untuk kepentingan perkembangan statistik Indonesia.
                                                    </li>
                                                </ul>

                                                <!-- /.row -->
                                                <figure class="card-img-top"><img
                                                        src="{{ url('images/bgtambang.png') }}" alt="" />
                                                </figure>
                                                <h3>Konsep BPS</h3>
                                                <h4>Pertambangan</h4>
                                                <p>Pertambangan adalah suatu kegiatan pengambilan endapan bahan galian
                                                    berharga dan bernilai ekonomis dari dalam kulit bumi, baik secara
                                                    mekanis maupun manual, pada permukaan bumi, di bawah permukaan bumi
                                                    dan di bawah permukaan air. Hasil kegiatan ini antara lain, minyak
                                                    dan gas bumi, batubara, pasir besi, bijih timah, bijih nikel, bijih
                                                    bauksit, bijih tembaga, bijih emas, perak dan bijih mangan.</p>
                                                <h4>Penggalian</h4>
                                                <p>
                                                    Penggalian adalah suatu kegiatan yang meliputi pengambilan segala
                                                    jenis barang galian. Barang galian adalah unsur kimia, mineral dan
                                                    segala macam batuan yang merupakan endapan alam (tidak termasuk
                                                    logam, batubara, minyak dan gas bumi dan bahan radioaktif). Bahan
                                                    galian ini biasanya digunakan sebagai bahan baku atau bahan penolong
                                                    sektor industri maupun konstruksi. Hasil kegiatan penggalian antara
                                                    lain, batu gunung, batu kali, batu kapur, koral, kerikil, batu
                                                    marmer, pasir, pasir silika, pasir kuarsa, kaolin, tanah liat dan
                                                    lain-lain.
                                                </p>
                                                <p>
                                                    Kegiatan pemecahan ,peleburan, pemurnian dan segala proses
                                                    pengolahan hasil pertambangan/penggalian tidak termasuk kegiatan
                                                    pertambangan/penggalian, akan tetapi digolongkan ke dalam kegiatan
                                                    industri.
                                                </p>
                                                <p>
                                                    Kegiatan persiapan tempat penambangan penggalian seperti pembuatan
                                                    jalan, jembatan dari dan ke arah lokasi penambangan, pengerukan,
                                                    pemasangan pipa penyaluran dan sebagainya termasuk ke dalam kegiatan
                                                    konstruksi. Sedangkan kegiatan eksplorasi dan penelitian mengenai
                                                    prospek barang tambang dan mineral termasuk ke dalam jasa
                                                    pertambangan.
                                                </p>
                                                <p>
                                                    Kegiatan pengambilan, pembersihan dan pemurnian air untuk dijadikan
                                                    air bersih termasuk dalam sektor air minum.
                                                </p>
                                                <div class="row g-6 mt-3 mb-10">
                                                    <div class="col-md-6">
                                                        <figure class="hover-scale rounded cursor-dark"><a
                                                                href="{{ url('images/prospeksi.jpeg') }}"
                                                                data-glightbox="title: Heading; description: Purus Vulputate Sem Tellus Quam"
                                                                data-gallery="post"> <img
                                                                    src="{{ url('images/prospeksi.jpeg') }}"
                                                                    alt="" /></a>
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <figure class="hover-scale rounded cursor-dark"><a
                                                                href="{{ url('images/pengolahan.jpg') }}"
                                                                data-glightbox data-gallery="post"> <img
                                                                    src="{{ url('images/pengolahan.jpg') }}"
                                                                    alt="" /></a>
                                                        </figure>
                                                    </div>
                                                    <!--/column -->
                                                    <div class="col-md-6">
                                                        <figure class="hover-scale rounded cursor-dark"><a
                                                                href="{{ url('images/eksplorasi.jpg') }}"
                                                                data-glightbox data-gallery="post"> <img
                                                                    src="{{ url('images/eksplorasi.jpg') }}"
                                                                    alt="" /></a>
                                                        </figure>
                                                    </div>
                                                    <!--/column -->
                                                    <div class="col-md-6">
                                                        <figure class="hover-scale rounded cursor-dark"><a
                                                                href="{{ url('images/eksploitasi.jpg') }}"
                                                                data-glightbox data-gallery="post"> <img
                                                                    src="{{ url('images/eksploitasi.jpg') }}"
                                                                    alt="" /></a>
                                                        </figure>
                                                    </div>
                                                    <!--/column -->

                                                    <!--/column -->
                                                </div>
                                                <h4>Tahapan Kegiatan Pertambangan</h4>
                                                <p>Tahapan kegiatan pertambangan meliputi: prospeksi dan penelitian
                                                    umum, eksplorasi, persiapan penambangan dan pembangunan, eksploitasi
                                                    dan pengolahan/pengilangan/pemurnian.

                                                <ol style="font-weight: bold;">
                                                    <li>
                                                        <h6>Prospeksi</h6>
                                                        <p style="font-weight:normal;">
                                                            Prospeksi adalah suatu kegiatan penyelidikan dan pencarian
                                                            untuk menemukan endapan bahan galian atau mineral berharga.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h6>Eksplorasi</h6>
                                                        <p style="font-weight:normal;">
                                                            Eksplorasi adalah suatu kegiatan lanjutan dari prospeksi
                                                            yang meliputi pekerjaan-pekerjaan untuk mengetahui ukuran,
                                                            bentuk, posisi, kadar rata-rata dan besarnya cadangan serta
                                                            "studi kelayakan" dari endapan bahan galian atau mineral
                                                            berharga yang telah diketemukan.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h6>Eksploitasi</h6>
                                                        <p style="font-weight: normal">
                                                            Eksploitasi adalah suatu kegiatan
                                                            penambangan yang meliputi pekerjaan-pekerjaan pengambilan
                                                            dan pengangkutan endapan bahan galian atau mineral berharga
                                                            sampai ke tempat penimbunan dan pengolahan/pencucian,
                                                            kadang-kadang sampai ke tempat pemasaran.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h6>Pengolahan/Pemurnian/Pengilangan</h6>
                                                        <p style="font-weight: normal">
                                                            Pengolahan/Pemurnian adalah suatu pekerjaan
                                                            memurnikan/meninggikan kadar bahan galian dengan jalan
                                                            memisahkan mineral berharga dan yang tidak berharga,
                                                            kemudian membuang mineral yang tidak berharga tersebut
                                                            (dapat dilakukan dengan cara kimia).
                                                        </p>
                                                    </li>
                                                </ol>
                                                </p>
                                                <h2>Metodologi</h2>
                                                <div class="table-responsive">
                                                    <table class="table table-sm table-bordered  ">
                                                        <tr>
                                                            <th>item</th>
                                                            <th>Migas</th>
                                                            <th>Non Migas</th>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="2">sumber data</td>
                                                            <td>1.survei tahunan</td>
                                                            <td>1.survei tahunan</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2. Departemen Pertambangan dan Energi</td>
                                                            <td>2. Departemen Pertambangan dan Energi</td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="2">Metode Penarikan Sampel</td>
                                                            <td>1. Pencacahan Lengkap</td>
                                                            <td>1. Pencacahan Lengkap</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2. Catatan Administrasi</td>
                                                            <td>2. Catatan Administrasi</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ruang Lingkup</td>
                                                            <td>Semua unit eksplorasi/eksploitasi, pengilangan,
                                                                distribusi
                                                            </td>
                                                            <td>Semua unit eksplorasi/eksploitasi, pengilangan,
                                                                distribusi
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- /.post-content -->
                                            <div
                                                class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                                                <div>
                                                    <ul class="list-unstyled tag-list mb-0">
                                                        <li><a href="#"
                                                                class="btn btn-soft-ash btn-sm rounded-pill mb-0">Migas</a>
                                                        </li>
                                                        <li><a href="#"
                                                                class="btn btn-soft-ash btn-sm rounded-pill mb-0">Pertambangan</a>
                                                        </li>
                                                        <li><a href="#"
                                                                class="btn btn-soft-ash btn-sm rounded-pill mb-0">Penggalian</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                {{-- <div class="mb-0 mb-md-2">
                                                    <div class="dropdown share-dropdown btn-group">
                                                        <button
                                                            class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="uil uil-share-alt"></i> Share </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="uil uil-twitter"></i>Twitter</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="uil uil-facebook-f"></i>Facebook</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="uil uil-linkedin"></i>Linkedin</a>
                                                        </div>
                                                        <!--/.dropdown-menu -->
                                                    </div>
                                                    <!--/.share-dropdown -->
                                                </div> --}}
                                            </div>
                                            <!-- /.post-footer -->
                                        </article>
                                        <!-- /.post -->
                                    </div>
                                    <!-- /.classic-view -->
                                    <hr />
                                    <div class="author-info d-md-flex align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <figure class="user-avatar"><img class="rounded-circle" alt=""
                                                    src="{{ url('images/datavector.png') }}" /></figure>
                                            <div>
                                                <h6><a href="https://www.bps.go.id/statictable/2009/06/15/1092/produksi-minyak-bumi-dan-gas-alam-1996-2020.html"
                                                        class="link-dark">Produksi Minyak Bumi dan Gas
                                                        Alam, 1996-2020</a></h6>
                                                <span class="post-meta fs-15">BPS RI</span>
                                            </div>
                                        </div>
                                        <div class="mt-3 mt-md-0 ms-auto">
                                            <a href="https://www.bps.go.id/statictable/2009/06/15/1092/produksi-minyak-bumi-dan-gas-alam-1996-2020.html"
                                                class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0"><i
                                                    class="uil uil-file-alt"></i>Lihat lebih</a>
                                        </div>
                                    </div>
                                    <!-- /.author-info -->
                                    {{-- <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                        fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Fusce
                                        dapibus, tellus ac. Maecenas faucibus mollis interdum.</p> --}}


                                    <nav class="nav social">
                                        <a href="https://twitter.com/bpssumsel"><i class="uil uil-twitter"></i></a>
                                        <a href="https://www.facebook.com/profile.php?id=100015484759318"><i
                                                class="uil uil-facebook-f"></i></a>
                                        <a href="https://www.instagram.com/bpssumsel/?hl=en"><i
                                                class="uil uil-instagram"></i></a>
                                        <a href="https://www.youtube.com/channel/UC-9WQN-5cNTVTGDF8Rkiu6A"><i
                                                class="uil uil-youtube"></i></a>
                                    </nav>
                                    <!-- /.social -->
                                    {{-- <hr />
                                    <h3 class="mb-6">You Might Also Like</h3>
                                    <div class="swiper-container blog grid-view mb-16" data-margin="30" data-dots="true"
                                        data-items-md="2" data-items-xs="1">
                                        <div class="swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <article>
                                                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                                                href="#"> <img src="./assets/img/photos/b4.jpg"
                                                                    alt="" /></a>
                                                            <figcaption>
                                                                <h5 class="from-top mb-0">Read More</h5>
                                                            </figcaption>
                                                        </figure>
                                                        <div class="post-header">
                                                            <div class="post-category text-line">
                                                                <a href="#" class="hover"
                                                                    rel="category">Coding</a>
                                                            </div>
                                                            <!-- /.post-category -->
                                                            <h2 class="post-title h3 mt-1 mb-3"><a
                                                                    class="link-dark"
                                                                    href="./blog-post.html">Ligula tristique quis
                                                                    risus</a></h2>
                                                        </div>
                                                        <!-- /.post-header -->
                                                        <div class="post-footer">
                                                            <ul class="post-meta mb-0">
                                                                <li class="post-date"><i
                                                                        class="uil uil-calendar-alt"></i><span>14 Apr
                                                                        2021</span></li>
                                                                <li class="post-comments"><a href="#"><i
                                                                            class="uil uil-comment"></i>4</a></li>
                                                            </ul>
                                                            <!-- /.post-meta -->
                                                        </div>
                                                        <!-- /.post-footer -->
                                                    </article>
                                                    <!-- /article -->
                                                </div>
                                                <!--/.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <article>
                                                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                                                href="#"> <img src="./assets/img/photos/b5.jpg"
                                                                    alt="" /></a>
                                                            <figcaption>
                                                                <h5 class="from-top mb-0">Read More</h5>
                                                            </figcaption>
                                                        </figure>
                                                        <div class="post-header">
                                                            <div class="post-category text-line">
                                                                <a href="#" class="hover"
                                                                    rel="category">Workspace</a>
                                                            </div>
                                                            <!-- /.post-category -->
                                                            <h2 class="post-title h3 mt-1 mb-3"><a
                                                                    class="link-dark"
                                                                    href="./blog-post.html">Nullam id dolor elit id
                                                                    nibh</a></h2>
                                                        </div>
                                                        <!-- /.post-header -->
                                                        <div class="post-footer">
                                                            <ul class="post-meta mb-0">
                                                                <li class="post-date"><i
                                                                        class="uil uil-calendar-alt"></i><span>29 Mar
                                                                        2021</span></li>
                                                                <li class="post-comments"><a href="#"><i
                                                                            class="uil uil-comment"></i>3</a></li>
                                                            </ul>
                                                            <!-- /.post-meta -->
                                                        </div>
                                                        <!-- /.post-footer -->
                                                    </article>
                                                    <!-- /article -->
                                                </div>
                                                <!--/.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <article>
                                                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                                                href="#"> <img src="./assets/img/photos/b6.jpg"
                                                                    alt="" /></a>
                                                            <figcaption>
                                                                <h5 class="from-top mb-0">Read More</h5>
                                                            </figcaption>
                                                        </figure>
                                                        <div class="post-header">
                                                            <div class="post-category text-line">
                                                                <a href="#" class="hover"
                                                                    rel="category">Meeting</a>
                                                            </div>
                                                            <!-- /.post-category -->
                                                            <h2 class="post-title h3 mt-1 mb-3"><a
                                                                    class="link-dark"
                                                                    href="./blog-post.html">Ultricies fusce porta
                                                                    elit</a></h2>
                                                        </div>
                                                        <!-- /.post-header -->
                                                        <div class="post-footer">
                                                            <ul class="post-meta mb-0">
                                                                <li class="post-date"><i
                                                                        class="uil uil-calendar-alt"></i><span>26 Feb
                                                                        2021</span></li>
                                                                <li class="post-comments"><a href="#"><i
                                                                            class="uil uil-comment"></i>6</a></li>
                                                            </ul>
                                                            <!-- /.post-meta -->
                                                        </div>
                                                        <!-- /.post-footer -->
                                                    </article>
                                                    <!-- /article -->
                                                </div>
                                                <!--/.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <article>
                                                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                                                href="#"> <img src="./assets/img/photos/b7.jpg"
                                                                    alt="" /></a>
                                                            <figcaption>
                                                                <h5 class="from-top mb-0">Read More</h5>
                                                            </figcaption>
                                                        </figure>
                                                        <div class="post-header">
                                                            <div class="post-category text-line">
                                                                <a href="#" class="hover"
                                                                    rel="category">Business
                                                                    Tips</a>
                                                            </div>
                                                            <!-- /.post-category -->
                                                            <h2 class="post-title h3 mt-1 mb-3"><a
                                                                    class="link-dark"
                                                                    href="./blog-post.html">Morbi leo risus porta
                                                                    eget</a></h2>
                                                        </div>
                                                        <div class="post-footer">
                                                            <ul class="post-meta mb-0">
                                                                <li class="post-date"><i
                                                                        class="uil uil-calendar-alt"></i><span>7 Jan
                                                                        2021</span></li>
                                                                <li class="post-comments"><a href="#"><i
                                                                            class="uil uil-comment"></i>2</a></li>
                                                            </ul>
                                                            <!-- /.post-meta -->
                                                        </div>
                                                        <!-- /.post-footer -->
                                                    </article>
                                                    <!-- /article -->
                                                </div>
                                                <!--/.swiper-slide -->
                                            </div>
                                            <!--/.swiper-wrapper -->
                                        </div>
                                        <!-- /.swiper -->
                                    </div> --}}
                                    <!-- /.swiper-container -->
                                    {{-- <hr /> --}}
                                    <!-- /.comment-form -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.blog -->
                    </div>
                    <!-- /column -->
                    <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
                        <div class="widget">
                            <h4 class="widget-title mb-3">Informasi lebih tentang BPS</h4>
                            <p><a href="https://sumsel.bps.go.id"><img src="{{ url('images/webbps.png') }}"
                                        alt=""></a></p>
                            <nav class="nav social">
                                <a href="https://twitter.com/bpssumsel"><i class="uil uil-twitter"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100015484759318"><i
                                        class="uil uil-facebook-f"></i></a>
                                <a href="https://www.instagram.com/bpssumsel/?hl=en"><i
                                        class="uil uil-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UC-9WQN-5cNTVTGDF8Rkiu6A"><i
                                        class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">Publikasi Pertambangan</h4>
                            <ul class="image-list">
                                <li>
                                    <figure class="rounded"><a
                                            href="https://bps.go.id/publication/2021/12/16/650ea4290853fd0cb9d4d726/statistik-pertambangan-minyak-dan-gas-bumi-2015---2020.htmll"><img
                                                src="{{ url('images/publikasi/1.jpg') }}" alt="" /></a></figure>
                                    <div class="post-content">
                                        <h6 class="mb-2"> <a class="link-dark"
                                                href="https://bps.go.id/publication/2021/12/16/650ea4290853fd0cb9d4d726/statistik-pertambangan-minyak-dan-gas-bumi-2015---2020.html">Statistik
                                                Pertambangan Minyak Dan Gas Bumi 2015 - 2020</a> </h6>
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16
                                                    Des 2021</span></li>

                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                </li>

                            </ul>
                            <!-- /.image-list -->
                        </div>
                        <!-- /.widget -->
                        {{-- <div class="widget">
                            <h4 class="widget-title mb-3">Categories</h4>
                            <ul class="unordered-list bullet-primary text-reset">
                                <li><a href="#">Teamwork (21)</a></li>
                                <li><a href="#">Ideas (19)</a></li>
                                <li><a href="#">Workspace (16)</a></li>
                                <li><a href="#">Coding (7)</a></li>
                                <li><a href="#">Meeting (12)</a></li>
                                <li><a href="#">Business Tips (14)</a></li>
                            </ul>
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">Tags</h4>
                            <ul class="list-unstyled tag-list">
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Still Life</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Urban</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Nature</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Landscape</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Macro</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Fun</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Workshop</a></li>
                                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Photography</a></li>
                            </ul>
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title mb-3">Archive</h4>
                            <ul class="unordered-list bullet-primary text-reset">
                                <li><a href="#">February 2019</a></li>
                                <li><a href="#">January 2019</a></li>
                                <li><a href="#">December 2018</a></li>
                                <li><a href="#">November 2018</a></li>
                                <li><a href="#">October 2018</a></li>
                            </ul>
                        </div> --}}
                        <!-- /.widget -->
                    </aside>
                    <!-- /column .sidebar -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="{{ url('images/logolong.png') }}"
                            srcset="./assets/img/logo-light@2x.png 2x" alt="" />
                        <p class="mb-4">© 2021 BPS Provinsi Sumsel. <br class="d-none d-lg-block" />All
                            rights reserved.
                        </p>
                        <nav class="nav social social-white">
                            <a href="https://twitter.com/bpssumsel"><i class="uil uil-twitter"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100015484759318"><i
                                    class="uil uil-facebook-f"></i></a>
                            <a href="https://www.instagram.com/bpssumsel/?hl=en"><i class="uil uil-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UC-9WQN-5cNTVTGDF8Rkiu6A"><i
                                    class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Jl. Kapten Anwar Sastro No 1694 Palembang, Sumatera Selatan
                            30129</address>
                        <a href="mailto:bps1600@bps.go.id">bps1600@bps.go.id</a><br /> Telp (0711) 351665, 318456
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Learn More</h4>
                        <ul class="list-unstyled  mb-0">
                            <li><a href="{{ url('login') }}">Login</a></li>
                            <li><a href="https://bps.go.id">BPS RI</a></li>
                            <li><a href="https://sumsel.bps.go.id">BPS SUMSEL</a></li>
                            {{-- <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li> --}}
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
                        <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.
                        </p>
                        <div class="newsletter-wrapper">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup2">
                                <form action="{{ url('') }}" method="post">
                                    <div id="mc_embed_signup_scroll2">
                                        <div class="mc-field-group input-group form-floating">
                                            <input type="email" value="" name="EMAIL"
                                                class="required email form-control" placeholder="Email Address"
                                                id="mce-EMAIL2">
                                            <label for="mce-EMAIL2">Email Address</label>
                                            <input type="submit" value="Join" name="subscribe"
                                                id="mc-embedded-subscribe2" class="btn btn-primary ">
                                        </div>
                                        <div id="mce-responses2" class="clear">
                                            <div class="response" id="mce-error-response2" style="display:none">
                                            </div>
                                            <div class="response" id="mce-success-response2"
                                                style="display:none"></div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                                type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1"
                                                value=""></div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ url('assets/js/plugins.js') }}"></script>
    <script src="{{ url('assets/js/theme.js') }}"></script>
</body>

</html>
