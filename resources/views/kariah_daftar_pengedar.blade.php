<!doctype html>
<html lang="en">
<title>Equrban - Daftar Pengedar</title>
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
                        <h2>MAKLUMAT PENGEDAR</h2>
                        <img src="{{URL::asset('/images/line-dec.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-3 offset-lg-1">
                  <h4 style="color: #E84D20">Maklumat Asas</h4>
                  <p><i>Pengedar boleh jadi diri sendiri atau orang lain. Pastikan nama pengedar sebenar dinyatakan.</i></p>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <form method="post" action="{{url('kariahDaftarPengedar')}}" style="width: 40em">
                      @if (Session::has('fail'))
                      <div class="alert-danger">{{Session::get('fail')}}</div>
                      @endif
                      @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="KHAIRUL ANWAR IDRIS" required>
                          </div>
                        <div class="form-row">
                          <div class="col">
                            <label for="formGroupExampleInput">No Telefon</label>
                            <input type="text" class="form-control" name="phone" placeholder="0196534022" style="text-align: right" required>
                          </div>
                          <div class="col">
                            <label for="formGroupExampleInput">WhatsApp</label>
                            <select id="inputState" name="whatsapp_status" class="form-control" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                              <label for="formGroupExampleInput">Harga Seekor (RM)</label>
                              <input type="text" class="form-control" name="harga_qurban" placeholder="4500.00"style="text-align: right" required>
                            </div>
                            <div class="col">
                              <label for="formGroupExampleInput">Kuantiti Lembu</label>
                              <input type="text" class="form-control" name="available_unit" placeholder="15" style="text-align: right" required>
                              <input type="text" class="form-control" name="kariah_id" value="{{$kariah[0]->id}}" style="text-align: right" hidden>
                            </div>
                          </div>
                          <br>
                          <div style="text-align: right">
                            <button type="submit" class="btn btn-primary" style="background-color: #007A52">Hantar</button>
                          </div>
                      </form>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->




    @include('footer')

  </body>
</html>
