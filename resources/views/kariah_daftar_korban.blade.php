<!doctype html>
<html lang="en">
<title>Equrban - Kariah Daftar Korban</title>
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

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>PAKEJ KORBAN</h2>
                        <img src="{{URL::asset('/images/line-dec.png')}}" alt="">
                    </div>
                </div>
            </div>
              <!-- ***** Offers Starts ***** -->
                <section class="section" id="trainers">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-4">
                                <div class="trainer-item">
                                    <div class="image-thumb">
                                        <img src="{{URL::asset('/images/portion.png')}}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>1 Bahagian Korban</h4>
                                        <p>Proses sembelihan akan dilakukan di Surau Al-Muhajirin</p>
                                        <h2 style="text-align: right">RM 750<span>/bahagian</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="trainer-item">
                                    <div class="image-thumb">
                                        <img src="{{URL::asset('/images/cow.png')}}" alt="" style="width: 210; height: 287px;">
                                    </div>
                                    <div class="down-content">
                                        <h4>1 Ekor Korban</h4>
                                        <p>Proses sembelihan akan dilakukan di Surau Al-Muhajirin</p>
                                        <h2 style="text-align: right">RM 5250<span>/seekor</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <p>*Satu ekor lembu korban terbahagi kepada 7 bahagian & 7 penama.</p>
                        </div>
                        <br>
                        <div class="main-button text-center">
                            {{$kariah[0]->id}}
                            <a href="kariah_korban">DAFTAR KORBAN</a>
                        </div>
                    </div>
                </section>
                <!-- ***** Offers Ends ***** -->
        </div>
    </section>
    <!-- ***** Blog End ***** -->



    @include('footer')

  </body>
</html>
