<!DOCTYPE html>
<html lang="en">
    <head>
        
        <base href="{{ config("BASE_ADMIN_ASSET") }}">

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Giriş</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Giriş</h3></div>
                                    <div class="card-body">
                                        @include('backend.layouts.alert')
                                        <form action="{{base_url("admin/login")}}" method="POST" >
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">E-posta Adresi</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Şifre</label>
                                            </div>
                                            <button  class="btn btn-primary btn-user btn-block">
                                                Giriş Yap
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
