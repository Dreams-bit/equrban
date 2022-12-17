<!doctype html>
<html lang="en">
<title>Equrban - Pembayaran Korban</title>
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
    <script src="https://www.freestyleacademy.rocks/jquery/minified.js"></script>
    <style>

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
.field input:placeholder {
  color: #e8ebed !important;
}
.flex {
  display: flex;
  flex-direction: row wrap;
  align-items: center;
}
.flex.justify-space-between {
  justify-content: space-between;
}
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
.card .card-title {
  margin-bottom: 50px;
}
.card .card-title h2 {
  margin: 0;
}
.card .card-body .payment-type,
.card .card-body .payment-info {
  margin-bottom: 25px;
}
.card .card-body .payment-type h4 {
  margin: 0;
}
.card .card-body .payment-type .types {
  margin: 25px 0;
}
.card .card-body .payment-type .types .type {
  width: 30%;
  position: relative;
  background: #f2f4f7;
  border: 2px solid #e8ebed;
  padding: 25px;
  box-sizing: border-box;
  border-radius: 6px;
  cursor: pointer;
  text-align: center;
  transition: all 0.5s ease;
}
.card .card-body .payment-type .types .type:hover {
  border-color: #28333b;
}
.card .card-body .payment-type .types .type:hover .logo,
.card .card-body .payment-type .types .type:hover p {
  color: #28333b;
}
.card .card-body .payment-type .types .type.selected {
  border-color: #40b3ff;
  background: rgba(64,179,255,0.1);
}
.card .card-body .payment-type .types .type.selected .logo {
  color: #40b3ff;
}
.card .card-body .payment-type .types .type.selected p {
  color: #28333b;
}
.card .card-body .payment-type .types .type.selected::after {
  content: '\f00c';
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
  position: absolute;
  height: 40px;
  width: 40px;
  top: -21px;
  right: -21px;
  background: #fff;
  border: 2px solid #40b3ff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.card .card-body .payment-type .types .type .logo,
.card .card-body .payment-type .types .type p {
  transition: all 0.5s ease;
}
.card .card-body .payment-type .types .type .logo {
  font-size: 48px;
  color: #8a959c;
}
.card .card-body .payment-type .types .type p {
  margin-bottom: 0;
  font-size: 10px;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 0.5px;
  color: #8a959c;
}
.card .card-body .payment-info .column {
  width: calc(50% - 25px);
}
.card .card-body .payment-info .title {
  display: flex;
  flex-direction: row;
  align-items: center;
}
.card .card-body .payment-info .title .num {
  height: 24px;
  width: 24px;
  border-radius: 50%;
  border: 2px solid #40b3ff;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  margin-right: 12px;
  font-size: 12px;
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






.form-control {
    height: 25px;
    width: 150px;
    border: none;
    border-radius: 0;
    font-weight: 800;
    padding: 0 0 5px 0;
    background-color: transparent;
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #ccc;
    margin: 0;
    font-size: 14px;
}

.form-control:focus {
    box-shadow: none;
    border-bottom: 2px solid #ccc;
    background-color: transparent;
}

.form-control2 {
    font-size: 14px;
    height: 20px;
    width: 55px;
    border: none;
    border-radius: 0;
    font-weight: 800;
    padding: 0 0 5px 0;
    background-color: transparent;
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #ccc;
    margin: 0;
}

.form-control2:focus {
    box-shadow: none;
    border-bottom: 2px solid #ccc;
    background-color: transparent;
}

.form-control3 {
    font-size: 14px;
    height: 20px;
    width: 30px;
    border: none;
    border-radius: 0;
    font-weight: 800;
    padding: 0 0 5px 0;
    background-color: transparent;
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #ccc;
    margin: 0;
}

.form-control3:focus {
    box-shadow: none;
    border-bottom: 2px solid #ccc;
    background-color: transparent;
}

.invoice-date,
.invoice-from,
.invoice-to {
    display: table-cell;
    width: 1%
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
    font-size: 16px;
    font-weight: 600
}

.invoice-date {
    text-align: right;
}



.market-buttons {
    display: inline-block;
    margin-right: 24px;
    margin-bottom: 24px;
    padding: 35px 85px 35px 45px;
    transition: background-color 0.3s;
    border: 1px solid #eaeaea;
    border-radius: 8px;
    background-position: center left 12px;
    background-color: black;
    background-size: 74px 54px;
    background-repeat: no-repeat;
    text-decoration: none;
}
.market-buttons:hover {
    background-color: #eaeaea;
}
.market-buttons .mb-subtitle {
    display: block;
    margin-bottom: -4px;
    color: black;
    font-size: 12px;
    position: relative;
    right: -55px;
}
.market-buttons .mb-title {
    display: block;
    color: black;
    font-size: 20px;
    position: relative;
    right: -55px;
}
.market-buttons.fpx-button {
    background-image: url(https://vectorise.net/logo/wp-content/uploads/2019/09/Logo-FPX.png);
}
.market-buttons.bank-button {
    background-image: url(https://cdn-icons-png.flaticon.com/512/4313/4313039.png);
}


.market-buttons.mb-light-skin {
    border-color: black;
    background-color: transparent;
}
.market-buttons.mb-light-skin .mb-subtitle,
.market-buttons.mb-light-skin .mb-title {
    color:  black;
}
.market-buttons.mb-light-skin .mb-subtitle {
    opacity: 0.55;
}
.market-buttons.mb-light-skin:hover {
    background-color: 	#eaeaea
}
.market-buttons.mb-light-skin.fpx-button {
    background-image: url(https://vectorise.net/logo/wp-content/uploads/2019/09/Logo-FPX.png);
}
.market-buttons.mb-light-skin.bank-button {
    background-image: url(https://cdn-icons-png.flaticon.com/512/4313/4313039.png);
}



    </style>
  </head>
  <body>

     <!-- Header -->
     @include('kariah_component_header')

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <article class="card">
            <div class="container">
                <h2>Payment Information</h2>
                <div class="card-body">
                    <div class="title mb-6">
                        <div class="col-12 px-0">
                            <div class="row bg-light m-0">
                                <div class="col-12 px-4">
                                    <div class="container">
                                        <div class="col-md-12">
                                           <div class="invoice mt-4">
                                              <div class="invoice-header">
                                                 <div class="invoice-from">
                                                    <address class="m-t-5 m-b-5">
                                                       <strong class="text-inverse">Name</strong>
                                                       <br><h4 style="opacity: 0.8">{{$kariah_booking_details[0]->name}}</h4><br>
                                                    </address>

                                                    <address class="m-t-5 m-b-5">
                                                        <strong class="text-inverse">Amount</strong>
                                                        <br><h4 style="opacity: 0.8">RM {{$jumlah_pesanan_harga_korban}}</h4><br>
                                                     </address>
                                                 </div>
                                                 <div class="invoice-date">
                                                    <small>Invoice / July period</small>
                                                    <div class="date text-inverse m-t-5">
                                                        <?php
                                                            $date = date("F j, Y");
                                                            echo $date;
                                                        ?>
                                                    </div>
                                                    <div class="invoice-detail">
                                                        #<?php
                                                            // generating unique id
                                                            echo rand(1000,9999);
                                                        ?><br>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-type">
                        <h4>Choose payment method below</h4>
                        <div class="types flex" style="justify-content: space-evenly">
                             {{-- <a class="market-buttons fpx-button mb-light-skin" style="float:right" href="/toyyibpay/{{$kariah_booking_details[0]->id}}"><span class="mb-subtitle">Pay with</span><span class="mb-title">Online Payment</span></a> --}}

                            <a href="/kariah_daftar_payment_bank/{{$kariah_booking_details[0]->id}}" class="market-buttons bank-button mb-light-skin" style="float:right" href="#"><span class="mb-subtitle">Pay with</span><span class="mb-title">Wire Transfer</span></a>
                        </div>
                    </div>
                </div>
                <div class="card-actions flex justify-space-between">
                    <div class="flex-start">
                        <a href="{{ url()->previous() }}"><button class="button button-secondary">Return</button></a>
                    </div>
                </div>
            </div>

        </article>
    </section>
    <!-- ***** Blog End ***** -->

    @include('footer')

  </body>
  <script>

  </script>
</html>
