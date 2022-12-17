<!doctype html>
<html lang="en">
<title>Equrban - Admin Login</title>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
    rel="stylesheet"
    />
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>

    <style>
        .intro {
  height: 100%;
}

@media (min-height: 300px) and (max-height: 450px) {
  .intro {
    height: auto;
  }
}

.fas.fa-user {
  font-size: 19rem;
}

@media (max-width: 991px) {
  .fas.fa-laptop {
    font-size: 12rem;
  }
};
    </style>
  </head>
  <body>

    <section class="section d-flex" id="trainers">
        <section class="intro">
            <div class="mask d-flex align-items-center h-100" style="background-color: #D6D6D6">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-xl-10">
                    <div class="card">
                      <div class="card-body p-5">

                        <div class="row d-flex align-items-center">
                          <div class="col-md-6 col-xl-7">

                            <div class="text-center pt-md-5 pb-5 my-md-5" style="padding-right: 24px;">
                                <img class="logo horizontal-logo" src="{{URL::asset('/images/admin_logo.png')}}" width="460 " height="200" alt="">
                            </div>

                          </div>
                          <div class="col-md-8 col-xl-4 text-center">
                            <div class="text-center mb-6">
                                <h1 class=""><b><span style="color: #eaca00">Welcome</span> <span style="color: #009E60">Admin </span></b></h1>
                                <p class="lead">
                                    Surau Al-Muhajirin Amanjaya
                                    <br>
                                </p>
                            </div>
                            <form method="POST" action="{{url('adminLogin')}}">
                            @csrf
                            @if (Session::has('success'))
                            <div class="alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if (Session::has('fail'))
                            <div class="alert-danger">{{Session::get('fail')}}</div>
                            @endif
                                <div class="form-outline mb-3">
                                <select id="inputState" name="inputnama_jawatan" class="form-control" required style="background-color: #ECECEC; border:0px; height: 45px">
                                    <option selected disabled value="">Jawatan</option>
                                    <option value="ajk">AJK Surau</option>
                                </select>
                                </div>

                                <div class="form-outline mb-5">
                                <input type="password" id="inputPassword" name="inputPassword" class="form-control form-control-lg" style="background-color: #ECECEC; border:0px; height: 45px" />
                                <label class="form-label">Kata laluan</label>
                                </div>

                                <div class="text-center">
                                <button class="btn btn-info btn-block btn-lg" type="submit" style="background-color: #009E60; color:white">Log Masuk</button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </section>
  </body>
</html>
