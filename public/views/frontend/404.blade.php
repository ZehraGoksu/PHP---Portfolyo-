@extends("frontend.layouts.app")

@section("content")

<div id="layoutError">
    <div id="layoutError_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mt-4">
                            <img class="mb-4 img-error" src="assets/img/error-404-monochrome.svg" />
                            <p class="lead">Bu sayfa bulunamadı.</p>
                            <a href="{{base_url()}}">
                                <i class="fas fa-arrow-left me-1"></i>
                                Anasayfaya dönmek için tıklayınız !
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@endsection