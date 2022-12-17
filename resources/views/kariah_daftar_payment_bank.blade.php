<!doctype html>
<html lang="en">
<title>Equrban - Wire Transfer</title>
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
.card {
  padding: 50px;
  margin: 50px auto;
  max-width: 850px;
  background: #fff;
  border-radius: 6px;
  box-sizing: border-box;
  box-shadow: 0px 24px 60px -1px rgba(37,44,54,0.14);
}
.card .container {
  max-width: 700px;
  margin: 0 auto;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}
.bgc-default-tp1 {
    background-color: #003E29!important;
}

.field {
  margin-bottom: 25px;
}
.field.full {
  width: 100%;
}
.field.half {
  width: calc(50% - 12px);
}
.field label {
  display: block;
  text-transform: uppercase;
  font-size: 12px;
  margin-bottom: 8px;
}
.field input {
  padding: 12px;
  border-radius: 6px;
  border: 2px solid #e8ebed;
  display: block;
  font-size: 14px;
  width: 100%;
  box-sizing: border-box;
}

.flex {
  display: flex;
  flex-direction: row wrap;
  align-items: center;
}
.flex.justify-space-between {
  justify-content: space-between;
}

.button {
  text-transform: uppercase;
  font-weight: 600;
  font-size: 12px;
  letter-spacing: 0.5px;
  padding: 15px 25px;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.5s ease;
  background: transparent;
  border: 2px solid transparent;
}
.button.button-link {
  padding: 0 0 2px;
  margin: 0 25px;
  border-bottom: 2px solid rgba(64,179,255,0.5);
  border-radius: 0;
  opacity: 0.75;
}
.button.button-link:hover {
  border-bottom: 2px solid #40b3ff;
  opacity: 1;
}
.button.button-primary {
  background: #40b3ff;
  color: #fff;
}
.button.button-primary:hover {
  background: #218fd9;
}
.button.button-secondary {
  background: transparent;
  border-color: #e8ebed;
  color: #8a959c;
}
.button.button-secondary:hover {
  border-color: #28333b;
  color: #28333b;
}

    </style>
  </head>
  <body>

     <!-- Header -->
     @include('kariah_component_header')

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <article class="card">
            <div class="container px-0">
                <div class="row mt-4">
                    <div class="col-12 col-lg-12">
                    <p><b>IMPORTANT: </b> Please make sure you mention your reference
                        details so we can easily match your payments.
                    </p>
                    <div class="mt-4 table-responsive">
                        <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                            <thead class="bg-none bgc-default-tp1">
                                <tr class="text-white">
                                    <th><h3>Detail to Complete Your Payment</h3></th>
                                </tr>
                            </thead>

                            <tbody class="text-95 text-secondary-d3">
                                <tr></tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <p><h5><b>Payment Amount : </b></h5></p>
                                            </div>
                                            <div class="col">
                                                <p><h5>RM {{$jumlah_pesanan_harga_korban}}</h5></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <p><h5><b>Beneficiary' Name : </b></h5></p>
                                            </div>
                                            <div class="col">
                                                <p><h5>Surau Al-Muhajirin</h5></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <p><h5><b>Bank Name : </b></h5></p>
                                            </div>
                                            <div class="col">
                                                <p><h5>Malayan Banking Berhad (Maybank)</h5></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <p><h5><b>Bank Account Number : </b></h5></p>
                                            </div>
                                            <div class="col">
                                                <p><h5>102054624547</h5></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <p><h5><b>Payment Reference Note : </b><h5></p>
                                            </div>
                                            <div class="col">
                                                <p><h5>{{$kariah_IC_last_four}}{{$kariah_name_first_three}}</h5></p>
                                                <span class="text-secondary-d1 text-105"><i>*first four character is your ic number follow with your first three character of your name</i></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <form action="{{url('fileUpload')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="formFileMultiple" class="form-label">Upload your receipt payment here.</label>
                        <input class="form-control" name="file" type="file" id="chooseFile" multiple required/>
                        <input name="id" type="text" value="{{$kariah_booking_details[0]->kariah_id}}" hidden/>
                        <p><i>Only PDF files with max size of 100MB.</i></p>
                        <div class="card-actions flex justify-space-between">
                            <div class="flex-start">
                                <a href="{{ url()->previous() }}"><button class="button button-secondary" type="button">Return</button></a>
                            </div>
                            <div class="flex-end">
                                <button type="submit" name="submit" class="button button-primary">Proceed</button>
                            </div>
                        </div>
                    </form>
        </article>
    </section>
    <!-- ***** Blog End ***** -->



    @include('footer')

  </body>
</html>
