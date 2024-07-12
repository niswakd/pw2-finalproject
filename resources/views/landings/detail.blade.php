@extends('_layouts.land')

@section('content')
  <!-- ***** Preloader Start ***** -->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <div class="main-banner" id="top"></div>
    <div class="container"></div>
      <div class="row"></div>
        <div class="col-lg-12"></div>
          <div class="owl-carousel owl-banner"></div>
            
  <section class="section courses" id="courses">
    <div class="row event_box">
      <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer design">
        <div class="events_item">
          <div class="thumb">
            <a href="{{ url('suv') }}"><img src="/landing/images/suv.jpg" alt=""></a>
            <span class="category">Type car</span>
            <span class="price"><h6><em>$</em>160</h6></span>
          </div>
          <div class="down-content">
            <span class="author">Suv type</span>
            <h4>SUV</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer development">
        <div class="events_item">
          <div class="thumb">
            <a href=" {{ url('mpv') }}"><img src="/landing/images/mpv.jpg" alt=""></a>
            <span class="category">Mpv car</span>
            <span class="price"><h6><em>$</em>200</h6></span>
          </div>
          <div class="down-content">
            <span class="author">Mpv type</span>
            <h4>MPV</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer design wordpress">
        <div class="events_item">
          <div class="thumb">
            <a href=" {{ url('crossover') }}"><img src="/landing/images/crossover.jpg" alt=""></a>
            <span class="category">Crossover</span>
            <span class="price"><h6><em>$</em>640</h6></span>
          </div>
          <div class="down-content">
            <span class="author">Crossover type</span>
            <h4>Crossover</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer design wordpress">
        <div class="events_item">
          <div class="thumb">
            <a href=" {{ url('citycar') }}"><img src="/landing/images/citycar.jpg" alt=""></a>
            <span class="category">City Car</span>
            <span class="price"><h6><em>$</em>640</h6></span>
          </div>
          <div class="down-content">
            <span class="author">City car type</span>
            <h4>City Car</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer design wordpress">
        <div class="events_item">
          <div class="thumb">
            <a href=" {{ url('stationwagon') }}"><img src="/landing/images/wagon.jpg" alt=""></a>
            <span class="category">Station Wagon</span>
            <span class="price"><h6><em>$</em>640</h6></span>
          </div>
          <div class="down-content">
            <span class="author">Station type</span>
            <h4>Station Wagon</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024</p>
      </div>
    </div>
  </footer>
@endsection
