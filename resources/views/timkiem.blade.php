@extends('layouts.master')
@section('content')
<section class="site-hero overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade-up">
        <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To SOGO Hotel <span class="fa fa-star text-primary"></span></span>
        <h1 class="heading">A Best Place To Stay</h1>
      </div>
    </div>
  </div>

  <a class="mouse smoothscroll" href="#next">
    <div class="mouse-icon">
      <span class="mouse-wheel"></span>
    </div>
  </a>
</section>
  <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
                
                <div class="alert alert-success">
                Search Results : 
                </div>
               
            <p data-aos="fade-up" data-aos-delay="100">The great views of the room will increase the attractiveness as well as the mysterious beauty, we are constantly supporting the best service. Provide a good customer experience. Welcome to the Sogo Hotel website  </p>
          </div>
        </div>
        <div class="row">
          @foreach($phong as $ro)
          <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <a href="#" class="room">
              <figure class="img-wrap">
                  <?php
                  $anh=DB::table('anh_phongs')->where('Phong_ID',$ro->Phong_ID)->first();
                  ?>
                <img src="{!!$anh->LinkAnh!!}" alt="SoGo hotel" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>{!!$ro->TenPhong!!}</h2>
                <span class="text-uppercase letter-spacing-1">{!!$ro->Gia!!}$ / per night</span>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
@stop