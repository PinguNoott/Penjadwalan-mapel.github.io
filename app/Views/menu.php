<body>

  <!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        
        <div class="logo me-auto">
            <h1>Penjadwalan Siswa</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="<?= base_url('home/dashboard')?>">dashboard</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('home/jadwalvii')?>">VII</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('home/jadwalviii')?>">VIII</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('home/jadwalix')?>">IX</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('home/jadwalx')?>">X</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('home/jadwalxi')?>">XI</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('home/jadwalxii')?>">XII</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<style>
    /* Gaya kustom untuk menu */
    #header {
        background-color: #ffeeba; /* Warna kuning terang untuk latar belakang header */
        color: #333; /* Warna teks */
    }

    #navbar ul li a {
        color: #333; /* Warna teks link */
    }

    #navbar ul li a:hover {
        color: #ffa500; /* Warna teks link saat dihover */
    }
</style>
