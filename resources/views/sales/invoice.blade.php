<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Print Invoice</title>
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
                <div class="col-sm-5 invoice-col">
                    Nama Pembeli :
                    <address>
                        <strong>{{ $header->description }}</strong><br><br>
                        Alamat :<br>
                        {{ $header->address1 }}<br>
                        {{ $header->address2 }} {{ $header->kode_pos }}<br><br>

                    </address>
                </div>

                <div class="col-sm-5 invoice-col">
                    Dikirim kepada :
                    <address>
                        <strong>{{ $header->description }}</strong><br>
                        {{ $shipping->address1 }}<br>
                        {{ $shipping->address2 }} {{ $shipping->kode_pos }}<br><br>
                        Phone : {{ $shipping->no_telp }}<br>
                        Fax : {{ $shipping->no_fax }}
                    </address>
                </div>

                <div class="col-sm-2">
                    <u><strong>SALES INVOICE</strong></u>
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
                                <div class="text-left" style="margin-left:1em">{{ $header->invoice_no }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text-left">Tanggal</div>
                            </td>
                            <td>
                                <div class="text-center">&nbsp: </div>
                            </td>
                            <td>
                                <div class="text-left" style="margin-left:1em">{{ tanggal_local($header->invoice_date) }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text-left">No. PO</div>
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
                                <div class="text-left">Tgl. PO</div>
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

                <!-- <div class="col-sm-4 invoice-col text-right">
                    <div class="bill-data text-right">

                        <u><strong>SALES INVOICE</strong></u><br>
                        <span class="text-dark">Nomor :</span>
                        <span class="value">{{ $header->invoice_no }}</span></br>

                        <span class="text-dark">Tanggal :</span>
                        <span class="value">{{ date('d-M-y', strtotime($header->invoice_date)) }}</span></br>

                        <span class="text-dark">No. PO :</span>
                        <span class="value">{{ $header->po_no }}</span></br>

                        <span class="text-dark">Tgl. PO :</span>
                        <span class="value">{{ date('d-M-y', strtotime( $header->po_date)) }}</span> <br>

                        <div class="left text-right" id="l1">1</div>
                        <div class="right text-left" id="r1">2</div>

                    </div>
                </div> -->

            </div>

            <br>


            <div class="table-responsive">
                <table class="table table-bordered invoice-items">
                    <thead>


                        <tr class="h6 text-dark">
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=5%>#</th>
                            <!-- <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=20%>Part Number</th> -->
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=48%>Description</th>
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=5%>Qty</th>
                            <th colspan="1" class="text-center text-semibold" width=11%>Unit Price</th>
                            <th colspan="1" class="text-center text-semibold" width=11%>Harga Jual</>
                        </tr>
                        <tr>
                            <th class="text-center ">IDR</th>
                            <th class="text-center ">IDR</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($details as $key => $detail)
                        <tr class="h6">
                            <td class="text-center ">{{ ++$key }}</td>
                            <td class="text-semibold text-dark">{{ $detail->name}}</td>

                            <td class="text-center">{{ format_uang($detail->qty) }}</td>
                            <td class="text-center">{{ format_uang($detail->unit_price) }}</td>
                            <td class="text-center">{{ format_uang($detail->total_price) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>






            <div class="row">

                <div class="col-9"></div>

                <div class="col-3">
                    <div class="table-responsive">
                        <table class="table ">
                            <tr>
                                <th class="text-right" style="width:60%">Harga Jual :</th>
                                <td>{{ format_uang($header->sub_total) }}</td>
                            </tr>

                            <tr>
                                <th class="text-right">Potongan Harga :</th>

                                <td>@if(($header->discount) > 0)
                                    {{ format_uang($header->discount) }}
                                    @endif</td>

                            </tr>

                            <tr>
                                <th class="text-right" style="width:50%">DPP :</th>
                                <td>{{ format_uang($header->sub_total) }}</td>
                            </tr>
                            <tr>
                                <th class="text-right">PPN 10% :</th>
                                <td>{{ format_uang($header->ppn_amount) }}</td>
                            </tr>
                            <tr>
                                <th class="text-right">Shipping :</th>

                                <td> @if(($header->discount) > 0)
                                    {{ format_uang($header->shipping_fee) }}
                                    @endif</td>

                            </tr>
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

                <div class="col-4 text-center">
                    <table class="table-borderless">
                        <tr>
                            <th >
                                <div class="text-left"><strong><u> Terbilang </u></strong></div>
                            </th>
                        </tr>
                        <tr>
                            <td ><strong> {{ terbilang($header->grand_total) }}</strong></td>
                        </tr>
                    </table>
                    <!-- <div class="text-left"><u> Terbilang </u></div>
                    <div class="text-left"><strong> {{ terbilang($header->grand_total) }}</strong></div> -->
                </div>

                <div class="col-3">
                </div>

                <div class="col-5 text-right">
                    Jakarta, {{ tanggal_local($header->invoice_date) }}<br />

                    <!-- <br /><br /><br /><br /><br />

                    <u>{{ $user =  Auth::user()->name }}</u><br />

                    Accounting -->
                </div>

            </div>

            <br>
            <div class="row">
                <div class="col-4 ">
                    <table>
                        <tr>
                            <th class="table table-active table-bordered"> Pembayaran ditransfer ke :
                                <address>
                                    <strong>PT. KARYA INFORMASI NUSANTARA</strong><br>
                                    1. MayBank Pemuda, Jakarta (IDR) <br>
                                    <strong>A/C 2104246119</strong>
                                </address>
                            </th>
                        </tr>
                    </table>

                </div>

            </div>



            <div class="row">
                <div class="col-12 text-right">
                    <u>{{ $user =  Auth::user()->name }}</u><br />
                    Accounting
                </div>
            </div>

        </section>
    </div>


    <script type="text/javascript">
        window.addEventListener("load", window.print());
    </script>
</body>

</html>