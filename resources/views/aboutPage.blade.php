<!DOCTYPE html>
<html>

<head>
    @include('library.library')
    <title>About</title>
</head>

<body>
    @include('navbar.navbar')
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
        <h1 style="font-weight: 600;">About</h1>
        <a href="https://gojobs.id/rekrut/">
            <button class="btn-job">NEED A JOB ?</button>
        </a>
    </div>

    {{-- Ini background tentang perusahaan --}}
    <div class="divbgap1" style=""></div>
    <div class="divbgap2" style=""></div>

    {{-- TENTANG PERUSAHAAN --}}
    <div class="containerz" style=" margin-top: 150px; flex-direction: column">
        <div class="containerr" style=" margin-top:50px">
            <h1 class="ish-text2"style="font-size: 54px">Tentang Perusahaan</h1>
        </div>
        <div style="display: flex; gap: 4em; margin: 0 10%; position: relative; margin-top: 80px">
            <div class="persegi layer1 col-1" style="width: 20%; display:flex">
                <div class="lingkaranz layer2" style="margin-left: 0%; left: -3.35%">
                </div>
                <div class="containerr" style="align-items: center">
                    <h1 class="title-persegi-TP1">
                        Visi
                    </h1>
                    <p>Memiliki kompetensi dan keunggulan dalam alih daya SDM untuk bidang pekejaan SPG, Sales, Customer
                        Service,
                        Administrasi, dan Teknisi dengan coverage seluruh area di Indonesia.</p>
                </div>
            </div>
            <div class="persegi layer1 col-1" style="width: 20%; display:flex">
                <div class="lingkaranz layer2" style="margin-left: 0%;left: 48.9%">
                </div>
                <div class="containerr" style="align-items: center">
                    <h1 class="title-persegi-TP2">
                        Misi
                    </h1>
                    <p>Memiliki kompetensi dan keunggulan dalam alih daya SDM untuk bidang pekejaan SPG, Sales, Customer
                        Service,
                        Administrasi, dan Teknisi dengan coverage seluruh area di Indonesia.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- TENTANG PERUSAHAAN ENDs --}}

    {{-- MILESTONES --}}
    <div class="fContainer dflex-y" style="margin-top:320px;">
        <h1 class="ish-text2" style="font-size: 50px;color:black;">MILESTONES</h1>
        <div class="zzsize" style="margin-left:15%">
            <img src="images/milestone.png" class="gambar" alt="">
        </div>
    </div>
    {{-- MILESTONES ENDs  --}}

    {{-- CERTIFICATION  --}}
    <div>
        <div class="dflex-x">
            <div
                style="background-image: url('images/certif.png'); height: 1000px; 
            width: 100%;
            background-size: cover; position: relative;">
                <h1 style="font-weight: bold; color: white; font-size: 50px; position: absolute; top: 8%; left:42%">
                    Certification</h1>

                <div class="containerr dflex-x" style="margin-top: 200px; gap: 2em">
                    <div class="certif"></div>
                    <div class="certif"></div>
                    <div class="certif"></div>
                </div>
            </div>

        </div>
    </div>

    {{-- CERTIFICATION ENDs  --}}

    {{-- BOD sampe SUPPORT  --}}
    <div class="containerr dflex-y" style="margin-top:125px">
        <u style="font-size: 30px"><h1 class="ish-text2 garisbawah" style="font-size: 52px; color:black;">BOD & BOC</h1></u>
        <div class="containerr dflex-x" style="gap: 3em; margin-top:40px">
            <div class="abtpeople"></div>
            <div class="abtpeople"></div>
        </div>
        <div style="margin-top: 50px; text-align: center">
            <u style="font-size: 30px"><h1 class="ish-text2 garisbawah" style="font-size: 52px; color:black">Our Leaders</h1></u>
            <h1 class="ish-text2" style="font-size: 36px; color:black;"><br><br>Sales & Marketing</h1>
        </div>
        <div class="containerr dflex-x" style="gap: 3em; margin-top:40px">
            <div class="abtpeople"></div>
            <div class="abtpeople"></div>
            <div class="abtpeople"></div>
        </div>
        <div style="margin-top: 50px">
            <h1 class="ish-text2" style="font-size: 36px; color:black; ">Recruitment & Training</h1>
        </div>
        <div class="containerr dflex-x" style="gap: 3em; margin-top:40px">
            <div class="abtpeople"></div>
        </div>

        <div style="margin-top: 50px">
            <h1 class="ish-text2" style="font-size: 36px; color:black; ">Operational</h1>
        </div>
        <div class="containerr dflex-x" style="gap: 3em; margin-top:40px">
            <div class="abtpeople"></div>
            <div class="abtpeople"></div>
            <div class="abtpeople"></div>
        </div>

        <div style="margin-top: 50px">
            <h1 class="ish-text2" style="font-size: 36px; color:black; ">Support</h1>
        </div>
        <div class="containerr dflex-x" style="gap: 3em; margin-top:40px">
            <div class="container">
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



    </div>

    <!-- FOOTER -->
    @include('navbar.footer')
    <!-- END FOOTER -->

</body>

</html>
