<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Print Tanda Terima Invoice</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 4 -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
        @media print {
            html {
                zoom: 90%;
            }
        }

        hr.style15 {
            border-top: 4px double #8c8b8b;
            text-align: center;
        }

        div.left {
            float: left;
            clear: both;
        }
    </style>
</head>

<body>
    <div class="wrapper">


        <div class="ccontainer ">
            <img src="{{ asset('img/logo2.png') }}" alt="KIN" />
            <hr class="style15">
        </div>

        <section class="invoice">
            <div class="row invoice-info">
                <div class="col-sm-10 invoice-col">
                    Kepada Yth,
                    <address>
                        <strong>{{ $header->description }}</strong><br><br>
                        Alamat :<br>
                        {{ $header->address1 }}<br>
                        {{ $header->address2 }} {{ $header->kode_pos }}<br><br>

                    </address>
                </div>



                <div class="col-sm-2">
                    <u><strong>TANDA TERIMA INVOICE</strong></u>
                    <!-- <p style="text-center">Center this text!</p> -->
                    <table>
                        <tr>
                            <td>
                                <div class="text-left">Tanggal</div>
                            </td>
                            <td>
                                <div class="text-center">&nbsp: </div>
                            </td>
                            <td>
                                <div class="text-left" style="margin-left:1em">{{ tanggal_local($header->tt_invoice_date) }}</div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="text-left">Nomor </div>
                            </td>
                            <td>
                                <div class="text-center">&nbsp: </div>
                            </td>
                            <td>
                                <div class="text-left" style="margin-left:1em">{{ $header->tt_invoice_no }}</div>
                            </td>
                        </tr>


                    </table>

                </div>



            </div>

            <br>

            <div class="row" style="margin-left:1em">
                Bersama ini kami kirimkan invoice sebagai berikut
            </div>
            <div class="table-responsive">
                <table class="table table-bordered invoice-items">
                    <thead>
                        <tr class="h6 text-dark">
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=5%>#</th>
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle">TANGGAL</th>
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle">INVOICE</th>
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle">PO NUMBER</th>
                            <th colspan="2" class="text-center text-semibold" style="vertical-align: middle">AMOUNT</th>

                        </tr>
                        <tr>
                            <th class="text-center ">Rupiah</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="h6">
                            <td class="text-center ">1</td>
                            <td class="text-center">{{ tanggal_local($header->invoice_date) }}</td>
                            <td class="text-center">{{ $header->invoice_no }}</td>
                            <td class="text-center">{{ $header->po_no }}</td>
                            <td class="text-center">{{ format_uang($header->grand_total) }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>





            <br /><br /><br /><br />
            <div class="row">

                <div class="col-9"></div>

                <div class="col-3">
                    <div class="table-responsive">
                        <table class="table ">

                            <tr>
                                <th class="text-right">Grand Total :</th>
                                <td>{{ format_uang($header->grand_total) }}</td>
                            </tr>

                        </table>
                    </div>



                    <div class="row"></div>


                </div>
            </div>

            <br /><br /><br />

            <div class="row">

                <div class="col-4 text-center" >
                    Yang Menerima
                </div>

                <div class="col-3">
                </div>

                <div class="col-5 text-center">
                    Hormat Kami,<br />

                </div>

            </div>




            <br /><br /><br /><br />
            <div class="row">
                <div class="col-4 text-center">
                    <hr style="width:50%;text-align:center;margin-left:2">
                </div>
                <br />

                <div class="col-3">
                </div>

                <div class="col-5 text-center">
                    <u>{{ $user =  Auth::user()->name }}</u>
                </div>
            </div>

            <div class="row">
            <div class="col-4 " style="margin-left:8em">Tanggal :</div>
            </div>

        </section>
    </div>


    <script type="text/javascript">
        window.addEventListener("load", window.print());
    </script>
</body>

</html>