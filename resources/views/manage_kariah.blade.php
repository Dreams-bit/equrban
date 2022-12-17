<!doctype html>
<html lang="en">
<title>Equrban - Maklumat Kariah</title>
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Data Table-->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.jqueryui.min.css">
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.jqueryui.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.jqueryui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>




    <script>
        //#kariah
        $(document).ready(function () {
            var table = $('').DataTable({
                dom: 'Bfrtip',
                buttons: [

                {
                extend:    'excel',
                text:      '<i class="fa fa-files-o"></i> Excel',
                titleAttr: 'Excel',
                className: 'btn btn-default btn-sm',
                exportOptions: {
                    columns: ':visible'
                }
                },
                {
                extend:    'pdf',
                text:      '<i class="fa fa-file-pdf-o"></i> PDF',
                titleAttr: 'PDF',
                className: 'btn btn-default btn-sm',
                exportOptions: {
                    columns: ':visible'
                }
                },
                {
                extend:    'print',
                text:      '<i class="fa fa-print"></i> Print',
                titleAttr: 'Print',
                className: 'btn btn-default btn-sm',
                exportOptions: {
                    columns: ':visible'
                }
                },
                ],

                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'All'],
                ],
            });

            table.buttons().container()
                .insertBefore( '#example_filter' );
            });

        </script>

    <style>
        body{
    background:#f3f3f3;
    color: #616f80;
}
.card {
    border: none;
    margin-bottom: 24px;
    -webkit-box-shadow: 0 0 13px 0 rgba(236,236,241,.44);
    box-shadow: 0 0 13px 0 rgba(236,236,241,.44);
}

.avatar-xs {
    height: 2.3rem;
    width: 2.3rem;
}
    </style>
  </head>
  <body style="min-height: 100vh">

     <!-- Header -->
     @include('admin_component_header')

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
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-archive text-primary h4 ml-3"></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">{{$jumlah_kariah_berdaftar}}</h5>
                        <p class="text-muted mb-0">Jumlah Kariah Berdaftar</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-th text-primary h4 ml-3"></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">{{$jumlah_kariah_lelaki}}</h5>
                        <p class="text-muted mb-0">Lelaki</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-file text-primary h4 ml-3"></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">{{$jumlah_kariah_perempuan}}</h5>
                        <p class="text-muted mb-0">Perempuan</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-file text-primary h4 ml-3"></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">250</h5>
                        <p class="text-muted mb-0">Jumlah Penduduk Amanjaya</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title mb-0">Maklumat Kariah</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive project-list">
                            <table id="kariah" class="table project-table table-centered table-nowrap">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Nama</th>
                                        <th style="text-align:center" scope="col">Nombor IC</th>
                                        <th style="text-align:center" scope="col">No Telefon</th>
                                        <th style="text-align:center" scope="col">Emel</th>
                                        <th style="text-align:center" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kariah as $value)
                                    <tr>
                                        <th scope="row">{{$value->id}}</th>
                                        <td style="text-align:center">
                                            <div class="team">
                                                <a href="javascript: void(0);" class="team-member" data-toggle="tooltip" data-placement="top" title="" data-original-title="Roger Drake">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="rounded-circle avatar-xs" alt="" />
                                                </a>
                                            </div>
                                        </td>
                                        <td><p style="font-weight: bold">{{$value->name}}</p></td>
                                        <td style="text-align:center"><p style="font-weight: bold">{{$value->ic_number}}</p></td>
                                        <td style="text-align:center"><p style="font-weight: bold">{{$value->phone}}</p></td>
                                        <td style="text-align:center"><p style="font-weight: bold">{{$value->email}}</p></td>
                                        <td style="text-align:center">
                                            <div class="action">
                                                {{-- <a href="manage_kariah_edit/{{$value->id}}" class="text-success mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"> <i class="fa fa-pencil h5 m-0"></i></a> --}}
                                                <a href="manage_kariah_delete/{{$value->id}}" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"> <i class="fa fa-remove h5 m-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end project-list -->
                    </div>

                </div>

            </div>
        </div>
        {{-- <div class="float-right">
            <button class="btn mb-3" data-bs-toggle="modal" data-bs-target="#ahli_baru"> <i class="fa fa-add "></i> Ahli Baru</button>
        </div> --}}
    </div>
    <div class="modal fade" id="ahli_baru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="color: #009E60">Register</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="m-sm-4">
                <div class="tab-pane active" id="ex3-tabs-1">
                    <article id='tabs-1'>
                        <form method="POST" action="{{url('registerKariah')}}">
                            @csrf
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputName" style="font-size: 15px">Nama</label>
                                <input type="text" class="form-control" name="inputName" id="inputName" style="background-color: #ECECEC; border:0px; height: 45px">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputIC_number" style="font-size: 15px">Nombor IC</label>
                                <input type="text" class="form-control" name="inputIC_number" id="inputIC_number" style="background-color: #ECECEC; border:0px; height: 45px">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputPhone" style="font-size: 15px">No. Telefon</label>
                                <input type="text" class="form-control" name="inputPhone" id="inputPhone" style="background-color: #ECECEC; border:0px; height: 45px">
                              </div>
                              <div class="form-group col-md-3">
                                <label for="inputCity" style="font-size: 15px">Bandar</label>
                                <input type="text" class="form-control" name="inputCity" id="inputCity" style="background-color: #ECECEC; border:0px; height: 45px">
                              </div>
                              <div class="form-group col-md-3">
                                <label for="inputState" style="font-size: 15px">Negeri</label>
                                <select name="inputState" id="inputState" class="form-control" style="background-color: #ECECEC; border:0px; height: 45px">
                                  <option selected>Choose...</option>
                                  <option>Kedah</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputAddress1" style="font-size: 15px">Alamat Line 1</label>
                              <input type="text" class="form-control" name="inputAddress1" id="inputAddress1" style="background-color: #ECECEC; border:0px; height: 45px">
                            </div>
                            <div class="form-group">
                              <label for="inputAddress2" style="font-size: 15px">Alamat Line 2</label>
                              <input type="text" class="form-control" name="inputAddress2" id="inputAddress2" style="background-color: #ECECEC; border:0px; height: 45px">
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail" style="font-size: 15px">Emel</label>
                                <input type="email" class="form-control" name="inputEmail" id="inputEmail" style="background-color: #ECECEC; border:0px; height: 45px">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword" style="font-size: 15px">Password</label>
                                <input type="password" class="form-control" name="inputPassword" id="inputPassword" style="background-color: #ECECEC; border:0px; height: 45px">
                              </div>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    @include('footer')

  </body>
</html>
