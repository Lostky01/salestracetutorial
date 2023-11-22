@extends('layouts.layout-v3')
@section('title', 'Sales Automation')
@section('css-after')

    <style>
        .input {
            background-color: #EDEEF0;
            width: 100%;
            height: 45px;
            padding: 12px;
            border: 1.5px solid rgba(211, 211, 211, 0);
            outline: none;
            transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            box-shadow: 0px 0px 20px -18px;
        }

        .input:hover {
            border: 2px solid lightgrey;
            box-shadow: 0px 0px 20px -17px;
        }

        /*      .input:active {
                                    transform: scale(0.95);
                                } */

        .input:focus {
            border: 2px solid grey;
        }

        .hero {
            background-image: url("public/asset-iklan/omsetku-background-iklan-p2.png");
        }

        .heroes {
            background-image: url("public/asset-iklan/omsetku-background-iklan-p2.png");
        }

        .bg-iklan-price {
            background-image: url("asset-st/footer.png");
        }

        .bg-note {
            background-image: url("public/assets/img/omsetku-bg-circle.webp");
        }

        .bg-white {
            background-image: url("public/assets/img/omsetku-bg-cube.png");
        }

        .bg-orange {
            background-image: url("public/assets/img/omsetku-bg-circle-orange.png");
        }

        .bg-gradient {
            background-image: url("public/assets/img/omsetku-bg-cicle-purple.png") !important;
        }

        .bg-res2 {
            background-image: url("public/assets/img/omsetku-bg-circle.webp") !important;
        }

        .bg-res4 {
            background-image: url("asset-st/header.png") !important;
        }

        .bg-res5 {
            background-image: url("public/assets/img/omsetku-bg-cicle-purple.png") !important;
        }

        .bg-res6 {
            background-image: url("asset-st/bg-hp.png") !important;
            height: 655px;
        }

        .bg-res7 {
            background-image: url("asset-st/bg-hp.png") !important;
        }

        .bg-34B768 {
            background: #34B768;
        }

        .heroes {
            width: 100%;
            background-size: cover;
            background-position: center;
            /* position: absolute; */
            padding: 120px 0 0 0;
            color: rgba(255, 255, 255, 0.8);
            height: 100%;
            /* min-height: 50vh; */
            /* background-image: url("../img/hero_img-min_1.webp"); */
        }


        .btn-header {

            width: 225px;

            height: 40px;

            border: none;

            color: #1D2F5F;
            background: #fff;

            font-weight: 600px;

            border-radius: 5px;

        }


        .play-button {
            width: 150px;
            margin-top: -450px;
            margin-left: 200px;
            margin-right: auto;
        }

        .btn-header a {

            text-decoration: none;
            color: #1D2F5F;
        }

        .text-about {
            text-align: justify;
            font-size: 17px;
        }



        .img-about {

            /* width: 60vw; */
            margin-top: 0px;
            /* margin-left: 133px; */

        }


        .btn-banner {

            width: 150px;
            margin-top: -20px;

        }

        .bg-grey {

            background-color: #F5F5F5;

        }

        .sct-blue {

            background: #F9FBFF;

        }

        .garis_verikal {
            border-left: 2px #C9C9C9 solid;
            height: 170px;
            width: 0px;
        }


        .img-who {

            width: 960px;
            height: 570px;
            margin-top: 100px;
            margin-left: 0px;

        }


        .img-girl {

            width: 380px;

        }

        .img-test {
            width: 800px;
            height: 570px;
        }

        .img-when {
            width: 1000px;
            margin-top: 89px;
            margin-left: 120px;
        }

        .img-how {
            width: 1000px;
            margin-top: 140px;
            margin-left: 0px;
        }

        .img-funnel {
            width: 400px;
            margin-top: 0px;
            margin-left: 100px;
            padding-top: 40px;
        }

        .img-phone-test {

            width: 352px;

        }


        .text-test {
            font-family: 'Inter';
        }


        .btn-fitur {

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 5px 10px;

            gap: 10px;

            color: #fff;

            margin-bottom: 30px;

            margin-top: 10px;

            width: 50%;

            height: 40px;

            background: #1D2F5F;

            border-radius: 5px;

            border: none;

        }

        .btn-fitur a {

            color: #ffff;
        }



        .img-phone {

            width: 644px;

            height: 750px;

            margin-bottom: -140px;

            margin-left: -100px;

        }



        .img-qr {

            width: 180px;
            margin-top: 20px;
            margin-left: 30px;

        }


        .dwl-btn {

            color: #1D2F5F;
            font-weight: 700;
            margin-top: 7px;

        }


        .img-ggp {

            width: 180px;
            margin-top: 20px;
            margin-left: 30px;

        }



        .btn-services {

            border: none;
            margin-top: 30px;
            width: 244px;
            height: 35px;
            background: #F1953F;
            border-radius: 10px;

        }


        .section-blue {

            background: #EBF1FF;

        }



        .img-clien {

            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
            width: 151px;

            height: auto;

            object-fit: contain;
        }



        .footer-logo {

            width: 120px;

            height: 120px;

        }



        .banner-text .title-text {
            color: white;
            text-align: left;
            font-size: 50px;
            margin-top: 100px;
        }


        .title-banner {
            color: white;
            text-align: center;
            font-size: 50px;
            margin-top: 50px;
        }



        .hero-img img {

            width: 580px;
            padding-bottom: 40px;

        }



        .hero-img {

            display: flex;

            justify-content: flex-end;

        }



        .circle {

            width: 25px;

            height: 25px;

            margin-top: -80px;

        }



        .about {



            display: block;

        }



        .about-header {



            padding: 15px 0px;

        }



        .about-header img {



            position: relative;

            top: 60px;

            left: 0px;

        }



        .about-header h2 {



            margin-bottom: 0px;

        }



        .image-section {



            display: flex;
            justify-content: center;
            align-items: center;
        }



        .icon-checklist {



            width: 30px;

            height: 30px;

        }

        .title-features {

            margin-top: -122px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .detail-title-text {

            margin-bottom: 0px !important;
            margin-left: 0px;
            text-align: left !important;
        }

        .about-header .circle-app {
            width: 30px;
            height: auto;
            margin-top: -160px;
            margin-left: 450px;
        }

        .testimonials .testimonial-item {
            margin-left: 30px;
            color: #000;
            display: flex;
            align-items: center;
            padding: 0px 200px;
        }

        .testimonials .testimonial-item p {
            font-style: italic;
            margin: 0px 0px;
            width: auto;
        }

        .testimonial-item .row .content {

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content-who-omsetku a {

            color: #1F4690;
            font-weight: 600;
            font-size: 18px;
        }

        section.features,
        section.service-details {

            padding: 200px 0px;
        }

        .hero p {
            text-align: center;
            font-size: 20px;
        }

        .heroes p {
            text-align: center;
            font-size: 26px;
        }

        .desktop-show {

            display: block !important;

        }

        .mobile-show {

            display: none !important;

        }

        .image-content-desktop {
            position: relative;
            top: 40px;
        }

        .c-EEAE2A {
            color: #EEAE2A;
        }

        .c-F00 {
            color: #F00;
        }

        .w-desk1 {
            width: 15vw !important;
        }

        .w-desk2 {
            width: 35vw !important;
        }

        .w-desk3 {
            width: 25vw !important;
        }

        .w-desk5 {
            width: 20vw !important;
        }

        .w-desk4 {
            width: 65vw !important;
        }

        .icon-w-desk1 {
            width: 3vw;
        }

        .pt-desk1 {
            padding-top: 7vh !important;
        }

        .fw-800 {
            font-weight: 800;
        }

        .fs-desk1 {
            font-size: 24px;
        }

        .c-fff {
            color: #fff;
        }

        .box-content {
            width: 45vw;
            border: 2px solid #FBBC05;
            border-radius: 15px;
        }

        .discount-label {
            width: fit-content;
            background: #F00;
            padding: 1vw;
            border-radius: 100%;
            position: absolute;
            right: 33vw;
            rotate: 25deg;
            margin-bottom: 12vh;
            /* top: 6px; */
            /* float: right; */
            /* bottom: 0vh; */
        }

        .text-price {
            width: fit-content;
            background: #FBBC05;
            padding: .5vw 3vw;
            border-radius: 10px;
        }


        /*--------- responsive laptop/pc ---------*/
        /*
                                                                        desktop zoom custom1

                                                                        main width: 1367px;
                                                                        */
        @media screen and (min-width: 1321px) and (max-width: 1380px) {

            .bg-orange .container .text-center,
            .bg-note .container .text-center {
                margin-bottom: 0px !important;
            }

            .img-who,
            .img-how {
                width: 1000px;
                margin-top: 0px;
                margin-left: 0px;
            }
        }


        @media screen and (max-width: 1515px) {}


        /* Zoom 150% */
        @media screen and (min-width: 1000px) and (max-width: 1098px) {

            .img-phone {
                width: 530px !important;
            }

            .play-button {
                width: 100px !important;
                margin-left: 230px !important;
            }
        }


        @media screen and (min-width: 1248px) and (max-width: 1300px) {

            _::-webkit-full-page-media,
            _:future,
            :root .image-content-desktop {
                position: relative;
                top: 45px;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .icon-w-desk1 {
                width: 3vw;
            }

            .icon-w-desk1 {
                width: 3vw;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .fs-desk1 {
                font-size: 24px;
            }

            .fs-desk1 {
                font-size: 24px;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .pt-desk1 {
                padding-top: 7vh !important;
            }

            .pt-desk1 {
                padding-top: 7vh !important;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .w-desk4 {
                width: 65vw !important;
            }

            .w-desk4 {
                width: 65vw !important;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .w-desk5 {
                width: 20vw !important;
            }

            .w-desk5 {
                width: 20vw !important;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .w-desk3 {
                width: 25vw !important;
            }

            .w-desk3 {
                width: 25vw !important;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .w-desk2 {
                width: 35vw !important;
            }

            .w-desk2 {
                width: 35vw !important;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .w-desk1 {
                width: 15vw !important;
            }

            .w-desk1 {
                width: 15vw !important;
            }

            .image-content-desktop {
                position: relative;
                top: 45px;
            }

            .hero {
                width: 100%;
                min-height: 50vh;
                background-image: url("public/asset-iklan/omsetku-background-iklan-p2.png") !important;
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                color: rgba(255, 255, 255, 0.8);
                height: 765px;
            }

            #heros .title-text {
                color: white;
                text-align: left;
                font-size: 35px;
                margin-top: 86px;
            }

            .title-banner {
                color: white;
                text-align: center;
                font-size: 45px;
                margin-top: 5vh;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .title-banner {
                color: white;
                text-align: center;
                font-size: 45px;
                margin-top: 5vh;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .heroes p {
                font-size: 26px;
            }

            .heroes p {
                font-size: 26px;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .hero p {
                font-size: 26px;
            }

            .hero p {
                font-size: 26px;
            }

            .about-header h2 {
                font-size: 30px;
            }

            .text-about {
                font-size: 16px;
            }

            .img-about {
                width: 487px;
                margin-top: 0px;
                /* margin-left: 133px; */
                /* margin-right: 45px; */
            }

            .img-test {
                width: 682px;
                height: 484px;
            }

            section.features,
            section.service-details {
                padding: 230px 0px;
            }

            .bg-note {
                width: 100%;
                min-height: 50vh;
                background-image: url("../img/Group_28-min.png") !important;
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                height: 789px;
            }

            .bg-white {
                width: 100%;
                min-height: 50vh;
                background-image: url("../img/bg-white.png") !;
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                height: 789px;
            }

            .bg-orange {
                width: 100%;
                min-height: 50vh;
                background-image: url("../img/bg-orange-min.png") !;
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                height: 800px;
            }

            .img-when {
                width: 780px;
                margin-top: 89px;
                margin-left: 154px !important;
            }

            .img-how {
                width: 100%;
                margin-top: 140px;
                margin-left: 0px !important;
            }

            .img-funnel {
                width: 357px;
                margin-top: 0px;
                margin-left: 100px;
                padding-top: 40px;
            }

            .img-who {
                height: 453px;
                width: 765px;
                margin-top: 100px;
                margin-left: 0px !important;
            }

            .img-phone-test {
                width: 300px;
                margin-top: 34px;
            }

        }


        /* Zoom 125% */
        @media screen and (min-width: 1098px) and (max-width: 1247px) {

            .hero {
                width: 100%;
                min-height: 50vh;
                background-image: url("public/asset-iklan/omsetku-background-iklan-p2.png") !important;
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                color: rgba(255, 255, 255, 0.8);
                height: 765px;
            }

            #heros .title-text {
                color: white;
                text-align: left;
                font-size: 50px;
                margin-top: 86px;
            }

            .about-header .circle-app {
                width: 30px;
                margin-top: -160px;
                margin-left: 450px;

            }

            .hero-img img {

                width: 510px;
                margin-top: 28px;

            }

            .banner-text .title-text {
                color: white;
                text-align: left;
                font-size: 50px;
                margin-top: -76px;
            }


            .play-button {
                margin-left: 260px;
                width: 120px;
            }

            .about-header img {

                position: relative;

                top: 50px;

                left: 0px;

            }

            .img-phone {
                width: 594px;

                height: 700px;

                margin-left: -30px;

                margin-top: -50px;


            }

            .heroes p {
                font-size: 17px;
            }

            .hero p {
                font-size: 17px;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .img-girl {

                width: 365px !important;

            }

            .bg-note {
                background-image: url("{{ asset('public/assets/img/omsetku-bg-circle.webp') }}") !important;
            }


        }


        /* Zoom 110% */
        @media screen and (min-width: 1300px) and (max-width: 1410px) {

            .img-girl {

                width: 430px !important;

            }

        }


        /* Zoom 90% */
        @media screen and (min-width: 1556px) and (max-width: 1600px) {

            .img-girl {

                width: 365px !important;

            }

        }

        /*--------- end responsive laptop/pc ---------*/


        /*--------- responsive tablet ---------*/
        /* tablet mode 1 */
        @media screen and (min-width:850px) and (max-width: 992px) {

            section.features,
            section.service-details {
                padding: 150px 0px;
            }

            .hero-img img {

                width: 601.21px;
                height: 590px;
                padding-bottom: 146px;
                margin-left: -50px;

            }


            .title-video {

                text-align: center;
            }

            .img-hand {

                width: 500px;
                margin-bottom: -198px;

            }

            .play-button {

                width: 100px;
                margin-left: 440px;
                margin-top: -420px;
            }

            .heroes p {

                font-size: 17px;

            }

            .hero p {

                font-size: 17px;

            }


            .banner-text .title-text {
                color: white;
                text-align: left;
                font-size: 50px;
                margin-top: -100px;
            }

            .btn-banner-mobile {

                width: 150px;
                margin-top: -20px;
            }

            .hero-img {

                display: flex;

                justify-content: center;

            }

            .ggp-mobile {
                width: 200px;
                margin-left: 5px;
            }

            .text-about {
                text-align: justify;
            }

            .klien-content {

                padding: 0px 15px;
            }

            .klien-content a {

                display: flex;
                justify-content: center;
            }

            .klien-content h2 {

                text-align: center;
                font-size: 24px;
            }

            .detail-title-text {
                margin-bottom: 0px !important;
                margin-left: 0px;
                text-align: center !important;
            }

            .img-phone {
                width: 350px;
                height: auto !important;
            }

            .img-who {
                width: 351px;
                height: auto;
                margin-left: 0px;
            }

            .features-img-content {

                display: flex;
                justify-content: center;
            }

            .bg-blue {
                background: #EBF1FF;
                border-radius: 35px 35px 0px 0px;
            }

            .content-about {

                padding: 0px 25px;

            }

            .about-header img {

                position: relative;

                top: 60px;

                left: 75px;

            }



            .desktop-show {



                display: none !important;

            }



            .mobile-show {



                display: block !important;

            }

        }

        /*
                                                                        tablet mode Ipad Air
                                                                        main width: 820px
                                                                        */
        @media screen and (min-width:800px) and (max-width: 849px) {

            .desktop-show {



                display: none !important;

            }



            .mobile-show {



                display: block !important;

            }

            .pbtab-0 {
                padding-bottom: 0px;
            }

            .icon-box {
                text-align: center;
            }

            .about-header h2 {
                text-align: center !important;
                margin-bottom: 20px;
            }

            .about.menu-1.mobile-show {
                text-align: center !important;
            }

            .img-how {
                width: 500px !important;
                margin-top: 0px !important;
                margin-left: 0px !important;
            }

            section.features.bg-res3 .container .text-center,
            section.features.bg-res2.menu-1 .container .text-center {
                margin-bottom: 0px !important;
            }

            .img-when {
                width: 500px;
                margin-top: 0px;
                margin-left: 0px;
            }

            section.features.bg-res2,
            section.features.bg-res3 {
                padding: 75px 0px 0px !important;
            }

            .bg-res2,
            .bg-res3 {
                min-height: 0vh !important;
                height: 100% !important;
            }

            .title-features {
                margin-top: 0px !important;
            }

            section.features,
            section.service-details {
                padding: 150px 0px;
            }

            .hero-img img {

                width: 601.21px;
                height: 590px;
                padding-bottom: 146px;
                margin-left: -50px;

            }


            .title-video {

                text-align: center;
            }

            .img-hand {

                width: 500px;
                margin-bottom: -198px;

            }

            .play-button {

                width: 100px;
                margin-left: 440px;
                margin-top: -420px;
            }

            .heroes p {

                font-size: 17px;

            }

            .hero p {

                font-size: 17px;

            }

            .bg-res1 {
                background-position: top !important;
            }


            .banner-text .title-text {
                color: white;
                text-align: left;
                font-size: 50px;
                margin-top: 0px !important;
                line-height: 60px !important;
            }

            .btn-banner-mobile {

                width: 150px;
                margin-top: -20px;
            }

            .hero-img {

                display: flex;

                justify-content: center;

            }

            .ggp-mobile {
                width: 200px;
                margin-left: 5px;
            }

            .text-about {
                text-align: justify;
            }

            .klien-content {

                padding: 0px 15px;
            }

            .klien-content a {

                display: flex;
                justify-content: center;
            }

            .klien-content h2 {

                text-align: center;
                font-size: 24px;
            }

            .detail-title-text {
                margin-bottom: 0px !important;
                margin-left: 0px;
                text-align: center !important;
            }

            .img-phone {
                width: 350px;
                height: auto !important;
            }

            .img-who,
            .img-why {
                width: 500px;
                height: auto;
                margin-left: 0px;
                margin-top: 0px !important;
            }

            .features-img-content {

                display: flex;
                justify-content: center;
            }

            .bg-blue {
                background: #EBF1FF;
                border-radius: 35px 35px 0px 0px;
            }

            .content-about {

                padding: 0px 25px;

            }

            .about-header img {

                position: relative;

                top: 60px;

                left: 75px;

            }



            .desktop-show {



                display: none !important;

            }



            .mobile-show {



                display: block !important;

            }

        }


        /* tablet mode 2 */
        @media screen and (max-width: 769px) {

            .desktop-show {



                display: none !important;

            }



            .mobile-show {



                display: block !important;

            }



            .banner-text .title-text {

                text-align: left;

                margin: 0px;

                font-size: 40px;

            }


            .play-button {

                margin-left: 322px;

            }


            .banner-text .button-banner {

                margin: 0px 0px 30px;

            }



            .banner-text {

                align-items: left;

            }



            .banner-text .content-text {

                text-align: left;

                font-size: 17px;

                margin: 15px 0px;

            }

            .content-banner {

                text-align: center;

                font-size: 17px;

                margin: 15px 0px;

            }


            .btn-banner-mobile {

                margin-top: 10px;
            }


            .hero-img img {

                width: 337px;
                height: 467px;
                padding-bottom: 40px;
            }



            .about-header img {

                position: relative;

                top: 60px;

                left: 75px;

            }

        }

        /*--------- end responsive tablet ---------*/

        /*--------- responsive handphone ---------*/

        /* phone mode 1 */
        @media screen and (max-width: 458px) {

            .features.bg-res2.menu-1.mobile-show .container div.text-center {
                margin-bottom: 0px !important;
            }

            section.features {
                padding: 50px 0px 50px !important;
            }

            .title-features {
                margin-top: 0px !important;
                font-weight: 700;
                margin-bottom: 20px;
            }

            .icon-box {
                text-align: center;
            }

            .btn-banner-mobile {
                margin-top: 5px;
                width: 250px;
                padding-bottom: 40px;
            }

            .hero.mobile-show {
                width: 100%;
                min-height: 50vh;
                background-image: url("../img/Group 28.png");
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                color: rgba(255, 255, 255, 0.8);
                height: 1000px;
            }

            .banner-text .title-text {
                text-align: center;
                margin-top: 200px;
            }

            .img-who {
                width: 300px !important;
                height: auto;
                margin-left: 0px;
                margin-top: 35px !important;
            }

            .img-girl {
                width: 380px;
                margin-bottom: -30px !important;
            }

            .img-when {
                width: 413px !important;
                margin-left: 0px;
            }

            .img-how {
                width: 387px;
                margin-left: 0px;
            }

            .banner-text .content-text {
                text-align: center;
            }

            .hero-img img {

                width: 349px;
                height: 359px;
                margin-left: 5px;
                margin-bottom: 20px;

            }

            .fw-800 {
                font-size: 1.10rem;
            }

            .icon-w-desk1 {
                width: 6vw;
            }

        }

        /* phone mode 1 */
        @media screen and (max-width: 428px) {

            .hero.mobile-show {
                width: 100%;
                min-height: 50vh;
                background-image: url("../img/Group 28.png");
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                color: rgba(255, 255, 255, 0.8);
                height: 1000px;
            }

            .banner-text .title-text {
                text-align: center;
                margin-top: 200px;
            }

            .img-who {
                margin-top: 5px !important;
                width: 100% !important;

            }

            .img-girl {
                width: 380px;
                margin-bottom: -30px !important;
            }

            .img-when {
                width: 413px !important;
                margin-left: 0px;
            }

            .img-how {
                width: 387px;
                margin-left: 0px;
            }


            .banner-text .content-text {
                text-align: center;
            }


            .hero-img img {

                width: 349px;
                height: 359px;
                margin-left: 5px;
                margin-bottom: 20px;

            }

            .fs-desk1 {
                font-size: 16px;
                margin-left: 3px;
            }

        }

        /* phone mode 2 */
        @media screen and (max-width: 426px) {

            _::-webkit-full-page-media,
            _:future,
            :root .features-img-content {
                margin: 25px 0px 0px 0px;
            }

            .features-img-content {
                margin: 25px 0px 0px 0px;
            }

            .banner-text .title-text {
                margin-top: 274px !important;
            }

            section.features,
            section.service-details {
                padding: 100px 0px;
            }

            .text-about {
                text-align: justify !important;
                font-size: 15px;
            }

            .hero.mobile-show {

                width: 100%;
                min-height: 50vh;
                background-image: url("../img/Group 28.png");
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                color: rgba(255, 255, 255, 0.8);
                height: 850px;

            }

            .garis-horizontal {

                border-top: 2px #C9C9C9 solid;
                height: 0px;
                width: 400px;
                display: block;
                margin: auto;

            }

            .img-hand {

                width: 380px;

            }

            .img-when {
                width: 391px;
            }


            .play-button {

                width: 90px;
                margin-left: 171px;
                margin-top: -232px;

            }

            .img-funnel {

                width: 300px;
                margin-top: 64px;

            }

            .img-girl {

                width: 354px;
                height: 344px;
                margin-top: 20px;
                margin-bottom: -40px;

            }

            .img-phone-test {

                width: 300px;
                margin-top: 30px;

            }

            .about-header .circle-app {
                width: 30px;
                height: auto;
                margin-top: 0px;
                margin-left: 0px;
                top: 25px;
                left: 15px;
            }

            .service-details {
                padding: 10px 0px 0px;
            }

            .detail-link {
                display: flex;
                justify-content: space-around;
            }

            .img-about {

                width: 240px;
                margin-left: 0px;
                margin-top: 15px;

            }

            .img-code {

                width: 350px;

            }

            .ggp-mobile {

                width: 220px;

            }

            .btn-banner-mobile {

                margin-top: 5px;
                width: 150px;
                padding-bottom: 40px;

            }

            .about-header h2 {



                margin-bottom: 0px !important;

            }

            .img-how {
                width: 340px;
            }



            .about-header img {


                left: 50px;

            }



            .banner-text .button-banner {



                margin: 0px 0px 30px;

            }



            .banner-text {



                align-items: center;

            }



            .banner-text .content-text {

                font-size: 17px;

                color: white;

                text-align: center;

                margin: 10px 0px;

            }



            .banner-text .title-text {



                text-align: center;

                font-weight: 700;

                line-height: 35px;

            }



            .hero-img img {



                width: 350px;
                height: 360px;
                padding-bottom: 10px;
                margin-left: auto;
                margin-right: auto;

            }



            .hero-img {



                display: flex;

                justify-content: center;

            }



        }


        /* phone mode 3 */
        @media screen and (max-width: 414px) {

            .fs-desk1 {
                font-size: 15px;
                margin-left: 3px;
            }

            .hero.mobile-show {
                width: 100%;
                min-height: 50vh;
                background-image: url("../img/Group 28.png");
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 50px 0 0 0;
                color: rgba(255, 255, 255, 0.8);
                height: 850px;
            }


            .play-button {

                margin-left: 148px;

            }

            .banner-text .title-text {
                text-align: center;
                margin-top: 358px !important;
                line-height: 40px;
            }

            .banner-text .content-text {
                text-align: center;
            }


            .hero-img img {
                margin: auto !important;
                margin-top: 100px !important;
                height: 347px;
            }
        }

        /* phone  8 */
        @media screen and (max-width: 409px) {

            .img-when {
                margin-top: 89px;
                margin-left: 0px !important;
                justify-content: center;
                display: flex;

            }

            .img-how {
                justify-content: center;
                display: center;
                margin-left: 0px !important;

            }

            .banner-text .title-text {

                margin-top: 180px !important;

            }



        }


        /* phone model 4 */
        @media screen and (max-width: 395px) {

            .title-features {
                margin-top: -72px;
            }

            .hero.mobile-show {
                width: 100%;
                min-height: 50vh;
                background-image: url("../img/Group 28.png");
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                color: rgba(255, 255, 255, 0.8);
                height: 850px;
            }

            .hero-img img {

                margin-left: 10px !important;

            }

            .banner-text .title-text {

                line-height: 40px;
                margin-top: 210px !important;
            }

            .play-button {

                margin-left: 128px;

            }

            .garis-horizontal {

                border-top: 2px #C9C9C9 solid;
                height: 0px;
                width: 380px;
                display: block;
                margin: auto;

            }

            .bg-res1 {
                width: 100%;
                min-height: 50vh;
                background-size: cover;
                background-position: center;
                position: relative;
                height: 690px !important;
            }

            .bg-res2 {
                width: 100%;
                min-height: 50vh;
                /* background-image: url("../public/assets/img/sc-2.png") !important; */
                background-size: cover;
                background-position: center;
                position: relative;
                height: 473px;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .img-girl {
                width: px !important;
            }

            .fs-desk1 {
                font-size: 14.5px;
                margin-left: 3px;
            }

        }


        /* phone model 5 */
        @media screen and (max-width: 376px) {

            _::-webkit-full-page-media,
            _:future,
            :root section.features {
                padding: 95px 0px 0px !important;
            }

            section.features {
                padding: 95px 0px 0px !important;
            }

            .banner-text .title-text {
                line-height: 30px !important;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .bg-res2 {
                height: 450px !important;
            }

            .bg-res2 {
                height: 450px !important;
            }

            section.features,
            section.service-details {
                padding: 120px 0px;
            }

            .img-who {
                width: 325px !important;
                height: auto;
                margin-left: 0px;
            }

            .img-h1 {

                width: 325px !important;
                height: auto;
                margin-left: 0px;
                margin-top: 50px !important;

            }

            .banner-text .content-text {

                font-size: 17px;

                margin: 10px 7px;

            }

            .garis-horizontal {

                border-top: 2px #C9C9C9 solid;
                height: 0px;
                width: 350px !important;
                display: block;
                margin: auto;

            }

            .bg-res1 {
                width: 100%;
                min-height: 50vh;
                background-size: cover;
                background-position: center;
                position: relative;
                height: 650px !important;
            }

            .bg-res2 {
                width: 100%;
                min-height: 50vh;
                /* background-image: url("../public/assets/img/sc-2.png") !important; */
                background-size: cover;
                background-position: center;
                position: relative;
                height: 500px !important;
            }

            .bg-res3 {
                width: 100%;
                min-height: 50vh;
                background-image: url("../public/assets/img/sc-3.png") !important;
                background-size: cover;
                background-position: center;
                position: relative;
                height: 635px;
            }



            .img-hand {

                width: 333px;

            }


            .play-button {

                width: 80px;
                margin-top: -157px;
                margin-left: 147px;
            }


            .banner-text .title-text {

                line-height: 25px;

                font-size: 25px;

            }



            .hero-img {

                margin: 0px 0px 0px;

            }



            .about-header img {

                left: 27px;

                top: 57px;

            }



            .img-about {

                width: 230px;

            }

            .hero-img img {

                margin-left: 0px !important;

            }

            .img-when {

                margin-top: 110px;
                margin-left: 0px;

            }

            .img-how {

                margin-bottom: 100px;
                margin-left: 0px;
            }

            .icon-w-desk1 {
                width: 5vw;
            }

            .fs-desk1 {
                font-size: 14px;
            }

        }

        /* phone model 6 */
        @media screen and (max-width: 361px) {
            .features-img-content {
                margin: 0px 0px 0px 0px;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .img-who {
                width: 290px !important;
                height: auto;
                margin-left: 0px;
            }

            .img-who {
                width: 290px !important;
                height: auto;
                margin-left: 0px;
            }

            .img-when {
                width: 391px;
                margin-top: 95px !important;
            }

            .img-how {

                margin-bottom: 100px;

            }

            .title-features {
                margin-top: 0px;
            }

            .col-7.w-60\%.col-lg-7 {
                width: 62%;
            }

            .features-img-content {
                margin: 25px 0px 0px 0px;
            }

        }

        /* phone model 7 */
        @media screen and (max-width: 321px) {

            _::-webkit-full-page-media,
            _:future,
            :root .features-img-content {
                margin: 25px 0px 0px 0px;
            }

            .features-img-content {
                margin: 25px 0px 0px 0px;
            }

            section.features,
            section.service-details {
                padding: 100px 0px;
            }

            .banner-text .title-text {

                margin-top: 100px !important;

            }

            .hero-img img {

                width: 300px;
                height: 310px;
                padding-bottom: 10px;
                margin-left: auto;
                margin-right: auto;
            }

            .ggp-mobile {

                width: 200px;

            }

            .img-hand {

                width: 300px;

            }

            .play-button {

                margin-left: 117px !important;
                margin-top: -103px;

            }

            .detail-link {

                display: flex;
                justify-content: space-around;
            }

            .service-details {

                padding: 10px 0px 0px;
            }

            .about-header .circle-app {
                width: 30px;
                height: auto;
                margin-top: 0px;
                margin-left: 0px;
                top: 25px;
                left: 15px;
            }

            .img-phone {
                width: 290px;
                height: auto !important;
            }

            .img-about {
                width: 220px;
            }

            .img-who {
                height: auto !important;
                width: 255px !important;
                margin-left: 0px !important;
            }

            .bg-blue {
                border-radius: 35px 35px 0px 0px;
            }

            .about-header img {

                left: 12px;

                top: 55px;

            }

            .about-header h2 {

                font-size: 25px !important;

                margin-bottom: 15px;

            }

            .banner-text .content-text {


                font-size: 13px;

                margin: 8px 0px;

            }



            .banner-text .title-text {


                line-height: 26px;

                font-size: 19px;

            }

            p {
                font-size: 19px;
            }

            section#about {
                height: 530px;
            }

            .img-cewe-emot {
                margin-top: -1px !important;
            }

            .col-7.w-60\%.col-lg-7 {
                width: 68%;
            }

            img.img-funnel.img-cewe-emot {
                width: 91%;
            }

        }

        /*Responsive desktop asset */
        .atas {
            background-image: url('{{ asset('bgsectionatas.png') }}');
            background-size: cover;
        }

        .bisnis2 {
            background-image: url('{{ asset('bubblingthing.png') }}');
            background-size: cover;
        }

        .monitoringpenjualan {
            background-image: url('{{ asset('bgmonitoringpenjualan.png') }}');
            background-size: cover;
        }

        .income {
            background-image: url('{{ asset('bgincome.png') }}');
            background-size: cover;
        }

        .selamat {
            background-image: url('{{ asset('bgterakhir.png') }}');
            background-size: cover;
        }

        .desktopbig {
            display: block;
        }

        .desktopbigger {
            display: none;
        }

        .desktopsmall {
            display: none;
        }

        @media screen and (max-width:1600px) {
            .desktopbig {
                display: none;
            }

            .desktopsmall {
                display: block;
            }
        }

        @media screen and (min-width:2560px) {
            .desktopbig {
                display: none;
            }

            .desktopsmall {
                display: none;
            }

            .desktopbigger {
                display: block;
            }
        }

        /*--------- end responsive handphone ---------*/
    </style>

@endsection
@section('konten')
    <section class="desktop-show">
        <section class="desktopbigger">
            <section class="Tingkatkan penjualan atas pb-0">
                <div class="col-12 h-100" style="padding-top:60px;">
                    <center><img src="{{ asset('salestraceatas.png') }}" alt=""></center>
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-7" style="padding-left:10%; padding-top:100px">
                                <h1 style="color: white; font-size: 70px; font-weight: 700;">Tingkatkan omset <br> Bisnismu
                                    <br>
                                    Sekarang Juga!</h1>
                                <p style="color: white;font-size: 30px; margin-top:30px; font-weight: 400;">Bingung gimana
                                    caranya
                                    ningkatin omset <br>
                                    bisnismu?
                                    Tenang ada Omsetku One Stop Solution <br> yang siap bantuin ningkatin omset kamu jadi
                                    <br>
                                    bisnis
                                    lebih
                                    berkembang
                                </p>
                            </div>
                            <div class="col-md-5" style="padding-right: 10%">
                                <img src="{{ asset('ceweatas.png') }}" alt="" width="790" height="940">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--AWAL-->
            <section class="sebagai pemilik bisnis bisnis2 pb-0">
                <div class="col-12 h-100" style="padding-top: 5%;">
                    <center>
                        <p style="font-size: 30px; margin-bottom:5%">Sebagai pemilik bisnis, Kami yakin anda menghadapi
                            banyak
                            <br>
                            tantangan dalam mengelola dan memasarkan bisnis Anda secara <br> digital. Tetapi jangan
                            khawatir,
                            kami
                            hadir untuk membantu Anda <br> mengatasi semua itu!
                        </p>
                    </center>
                    <center><img src="{{ asset('orangpromosi.png') }}" alt=""></center>
                </div>
            </section>

            <!--Monitoring penjualan-->
            <section class="monitoringpenjualan Monitoring penjualan pb-0">
                <div class="col-12 h-100" style="padding-top:30px; padding-bottom:5%">
                    <div class="row">
                        <div class="col-md-6" style="padding-left:15%;padding-top:9%;">
                            <h1 style="color: white; font-size:60px; font-weight:800;">Monitoring Penjualan</h1>
                            <h1 style="color: #FBBC05; font-size:60px; font-weight:800;">Secara Real-Time</h1>
                            <img src="{{ asset('garis.png') }}" alt="">
                            <p style="font-size: 32px; color:white; font-weight: 400;">Dengan Dashboard Profesional dari
                                <br>
                                Salestrace Bisa bantu kamu untuk <br> memantau penjualan dan sales mu <br> secara real-time
                                !
                            </p>
                        </div>
                        <div class="col-md-6" style="padding-right: 5%">
                            <img src="{{ asset('hengpon.png') }}" alt="" width="780" height="780">
                        </div>
                    </div>
                </div>
            </section>

            <!--Melihat Perkembangan Dan Pantau Target Dengan Group Sales-->
            <section class="groupsales Tentukan Dengan Group Sales pb-0">
                <div class="col-12 h-100" style="padding:5%">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ asset('ipad.png') }}" width="860" height="780">
                        </div>
                        <div class="col-md-7" style="padding-top:13%">
                            <h1 style="font-size: 60px;font-weight: 800;">Tentukan dan Pantau Target <br> mu dengan fitur
                                group
                                sales</h1>
                            <p style="font-size: 36px;font-weight: 400;">Kami akan buat target penjualan kamu lebih <br>
                                teroganisir
                                agar bisnis mu bisa mencapai goal <br> yang diinginkan</p>
                        </div>
                    </div>
                </div>
            </section>

            <!--Dapatkan Income Baru dari Digital-->
            <section class="Income Digital income pb-0">
                <div class="col-12 h-100" style="padding-top:5%;padding-left:10%">
                    <div class="row">
                        <div class="col-md-6" style="padding-top: 10%">
                            <h1 style="font-size: 60px; color:white; font-weight: 900;">Dapatkan Income</h1>
                            <h1 style="font-size: 60px; color:#FBBC05; font-weight: 900;">baru dari Digital</h1>
                            <img src="{{ asset('garis.png') }}" alt="">
                            <p style="color: white; font-size: 36px; font-weight: 400;">Kami akan bantu bisnis kamu secara
                                <br>
                                digital agar bisa menjangkau customer <br> lebih banyak diluar sana </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('cewesultan.png') }}" alt="" width="570" height="780">
                        </div>
                    </div>
                </div>
            </section>

            <!--Buat Social Media Lebih Ramai-->
            <section class="Yang Ada Cewe Sosmednya Lah sosmed pb-0">
                <div class="col-12 h-100" style="padding-top:5%;padding-right:10%;">
                    <div class="row">
                        <div class="col-md-6" style="padding-left:10% ">
                            <img src="{{ asset('cewesosmed.png') }}" alt="" width="590" height="692">
                        </div>
                        <div class="col-md-6 mr-2" style=" padding-top:10%">
                            <h1 style="text-align: right;font-size: 60px;font-weight: 800;">Buat Social Media mu <br> Lebih
                                ramai
                                Pengunjung</h1>
                            <p style="text-align: right;font-size: 35px;font-weight: 400;">Kami akan bantu kamu untuk <br>
                                membuat
                                social media kamu lebih <br> ramai secara unlimited !</p>
                        </div>
                    </div>
                </div>
            </section>

            <!--Daftar Sekarang-->
            <section class="selamat Selamat pb-0">
                <div class="col-12 h-100" style="padding:5%">
                    <center>
                        <h1 style="color: white;font-size: 40.5px;font-weight: 900;">SELAMAT karena Anda telah menemukan
                            <br>
                            solusi
                            yang TEPAT.</h1>
                    </center>
                    <center>
                        <p style="color: #FBBC05;font-size: 30px;font-weight: 400;">Memperkenalkan :</p>
                    </center>
                    <center><img src="{{ asset('logosalestracebawah.png') }}" class="mt-5"></center>
                    <center>
                        <p class="mt-5" style="color: white;font-size: 30px;font-weight: 700;">All in one Solution untuk
                            digital
                            branding & marketing</p>
                    </center>
                    <center><a href="#">
                            <div class="col-md-6"
                                style="border-radius: 15px !important; background-color:#FBBC05; padding:15px; width:55vh">
                                <p
                                    style="color:black; font-size: 18px;font-weight: 900;text-align: center; margin:0 !important;">
                                    Jasa Digital Marketing & Design Grafis</p>
                                <h1 style="color: black;text-align: center;font-size: 50px;font-weight: 800;">Rp 4.999.000
                                </h1>
                            </div>
                        </a></center>
                    <center>
                        <p
                            style="text-align: center;color:white;font-size: 30px;font-weight: 800; margin-top:25px; margin-bottom:0 !important;">
                            Garansi Hasil & Unlimited Request Design</p>
                    </center>
                    <center>
                        <p style="color: #FBBC05;font-size: 25px;font-weight: 800;">Quota terbatas!</p>
                    </center>
                    <div class="container">
                        <div class="row mx-auto justify-content-center">
                            <button type="button" class="col-sm-6 mx-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter3"
                                style="background-color: white; color:#2D5AB0; border-radius:10px; width:30vh; height:5vh; padding-top:10px">
                                <p style="font-size: 30px; font-weight: 700; text-align:center;">Daftar Sekarang</p>
                            </button>
                            <a href="#" class="col-sm-6 mx-2"
                                style="background-color: #34B768; color:white; border-radius:10px; width:30vh; height:5vh;">
                                <p style="font-size: 30px; font-weight: 700;text-align:center; margin-top:10px"><img
                                        src="{{ asset('ikonwangsaf.png') }}" width="45" height="45"
                                        style="margin-right: 10px">Chat Admin Whatsapp</p>
                            </a>
                        </div>
                    </div>
                    </center>
                </div>
            </section>
            <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p
                                            style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                            Nama Depan</p>
                                        <input class="input" name="text" type="text" placeholder="Your Name...">
                                    </div>
                                    <div class="col-md-6">
                                        <p
                                            style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                            Nama Belakang</p>
                                        <input class="input" name="text" type="text" placeholder="Your Name...">
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Nomor Telepon</p>
                                    <input class="input" name="text" type="text" placeholder="Nomor Telepon">
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Alamat Email</p>
                                    <input class="input" name="email" type="text" placeholder="Alamat Email">
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Nomor Telepon</p>
                                    <input class="input" name="text" type="text" placeholder="Nomor Telepon">
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Kebutuhan Anda</p>
                                    <input class="input" name="text" type="text"
                                        placeholder="Digideva Bantu Saya">
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Kebutuhan Anda</p>
                                    <div class="row d-flex" style="margin-bottom: 10px">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pagi
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Siang
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Sore
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <button type="button" class="btn btn-primary"
                                style="width: 100%; height:4vh; border-radius:0 !important; background-color:#1C428B; padding-top:10px">
                                <p style="color: white;font-size: 22.913px;font-weight: 700;">Daftar Sekarang</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="desktopbig">
            <section class="Tingkatkan penjualan atas pb-0">
                <div class="col-12 h-100" style="padding-top:60px;">
                    <center><img src="{{ asset('salestraceatas.png') }}" alt=""></center>
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-7" style="padding-left:10%; padding-top:100px">
                                <h1 style="color: white; font-size: 70px; font-weight: 700;">Tingkatkan omset <br> Bisnismu
                                    <br>
                                    Sekarang Juga!
                                </h1>
                                <p style="color: white;font-size: 30px; margin-top:30px; font-weight: 400;">Bingung gimana
                                    caranya
                                    ningkatin omset <br>
                                    bisnismu?
                                    Tenang ada Omsetku One Stop Solution <br> yang siap bantuin ningkatin omset kamu jadi
                                    <br>
                                    bisnis
                                    lebih
                                    berkembang
                                </p>
                            </div>
                            <div class="col-md-5" style="padding-right: 10%">
                                <img src="{{ asset('ceweatas.png') }}" alt="" width="690" height="840">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--AWAL-->
            <section class="sebagai pemilik bisnis bisnis2 pb-0">
                <div class="col-12 h-100" style="padding-top: 5%;">
                    <center>
                        <p style="font-size: 30px; margin-bottom:5%">Sebagai pemilik bisnis, Kami yakin anda menghadapi
                            banyak
                            <br>
                            tantangan dalam mengelola dan memasarkan bisnis Anda secara <br> digital. Tetapi jangan
                            khawatir,
                            kami
                            hadir untuk membantu Anda <br> mengatasi semua itu!
                        </p>
                    </center>
                    <center><img src="{{ asset('orangpromosi.png') }}" alt=""></center>
                </div>
            </section>

            <!--Monitoring penjualan-->
            <section class="monitoringpenjualan Monitoring penjualan pb-0">
                <div class="col-12 h-100" style="padding-top:30px; padding-bottom:5%">
                    <div class="row">
                        <div class="col-md-6" style="padding-left:15%;padding-top:9%;">
                            <h1 style="color: white; font-size:60px; font-weight:800;">Monitoring Penjualan</h1>
                            <h1 style="color: #FBBC05; font-size:60px; font-weight:800;">Secara Real-Time</h1>
                            <img src="{{ asset('garis.png') }}" alt="">
                            <p style="font-size: 32px; color:white; font-weight: 400;">Dengan Dashboard Profesional dari
                                <br>
                                Salestrace Bisa bantu kamu untuk <br> memantau penjualan dan sales mu <br> secara real-time
                                !
                            </p>
                        </div>
                        <div class="col-md-6" style="padding-right: 15%">
                            <img src="{{ asset('hengpon.png') }}" alt="" width="760" height="760">
                        </div>
                    </div>
                </div>
            </section>

            <!--Melihat Perkembangan Dan Pantau Target Dengan Group Sales-->
            <section class="groupsales Tentukan Dengan Group Sales pb-0">
                <div class="col-12 h-100" style="padding:5%">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ asset('ipad.png') }}" width="860" height="780">
                        </div>
                        <div class="col-md-7" style="padding-top:13%">
                            <h1 style="font-size: 60px;font-weight: 800;">Tentukan dan Pantau Target <br> mu dengan fitur
                                group
                                sales</h1>
                            <p style="font-size: 36px;font-weight: 400;">Kami akan buat target penjualan kamu lebih <br>
                                teroganisir
                                agar bisnis mu bisa mencapai goal <br> yang diinginkan</p>
                        </div>
                    </div>
                </div>
            </section>

            <!--Dapatkan Income Baru dari Digital-->
            <section class="Income Digital income pb-0">
                <div class="col-12 h-100" style="padding-top:5%;padding-left:10%">
                    <div class="row">
                        <div class="col-md-6" style="padding-top: 10%">
                            <h1 style="font-size: 60px; color:white; font-weight: 900;">Dapatkan Income</h1>
                            <h1 style="font-size: 60px; color:#FBBC05; font-weight: 900;">baru dari Digital</h1>
                            <img src="{{ asset('garis.png') }}" alt="">
                            <p style="color: white; font-size: 36px; font-weight: 400;">Kami akan bantu bisnis kamu secara
                                <br>
                                digital agar bisa menjangkau customer <br> lebih banyak diluar sana </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('cewesultan.png') }}" alt="" width="570" height="780">
                        </div>
                    </div>
                </div>
            </section>

            <!--Buat Social Media Lebih Ramai-->
            <section class="Yang Ada Cewe Sosmednya Lah sosmed pb-0">
                <div class="col-12 h-100" style="padding-top:5%;padding-right:10%;">
                    <div class="row">
                        <div class="col-md-6" style="padding-left:10% ">
                            <img src="{{ asset('cewesosmed.png') }}" alt="" width="590" height="692">
                        </div>
                        <div class="col-md-6 mr-2" style=" padding-top:10%">
                            <h1 style="text-align: right;font-size: 60px;font-weight: 800;">Buat Social Media mu <br> Lebih
                                ramai
                                Pengunjung</h1>
                            <p style="text-align: right;font-size: 35px;font-weight: 400;">Kami akan bantu kamu untuk <br>
                                membuat
                                social media kamu lebih <br> ramai secara unlimited !</p>
                        </div>
                    </div>
                </div>
            </section>

            <!--Daftar Sekarang-->
            <section class="selamat Selamat pb-0">
                <div class="col-12 h-100" style="padding:5%">
                    <center>
                        <h1 style="color: white;font-size: 40.5px;font-weight: 900;">SELAMAT karena Anda telah menemukan
                            <br>
                            solusi
                            yang TEPAT.</h1>
                    </center>
                    <center>
                        <p style="color: #FBBC05;font-size: 30px;font-weight: 400;">Memperkenalkan :</p>
                    </center>
                    <center><img src="{{ asset('logosalestracebawah.png') }}" class="mt-5"></center>
                    <center>
                        <p class="mt-5" style="color: white;font-size: 30px;font-weight: 700;">All in one Solution untuk
                            digital
                            branding & marketing</p>
                    </center>
                    <center><a href="#">
                            <div class="col-md-6"
                                style="border-radius: 15px !important; background-color:#FBBC05; padding:15px; width:55vh">
                                <p
                                    style="color:black; font-size: 18px;font-weight: 900;text-align: center; margin:0 !important;">
                                    Jasa Digital Marketing & Design Grafis</p>
                                <h1 style="color: black;text-align: center;font-size: 50px;font-weight: 800;">Rp 4.999.000
                                </h1>
                            </div>
                        </a></center>
                    <center>
                        <p
                            style="text-align: center;color:white;font-size: 30px;font-weight: 800; margin-top:25px; margin-bottom:0 !important;">
                            Garansi Hasil & Unlimited Request Design</p>
                    </center>
                    <center>
                        <p style="color: #FBBC05;font-size: 25px;font-weight: 800;">Quota terbatas!</p>
                    </center>
                    <div class="container">
                        <div class="row mx-auto justify-content-center">
                            <button type="button" class="col-sm-6 mx-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter"
                                style="background-color: white; color:#2D5AB0; border-radius:10px; width:45vh; height:8vh; padding-top:10px">
                                <p style="font-size: 30px; font-weight: 700; text-align:center;">Daftar Sekarang</p>
                            </button>
                            <a href="#" class="col-sm-6 mx-2"
                                style="background-color: #34B768; color:white; border-radius:10px; width:45vh; height:8vh;">
                                <p style="font-size: 30px; font-weight: 700;text-align:center; margin-top:10px"><img
                                        src="{{ asset('ikonwangsaf.png') }}" width="45" height="45"
                                        style="margin-right: 10px">Chat Admin Whatsapp</p>
                            </a>
                        </div>
                    </div>
                    </center>
                </div>
            </section>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p
                                            style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                            Nama Depan</p>
                                        <input class="input" name="text" type="text" placeholder="Your Name...">
                                    </div>
                                    <div class="col-md-6">
                                        <p
                                            style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                            Nama Belakang</p>
                                        <input class="input" name="text" type="text" placeholder="Your Name...">
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Nomor Telepon</p>
                                    <input class="input" name="text" type="text" placeholder="Nomor Telepon">
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Alamat Email</p>
                                    <input class="input" name="email" type="text" placeholder="Alamat Email">
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Nomor Telepon</p>
                                    <input class="input" name="text" type="text" placeholder="Nomor Telepon">
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Kebutuhan Anda</p>
                                    <input class="input" name="text" type="text"
                                        placeholder="Digideva Bantu Saya">
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Kebutuhan Anda</p>
                                    <div class="row d-flex" style="margin-bottom: 10px">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pagi
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Siang
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Sore
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <button type="button" class="btn btn-primary"
                                style="width: 100%; height:6vh; border-radius:0 !important; background-color:#1C428B; padding-top:10px">
                                <p style="color: white;font-size: 22.913px;font-weight: 700;">Daftar Sekarang</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="desktopsmall">
            <section class="Tingkatkan penjualan atas pb-0">
                <div class="col-12 h-100" style="padding-top:60px;">
                    <center><img src="{{ asset('salestraceatas.png') }}" alt=""></center>
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-md-7" style="padding-left:10%; padding-top:100px">
                                <h1 style="color: white; font-size: 43px; font-weight: 700;">Tingkatkan omset <br> Bisnismu
                                    <br>
                                    Sekarang Juga!
                                </h1>
                                <p style="color: white;font-size: 20px; margin-top:30px; font-weight: 400;">Bingung gimana
                                    caranya
                                    ningkatin omset <br>
                                    bisnismu?
                                    Tenang ada Omsetku One Stop Solution <br> yang siap bantuin ningkatin omset kamu jadi
                                    <br>
                                    bisnis
                                    lebih
                                    berkembang
                                </p>
                            </div>
                            <div class="col-md-5" style="padding-right: 10%">
                                <img src="{{ asset('ceweatas.png') }}" alt="" width="400" height="495">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--AWAL-->
            <section class="sebagai pemilik bisnis bisnis2 pb-0">
                <div class="col-12 h-100" style="padding-top: 5%;">
                    <center>
                        <p style="font-size: 30px; margin-bottom:5%">Sebagai pemilik bisnis, Kami yakin anda menghadapi
                            banyak
                            <br>
                            tantangan dalam mengelola dan memasarkan bisnis Anda secara <br> digital. Tetapi jangan
                            khawatir,
                            kami
                            hadir untuk membantu Anda <br> mengatasi semua itu!
                        </p>
                    </center>
                    <center><img src="{{ asset('orangpromosi.png') }}" alt=""></center>
                </div>
            </section>

            <!--Monitoring penjualan-->
            <section class="monitoringpenjualan Monitoring penjualan pb-0">
                <div class="col-12 h-100" style="padding-top:30px; padding-bottom:5%">
                    <div class="row">
                        <div class="col-md-6" style="padding-left:15%;padding-top:9%;">
                            <h1 style="color: white; font-size:40px; font-weight:800;">Monitoring Penjualan</h1>
                            <h1 style="color: #FBBC05; font-size:40px; font-weight:800;">Secara Real-Time</h1>
                            <img src="{{ asset('garis.png') }}" alt="">
                            <p style="font-size: 20px; color:white; font-weight: 400;">Dengan Dashboard Profesional dari
                                <br>
                                Salestrace Bisa bantu kamu untuk <br> memantau penjualan dan sales mu <br> secara real-time
                                !
                            </p>
                        </div>
                        <div class="col-md-6" style="padding-right: 15%">
                            <img src="{{ asset('hengpon.png') }}" alt="" width="450" height="450">
                        </div>
                    </div>
                </div>
            </section>

            <!--Melihat Perkembangan Dan Pantau Target Dengan Group Sales-->
            <section class="groupsales Tentukan Dengan Group Sales pb-0">
                <div class="col-12 h-100" style="padding:5%">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('ipad.png') }}" width="580" height="470">
                        </div>
                        <div class="col-md-6" style="padding-top:13%">
                            <h1 style="font-size: 32px;font-weight: 800;">Tentukan dan Pantau Target <br> mu dengan fitur
                                group
                                sales</h1>
                            <p style="font-size: 20px;font-weight: 400;">Kami akan buat target penjualan kamu lebih <br>
                                teroganisir
                                agar bisnis mu bisa mencapai goal <br> yang diinginkan</p>
                        </div>
                    </div>
                </div>
            </section>

            <!--Dapatkan Income Baru dari Digital-->
            <section class="Income Digital income pb-0">
                <div class="col-12 h-100" style="padding-top:5%;padding-left:10%">
                    <div class="row">
                        <div class="col-md-6" style="padding-top: 10%">
                            <h1 style="font-size: 40px; color:white; font-weight: 900;">Dapatkan Income</h1>
                            <h1 style="font-size: 40px; color:#FBBC05; font-weight: 900;">baru dari Digital</h1>
                            <img src="{{ asset('garis.png') }}" alt="">
                            <p style="color: white; font-size: 26px; font-weight: 400;">Kami akan bantu bisnis kamu secara
                                <br>
                                digital agar bisa menjangkau customer <br> lebih banyak diluar sana </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('cewesultan.png') }}" alt="" width="450" height="580">
                        </div>
                    </div>
                </div>
            </section>

            <!--Buat Social Media Lebih Ramai-->
            <section class="Yang Ada Cewe Sosmednya Lah sosmed pb-0">
                <div class="col-12 h-100" style="padding-top:5%;padding-right:10%;">
                    <div class="row">
                        <div class="col-md-6" style="padding-left:10% ">
                            <img src="{{ asset('cewesosmed.png') }}" alt="" width="420" height="492">
                        </div>
                        <div class="col-md-6 mr-2" style=" padding-top:10%">
                            <h1 style="text-align: right;font-size: 40px;font-weight: 800;">Buat Social Media mu <br> Lebih
                                ramai
                                Pengunjung</h1>
                            <p style="text-align: right;font-size: 25px;font-weight: 400;">Kami akan bantu kamu untuk <br>
                                membuat
                                social media kamu lebih <br> ramai secara unlimited !</p>
                        </div>
                    </div>
                </div>
            </section>

            <!--Daftar Sekarang-->
            <section class="selamat Selamat pb-0">
                <div class="col-12 h-100" style="padding:5%">
                    <center>
                        <h1 style="color: white;font-size: 40.5px;font-weight: 900;">SELAMAT karena Anda telah menemukan
                            <br>
                            solusi
                            yang TEPAT.</h1>
                    </center>
                    <center>
                        <p style="color: #FBBC05;font-size: 30px;font-weight: 400;">Memperkenalkan :</p>
                    </center>
                    <center><img src="{{ asset('logosalestracebawah.png') }}" class="mt-5"></center>
                    <center>
                        <p class="mt-5" style="color: white;font-size: 30px;font-weight: 700;">All in one Solution untuk
                            digital
                            branding & marketing</p>
                    </center>
                    <center><a href="#">
                            <div class="col-md-6"
                                style="border-radius: 15px !important; background-color:#FBBC05; padding:15px; width:75vh">
                                <p
                                    style="color:black; font-size: 18px;font-weight: 900;text-align: center; margin:0 !important;">
                                    Jasa Digital Marketing & Design Grafis</p>
                                <h1 style="color: black;text-align: center;font-size: 50px;font-weight: 800;">Rp 4.999.000
                                </h1>
                            </div>
                        </a></center>
                    <center>
                        <p
                            style="text-align: center;color:white;font-size: 30px;font-weight: 800; margin-top:25px; margin-bottom:0 !important;">
                            Garansi Hasil & Unlimited Request Design</p>
                    </center>
                    <center>
                        <p style="color: #FBBC05;font-size: 25px;font-weight: 800;">Quota terbatas!</p>
                    </center>
                    <div class="container">
                        <div class="row mx-auto justify-content-center">
                            <button type="button" class="col-sm-6 mx-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter2"
                                style="background-color: white; color:#2D5AB0; border-radius:10px; width:70vh; height:12vh; padding-top:10px">
                                <p style="font-size: 25px; font-weight: 700; text-align:center;">Daftar Sekarang</p>
                            </button>
                            <a href="#" class="col-sm-6 mx-2"
                                style="background-color: #34B768; color:white; border-radius:10px; width:70vh; height:12vh;">
                                <p style="font-size: 25px; font-weight: 700;text-align:center; margin-top:10px"><img
                                        src="{{ asset('ikonwangsaf.png') }}" width="45" height="45"
                                        style="margin-right: 10px">Chat Admin Whatsapp</p>
                            </a>
                        </div>
                    </div>
                    </center>
                </div>
            </section>
            <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p
                                            style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                            Nama Depan</p>
                                        <input class="input" name="text" type="text" placeholder="Your Name...">
                                    </div>
                                    <div class="col-md-6">
                                        <p
                                            style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                            Nama Belakang</p>
                                        <input class="input" name="text" type="text" placeholder="Your Name...">
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Nomor Telepon</p>
                                    <input class="input" name="text" type="text" placeholder="Nomor Telepon">
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Alamat Email</p>
                                    <input class="input" name="email" type="text" placeholder="Alamat Email">
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Nomor Telepon</p>
                                    <input class="input" name="text" type="text" placeholder="Nomor Telepon">
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Kebutuhan Anda</p>
                                    <input class="input" name="text" type="text"
                                        placeholder="Digideva Bantu Saya">
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <p
                                        style="color: #395CAE;font-size: 24.675px;font-weight: 700; margin-bottom:0 !important;">
                                        Kebutuhan Anda</p>
                                    <div class="row d-flex" style="margin-bottom: 10px">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pagi
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Siang
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Sore
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <button type="button" class="btn btn-primary"
                                style="width: 100%; height:10vh; border-radius:0 !important; background-color:#1C428B; padding-top:10px">
                                <p style="color: white;font-size: 22.913px;font-weight: 700;">Daftar Sekarang</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- ======= Mobile Section ======= -->
    <section id="features" class="features bg-res4 menu-1 icon-st mobile-show"
        style="padding-top: 40px !important; padding-bottom: 0px !important;">
        <div class="container">
            <div class="row gy-4 align-items-center features-item text-center">
                <div class="col-12 col-sm-12 col-md-12 order-1 order-md-2 features-img-content">
                    <img src="asset-st/Logo-Salestrace.png" class="" alt=""
                        style="margin-top: 0px; margin-bottom: 120px !important;">
                </div>
            </div>
            <h2 class="title-features text-center" style="color: #fff;">Tingkatkan Omset Bisnismu Sekarang Juga!</h2>
            <div class="text-center" style="color: #fff; margin-Bottom: 40px;">
                <p>Bingung gimana caranya ngembangin bisnismu?
                    Tenang ada Omsetku One Stop Solution yang siap bantuin bisnis kamu jadi lebih berkembang.</p>
            </div>
            <div class="row gy-4 align-items-center features-item text-center">
                <div class="col-12 col-sm-12 col-md-12 order-1 order-md-2 features-img-content"
                    style="padding: 0px !important; ">
                    <img src="asset-st/ceweatas.png" class="img-how ceweatas" alt=""
                        style="margin-top: 0px; margin-bottom: -1px !important; padding: 0px; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about menu-1 mobile-show" style="padding-bottom: 0px !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-lg-0 content">
                    {{-- <div class="about-header">
                <h2 style="text-align: left;">Semua Dalam Satu Solusi Bisnis</h2>
              </div> --}}
                    <div class="row">
                        <div class="col-md-11 col-lg-11">
                            <div class="text-left"
                                style="color: #000;
                  text-align: center;
                  font-family: Nunito;
                  font-size: 20px;
                  font-style: normal;
                  font-weight: 400;
                  line-height: 30px; padding-top: 30px;">
                                <p>Sebagai pemilik bisnis, Kami yakin anda menghadapi banyak tantangan dalam mengelola dan
                                    memasarkan bisnis Anda secara digital.
                                    Tetapi jangan khawatir, kami hadir untuk membantu Anda mengatasi semua itu!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-12">
                    <img src="asset-st/women-mm.png" class="img-funnel" alt=""
                        style="display:block; margin:auto; margin-top: -10px; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about menu-1 bg-res6 mobile-show">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-lg-0 content">
                    <div class="about-header">
                        <h2
                            style="text-align: left; color: var(--bggbgbg, #F1F1F1);
                font-family: Nunito;
                font-size: 32px;
                font-style: normal;
                font-weight: 800;
                line-height: normal; padding-top: 30px;">
                            Monitoring Penjualan</h2>
                        <h2
                            style="text-align: left; color: var(--yellow-1, var(--yellow-1, #FBBC05));
                font-family: Nunito;
                font-size: 32px;
                font-style: normal;
                font-weight: 800;
                line-height: normal;">
                            Penjualan Real-time</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-11 col-lg-11">
                            <div class="text-left"
                                style="color: var(--White, #FFF);
                  font-family: Nunito;
                  font-size: 22px;
                  font-style: normal;
                  font-weight: 400;
                  line-height: normal;">
                                <p>Dengan Dashboard Profesional dari Salestrace Bisa bantu kamu
                                    untuk memantau penjualan dan sales mu secara real-time !!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-12">
                    <img src="asset-st/hp.png" class="img-funnel" alt=""
                        style="display:block; margin:auto; margin-top: -50px; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about menu-1 mobile-show">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-lg-0 content">
                    <div class="about-header">
                        <h2
                            style="text-align: left; color: #000;
                font-family: Nunito;
                font-size: 32px;
                font-style: normal;
                font-weight: 800;
                line-height: normal; padding-top: 30px;">
                            Tentukan Dan Pantau Targetmu Dengan Fitur Group Sales</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-11 col-lg-11">
                            <div class="text-left"
                                style="color: #000;
                  font-family: Nunito;
                  font-size: 22px;
                  font-style: normal;
                  font-weight: 400;
                  line-height: normal;">
                                <p>Kami akan buat target penjualan kamu lebih teroganisir
                                    agar bisnis mu bisa mencapai goal yang diinginkan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-12 ">
                    <img src="asset-st/ipad.png" class="img-funnel" alt=""
                        style="display:block; margin:auto; margin-top: -50px; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about menu-1 bg-res7 mobile-show" style="padding: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-lg-0 content">
                    <div class="about-header">
                        <h2
                            style="text-align: left; color: var(--bggbgbg, #F1F1F1);
                font-family: Nunito;
                font-size: 32px;
                font-style: normal;
                font-weight: 800;
                line-height: normal; padding-top: 30px;">
                            Dapatkan Income</h2>
                        <h2
                            style="text-align: left; color: var(--yellow-1, var(--yellow-1, #FBBC05));
                font-family: Nunito;
                font-size: 32px;
                font-style: normal;
                font-weight: 800;
                line-height: normal;">
                            Baru Dari Digital</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-11 col-lg-11">
                            <div class="text-left"
                                style="color: var(--White, #FFF);
                  font-family: Nunito;
                  font-size: 22px;
                  font-style: normal;
                  font-weight: 400;
                  line-height: normal;">
                                <p>Kami akan bantu bisnis kamu secara digital agar bisa
                                    mejangkau customer lebih banyak diluar sana.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-12">
                    <img src="asset-st/cewe-emot.png" class="img-funnel img-cewe-emot" alt=""
                        style="display:block; margin:auto; margin-top: -20px; width: 93%;">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about menu-1 mobile-show" style="padding: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-lg-0 content">
                    <div class="about-header">
                        <h2
                            style="text-align: left; color: #000;
                font-family: Nunito;
                font-size: 32px;
                font-style: normal;
                font-weight: 800;
                line-height: normal; padding-top: 30px;">
                            Buatlah Social Media mu Lebih ramai</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-11 col-lg-11">
                            <div class="text-left"
                                style="color: #000;
                  font-family: Nunito;
                  font-size: 22px;
                  font-style: normal;
                  font-weight: 400;
                  line-height: normal;">
                                <p>Kami akan bantu kamu untuk membuat konten Profesional secara unlimited !</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-12 ">
                    <img src="asset-st/cewe-sosial.png" class="img-funnel" alt=""
                        style="display:block; margin:auto; margin-top: -20px; width: 92.1%;">
                </div>
            </div>
        </div>
    </section>

    <section id="about1" class="about bg-iklan-price py-5 menu-1 mobile-show" style="padding-top: 10px !important;">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 col-lg-12 pt-5 pt-lg-0 content">
                    <div class="about-head text-center">
                        <h5 class="c-EEAE2A">Jika Anda pernah merasakan salah satu hal diatas, maka</h5>
                        <h2 style="text-align: center;" class="c-fff fw-800">
                            SELAMAT karena Anda telah menemukan <br>
                            solusi yang TEPAT.
                        </h2>
                        <h5 class="c-EEAE2A">Memperkenalkan :</h5>
                        <img src="asset-st/logo-Salestrace.png" class="img-about" alt="">
                        <h5 class="c-fff mt-2">All in one Solution untuk digital branding & marketing</h5>
                        {{-- <div class="price-tag d-flex justify-content-center pt-5 pb-3">
                  <div class="content-price-tag d-flex align-items-center fw-800">
                    <div class="text-price">
                      <p>Jasa Digital Marketing & Design Grafis</p>
                      <h1>Rp 4.999.000</h1>
                    </div>
                    <div class="discount-label c-fff">
                      Hemat <br>
                      <span class="fw-800">50%</span>
                    </div>
                  </div>
                </div> --}}
                        <img src="asset-st/diskon.png" class="img-about" style="margin: 0px 0px 15px 30px !important;"
                            alt="">
                        <h5 class="c-fff fw-800">
                            Garansi Hasil & Unlimited Request Design <br>
                            <span class="c-EEAE2A">Quota terbatas!</span>
                        </h5>

                        <div class="button-action mt-4">
                            <div class="row justify-content-center">
                                <!-- <div class="col-6 col-lg-6"> -->
                                <!-- <div class="btn"> -->
                                <!-- Daftar Sekarang! -->
                                <!-- </div> -->
                                <!-- </div> -->
                                <div class="col-7 w-60% col-lg-7">
                                    <a href="#" target="_blank">
                                        <div class="btn d-flex justify-content-center align-items-center"
                                            style="
                          color: #2D5AB0;
                          background-color: #fff;">
                                            {{-- <img src="" alt="icon wa" srcset="" class="icon-w-desk1"> --}}
                                            <p class="fs-desk1"> Daftar Sekarang!</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="button-action mt-4">
                            <div class="row justify-content-center">
                                <!-- <div class="col-6 col-lg-6"> -->
                                <!-- <div class="btn"> -->
                                <!-- Daftar Sekarang! -->
                                <!-- </div> -->
                                <!-- </div> -->
                                <div class="col-7 w-60% col-lg-7">
                                    <a href="https://api.whatsapp.com/send?phone=+628818850663&text=Halo, Saya ingin menanyakan mengenai sistem omsetku… 🙏"
                                        target="_blank">
                                        <div class="btn bg-34B768 c-fff d-flex justify-content-center align-items-center">
                                            <img src="asset-st/ri_whatsapp-fill.png" alt="icon wa" srcset=""
                                                class="icon-w-desk1">
                                            <p class="fs-desk1"> Chat Admin Whatsapp</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------------------------------------------------------------------------------------------------------- -->
@endsection
