<div class="card text-center " style=" background: #040b14; color:#fff;
font-family: Poppins, sans-serif; ">
    <div class="card-body">
        @foreach (App\Models\About::get() as $item)
         <h5 class="card-title" >{{$item->name_surname}}</h5>
        @endforeach
    </div>
  </div>