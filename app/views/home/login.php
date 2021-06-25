<body>
    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand ml-lg-5" href="#">
                <!-- <img src="<?= BASEURL; ?>/img/hitam atas.svg"> -->
                <img src="<?= BASEURL; ?>/img/brand.png" alt="" width="150" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: black;">
                  <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" style="font-weight: bold;">
                    <li class="nav-item active">
                        <a class="nav-link px-5 mr-3" id="text-link" href="#">BERANDA <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="text-inactive">
                        <a class="nav-link px-5 mr-3 text-link " href="#">TENTANG</a>
                    </li>
                    <li class="nav-item" id="text-inactive">
                        <a class="nav-link px-5 mr-3 text-link" href="#">HUBUNGI KAMI</a>
                    </li>
                </ul>
            </div>

        </nav>
    </section>
    <div class="d-flex justify-content-center mt-5 mb-5">
        <div class="card" id="card-1" style="height: 87vh;">
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-6 tags p-b-2" style=" border-right: 1px solid #333;">
                        <h5 class="mt-5 text-center" style="font-weight: bold; color:#383b40ff">WELCOME TO LOGIN FORM</h5>
                        <div class="d-flex justify-content-center">
                            <img src="<?= BASEURL; ?>/img/Frame.png" width="300px" style="margin-top: 20px;">
                        </div>
                        <img class="Card-img-bottom mt-1" src="<?= BASEURL; ?>/img/Vector 1.png" width="434px">
                    </div>
                    <div class="col-lg-6 tags p-b-2" style=" border-right: 1px solid #333;">
                        <div class="row justify-content-md-center mt-5">
                            <button id=button1 class="btn mt-4"><img class="mb-1" src="<?= BASEURL; ?>/img/google.png" width="20px"> Masuk Dengan Google</button>
                            <button id=button2 class="btn mt-3"><img class="mb-1" src="<?= BASEURL; ?>/img/logos_facebook.png" width="22px">  Masuk Dengan Facebook</button>
                            <p class="text-center mt-2" style="font-size: 12px;">Atau</p>
                            <form class="row justify-content-md-center" action="">
                                <div class="form-floating text-center mt-2" id="form1">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" id="label1">Masukkan Username</label>
                                </div>
                                <div class="form-floating text-center mt-2" id="form1">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" style="font-size:15px; font-weight: normal; height:45px; border-radius:15px;">
                                    <label class="ml-3 align-baseline" style="font-size: 12px;" id="label1">Masukkan Password</label>
                                </div>
                                <div class="text-center mt-3">
                                <a href="<?= BASEURL; ?>/dashboard"><button type="button" class="btn btn-success text-dark" style="width: 120px; font-weight:bold; border-radius:15px;">Masuk</button></a>
                                    
                                </div>
                            </form>
                            <div class="text-center mt-4">
                                <p>Belum Punya Akun? <a href="<?= BASEURL; ?>/Home/daftar"> Daftar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>