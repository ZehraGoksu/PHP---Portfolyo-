@extends("backend.layouts.app")



@section("content")
<div style="background-color: #212429">
    <h5 style="color:antiquewhite; text-align:center;">İletişim Mesajları</h5>
   </div>
<main>
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mesaj Sahibi</th>
                            <th>E-posta</th>
                            <th>Mesajı</th>
                        </tr>
                    </thead>
                   
                    <tbody>
    
                        @foreach (App\Models\Contact::orderby('id','desc')->get() as $item)
                             <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name_surname}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->message}}</td>
                                
                             </tr>
                        @endforeach
    
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection