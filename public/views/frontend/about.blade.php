@extends("frontend.layouts.app")



@section("content")

   @include("frontend.layouts.title")
    <section id="about" class="about">
      @foreach (App\Models\About::get() as $item)  
      <div class="container">
        
        
          <div class="section-title">
            <h2>Hakkımda</h2>
          </div>
  
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="{{ base_url($item->image_path."/".$item->original_image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>{{ $item->job }}</h3>
              
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Doğum Tarihi:</strong> <span>{{ format_date($item->birthday, "d/m/Y") }}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>E-posta:</strong> <span>{{$item->email}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Telefon:</strong> <span>{{ $item->phone }}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Adres:</strong> <span>{{ $item->city }}</span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Üniversite:</strong> <span>{{$item->univercity_name}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Derece:</strong> <span>{{$item->degree}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Bölüm:</strong> <span>{{$item->department}}</span></li>
                    
                  </ul>
                </div>
              </div>
              <p class="fst-italic">
                {{ $item->about_text }}
              </p>
             
            </div>
          </div>
  
        </div>
        @endforeach
      </section>
      
      
      
  @endsection