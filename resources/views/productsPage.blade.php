<!DOCTYPE html>
<html>

<head>
    @include('library.library')
    <title>Products</title>
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


    {{-- MULAI --}}
    <div class="marginz dflex-y" style="margin-top:50px;">
        <div>
            <h1 class="ish-text2"style="font-size: 50px; color: black">ISH Portofolio</h1>
        </div>
        {{-- Solution --}}
        <div class="containerr dflex-x" style="gap: 5em; margin-top: 100px">
            <div style="text-align: end; flex: 1">
                <a href="/solution" class="visit" style="text-decoration: none;"><h3 class="btn-ttl-prd" style="">Digital HR Solution</h3>
                </a>
                    <p style=" margin-top:30px; font-size: 20px">ISH sebagai perusahaan alih daya yang berfokus pada bidang SDM telah
                    melakukan transformasi menjadi Digital HR Solution untuk memberikan nilai tambah kepada pelanggan.
                    Sebagai Penyediaan HR Process End-to-End, mengelola tenaga kerja mulai dari proses recruitment atau
                    seleksi, mengelola proses hiring, pengembangan & maintaining tenaga kerja serta mengelola sampai
                    akhir proses kerjasama perusahaan <br> <br>

                    ISH memiliki layanan S.M.A.R.T Sales Promotion yang sudah dilengkapi juga dengan dukungan terkini
                    guna meningkatkan Penjualan bagi para pelaku bisnis.
                </p>
            </div>
            <div style="flex: 1.2"><img src="images/solution.png" alt="" class="imgproducts"></div>
        </div>
    </div>
        {{-- Process --}}
        <div
            style="background-image: url('images/certif.png'); height: 600px; 
            width: 100%;
            background-size: cover; position: relative;">
            <div class="marginz dflex-y" style="margin-top:50px;">
            <div class="containerr dflex-x" style="margin-top: 100px">
                <div style="flex: 1.2"><img src="images/process.png" alt="" class="imgproducts"></div>
                <div style="text-align: start;  flex: 1; margin-left:-180px">
                    <a href="process" class="visit" style="text-decoration: none;"><h3 class="btn-ttl-prd-wht">Digital HR Process Services</h3>
                    </a>
                        <p style="width: 83% ;margin-top:30px; font-size: 20px; color: white;">ISH sebagai penyedia layanan dalam fungsi HR, menyediakan solusi untuk
                        para
                        pelaku bisnis mengurus kebutuhan HR In-house perusahaan. Beberapa diantaranya adalah: HRM Tools,
                        Head Hunter, Psikotest Online, HR Profiling. Kebutuhan tersebut dapat dilakukan secara Online
                        salah
                        satunya pada proses Psikotest yang dapat dilakukan oleh calon kandidat pekerja yang sedang
                        melakukan
                        proses rekrutmen.</p>
                </div>
            </div>
        </div>
        </div>

        {{-- Learning --}}
        <div class="marginz dflex-y" style="margin-top:50px;">
        <div class="containerr dflex-x" style="gap: 5em; margin-top: 100px">
            <div style="text-align: end; flex: 1">
                <a href="/learning" class="visit"style="text-decoration: none;"><h3 class="btn-ttl-prd" style="">Digital HR Learning Service</h3>
                </a>
                    <p style=" margin-top:30px; font-size: 20px">ISH menyediakan layanan Digital HR Learning Service untuk membentuk karyawan
                    yang berkualitas dengan memiliki keterampilan, kemampuan kerja dan loyalitas kerja kepada
                    perusahaan. <br><br>

                    Para trainer ISH adalah proffesional yang memiliki sertifikasi BNSP dan praktisi di dunia bisnis. <br><br>

                    HR Learning ISH juga dapat diikuti secara online sehingga memudahkan para SDM ataupun Klien dapat
                    mengikutin proses Training lebih mudah dan flexible.</p>
            </div>
            <div style="flex: 1.2"><img src="images/learning.png" alt="" class="imgproducts"></div>
        </div>
    </div>


















    <!-- FOOTER -->
    @include('navbar.footer')
    <!-- END FOOTER -->

</body>

</html>
