@extends('layouts.app')


@section('content')


<section class="body">

    <section class="panel">
        <div class="panel-body">
            <div class="invoice">
                <header class="clearfix">
                    <div class="row">
                        </br>

                        <div class="form-group">

                            <div class="container">
                                <div class="col-md-7">

                                    <img src="{{ asset('img/logo.png') }}" alt="KIN" />

                                    <address class="ib mr-xlg">
                                        <b class="h4 text-bold">PT. KARYA INFORMASI NUSANTARA</b>
                                        <br />
                                        Pergudangan Infinia Park - block A27 Jl. Dr. Sahardjo No.45, Manggarai, Tebet
                                        <br />
                                        Jakarta Selatan 12850, Indonesia, www.informasinusantara.co.id
                                        <br />
                                        Telp : +62 21 4704 674, sales@informasinusantara.co.id
                                        <br />
                                        NPWP : 31.544.687.2-015.000
                                    </address>
                                </div>

                                <div class="col-md-5 col-md-6 ">

                                    <address class="ib ">
                                        <br /><br />
                                        <div class="text-right">
                                            <b>Alamat Kirim Barang :</b>
                                        </div>
                                        <div class="text-right">
                                            Jl. kayu putih tengah IV C No. 61 RT/RW 002/007 Pulogadung
                                        </div>

                                        <div class="text-right">
                                            Kec. Pulogadung kota jakarta timur Kode pos 13260
                                        </div>
                                    </address>

                                </div>
                            </div>
                        </div>
                    </div>
                </header>


                <div class="bill-info">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bill-to">
                                <p class="h5 mb-xs ">To:</p>
                                <address>
                                    @foreach ($companies as $comp)
                                    @if($comp->id == $purchases->company_id)

                                    <label class="text-bold">{{ $comp->description }}</label>

                                    <br />
                                    {{ $comp->address1 }}
                                    <br />
                                    {{ $comp->address2 }} {{ $comp->kode_pos }}
                                    <br /><br />
                                    Phone : {{ $comp->no_telp }}
                                    <br /><br />
                                    Att : {{ $comp->contact }}

                                    @endif
                                    @endforeach
                                </address>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bill-data text-right">

                                <address>
                                    <div class="col-md-8">
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
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table invoice-items">
                        <thead>
                            <tr class="h5 text-dark">
                                <th id="cell-id" class="text-semibold">SKU</th>
                                <th id="cell-item" class="text-semibold">Part Number</th>
                                <th id="cell-desc" class="text-semibold">Description</th>
                                <th id="cell-qty" class="text-center text-semibold">Qty</th>
                                <th id="cell-price" class="text-center text-semibold">Unit price</th>
                                <th id="cell-total" class="text-center text-semibold">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($purchasesdetail as $key => $detail)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td class=" text-dark">{{ $detail->name}}</td>
                                <td>{{ $detail->detail }}</td>
                                <td class="text-center">{{ number_format($detail->qty) }}</td>
                                <td class="text-center">{{ number_format($detail->unit_price) }}</td>
                                <td class="text-center">{{ number_format($detail->total_price) }}</td>
                            </tr>


                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="invoice-summary">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-8">
                            <table class="table h5 text-dark">
                                <tbody>
                                    <tr class="b-top-none">
                                        <td colspan="2">Total</td>
                                        <td colspan="1">Rp.</td>
                                        <td class="text-right">{{ number_format($purchases->sub_total) }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Tax</td>
                                        <td colspan="1">Rp.</td>
                                        <td class="text-right">{{ number_format($purchases->ppn_amount) }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Grand Total</td>
                                        <td colspan="1">Rp.</td>
                                        <td class="text-right">{{ number_format($purchases->grand_total) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                </br></br></br>



              

                <div class="col-md-4">
                    <br />
                    <address>
                        <p class="text-center"> Diterima oleh</p>

                        <p class="text-center"> Tanggal :</p>
                    </address>

                </div>

                <div class="col-md-8">

                    <address>
                        <p class="text-right">Jakarta, {{ $purchases->date }}</p>

                        <p class="text-right">Ordered By</p>

                        <p class="text-right">PT. KARYA INFORMASI NUSANTARA</p>

                    </address>

                </div>



                </br></br></br></br></br></br></br></br>

                <div class="col-md-4">
                    <hr size="10">
                    <p class="text-center">Mohon ditandatangani dan dikirim</p>
                </div>

                </br></br>
                <div class="col-md-8">
                    <p class="text-right">Siti Khalifah</p>
                </div>

            </div>

            </br></br>

            <!-- <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div> -->

            <div class="text-right mr-lg">
                <a href="#" class="btn btn-default"> Submit Invoice</a>
                <a href="pages-invoice-print.html" target="_blank" class="btn btn-primary ml-sm"><i class="fa fa-print"></i> Print</a>
            </div>
        </div>
    </section>

</section>



@endsection