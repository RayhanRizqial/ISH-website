<!DOCTYPE html>
<html>

<head>
    @include('library.library')
    <title>Solution</title>
</head>

<body>
    @include('navbar.navbar')

    <div class="row">
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
        <h1 style="font-weight: 600;">Products</h1>
        <a href="https://gojobs.id/rekrut/">
            <button class="btn-job">NEED A JOB ?</button>
        </a>
    </div>

    <div class="marginz dflex-y" style="margin-top:50px;">
        <div>
            <h1 class="ish-text2"style="font-size: 50px; color: black;">Digital HR Solution</h1>
        </div>
        {{-- Solution --}}
        <div class="containerr dflex-x" style="gap: 5em; margin-top: 100px; margin-bottom: 50px">
            <div style="flex: 1"><img src="images/solution.png" alt="" class="imgproducts" style="border-radius: 0"></div>
            <div style="text-align: justify; flex: 1">
                <h3 style="font-weight: bold; font-size:30px;">Digital HR Solution</h3>
                <p style=" margin-top:10px; font-size: 20px">ISH sebagai perusahaan alih daya yang berfokus pada bidang
                    SDM telah
                    melakukan transformasi menjadi Digital HR Solution untuk memberikan nilai tambah kepada pelanggan.
                    Sebagai Penyediaan HR Process End-to-End, mengelola tenaga kerja mulai dari proses recruitment atau
                    seleksi, mengelola proses hiring, pengembangan & maintaining tenaga kerja serta mengelola sampai
                    akhir proses kerjasama perusahaan <br><br>

                    ISH memiliki layanan S.M.A.R.T Sales Promotion yang sudah dilengkapi juga dengan dukungan terkini
                    guna meningkatkan Penjualan bagi para pelaku bisnis.
                </p>
            </div>
        </div>
    </div>

    <div class="marginz" style="margin-top:50px; text-align: left;">
        <h1 class="" style="font-size: 32px; font-weight: 700; margin-bottom: 2%">Services</h1>
        <div class="Services" style="display: flex; flex-wrap: wrap; justify-content: space-between">

            <div class="accordion-item">
                <button class="accordion">HR Supply (Local)</button>
                <div class="panel" style="text-align: justify">
                    <li>HR Supply</li>
                    <p style="margin-bottom: 15px">Mengelola tenaga kerja mulai dari proses recruitment/seleksi,
                        mengelola
                        proses hiring, pengembangan &
                        maintaining tenaga kerja serta mengelola sampai akhir proses Kerjasama perusahaan.</p>
                    <li>SMART SPG</li>
                    <p style="margin-bottom: 15px">SMART SPG/B Profesional untuk memenuhi kebutuhan bisnis anda yang
                        telah
                        dilatih dan dilengkapi dengan
                        teknologi canggih guna meningkatkan penjualan.</p>
                    <li>SMART SECURITY</li>
                    <p style="margin-bottom: 5px">Layanan jasa tenaga kerja pengamanan yang berkaitan dengan pengamanan
                        dan
                        ketertiban di lingkungan kantor
                        maupun perumahan.</p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion">HR Supply Regional (GMS)</button>
                <div class="panel">
                    <p style="margin-bottom: 15px">Memberikan layanan proses End-to-End serta mengelola keseluruhan
                        tenaga kerja
                        secara Internasional dan
                        memiliki peluang di Japan</p>
                    <li>Pemagangan</li>
                    <li>Worker</li>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion">HR Analytic</button>
                <div class="panel">
                    <p>Memberikan layanan proses End-to-End serta mengelola keseluruhan tenaga kerja secara
                        Internasional dan
                        memiliki peluang di Japan</p>
                </div>
            </div>
        </div>
    </div>

    <div class="marginz" style="display: flex; justify-content: end">
        <a href="/learning" class="btn-prd" style="margin-right: 1%"><i class="fa-solid fa-arrow-left" style="margin-right: 5px"></i>Digital HR Learning Service</a>
        <a href="/process" class="btn-prd">Digital HR Process Services<i class="fa-solid fa-arrow-right" style="margin-left: 5px"></i></a>
    </div>

    <!-- FOOTER -->
    @include('navbar.footer')
    <!-- END FOOTER -->


</body>

</html>
