<!doctype html>
<html lang="en">
<title>Equrban - Kariah Dashboard</title>
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
     @include('kariah_header')
    <section class="section d-flex">
        <div class="container">
          @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{Session::get('success')}}
            </div>
          @endif
          @if (Session::has('fail'))
          <div class="alert alert-danger alert-dismissible fade show">{{Session::get('fail')}}</div>
          @endif
            <div class="row">
              <div class="col-4">
                  <div class="card shadow" style="border-radius: 5%">
                    <div class="card-body" style="text-align: center">
                      <div class="account-settings">
                        <div class="user-profile">
                          <div class="user-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                          </div>
                          <h5 class="user-name">{{$data->name}}</h5>
                          <h6 class="user-email">{{$data->phone}}</h6>
                        </div>
                      </div>
                        <a href="kariah_maklumat_update/{{$data->id}}" class="btn btn-primary btn-block mb-2" style="background-color: #52B788">Ubah Profil Anda</a>
                        <form action="kariahLogout" method="get">
                          <button class="btn btn-primary btn-block" style="background-color: #5285B7">Log Keluar</button>
                        </form>
                      </div>
                  </div>
              </div>
              <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="card" style="background-color: #FFFDD0">
                          <div class="card-body">
                            <div class="d-flex justify-content-between px-md-4">
                              <div>
                                <h3 class="card-title">RM {{$maklumat_korban[0]->harga_qurban_bahagian}}</h3>
                                <p class="card-text">1 Bahagian Lembu</p>
                              </div>
                              <div class="align-self-center">
                                  <img src="{{URL::asset('/images/portion.png')}}" alt="" style="width: 90px; height: 90px;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col">
                        <div class="card" style="background-color: #FFFDD0">
                          <div class="card-body">
                            <div class="d-flex justify-content-between px-md-4">
                              <div>
                                <h3 class="card-title">RM {{$maklumat_korban[0]->harga_qurban_seekor}}</h3>
                                <p class="card-text">Seekor Lembu</p>
                              </div>
                              <div class="align-self-center">
                                  <img src="{{URL::asset('/images/cow.png')}}" alt="" style="width: 90px; height: 90px;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
              <div class="row">
                <div class="col-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex flex-row mt-2 mb-3">
                          <div class="align-self-center">
                            <i class="fas fa-clipboard-check fa-3x me-3"></i>
                          </div>
                          <div>
                            <h5 class="card-title">{{$jumlah_tempahan_korban}}</h5>
                            <p class="card-text">Bilangan Qurban</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex flex-row mt-2 mb-3">
                          <div class="align-self-center">
                            <i class="fa fa-shopping-basket fa-3x me-3"></i>
                          </div>
                          <div>
                            <h5 class="card-title">{{$stok_pengedar}}</h5>
                            <p class="card-text">Stok Lembu Pengedar</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col-6">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                          <div>
                            <h3  style="color: #52B788">{{$baki_kuantiti_lembu_korban}}</h3>
                            <p class="mb-2">Baki Kekosongan Lembu Korban</p>
                          </div>
                          <div class="align-self-center">
                            <i class="icofont-cow fa-5x me-4"  style="color: #52B788"></i>
                          </div>
                        </div>
                      <div class="px-md-1">
                        <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                          <div class="progress-bar green" role="progressbar" style="width: {{$baki_kuantiti_lembu_korban_percent}}%;" aria-valuenow="35"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section class="section d-flex">
        <div class="container">
            <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <h1 class="card-title">Korban</h1>
                      <p class="card-text">Ibadah korban yang dilakukan setiap tahun.</p>
                      <div class="text-right">
                          <a href="kariah_daftar_korban/{{$data->id}}" class="btn btn-primary" style="background-color: #007A52">Daftar</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <h1 class="card-title">Pengedar</h1>
                      <p class="card-text">Menjadi pengedar lembu korban.</p>
                      <div class="text-right">
                        <a href="kariah_pengedar/{{$data->id}}" class="btn btn-primary" style="background-color: #007A52">Daftar</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
    <br>
    <br>
    <section class="section d-flex">
        <div class="container container d-flex flex-column">
            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="color: #007A52">
                      Korban
                      <p>Status Korban Anda</p>
                </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" style="color: #007A52">
                      Pengedar
                      <p>Status Pengedar Lembu Anda</p>
                </button>
                </li>
            </ul>
            <div class="tab-content d-flex flex-column flex-grow-1 text-white shadow-sm rounded-right rounded-bottom" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <table class="table table-sm text-center">
                        <thead>
                          <tr>
                            <th scope="col">Nama Peserta</th>
                            <th scope="col">Pakej Korban</th>
                            <th scope="col">Hari Sembelihan</th>
                            <th scope="col">Waktu Sembelihan</th>
                          </tr>
                        </thead>
                        @foreach ($kariahKorban as $value )
                        <tbody>
                            <tr>
                              <th scope="row" style="text-align: left">{{$value->peserta_name}}&nbsp;<a class="text-success mr-4" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#peserta_name-{{$value->id}}" data-placement="top" title="" data-original-title="Edit">
                                <i class="fas fa-edit" style="font-size: 10px"></i>
                            </a></th>
                              <td><p style="font-weight: bold">{{$value->pakej_korban}}</p></td>
                              <td><p style="font-weight: bold">{{$value->hari_korban}}</p></td>
                              <td><p style="font-weight: bold">{{$value->waktu_sembelihan}}</p></td>
                            </tr>
                          </tbody>
                        @endforeach
                      </table>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <table class="table table-sm text-center">
                        <thead>
                          <tr>
                            <th scope="col">Nama Pengedar</th>
                            <th scope="col">No. Telefon</th>
                            <th scope="col">Kuantiti Lembu</th>
                            <th scope="col">Harga Seekor (RM)</th>
                            <th scope="col">Wassap</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        @foreach ($kariahPengedar as $value )
                        <tbody>
                          <tr>
                            <th scope="row" style="text-align: left">{{$value->name}}</th>
                            <td><p style="font-weight: bold">{{$value->phone}}</p></td>
                            <td><p style="font-weight: bold">{{$value->available_unit}}</p></td>
                            <td><p style="font-weight: bold">{{$value->harga_pengedar}}</p></td>
                            <td><p style="font-weight: bold">{{$value->whatsapp_status}}</p></td>
                            <td><a href="kariah_pengedar_edit/{{$value->id}}"><i class="fas fa-edit" style="font-size: 20px"></i></a>&nbsp; &nbsp; <a href="kariah_pengedar_delete/{{$value->id}}"><i class="bi bi-trash" style="font-size: 20px; color: red"></i></a></td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>


    @include('footer')
    @foreach ($kariahKorban as $value)
      <div class="modal fade" id="peserta_name-{{$value->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Kemaskini Nama Peserta</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="get" action="update_peserta_name/{{$value->id}}">
             @csrf
            <div class="modal-body">
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Nama Peserta:</label>
                  <input type="text" class="form-control" id="nama_peserta" name="nama_peserta" placeholder={{$value->peserta_name}}>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn" style="background-color: #16A086; color:white">Simpan</button>
            </div>
            </form>
          </div>
        </div>
        </div>
    @endforeach
  </body>
</html>
