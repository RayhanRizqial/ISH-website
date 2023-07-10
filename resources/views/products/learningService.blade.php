<!DOCTYPE html>
<html>

<head>
    @include('library.library')
    <title>Learning Services</title>
</head>

<body>
    @include('navbar.navbar')

    <div class="marginz dflex-y" style="margin-top:50px;">
        <div>
            <h1 class="ish-text2"style="font-size: 50px; color: black;">Digital HR Learning Service</h1>
        </div>
        {{-- Learning --}}
        <div class="containerr dflex-x" style="gap: 5em; margin-top: 100px; margin-bottom: 50px">
            <div style="flex: 1"><img src="images/learning.png" alt="" class="imgproducts" style="border-radius: 0"></div>
            <div style="text-align: justify; flex: 1">
                <h3 style="font-weight: bold; font-size:30px;">Digital HR Learning Service</h3>
                <p style=" margin-top:30px; font-size: 20px">ISH menyediakan layanan Digital HR Learning Service
                    untuk membentuk karyawan
                    yang berkualitas dengan memiliki keterampilan, kemampuan kerja dan loyalitas kerja kepada
                    perusahaan. <br><br>

                    Para trainer ISH adalah proffesional yang memiliki sertifikasi BNSP dan praktisi di dunia
                    bisnis. <br><br>

                    HR Learning ISH juga dapat diikuti secara online sehingga memudahkan para SDM ataupun Klien
                    dapat
                    mengikutin proses Training lebih mudah dan flexible.</p>
            </div>
        </div>

    </div>
    <div class="marginz" style="margin-top:50px; text-align: left;">
        <h1 class="" style="font-size: 32px; font-weight: 700; margin-bottom: 2%">Services</h1>
        <div class="Services" style="display: flex; flex-wrap: wrap; justify-content: space-between">

            <div class="accordion-item">
                <button class="accordion">LPK Bahasa Jepang</button>
                <div class="panel" style="text-align: justify">
                    <p style="margin-bottom: 15px">ISH memiliki Lembaga Pelatihan Kerja (LPK) dengan misi untuk mengembangkan sumber daya manusia dan mendukung bekerja di Jepang melalui pelatihan bahasa Jepang, Apprenticeship (Tech Intern), internship, studi di Jepang.</p>
                    <p>Kurikulum dan training yang sudah terbukti serta lebih dari 95% lulus ujian sertifikasi standar Internasional dan didukung oleh pengajar yang bersertifikat dengan pengalaman bekerja di Jepang. </p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion">Training</button>
                <div class="panel" style="text-align: justify">
                    <p style="margin-bottom: 15px">Layanan Pelatihan secara Online (E-Learning) & Offline dengan dukungan Trainer profesional  dengan  sertifikat BNSP dan praktisi di dunia bisnis. Memiliki pengetahuan, kemampuan, dan keterampilan sesuai untuk meningkatkan profit dan perkembangan perusahaan.</p>
                    <p>Salah satunya pada Pelatihan Soft Skill dan Hard Skill untuk Sales Promotion untuk meningkatkan penjualan dalam melakukan penjualan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="marginz" style="display: flex; justify-content: end">
        <a href="/process" class="btn-prd" style="margin-right: 1%"><i class="fa-solid fa-arrow-left"
                style="margin-right: 5px"></i>Digital HR Process Services</a>
        <a href="/solution" class="btn-prd">Digital HR Solution<i class="fa-solid fa-arrow-right"
                style="margin-left: 5px"></i></a>
    </div>
    <!-- FOOTER -->
    @include('navbar.footer')
    <!-- END FOOTER -->

</body>

</html>
