<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dietitian Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "NATS", sans-serif !important;
            font-weight: 400 !important;
            font-style: normal !important;
            overflow-x: hidden;
            overflow-y: scroll;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        .top_bar {
            display: flex;
            justify-content: space-between;
        }

        .top_bar img {
            margin-top: -20px;
            width: 210px;
            height: auto;
        }

        .bg {
            position: absolute;
            margin-top: -10px;
            z-index: -1;
        }

        .up {
            padding: 2rem;
            justify-content: center;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .up a {
            text-decoration: none;
        }

        #about {
            margin-right: 1rem;
            font-size: 30px;
            color: #8081F9;
            background-color: #FFFFFF;
            border: none;
            margin-bottom: 10px;
            margin-top: 2rem;
            height: 50px;
        }

        #features {
            font-size: 30px;
            color: #8081F9;
            background-color: #FFFFFF;
            border: none;
            height: 50px;
            margin-bottom: 10px;
            margin-top: 2rem;
        }

        #touch {
            font-size: 30px;
            color: #8081F9;
            background-color: #FFFFFF;
            border: none;
            height: 50px;
            margin-bottom: 10px;
            margin-top: 2rem;
        }

        #sign {
            background: #F8F8FF;
            box-shadow: 0px 0px 10px #C0C0FF;
            border-radius: 12px;
            height: 50px;
            border: none;
            margin-top: 2rem;
            margin-right: 2rem;
            font-size: 30px;
            color: #8081F9;
        }

        .header {
            position: absolute;
            width: 650px;
            height: 400px;
            font-size: 75px;
            line-height: 133.5%;
            color: #4F1963;
            padding: 50px 0px 0px 60px;
            margin: auto;
            justify-content: space-evenly;
        }

        .image img {
            width: 100%;
            height: 100%;

        }

        .row {
            margin: 0;
        }

        .col-sm-6 {
            display: flex;
            margin: 0 !important;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0 !important;
        }


        .right_links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: -30px;
            flex-direction: column;
            z-index: -1;
            margin-bottom: -110px;
        }

        h4 {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 35px;
            line-height: 78px;
            color: #4F1963;
        }

        .craft {
            position: absolute;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
            gap: 8rem;
            top: 148%;
            left: 12%;
        }

        .craft-1 p {
            width: 200px;
            height: 32px;
            left: 0.01%;
            top: 190px;
            font-size: 25px;
            line-height: 126.84%;
            text-align: center;

        }

        .img-1 {
            width: 150px;
            height: 150px;
            background: #FFFFFF;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            border-radius: 50%;
        }

        .about-1 span {
            position: absolute;
            width: 215px;
            height: 78px;
            justify-content: center;
            left: 48%;
            top: 193%;
            font-weight: bold;
            font-size: 43px;
            line-height: 78px;
            color: #4F1963;
        }

        .about-2 {
            position: absolute;
            display: flex;
            flex-direction: row;
            padding-right: 10px;
            justify-content: center;
            top: 200%;
            left: -5%;
            margin-right: auto;
            margin-left: auto;
            width: 100%;

        }

        .about-2 img {
            margin-left: 15%;
        }

        .about-content {

            justify-content: center;
            top: 100px;
            margin-left: 0%;
            padding: 50px 0 0 0;
            font-size: 28px;
            line-height: 135%;
            text-align: justify;
            color: #C056E7;
        }

        li {
            color: #4F1963;
            font-size: 20px;
            line-height: 40px;
        }

        li span {
            color: #C056E7;
            font-size: 28px;
        }

        .features-1 span {
            position: absolute;
            width: 215px;
            height: 78px;
            justify-content: center;
            left: 4.5%;
            top: 280%;
            font-weight: bold;
            font-size: 43px;
            line-height: 100px;
            color: #4F1963;
        }

        p {
            font-size: 30px;
            line-height: 124.84%;
            text-align: justify;
            color: #C056E7;
        }


        .features-2 {
            display: grid;
            grid-template-columns: auto auto;
            grid-template-rows: 14% 14% 13% 13% 13% 13% 13% 13% 20% 20% 13% 13%;
            padding-right: 20px;
            position: absolute;
            top: 310%;
            width: auto;
            margin: auto;
            left: 5%;
        }

        .features-3 {
            font-size: 20px;
            text-align: center;
        }

        .features-3 li {
            font-size: 20px;

        }

        .features-3 ul {
            padding-top: 80px;
        }

        .features-3 span {
            color: #4F1963;
            font-size: 30px;
        }

        .features-3 p {
            padding-left: 30px;
            padding-right: 20px;
            padding-top: 1px;
            text-align: left;
            min-width: 10%;
            color: #C056E7;
            font-size: 30px;
            line-height: 35px;

        }

        .touch span {
            position: absolute;
            width: 215px;
            height: 78px;
            justify-content: center;
            left: 4.5%;
            top: 559%;
            font-weight: bold;
            font-size: 43px;
            line-height: 78px;
            color: #4F1963;
        }

        .touch-2 {
            width: 100%;
            display: flex;
            flex-direction: row;
            align-content: center;
            padding: 3rem;
            margin: auto;
            background: rgba(248, 248, 255, 0.44);
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 26px;
        }

        .t2 p {
            border: none;
            font-size: 45px;
            line-height: 124.84%;
            color: #C056E7;
        }

        .t4 {
            border: 1px solid;
            line-height: 55px;
            font-size: 20px;
            ;
            background: #FFFFFF;
            border-radius: 15px;
            padding-left: 50px;
            border: 0px;

        }

        .t4 input {
            width: 72%;
            border: 0px #fff;
            background-color: none;
            padding-left: 10px;
        }

        .t3 button {
            width: 100%;
            height: 58px;
            border: 0px #C056E7;
            background: #C056E7;
            color: #fff;
            font-size: 20px;
            border-radius: 15px;
        }

        .t5 {
            margin-top: 27%;
            align-items: center;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            z-index: 2;
        }

        .t5 img {
            position: relative;
            background-color: #fff;
            border-radius: 50%;
            justify-content: center;
            width: 60px;
            height: 60px;
            padding: 10px;
            background: #F3F3FF;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.25);
        }

        .accordion {
            background-color: white;
            color: #4F1963;
            cursor: pointer;
            font-size: 28px;
            width: 100%;
            padding: 1rem 2rem;
            border: none;
            outline: none;
            transition: 0.4s;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 20px;
        }

        .accordion i {
            font-size: 0.8rem;
            padding: 3px;
            ;
            background: #4F1963;
            border-radius: 50%;
            color: white;
        }

        .active,
        .accordion:hover {
            background-color: #fff;
        }

        .pannel {
            padding: 0.1rem 2rem;
            background-color: white;
            overflow: hidden;
            background-color: #fff;
            display: none;
            border-radius: 20px;
        }

        .pannel p {
            font-size: 28px;
            color: #C056E7;
            line-height: 3rem;
        }

        .faqs {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            width: 70%;
            margin-right: auto;
            margin-left: auto;
        }

        .faq-1 {
            position: relative;
            border: 0px;
            margin-right: auto;
            margin-left: auto;
            width: 100%;
            box-shadow: 0px 4.00022px 20.0011px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
        }

        .faq-1.active {
            border: none;
        }

        .faq span {
            width: 215px;
            height: 78px;
            justify-content: center;
            font-weight: bold;
            font-size: 43px;
            line-height: 78px;
            color: #4F1963;
        }

        .down {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 124.84%;
            color: #A6A6A6;
            margin-top: 3rem;
            gap: 2rem;
        }

        .col-sm-8 {
            margin: 0 !important;

            display: flex;
            justify-content: center;
            flex-direction: row;
            align-items: center;
        }

        .col-sm-4 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left_links {
            display: flex;
            justify-content: space-between;
            align-items: left;
            margin-right: 10rem;
            flex-direction: column;
            padding: 20px;
        }

        .left_links span {
            font-style: normal;
            font-weight: 400;
            font-size: 30px;
            line-height: 40px;
            letter-spacing: 0.02em;
            color: #4F1963;
        }

        .link {
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 40px;
            letter-spacing: 0.02em;
            color: #8E8E8E;
        }

        .right_links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: -30px;
            flex-direction: column;
            z-index: -1;
            margin-bottom: -110px;
        }

        .play_store {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
            padding: 20px;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
        }

        .apple {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            background: #FFFFFF;
            border: 2px solid #817FF8;
            border-radius: 50px;
            width: 176px;
            height: 64px;
            margin-right: 10px;
        }

        .content p {
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 90.84%;
            color: #000000;
        }

        .content span {
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 90.84%;
            color: #000000;
        }

        .apple img {
            margin-top: -110px;
        }

        .play {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            background: #FFFFFF;
            border: 2px solid #817FF8;
            border-radius: 50px;
            width: 180px;
            height: 64px;
            margin-left: 10px;
        }

        .play p {
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 90.84%;
            color: #000000;
        }

        .play span {
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 90.84%;
            color: #000000;
        }

        .play img {
            margin-top: -110px;
            margin-left: 10px;
        }

        .sform {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: -2rem;
        }

        .mt-5 {
            margin-right: 6.5rem;
            margin-top: 1rem !important;
            margin-bottom: 1.5rem;
        }

        .bottom_logo {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }



        .social_links {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
        }

        .bottom_logo img {
            margin-bottom: -110px;
        }

        .copy {
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            color: #A6A6A6;
            margin-top: 6rem;
        }

        .vec-sub {
            font-size: 25px;
            font-weight: 500;
            text-align: center;
        }

        .sec-1 {
            display: flex;
            flex-direction: row;
        }

        .tittle {
            width: 92%;
            font-style: normal;
            font-weight: 400;
            font-size: 75px;
            line-height: 133.5%;
            /* or 100px */
            color: #4F1963;
        }

        .feature {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bottom_patch {
            margin-left: -500px;
            z-index: -1;
        }

        .get-vec {
            margin-bottom: -110px;
        }

        /* .hand-crafted{
            background:url(/assets/images/Vector\ 6.svg);
        } */

        @media screen and (max-width:1200px) {
            .get-vec-hand {
                width: 360px !important;
                left: 16% !important;
            }

            .right_links {
                scale: 0.7;
            }

            .left_links {
                margin-right: 0rem !important;
            }

            #btml {
                scale: 0.8;
            }

            .container {
                display: flex;
                flex-direction: column;
            }

            .main-img {
                width: 100%;
                height: 100%;
                margin-top: 20%;
            }

            .tittle {
                font-size: 3rem;
                width: 100% !important;
            }

            .col-lg-6 {
                width: 100% !important;
            }

            .touch-2 {
                flex-direction: column !important;
            }

            @media screen and (max-width:575px) {
                .img-2 {
                    width: 100%;
                    height: 100%;
                }

                .right_links {
                    scale: 0.7;
                }
            }

            .feature {
                flex-direction: column !important;
            }

            .hand-crafted-sec {
                scale: 0.8;
            }

            .touch-2 {
                flex-direction: column !important;
            }

            .about-sec {
                flex-direction: column !important;
            }
        }

        @media screen and (max-width:360px) {
            .get-vec-hand {
                width: 255px !important;
                left: 3% !important;
            }

            .mt-5 {
                margin-right: 0rem !important;
            }

            .header_sigin span {
                font-size: 60px;
            }

            .right_links {
                scale: 0.7;
            }

            .bottom_patch {
                scale: 0.8;
            }

            .bottom_logo img {
                scale: 0.7;
            }

            .vec-sub {
                font-size: 18px;
            }

            .social_links,
            .copy {
                margin-left: 42px;
            }

            .gf_btns {
                scale: 0.8;
            }

            form {
                scale: 0.8;
            }

            .form_inputs {
                width: 100%;
            }

            #email,
            #password {
                width: 100%;
            }

            #btml {
                padding-top: 0rem !important;
            }
        }

        @media screen and (max-width: 768px) {
            .mobile img {
                margin-top: 2rem;
            }

            #parent {
                display: block !important;
            }

            #home {
                display: none;
            }

            #parent-lg {
                display: none !important;
            }

            .top_bar img {
                margin-top: -20px;
                width: 150px;
                height: auto;
            }

            .sign {
                margin-right: 1rem;
            }

            .form_inputs {
                padding: 0px !important;
            }

            .row {
                width: 100%;
            }

            .right_links {
                width: 100%;
            }

            .left_links {
                margin-right: 0rem !important;
            }

            .bottom_patch {
                margin-left: -500px;
                z-index: -1;
            }

        }

        /****************************media query for mediun devices**************************************/
        @media screen and (min-width: 768px) and (max-width: 1200px) {
            .right_links {
                scale: 0.7;
            }

            .left_links {
                margin-right: 0rem !important;
            }

            #btml {
                scale: 0.8;
            }
        }
    </style>
</head>

<body>

    <!-----------------------------------------top navbar sec------------------------------->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid p-0 top_bar">
            <div class="left">
                <div class="bg">
                    <img src="<?=$DEFAULT_PATH?>assets/images/Vector 1.svg" style="width:100%">
                </div>
                <img src="<?=$DEFAULT_PATH?>assets/images/INFITS.svg?i=1" style="margin-top:0.8rem;margin-left:0.8rem">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse up flex-grow-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#section1" id="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#section2" id="about">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#section3" id="about">Get in Touch</a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link active" aria-current="page" id="sign"
                            onclick="window.location.href = 'register.php';">SignIn/SignUp</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-----------------------------------Top sec-------------------------------------------------------->
    <div class="container d-flex" style="margin-top: 5%;">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <p class="tittle" style="">Client Management Made Easy for Nutritionists and Dietitians</p>
            <p
                style="font-style: normal;font-weight: 400;font-size: 30px;line-height: 124.84%;/* or 37px */text-align: justify;color: #000000;margin-top: 10%;">
                An advance health tech startup to track your client’s fitness and health goals.
            </p>
            <div class="col-sm-12 d-flex justify-content-lg-start justify-content-md-center justify-content-sm-center"
                style="margin-top: 10%;">
                <div class="right_links mb-0">
                    <div style="display: flex; gap:1rem;">
                        <a href="#"
                            style="width: 210px;height: 65px;justify-content: space-around;justify-content: center;align-items: center;background: #FFFFFF;border: 2px solid #817FF8;border-radius: 50px; display: flex; flex-direction: row; padding:2px; text-decoration: none;">
                            <div>
                                <img style="margin-right: 0.5rem;" src="<?=$DEFAULT_PATH?>/images/Apple.svg" alt="apple">
                            </div>
                            <div style="display: flex; flex-direction: column;">
                                <div>
                                    <p
                                        style=" margin-top: 1rem; font-weight: 400;font-size: 15px;line-height: 10%;color: #000000;">
                                        Download on the</p>
                                </div>
                                <div>
                                    <p style=" font-weight:600;font-size: 22px;line-height: 10%;color: #000000;">App
                                        Store</p>
                                </div>
                            </div>
                        </a>
                        <a href="#"
                            style="width: 210px;height: 65px;justify-content: space-around;justify-content: center;align-items: center;background: #FFFFFF;border: 2px solid #817FF8;border-radius: 50px; display: flex; flex-direction: row; padding:2px;text-decoration: none;">
                            <div>
                                <img style="margin-right: 0.5rem;" src="<?=$DEFAULT_PATH?>/images/Google Play.svg" alt="apple">
                            </div>
                            <div style="display: flex; flex-direction: column;">
                                <div>
                                    <p
                                        style=" margin-top: 1rem; font-weight: 400;font-size: 15px;line-height: 10%;color: #000000;">
                                        GET IT ON</p>
                                </div>
                                <div>
                                    <p style=" font-weight:600;font-size: 22px;line-height: 10%;color: #000000;">Google
                                        Play</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 main-img">
            <div>
                <img class="w-100 h-100" src="<?=$DEFAULT_PATH?>/images/diet_landing.svg" alt="">
            </div>
        </div>
    </div>
    <div class="col-sm-12 container" style="margin-top: 5%;">
        <div class="hand-crafted">
            <img class="get-vec-hand" src="<?=$DEFAULT_PATH?>/images/Vector 6.svg" style="position: absolute;
            width: 435px;
            left: 52%;
            height: 350px;
            /* top: 135%; */
            z-index: -1;">
            <h4>HandCrafted for</h4>
            <div class="d-flex justify-content-center gap-5  hand-crafted-sec">
                <div class="d-flex justify-content-evenly flex-wrap gap-5 align-items-center">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="img-1" src="<?=$DEFAULT_PATH?>/images/nutritionists.svg">
                        <p style="text-align: center;
                        font-size:17px;
                        font-weight: 400;
                        line-height: 32px;
                        letter-spacing: 0em;
                        margin-top: 1rem;
                        color: #000000;
                        ">Nutritionists</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="img-1" src="<?=$DEFAULT_PATH?>/images/dietitians.svg">
                        <p style="text-align: center;
font-size:17px;
margin-top: 1rem;
font-weight: 400;
line-height: 32px;
letter-spacing: 0em;
text-align: center;
color: #000000;
">Dietitians</p>
                    </div>
                </div>
                <div class="d-flex justify-content-evenly flex-wrap gap-5 align-items-center">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="img-1" src="<?=$DEFAULT_PATH?>/images/fitness-Instructors.svg">
                        <p style="text-align: center;
 margin-top: 1rem;                        
font-size:17px;
font-weight: 400;
line-height: 32px;
letter-spacing: 0em;
text-align: center;
color: #000000;
">Fitness Instructors</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="img-1" src="<?=$DEFAULT_PATH?>/images/fitness-Enthusiasts.svg">
                        <p style="text-align: center;
 margin-top: 1rem;
font-size:17px;
font-weight: 400;
line-height: 32px;
letter-spacing: 0em;
text-align: center;
color: #000000;
">Fitness Enthusiasts</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-----------------------------------about sec-------------------------------------------->
    <div class="container">
        <img class="get-vec-about" src="<?=$DEFAULT_PATH?>assets/images/Vector 7.svg" style="position: absolute;
                        width:125px;
                        left: 47%;
                        z-index: -1;
                    ">
        <h4>About</h4>
        <div class="about-sec d-flex flex-md-column flex-sm-column flex-lg-row flex-xs-column" style="gap: 5%;">
            <img class="img-2" src="<?=$DEFAULT_PATH?>assets/images/diet_landing-2.svg" style="width:100%; height:100%; margin:auto;">
            <div class="about-content ">
                <p>It is crucial for nutritionists and dietitians to track their clients’ nutritional journeys,
                    and INFITS aims to ease this monumental task for you.
                <ul>
                    <li><span> India's first health and wellness app for nutritionists.</span></li>
                    <li><span>Track and monitor your client's daily progress to generate charts, reports, and
                            statistics.</span></li>
                    <li><span>Make online appointment bookings, stream live videos, and communicate consistently
                            with clients.</span></li>
                </ul>
                INFITS is determined to help you keep track of your client’s journey to stay healthy, happy, and
                fit.
                </p>
            </div>
        </div>
        <div></div>
    </div>
    <!--------------------------features sec--------------------------------------------------->
    <div class="container">
        <img class="get-vec" src="<?=$DEFAULT_PATH?>assets/images/Vector 8.svg" style="position: absolute;
        width:125px;
        z-index: -1;
    ">
        <h4 style="justify-content: start;">Features</h4>
        <p>A smarter, simpler way to take charge of your health and benefits. With infits app you can:</p>
        <!-- feature 1  -->
        <div class="feature">

            <div class="features-3">
                <ul>
                    <li><span>KEEP TRACK FOR EVERYTHING</span></li>
                </ul>
                <p>Track your client's health metrics, workout regimes, health conditions, and other relevant
                    activities daily to provide informed instructions.</p>
            </div>

            <div>
                <img class="img-2" src="<?=$DEFAULT_PATH?>assets/images/diet_landing-3.svg">
            </div>
        </div>
        <!-- feature 2  -->
        <div class="feature">

            <div class="features-3">
                <img class="img-2" src="<?=$DEFAULT_PATH?>assets/images/diet_landing-4.svg">
            </div>

            <div class="features-3">
                <ul>
                    <li><span>ALERTS & REMINDERS</span></li>
                </ul>
                <p>Create alerts and reminders to keep track of your client's progress towards a healthy
                    lifestyle.</p>
            </div>
        </div>
        <!-- feature 3  -->
        <div class="feature">

            <div class="features-3">
                <ul>
                    <li><span>ONLINE APPOINTMENTS</span></li>
                </ul>
                <p>It doesn't matter if your client is out of town or even out of the country, get your
                    appointments online hassle-free.</p>
            </div>

            <div class="features-3">
                <img class="img-2" src="<?=$DEFAULT_PATH?>assets/images/diet_landing-5.svg">
            </div>
        </div>
        <!-- feature 4  -->
        <div class="feature">

            <div class="features-3">
                <img class="img-2" src="<?=$DEFAULT_PATH?>assets/images/diet_landing-6.svg" style="">
            </div>

            <div class="features-3">
                <ul>
                    <li style=""><span>GO LIVE</span></li>
                </ul>
                <p>Seamless communication with clients via in-app messaging and live video streaming services,
                    no matter where you are.</p>
            </div>
        </div>
        <!-- feature 5  -->
        <div class="feature">

            <div class="features-3">
                <ul>
                    <li style=""><span>HEALTH RECORD MANAGEMENT</span></li>
                </ul>
                <p>Receive each and every client's health reports and files systematically in preset formats for
                    effortless management.</p>
            </div>

            <div class="features-3">
                <img class="img-2" src="<?=$DEFAULT_PATH?>assets/images/diet_landing-7.svg" style="">
            </div>
        </div>
        <!-- feature 6  -->
        <div class="feature">

            <div class="features-3">
                <img class="img-2" src="<?=$DEFAULT_PATH?>assets/images/diet_landing-8.svg" style="">
            </div>

            <div class="features-3">
                <ul>
                    <li><span>CONTROL THEIR DIETS</span></li>
                </ul>
                <p>Track your client's meals to generate diet charts, routines, and recipes that fit
                    their lifestyle.</p>
            </div>
        </div>
    </div>
    <!--------------------------------------get in touch sec-------------------------------------->
    <div class="container">
        <img class="get-vec" src="<?=$DEFAULT_PATH?>/images/Vector 7.svg" style="position: absolute;
        width:125px;
        z-index: -1;
    ">
        <h4 style="justify-content: start;">Get in Touch</h4>
        <div class="touch-2">
            <div class="t2 col-lg-6">
                <p>Contact Us</p><br>
                <img class="" src="<?=$DEFAULT_PATH?>/images/diet_landing-9.svg" style="width: 80%; height:80%;padding-left:40px;">
            </div>
            <div class="t3 container col-lg-6">
                <div class="t4">
                    <img class="" src="<?=$DEFAULT_PATH?>/images/diet_user.svg" style="top:80%;">
                    <span><input type="text" placeholder="User Name"></span>
                </div><br>
                <div class="t4">
                    <img class="" src="<?=$DEFAULT_PATH?>assets/images/diet_mail.svg" style="top:80%;">
                    <span><input type="text" placeholder="Email" style="border:none;"></span>
                </div><br>
                <div class="t4">
                    <img class="" src="<?=$DEFAULT_PATH?>assets/images/diet_msg.svg" style="top:80%;">
                    <span><input type="text" placeholder="Message"></span>
                </div><br>
                <button>Submit</button>
                <div class="t5">
                    <img class="" src="<?=$DEFAULT_PATH?>assets/images/Facebook.svg">
                    <img class="" src="<?=$DEFAULT_PATH?>assets/images/Twitter.svg">
                    <img class="" src="<?=$DEFAULT_PATH?>assets/images/Linkedin.svg">
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------FAQ sec----------------------------------------------->
    <div class="col-12 container" style="margin-top: 5rem;">
        <div class="faq">
            <img class="get-vec" src="<?=$DEFAULT_PATH?>assets/images/Vector 7.svg" style="position: absolute;
            width:125px;
            z-index: -1;
        ">
            <span>FAQs</span>
        </div>
        <div class="faqs">
            <div class="faq-1">
                <button class="accordion">1. For whom the INFITS Wellness app is for?
                    <i class="fa-solid fa-chevron-down"></i></button>
                <div class="pannel">
                    <p>The Infits Wellness app is tailored for wellness practitioners and consultants. It is
                        created to help nutritionists and dietitians maintain track of their clients' daily
                        progress and dietary decisions. With INFITS, you can keep track of your client's daily
                        progress and customise their goals and plans. The general public can also use INFITS to
                        monitor their health progress.</p>
                </div>
            </div>
            <div class="faq-1">
                <button class="accordion">2. What makes INFITS different from, say other Wellness apps?
                    <i class="fa-solid fa-chevron-down"></i></button>
                <div class="pannel">
                    <p>There are a lot of wellness apps out there; INFITS shows its uniqueness by tailoring its
                        functions to meet the needs of wellness consultants and practitioners who wish to keep
                        track of their clients' daily progress. It helps you connect to smart devices, create
                        daily reports, save documents, set alerts and reminders for your clients, have online
                        appointment booking, and live stream while your clients can track their steps, sleep,
                        calories, diets, heart rate, and water intake. It's an app tailored for both
                        nutritionists and their clients.</p>
                </div>
            </div>

            <div class="faq-1">
                <button class="accordion">3. What are the benefits of INFITS wellness app?
                    <i class="fa-solid fa-chevron-down"></i></button>
                <div class="pannel">
                    <p>There are various benefits to using the INFITS wellness app. Nutritionists, dietitians,
                        and other fitness instructors can use it to track their clients' daily activities and
                        reach target milestones more easily. It also acts as a platform for instructors to
                        accept online appointments and make live video streaming. This will help them escape
                        from the exhausting task of individual calling and messaging.</p>
                </div>
            </div>

            <div class="faq-1">
                <button class="accordion">4. What does INFITS exactly does?
                    <i class="fa-solid fa-chevron-down"></i></button>
                <div class="pannel">
                    <p>INFITS is a wellness app tailored to the needs of wellness instructors and their clients.
                        It documents every activity of clients, including steps, meals/calories, weight, water,
                        and exercise/workout, while monitoring their sleep and heart rate, providing end-to-end
                        analysis of each client daily. INFITS will help you connect with a smart device for
                        tracking, create alerts and reminders for your progress, accept online appointment
                        booking, live stream videos, and share documents with your clients.</p>
                </div>
            </div>

            <div class="faq-1">
                <button class="accordion">5. Should I prescribe custom equipment when using INFITS?
                    <i class="fa-solid fa-chevron-down"></i></button>
                <div class="pannel">
                    <p>When using the INFITS wellness app, there is no need to prescribe custom equipment as
                        long as your customers have smart devices to track their activities. INFITS can connect
                        with all wellness devices and collect data through them to get precise readings of your
                        clients. So as long as your clients have smart tracking devices, there is no need for
                        custom prescriptions.</p>
                </div>
            </div>

            <div class="faq-1">
                <button class="accordion">6. Can I have consultations with international clients?
                    <i class="fa-solid fa-chevron-down"></i></button>
                <div class="pannel">
                    <p>Boundaries and nationalities do not bind INFITS, you can have clients from all over the
                        world as long as they have downloaded the app. It's an online platform where you can
                        interact with clients worldwide. You can track their progress from your home through the
                        app, and give them proper consultations and milestones no matter how far apart you are.
                    </p>
                </div>
            </div>

            <div class="faq-1">
                <button class="accordion">7. How precise is the INFITS wellness app?
                    <i class="fa-solid fa-chevron-down"></i></button>
                <div class="pannel">
                    <p>INFITS wellness app will be as precise as your client's smart device. INFITS collects
                        data from your client's smart devices to compile all their activities to create reports
                        and daily end-to-end analyses of each client. Any smart device can be connected to
                        INFITS, and reports can be generated based on data shared through these connected smart
                        devices.</p>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------FOOTER SECTION--------------------------------------------------->
    <!---------------------------------------webview--------------------------------------->
    <div class="row" id="parent-lg" style="margin-top:2rem">
        <div class="col-sm-4 " id="btml">
            <div class="bottom_logo">
                <img src="<?=$DEFAULT_PATH?>assets/images/INFITS.svg" alt="">
                <div class="vec-sub"><span>Fitter</span><span class="ms-2">. Healthier</span><span class="ms-2">.
                        Happier</span></div>
                <div class="social_links">
                    <img src="<?=$DEFAULT_PATH?>assets/images/Facebook.svg" alt="">
                    <img src="<?=$DEFAULT_PATH?>assets/images/Twitter.svg" alt="">
                    <img src="<?=$DEFAULT_PATH?>assets/images/Linkedin.svg" alt="">

                </div>
                <span class="copy">Copyright 2022 Infits. All rights reserved.</span>
            </div>

            <div class="bottom_patch">
                <img src="<?=$DEFAULT_PATH?>assets/images/Vector 2.svg" style="margin-left:3rem">
            </div>

        </div>
        <div class="col-sm-8" style="margin:0">
            <div class="row" style="margin:0">
                <div class="col-sm-6" style="padding:0">
                    <div class="left_links" style="margin-right: 10rem;">
                        <span class="link" style="margin-top:3rem; color: #4F1963;">Company</span>
                        <a class="link" style="color: #8E8E8E; text-decoration: none;">About</a>
                        <a class="link" style="color: #8E8E8E; text-decoration: none;">Features</a>
                        <a class="link" style="color: #8E8E8E; text-decoration: none;">Testimonials</a>
                        <a class="link" style="color: #8E8E8E; text-decoration: none;">Get in touch</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right_links">
                        <img class="get-vec" src="<?=$DEFAULT_PATH?>assets/images/Vector 3.svg" style="height:8rem">
                        <span style="color: #4F1963;font-size:25px">Get the app</span>

                        <div style="display: flex; gap:1rem;">
                            <a href="#"
                                style="width: 176px;height: 64px;justify-content: space-around;justify-content: center;align-items: center;background: #FFFFFF;border: 2px solid #817FF8;border-radius: 50px; display: flex; flex-direction: row; padding:2px; text-decoration: none;">
                                <div><img style="margin-right: 0.5rem;" src="<?=$DEFAULT_PATH?>assets/images/Apple.svg" alt="apple"></div>
                                <div style="display: flex; flex-direction: column;">
                                    <div>
                                        <p
                                            style=" margin-top: 1rem; font-weight: 400;font-size: 12px;line-height: 90.84%;color: #000000;">
                                            Download on the</p>
                                    </div>
                                    <div>
                                        <p style=" font-weight:600;font-size: 18px;line-height: 90.84%;color: #000000;">
                                            App Store</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                style="width: 176px;height: 64px;justify-content: space-around;justify-content: center;align-items: center;background: #FFFFFF;border: 2px solid #817FF8;border-radius: 50px; display: flex; flex-direction: row; padding:2px;text-decoration: none;">
                                <div><img style="margin-right: 0.5rem;" src="<?=$DEFAULT_PATH?>assets/images/Google Play.svg" alt="apple">
                                </div>
                                <div style="display: flex; flex-direction: column;">
                                    <div>
                                        <p
                                            style=" margin-top: 1rem; font-weight: 400;font-size: 12px;line-height: 90.84%;color: #000000;">
                                            GET IT ON</p>
                                    </div>
                                    <div>
                                        <p style=" font-weight:600;font-size: 18px;line-height: 90.84%;color: #000000;">
                                            Google Play</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="down">
                            <h6>Terms of use</h6>
                            <h6>Privacy Policy</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--------------------------------------mobile-view---------------------------------------------------->
    <div class="row  d-lg-none d-md-none d-xl-none d-sm-block" id="parent">
        <div class="col-sm-12"
            style="margin:1 0 !important;margin-bottom:6rem; display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <div class="row" style="margin:0 !important; display: flex; flex-direction: column;">
                <div class="col-sm-12"
                    style="padding:0 !important;margin:0 important; display: flex; justify-content: center; ">
                    <div class="left_links">
                        <span class="link" style=" color: #4F1963;">Company</span>
                        <a class="link" style="color: #8E8E8E; text-decoration: none;">About</a>
                        <a class="link" style="color: #8E8E8E;text-decoration: none;">Features</a>
                        <a class="link" style="color: #8E8E8E;text-decoration: none;">Testimonials</a>
                        <a class="link" style="color: #8E8E8E;text-decoration: none;">Get in touch</a>
                    </div>
                </div>
                <div class="col-sm-12 mt-5" style="padding:0 !important;margin:0 important">
                    <div class="right_links" style="padding-top:3rem">
                        <img class="get-vec" src="<?=$DEFAULT_PATH?>assets/images/Vector 3.svg" style="width: 100%;
                        height: 8rem;">
                        <span style="color: #4F1963;font-size:30px">Get the app</span>
                        <div style="display: flex; gap:1rem;">
                            <a href="#"
                                style="width: 176px;height: 64px;justify-content: space-around;justify-content: center;align-items: center;background: #FFFFFF;border: 2px solid #817FF8;border-radius: 50px; display: flex; flex-direction: row; padding:2px; text-decoration: none;">
                                <div><img style="margin-right: 0.5rem;" src="<?=$DEFAULT_PATH?>assets/images/Apple.svg" alt="apple"></div>
                                <div style="display: flex; flex-direction: column;">
                                    <div>
                                        <p
                                            style=" margin-top: 1rem; font-weight: 400;font-size: 12px;line-height: 90.84%;color: #000000;">
                                            Download on the</p>
                                    </div>
                                    <div>
                                        <p style=" font-weight:600;font-size: 18px;line-height: 90.84%;color: #000000;">
                                            App Store</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                style="width: 176px;height: 64px;justify-content: space-around;justify-content: center;align-items: center;background: #FFFFFF;border: 2px solid #817FF8;border-radius: 50px; display: flex; flex-direction: row; padding:2px;text-decoration: none;">
                                <div><img style="margin-right: 0.5rem;" src="<?=$DEFAULT_PATH?>assets/images/Google Play.svg"
                                        alt="google"></div>
                                <div style="display: flex; flex-direction: column;">
                                    <div>
                                        <p
                                            style=" margin-top: 1rem; font-weight: 400;font-size: 12px;line-height: 90.84%;color: #000000;">
                                            GET IT ON</p>
                                    </div>
                                    <div>
                                        <p style=" font-weight:600;font-size: 18px;line-height: 90.84%;color: #000000;">
                                            Google Play</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="down">
                            <h6>Terms of use</h6>
                            <h6>Privacy Policy</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- component-2 -->
        <div class="col-sm-8" id="btml">
            <div class="bottom_logo">
                <img src="<?=$DEFAULT_PATH?>assets/images/INFITS.svg" alt="">
                <div class="vec-sub"><span>Fitter</span><span class="ms-2">. Healthier</span><span class="ms-2">.
                        Happier</span></div>
                <div class="social_links">
                    <img src="<?=$DEFAULT_PATH?>assets/images/Facebook.svg" alt="">
                    <img src="<?=$DEFAULT_PATH?>assets/images/Twitter.svg" alt="">
                    <img src="<?=$DEFAULT_PATH?>assets/images/Linkedin.svg" alt="">

                </div>
                <span class="copy">Copyright 2022 Infits. All rights reserved.</span>
            </div>

            <div class="bottom_patch">
                <img src="<?=$DEFAULT_PATH?>assets/images/Vector 2.svg" style="margin-left:3rem">
            </div>

        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>