@extends('layouts.master')
@section('content')
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