<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Purchase Order</title>
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
                <div class="col-sm-8 invoice-col">
                    <b>QUOTATION</b><br>
                    <b>Reff : {{ $quotations->reff_no }}</b>
                    <p>
                        <address>




                            <strong>{{ $quotations->description }}</strong><br>
                            {{ $quotations->address1 }}<br>
                            {{ $quotations->address2 }} {{ $quotations->kode_pos }}<br>
                            Phone : {{ $quotations->no_telp }}<br>
                            Fax : {{ $quotations->no_fax }}<br>
                            Att : {{ $quotations->contact_person }}



                        </address>
                </div>

                <div class="col-sm-4 invoice-col text-right">
                    <b>Jakarta, &nbsp {{ tanggal_local($quotations->date) }}</b><br>

                </div>

            </div>

            <br>
            {{ $quotations->remark1 }}<br>
            {{ $quotations->remark2 }}<br><br>

            <div class="table-responsive">
                <table class="table table-bordered invoice-items">
                    <thead>


                        <tr class="h6 text-dark">
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=5%>No</th>
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=20%>Part#/SKU</th>
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=48%>Description</th>
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=5%>Qty</th>
                            <th colspan="1" class="text-center text-semibold" width=11%>Unit Price</th>
                            <th colspan="1" class="text-center text-semibold" width=11%>Total Price</>
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
                            <td>{{ $detail->detail }}</td>
                            <td class="text-center">{{ number_format($detail->qty) }}</td>
                            <td class="text-center">{{ number_format($detail->unit_price) }}</td>
                            <td class="text-center">{{ number_format($detail->total_price) }}</td>
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
                                <th class="text-right" style="width:50%">DPP :</th>
                                <td>Rp. {{ number_format($quotations->sub_total) }}</td>
                            </tr>
                            @if(($quotations->discount) > 0)
                            <tr>
                                <th class="text-right">Discount</th>
                                <td>Rp. {{ number_format($quotations->discount) }}</td>
                            </tr>
                            @endif
                            <tr>
                                <th class="text-right">PPN 10% :</th>
                                <td>Rp. {{ number_format($quotations->ppn_amount) }}</td>
                            </tr>
                            <tr>
                                <th class="text-right">Grand Total :</th>
                                <td>Rp. {{ number_format($quotations->grand_total) }}</td>
                            </tr>

                        </table>
                    </div>



                    <div class="row"></div>


                </div>
            </div>

            <br /><br /><br />

            <div class="row">

                <div class="col-9">
                    <b><u>Term and Condition</u></b> <br />
                    <ul>
                        <li>Quotation is valid 1 (one) week</li>
                        <li>All prices are tax excluded</li>
                        <li>All prices and availability can change anytime prior notice</li>
                        <li>Term of Payment : 2 weeks after invoice date</li>
                        <li>Delivery time : 3-6 weeks after PO Open</li>
                        <li>For transfer, <b>all bank fees will be borne by customer</b>, we will receive the same value with our invoice (FULLPAYMENT)</li>

                    </ul>
                </div>

                <br />



                <!-- <div class="col-6 text-right">
                    Jakarta, {{ tanggal_local($quotations->date) }}<br />
                    Ordered By, <br />
                    PT. KARYA INFORMASI NUSANTARA <br /><br /><br /><br />

                    {{ $user =  Auth::user()->name }}
                </div> -->

            </div>

            <div class="row">
                <div class="col-9">

                    Looking forward to hearing good news from you, should you have any question please feels free to call us.<br />
                    <br /><br />
                    Best Regards,<br />
                    Aris Gunawan<br />
                    <p style="color:blue"> aris.warax@gmail.com</p>                   
                    <i>Computer direct to fax, no signature needed</i>
                </div>
            </div>


        </section>
        </>


        <script type="text/javascript">
            window.addEventListener("load", window.print());
        </script>
</body>

</html>