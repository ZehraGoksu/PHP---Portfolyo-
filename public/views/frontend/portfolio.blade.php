@extends("frontend.layouts.app")
@push("css")
<style>
  .margin{
    margin-bottom: 50px;
  }
</style>
@endpush
@section("content")

 @include("frontend.layouts.title")

 
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Portfolyo</h2>
        <ol>
          <li><a href="{{base_url()}}">Anasayfa</a></li>
          <li>Portfolyo Detayları</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
    @foreach (App\Models\GetProjectsView::get() as $item)
      <div class="row gy-4">

        <div class="col-lg-8">
          <div class=" portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">        
                <div class="swiper-slide">
                  <img src="{{ base_url($item->image_path."/".$item->original_image) }}"  height="300px">
                </div>
              </div>    
            </div>
        </div>
              <div class="portfolio-info col-4">
                <h3>{{ $item->name }}</h3>
                <ul>
                  <li><strong>Proje Tarihi</strong>:{{ format_date($item->date, "d F Y") }} </li>
                  <li><strong>Proje URL</strong>: <a href="{{ $item->url }}">{{ $item->url }}</a></li>
                </ul>
              </div>
            
          </div>
        

        <div class="margin">
          
          <div class="portfolio-info col-8">
            <h2>{{ $item->title }}</h2>
            <p>
              {{ $item->description }} </p>
          </div>
        </div>

      </div>
      @endforeach

    </div>
  </section><!-- End Portfolio Details Section -->

  @endsection