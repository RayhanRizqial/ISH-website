<!DOCTYPE html>
<html>

<head>
    @include('library.library')
    <title>Process Services</title>
</head>

<body>
    @include('navbar.navbar')

    <div class="marginz dflex-y" style="margin-top:50px;">
        <div>
            <h1 class="ish-text2"style="font-size: 50px; color: black;">Digital HR Process Service</h1>
        </div>
        {{-- Process --}}
        <div class="containerr dflex-x" style="gap: 5em; margin-top: 100px; margin-bottom: 50px">
            <div style="flex: 1"><img src="images/process.png" alt="" class="imgproducts" style="border-radius: 0">
            </div>
            <div style="text-align: justify; flex: 1">
                <h3 style="font-weight: bold; font-size:30px;">Digital HR Process Service</h3>
                <p style="width: 83% ;margin-top:30px; font-size: 20px;">ISH sebagai penyedia layanan
                    dalam fungsi HR, menyediakan solusi untuk
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
    <div class="marginz" style="margin-top:50px; text-align: left;">
        <h1 class="" style="font-size: 32px; font-weight: 700; margin-bottom: 2%">Services</h1>
        <div class="Services" style="display: flex; flex-wrap: wrap; justify-content: space-between">

            <div class="accordion-item">
                <button class="accordion">HRM Tools</button>
                <div class="panel">
                    <p style="margin-bottom: 15px">Memudahkan aktifitas management administrasi tenaga kerja dengan
                        dilengkapi oleh Aplikasi yang mendukung sales (meningkatkan produktifitas pekerja dan pembuatan
                        laporan secara real-time) dari ISH guna mendukung kinerja para pekerja baik untuk kebutuhan
                        absensi maupun laporan pekerjaan. </p>
                    <li>Sintesys</li>
                    <li>Presilia</li>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion">Head Hunter</button>
                <div class="panel">
                    <p>Layanan perekrutan tenaga kerja level managerial, middle low & ROP. </p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion">Psikotest Online</button>
                <div class="panel">
                    <p>Penilaian psikologi yang dilaksanakan secara online dengan memanfaatkan akses internet dan menggunakan media online untuk mengerjakan seluruh rangkaian test. </p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion">HR Profiling</button>
                <div class="panel">
                    <p>Memberikan solusi untuk membantu pengambilan keputusan dalam hasil penilaian pekerja dalam bentuk report pengolahan data.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="marginz" style="display: flex; justify-content: end">
        <a href="/solution" class="btn-prd" style="margin-right: 1%"><i class="fa-solid fa-arrow-left"
                style="margin-right: 5px"></i>Digital HR Solution</a>
        <a href="/learning" class="btn-prd">Digital HR Learning Services<i class="fa-solid fa-arrow-right"
                style="margin-left: 5px"></i></a>
    </div>

    <!-- FOOTER -->
    @include('navbar.footer')
    <!-- END FOOTER -->

</body>

</html>
