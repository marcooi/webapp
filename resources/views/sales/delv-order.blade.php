<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Print Delivery Order</title>
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

        <div >
            <img src="{{ asset('img/logo2.png') }}" alt="KIN" />
            <hr class="style15">
        </div>

        <section class="invoice">
            <div class="row invoice-info">
                <div class="col-sm-5 invoice-col">
                    Ship To :
                    <address>
                        <strong>{{ $header->description }}</strong><br><br>

                        {{ $header->address1 }}<br>
                        {{ $header->address2 }} <br>
                        {{ $header->kota }} {{ $header->kode_pos }}

                    </address>
                </div>



                <div class="col-sm-5 invoice-col">
                    <br>
                    <address>
                        <strong>{{ $header->description }}</strong><br><br>
                        {{ $shipping->address1 }}<br>
                        {{ $shipping->address2 }} <br>
                        {{ $header->kota }} {{ $header->kode_pos }}

                    </address>
                </div>

                <div class="col-sm-2">
                    <u><strong>DELIVERY ORDER</strong></u>
                    <!-- <p style="text-center">Center this text!</p> -->
                    <table>
                        <tr>
                            <td>
                                <div class="text-left">Nomor </div>
                            </td>
                            <td>
                                <div class="text-center">&nbsp: </div>
                            </td>
                            <td>
                                <div class="text-left" style="margin-left:1em">{{ $header->delivery_no }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text-left">Date</div>
                            </td>
                            <td>
                                <div class="text-center">&nbsp: </div>
                            </td>
                            <td>
                                <div class="text-left" style="margin-left:1em">{{ tanggal_local($header->delivery_date) }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text-left">PO No.</div>
                            </td>
                            <td>
                                <div class="text-center">&nbsp: </div>
                            </td>
                            <td>
                                <div class="text-left" style="margin-left:1em">{{ $header->po_no }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text-left">PO Date.</div>
                            </td>
                            <td>
                                <div class="text-center">&nbsp: </div>
                            </td>
                            <td>
                                <div class="text-left" style="margin-left:1em">{{ tanggal_local($header->po_date) }}</div>
                            </td>
                        </tr>

                    </table>

                </div>

        </section>

        <br>


        <div class="table-responsive">
            <table class="table table-bordered invoice-items">
                <thead>


                    <tr class="h6 text-dark">
                        <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=5%>#</th>
                        <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=48%>Description</th>
                        <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=5%>Qty</th>
                        <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=5%>UM</th>
                        <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=5%>SO No.</th>
                        <!-- <th colspan="1" class="text-center text-semibold" width=11%>Unit Price</th>
                            <th colspan="1" class="text-center text-semibold" width=11%>Harga Jual</> -->
                    </tr>
                    <!-- <tr>
                            <th class="text-center ">IDR</th>
                            <th class="text-center ">IDR</th>

                        </tr> -->
                </thead>
                <tbody>
                    @foreach ($details as $key => $detail)
                    <tr class="h6">
                        <td class="text-center ">{{ ++$key }}</td>
                        <td class="text-semibold text-dark">{{ $detail->name}}</td>

                        <td class="text-center">{{ format_uang($detail->qty) }}</td>
                        <td class="text-center">U</td>
                        <td class="text-center"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



        <br /><br /><br />

        <div class="row">
            <div class="col-4 text-center">
                <div class="text-left">Message :</div>
            </div>

            <div class="col-3 text-center" >
                Good Received by<br />
            </div>

            <div class="col-5 text-center">
                PT. KARYA INFORMASI NUSANTARA<br />
            </div>

        </div>

        <br /><br /><br /><br /><br />
        
        <div class="row">
            <div class="col-4">

            </div>

            <div class="col-3 text-center">
                <hr style="width:50%;">
            </div>

            <div class="col-5 text-center">
                <hr style="width:50%;">
            </div>
        </div>



    </div>

    </div>
    <script type="text/javascript">
        window.addEventListener("load", window.print());
    </script>
</body>

</html>