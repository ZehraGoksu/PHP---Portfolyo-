@extends("backend.layouts.app")

@push("css")
<style>
  .formMargin{ 
    margin-top:20px;
  }
  label{
      color:#0f0b20;
      font-weight: bold
  }


  </style>
@endpush

@section("content")
<div style="background-color: #212429">
     <h5 style="color:antiquewhite; text-align:center;">Hakkımda Güncelle</h5>
    </div>
<div class="container-fluid formMargin">
    @include('backend.layouts.alert')
    
    <div class="bg-white p-4 border rounded shadow">
        @foreach (App\Models\About::get() as $item)  
            <form action="{{base_url("admin/update-about")}}" id="editForm" method="POST"  enctype="multipart/form-data"  class="row" >
                     <input type="hidden" name="id" value="{{ $item->id }}">
                    
                     <div class="form-group col-md-4">
                        <label>Profil Fotoğrafı</label>
                        <input type="file" class="card-img-top" value="{{ base_url($item->image_path."/".$item->original_image) }}" alt="..." />
                     </div><div class="form-group col-md-8 formMargin" ></div>
                  
                     <div class="form-group col-md-6">
                            <label>Ad-Soyad</label>
                            <input type="text" class="form-control" value="{{ $item->name_surname }}" required name="name_surname" >
                    </div>

                    <div class="form-group col-md-6">
                            <label>E-Posta</label>
                            <input type="email" class="form-control" required name="email" value="{{ $item->email }}" >
                    </div>

                    <div class="form-group col-md-6 formMargin">
                            <label>Doğum Tarihi</label>
                            <input type="date" class="form-control" required name="birthday" value="{{ $item->birthday }}">
                    </div>

                    <div class="form-group col-md-6 formMargin">
                            <label>Telefon</label>
                            <input type="phone"  class="form-control" value="{{ $item->phone }}" required name="phone" >
                    </div>

                    <div class="form-group col-md-6 formMargin">
                        <label>Adres
                            <small style="font-size:13px;">&nbsp; &nbsp; &nbsp; &nbsp; (Yalnızca il ve ilçe belirtiniz.)</small></label>
                        <input type="text"  class="form-control" value="{{ $item->city }}" required name="city" >
                     </div>



                    <div class="form-group col-md-6 formMargin">
                        <label>Meslek</label>
                        <input type="text" class="form-control" value="{{ $item->job }}" required name="job" >
                    </div>

                    <div class="form-group col-md-12 formMargin">
                        <label>Üniversite Adı</label>
                        <input type="text"  class="form-control" value="{{ $item->univercity_name }}" required name="univercity_name" >
                    </div>

                    <div class="form-group col-md-6 formMargin">
                        <label>Bölüm</label>
                        <input type="text"  class="form-control" value="{{ $item->department }}" required name="department" >
                    </div>

                    <div class="form-group col-md-6 formMargin">
                        <label>Derece</label>
                        <input type="text"  class="form-control" value="{{ $item->department }}" required name="degree" >
                    </div>
                    
                    <div class="form-group col-md-12 formMargin">
                        <label>Hakkımda</label>
                        <textarea name="about_text"  class="form-control" rows="5">{{ $item->about_text }}</textarea>
                    </div>
    

                  <div class="col-md-12 formMargin">
                    <button type="submit" class="btn btn-outline-dark">Güncelle</button>
                  </div>




            </form>
    </div>
    @endforeach


</div>
@endsection