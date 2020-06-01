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
                <div class="col-sm-7 invoice-col">
                    To :
                    <address>
                        @foreach ($companies as $comp)
                        @if($comp->id == $purchases->company_id)

                        <strong>{{ $comp->description }}</strong><br>
                        {{ $comp->address1 }}<br>
                        {{ $comp->address2 }} {{ $comp->kode_pos }}<br><br>
                        Phone : {{ $comp->no_telp }}<br>
                        Att : {{ $comp->contact }}

                        @endif
                        @endforeach

                    </address>
                </div>

                <div class="col-sm-5  text-right">
                    <b>Purchase Order : &nbsp {{ $purchases->po_no }}</b><br>
                    <br>
                    <b>Time of Delivery : </b> &nbsp {{ $purchases->time_of_delivery }}<br>
                    <b>Payment : </b> &nbsp{{ $purchases->payment_type }}<br>

                    <br>
                    <b>Alamat Kirim Barang : </b><br>
                    Jl. Kayu Putih Tengah IV C No.61 RT/RW 002/007 Pulogadung<br>
                    Kec. Pulogadung Kota Jakarta Timur Kode Pos  13260

                </div>

            </div>

            <br>
            {{ $purchases->remark1 }}<br>
            {{ $purchases->remark2 }}<br><br>

            <div class="table-responsive">
                <table class="table table-bordered invoice-items">
                    <thead>


                        <tr class="h6 text-dark">
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=5%>SKU</th>
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=20%>Part Number</th>
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=48%>Description</th>
                            <th rowspan="2" class="text-center text-semibold" style="vertical-align: middle" width=5%>Qty</th>
                            <th colspan="1" class="text-center text-semibold" width=11%>Unit / Set Price</th>
                            <th colspan="1" class="text-center text-semibold" width=11%>Total Price</>
                        </tr>
                        <tr>
                            <th class="text-center " >IDR</th>
                            <th class="text-center " >IDR</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($purchasesdetail as $key => $detail)
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
                                <th class="text-right" style="width:50%">Total :</th>
                                <td>Rp. {{ number_format($purchases->sub_total) }}</td>
                            </tr>
                            @if(($purchases->discount) > 0)
                            <tr>
                                <th class="text-right">Discount</th>
                                <td>Rp. {{ number_format($purchases->discount) }}</td>
                            </tr>
                            @endif
                            <tr>
                                <th class="text-right">Tax 10% :</th>
                                <td>Rp. {{ number_format($purchases->ppn_amount) }}</td>
                            </tr>
                            <tr>
                                <th class="text-right">Grand Total :</th>
                                <td>Rp. {{ number_format($purchases->grand_total) }}</td>
                            </tr>

                        </table>
                    </div>



                    <div class="row"></div>


                </div>
            </div>

            <br /><br /><br />

            <div class="row">
            <div class="col-md text-right">
            Jakarta, {{ $purchases->date }}<br />
            Ordered By, <br />
            PT. KARYA INFORMASI NUSANTARA <br />
            </div>
           
            </div>

            <div class="row">

                <div class="col-4 text-left">
                    Received By <br />
                     <br /> <br /><br /><br /><br />
                     Tanggal :
                     <hr width="30%" align="left">
                </div>

                <div class="col-4 text-center">
                Requester Signature <br />
                     <br /> <br /><br /><br /><br />
                     <!-- {{ $user =  Auth::user()->name }} -->
                     {{ $user =  $purchases->updated_by }}
                     <hr width="30%" >
                </div>

                <div class="col-4 text-right">                 
                    Approve Signature <br /><br /><br /><br /><br /><br />

                    <!-- {{ $user =  Auth::user()->name }} -->
                    {{ $user =  $purchases->approved_by }}
                    <hr width="30%;" align="right">
                  
                </div>

            </div>
        </section>
    </div>


    <script type="text/javascript">
        window.addEventListener("load", window.print());
    </script>
</body>

</html>