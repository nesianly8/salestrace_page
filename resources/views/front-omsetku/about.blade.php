@extends('layouts.layout-v2_2')


<?php
$baseurl = 'https://omsetku.id/';
?>


@section('title', 'Sales Automation')


@section('css-before')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@endsection


@section('css-after')

    <style>
        .hero {
            background-image: url(" {{ asset('public/omsetku-asset/omsetku-bg-city.png') }} ");
        }

        .bg-note {
            background-image: url(" {{ asset('public/omsetku-asset/omsetku-bg2.png') }}");
        }

        .bg-white {
            background-image: url("https://omsetku.id/public/assets/img/omsetku-bg-cube.png");
        }

        .bg-orange {
            background-image: url("https://omsetku.id/public/assets/img/omsetku-bg-circle-orange.png");
        }

        .bg-gradient {
            background-image: url(" {{ asset('public/omsetku-asset/omsetku-bg-life.png') }} ") !important;
        }

        .bg-res2 {
            background-image: url("https://omsetku.id/public/assets/img/omsetku-bg-circle.webp") !important;
        }

        .bg-res4 {
            background-image: url("https://omsetku.id/public/assets/img/omsetku-bg-circle-orange.png") !important;
        }

        .bg-res5 {
            background-image: url("https://omsetku.id/public/assets/img/omsetku-bg-cicle-purple.png") !important;
        }

        .bg-blue-img {
            background-image: url("public/assets/img/omsetku-section-bg-1.png") !important;
            background-size: cover;
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

            width: 545px;
            margin-top: 0px;
            margin-left: 133px;

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
            width: 100%;
            margin-top: 50px;
            /* margin-left: 120px; */
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
            color: #fff;
            text-align: center;
            font-family: Roboto;
            font-style: normal;
            font-weight: 700;
            line-height: 60px;
            /* 133.333% */
            font-size: 45px;
            margin-top: 100px;
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



        .about-header p {



            margin-bottom: 40px;

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
            font-size: 20px;
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

        /* dinnul */
        .content-text {
            color: #fff;
            text-align: center;
            font-family: Roboto;
            font-style: normal;
            font-weight: 400;
            line-height: 31.9px;
            /* 145% */
        }

        .bg-white {
            width: 100%;
            min-height: 50vh;
            background-image: none !important;
            background-size: cover;
            background-position: center;
            position: relative;
            padding: 120px 0 0 0;
            height: 800px;
        }

        .box-contact {
            background: #FFFFFF;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            width: 75%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 40px 60px;
        }

        .bg-note {
            width: 100%;
            min-height: 50vh;
            /* background-image: url("../img/Group_28-min.png"); */
            background-size: cover;
            background-position: center;
            position: relative;
            padding: 0px;
            height: 900px;
        }

        .btn-submit button {
            width: 100%;
            background-color: #1D2F5F;
            color: #fff;
            font-weight: 600;
            padding: 10px 10px 10px 10px;
            display: flex;
            justify-content: center;
            text-align: center;
            border: none;
            border-radius: 5px;
        }

        strong.strong-blue {
            color: #1E3168;
            font-family: Roboto;
            font-size: 30px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }

        strong.strong-black {
            color: #000;
            font-family: Roboto;
            font-size: 35px;
            font-style: normal;
            font-weight: 800;
            line-height: 40px;
        }

        strong.strong-white {
            color: #fff;
            font-family: Roboto;
            font-size: 35px;
            font-style: normal;
            font-weight: 800;
            line-height: 40px;
        }

        .img-bg-col4 {
            border-radius: 5px;
            border: 1px solid #E0E0E0;
            background: #FFF;
            padding: 20px 10px 40px 10px;
            margin: 0px 20px;
        }

        /* .omsetku-bg-life{
        background-image: url("{{ asset('public/omsetku-asset') }}/omsetku-bg-life.png");
      } */

        .omsetku-bg-life {
            width: 100%;
            min-height: 50vh;
            background-image: url("{{ asset('public/omsetku-asset') }}/omsetku-bg-life.png");
            background-size: cover;
            background-position: center;
            position: relative;
            padding: 0px;
            height: 900px;
        }

        .bg-gradient {
            width: 100%;
            min-height: 50vh;
            /* background-image: url("../img/img-gradient-min.png") !important; */
            background-size: cover;
            background-position: center;
            position: relative;
            height: 575px;
            /* padding: 100px 0px 0px 0px */
        }

        .bg-sisales {
            background-image: url("{{ asset('public/omsetku-asset') }}/omsetku-bg-sisales.png") !important;
            width: 100%;
            min-height: 50vh;
            background-size: cover;
            background-position: center;
            position: relative;
            height: 650px;
            padding: 100px 0px 0px 0px
        }


        .brd-r-desk2 {
            border-radius: 20px;
        }

        .brd-button-desk1 {
            border-radius: 7px;
            border: 3px solid #fff;
        }

        .min-w-desk1 {
            min-width: 12vw;
        }

        .obj-fit-cover {
            object-fit: cover;
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

            .image-content-desktop {
                position: relative;
                top: 45px;
            }

            .hero {
                width: 100%;
                min-height: 50vh;
                background-image: url("../img/hero img.png") !important;
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                color: rgba(255, 255, 255, 0.8);
            }

            #heros .title-text {
                color: white;
                text-align: left;
                font-size: 35px;
                margin-top: 86px;
            }

            .hero p {
                font-size: 16px;
            }

            .about-header p {
                font-size: 30px;
            }

            p.p-sz {
                font-size: 20px;
            }

            .text-about {
                font-size: 16px;
            }

            .img-about {
                width: 487px;
                margin-top: 0px;
                margin-left: 133px;
                margin-right: 45px;
            }

            .img-test {
                width: 682px;
                height: 484px;
            }

            section.features,
            section.service-details {
                padding: 260px 0px 175px 0px;
            }

            .bg-note {
                width: 100%;
                min-height: 50vh;
                /* background-image: url("../img/Group_28-min.png") !important; */
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 0px;
                height: 900px;
            }

            .bg-white {
                width: 100%;
                min-height: 50vh;
                background-image: url("../img/bg-white.png") !;
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                height: 0px;
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
                margin-top: 40px;
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
        @media screen and (min-width: 1098px) and (max-width: 1300px) {

            .hero {
                width: 100%;
                min-height: 50vh;
                background-image: url("{{ asset('public/omsetku-asset') }}/omsetku-bg-city.png") !important;
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                color: rgba(255, 255, 255, 0.8);
                height: 765px;
            }

            #heros .title-text {
                color: #fff;
                text-align: center;
                font-family: Roboto;
                font-style: normal;
                font-weight: 700;
                line-height: 60px;
                font-size: 45px;
                margin-top: 100px;
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
                text-align: center;
                font-family: Roboto;
                font-style: normal;
                font-weight: 700;
                line-height: 60px;
                /* 133.333% */
                font-size: 45px;
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

            .hero p {
                font-size: 17px;
            }

            _::-webkit-full-page-media,
            _:future,
            :root .img-girl {

                width: 365px !important;

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

            .hero p {

                font-size: 17px;

            }


            .banner-text .title-text {
                text-align: center;
                font-family: Roboto;
                font-style: normal;
                font-weight: 700;
                line-height: 60px;
                /* 133.333% */
                font-size: 45px;
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

            .about-header p {
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
                margin-top: 35px;
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

            .hero p {

                font-size: 17px;

            }

            .bg-res1 {
                background-position: top !important;
            }


            .banner-text .title-text {
                color: #fff;
                text-align: center;
                font-family: Roboto;
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

                text-align: center;

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
                background-image: url("omsetku-asset/about/omsetku-bg-m.png") !important;
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                color: rgba(255, 255, 255, 0.8);
                height: 585px !important;
            }

            .banner-text .title-text {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 31.41px;
                font-style: normal;
                font-weight: 700;
                line-height: 37.692px;
            }

            .w-m- {
                width: 100%;
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

            .img-when {}

            .img-how {
                width: 387px;
                margin-left: 0px;
            }

            .banner-text .content-text {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 17px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }

            .hero-img img {
                width: 349px;
                height: 359px;
                margin-left: 5px;
                margin-bottom: 20px;
            }

            .image-content-mobile {
                margin: 0px 30px;
            }

            .img-bg-col4 {
                border-radius: 5px;
                border: 1px solid #E0E0E0;
                background: #FFF;
                padding: 20px 10px 40px 10px;
                margin: 10px 0px;
            }

            .img-about {
                width: 95%;
                margin-top: 0px;
                margin-left: 0px;
            }

            .p-sz {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 17px;
                font-style: normal;
                font-weight: 400;
                line-height: 27.9px;
            }

            .p-m-v {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 18px;
                font-style: normal;
                font-weight: 400;
                line-height: 27.9px;
                /* 155% */
            }

            .b-m-v {
                text-align: center;
                font-family: Roboto;
                font-size: 16px;
                font-style: normal;
                font-weight: 800;
                line-height: 26px;
                /* 162.5% */
                text-transform: uppercase;
            }

            .bg-gradient {
                background-image: url("omsetku-asset/about/omsetku-bg-life-m.png ") !important;
            }

            /* Style untuk titik penanda di bawah slider */
            .carousel-indicators {
                position: absolute;
                bottom: 15px;
                left: 50%;
                transform: translateX(-50%);
                margin: 0;
                padding: 0;
                list-style: none;
                text-align: center;
            }

            .carousel-indicators li {
                display: inline-block;
                width: 10px;
                height: 10px;
                margin: 0 5px;
                text-indent: -999px;
                cursor: pointer;
                background-color: #fff;
                border: 1px solid #ccc;
                border-radius: 50%;
            }

            .carousel-indicators .active {
                width: 12px;
                height: 12px;
                background-color: #007bff;
            }

            .bg-blue-img {
                background-image: url("omsetku-asset/about/omsetku-bg-sisales-m.png") !important;
                background-size: cover;
                width: 100%;
                min-height: 50vh;
                background-position: center;
                position: relative;
                padding: 75px 0 0 0;
                color: rgba(255, 255, 255, 0.8);
                height: 685px !important;
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
                margin-top: 0px;
            }

            .img-who {
                margin-top: 5px !important;
                width: 100% !important;

            }

            .img-girl {
                width: 380px;
                margin-bottom: -30px !important;
            }

            .img-when {}

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
                margin-top: 0px !important;
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

            .img-when {}


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

                width: 375px;
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

            .about-header p {



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

                color: #000;

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

            .hero.mobile-show {
                width: 100%;
                min-height: 50vh;
                background-image: url("../img/Group 28.png");
                background-size: cover;
                background-position: center;
                position: relative;
                padding: 120px 0 0 0;
                color: rgba(255, 255, 255, 0.8);
                height: 550px !important;
            }


            .play-button {

                margin-left: 148px;

            }

            .banner-text .title-text {
                text-align: center;
                margin-top: 0px !important;
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

                margin-top: 0px !important;

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
                margin-top: 0px !important;
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

        }


        /* phone model 5 */
        @media screen and (max-width: 376px) {

            _::-webkit-full-page-media,
            _:future,
            :root section.features {
                padding: 95px 0px 0px !important;
            }

            section.features {
                padding: 55px 0px 55px !important;
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
                background-image: url("https://omsetku.id/public/assets/img/sc-3.png") !important;
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

                width: 285px;

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

            .s-t-m {
                font-size: 17px;
            }

            .min-w-desk1 {
                 margin-top: 10px !important;
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

            .s-t-m {
                font-size: 16px;
            }

            .min-w-desk1 {
                 margin-top: 10px !important;
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

            .bg-blue-img {
                background-image: url("omsetku-asset/about/omsetku-bg-sisales-m.png") !important;
                background-size: cover;
                width: 100%;
                min-height: 50vh;
                background-position: center;
                position: relative;
                padding: 50px 0 0 0;
                color: rgba(255, 255, 255, 0.8);
                height: 500px !important;
            }


            .banner-text .title-text {

                margin-top: 0px !important;

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
                width: 250px;
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

            .about-header p {

                font-size: 14px;

                margin-bottom: 15px;

                line-height: 21px;

            }

            strong.strong-blue {
                color: #1E3168;
                font-family: Roboto;
                font-size: 28px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
            }

            .banner-text .content-text {


                font-size: 13px;

                margin: 8px 0px;

            }



            .banner-text .title-text {


                line-height: 26px;

                font-size: 19px;

            }

            .s-t-m {
                font-size: 16px;
            }

            .min-w-desk1 {
                 margin-top: 3px !important;
            }

        }

        /*--------- end responsive handphone ---------*/
    </style>

@endsection



@section('konten')



    <!-- ======= Hero Section ======= -->



    <!-- Hero desktop Section -->

    <section id="heros" class="hero d-flex align-items-center desktop-show">



        <div class="container">

            <div
                class="col-xs-12 col-sm-12 col-md-12 col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center banner-text">

                <h1 class="title-text mb-4">
                    Layanan Sales Automation <br> Terbaik di Indonesia
                </h1>

                <p class="content-text mb-4">
                    Kepuasan pengguna adalah prioritas utama kami. Demi memberikan <br> kemudahan dan kenyamanan untuk
                    pengguna.
                </p>
            </div>

            <div class="btn-coba-" style=" display: flex; justify-content: center; padding-top: 30px;">
                <a href="{{ url('contact') }}" target="_blank">

                    <img class="btn-banner" src="{{ asset('public/omsetku-asset/') }}/omsetku-btn-gratis.png"
                        alt="">
                </a>

                <a href="{{ url('login') }}" target="_blank">

                    <img class="btn-banner" src="{{ asset('public/omsetku-asset/') }}/omsetku-btn-demo.png" alt=""
                        style="margin-left: 35px;">

                </a>
            </div>

        </div>



    </section>

    <!-- End Hero desktop Section -->




    <!-- Hero mobile Section -->

    <section id="heros" class="hero d-flex align-items-center mobile-show bg-res1">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div
                    class="col-12 col-sm-12 col-md-12 order-2 order-lg-1 d-flex flex-column justify-content-center banner-text">
                    <h1 class="title-text" style="line-height: 40px;">
                        Layanan Sales <br> Automation Terbaik di <br> Indonesia
                    </h1>
                    <p class="content-text">
                        Kepuasan pengguna adalah prioritas utama kami. Demimemberikan kemudahan dan kenyamanan untuk
                        pengguna.
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 order-2 order-lg-1 banner-text ">
                    <div class="col-sm-6 text-center d-flex justify-content-center">
                        <a href="{{ url('contact') }}" target="_blank">
                            <img class="w-m-" src="omsetku-asset/about/omsetku-btn-gratis-m2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 order-2 order-lg-1 banner-text ">
                    <div class="col-sm-6 text-center d-flex justify-content-center">
                        <a href="{{ url('login') }}" target="_blank">
                            <img class="w-m-" src="omsetku-asset/partnership/omsetku-btn-demo-m.png" alt=""
                                style="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end Hero mobile Section -->


    <!-- ======= end Hero Section ======= -->







    <!-- ======= Apa yang bisa kami lakukan? Section ======= -->

    <!-- Apa yang bisa kami lakukan? desktop Section -->

    <section id="features" class="features  menu-1 desktop-show">
        <div class="container">
            <h2 class="title-features text-center" style="">Apa yang bisa kami lakukan?</h2>
            <div class="text-center" style="">
                <p>Kami menggabungkan observabilitas mendalam, AI Ops, dan keamanan aplikasi dalam satu platform <br>
                    terbuka dan terpadu untuk terus memberikan jawaban tepat dan otomatisasi cerdas dari data.</p>
            </div>
            <div class="row image-content-desktop text-center d-flex justify-content-center">
                <div class=" img-bg-col4 col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="{{ asset('public/omsetku-asset/') }}/omsetku-icon-efisiensi.png" class="pb-2"
                        alt=""><br>
                    <b style="color: #7F1AFF;">EFISIENSI</b>
                    <p class="pt-2">Kami berusaha untuk membantu, <br> menghormati, dan jujur ​​dengan <br> semua rekan
                        satu tim kami.</p>
                </div>
                <div class=" img-bg-col4 col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="{{ asset('public/omsetku-asset/') }}/omsetku-icon-inovasi.png" class="pb-2"
                        alt=""><br>
                    <b style="color: #1966FF;">INOVASI CEPAT</b>
                    <p class="pt-2">Produk yang sangat berbeda <br> memerlukan pola pikir yang sangat <br> berbeda.</p>
                </div>
                <div class=" img-bg-col4 col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="{{ asset('public/omsetku-asset/') }}/omsetku-icon-pelanggan.png" class="pb-2"
                        alt=""><br>
                    <b style="color: #00ABB6;">PELANGGAN PERTAMA</b>
                    <p class="pt-2">Kami mencoba memahami <br> alasannya sebelum kami mencoba <br> menemukan jalannya.</p>
                </div>
            </div>
            <div class="row gy-4 align-items-center features-item " data-aos="fade-up">
            </div>
        </div>
    </section>

    <!-- end Apa yang bisa kami lakukan? desktop Section -->



    <!-- Apa yang bisa kami lakukan? mobile Section -->

    <section id="features" class="features  menu-1 mobile-show">
        <div class="container">
            <h2 class="title-features text-center" style="">Apa yang bisa kami <br> lakukan?</h2>
            <div class="text-center" style="">
                <p>Kami menggabungkan observabilitas <br> mendalam, AI Ops, dan keamanan aplikasi <br> dalam satu platform
                    <br>
                    terbuka dan terpadu untuk <br> terus memberikan jawaban tepat dan <br> otomatisasi cerdas dari data.</p>
            </div>
            <div class="row image-content-mobile text-center d-flex justify-content-center">
                <div class=" img-bg-col4 col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="omsetku-asset/omsetku-icon-efisiensi.png" class="pb-2" alt=""><br>
                    <b style="color: #7F1AFF;">EFISIENSI</b>
                    <p class="pt-2">Kami berusaha untuk membantu, <br> menghormati, dan jujur ​​dengan <br> semua rekan
                        satu tim kami.</p>
                </div>
                <div class=" img-bg-col4 col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="omsetku-asset/omsetku-icon-inovasi.png" class="pb-2" alt=""><br>
                    <b style="color: #1966FF;">INOVASI CEPAT</b>
                    <p class="pt-2">Produk yang sangat berbeda <br> memerlukan pola pikir yang sangat <br> berbeda.</p>
                </div>
                <div class=" img-bg-col4 col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="omsetku-asset/omsetku-icon-pelanggan.png" class="pb-2" alt=""><br>
                    <b style="color: #00ABB6;">PELANGGAN PERTAMA</b>
                    <p class="pt-2">Kami mencoba memahami <br> alasannya sebelum kami mencoba <br> menemukan jalannya.</p>
                </div>
            </div>
            <div class="row gy-4 align-items-center features-item " data-aos="fade-up">
            </div>
        </div>
    </section>

    <!-- End Apa yang bisa kami lakukan? mobile Section -->

    <!-- ======= end Apa yang bisa kami lakukan? Section ======= -->








    <!-- ======= Apa yang kami hargai dalam pengembangan  Section ======= -->

    <!-- Apa yang kami hargai dalam pengembangan  desktop Section -->

    <section id="about1" class="about menu-1 desktop-show">
        <div class="container">
            <div class="about-header">
                <h2 style="text-align: center;">Apa yang kami hargai dalam pengembangan</h2>
                <p class="p-sz" style="text-align: center; ">
                    Kami menjaga semuanya tetap sederhana. Akal sehat telah memandu perjalanan kami dan
                    <br> memungkinkan kami untuk tumbuh dan unggul. Seiring perkembangan kami, kami telah
                    <br> mengidentifikasi lima pilar yang mendefinisikan dan mewujudkan budaya kami.
                </p>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6 image-section" data-aos-delay="100">
                    <img src="{{ asset('public/omsetku-asset/') }}/omsetku-pengembangan.png" class="img-about"
                        alt="" style="margin-left: 0px">
                </div>

                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100"
                    style="display: flex; flex-direction: column; justify-content: center;">
                    {{-- <div class="about-header">
          <h2 style="text-align: left;">{{ $why_omsetku['title'] }}</h2>
      </div> --}}
                    <div class="row mb-4">
                        <div class="col-md-1 col-lg-1">
                        </div>
                        <div class="col-md-11 col-lg-11">
                            <h5><strong class="strong-blue">Kami percaya bisnis adalah platform cepat untuk melakukan
                                    perubahan.</strong></h5>
                            <p class="text-about">Kami adalah mendukung dan berkomitmen untuk melakukan yang terbaik bagi
                                semua pemangku kepentingan kami pelanggan, karyawan, mitra, komunitas dan masyarakat secara
                                keseluruhan.
                                <br><br>Dan kami memimpin dengan memberi contoh, memelopori inisiatif dalam bidang teknologi
                            </p>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Apa yang kami hargai dalam pengembangan desktop Section -->


    <!-- Apa yang kami hargai dalam pengembangan mobile Section -->

    <section id="about1" class="about menu-1 mobile-show">
        <div class="container">
            <div class="about-header">
                <h2 style="text-align: center;">What we appreciate for development</h2>
                <p class="p-sz" style="text-align: center; ">
                    Kami menjaga semuanya tetap sederhana. Akal sehat telah memandu perjalanan kami dan memungkinkan kami
                    untuk tumbuh dan unggul. Seiring perkembangan kami, kami telah mengidentifikasi empat pilar yang
                    mendefinisikan dan mewujudkan budaya kami.
                </p>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6 image-section" data-aos-delay="100">
                    <img src="omsetku-asset/omsetku-pengembangan.png" class="img-about" alt=""
                        style="margin-left: 0px">
                </div>

                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100"
                    style="display: flex; flex-direction: column; justify-content: center;">
                    {{-- <div class="about-header">
          <h2 style="text-align: left;">{{ $why_omsetku['title'] }}</h2>
        </div> --}}
                    <div class="row mb-4">
                        <div class="col-md-12 col-lg-12">
                            <h5><strong class="strong-blue">Kami percaya bisnis adalah platform cepat untuk melakukan
                                    perubahan.</strong></h5>
                            <p class="text-about">Kami adalah mendukung dan berkomitmen untuk melakukan yang terbaik bagi
                                semua pemangku kepentingan kami pelanggan, karyawan, mitra, komunitas dan masyarakat secara
                                keseluruhan.
                                <br><br>Dan kami memimpin dengan memberi contoh, memelopori inisiatif dalam bidang teknologi
                            </p>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Apa yang kami hargai dalam pengembangan mobile Section -->

    <!-- ======= Apa yang kami hargai dalam pengembangan Section ======= -->






    <!-- ======= Value yang omsetku berikan buat kamu Section ======= -->

    <!-- Value yang omsetku berikan buat kamu desktop Section -->

    <section id="features" class="features  menu-1 desktop-show">
        <div class="container">
            <h2 class="title-features text-center" style="">Value yang omsetku berikan buat kamu</h2>
            <div class="text-center" style="">
                <p>Kemudahan dan kenyamanan dalam penggunaan produk melalui layanan
                    <br> purna jual yang terbaik dan terlengkap di kelasnya.
                </p>
            </div>
            <div class="row image-content-desktop text-center">
                <div class="col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="{{ asset('public/omsetku-asset/') }}/omsetku-icon-daftar.png" class="pb-2"
                        alt=""><br>
                    <b style="color: #7F1AFF;">CUSTOMER SERVICE</b>
                    <p class="pt-2">Tim support yang responsif & selalu siap memberikan solusi untuk masalah Anda.</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="{{ asset('public/omsetku-asset/') }}/omsetku-icon-undang.png" class="pb-2"
                        alt=""><br>
                    <b style="color: #1966FF;">IMPLEMENTASI</b>
                    <p class="pt-2">Implementasi dan pelatihan produk oleh tim spesialis Goodeva secara gratis.</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="{{ asset('public/omsetku-asset/') }}/omsetku-icon-account.png" class="pb-2"
                        alt=""><br>
                    <b style="color: #00ABB6;">ACCOUNT MANAGER</b>
                    <p class="pt-2">Konsultasi solusi bisnis secara personal bersama account manager Goodeva.</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="{{ asset('public/omsetku-asset/') }}/omsetku-icon-komisi.png" class="pb-2"
                        alt=""><br>
                    <b style="color: #02D394">KNOWLEDGE CENTER</b>
                    <p class="pt-2">Panduan produk Goodeva yang lengkap dan tersedia dalam berbagai format.</p>
                </div>
            </div>
            <div class="row gy-4 align-items-center features-item " data-aos="fade-up">
            </div>
        </div>

    </section>

    <!-- end Value yang omsetku berikan buat kamu desktop Section -->



    <!-- Value yang omsetku berikan buat kamu mobile Section -->

    <section id="features" class="features  menu-1 mobile-show">
        <div class="container">
            <h2 class="title-features text-center" style="">Value yang omsetku berikan buat kamu</h2>
            <div class="text-center p-m-v" style="">
                <p>Kemudahan dan kenyamanan dalam penggunaan produk melalui layanan purna jual yang terbaik dan terlengkap
                    di kelasnya.</p>
            </div>
            <div class="row image-content-desktop text-center">
                <div class="col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="omsetku-asset/omsetku-icon-daftar.png" class="pb-2" alt=""><br>
                    <b class="b-m-v" style="color: #7F1AFF;">CUSTOMER SERVICE</b>
                    <p class="p-m-v pt-2">Tim support yang responsif & selalu <br> siap memberikan solusi untuk <br>
                        masalah Anda.</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="omsetku-asset/omsetku-icon-implementasi.png" class="pb-2" alt=""><br>
                    <b class="b-m-v" style="color: #1966FF;">IMPLEMENTASI</b>
                    <p class="p-m-v pt-2">Implementasi dan pelatihan <br> produk oleh tim spesialis <br> Goodeva secara
                        gratis.</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="omsetku-asset/omsetku-icon-account.png" class="pb-2" alt=""><br>
                    <b class="b-m-v" style="color: #00ABB6;">ACCOUNT MANAGER</b>
                    <p class="p-m-v pt-2">Konsultasi solusi bisnis secara <br> personal bersama account <br> manager
                        Goodeva.</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 text-center">
                    <img src="omsetku-asset/omsetku-icon-komisi.png" class="pb-2" alt=""><br>
                    <b class="b-m-v" style="color: #02D394">KNOWLEDGE CENTER</b>
                    <p class="p-m-v pt-2 pb-4">Panduan produk Goodeva <br> yang lengkap dan tersedia <br> dalam berbagai
                        format.</p>
                </div>
            </div>
            <div class="row p-4 gy-4 align-items-center features-item " data-aos="fade-up">
            </div>
        </div>

    </section>

    <!-- End Value yang omsetku berikan buat kamu mobile Section -->

    <!-- ======= end Value yang omsetku berikan buat kamu Section ======= -->




    <!-- Omsetku Life desktop Section -->

    <section id="about" class="about bg-gradient menu-1 desktop-show">
        <div class="container h-100 d-flex align-items-center">
            <div class="row d-flex" style="flex-wrap:nowrap;">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 pt-lg-0 content" style=" margin-top: 30px;">
                    <div class="about-header">
                        <h2 style="text-align: left; color: #fff; margin-bottom: -4px;">#Omsetku Life</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-11 col-lg-11">
                            <div class="text-left" style="color: #fff;">
                                <br> Kami mendapatkan kepercayaan dari pelanggan,
                                <br> karyawan, dan keluarga besar kami melalui
                                <br> transparansi, keamanan, kepatuhan, privasi, dan
                                <br> kinerja. Dan kami menghadirkan infrastruktur paling
                                <br> tepercaya di industri.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 pr-0">
                            <img src="{{ asset('public/omsetku-asset/') }}/omsetku-life-1.png"
                                class="w-100 obj-fit-cover h-100" alt="">
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 pr-0">
                            <img src="{{ asset('public/omsetku-asset/') }}/omsetku-life-2.png"
                                class="w-100 obj-fit-cover h-100" alt="">
                        </div>

                    </div>
                </div>
            </div>
            <!-- <div style="margin-top: -95px;"> -->
            <!-- <a href="{{ url('contact') }}" target="_blank"> -->
            <!-- <img class="" src="{{ asset('public/omsetku-asset/') }}/omsetku-icon-panah-kiri.png" alt=""> -->
            <!-- </a> -->
            <!-- <a href="{{ url('login') }}" target="_blank"> -->
            <!-- <img class="" src="{{ asset('public/omsetku-asset/') }}/omsetku-icon-panah-kanan.png" alt="" style="margin-left: 10px;"> -->
            <!-- </a> -->
            <!-- </div> -->

        </div>

    </section>

    <!-- End Omsetku Life desktop Section -->



    <!-- Omsetku Life mobile Section -->

    <section id="about" class="about bg-gradient menu-1 mobile-show">
        <div class="container h-100 d-flex align-items-center">
            <div class="d-flex" style="flex-wrap: nowrap;">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 pt-lg-0 content" style="">
                    <div class="about-header">
                        <h2 style="text-align: left; color: #fff; margin-bottom: -4px;">#Omsetku Life</h2>
                    </div>
                    {{-- <div class="row"> --}}
                        <div class="col-md-12 col-lg-12">
                            <div class="text-left" style="color: #fff;">
                                 Kami mendapatkan kepercayaan dari pelanggan,
                                 karyawan, dan keluarga besar kami melalui
                                 transparansi, keamanan, kepatuhan, privasi, dan
                                 kinerja. Dan kami menghadirkan infrastruktur paling
                                 tepercaya di industri.
                            </div>
                        </div>
                    {{-- </div> --}}
                    <div class="row">
                        <div class="pt-4 col-md-12 col-lg-12">
                            <div id="partnershipSlider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" style="height: 300px;">
                                    <div class="carousel-item active">
                                        <img src="omsetku-asset/omsetku-life-1.png" class="img-fluid" alt="Gambar 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="omsetku-asset/omsetku-life-2.png" class="img-fluid" alt="Gambar 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="omsetku-asset/omsetku-life-1.png" class="img-fluid" alt="Gambar 2">
                                    </div>
                                </div>
                                <!-- Titik penanda -->
                                <ol class="carousel-indicators">
                                    <li data-target="#partnershipSlider" data-slide-to="0" class="active"></li>
                                    <li data-target="#partnershipSlider" data-slide-to="1"></li>
                                    <li data-target="#partnershipSlider" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Omsetku Life mobile Section -->


    <!-- sisales desktop Section -->
    <!--  -->
    <!-- {{-- <section id="about1" class="about menu-1 desktop-show" style="margin: 50px 0px 0px 0px; padding: 40px 0px 0px 0px;"> -->
<!-- <div class="container"> -->
<!-- <div class="row bg-sisales"> -->
<!-- <div class="col-lg-6 image-section" data-aos-delay="100"> -->
<!-- {{-- <img src="{{ asset('public/omsetku-asset/') }}/omsetku-mengapa2.png" class="img-about" alt="" style="margin-left: 0px"> --}} -->
    <!-- </div> -->
    <!-- <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;"> -->
    <!-- {{-- <div class="about-header"> -->
<!-- <h2 style="text-align: left;">{{ $why_omsetku['title'] }}</h2> -->
<!-- </div> --}} -->
    <!-- <div class="row mb-4"> -->
    <!-- <div class="col-md-11 col-lg-11"> -->
    <!-- {{-- <h5 ><strong class="strong-blue">#Omsetku si Sales Automation</strong></h5> -->
<!-- <p class="text-about">Tim kami yang dinamis, membuat kesempurnaan perangkat lunak untuk <br> perjalanan penjualan dan pendataan omset.</p> --}} -->
    <!-- <div style=""> -->
    {{-- <!-- <a href="{{ url('contact') }}" target="_blank"> -->
    <!-- <img class="" src="{{ asset('public/omsetku-asset/') }}/omsetku-icon-wasales.png" alt=""> -->
    <!-- </a> -->
    <!-- <a href="{{ url('login') }}" target="_blank"> -->
    <!-- <img class="" src="{{ asset('public/omsetku-asset/') }}/omsetku-icon-jadwal.png" alt="" style=""> --> --}}
    <!-- </a> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </section> --}} -->

    <!-- End sisales desktop Section -->


    <!-- ======= Si Sales Automation Section ======= -->
    <!-- desktop section -->
    <section id="siSalesAutomation" class="features py-5 desktop-show">
        <div class="container">
            <div class="question-main bg-blue-img brd-r-desk2">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="img-question d-flex justify-content-center">
                            <img src="{{ asset('public/omsetku-asset/omsetku-si-paling-automation-img.png') }}"
                                alt="" srcset="" class="w-75">
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex justify-content-center align-items-center">
                        <div class="text-content px-5">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <h3 class="fw-700 text-white">
                                        #Omsetku si Sales Automation
                                    </h3>
                                    <p class="text-white">
                                        Tim kami yang dinamis, membuat kesempurnaan perangkat lunak untuk <br>
                                        perjalanan penjualan dan pendataan omset.
                                    </p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex">
                                    <a href=""
                                        class="mx-2 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 min-w-desk1"><img
                                            src="{{ asset('public/assets/img/omsetku-wa-icon.png') }}" alt=""
                                            srcset="" class="">Whatsapp Sales</a>
                                    <a href=""
                                        class="mx-2 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 min-w-desk1">Jadwalkan
                                        Demo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end desktop section -->

    <!-- mobile section -->
    <section id="siSalesAutomation" class="features py-5 mobile-show">
        <div class="container">
            <div class="question-main bg-blue-img brd-r-desk2">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center align-items-center">
                        <div class="text-content px-5">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <h3 class="fw-700 text-white text-center s-t-m">
                                        #Omsetku si Sales Automation
                                    </h3>
                                    <p class="text-white text-center s-t-m ">
                                        Tim kami yang dinamis, membuat kesempurnaan perangkat lunak untuk <br>
                                        perjalanan penjualan dan pendataan omset.
                                    </p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex"  style="display:flex; flex-direction: column;">
                                    <a href="" class="mt-4 mx-2 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 min-w-desk1">
                                        <img src="{{ asset('public/assets/img/omsetku-wa-icon.png') }}" alt="" srcset="" class="">
                                        Whatsapp Sales
                                    </a>
                                    <a href="" class="mt-4 mx-2 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 min-w-desk1">
                                        Jadwalkan Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end mobile section -->

    <!-- ======= End Si Sales Automation Section ======= -->



    <!-- sisales mobile Section -->

    <!-- {{-- <section id="about" class="about bg-res5 menu-1 pbtab-0 mobile-show"> -->
<!--  -->
<!-- <div class="container"> -->
<!--  -->
<!-- <div class="row"> -->
<!--  -->
<!-- <div class="col-lg-6 pt-lg-0 content" style=" margin-top: 30px; text-align: center;"> -->
<!--  -->
<!-- <div class="about-header"> -->
<!--  -->
<!-- <h2 style="text-align: center; color: #fff;">{{ $ads_omsetku['title'] }}</h2> -->
<!--  -->
<!-- </div> -->
<!--  -->
<!-- <div class="row"> -->
<!--  -->
<!--  -->
<!-- <div class="col-md-11 col-lg-11 text-center"> -->
<!--  -->
<!-- <div class="text-left" style="color: #fff;"> -->
<!-- @php echo $ads_omsetku['describe'] @endphp -->
<!-- </div> -->
<!--  -->
<!-- </div> -->
<!--  -->
<!-- <div style="margin-top: 40px;"> -->
<!-- <a href="{{ url ('contact') }}" target="_blank"> -->
<!--  -->
<!-- <img class="btn-banner" src="{{ asset('public/assets/img/'. $banner['btn_banner']) }}" alt=""> -->
<!--  -->
<!-- </a> -->
<!--  -->
<!-- <a href="{{ url('login') }}" target="_blank"> -->
<!--  -->
<!-- <img class="btn-banner" src="{{ asset('public/assets/img/'. $banner['btn_coba']) }}" alt="" style="height: 41px; width: 129px; margin-left: 10px;"> -->
<!--  -->
<!-- </a> -->
<!-- </div> -->
<!--  -->
<!--  -->
<!-- </div> -->
<!--  -->
<!--  -->
<!-- </div> -->
<!--  -->
<!-- <div class="col-lg-6 image-section"> -->
<!--  -->
<!-- <img src="{{ asset('public/assets/img/'.$ads_omsetku['img']) }}" class="img-girl" alt=""> -->
<!--  -->
<!-- </div> -->
<!--  -->
<!-- </div> -->
<!--  -->
<!--  -->
<!--  -->
<!-- </div> -->
<!--  -->
<!-- </section> --}} -->

    <!-- End sisales mobile Section -->


    <!-- --------------------------------------------------------------------------------------------------------------- -->


@endsection

@section('script-before')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection