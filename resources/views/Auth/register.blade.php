<!DOCTYPE html>
<html>

<head>
    @include('library.library')
    <title>Register</title>
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
        <h1 style="font-weight: 600;">ISH News / Register</h1>
        <a href="https://gojobs.id/rekrut/">
            <button class="btn-job">NEED A JOB ?</button>
        </a>
    </div>

    <div class="container-lgn">
        <div class="left-section">
            <img style="height: 700px" src="images/loreg.png" alt="">
        </div>
        <div class="right-section">
            <h1>Register</h1>
            <form>
                <div class="">
                    <input class = "inp-auth" type="text" placeholder="Username" name="uname">

                    <input class = "inp-auth" type="email" placeholder="Email" name="email">

                    <input class = "inp-auth" type="password" placeholder="Password" name="psw">

                    <button class="btn-sbmt" type="submit">
                        Lanjutkan <span class="arrow-rgt">></span>
                    </button>
                </div>
                <p style="padding: 30px; text-align: center; color: #949494; font-size: 16px">atau</p>
            </form>
            <div class="btn-oth1" style="padding: 0px">
                <a href="/Login"><button style="background-color: #646464c0;padding: 10px;"
                        class="btn-oth">Login</button></a>
                <a href=""><button style="background-color: #51739B" class="btn-oth"><i style="font-size: 24px"
                            class="fa-brands fa-google"></i></button></a>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 40%"></div>
    <!-- FOOTER -->
    @include('navbar.footer')
    <!-- END FOOTER -->

</body>

</html>
