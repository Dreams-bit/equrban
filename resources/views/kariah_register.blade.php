<!doctype html>
<html lang="en">
<title>Equrban - Kariah login</title>
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
                                        <h2>Login</h2>
                                        <br>
                                        <div class="tab-pane active" id="ex3-tabs-1">
                                            <article id='tabs-1'>
                                              <form method="POST" action="{{url('kariahLogin')}}">
                                                @if (Session::has('success'))
                                                <div class="alert alert-success alert-dismissible fade show">{{Session::get('success')}}</div>
                                                @endif
                                                @if (Session::has('fail'))
                                                <div class="alert alert-danger alert-dismissible fade show">{{Session::get('fail')}}</div>
                                                @endif
                                                @csrf
                                                <div class="form-group">
                                                  <label for="inputIC_number" style="font-size: 15px">Nombor IC</label>
                                                  <input type="text" class="form-control" name="inputIC_number" id="inputIC_number" placeholder="Enter IC" style="background-color: #ECECEC; border:0px; height: 50px" required>
                                                  <small class="form-text text-muted" style="font-size: 11px">Kami tidak akan kongsikan nombor IC anda pada orang lain.</small>
                                                </div>
                                                <div class="form-group">
                                                  <label for="inputPassword" style="font-size: 15px">Password</label>
                                                  <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password" style="background-color: #ECECEC; border:0px; height: 50px">
                                                  <small>
                                                    <a href="kariah_login">Pengguna Baharu? Daftar disini</a>
                                                  </small>
                                                </div>
                                                <div class="text-right mt-3">
                                                    <button type="submit" class="btn" style="background-color: #009E60; color:white">Daftar Masuk</button>
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


    {{-- <section class="section d-flex" id="trainers">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>KARIAH</h2>
                        <p>SURAU AL-MUHAJIRIN</p>
                    </div>
                </div>
            </div>
                <!-- ***** Blog Start ***** -->
            <section class="section" id="our-classes">
                  <!-- Tabs navs -->
                  <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="ex3-tab-1" data-mdb-toggle="tab" href="#ex3-tabs-1" role="tab" aria-controls="ex3-tabs-1" aria-selected="true">DAFTAR MASUK</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="ex3-tab-2" data-mdb-toggle="tab" href="#ex3-tabs-2" role="tab" aria-controls="ex3-tabs-2" aria-selected="false">DAFTAR AKAUN</a>
                    </li>
                  </ul>
                  <!-- Tabs navs -->
                  <!-- Tabs content -->
                  <div class="tab-content" id="ex2-content">
                    <div class="tab-pane active" id="ex3-tabs-1">
                      <article id='tabs-1'>
                        <form method="POST" action="{{url('kariahLogin')}}">
                          @if (Session::has('success'))
                          <div class="alert-success">{{Session::get('success')}}</div>
                          @endif
                          @if (Session::has('fail'))
                          <div class="alert-danger">{{Session::get('fail')}}</div>
                          @endif
                          @csrf
                          <div class="form-group">
                            <label for="inputIC_number">Nombor IC</label>
                            <input type="text" class="form-control" name="inputIC_number" id="inputIC_number" placeholder="Enter IC">
                            <small class="form-text text-muted">Kami tidak akan kongsikan nombor IC anda pada orang lain.</small>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-primary">Daftar Masuk</button>
                        </form>
                      </article>
                    </div>
                    <div class="tab-pane fade" id="ex3-tabs-2">
                      <article id='tabs-2'>
                        <form method="POST" action="{{url('kariahRegister')}}">
                          @csrf
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputName">Nama</label>
                              <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputIC_number">Nombor IC</label>
                              <input type="text" class="form-control" name="inputIC_number" id="inputIC_number" placeholder="000129020273">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputPhone">No. Telefon</label>
                              <input type="text" class="form-control" name="inputPhone" id="inputPhone" placeholder="0196534022">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="inputCity">Bandar</label>
                              <input type="text" class="form-control" name="inputCity" id="inputCity" placeholder="Sungai Petani">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="inputState">Negeri</label>
                              <select name="inputState" id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>Kedah</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputAddress1">Alamat Line 1</label>
                            <input type="text" class="form-control" name="inputAddress1" id="inputAddress1" placeholder="No 4, Jalan Anggerik 1/1">
                          </div>
                          <div class="form-group">
                            <label for="inputAddress2">Alamat Line 2</label>
                            <input type="text" class="form-control" name="inputAddress2" id="inputAddress2" placeholder="Bandar Amanjaya">
                          </div>

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail">Emel</label>
                              <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Emel">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword">Password</label>
                              <input type="password" class="form-control" name="inputPassword" id="inputPassword">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Daftar Akaun</button>
                        </form>
                      </article>
                    </div>
                  </div>
                  <!-- Tabs content -->
                </div>
          </section>

    <!-- ***** Blog End ***** -->
    </section>
    <!-- ***** Offers Ends ***** --> --}}



  </body>
</html>
