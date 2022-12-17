<!doctype html>
<html lang="en">
<title>Equrban - Admin Tempahan Korban</title>
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
            var table = $('#tempahan_korban').DataTable({
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
            <div class="col-xl-4 col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-archive text-primary h4 ml-3"></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">{{$jumlah_tempahan_korban}}</h5>
                        <p class="text-muted mb-0">Jumlah Tempahan Korban</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-th text-primary h4 ml-3"></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">{{$jumlah_tempahan_korban_paid}}</h5>
                        <p class="text-muted mb-0">Completed Payment</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-file text-primary h4 ml-3"></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">{{$jumlah_tempahan_korban_pending}}</h5>
                        <p class="text-muted mb-0">Pending Payment</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h2 class="card-title mb-3  ">Maklumat Korban</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive project-list">
                            <table id="tempahan_korban" class="table project-table table-centered table-nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th style="text-align:center">Nama Peserta</th>
                                        <th style="text-align:center">Pakej Korban</th>
                                        <th style="text-align:center">Kariah</th>
                                        <th style="text-align:center">Number IC</th>
                                        <th style="text-align:center">No Telefon</th>
                                        <th style="text-align:center">Receipt</th>
                                        <th></th>
                                        <th style="text-align:center">Status Pembayaran</th>
                                        <th style="text-align:center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($manage_tempahan_korban as $value)
                                    <tr>
                                        <td scope="row">{{$value->id}}</th>
                                        <td><p style="font-weight: bold">{{$value->peserta_name}}</p></td>
                                        <td><p style="font-weight: bold">{{$value->pakej_korban}}</p></td>
                                        <td><p style="font-weight: bold">{{$value->name}}</p></td>
                                        <td style="text-align:center"><p style="font-weight: bold">{{$value->ic_number}}</p></td>
                                        <td style="text-align:center"><p style="font-weight: bold">{{$value->phone}}</p></td>
                                        <td style="text-align:center"><p style="font-weight: bold">{{$value->receipt_name}}</p></td>
                                        {{-- <a href="downloadFile/{{$value->id}}">VIEW<a> --}}
                                        <td style="text-align:center">
                                            @if($value->file_path == 'FPX Payment')
                                            <a href="https://dev.toyyibpay.com/index.php/access/logout"  target="_blank"><img class="logo horizontal-logo" src="{{URL::asset('/images/toyyibpay.png')}}" width="145 " height="190" alt=""><a>
                                            @else
                                            <a href="viewFile/{{$value->id}}" target="_blank"><i class="fa fa-download" style="font-size:24px"></i><a>
                                            @endif
                                        </td>
                                        <td style="text-align:center">
                                            @if ($value->status_pembayaran == 'pending')
                                                <span class="badge badge-warning badge-pill px-25">Pending</span>
                                            @else
                                                <span class="badge badge-success badge-pill px-25">Paid</span>
                                            @endif
                                        </td>
                                        <td style="text-align:center">
                                                <div class="action">
                                                    <a class="text-success mr-4" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#payment_update-{{$value->id}}" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil h5 m-0"></i></a>
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

    @foreach ($manage_tempahan_korban as $value)
      <div class="modal fade" id="payment_update-{{$value->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tetapkan Status Pembayaran</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="status_pembayaran/{{$value->id}}">
             @csrf
            <div class="modal-body">
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Status Pembayaran:</label>
                  <select id="inputState" name="status_pembayaran" class="form-control" required style="background-color: #ECECEC; border:0px; height: 45px">
                    <option selected disabled value="">status pembayaran</option>
                    <option value="paid">Paid</option>
                    <option value="pending">Pending</option>
                </select>
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
