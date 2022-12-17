<!doctype html>
<html lang="en">
<title>Equrban - Maklumat Pengedar</title>
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
        $(document).ready(function () {
            var table = $('#pengedar').DataTable({
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
background-color: #f7f7fc;
}

.timeline {
    list-style-type: none;
    position: relative
}

.timeline:before {
    background: #dee2e6;
    left: 9px;
    width: 2px;
    height: 100%
}

.timeline-item:before,
.timeline:before {
    content: " ";
    display: inline-block;
    position: absolute;
    z-index: 1
}

.timeline-item:before {
    background: #fff;
    border-radius: 50%;
    border: 3px solid #3b7ddd;
    left: 0;
    width: 20px;
    height: 20px
}
.card {
    margin-bottom: 24px;
    box-shadow: 0 0 0.875rem 0 rgba(33,37,41,.05);
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: initial;
    border: 0 solid transparent;
    border-radius: .25rem;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}
.card-header:first-child {
    border-radius: .25rem .25rem 0 0;
}
.card-header {
    border-bottom-width: 1px;
}
.pb-0 {
    padding-bottom: 0!important;
}
.card-header {
    padding: 1rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 0 solid transparent;
}
    </style>
  </head>
  <body style="min-height: 100vh">

     <!-- Header -->
     @include('admin_component_header')

    <div class="container">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="card col-xl-3 col-md-6">
                    <div class="card-body ">
                        <div class="float-right">
                            <i class="fa-solid fa-arrow-down text-primary fa-2x me-2"></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">RM {{$harga_terendah }}</h5>
                        <p class="text-muted mb-0">Harga Terendah</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="fa-solid fa-arrow-up text-primary fa-2x me-2"></i>
                            </div>
                            <h5 class="font-size-20 mt-0 pt-1">RM {{$harga_tertinggi}}</h5>
                            <p class="text-muted mb-0">Harga Tertinggi</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <div class="float-right">

                                <i class="icofont-cow  text-primary fa-2x me-4"></i>
                            </div>
                            <h5 class="font-size-20 mt-0 pt-1">{{$jumlah_lembu_pengedar}}</h5>
                            <p class="text-muted mb-0">Jumlah Kuantiti Lembu Pengedar</p>
                        </div>
                    </div>
                </div>
                <div class="card col-xl-3 col-md-6">
                    <div class="card-body ">
                        <div class="float-right">
                            <i class="fa Example of calculator fa-calculator text-primary fa-2x me-2 "></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">{{$jumlah_pengedar}}</h5>
                        <p class="text-muted mb-0">Jumlah Pengedar</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid p-0">
            <div class="row">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h2 class="card-title mb-0">Maklumat Pengedar</h2>
                        </div>
                        <div class="card-body ">
                            <table id="pengedar" class="table project-table table-centered table-nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name Pengedar</th>
                                        <th style="text-align:center">No Telefon</th>
                                        <th style="text-align:center">Harga Pengedar</th>
                                        <th style="text-align:center">Kuantiti Lembu</th>
                                        <th style="text-align:center">WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($manage_pengedar as $value )
                                    <tr>
                                        <td style="text-align:center">
                                            @if(str_contains(strtolower($value->name), 'binti'))
                                                <img src="https://bootdey.com/img/Content/avatar/avatar8.png" width="32" height="32" class="rounded-circle my-n1" alt="Avatar">
                                            @else
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="32" height="32" class="rounded-circle my-n1" alt="Avatar">
                                            @endif
                                        </td>
                                        <td><p style="font-weight: bold">{{$value -> name}}</p></td>
                                        <td style="text-align:center"><p style="font-weight: bold">{{$value -> phone}}</p></td>
                                        <td style="text-align:center"><p style="font-weight: bold">RM {{$value -> harga_pengedar}}.00</p></td>
                                        <td style="text-align:center"><p style="font-weight: bold">{{$value -> available_unit}}</p></td>
                                        <td style="text-align:center">
                                            @if($value -> whatsapp_status == 'Yes')
                                            <a href='https://wa.me/6{{$value->phone}}'><button class="badge bg-success bg-round bg-simple">Active&nbsp;&nbsp;<i class="fab fa-whatsapp fa-lg"></i></button></a>
                                            @else
                                            <span class="badge bg-danger">Not Active</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
    </div>
    @include('footer')
  </body>
</html>
