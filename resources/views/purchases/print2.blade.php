<html>

<head>
    <title>Porto Admin - Invoice Print</title>
    <!-- Web Fonts  -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" />

    <!-- Invoice Print Style -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/invoice-print.css') }}" />

    <style>
        @media print {
            html {
                zoom: 80%;
            }
        }

        /* 
        div.a {
            display: inline;
                     
            padding: 5px;
            border: 1px solid blue;
            background-color: yellow;
        }

        div.b {
            display: inline-block;
            
            padding: 5px;
            border: 1px solid blue;
            background-color: green;
        } */
    </style>


</head>

<body>
    <div class="invoice">
        <header class="clearfix">
            <div class="row">



                <div class="a col-sm-7 text-left mt-md mb-md">
                    <img class="pull-left" src="{{ asset('img/logo.png') }}" alt="KIN" />
                    <address class="h6">
                        <b class="h4">&nbspPT. KARYA INFORMASI NUSANTARA</b>
                        <br />
                        &nbsp Pergudangan Infinia Park - block A27 Jl. Dr. Sahardjo No.45, Manggarai, Tebet
                        <br />
                        &nbsp Jakarta Selatan 12850, Indonesia, www.informasinusantara.co.id
                        <br />
                        &nbsp Telp : +62 21 4704 674, sales@informasinusantara.co.id
                        <br />
                        &nbsp NPWP : 31.544.687.2-015.000
                    </address>
                </div>


            </div>
        </header>


        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
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
                    <!-- <strong>Admin, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        Phone: (804) 123-5432<br>
                        Email: info@almasaeedstudio.com -->
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <br>
                <strong>Alamat Kirim Dokumen dan Barang :</strong>
                <address>
                    Jl. kayu putih tengah IV C No. 61 RT/RW 002/007 Pulogadung<br>
                    7Kec. Pulogadung kota jakarta timur Kode pos 13260<br>

                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Purchase Order : {{ $purchases->po_no }}</b><br>
                <br>
                <b>Time of Delivery :</b> {{ $purchases->time_of_delivery }}<br>
                <b>Payment :</b> {{ $purchases->payment_type }}<br>

            </div>
            <!-- /.col -->
        </div>
        <!-- <div class="bill-info">
            <div class="row">

                <div class="col-md-4">
                    <div class="bill-to">
                        <p class="h6 mb-xs text-dark text-semibold">To:</p>
                        <address class="h6">
                            @foreach ($companies as $comp)
                            @if($comp->id == $purchases->company_id)
                            {{ $comp->description }}                        
                            <br>
                            {{ $comp->address1 }}
                            <br>
                            {{ $comp->address2 }} {{ $comp->kode_pos }}
                            <br><br>
                            Phone : {{ $comp->no_telp }}
                            <br>
                            Att : {{ $comp->contact }}

                            @endif
                            @endforeach
                        </address>
                    </div>
                </div>

                <div class="col-md-4">
                   
                </div>
                <div class="col-md-4">

                    <address>
                        <div class="">
                            <span class="text-dark ">Purchase Order :</span>
                            <p class="mb-none"><span class="text-dark">Time of Delivery :</span></p>
                            <p class="mb-none"><span class="text-dark">Payment :</span> </p>
                        </div>

                        <div class="col-md-4 text-left">
                            {{ $purchases->po_no }}
                            <p class="mb-none">{{ $purchases->time_of_delivery }}</p>
                            <p class="mb-none">{{ $purchases->payment_type }}</p>

                        </div>
                    </address>


                </div>


           



            </div>
        </div> -->

        <div class="table-responsive">
            <table class="table invoice-items">
                <thead>
                    <tr class="h6 text-dark">
                        <th class="text-semibold" width=5%>#</th>
                        <th class="text-semibold" width=20%>Part Number</th>
                        <th class="text-semibold" width=40%>Description</th>
                        <th class="text-center text-semibold" width=10%>Qty</th>
                        <th class="text-center text-semibold">Price</th>
                        <th class="text-center text-semibold">Total</>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchasesdetail as $key => $detail)
                    <tr class="h6">
                        <td>{{ ++$key }}</td>
                        <td class="text-semibold text-dark">{{ $detail->name}}</td>
                        <td>{{ $detail->detail }}</td>
                        <td class="text-center">{{ number_format($detail->qty) }}</td>
                        <td class="text-right">{{ number_format($detail->unit_price) }}</td>
                        <td class="text-right">{{ number_format($detail->total_price) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="invoice-summary">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table h6 text-dark">
                        <tbody>
                            <tr class="b-top-none h6">
                                <td colspan="2">Subtotal</td>
                                <td class="text-right">{{ number_format($purchases->sub_total) }}</td>
                            </tr>
                            @if(($purchases->discount) > 0)
                            <tr class="h6">
                                <td colspan="2">Discount</td>
                                <td class="text-right ">{{ number_format($purchases->discount) }}</td>
                            </tr>
                            @endif

                            <tr class="h6">
                                <td colspan="2">Tax</td>
                                <td class="text-right h6">{{ number_format($purchases->ppn_amount) }}</td>
                            </tr>
                            <tr class="h6">
                                <td colspan="2" cl>Grand Total</td>
                                <td class="text-right">{{ number_format($purchases->grand_total) }}</td>
                            </tr>
                        </tbody>
                    </table>






                </div>
            </div>
        </div>

        </br></br>

        <table class="h6">
            <thead>
                <tr>
                    <td class="text-center" width=30%></td>
                    <td class="text-center" width=30></td>
                    <td class="text-center" width=75%></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center h6">Diterima oleh </td>
                    <td></td>
                    <td class="text-right h6">Jakarta, {{ $purchases->date }}</td>

                </tr>
                <tr>
                    <td class="text-center h6">Tanggal :</td>
                    <td></td>
                    <td class="text-right h6">Ordered By</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-right h6">PT. KARYA INFORMASI NUSANTARA</td>
                </tr>
                <tr>
                    <td>&nbsp</td>
                </tr>
                <tr>
                    <td>&nbsp</td>
                </tr>
                <tr>
                    <td>&nbsp</td>
                </tr>
                <tr>
                    <td>&nbsp</td>
                </tr>
                <tr>
                    <td class="text-center h6">Mohon ditandatangani dan dikirim</td>
                    <td>&nbsp</td>
                    <td class="text-right h6">{{ $user =  Auth::user()->name }}</td>
                </tr>

            </tbody>

        </table>

        <br><br><br>
        <!-- <p class="h6 text-center"> Mohon ditandatangani dan dikirim</p> -->




        <!-- </br></br></br></br></br></br></br></br>

        <div class="col-md-4">
            <hr size="10">
            <p class="text-center">Mohon ditandatangani dan dikirim</p>
        </div>

        </br></br>
        <div class="col-md-8">
            <p class="text-right">Siti Khalifah</p>
        </div> -->


    </div>

    <script>
        window.print();
    </script>
</body>

</html>