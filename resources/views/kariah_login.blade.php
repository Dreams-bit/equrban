<!doctype html>
<html lang="en">
<title>Equrban - Kariah register</title>
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
        * {
    box-sizing: border-box;
    }
    .col {
    padding:  0px;
    height: 100%;
    }
    @media screen and (max-width: 600px) {
    .col {
        width: 100%;
    }
    }
    body{
    background-color: #fff;
}
body, html {
    height: 100%;
    margin: 0;
    padding: 0;
}



.limit{
        width: 100%;
        height: 100%;
        max-height: 100%;
        overflow: hidden;
     }
    .limit img{
       width: 100%;
       height: 100%;
     }
     .title-txt {
            position: absolute;
            top: 17px;
            left: 25%
        }
    </style>
  </head>
  <body>

    <div class="row" style="height: 100%; width:100%">
        <div class="col-6" >
            <div class="limit">
                <img src="{{URL::asset('/images/logo_page.png')}}" alt=""/>
            </div>
        </div>
        <div class="col-6">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-sm-10  mx-auto d-table h-100">
                        <div class="d-table-cell align-middle">

                            <div class="text-center mt-4">
                                <h1 class=""><b><span style="color: #eaca00">Welcome to</span> <span style="color: #009E60">E-Qurban </span></b></h1>
                                <p class="lead">
                                    Surau Al-Muhajirin Amanjaya
                                    <br>
                                    {{-- Sign in to your account to continue --}}
                                </p>
                            </div>

                                    <div class="m-sm-4">
                                        <h2>Register</h2>
                                        <br>
                                        <div class="tab-pane active" id="ex3-tabs-1">
                                          @foreach ($errors->all() as $error)
                                          @if($error == ['inputIC_number'])
                                          <div class="alert alert-danger alert-dismissible fade show">Nombor IC tidak sah.</div>
                                          @endif
                                          @if($error == ['inputPhone'])
                                          <div class="alert alert-danger alert-dismissible fade show">Nombor telefon tidak sah.</div>
                                          @endif
                                          @endforeach
                                          @if (Session::has('fail'))
                                                <div class="alert alert-danger alert-dismissible fade show">{{Session::get('fail')}}</div>
                                          @endif
                                            <article id='tabs-1'>
                                                <form method="POST" action="{{url('kariahRegister')}}">
                                                    @csrf
                                                    <div class="form-row">
                                                      <div class="form-group col-md-6">
                                                        <label for="inputName" style="font-size: 15px">Nama</label>
                                                        <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name" style="background-color: #ECECEC; border:0px; height: 45px" required>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="inputIC_number" style="font-size: 15px">Nombor IC</label>
                                                        <input type="text" class="form-control" name="inputIC_number" id="inputIC_number" placeholder="000129020273" style="background-color: #ECECEC; border:0px; height: 45px" required>
                                                      </div>
                                                    </div>
                                                    <div class="form-row">
                                                      <div class="form-group col-md-6">
                                                        <label for="inputPhone" style="font-size: 15px">No. Telefon</label>
                                                        <input type="text" class="form-control" name="inputPhone" id="inputPhone" placeholder="0196534022" style="background-color: #ECECEC; border:0px; height: 45px" required>
                                                      </div>
                                                      <div class="form-group col-md-3">
                                                        <label for="inputCity" style="font-size: 15px">Bandar</label>
                                                        <input type="text" class="form-control" name="inputCity" id="inputCity" placeholder="Sungai Petani" style="background-color: #ECECEC; border:0px; height: 45px" required>
                                                      </div>
                                                      <div class="form-group col-md-3">
                                                        <label for="inputState" style="font-size: 15px">Negeri</label>
                                                        <select name="inputState" id="inputState" class="form-control" style="background-color: #ECECEC; border:0px; height: 45px" required>
                                                          <option selected>Choose...</option>
                                                          <option>Kedah</option>
                                                        </select>
                                                      </div>
                                                    </div>

                                                    <div class="form-group">
                                                      <label for="inputAddress1" style="font-size: 15px">Alamat Line 1</label>
                                                      <input type="text" class="form-control" name="inputAddress1" id="inputAddress1" placeholder="No 4, Jalan Anggerik 1/1" style="background-color: #ECECEC; border:0px; height: 45px" required>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="inputAddress2" style="font-size: 15px">Alamat Line 2</label>
                                                      <input type="text" class="form-control" name="inputAddress2" id="inputAddress2" placeholder="Bandar Amanjaya" style="background-color: #ECECEC; border:0px; height: 45px" required>
                                                    </div>

                                                    <div class="form-row">
                                                      <div class="form-group col-md-6">
                                                        <label for="inputEmail" style="font-size: 15px">Emel</label>
                                                        <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Emel" style="background-color: #ECECEC; border:0px; height: 45px" required>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="inputPassword" style="font-size: 15px">Password</label>
                                                        <input type="password" class="form-control" name="inputPassword" id="inputPassword" style="background-color: #ECECEC; border:0px; height: 45px" required>
                                                      </div>
                                                      <small>
                                                        <a href="kariah_register">Sudah miliki akaun? Log masuk disini.</a>
                                                      </small>
                                                    </div>
                                                    <div class="text-right mt-3">
                                                        <button type="submit" class="btn" style="background-color: #009E60; color:white">Daftar Akaun</button>
                                                    </div>
                                                  </form>
                                            </article>
                                          </div>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </body>
</html>
