@extends('layouts.layout-v2_4')





@section('title', 'Sales Automation')





@section('css-after')

<style>
  .hero {
    background-image: url("public/assets/img/omsetku-hero-section-bg-min1.png");
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
    background-image: url("public/assets/img/omsetku-bg-circle-orange.png") !important;
  }

  .bg-res5 {
    background-image: url("public/assets/img/omsetku-bg-cicle-purple.png") !important;
  }

  .bg-hero {
    background: linear-gradient(180deg, #EDF2FE 0%, rgba(217, 217, 217, 0.00) 110.02%) !important;
  }

  .bg-blue-img {
    background-image: url("public/assets/img/omsetku-section-bg-1.png") !important;
    background-size: cover;
  }

  .bg-cs {
    background-image: url("public/assets/img/omsetku-cs-bg.png") !important;
    background-size: contain;
  }

  .bg-fff {
    background: #fff;
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

  /* section.features,
  section.service-details {

    padding: 200px 0px;
  } */

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

  .c-000 {
    color: #000 !important;
  }

  .hero {
    width: 100%;
    min-height: 50vh;
    /* background: transparent !important; */
    /* background-size: auto; */
    /* background-position: none; */
    /* position: relative; */
    /* padding: 0px 0 0 0 !important; */
    /* color: rgba(255, 255, 255, 0.8); */
    height: 800px;
  }

  .min-h-desk1 {
    min-height: 60vh;
  }

  .min-h-img-desk1 {
    min-height: 35vh;
  }

  .h-img-desk1 {
    height: 40vh;
  }

  .obj-fit-cover {
    object-fit: cover;
  }

  .brd-r-desk1 {
    border-radius: 7px;
  }

  .brd-r-desk2 {
    border-radius: 20px;
  }

  .brd-button-desk1 {
    border-radius: 7px;
    border: 3px solid #fff;
  }

  .brd-button-desk2 {
    border-radius: 7px;
    border: 3px solid #000;
  }

  .min-w-desk1 {
    min-width: 12vw;
  }

  .w-icon-desk1 {
    width: 2vw;
  }

  .w-icon-mob1 {
    width: 5vw;
  }

  .w-card-desk1 {
    width: 85%;
  }

  .w-img-desk1 {
    width: 95%;
  }

  .w-10 {
    width: 10%;
  }

  .h-100 {
    height: 100%;
  }

  .c-1E3168 {
    color: #1E3168;
  }

  .fs-desk1 {
    font-size: 16px;
  }

  .pos-absolute {
    position: absolute;
  }

  .arrow-slide {
    font-size: 0;
    line-height: 0;
    display: block;
    padding: 0;
    cursor: pointer;
    color: transparent;
    border: none;
    outline: 0;
    background: 0 0;
  }

  .mr-3 {
    margin-right: 1rem;
  }

  .pl-5 {
    padding-left: 3rem;
  }

  /*--------- responsive laptop/pc ---------*/
  /* 
    desktop zoom custom1   

    main width: 1367px;
    */
  @media screen and (min-width: 1321px) and (max-width: 1380px) {

    .fs-desk2 {
      font-size: 39px;
    }

    .banner-text .title-text {
      font-size: 39px !important;
    }

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

    _::-webkit-full-page-media,
    _:future,
    :root .fs-desk1 {
      font-size: 14px;
    }

    .fs-desk1 {
      font-size: 14px;
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
    :root .fs-desk1 {
      font-size: 14px;
    }

    .fs-desk1 {
      font-size: 14px;
    }

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
      height: 765px;
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
      padding: 230px 0px;
    }

    .bg-note {
      width: 100%;
      min-height: 50vh;
      /* background-image: url("../img/Group_28-min.png") !important; */
      background-image: url("public/assets/img/omsetku-hero-section-bg-min1.png") !important;
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
  @media screen and (min-width: 1098px) and (max-width: 1300px) {

    _::-webkit-full-page-media,
    _:future,
    :root p {
      font-size: 14px !important;
    }

    p {
      font-size: 14px !important;
    }

    _::-webkit-full-page-media,
    _:future,
    :root h1 {
      font-size: 35px !important;
    }

    h1 {
      font-size: 35px !important;
    }

    .hero {
      width: 100%;
      min-height: 50vh;
      background-image: url("public/assets/img/omsetku-hero-section-bg-min1.png") !important;
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

    .hero p {
      font-size: 16px;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .img-girl {

      width: 365px !important;

    }

    .bg-note {
      background-image: url("{{asset ('public/assets/img/omsetku-bg-circle.webp')}}") !important;
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

  /*--- media for set all scale in mobile ---*/
  @media screen and (max-width: 475px) {
    .pt-mob1 {
      padding-top: 7rem;
    }

    .banner-text .title-text {
      /* text-align: left; */
      /* margin: 0px; */
      font-size: 32px !important;
    }

    .bg-cs {
      background-size: cover !important;
    }
  }

  /* phone mode 1 */
  @media screen and (min-width: 459px) and (max-width: 475px) {

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
  }

  /* phone mode 1 */
  @media screen and (min-width: 428px) and (max-width: 458px) {

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
  }


  /* phone model 4 */
  @media screen and (min-width: 395px) and (max-width: 427px) {

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
      /* margin-top: 210px !important; */
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
  @media screen and (min-width: 376px) and (max-width: 394px) {

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

  /* phone model 6 */
  @media screen and (min-width: 361px) and (max-width: 375px) {
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

  /* phone model 7 */
  @media screen and (min-width: 321px) and (max-width: 360px) {

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

      margin: 8px 0px;

    }



    .banner-text .title-text {


      line-height: 26px;

      font-size: 19px;

    }

  }

  /*--------- end responsive handphone ---------*/
</style>

@endsection



@section('konten')



<!-- ======= Hero Section ======= -->
<!-- Hero desktop Section -->
<section id="heros" class="hero d-flex align-items-center desktop-show">

  <div class="content-hero">

    <div class="row">
      <div class="col-6 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center banner-text">
        <div class="text-hero">

          <h1 class="title-text">
            Ribuan Sales dan Bisnis Telah <br>
            Menggunakan Aplikasi Omsetku
          </h1>

          <p class="content-text">
            Tingkatkan penjualan Anda dengan aplikasi Omsetku. <br>
            Download Omsetku sekarang gratis!
          </p>
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex">
              <a href="{{ url('login') }}" target="_blank" class="mx-2 c-000 d-flex align-items-center justify-content-center p-2 brd-button-desk1 min-w-desk1 bg-fff fw-700">

                Coba Gratis

              </a>

              <a href="{{ url('contact') }}" target="_blank" class="mx-2 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 min-w-desk1">

                Coba Demo

              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center banner-text">
        <div class="img-hero">
          <img src="{{ asset('public/asset-home/omsetku-banner-dashboard-v2.png') }}" alt="" srcset="" class="w-100">
        </div>
      </div>
    </div>
  </div>



</section>
<!-- End Hero desktop Section -->


<!-- Hero mobile Section -->
<section id="herosmobile" class="bg-hero d-flex align-items-center pt-mob1 mobile-show">

  <div class="content-hero">

    <div class="row h-100">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center banner-text">
        <div class="img-hero d-flex justify-content-center">
          <img src="{{ asset('public/asset-home/omsetku-banner-dashboard-mobile.png') }}" alt="" srcset="" class="w-mob1">
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center banner-text px-4">
        <div class="text-hero">

          <h1 class="title-text mt-3 fw-700 c-000">
            Ribuan Sales dan Bisnis <br>
            Telah Menggunakan <br>
            Aplikasi Omsetku
          </h1>

          <p class="content-text c-000">
            Tingkatkan penjualan Anda dengan aplikasi <br>
            Omsetku. Download Omsetku sekarang <br>
            gratis!
          </p>
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <a href="{{ url('login') }}" target="_blank" class="c-000 d-flex align-items-center justify-content-center p-2 brd-button-desk2 w-100 fw-700 mb-3">
                Coba Gratis
              </a>

              <a href="{{ url('contact') }}" target="_blank" class="c-000 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk2 w-100">
                Coba Demo
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- end Hero mobile Section -->
<!-- ======= end Hero Section ======= -->



<!-- ======= Client Omsetku Section ======= -->
<!-- desktop Section -->
<section id="client" class="about menu-1 py-5 desktop-show">

  <div class="container">

    <div class="row">

      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="title-section text-center">
          <h3 class="fw-700">
            Client yang menggunakan Omsetku
          </h3>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="list-client">
          <img src="{{ asset('public/asset-home/omsetku-client-logo.png') }}" alt="" srcset="" class="w-100">
        </div>
      </div>

    </div>

  </div>

</section>
<!-- End desktop Section -->


<!-- mobile Section -->
<section id="clientmobile" class="about menu-1 mobile-show">

  <div class="container">

    <div class="row">

      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="title-section">
          <h3 class="fw-700 text-center">
            Client yang menggunakan <br>
            Omsetku
          </h3>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="list-client">
          <img src="{{ asset('public/asset-home/omsetku-client-logo-mobile.png') }}" alt="" srcset="" class="w-100">
        </div>
      </div>

    </div>

  </div>

</section>

<!-- End mobile Section -->
<!-- ======= End Client Omsetku Section ======= -->



<!-- ======= Acordion Section ======= -->
<?php
$baseFeature = [
  [
    'title' => 'Sales Order, Quotation, Invoice',
    'icon' => 'omsetku-accordion-on-transaction.png',
    'img' => 'omsetku-img-dashboard-accordion.png',
    'description' =>
    '
      Buat Sales order, Quotation, Invoice yang profesional <br>
      dengan mudah hanya dengan 1 aplikasi.
      ',
    'descriptionmob' =>
    '
      Buat Sales order, Quotation, Invoice yang profesional 
      dengan mudah hanya dengan 1 aplikasi.
      ',
  ],
  [
    'title' => 'Market Insight',
    'icon' => 'omsetku-accordion-on-market-insight2.png',
    'img' => 'omsetku-accordion-img-market-insight.png',
    'description' =>
    '
    Informasi mengenai data pasar yaitu, Top Transaksi, <br>
    Produk terlaris, dan Diagram frekuensi transaksi
      ',
    'descriptionmob' =>
    '
    Informasi mengenai data pasar yaitu, Top Transaksi,
    Produk terlaris, dan Diagram frekuensi transaksi
      ',
  ],
  [
    'title' => 'Target Personal',
    'icon' => 'omsetku-accordion-on-prospect-monitor.png',
    'img' => 'omsetku-accordion-img-prospect-monitor.png',
    'description' =>
    '
    Jumlah penjualan yang ditetapkan sebagai tujuan yang <br>
    harus dicapai oleh sales dalam periode waktu tertentu
      ',
    'descriptionmob' =>
    '
    Jumlah penjualan yang ditetapkan sebagai tujuan yang
    harus dicapai oleh sales dalam periode waktu tertentu
      ',
  ],
  [
    'title' => 'Group Sales',
    'icon' => 'omsetku-accordion-on-group-sales.png',
    'img' => 'omsetku-accordion-img-group-sales.png',
    'description' =>
    '
    Merupakan sebuah kumpulan dari beberapa sales <br> 
    dengan target tertentu yang sudah ditentukan 
      ',
    'descriptionmob' =>
    '
    Merupakan sebuah kumpulan dari beberapa sales 
    dengan target tertentu yang sudah ditentukan 
      ',
  ],
  [
    'title' => 'Sales Monitoring',
    'icon' => 'omsetku-accordion-on-sales-monitoring.png',
    'img' => 'omsetku-accordion-img-sales-monitoring.png',
    'description' =>
    '
    Fitur untuk monitoring aktivitas sales secara realtime.
      ',
    'descriptionmob' =>
    '
    Fitur untuk monitoring aktivitas sales secara realtime.
      ',
  ],
  [
    'title' => 'Dashboard Analytics',
    'icon' => 'omsetku-accordion-on-dashboard-analytic.png',
    'img' => 'omsetku-img-dashboard-accordion.png',
    'description' =>
    '
    visualisasi data interaktif untuk menganalisis <br>
    pencapaian sales di perusahaaan.
      ',
    'descriptionmob' =>
    '
    visualisasi data interaktif untuk menganalisis
    pencapaian sales di perusahaaan.
      ',
  ],
  [
    'title' => 'Sales Automations',
    'icon' => 'omsetku-accordion-on-sales-automation.png',
    'img' => 'omsetku-accordion-img-sales-automation.png',
    'description' =>
    '
    berisi informasi rinci tentang data sales, <br>
    dan pendaftaran data sales baru
      ',
    'descriptionmob' =>
    '
    berisi informasi rinci tentang data sales,
    dan pendaftaran data sales baru
      ',
  ],
  [
    'title' => 'Customer Relationship Management',
    'icon' => 'omsetku-accordion-on-crm2.png',
    'img' => 'omsetku-accordion-img-crm.png',
    'description' =>
    '
    pendekatan bisnis yang menggunakan teknologi dan <br>
    proses untuk mengelola dan meningkatkan <br>
    hubungan dengan pelanggan,
      ',
    'descriptionmob' =>
    '
    pendekatan bisnis yang menggunakan teknologi dan
    proses untuk mengelola dan meningkatkan
    hubungan dengan pelanggan,
      ',
  ],
];
?>

<!-- desktop Section -->
<section id="acordion" class="features menu-1 py-5 desktop-show">

  <div class="container">

    <div class="title-section">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
          <h1 class="fw-700">
            Selalu Curiga Sama Performa Sales? <br>
            Ingin Pantau Sales Auto Pilot? Coba Omsetku!
          </h1>
          <p class="mb-0">
            Sistem kami membantu bisnis untuk menganalisis pekerja penjualan dengan Big Data,kami dapat <br>
            menganalisis perilaku dan mendorong mereka untuk mencapai target penjualan mereka
          </p>
        </div>
      </div>
    </div>
    <div class="content-section mt-5">
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
          <!-- accordion here -->
          <div class="list-feature">
            <div class="row">
              @for($idx = 0; $idx < count($baseFeature); $idx++) <!-- comment -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12" onmouseover="showDescription('{{ $idx }}', '{{ $baseFeature[$idx]['img'] }}')" onmouseleave="hideDescription('{{ $idx }}', '{{ $baseFeature[$idx]['img'] }}')">
                  <div class="item-feature">
                    <div class="title-feature">
                      <h5 class="fw-700">
                        <img src="{{ asset('public/asset-home/'.$baseFeature[$idx]['icon']) }}" alt="" srcset="" class="w-icon-desk1"> {{ $baseFeature[$idx]['title'] }}
                      </h5>
                    </div>
                    <div class="description-feature-{{ $idx }} d-none h-0" style="transition: height .35s ease-in-out;">
                      <p>
                        <?php echo $baseFeature[$idx]['description'] ?>
                      </p>
                    </div>
                  </div>
                  <hr>
                </div>
                @endfor
            </div>
          </div>
          <!-- {{-- <div class="accordion accordion-flush" id="accordionFlushExample"> -->
          <!-- @for($idx = 0; $idx < 8; $idx++) comment -->
          <!-- <div class="accordion-item"> -->
          <!-- <h2 class="accordion-header" id="flush-heading-{{$idx}}"> -->
          <!-- <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-{{$idx}}" aria-expanded="false" aria-controls="flush-collapse-{{$idx}}"> -->
          <!-- Accordion Item #1 -->
          <!-- </button> -->
          <!-- </h2> -->
          <!-- <div id="flush-collapse-{{$idx}}" class="accordion-collapse collapse" aria-labelledby="flush-heading-{{$idx}}" data-bs-parent="#accordionFlushExample"> -->
          <!-- <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div> -->
          <!-- </div> -->
          <!-- </div> -->
          <!-- @endfor -->
          <!-- </div> --}} -->
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex align-items-center">
          <div class="img-acordion">
            <img src="{{ asset('public/asset-home/omsetku-img-dashboard-accordion.png') }}" alt="" srcset="" class="w-100">
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
<!-- end Features desktop Section -->

<!-- mobile Section -->
<section id="acordionmobile" class="py-5 mobile-show">

  <div class="container">

    <div class="title-section">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
          <h1 class="fw-700">
            Selalu Curiga Sama Performa Sales? <br>
            Ingin Pantau Sales Auto Pilot? Coba Omsetku!
          </h1>
          <p class="mb-0">
            Sistem kami membantu bisnis untuk menganalisis pekerja penjualan dengan Big Data,kami dapat menganalisis perilaku dan mendorong mereka untuk mencapai target penjualan mereka
          </p>
        </div>
      </div>
    </div>
    <div class="content-section mt-4">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <!-- accordion here -->
          <div class="list-feature">
            <div class="row">
              @for($idx = 0; $idx < count($baseFeature); $idx++) <!-- comment -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12" onmouseover="showDescription('{{ $idx }}', '{{ $baseFeature[$idx]['img'] }}')" onmouseleave="hideDescription('{{ $idx }}', '{{ $baseFeature[$idx]['img'] }}')">
                  <div class="item-feature">
                    <div class="title-feature">
                      <h5 class="fw-700">
                        <img src="{{ asset('public/asset-home/'.$baseFeature[$idx]['icon']) }}" alt="" srcset="" class="w-icon-mob1"> {{ $baseFeature[$idx]['title'] }}
                      </h5>
                    </div>
                    <div class="description-feature-{{ $idx }} d-none h-0" style="transition: height .35s ease-in-out;">
                      <p>
                        <?php echo $baseFeature[$idx]['descriptionmob'] ?>
                      </p>
                    </div>
                  </div>
                  <hr>
                </div>
                @endfor
            </div>
          </div>
        </div>
        <!-- <div class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex align-items-center"> -->
        <!-- <div class="img-acordion"> -->
        <!-- <img src="{{ asset('public/asset-home/omsetku-img-dashboard-accordion.png') }}" alt="" srcset="" class="w-100"> -->
        <!-- </div> -->
        <!-- </div> -->
      </div>
    </div>

  </div>

</section>
<!-- end Features mobile Section -->
<!-- ======= end Acordion Section ======= -->



<!-- ======= Question Section ======= -->
<!-- desktop section -->
<section id="question" class="features py-5 desktop-show">
  <div class="container">
    <div class="question-main bg-blue-img brd-r-desk2">
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex justify-content-center align-items-center">
          <div class="text-content pl-5">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <h3 class="fw-700 text-white fs-desk2">
                  Punya pertanyaan ? <br>
                  kami siap membantu 24 jam
                </h3>
                <p class="text-white">
                  Dapatkan informasi lebih mengenai omsetku aplikasi.
                </p>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex mt-3">
                <a href="{{ url('contact') }}" class="mx-2 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 min-w-desk1">Hubungi Kami</a>
                <a href="{{ url('login') }}" class="mx-2 c-000 d-flex align-items-center justify-content-center p-2 brd-button-desk1 min-w-desk1 bg-fff fw-700">Coba Gratis</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
          <div class="img-question d-flex justify-content-center">
            <img src="{{ asset('public/asset-home/omsetku-women-use-laptop-2.png') }}" alt="" srcset="" class="w-75">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end desktop section -->

<!-- mobile section -->
<section id="questionmobile" class="py-5 mobile-show">
  <div class="container">
    <div class="question-main bg-blue-img brd-r-desk2">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center align-items-center">
          <div class="text-content px-5 pt-5 pb-3">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <h3 class="fw-700 text-white text-center">
                  Punya pertanyaan ? <br>
                  kami siap membantu 24 jam
                </h3>
                <p class="text-white text-center">
                  Dapatkan informasi lebih mengenai omsetku aplikasi.
                </p>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                <a href="{{ url('login') }}" class="mx-2 c-000 d-flex align-items-center justify-content-center p-2 brd-button-desk1 w-100 bg-fff fw-700 mb-3">Coba Gratis</a>
                <a href="{{ url('contact') }}" class="mx-2 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 w-100">Hubungi Kami</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="img-question d-flex justify-content-center">
            <img src="{{ asset('public/asset-home/omsetku-women-use-laptop-2.png') }}" alt="" srcset="" class="w-75">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end mobile section -->
<!-- ======= End Question Section ======= -->



<!-- ======= Keunggulan Omsetku Section ======= -->
<!-- desktop section -->
<section id="value" class="features menu-1 py-5 desktop-show">
  <div class="container">
    <div class="title-section">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
          <h1 class="fw-800">
            Fitur unggulan pada Omsetku
          </h1>
          <p class="">
            Kami melayani teknologi canggih untuk mengintegrasikan semua data penjualan yang kemudian <br>
            diproses dengan system kami dan ditampilkan pada platform terintegrasi untuk membantu <br>
            memantau aktivitas penjualan sales.
          </p>
        </div>
      </div>
    </div>
    <div class="content-section">
      <div class="list-feature">
        <div class="row">
          <div class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex align-items-center justify-content-end">
            <div class="img-feature d-flex justify-content-end">
              <img src="{{ asset('public/asset-home/omsetku-target-penjualan-img2.png') }}" alt="" srcset="" class="w-75">
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex align-items-center">
            <div class="the-feature ">
              <div class="title-feature">
                <h2 class="fw-700 c-1E3168">
                  Target Penjualan
                </h2>
              </div>
              <div class="subtitle-feature">
                <h4 class="fw-700 c-1E3168">
                  Pantau target bulanan hingga tahunan
                </h4>
              </div>
              <div class="description-feature">
                <p>
                  Identifikasi target personal sales mu. <br>
                  Omsetku memudahkan kamu dengan menyediakan daftar <br>
                  sales yang telah ada beserta list target masing - masing <br>
                  sales.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="list-feature">
        <div class="row">
          <div class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex align-items-center justify-content-end">
            <div class="the-feature">
              <div class="title-feature">
                <h2 class="fw-700 c-1E3168">
                  Sales Order
                </h2>
              </div>
              <div class="subtitle-feature">
                <h4 class="fw-700 c-1E3168">
                  Permudah pekerjaan dengan sales order
                </h4>
              </div>
              <div class="description-feature">
                <p>
                  Identifikasi pelanggan dan Sales yang melakukan pemesanan. <br>
                  Omsetku memudahkan kamu dengan menyediakan daftar <br>
                  pelanggan yang telah ada sebelumnya atau memungkinkan <br>
                  penambahan pelanggan baru.
                </p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-6">
            <div class="img-feature d-flex align-items-center">
              <img src="{{ asset('public/asset-home/omsetku-target-penjualan-img3.png') }}" alt="" srcset="" class="w-75">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- end desktop section -->


<!-- mobile section -->
<section id="valuemobile" class="py-5 mobile-show">
  <div class="container">
    <div class="title-section">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
          <h1 class="fw-800">
            Fitur unggulan pada Omsetku
          </h1>
          <p class="">
            Kami melayani teknologi canggih untuk mengintegrasikan semua data penjualan yang kemudian
            diproses dengan system kami dan ditampilkan pada platform terintegrasi untuk membantu
            memantau aktivitas penjualan sales.
          </p>
        </div>
      </div>
    </div>
    <div class="content-section">
      <div class="list-feature">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center justify-content-center">
            <div class="img-feature d-flex justify-content-center">
              <img src="{{ asset('public/asset-home/omsetku-target-penjualan-img2.png') }}" alt="" srcset="" class="w-75">
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
            <div class="the-feature ">
              <div class="title-feature">
                <h2 class="fw-700 c-1E3168">
                  Target Penjualan
                </h2>
              </div>
              <div class="subtitle-feature">
                <h4 class="fw-700 c-1E3168">
                  Pantau target bulanan hingga tahunan
                </h4>
              </div>
              <div class="description-feature">
                <p>
                  Identifikasi target personal sales mu. Omsetku memudahkan kamu dengan menyediakan daftar sales yang telah ada beserta list target masing - masing sales.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="list-feature">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="img-feature d-flex justify-content-center">
              <img src="{{ asset('public/asset-home/omsetku-target-penjualan-img3.png') }}" alt="" srcset="" class="w-75">
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center justify-content-center">
            <div class="the-feature">
              <div class="title-feature">
                <h2 class="fw-700 c-1E3168">
                  Sales Order
                </h2>
              </div>
              <div class="subtitle-feature">
                <h4 class="fw-700 c-1E3168">
                  Permudah pekerjaan dengan sales order
                </h4>
              </div>
              <div class="description-feature">
                <p class="mb-0">
                  Identifikasi pelanggan dan Sales yang melakukan pemesanan. Omsetku memudahkan kamu dengan menyediakan daftar pelanggan yang telah ada sebelumnya atau memungkinkan penambahan pelanggan baru.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
<!-- end mobile section -->
<!-- ======= End Keunggulan Omsetku Section ======= -->


<!-- ======= Value Omsetku Section ======= -->
<?php
$baseValue = [
  [
    'title' => 'CUSTOMER SERVICE',
    'color-text' => '#7F1AFF',
    'icon' => 'omsetku-customer-service.png',
    'description' => '
      Tim support yang responsif & selalu <br> 
      siap memberikan solusi untuk <br>
      masalah Anda.
      '
  ],
  [
    'title' => 'IMPLEMENTASI',
    'color-text' => '#1966FF',
    'icon' => 'omsetku-implementation.png',
    'description' => '
      Implementasi dan pelatihan <br>
      produk oleh tim spesialis <br>
      Omsetku secara gratis.
      '
  ],
  [
    'title' => 'ACCOUNT MANAGER',
    'color-text' => '#00ABB6',
    'icon' => 'omsetku-account-manager.png',
    'description' => '
      Konsultasi solusi bisnis secara <br>
      personal bersama account <br>
      manager Omsetku.
      '
  ],
  [
    'title' => 'KNOWLEDGE CENTER',
    'color-text' => '#02D394',
    'icon' => 'omsetku-knowledge-center.png',
    'description' => '
      Panduan produk Omsetku <br>
      yang lengkap dan tersedia <br>
      dalam berbagai format.
      '
  ],
];
?>

<!-- desktop section -->
<section id="value" class="py-5 desktop-show">
  <div class="container">
    <div class="title-section">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
          <h1 class="fw-800">
            Value yang omsetku berikan buat kamu
          </h1>
          <p class="">
            Kemudahan dan kenyamanan dalam penggunaan produk melalui layanan <br>
            purna jual yang terbaik dan terlengkap di kelasnya.
          </p>
        </div>
      </div>
    </div>
    <div class="card-section mt-3">
      <div class="row">
        @for($idx = 0; $idx < count($baseValue); $idx++) <!-- comment -->
          <div class="col-3 col-sm-3 col-md-3 col-lg-3">
            <div class="card-data text-center">
              <img src="{{ asset('public/asset-home/'.$baseValue[$idx]['icon']) }}" alt="" srcset="" class="w-25">
              <h6 class="fw-800" style="color: <?php echo $baseValue[$idx]['color-text'] ?>;">
                {{ $baseValue[$idx]['title'] }}
              </h6>
              <p>
                <?php echo $baseValue[$idx]['description'] ?>
              </p>
            </div>
          </div>
          @endfor
      </div>
    </div>
  </div>
</section>
<!-- end desktop section -->


<!-- mobile section -->
<section id="valuemobile" class="features menu-1 py-5 mobile-show">
  <div class="container">
    <div class="title-section">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
          <h1 class="fw-800">
            Value yang omsetku berikan buat kamu
          </h1>
          <p class="">
            Kemudahan dan kenyamanan dalam penggunaan produk melalui layanan purna jual yang terbaik dan terlengkap di kelasnya.
          </p>
        </div>
      </div>
    </div>
    <div class="card-section">
      <div class="row">
        @for($idx = 0; $idx < count($baseValue); $idx++) <!-- comment -->
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card-data text-center">
              <img src="{{ asset('public/asset-home/'.$baseValue[$idx]['icon']) }}" alt="" srcset="" class="w-25">
              <h6 class="fw-800" style="color: <?php echo $baseValue[$idx]['color-text'] ?>;">
                {{ $baseValue[$idx]['title'] }}
              </h6>
              <p>
                <?php echo $baseValue[$idx]['description'] ?>
              </p>
            </div>
          </div>
          @endfor
      </div>
    </div>
  </div>
</section>
<!-- end mobile section -->
<!-- ======= End Value Omsetku Section ======= -->



<!-- ======= Customer Service Omsetku Section ======= -->
<!-- desktop section -->
<section id="CustomerService" class="features menu-1 py-0 desktop-show">
  <div class="content-section min-h-desk1 bg-cs py-5 d-flex justify-content-center align-items-center">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <h1 class="text-white">
          24/7 Asisten kami selalu siap <br>
          membantu
        </h1>
        <p class="text-white">
          Pastikan bisnis kamu berjalan dengan baik dengan bantuan <br>
          dari dashboard dan aplikasi kami
        </p>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
        <a href="//wa.me/+628818850663" class="mx-2 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 min-w-desk1"><img src="{{ asset('public/assets/img/omsetku-wa-icon.png') }}" alt="" srcset="" class="">Whatsapp Sales</a>
        <a href="{{ url('contact') }}" class="mx-2 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 min-w-desk1">Jadwalkan Demo</a>
      </div>
    </div>
  </div>
</section>
<!-- end desktop section -->


<!-- mobile section -->
<section id="CustomerServicemobile" class="py-5 mobile-show">
  <div class="content-section min-h-desk1 bg-cs py-5 d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
          <h1 class="text-white">
            24/7 Asisten kami selalu siap
            membantu
          </h1>
          <p class="text-white">
            Pastikan bisnis kamu berjalan dengan baik dengan bantuan dari dashboard dan aplikasi kami
          </p>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <a href="//wa.me/+628818850663" class="text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 w-100 mb-3"><img src="{{ asset('public/assets/img/omsetku-wa-icon.png') }}" alt="" srcset="" class="">Whatsapp Sales</a>
          <a href="{{ url('contact') }}" class="text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 w-100">Jadwalkan Demo</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end mobile section -->
<!-- ======= end Customer Service Omsetku Section ======= -->



<!-- ======= about Omsetku from user Section ======= -->
<?php
$baseTestimoni = [
  [
    'img' => 'omsetku-testimoni-img1.png',
    'description' => '
      “Omsetku aplikasi yang sangat membantu untuk
      perkembangan sales di tempat usaha saya. dengan
      fitur crm yang sangat memudahkan menganalisa setiap dat dari setiap
      sales dan penjualan.”
      ',
    'name' => 'Abdel Muzakki',
  ],
  [
    'img' => 'omsetku-testimoni-img2.png',
    'description' => '
      “Omsetku aplikasi yang sangat membantu untuk
      perkembangan sales di tempat usaha saya. dengan
      fitur crm yang sangat memudahkan menganalisa setiap dat dari setiap
      sales dan penjualan.”
      ',
    'name' => 'Abdel Muzakki',
  ],
  [
    'img' => 'omsetku-testimoni-img1.png',
    'description' => '
      “Omsetku aplikasi yang sangat membantu untuk
      perkembangan sales di tempat usaha saya. dengan
      fitur crm yang sangat memudahkan menganalisa setiap dat dari setiap
      sales dan penjualan.”
      ',
    'name' => 'Abdel Muzakki',
  ]
];
?>

<!-- desktop section -->
<section id="aboutOmsetkuUser" class="features menu-1 py-5 desktop-show">
  <div class="content-section">
    <div class="row">
      <div class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex justify-content-center align-items-center">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="title-section">
              <h1>
                Apa yang user katakan <br>
                tentang Omsetku?
              </h1>
              <p>
                yang user katakan ketika menggunakan aplikasi dan <br>
                dahboard dari omsetku
              </p>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-12">
            <div class="arrow-slide d-flex">
              <button class="arrow-slide mr-3" id="slide-left" onclick="slideTo('left')">
                <img src="{{ asset('public/omsetku-asset/omsetku-arrow-left.png') }}" alt="" class="w-icon-desk1">
              </button>
              <button class="arrow-slide" id="slide-right" onclick="slideTo('right')">
                <img src="{{ asset('public/omsetku-asset/omsetku-arrow-right.png') }}" alt="" class="w-icon-desk1">
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-6 col-lg-6">
        <!-- image slider here -->
        <div class="slider-testimoni">
          @for($inx = 0; $inx < count($baseTestimoni); $inx++) <!-- comment -->
            <div class="item-slider w-card-desk1 d-flex justify-content-center align-items-center">
              <div class="deskripsi-text pos-absolute w-10">
                <div class="quotes-text">
                  <p class="text-white">
                    <?php echo $baseTestimoni[$inx]['description'] ?>
                  </p>
                </div>
                <div class="name-text">
                  <p class="text-white">
                    {{ $baseTestimoni[$inx]['name'] }}
                  </p>
                </div>
              </div>
              <img src="{{ asset('public/asset-home/'.$baseTestimoni[$inx]['img']) }}" alt="" srcset="" class="w-img-desk1 min-h-img-desk1 h-img-desk1 obj-fit-cover">
            </div>
            @endfor
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end desktop section -->
<!-- ======= end about Omsetku from user Section ======= -->



<!-- ======= Ready To Change Section ======= -->
<!-- desktop section -->
<section id="readyToChange" class="features py-5 desktop-show">
  <div class="container">
    <div class="question-main bg-blue-img brd-r-desk2">
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
          <div class="img-question d-flex justify-content-center">
            <img src="{{ asset('public/asset-home/omsetku-women-user-ready-2.png') }}" alt="" srcset="" class="w-50">
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex justify-content-center align-items-center">
          <div class="text-content px-5">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <h3 class="fw-700 text-white fs-desk2">
                  Siap melakukan perubahan ?
                </h3>
                <p class="text-white fs-desk1">
                  Tingkatkan efisiensi, produktivitas dan kinerja bisnis dengan berbagai <br>
                  produk Omsetku yang telah digunakan oleh puluhan ribu pelaku usaha <br>
                  di Indonesia.
                </p>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex">
                <a href="//wa.me/+628818850663" class="mx-2 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 min-w-desk1"><img src="{{ asset('public/assets/img/omsetku-wa-icon.png') }}" alt="" srcset="" class="">Whatsapp Sales</a>
                <a href="{{ url('contact') }}" class="mx-2 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 min-w-desk1">Jadwalkan Demo</a>
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
<section id="readyToChangemobile" class="py-5 mobile-show">
  <div class="container">
    <div class="question-main bg-blue-img brd-r-desk2">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center align-items-center">
          <div class="text-content px-5 pt-5 pb-3">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h3 class="fw-700 text-white">
                  Siap melakukan perubahan ?
                </h3>
                <p class="text-white fs-desk1">
                  Tingkatkan efisiensi, produktivitas dan kinerja bisnis dengan berbagai
                  produk Omsetku yang telah digunakan oleh puluhan ribu pelaku usaha
                  di Indonesia.
                </p>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <a href="//wa.me/+628818850663" class="mx-2 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 w-100 mb-3"><img src="{{ asset('public/assets/img/omsetku-wa-icon.png') }}" alt="" srcset="" class="">Whatsapp Sales</a>
                <a href="{{ url('contact') }}" class="mx-2 text-white d-flex align-items-center justify-content-center p-2 brd-button-desk1 w-100">Jadwalkan Demo</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="img-question d-flex justify-content-center">
            <img src="{{ asset('public/asset-home/omsetku-women-user-ready-2.png') }}" alt="" srcset="" class="w-50">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end mobile section -->
<!-- ======= End Question Section ======= -->
@endsection


@section('script-after')
<script>
  $(document).ready(function() {
    $('.slick-arrow').css('opacity', '0');
  })

  function showDescription(idx, img) {
    // console.log('feature to show in index: ' + idx + 'image to show: ' + img);
    // $('.description-feature-'+idx).css('display', 'block !important');
    // $('.description-feature-'+idx).css('height', '100% !important');
    // $('.img-acordion img').attr('src', "");
    $('.description-feature-' + idx).removeClass('d-none');
    $('.description-feature-' + idx).removeClass('h-0');
    $('.description-feature-' + idx).addClass('d-block');
    $('.description-feature-' + idx).addClass('h-100');
    $('.img-acordion img').attr('src', "{{ asset('public/asset-home/') }}/" + img);
  }

  function hideDescription(idx, img) {
    // console.log('feature to hide in index: ' + idx);
    // $('.description-feature-'+idx).css('display', 'block !important');
    // $('.description-feature-'+idx).css('height', '100% !important');
    $('.description-feature-' + idx).removeClass('d-block');
    $('.description-feature-' + idx).removeClass('h-100');
    $('.description-feature-' + idx).addClass('d-none');
    $('.description-feature-' + idx).addClass('h-0');
  }


  $('.slider-testimoni').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1.5,
    slidesToScroll: 1,
    responsive: [
      // {
      //   breakpoint: 1024,
      //   settings: {
      //     slidesToShow: 3,
      //     slidesToScroll: 3,
      //     infinite: true,
      //     dots: true
      //   }
      // },
      // {
      //   breakpoint: 600,
      //   settings: {
      //     slidesToShow: 2,
      //     slidesToScroll: 2
      //   }
      // },
      // {
      //   breakpoint: 480,
      //   settings: {
      //     slidesToShow: 1,
      //     slidesToScroll: 1
      //   }
      // }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  function slideTo(arrow) {

    if (arrow == 'right') {
      $('.slider-testimoni .slick-next').trigger('click');
    }

    if (arrow == 'left') {
      $('.slider-testimoni .slick-prev').trigger('click');
    }
  }
</script>
@stop