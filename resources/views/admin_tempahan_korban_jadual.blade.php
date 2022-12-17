<!doctype html>
<html lang="en">
<title>Equrban - Jadual Tempahan Korban</title>
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
            <div class="col-xl-9 col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-archive text-primary h4 ml-3"></i>
                        </div>
                        <p class="text-muted mb-1"> Ini daripada hadis yang Rasululllah SAW bersabda:</p>
                        <h5 class="font-size-20 mt-1 m-b1 pt-1" style="text-align: center">          قَوْمِي إِلَى أُضْحِيَّتِكَ فَاشْهَدِيهَا فَإِنَّ لَكِ بِأَوَّلِ قَطْرَةٍ تَقْطُرُ مِنْ دَمِهَا يُغْفَرُ لَكِ مَا سَلَفَ مِنْ ذُنُوبُكَ. قَالَتْ: يَا رَسُولَ اللَّهِ، هَذَا لَنَا أَهْلَ الْبَيْتِ خَاصَّةً أَوْ لَنَا وَلِلْمُسْلِمِينَ عَامَّةً؟ قَالَ: بَلْ لَنَا وَلِلْمُسْلِمِينَ عَامَّةً</h5>
                        <p class="text-muted mb-1" style="text-align: center"> Maksudnya: “Bangun dan pergilah ke tempat penyembelihan korban kamu dan saksikanlah sendiri kerana dengan titisan darahnya yang pertama akan diampunkan dosa kamu yang terdahulu. Fatimah bertanya: Wahai Rasulullah! Ini adakah untuk kita ahli Bait sahaja atau untuk kita dan orang Islam keseluruhannya? Jawab Rasulullah SAW: Bahkan untuk kita dan orang Islam keseluruhannya”.</p>
                        <p class="text-muted mb-0" style="text-align: right">Riwayat al-Hakim di dalam al-Mustadrak (7525)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-archive text-primary h4 ml-3"></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">{{$jumlah_tempahan_korban_jadual}}</h5>
                        <p class="text-muted mb-0">Unassigned Korban</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h2 class="card-title mb-3">Waktu Sembelihan Korban</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive project-list">
                            <table id="tempahan_korban" class="table project-table table-centered table-nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th style="text-align:center">Nama Peserta</th>
                                        <th style="text-align:center">Pakej Korban</th>
                                        <th style="text-align:center">No Telefon</th>
                                        <th style="text-align:center">Hari</th>
                                        <th style="text-align:center">Tarikh/Waktu</th>
                                        <th style="text-align:center">Action</th>
                                    </tr>
                                </thead>
                                @foreach ($jadual_tempahan_korban as $value )
                                <tbody>
                                    <tr>
                                        <td scope="row">1</th>
                                        <td><p style="font-weight: bold" >{{$value->peserta_name}}</p></td>
                                        <td style="text-align:center"><p style="font-weight: bold">{{$value->pakej_korban}}</p></td>
                                        <td style="text-align:center"><p style="font-weight: bold">{{$value->phone}}</p></td>
                                        <td style="text-align:center"><p style="font-weight: bold">{{$value->hari_korban}}</p></td>
                                        <td style="text-align:center"><p style="font-weight: bold">{{$value->waktu_sembelihan}}</p></td>
                                        <td style="text-align:center">
                                            <div class="action">
                                                <a class="text-success mr-4" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#payment_update-{{$value->id}}" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil h5 m-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
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
    @foreach ($jadual_tempahan_korban as $value)
      <div class="modal fade" id="payment_update-{{$value->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tetapkan Waktu Sembelihan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="waktu_sembelihan/{{$value->id}}">
             @csrf
            <div class="modal-body">
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Hari Sembelihan:</label>
                  <select id="inputState" name="hari_sembelihan" class="form-control" required style="background-color: #ECECEC; border:0px; height: 45px">
                    <option selected disabled value=""></option>
                    <option value="Hari Raya Pertama">Hari Raya Pertama</option>
                    <option value="Hari Raya Kedua">Hari Raya Kedua</option>
                    <option value="Hari Raya Ketiga">Hari Raya Ketiga</option>
                </select>
                </div>
                <div class="mb-3">
                    <label for="appt" class="col-form-label">Waktu Sembelihan:</label>
                    <input type="time" id="appt" name="waktu_sembelihan" required>
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
  <script>
    function getValue(){
        var time = document.getElementById("appt").value;
        alert(time);
    }
  </script>
</html>
