@extends('layouts.layout-v2_2')


<?php
$baseurl = 'https://omsetku.id/';
?>


@section('title', 'Sales Automation')





@section('css-after')

<style>
  .hero {
    background-image: url("omsetku-asset/omsetku-bg1.png");
  }

  .bg-note {
    background-image: url("omsetku-asset/omsetku-bg2.png");
  }

  .bg-white {
    background-image: url("https://omsetku.id/public/assets/img/omsetku-bg-cube.png");
  }

  .bg-orange {
    background-image: url("https://omsetku.id/public/assets/img/omsetku-bg-circle-orange.png");
  }

  .bg-gradient {
    background-image: url("https://omsetku.id/public/assets/img/omsetku-bg-cicle-purple.png") !important;
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
    color: #000;
    text-align: center;
    font-family: Roboto;
    font-style: normal;
    font-weight: 700;
    line-height: 60px; /* 133.333% */
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



  .about-header h2 {



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
    color: #000;
    text-align: center;
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    line-height: 31.9px; /* 145% */
  }

  .bg-white {
    width: 100%;
    min-height: 50vh;
    background-image: none !important;
    background-size: cover;
    background-position: center;
    position: relative;
    padding: 120px 0 0 0;
    height: 500px;
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

  .bg-res1 {
    width: 100%;
    min-height: 50vh;
    background-image: url("omsetku-asset/omsetku-bg1.png") !important;
    background-size: cover;
    background-position: center;
    position: relative;
    height: 800px !important;
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

    .about-header h2 {
      font-size: 30px;
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
      padding: 260px 0px 0px 0px;
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
      background-image: url("omsetku-asset/omsetku-bg1.png") !important;
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 120px 0 0 0;
      color: rgba(255, 255, 255, 0.8);
      height: 765px;
    }

    #heros .title-text {
      color: #000;
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
      line-height: 60px; /* 133.333% */
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
      line-height: 60px; /* 133.333% */
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
      color: #000;
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
      padding: 0px 0px 110px !important;
    }

    .title-features {
      margin-top: 0px !important;
      margin-bottom: 20px;
      color: #000;
      text-align: center;
      font-family: Roboto;
      font-size: 26.65px;
      font-style: normal;
      font-weight: 800;
      line-height: 33.313px; /* 125% */
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
      background-image: url("omsetku-asset/omsetku-bg1.png");
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 0px 0 0 0;
      color: rgba(255, 255, 255, 0.8);
      height: 1000px;
    }

    .banner-text .title-text {
      text-align: center;
      margin-top: 100px;
      font-size: 30px;
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

    }

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

    .banner-text .title-text {
      color: #000;
      text-align: center;
      font-family: Roboto;
      font-size: 31.41px;
      font-style: normal;
      font-weight: 700;
      line-height: 37.692px;
    }

    .hero-img img {

      width: 349px;
      height: 359px;
      margin-left: 5px;
      margin-bottom: 20px;

    }

    .box-contact {
      background: #FFFFFF;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
      border-radius: 10px;
      width: 90%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      padding: 10px 20px 40px;
    }


  }

  /* phone mode 1 */
  @media screen and (max-width: 428px) {

    .hero.mobile-show {
      width: 100%;
      min-height: 50vh;
      background-image: url("omsetku-asset/omsetku-bg1.png");
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 0px 0 0 0;
      color: rgba(255, 255, 255, 0.8);
      height: 675px !important;
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

    .banner-text .title-text {
      color: #000;
      text-align: center;
      font-family: Roboto;
      font-size: 31.41px;
      font-style: normal;
      font-weight: 700;
      line-height: 37.692px;
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
     
    }

    .img-how {
      width: 387px;
      margin-left: 0px;
    }



    .hero-img img {

      width: 349px;
      height: 359px;
      margin-left: 5px;
      margin-bottom: 20px;

    }

    strong.strong-black {
      color: #000;
      font-family: Roboto;
      font-size: 30px;
      font-style: normal;
      font-weight: 800;
      line-height: 35px;
    }

    .scroll-container.mobile {
      width: 100%;
      overflow-x: scroll;
      white-space: nowrap;
    }

    .img-scroll {
      display: inline-block;
      max-width: 100%;
      height: auto;
    }

    label.label-tb-m {
      color: #2B2A35;
      font-family: Inter;
      font-size: 14.097px;
      font-style: normal;
      font-weight: 600;
      line-height: 24.435px;
    }

    .bg-note {
      width: 100%;
      min-height: 50vh;
      /* background-image: url("../img/Group_28-min.png"); */
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 50px 0px;
      height: 1200px;
    }

    .image-section {
      display: flex;
      justify-content: center;
      align-items: center;
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
      margin-top: 10px !important;
    }

    section.features,
    section.service-details {
      padding: 100px 0px;
    }

    .text-about {
      color: #000;
      font-family: Roboto;
      font-size: 17px;
      font-style: normal;
      font-weight: 400;
      line-height: 27.9px; /* 164.118% */
    }

    .hero.mobile-show {

      width: 100%;
      min-height: 50vh;
      background-image: url("omsetku-asset/partnership/omsetku-bg-m.png");
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 120px 0 0 0;
      color: rgba(255, 255, 255, 0.8);
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
      color: #000;
      text-align: center;
      font-family: Roboto;
      font-size: 17px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
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
      background-image: url("omsetku-asset/omsetku-bg1.png");
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
      margin-top: 55px !important;
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

  /* phone mode 4 */
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

      margin-top: 40px !important;

    }



  }


  /* phone mode 5 */
  @media screen and (max-width: 395px) {

    .title-features {
      margin-top: -72px;
    }

    .hero.mobile-show {
      width: 100%;
      min-height: 50vh;
      background-image: url("omsetku-asset/omsetku-bg1.png");
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 0px 0 0 0;
      color: rgba(255, 255, 255, 0.8);
      height: 850px;
    }

    .hero-img img {

      margin-left: 10px !important;

    }

    .banner-text .title-text {

      line-height: 40px;
      margin-top: 100px !important;
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

    .banner-text .content-text {
      text-align: center;
      margin: 0px;
    }

  }


  /* phone mode 6 */
  @media screen and (max-width: 376px) {

    .hero.mobile-show {
      width: 100%;
      min-height: 50vh;
      background-image: url("omsetku-asset/omsetku-bg1.png");
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 0px 0 0 0;
      color: rgba(255, 255, 255, 0.8);
      height: 575px !important;
    }

    _::-webkit-full-page-media,
    _:future,
    :root section.features {
      padding: 95px 0px 0px !important;
    }

    section.features {
      padding: 0px 0px 100px !important;
    }

    .banner-text .title-text {
      line-height: 30px !important;
    }

    .form-judul {
        padding: 15px 0px 5px;
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

      font-size: 16px;
      line-height: 23px;
      margin: 0px;

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

    .w-m- {
      width: 95%;
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


  }

  /* phone mode 7 */
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

  }

  /* phone mode 8 */
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

    .btn-banner {
      width: 120px;
      margin-top: -20px;
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

    .about-header h2 {

      font-size: 25px;

      margin-bottom: 15px;

    }

    .banner-text .content-text {


      font-size: 13px;
      line-height: 17px;
      margin: 8px 0px;

    }



    .banner-text .title-text {


      line-height: 26px;

      font-size: 22px;

    }

    strong.strong-black {
      color: #000;
      font-family: Roboto;
      font-size: 25px;
      font-style: normal;
      font-weight: 800;
      line-height: 30px;
    }

  }

  /*--------- end responsive handphone ---------*/
</style>

@endsection



@section('konten')



<!-- ======= Hero Section ======= -->



<!-- Hero desktop Section -->

<section id="heros" class="hero d-flex align-items-center desktop-show" >
  <div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center banner-text">
      <h1 class="title-text mb-4">
        {{ $banner['title'] }} <br> {{ $banner['title2'] }}
      </h1>
      <p class="content-text mb-4">
        Ajak mitra bisnismu untuk menggunakan Omsetku dan dapatkan penghasilan 
        <br> tambahan mulai dari Rp 540.000 hingga Rp 5.000.000 per mitra!
      </p>
    </div>
    <div class="btn-coba-" style=" display: flex; justify-content: center; padding-top: 30px;">
      <a href="{{ url('contact') }}" target="_blank">
        <img class="btn-banner" src="omsetku-asset/omsetku-gratis.png" alt="">
      </a>
      <a href="{{ url('login') }}" target="_blank">
        <img class="btn-banner" src="omsetku-asset/omsetku-demo2.png" alt="" style="margin-left: 10px;">
      </a>
    </div>
  </div>
</section>
<!-- End Hero desktop Section -->




<!-- Hero mobile Section -->

<section id="heros" class="hero d-flex align-items-center mobile-show bg-res1">
  <div class="container">
    <div class="row gy-4 d-flex justify-content-between ">
      <div class="col-12 col-sm-12 col-md-12 order-2 order-lg-1 d-flex flex-column justify-content-center banner-text">
        <h1 class="title-text pb-4" style="line-height: 40px;">
          Rekomendasikan <br> Omsetku, dapatkan <br> passive income jutaan <br> rupiah!
        </h1>
        <p class="content-text text-dark pb-4" >
        Dengan Berlangganan Platform Omsetku, Anda dapat mengakses platform lengkap kami dan memanfaatkan harga per jam yang mudah <br> dipahami dan disesuaikan dengan kebutuhan <br> Anda.
        </p>
      </div>
        <div class="col-12 col-sm-12 col-md-12 order-2 order-lg-1 banner-text ">
          <div class="col-sm-6 text-center d-flex justify-content-center">
            <a href="{{ url('contact') }}" target="_blank">
              <img class="w-m-" src="omsetku-asset/partnership/omsetku-btn-gratis-m.png" alt="">
            </a>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 order-2 order-lg-1 banner-text ">
          <div class="col-sm-6 text-center d-flex justify-content-center">
            <a href="{{ url('login') }}" target="_blank">
              <img class="w-m-" src="omsetku-asset/partnership/omsetku-btn-demo-m.png" alt="" style="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end Hero mobile Section -->


<!-- ======= end Hero Section ======= -->







<!-- ======= WHY  Section ======= -->

<!-- WHY  desktop Section -->

<section id="about1" class="about menu-1 desktop-show">
  <div class="container">
    <div class="about-header">
          <h2 style="text-align: center;">{{ $why_omsetku['title'] }} <br> {{ $why_omsetku['title2'] }}</h2>
    </div>
    <div class="row pb-4">
      <div class="col-lg-6 image-section" data-aos-delay="100">
        <img src="omsetku-asset/omsetku-mengapa2.png" class="img-about" alt="" style="margin-left: 0px">
      </div>
    
      <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
        {{-- <div class="about-header">
          <h2 style="text-align: left;">{{ $why_omsetku['title'] }}</h2>
        </div> --}}
        @for($i = 0; $i < count($why_omsetku['content']); $i++) <div class="row mb-4">
          <div class="col-md-1 col-lg-1">
            {{-- <img src="{{ asset('public/assets/img/check.png') }}" alt="" class="icon-checklist"> --}}
          </div>
          <div class="col-md-11 col-lg-11">
            <h5 ><strong class="strong-blue">{{ $why_omsetku['content'][$i]['title_content'] }}</strong></h5>
            <p class="text-about">{{ $why_omsetku['content'][$i]['describe_content'] }}</p>
          </div><br>
      </div>
      @endfor
    </div>
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
        {{-- <div class="about-header">
          <h2 style="text-align: left;">{{ $why_omsetku['title'] }}</h2>
        </div> --}}
        @for($i = 0; $i < count($why_omsetku['content_2']); $i++) <div class="row mb-4">
          <div class="col-md-1 col-lg-1">
            {{-- <img src="{{ asset('public/assets/img/check.png') }}" alt="" class="icon-checklist"> --}}
          </div>
          <div class="col-md-11 col-lg-11">
            <h5 style="margin-bottom: 20px"><strong class="strong-black">{{ $why_omsetku['content_2'][$i]['title_content'] }}</strong></h5>
            <p class="text-about">{{ $why_omsetku['content_2'][$i]['describe_content'] }}</p>
          </div>
      </div>
      @endfor
    </div>
    <div class="col-lg-6 image-section" data-aos-delay="100">
      <img src="omsetku-asset/omsetku-kelebihan2.png" class="img-about" alt="" style="width: 625px; margin-left: 100px">>
    </div>
  </div>
  </div>
</section>

<!-- End WHY desktop Section -->


<!-- WHY mobile Section -->

<section id="about1" class="about menu-1 mobile-show">
  <div class="container">
    <div class="about-header">
          <h2 style="text-align: center;">{{ $why_omsetku['title'] }} <br> {{ $why_omsetku['title2'] }}</h2>
    </div>
    <div class="row pb-4">
      <div class="col-lg-6 image-section" data-aos-delay="100">
        <img src="omsetku-asset/partnership/omsetku-mengapa-m.png" class="img-about" alt="" style="margin-left: 0px">
      </div>
    
      <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
        {{-- <div class="about-header">
          <h2 style="text-align: left;">{{ $why_omsetku['title'] }}</h2>
        </div> --}}
        @for($i = 0; $i < count($why_omsetku['content']); $i++) <div class="row mb-4">
          <div class="col-md-1 col-lg-1">
            {{-- <img src="{{ asset('public/assets/img/check.png') }}" alt="" class="icon-checklist"> --}}
          </div>
          <div class="col-md-11 col-lg-11">
            <h5 ><strong class="strong-blue">{{ $why_omsetku['content'][$i]['title_content'] }}</strong></h5>
            <p class="text-about">{{ $why_omsetku['content'][$i]['describe_content'] }}</p>
          </div><br>
      </div>
      @endfor
    </div>
    <div class="col-lg-6 image-section" data-aos-delay="100">
      <img src="omsetku-asset/partnership/omsetku-kelebihan-m.png" class="img-about" alt="" style="">>
    </div>
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
        {{-- <div class="about-header">
          <h2 style="text-align: left;">{{ $why_omsetku['title'] }}</h2>
        </div> --}}
        @for($i = 0; $i < count($why_omsetku['content_2']); $i++) <div class="row mb-4">
          <div class="col-md-1 col-lg-1">
            {{-- <img src="{{ asset('public/assets/img/check.png') }}" alt="" class="icon-checklist"> --}}
          </div>
          <div class="col-md-11 col-lg-11">
            <h5 style="margin-bottom: 20px"><strong class="strong-black">{{ $why_omsetku['content_2'][$i]['title_content'] }}</strong></h5>
            <p class="text-about">{{ $why_omsetku['content_2'][$i]['describe_content'] }}</p>
          </div>
      </div>
      @endfor
    </div>
  </div>
  </div>
</section>

<!-- End WHY mobile Section -->

<!-- ======= WHY Section ======= -->






<!-- ======= Cara menjadi agen referral Omsetku Section ======= -->

<!-- Cara menjadi agen referral Omsetku desktop Section -->

<section id="features" class="features  menu-1 desktop-show">
  <div class="container">
    <h2 class="title-features text-center" style="">Cara menjadi agen referral Omsetku</h2>
    <div class="text-center" style="">
      <p>Ikuti langkah berikut untuk menjadi agen referral Omsetku</p>
    </div>
    <div class="row image-content-desktop text-center">
      <div class="col-md-3 col-lg-3 col-xl-3 text-center">
        <img src="omsetku-asset/omsetku-icon-daftar.png" class="pb-2" alt=""><br>
        <b style="color: #7F1AFF;">DAFTAR</b>
        <p class="pt-2">Daftar sebagai Anggota Referral dan dapatkan akun serta link referral unik </p>
      </div>
      <div class="col-md-3 col-lg-3 col-xl-3 text-center">
        <img src="omsetku-asset/omsetku-icon-undang.png" class="pb-2" alt=""><br>
        <b style="color: #1966FF;">UNDANG PARTNER BISNIS</b>
        <p class="pt-2">Bagikan link referral Anda dengan mitra bisnis di media sosial & website.</p>
      </div>
      <div class="col-md-3 col-lg-3 col-xl-3 text-center">
        <img src="omsetku-asset/omsetku-icon-status.png" class="pb-2" alt=""><br>
        <b style="color: #00ABB6;">CHECK REFERRAL STATUS</b>
        <p class="pt-2">Ketahui status keberhasilan referral Anda melalui akun referral Anda.</p>
      </div>
      <div class="col-md-3 col-lg-3 col-xl-3 text-center">
        <img src="omsetku-asset/omsetku-icon-komisi.png" class="pb-2" alt=""><br>
        <b style="color: #02D394">DAFTAR REFERRAL KOMISI</b>
        <p class="pt-2">Dapatkan komisi 12% dari nilai langganan mitra bisnis.</p>
      </div>
    </div>
    <div class="row gy-4 align-items-center features-item " data-aos="fade-up">
    </div>
  </div>
</section>

<!-- end Cara menjadi agen referral Omsetku desktop Section -->



<!-- Cara menjadi agen referral Omsetku mobile Section -->

<section id="features" class="features  menu-1 mobile-show">
  <div class="container">
    <h2 class="title-features text-center" style="">Value yang omsetku berikan buat kamu</h2>
    <div class="text-center" style="">
      <p>Kemudahan dan kenyamanan dalam <br> penggunaan produk melalui layanan <br> purna jual yang terbaik dan terlengkap di <br> kelasnya.</p>
    </div>
    <div class="row image-content-desktop text-center">
      <div class="col-md-3 col-lg-3 col-xl-3 text-center">
        <img src="omsetku-asset/omsetku-icon-daftar.png" class="pb-2" alt=""><br>
        <b style="color: #7F1AFF;">CUSTOMER SERVICE</b>
        <p class="pt-2 pb-4">Tim support yang responsif & selalu <br> siap memberikan solusi untuk <br> masalah Anda. </p>
      </div>
      <div class="col-md-3 col-lg-3 col-xl-3 text-center">
        <img src="omsetku-asset/omsetku-icon-implementasi.png" class="pb-2" alt=""><br>
        <b style="color: #1966FF;">IMPLEMENTASI</b>
        <p class="pt-2 pb-4">Implementasi dan pelatihan <br> produk oleh tim spesialis <br> Goodeva secara gratis.</p>
      </div>
      <div class="col-md-3 col-lg-3 col-xl-3 text-center">
        <img src="omsetku-asset/omsetku-icon-account.png" class="pb-2" alt=""><br>
        <b style="color: #00ABB6;">ACCOUNT MANAGER</b>
        <p class="pt-2 pb-4">Konsultasi solusi bisnis secara <br> personal bersama account <br> manager Goodeva.</p>
      </div>
      <div class="col-md-3 col-lg-3 col-xl-3 text-center">
        <img src="omsetku-asset/omsetku-icon-komisi.png" class="pb-2" alt=""><br>
        <b style="color: #02D394">KNOWLEDGE CENTER</b>
        <p class="pt-2 pb-4">Panduan produk Goodeva <br> yang lengkap dan tersedia <br> dalam berbagai format.</p>
      </div>
    </div>
    <div class="row gy-4 align-items-center features-item " data-aos="fade-up">
    </div>
  </div>
</section>

<!-- End Cara menjadi agen referral Omsetku mobile Section -->

<!-- ======= end Cara menjadi agen referral Omsetku Section ======= -->





<!-- --------------------------------------------------------------------------------------------------------------- -->


<!-- Beberapa partner kami desktop Section -->

<section id="features" class="features bg-white menu-1 desktop-show">
  <div class="container">
    <h2 class="title-features text-center" style="color: #212121;">Beberapa partner kami</h2>
    <div class="col-md-12 order-1 order-md-2 features-img-content">
      <img src="omsetku-asset/omsetku-beberapa2.png" class="img-when" alt="">
    </div>
    <div class="row gy-4 align-items-center features-item " data-aos="fade-up">
    </div>
  </div>
</section>

<!-- end Beberapa partner kami desktop Section -->



<!-- Beberapa partner kami mobile Section -->

<section id="" class="menu-1 mobile-show">
  <div class="container">
    <h2 class="title-features text-center" style="color: #212121;">Beberapa partner kami</h2>
    <div class="col-md-12 order-1 order-md-2 features-img-content">
      <div class="scroll-container mobile">
        <img src="omsetku-asset/partnership/omsetku-partner1-m.png" class="img-scroll" alt="">
        <img src="omsetku-asset/partnership/omsetku-partner2-m.png" class="img-scroll" alt="">
        <img src="omsetku-asset/partnership/omsetku-partner3-m.png" class="img-scroll" alt="">
        <img src="omsetku-asset/partnership/omsetku-partner4-m.png" class="img-scroll" alt="">
        <img src="omsetku-asset/partnership/omsetku-partner5-m.png" class="img-scroll" alt="">
        <img src="omsetku-asset/partnership/omsetku-partner6-m.png" class="img-scroll" alt="">
      </div>
    </div>
    <div class="row gy-4 align-items-center features-item " data-aos="fade-up">
    </div>
  </div>
</section>

<!-- end Beberapa partner kami mobile Section -->


<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


<!-- Form desktop Section -->

<section class="bg-note desktop-show">
  <div class="container">
    <div class="text-center mb-4">
      <h2 style="padding: 50px 0px; font-family: Roboto; font-size: 40px;font-style: normal; font-weight: 800; line-height: 50px">
        Daftar menjadi Affiliate Omsetku <br>
        dan klaim komisi sebanyak- banyaknya!
      </h2>
    </div>
    <div class="d-flex justify-content-center">
      <form action="https://omsetku-dev.globaldeva.com/send-email-affiliate" method="post" role="form" class="box-contact">
        <input type="hidden" name="_token" value="p2ud3PCB2naB4xrcquEYVkIChRlfNc09KSa38sU1">
        <div class="row w-100 mt-4">
          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama..." required>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12  form-group">
            <label>Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" placeholder="Masukan Nama Perusahaan..." required>
          </div>
        </div>
        <div class="row w-100 mt-4">
          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group">
            <label>Jumlah Karyawan</label>
            <select class="form-control" name="jum_karyawan" style="margin-top: 10px;" required>
              <option selected>-- Pilih Jumlah Karyawan --</option>
                <option value="Micro &lt; 50">Micro &lt; 50</option>
                <option value="Small 51-100">Small 51-100</option>
                <option value="Medium 101-300">Medium 101-300</option>
                <option value="large &gt; 300">large &gt; 300</option>
                            </select>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12  form-group">
            <label>Industri</label>
              <select class="form-control" name="industri" style="margin-top: 10px;" required>
                <option value="">-- Pilih Industri --</option>
                <option value="Agency, Media Entertainment">Agency, Media Entertainment</option>
                <option value="Agriculture, Forestry, Fishing and Hunting">Agriculture, Forestry, Fishing and Hunting</option>
                <option value="Architecture Interior Design">Architecture Interior Design</option>
                <option value="Arts, Entertainment, and Recreation">Arts, Entertainment, and Recreation</option>
                <option value="Automotive">Automotive</option>
                <option value="Bakery">Bakery</option>
                <option value="Beauty, Gym Salon">Beauty, Gym Salon</option>
                <option value="Beauty Salon">Beauty Salon</option>
                <option value="Cafe / Coffeeshop">Cafe / Coffeeshop</option>
                <option value="Catering Services">Catering Services</option>
                <option value="Chemical Materials">Chemical Materials</option>
                <option value="Construction Engineering">Construction Engineering</option>
                <option value="Consumer Retail Product / Offline Store">Consumer Retail Product / Offline Store</option>
                <option value="Education Services">Education Services</option>
                <option value="Energy, Oil Gas, Utilities">Energy, Oil Gas, Utilities</option>
                <option value="Export - Import">Export - Import</option>
                <option value="Event / Wedding Organizer">Event / Wedding Organizer</option>
                <option value="Factory / Manufacturing">Factory / Manufacturing</option>
                <option value="Financial Services - Banks">Financial Services - Banks</option>
                <option value="Financial Services - Insurance Multifinance">Financial Services - Insurance Multifinance</option>
                <option value="Financial Services - Technology">Financial Services - Technology</option>
                <option value="Food Beverages">Food Beverages</option>
                <option value="Government Institution">Government Institution</option>
                <option value="Health Care">Health Care</option>
                <option value="Hotels Leisure">Hotels Leisure</option>
                <option value="Household Services">Household Services</option>
                <option value="Manufacturing">Manufacturing</option>
                <option value="Mining">Mining</option>
                <option value="Manufacturing">Manufacturing</option>
                <option value="Non Profit Organization">Non Profit Organization</option>
                <option value="Online Retailer / Seller / Marketplace">Online Retailer / Seller / Marketplace</option>
                <option value="Outsourcing">Outsourcing</option>
                <option value="Printing">Printing</option>
                <option value="Professional Services - Law Firm, Audit Consultants">Professional Services - Law Firm, Audit Consultants</option>
                <option value="Real Estate / Property">Real Estate / Property</option>
                <option value="Repair Cleaning Service">Repair Cleaning Service</option>
                <option value="Restaurant">Restaurant</option>
                <option value="Technology - Hardware Equipments">Technology - Hardware Equipments</option>
                <option value="Technology - Services Consultants">Technology - Services Consultants</option>
                <option value="Technology - Startup Software">Technology - Startup Software</option>
                <option value="Telecommunication / Internet / Television Provider">Telecommunication / Internet / Television Provider</option>
                <option value="Telemarketing">Telemarketing</option>
                <option value="Tour Travel">Tour Travel</option>
                <option value="Trading - Distributor">Trading - Distributor</option>
                <option value="Trading - Retail">Trading - Retail</option>
                <option value="Trading - Supplier">Trading - Supplier</option>
                <option value="Transportation, Logistics Warehousing">Transportation, Logistics Warehousing</option>
                <option value="Others">Others</option>
            </select>
          </div>
        </div>

        <div class="row w-100 mt-4">
          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group">
            <label>Nomor Ponsel</label>
            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Masukan Nomor Telpon..." required>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group mt-md-0">
            <label>Jabatan</label>
            <select class="form-control" name="jabatan" style="" required>
              <option selected>-- Pilih Jabatan --</option>
              <option value="Staff">Staff</option>
              <option value="Team Leader">Team Leader</option>
              <option value="Supervisor">Supervisor</option>
              <option value="Manager">Manager</option>
              <option value="Direktur">Direktur</option>
              <option value="Pemilik Bisnis">Pemilik Bisnis</option>
            </select>
          </div>
        </div>
        <div class="row w-100 mt-4">
          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email..." required>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group mt-md-0">
            <label>Direferensikan Oleh (Jika Ada)</label>
            <input type="text" name="sumber_referensi" class="form-control" id="sumber-referensi" placeholder="" required>
          </div>
        </div>
        <div class="row w-100 mt-4">
          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group">
            <label>Identity number</label>
            <input type="number" name="number" class="form-control" id="number" placeholder="e.g. 098765456789" required>
          </div>
        </div>
        <div class="w-100 btn-submit mt-4">
          <button type="submit">Daftar</button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- End Form desktop Section -->


<!-- Form mobile Section -->
<section class="mobile-show form-judul">
    <div class="text-center mb-4 text-white">
      <h2  style="color: #000; text-align: center; font-family: Roboto; font-size: 26.65px; font-style: normal; font-weight: 800;line-height: 33.313px; margin-top:50px;">
        Daftar menjadi Affiliate <br> Omsetku dan klaim komisi sebanyak- banyaknya!
      </h2>
    </div>
</section>
<section class="bg-note mobile-show">
  <div class="container" style="
      display: flex;
      justify-content: center;
      flex-wrap: wrap;">
    <form action="https://omsetku-dev.globaldeva.com/send-email-affiliate" method="post" role="form" class="box-contact">
      <input type="hidden" name="_token" value="p2ud3PCB2naB4xrcquEYVkIChRlfNc09KSa38sU1">

        <div class="mt-3 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group">
          <label class="label-tb-m">Nama Lengkap</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama..." required>
        </div>

        <div class=" mt-3 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group">
          <label class="label-tb-m" >Nomor Ponsel</label>
          <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Masukan Nomor Telpon..." required>
        </div>

        <div class="mt-3 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group">
          <label class="label-tb-m">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email..." required>
        </div>

        <div class="mt-3 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group">
          <label class="label-tb-m" >Domisili</label>
          <select class="form-control" name="jum_karyawan" required>
            <option selected>-- Pilih Domisili --</option>
              <option value="Jawa">Jawa</option>
              <option value="Kalimantan">Kalimantan</option>
              <option value="Kalimantan">Kalimantan</option>
          </select>
        </div>

        <div class="mt-3 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12  form-group">
          <label class="label-tb-m">Nama Perusahaan</label>
          <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" placeholder="Masukan Nama Perusahaan..." required>
        </div>

        <div class="mt-3 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group mt-md-0">
          <label class="label-tb-m" >Jabatan</label>
          <select class="form-control" name="jabatan" required>
            <option selected>-- Pilih Jabatan --</option>
            <option value="Staff">Staff</option>
            <option value="Team Leader">Team Leader</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Manager">Manager</option>
            <option value="Direktur">Direktur</option>
            <option value="Pemilik Bisnis">Pemilik Bisnis</option>
          </select>
        </div>

        <div class="mt-3 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group">
          <label class="label-tb-m">Nama Pemilik Rekening</label>
          <input type="text" name="name_rekening" class="form-control" id="name_rekening" placeholder="Masukan Nama..." required>
        </div>
        
        <div class="mt-3 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group">
          <label class="label-tb-m" >Nomor Rekening</label>
          <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Masukan Nomor Rekening..." required>
        </div>

        <div class="mt-3 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12  form-group">
          <label>Nama Bank</label>
          <input type="text" name="nama_bank" class="form-control" id="nama_bank" placeholder="Masukan Nama Bank..." required>
        </div>

        <div class=" mt-3 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group mt-md-0">
          <label class="label-tb-m" >Jenis Identitas</label>
          <select class="form-control" name="jenis_identitas" required>
            <option selected>-- Pilih Jenis Identitas --</option>
            <option value="KTP">KTP</option>
            <option value="SIM">SIM</option>
          </select>
        </div>

        <div class=" mt-3 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group">
          <label class="label-tb-m" >Nomor Identitas</label>
          <input type="text" name="no_identitas" class="form-control" id="no_identitas" placeholder="Masukan Nomor Identitas..." required>
        </div> 

        <div class="mt-3 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 form-group mt-md-0">
          <label class="label-tb-m" >Direferensikan Oleh (Jika Ada)</label>
          <input type="text" name="sumber_referensi" class="form-control" id="sumber-referensi" placeholder="" required>
        </div>

      <div class="w-100 btn-submit mt-4">
        <button type="submit">Daftar</button>
      </div>

    </form>

  </div>
</section>


<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->


@endsection