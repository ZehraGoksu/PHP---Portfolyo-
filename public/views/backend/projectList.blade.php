@extends("backend.layouts.app")



@section("content")
<div style="background-color: #212429">
    <h5 style="color:antiquewhite; text-align:center;">Projeler</h5>
   </div>
<main>
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Proje Adı</th>
                            <th>Proje Başlık</th>
                            <th>Proje Açıklama</th>
                            <th>Proje Url</th>
                            <th>Proje Tarihi</th>
                        </tr>
                    </thead>
                   
                    <tbody>
    
                        @foreach (App\Models\GetProjectsView::orderby('id','desc')->get() as $item)
                             <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->url}}</td>
                                <td>{{$item->date}}</td>
                             </tr>
                        @endforeach
    
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection