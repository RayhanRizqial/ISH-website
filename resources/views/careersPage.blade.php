<!DOCTYPE html>
<html>

<head>
    @include('library.library')
    <title>Careers</title>
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
        <h1 style="font-weight: 700;">Careers</h1>
        <a href="https://gojobs.id/rekrut/">
            <button class="btn-job">NEED A JOB ?</button>
        </a>
    </div>

    <div class="marginz dflex-y" style="margin-top:50px;">
        <div style="margin-bottom: 60px">
            <h1 class="ish-text2"style="font-size: 50px; color: black;">Our Sales Achievement</h1>
        </div>
        <div class="slider owl-carousel">
            <div class="card-car">
                <div class="img-car">
                    <img src="images/car1.png" alt="">
                </div>
                <div class="content-car">
                    <div class="title-car" style="margin-top: 20px">
                        Srihartanto
                    </div>
                    <div class="sub-title" style="margin-top: 20px">
                        SHARP
                    </div>
                    <p>
                        Best Promotor Hyper HQ - Alhamdulillah selama 2 thn berturut-turut saya berhasil menjadi Best
                        Promotor Hyper HQ dan mendapatkan hadiah ke tahun pertama ke Malaysia, tahun ke 2 ke thailand.
                        Terima kasih Sharp dan ISH, semoga Sharp dan ISH semakin sukses & maju .
                    </p>
                </div>
            </div>
            <div class="card-car">
                <div class="img-car">
                    <img src="images/car2.png" alt="">
                </div>
                <div class="content-car">
                    <div class="title-car">
                        Fauzan Zahi Al Bantani
                    </div>
                    <div class="sub-title">
                        KAO
                    </div>
                    <p>
                        The best MD 2020 - Bersama ISH saya bisa mendapatkan penghargaan Best MD KAO di tahun 2020.
                        Terima ISH yang sudah mendampingi saya, sehingga bisa mendapatkan penghargaan dan dapat
                        meningkatkan penghasilan saya seperti sekarang. Jaya terus ISH.
                    </p>

                </div>
            </div>
            <div class="card-car">
                <div class="img-car">
                    <img src="images/car3.png" alt="">
                </div>
                <div class="content-car">
                    <div class="title-car">
                        Rudi <br> Firmansyah
                    </div>
                    <div class="sub-title">
                        SHARP
                    </div>
                    <p>
                        Best Promotor 2019 - Senang dan bangga mendapatkan reward best grading ke Malaysia dari sekian
                        banyak SPM & SPG nasional. Untuk yang lain tetap semangat, kejar terus penjualan, agar kita bisa
                        menjadi yang terbaik. Tetap semangat teman-teman. Terima kasih Sharp & ISH, sukses dan semakin
                        Jaya.
                    </p>

                </div>
            </div>
        </div>

        <div style="margin-bottom: 60px; margin-top: 120px">
            <h1 class="ish-text2"style="font-size: 50px; color: black;">Job Vacation</h1>
        </div>

        <div class="container-job">
            <form action="">
                <div class="content-job">
                    <div class="label-job">
                        <label for="job">Nama Pekerjaan</label>
                        <input class="inp-job" type="text" name="job" id="job" placeholder="Cari">
                    </div>
                    <div class="label-job" style="margin-left: 45px">
                        <label for="loc">Lokasi Pekerjaan</label>
                        <input class="inp-job" type="text" name="loc" id="loc" placeholder="Lokasi">
                    </div>
                    <div class="label-job">
                        <label for="category">Kategori Pekerjaan</label>
                        <select class="inp-job-dd" name="category" id="category">
                            <option value="" disabled selected hidden>Pilih Kategori</option>
                            <option value="kategori1">Kategori 1</option>
                            <option value="kategori2">Kategori 2</option>
                            <option value="kategori3">Kategori 3</option>
                            <!-- Tambahkan opsi dropdown sesuai kebutuhan -->
                        </select>
                    </div>

                    <div class="label-job">
                        <button class="btn-search" type="submit">
                            Temukan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- FOOTER -->
    @include('navbar.footer')
    <!-- END FOOTER -->

</body>

</html>
