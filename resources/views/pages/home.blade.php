@extends('layouts.main')

@section('content')
<!-- banner part start-->
<section class="banner_part">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 col-xl-5">
        <div class="banner_text">
          <div class="banner_text_iner">
            <h5>We are here for your care</h5>
            <h1>Best Care &
              Better Medicine For Hypertension</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
              elit sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus cmodo viverra </p>
            <a href="{{ route('register') }}" class="btn_2">Get Started</a>

          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="banner_img">
          <img src="frontend/img/banner_img.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner part start-->

<!-- about us part start-->
<section class="about_us padding_top">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-md-6 col-lg-6">
        <div class="about_us_img">
          <img src="frontend/img/top_service.png" alt="">
        </div>
      </div>
      <div class="col-md-6 col-lg-5">
        <div class="about_us_text">
          <h2>About me</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed
            do eiusmod tempor incididunt ut labore et dolore magna aliqua
            Quis ipsum suspendisse ultrices gravida. Risus cmodo viverra
            maecenas accumsan lacus vel</p>
          <a class="btn_2 " href="#">learn more</a>
          <div class="banner_item">
            <div class="single_item">
              <img src="frontend/img/icon/banner_1.svg" alt="">
              <h5>Emergency</h5>
            </div>
            <div class="single_item">
              <img src="frontend/img/icon/banner_2.svg" alt="">
              <h5>Appointment</h5>
            </div>
            <div class="single_item">
              <img src="frontend/img/icon/banner_3.svg" alt="">
              <h5>Qualfied</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- about us part end-->

<!-- feature_part start-->
<section class="feature_part">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8">
        <div class="section_tittle text-center">
          <h2>Why ?</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-3 col-sm-12">
        <div class="single_feature">
          <div class="single_feature_part">
            <span class="single_feature_icon"><i class="fas fa-smile"></i></span>
            <h4>Better Service</h4>
            <p>Easy to use. Even your grandmother can use this apps</p>
          </div>
        </div>
        <div class="single_feature">
          <div class="single_feature_part">
            <span class="single_feature_icon"><i class="fas fa-user-md"></i></span>
            <h4>Profesional Doctor</h4>
            <p>
              sourced from one of the best doctors in Yogyakarta</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="single_feature_img">
          <img src="frontend/img/service.png" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="single_feature">
          <div class="single_feature_part">
            <span class="single_feature_icon"><i class="fas fa-user-lock"></i></span>
            <h4>Better Secure</h4>
            <p>Your privacy is your own</p>
          </div>
        </div>
        <div class="single_feature">
          <div class="single_feature_part">
            <span class="single_feature_icon"><i class="fas fa-coins"></i></span>
            <h4>Save Your Wallet</h4>
            <p>Darkness multiply rule Which from without life creature blessed
              give moveth moveth seas make day which divided our have.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- feature_part start-->

<!-- our depertment part start-->
<section class="our_depertment section_padding">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-xl-12">
        <div class="depertment_content">
          <div class="row justify-content-center">
            <div class="col-xl-8">
              <h2>What can we do?</h2>
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <div class="single_our_depertment">
                    <span class="our_depertment_icon"><i class="fas fa-search"></i></span>
                    <h4>Find The Right Medicine</h4>
                    <p>You can easily choose your medicine</p>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="single_our_depertment">
                    <span class="our_depertment_icon"><i class="fa fa-desktop"></i></span>
                    <h4>Monitoring Your Condition</h4>
                    <p>You can easily monitor your own hypertension </p>
                  </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                  <div class="single_our_depertment">
                    <span class="our_depertment_icon"><i class="fa fa-cog"></i></span>
                    <h4>Consultation</h4>
                    <p>This features are being progress</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- our depertment part end-->

@endsection