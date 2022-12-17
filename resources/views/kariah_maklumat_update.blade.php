<!doctype html>
<html lang="en">
<title>Equrban - Kariah Profil</title>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{asset('icofont/icofont.min.css')}}">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body{
            background: #E6E6E6;
        }
        .icon{
            display: in;
        }
    </style>
  </head>
  <body>

     <!-- Header -->
     @include('kariah_component_header')
    <br>
    <br>
    <section class="section d-flex mb-10">
      <div class="container">
        <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
          <div class="card-body">
            <div class="account-settings">
              <div class="user-profile">
                <div class="user-avatar">
                  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                </div>
                <h5 class="user-name">{{$kariah[0]->name}}</h5>
                <h6 class="user-email">{{$kariah[0]->email}}</h6>
              </div>
              <div class="about">
                <h5>About</h5>
                <p>Kariah Surau Al-Muhajirin</p>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
          <div class="card-body">
            <form method="POST" action="/kariah_update/{{$kariah[0]->id}}">
              @csrf
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <h6 class="mb-2 text-primary">Maklumat Peribadi</h6>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="fullName">Nama Penuh</label>
                    <input type="text" class="form-control" id="fullName" name="name" value="{{$kariah[0]->name}}" required>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="ic_number">Nombor IC</label>
                    <input type="text" class="form-control" id="ic_number" name="ic_number" value="{{$kariah[0]->ic_number}}" required>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="phone">No Telefon</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$kariah[0]->phone}}" required>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="email">Emel</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$kariah[0]->email}}" required>
                  </div>
                </div>
              </div>
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <h6 class="mt-3 mb-2 text-primary">Alamat</h6>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="address1">Alamat Line 1</label>
                    <input type="text" class="form-control" id="address1" name="address1" value="{{$kariah[0]->address1}}" required>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="address2">Alamat Line 2</label>
                    <input type="text" class="form-control" id="address2" name="address2" value="{{$kariah[0]->address2}}" required>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="city">Bandar</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{$kariah[0]->city}}" required>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="state">Negeri</label>
                    <input type="text" class="form-control" id="state" name="state" value="{{$kariah[0]->state}}" required>
                  </div>
                </div>
              </div>
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="text-right">
                    <button type="submit" id="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
          </form>
          </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    @include('footer')

  </body>
</html>
