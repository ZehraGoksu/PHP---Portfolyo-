

<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      @foreach (App\Models\About::get() as $item)
      <div class="profile">
        <img src="{{ base_url($item->image_path."/".$item->original_image) }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">{{$item->name_surname}}</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class='bx bxl-github'></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
      @endforeach

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="{{base_url()}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Anasayfa</span></a></li>
          <li><a href="{{base_url("about")}}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Hakkımda</span></a></li>
         <li><a href="{{base_url("portfolio")}}" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolyo</span></a></li>
          <li><a href="{{base_url()}}" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>İletişim</span></a></li>
        </ul>
      </nav>
    </div>
  </header>