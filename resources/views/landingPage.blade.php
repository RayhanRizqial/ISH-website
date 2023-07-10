<!DOCTYPE html>
<html>
    <head>
        @include('library.library')
        <title>Landing Page</title>
    </head>
<body>
    @include('navbar.navbar')


    
    <div class="dropdown_menu">
        <li><a style="padding: 50px" href="">About</a></li>
        <li><a style="padding: 50px" href="">Products</a></li>
        <li><a style="padding: 50px" href="">Careers</a></li>
        <li><a style="padding: 36px" href="">ISH News</a></li>
        <li><a style="padding: 36px" href="">Our Clients</a></li>
        <li><a style="padding: 36px" href="">Contact US</a></li>
    </div>
    <div class="row responsive">
        <div class="logo-header">
            <a style="color: white" href="https://www.instagram.com/ishcorporate/">
                <img style="width: 25px;height: 25px" src="images/ig.png" alt="" />
            </a>
            <a style="color: white" href="https://www.facebook.com/korporat.ish">
                <img style="width: 25px;height: 25px" src="images/fb.png" alt="" />
            </a>
            <a style="color: white" href="https://www.linkedin.com/company/pt-infomedia-solusi-humanika/">
                <img style="width: 25px;height: 25px" src="images/in.png" alt="" />
            </a>
        </div>
        <h1 style="font-weight: 600;">Home</h1>
        <a href="https://gojobs.id/rekrut/">
            <button class="btn-job">NEED A JOB ?</button>
        </a>
    </div>

    <!-- Carousel -->
    <div class="zzsize responsive">
        <div class="group">
            <div class="item">
                <img src="images/ish1.gif" alt="" class="gambar" />
            </div>
            <div class="item">
                <img src="images/ish2.jpg" alt="" class="gambar" />
            </div>
            <div class="item">
                <img src="images/ish3.jpg" alt="" class="gambar" />
            </div>
            <div class="item">
                <img src="images/ish4.jpg" alt="" class="gambar" />
            </div>
            <div class="item">
                <img src="images/ish5.jpg" alt="" class="gambar" />
            </div>


            <!-- <div class="item" style="background-image: url(images/char6.jpg)"></div> -->
        </div>
    </div>

    {{-- WELCOME --}}
    <div class="zzsize responsive">
        <div class="group2">
            <img class="" src="images/orang.png" alt="" />
            <div>
                <div class="text-container">
                    <div>
                        <h1>
                            <img class="hr" src="images/HR.png" alt="" />Welcome to <br />
                            <span class="ish-text">ISH</span>
                        </h1>
                        <p>
                            PT Infomedia Solusi Humanika atau dikenal dengan ISH yang
                            berdiri pada tanggal 24 Oktober 2012 merupakan anak perusahaan
                            PT Infomedia Nusantara (bagian dari Telkom Grup) yang bergerak
                            dalam bidang Human Capital Services. ISH telah mampu memberikan
                            solusi layanan pengelolaan SDM terbaik kepada lebih dari 164
                            perusahaan yang tersebar di 420 kota dan mengelola lebih dari
                            13.000 karyawan di seluruh Indonesia.
                        </p>
                        <button class="abt-btn">Tentang Perusahaan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why  -->
    <div class="divbglp1" style="margin-top: 1800px;"></div>
    <!-- <div class="spacer"></div> -->
    <div class="divbglp2" style="margin-top: 1800px;"></div>
    <div class=""
        style="padding-top: 210px; text-align: center; font-size: 36px;margin-left: 10%;
         margin-right: 10%;
         margin-bottom: 8%;">
        <h1 class="ish-text2">Why ISH?</h1>
    </div>

    <div class="zzsize">
        <div>
            <div style="display: flex;">
                <div class="persegi layer1 col-1" style="margin: 0 30px;">
                    <div class="lingkaran layer2" style="margin-left: 50%">
                    </div>
                    <p>Memiliki kompetensi dan keunggulan dalam alih daya SDM untuk bidang pekejaan SPG, Sales, Customer
                        Service,
                        Administrasi, dan Teknisi dengan coverage seluruh area di Indonesia.</p>
                </div>
                <div class="persegi layer1 col-1" style="margin: 0 30px;">
                    <div class="lingkaran layer2" style="margin-left: 50%"></div>
                    <p>aaaa</p>
                </div>
                <div class="persegi layer1 col-1" style="margin: 0 30px;">
                    <div class="lingkaran layer2" style="margin-left: 50%"></div>
                    <p>aaaa</p>
                </div>
            </div>
        </div>
    </div>

    {{-- PRODUCT --}}
    <div class="bbody">
        <div class="container">
            <h1 style="align-items: center; display: flex; font-weight: 700; font-size: 50px; margin-bottom: 70px;">
                Product
            </h1>


            <input type="radio" name="slider" class="d-none" id="s1" checked>
            <input type="radio" name="slider" class="d-none" id="s2">
            <input type="radio" name="slider" class="d-none" id="s3">

            <div class="cards">
                <label for="s1" id="slide1">
                    <div class="card">
                        <div class="image">
                            <div>
                            </div>
                        </div>
                        <div class="infos">
                        </div>
                    </div>
                </label>

                <label for="s2" id="slide2">
                    <div class="card">
                        <div class="image">
                        </div>
                        <div class="infos">
                        </div>
                    </div>
                </label>

                <label for="s3" id="slide3">
                    <div class="card">
                        <div class="image">
                        </div>
                        <div class="infos">
                        </div>
                    </div>
                </label>
            </div>

        </div>
    </div>


    {{-- CLIENT SAYS --}}
    <div class="client">
        <div class="card-client">
            <img class="imgcl" src="images/client.png" alt="">
            <button class="arrow arrow-left"><img style="height: 50px; width: auto;"
                    src="images/Arrow-left.png"></button>
            <button class="arrow arrow-right"><img style="height: 50px; width: auto;"
                    src="images/Arrow-right.png"></button>
            <h1>Client Says</h1>
            <img class="imgpp" src="images/ana.png" alt="">
            <h2>Ana Yuniarti</h2>
            <p class="desc">AVP HC Solution & Service</p>
            <h1 class="kutip">“</h1>
            <p class="isi">ISH telah menjadi partner bisnis dalam pengelolaan Sumber Daya Mitra di Telkomsat, dan
                menjadi
                saksi sejarah konsolidasi bisnis satelit dari hulu ke hilir yang bermula dari 3 entitas menjadi
                Telkomsat.
                Semoga kerjasama yang telah terjalin dapat saling memberikan nilai positif serta berguna bagi kedua
                pihak, dan
                semakin menjadi lebih baik lagi di waktu yang akan datang. Terima kasih</p>
            <h1 class="akh">PT Telkom Satelit Indonesia</h1>
        </div>
    </div>


    {{-- OUR CLIENT --}}
    <div class="wrapper-logo-client">
        <h1>Our Client</h1>
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="carousel-logo-client">
            <li class="card-logo-client">
                <div class="img-logo-client"><img class="imgsize" src="images/logo-client-1.png" alt="img">
                </div>
            </li>
            <li class="card-logo-client">
                <div class="img-logo-client"><img class="imgsize" src="images/logo-client-2.png" alt="img">
                </div>
            </li>
            <li class="card-logo-client">
                <div class="img-logo-client"><img class="imgsize" src="images/logo-client-3.png" alt="img">
                </div>
            </li>
            <li class="card-logo-client">
                <div class="img-logo-client"><img class="imgsize" src="images/logo-client-4.png" alt="img">
                </div>
            </li>
            <li class="card-logo-client">
                <div class="img-logo-client"><img class="imgsize" src="images/logo-client-1.png" alt="img">
                </div>
            </li>
            <li class="card-logo-client">
                <div class="img-logo-client"><img class="imgsize" src="images/logo-client-2.png" alt="img">
                </div>
            </li>
            <li class="card-logo-client">
                <div class="img-logo-client"><img class="imgsize" src="images/logo-client-3.png" alt="img">
                </div>
            </li>
            <li class="card-logo-client">
                <div class="img-logo-client"><img class="imgsize" src="images/logo-client-4.png" alt="img">
                </div>
            </li>
        </ul>
        <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
    <div class="dot-pagination"></div>

    <!-- NEWS -->
    <div class="zzsize" style="margin-top:100px">
        <h1
            style="position: relative;
    font-size: 40px;
  display: flex;
  justify-content: flex-start; margin-left: 40px; font-weight: 700">
            News Update</h1>
        <div class="containerz" style="margin-top:50px">
            <div class="itemz itemz1">Item 1</div>
            <div class="itemz itemz2">Item 2</div>
            <div class="itemz itemz3">Item 3</div>
            <div class="itemz itemz3">Item 3</div>
            <div class="itemz itemz4">Item 4</div>
        </div>
    </div>
    <!-- END NEWS -->

    <!-- FOOTER -->
    @include('navbar.footer')
    <!-- END FOOTER -->
    


    
</body>

</html>
