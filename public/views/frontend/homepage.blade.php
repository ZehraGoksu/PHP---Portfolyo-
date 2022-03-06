@extends("frontend.layouts.app")

@section("content")

<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  @foreach (App\Models\About::get() as $item)  
  <div class="hero-container" data-aos="fade-in">
      <h1>{{ $item->name_surname }}</h1>
      <p>I'm <span class="typed" data-typed-items="{{ $item->job }}"></span></p>
    </div>
  </section>
  @endforeach
@endsection