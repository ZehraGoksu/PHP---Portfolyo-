
 <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>İletişim</h2>
      </div>

      <div class="row" data-aos="fade-in">

        <div class="col-lg-5 d-flex align-items-stretch ">
          <div class="info bg-white border rounded shadow">
           @foreach (App\Models\About::get() as $item)
            <div class="address">
            
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>{{$item->city}}</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>{{$item->email}}</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>{{$item->phone}}</p>
            </div>
           @endforeach
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch bg-white border rounded shadow" style="padding: 30px">
          <form action="{{base_url("contact")}}" method="POST" role="form" class="row">
            <div class="row">
              <div class="col-md-12">
                <h4 style="color: #173b6c;">Mesaj Gönderebilirsiniz !</h4>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Ad-Soyad</label>
                <input type="text" name="name_surname" class="form-control" id="name_surname" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">E-posta</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Mesaj</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>

            <div class="text-center"><button type="button" class="btn btn-primary btn-lg">Gönder</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
